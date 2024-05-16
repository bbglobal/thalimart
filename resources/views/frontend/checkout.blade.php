@extends('layouts.main')

@push('title')
    <title>Checkout - Thalimart™: Plastic plate with compartments to suit Indian food</title>
@endpush

@section('main-section')
    <main class="container">
        <article class="type-page">
            <i class="fa-regular fa-credit-card" style="color: #337ab7; font-size:24px;"></i>
            <h1>Checkout</h1>
            <p class="check-alert" id="returning">Returning customer? <a href="javascript:void(0)">Click here to login</a></p>
            <form action="" class="py-3" method="post" id="login-form">
                <div class="row">
                    <div class="col-12">
                        <p>If you have shopped with us before, please enter your details below. If you are a new customer,
                            please proceed to the Billing section.</p>
                    </div>
                    <div class="form-group pt-3 col-12 col-md-6 col-lg-6">
                        <label for="username"><strong>Username or email</strong></label>
                        <input class="form-control" type="text" id="username" name="username">
                    </div>
                    <div class="form-group pt-3 col-12 col-md-6 col-lg-6">
                        <label for="uPass"><strong>Password</strong></label>
                        <input class="form-control" type="text" id="uPass" name="uPass">
                    </div>
                    <div class="form-check col-12 col-md-6 col-lg-6 pt-3 form-switch">
                        <input class="form-check-input" type="checkbox" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <div class="form-group col-12 col-md-6 col-lg-6 pt-3 form-switch">
                        <a href="#">Lost your password?</a>
                    </div>
                    <button type="button" class="btn-thalimart mt-3" id="btn-login">
                        Login
                    </button>
                </div>
            </form>
            <p class="check-alert" id="coupon">Have a coupon? <a href="javascript:void(0)">Click here to enter your
                    code</a></p>
            <form action="" class="py-3" method="post" id="coupon-form">
                <div class="row">
                    <div class="form-group pt-3 col-12 col-md-6 col-lg-6">
                        <label for="coupon">If you have a coupon code, please apply it below.</label>
                        <input class="form-control" type="text" id="coupon" name="coupon" placeholder="Coupon code">
                    </div>
                </div>
                <button type="button" class="btn-thalimart mt-3" id="apply-coupon">
                    Apply Coupon
                </button>
            </form>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 bg-white p-5">
                    <h3>Billing Addresss</h3>
                    <form action="" method="post" class="row">
                        <div class="form-group pt-3 col-12 col-md-6 col-lg-6">
                            <label for="fname"><strong>First Name</strong></label>
                            <input class="form-control" type="text" id="fname" name="fname">
                        </div>
                        <div class="form-group pt-3 col-12 col-md-6 col-lg-6">
                            <label for="lname"><strong>Last Name</strong></label>
                            <input class="form-control" type="text" id="lname" name="lname">
                        </div>
                        <div class="form-group pt-3">
                            <label for="company"><strong>Company Name (Optional)</strong></label>
                            <input class="form-control" type="text" id="company" name="company">
                        </div>
                        <div class="form-group pt-3">
                            <label for="company"><strong>Country / Region <br /> United States (US)</strong></label>
                        </div>
                        <div class="form-group pt-3">
                            <label for="streetaddress"><strong>Street address</strong></label>
                            <input class="form-control" type="text" id="streetaddress" name="streetaddress"
                                placeholder="Hours nunber and street name">
                        </div>
                        <div class="form-group pt-3">
                            <input class="form-control" type="text" id="apartment" name="apartment"
                                placeholder="Apartment, suite,unit,etc,(optional)">
                        </div>
                        <div class="form-group pt-3">
                            <label for="city"><strong>Town / City</strong></label>
                            <input class="form-control" type="text" id="city" name="city">
                        </div>
                        <div class="form-group pt-3">
                            <label for="state"><strong>State / County</strong></label>
                            <input class="form-control" type="text" id="state" name="state">
                        </div>
                        <div class="form-group pt-3">
                            <label for="zip"><strong>Postcode / ZIP</strong></label>
                            <input class="form-control" type="text" id="zip" name="zip">
                        </div>
                        <div class="form-group pt-3">
                            <label for="zip"><strong>Phone</strong></label>
                            <input class="form-control" type="text" id="zip" name="zip">
                        </div>
                        <div class="form-group pt-3">
                            <label for="email"><strong>Email</strong></label>
                            <input class="form-control" type="email" id="email" name="email">
                        </div>
                        <div class="form-check pt-3 form-switch">
                            <input class="form-check-input" type="checkbox" id="account">
                            <label class="form-check-label" for="account">Create an account?</label>
                        </div>
                        <div class="form-group col-6 pt-3" id="create-account">
                            <label for="password"><strong>Create Account Password</strong></label>
                            <input class="form-control" type="password" id="password" name="password"
                                placeholder="Password">
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-12 col-lg-6 bg-white p-5">
                    <form action="" method="post" class="row">
                        <div class="form-check pt-3 form-switch">
                            <input class="form-check-input" type="checkbox" id="shipto">
                            <label class="form-check-label" for="shipto">
                                <h3>Ship to a different address?</h3>
                            </label>
                        </div>
                        <span id="different">
                            <div class="form-group pt-3 col-12 col-md-6 col-lg-6">
                                <label for="fname"><strong>First Name</strong></label>
                                <input class="form-control" type="text" id="fname" name="fname">
                            </div>
                            <div class="form-group pt-3 col-12 col-md-6 col-lg-6">
                                <label for="lname"><strong>Last Name</strong></label>
                                <input class="form-control" type="text" id="lname" name="lname">
                            </div>
                            <div class="form-group pt-3">
                                <label for="company"><strong>Company Name (Optional)</strong></label>
                                <input class="form-control" type="text" id="company" name="company">
                            </div>
                            <div class="form-group pt-3">
                                <label for="company"><strong>Country / Region <br /> United States (US)</strong></label>
                            </div>
                            <div class="form-group pt-3">
                                <label for="streetaddress"><strong>Street address</strong></label>
                                <input class="form-control" type="text" id="streetaddress" name="streetaddress"
                                    placeholder="Hours nunber and street name">
                            </div>
                            <div class="form-group pt-3">
                                <input class="form-control" type="text" id="apartment" name="apartment"
                                    placeholder="Apartment, suite,unit,etc,(optional)">
                            </div>
                            <div class="form-group pt-3">
                                <label for="city"><strong>Town / City</strong></label>
                                <input class="form-control" type="text" id="city" name="city">
                            </div>
                            <div class="form-group pt-3">
                                <label for="state"><strong>State / County</strong></label>
                                <input class="form-control" type="text" id="state" name="state">
                            </div>
                            <div class="form-group pt-3">
                                <label for="zip"><strong>Postcode / ZIP</strong></label>
                                <input class="form-control" type="text" id="zip" name="zip">
                            </div>
                            <div class="form-group pt-3">
                                <label for="zip"><strong>Phone</strong></label>
                                <input class="form-control" type="text" id="zip" name="zip">
                            </div>
                        </span>
                        <div class="form-group">
                            <label for="notes">
                                <strong>Order notes (optional)</strong>
                            </label>
                            <textarea class="form-control" type="email" id="notes" name="notes" rows="2"
                                placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                        </div>
                    </form>
                </div>
                <div class="col-12 bg-white p-5">
                    <h4 style="font-size: 24px;">Your Order</h4>
                    <table cellpadding='5' id="cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $itemId => $item)
                                <tr>
                                    <td>
                                        {{ $item['product']->title }} <strong>x {{ $item['quantity'] }}</strong>
                                    </td>
                                    <td class="subtotal">&dollar;{{ $item['product']->price * $item['quantity'] }}.00</td>
                                </tr>
                                <tr style="background: #F3F1F0;">
                                    <td>
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="subtotal">&dollar;{{ $item['product']->price * $item['quantity'] }}.00</td>
                                </tr>
                                <tr style="background: #F3F1F0;">
                                    <td rowspan="3">
                                        <strong>Shipping</strong>
                                    </td>
                                    <td>
                                        <input type="radio" name="ship" id="free" checked>
                                        <label for="free">
                                            <strong>
                                                Free Shipping 7-10 business days
                                            </strong>
                                        </label>
                                    </td>
                                </tr>
                                <tr style="background: #F3F1F0;">
                                    <td>
                                        <input type="radio" name="ship" id="expedite">
                                        <label for="expedite">
                                            <strong>
                                                Expedite Shipping 4-6 business days: $24.00
                                            </strong>
                                        </label>
                                    </td>
                                </tr>
                                <tr style="background: #F3F1F0;">
                                    <td>
                                        <input type="radio" name="ship" id="super">
                                        <label for="super">
                                            <strong>
                                                Super Expedite 2-4 Business days: $45.70
                                            </strong>
                                        </label>
                                    </td>
                                </tr>
                        </tbody>
                        <tfoot>
                            <tr style="background: #F3F1F0;">
                                <th>Total</th>
                                <th class="subtotal">&dollar;{{ $item['product']->price * $item['quantity'] }}.00</th>
                            </tr>
                        </tfoot>
                        @endforeach
                    </table>

                    <table cellpadding='5' class="mt-5">
                        <thead>
                            <tr>
                                <th>
                                    <input type="radio" name="payment" id="credit-card" checked>
                                    <label for="credit-card">Credit Cards</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background: #F3F1F0;">
                                <td>
                                    <div class="form-group pt-3 col-12 col-md-6 col-lg-6" id="credit-card-section">
                                        <label for="lname"><strong>Card Number</strong></label>
                                        <input class="form-control" type="number" id="lname" name="lname">
                                        <div class="row">
                                            <div class="form-group pt-3 col-12 col-md-6 col-lg-6">
                                                <label for="lname"><strong>Expiry (MM/YY)</strong></label>
                                                <input class="form-control" type="number" id="lname" name="lname"
                                                    placeholder="MM/YY">
                                            </div>
                                            <div class="form-group pt-3 col-2">
                                                <label for="lname"><strong>CVV</strong></label>
                                                <input class="form-control" type="number" id="lname"
                                                    name="lname">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table cellpadding='5'>
                        <thead> 
                            <tr>
                                <th>
                                    <input type="radio" name="payment" id="paypal">
                                    <label for="paypal">PayPal</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background: #F3F1F0;">
                                <td>
                                    <div class="col-12 text-center mt-5" id="paypal-section">
                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post"
                                            target="_top">
                                            <input type="hidden" name="cmd" value="_s-xclick" />
                                            <input type="hidden" name="hosted_button_id" value="USKD97PDGDUV8" />
                                            <input type="hidden" name="currency_code" value="USD" />
                                            <input type="image" src="{{ url('assets/img/paypal.png') }}" border="0"
                                                name="submit" title="PayPal - The safer, easier way to pay online!"
                                                alt="Buy Now" width="100%" />
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Your personal data will be used to process your order, We do not share your data with anyone.</p>
                    <div class="form-check pt-3 form-switch">
                        <input class="form-check-input" type="checkbox" id="tandc">
                        <label class="form-check-label" for="tandc">I have read and agree to the website <a
                                href="{{ route('terms.use') }}">terms and conditions</a></label>
                    </div>
                    <button type="button" class="btn-thalimart ms-3 mt-3 py-3" id="update-cart" style="width: 100%;">
                        Place Order
                    </button>
                </div>
            </div>
        </article>
    </main>
@endsection
