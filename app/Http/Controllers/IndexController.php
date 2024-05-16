<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function home()
    {
        $products = Product::where(function ($query) {
            $query->where('category', 'Plates/Thalis')
                ->orWhere('category', 'Bowls/Katoris')
                ->orWhere('category', 'Cup')
                ->orWhere('category', 'Spoons/Forks');
        })->get();
        $data = compact('products');
        return view('frontend.index')->with($data);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function shippingPolicy()
    {
        return view('frontend.shipping-policy');
    }

    public function returnPolicy()
    {
        return view('frontend.return-policy');
    }

    public function temsOfUse()
    {
        return view('frontend.terms-of-use');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function testimonials()
    {
        return view('frontend.testimonials');
    }

    public function quality()
    {
        return view('frontend.quality');
    }

    public function whitePlate($category)
    {
        $whitePlates = Product::where('category', $category)->get();
        return view('frontend.categories', compact('whitePlates'));
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return redirect()->back();
        }

        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->limit(3)
            ->get();

        return view('frontend.product-details', compact('product', 'relatedProducts'));
    }

    public function checkout(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        return view('frontend.checkout',compact('cart'));
    }

    public function viewCart(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        return view('frontend.cart', compact('cart'));
    }


    public function addToCart(Request $request, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->route('categories')->with('error', 'Product not found.');
        }

        $cart = $request->session()->get('cart', []);

        // Check if the product is already in the cart
        if (array_key_exists($productId, $cart)) {
            // Update quantity if the product is already in the cart
            $cart[$productId]['quantity']++;
            $cart[$productId]['price'] = $cart[$productId]['product']->price * $cart[$productId]['quantity'];
        } else {
            // Add the product to the cart with a quantity of 1
            $cart[$productId] = [
                'product' => $product,
                'quantity' => 1,
                'price' => $product->price,
                'subtotal' => $product->price,
            ];
        }

        $request->session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart.');
    }

    public function removeFromCart(Request $request, $itemId)
    {
        $cart = $request->session()->get('cart', []);

        // Check if the item to be removed exists in the cart
        if (array_key_exists($itemId, $cart)) {
            // Remove the item from the cart
            unset($cart[$itemId]);
            $request->session()->put('cart', $cart);

            // Retrieve the updated cart data for the view
            $updatedCart = $cart;

            // Build the updated HTML content for the tbody section
            $updatedCartHtml = '';

            foreach ($updatedCart as $itemId => $item) {
                $updatedCartHtml .= '<tr>';
                // Add the cart item details here as HTML
                $updatedCartHtml .= '<td> ... </td>';
                $updatedCartHtml .= '</tr>';
            }

            return $updatedCartHtml;
        }

        return response()->json(['message' => 'Item not found in the cart'], 404);
    }

    public function updateCart(Request $request)
    {

        $cart = $request->session()->get('cart', []);
        $updatedQuantities = $request->input('quantities');

        foreach ($updatedQuantities as $itemId => $quantity) {
            if (array_key_exists($itemId, $cart)) {
                $cart[$itemId]['quantity'] = $quantity;
                $cart[$itemId]['subtotal'] = $cart[$itemId]['product']->price * $quantity; // Update subtotal
            }
        }
        $request->session()->put('cart', $cart);

        // Retrieve the updated cart data for the view
        $updatedCart = $cart;

        // Build the updated HTML content for the tbody section
        $updatedCartHtml = '';

        foreach ($updatedCart as $itemId => $item) {
            $updatedCartHtml .= '<tr data-item-id="' . $itemId . '">';
            $updatedCartHtml .= '<td>';
            $updatedCartHtml .= '<a href="" class="remove-from-cart" data-item-id="' . $itemId . '">
                                    <i class="fa fa-multiply"></i>
                                </a>';
            $updatedCartHtml .= '</td>';

            $updatedCartHtml .= '<td>';
            $updatedCartHtml .= '<img src="' . asset('assets/img/' . $item['product']->product_img) . '" alt="image" width="80px">';
            $updatedCartHtml .= '</td>';
            $updatedCartHtml .= '<td>' . $item['product']->title . '</td>';
            $updatedCartHtml .= '<td>$' . $item['product']->price . '</td>';
            $updatedCartHtml .= '<td>';
            $updatedCartHtml .= '<div class="form-group">';
            $updatedCartHtml .= '<input class="form-control quantity" type="number" name="quantity" value="' . $item['quantity'] . '" style="width: 60px;">';
            $updatedCartHtml .= '</div>';
            $updatedCartHtml .= '</td>';
            $updatedCartHtml .= '<td class="subtotal">$' . $item['subtotal']     . '</td>';
            $updatedCartHtml .= '</tr>';
        }

        return $updatedCartHtml;
    }
}
