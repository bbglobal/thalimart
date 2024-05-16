@extends('layouts.main')

@push('title')
    <title>Cart - Thalimart™: Plastic plate with compartments to suit Indian food</title>
@endpush

@section('main-section')
    <main class="container">
        <article class="type-page">
            <h1>Cart</h1>
            <div class="table-responsive">
                <table cellpadding='5' id="cart-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Product Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $itemId => $item)
                            <tr>
                                <td style="width: 10px;">
                                    <a href="" class="remove-from-cart" data-item-id="{{ $itemId }}">
                                        <i class="fa fa-multiply"></i>
                                    </a>
                                </td>
                                <td>
                                    <img src="{{ url('assets/img/' . $item['product']->product_img) }}" alt="image"
                                        width="80px">
                                </td>
                                <td>
                                    <a href="{{ route('product.detail', ['id' => $itemId]) }}">
                                        {{ $item['product']->title }}
                                    </a>
                                </td>
                                <td>&dollar;{{ $item['product']->price * $item['quantity'] }}.00</td>
                                <td>
                                    <div class="form-group">
                                        <input class="form-control quantity" type="number" name="quantity"
                                            value="{{ $item['quantity'] }}" style="width: 60px;">
                                    </div>
                                </td>
                                <td class="subtotal">&dollar;{{ $item['product']->price * $item['quantity'] }}.00</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="coupon" name="coupon"
                                        placeholder="Coupon code">
                                </div>
                            </td>
                            <td>
                                <button class="btn-thalimart ms-3" id="apply-coupon">
                                    Apply Coupon
                                </button>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn-thalimart ms-3" id="update-cart">    
                                    Update Cart
                                </button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-12 text-center mt-5">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="USKD97PDGDUV8" />
                    <input type="hidden" name="currency_code" value="USD" />
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0"
                        name="submit" title="PayPal - The safer, easier way to pay online!" alt="Buy Now" />
                </form>
            </div>
        </article>
    </main>
    <script>
        $(document).ready(function() {
            $('.remove-from-cart').on('click', function(e) {
                e.preventDefault();
                var itemId = $(this).data('item-id');

                $.ajax({
                    type: 'POST',
                    url: '/remove-from-cart/' + itemId,
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        // Replace the table's tbody with the updated content
                        $('#cart-table tbody').html(data);
                    }
                });
            });
            $('#update-cart').on('click', function(e) {
                e.preventDefault();

                // Create an object to store the updated quantities
                var updatedQuantities = {};

                // Loop through the input fields for quantities and store the values
                $('input.quantity').each(function() {
                    var itemId = $(this).closest('tr').data('item-id');
                    var quantity = $(this).val();
                    updatedQuantities[itemId] = quantity;
                });

                // Send an AJAX request to update the cart
                $.ajax({
                    type: 'POST',
                    url: '/update-cart',
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantities: updatedQuantities
                    },
                    async: false, // Make the request synchronous
                    success: function(data) {
                        // Update the table body with the updated HTML
                        $('#cart-table tbody').html(data);
                    },
                    error: function(xhr, status, error) {
                        console.log("Update error");
                        console.log(error);
                    }
                });

            });

        });
    </script> 
@endsection
