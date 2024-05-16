<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ url('assets/img/favicon.ico') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/91a57874db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/styles.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @stack('title');
</head>

<body>

    <header class="container">
        <nav>
            <ul class="d-flex flex-wrap align-items-top justify-content-between">
                <li class="nav-text">
                    <h1>
                        <a href="{{ route('home') }}">
                            Thalimart.com – Virgin Plastic Thalis & Price Match!
                        </a>
                    </h1>
                    <p class="tag-line">We will beat Amazon, ebay and all other online delivered prices!!!</p>
                    <a href="tel:563-284-2254" class="phone">563-284-2254 (563-2THAALI)</a>
                </li>
                <li>
                    <a href="{{ route('home') }}">
                        <figure class="logo">
                            <img src="{{ url('assets/img/Final-logo1.png') }}" alt="Thalimart.com">
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="{{ route('product.cart') }}" class="cart-button">
                        <i class="fa-solid fa-bag-shopping" style="color: #ffa500;"></i>
                        <span class="label">My Basket</span>
                        <span class="cart-amount">&dollar;0.00</span>
                        <span class="lozenge">0 items</span>
                    </a>
                    <a href="{{ route('checkout') }}" class="checkout">
                        <span class="lozenge">Checkout</span>
                        <i class="fa-solid fa-caret-right"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <nav id="navigation">
            <ul class="d-flex align-items-center justify-content-around">
                <li>
                    <a href="{{ route('home') }}">
                        Thalimart.com
                    </a>
                </li>
                <li class="chevron-down">
                    <a href="#">
                        Products
                        <i class="fa-solid fa-circle-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                        <li>
                            <a href="{{ url('product-category/white-plates') }}">White Plates</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/silver-plates') }}">Silver Plates</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/gold-plates') }}">Gold Plates</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/plates-with-lids') }}">Plates With Lids</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/bowls') }}">Bowls</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/cups') }}">Cups</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/spoonsforks') }}">Spoons/Forks</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/expedite-shipping') }}">Expedite Shipping</a>
                        </li>
                    </ul>
                </li>
                <li class="chevron-down">
                    <a href="{{ route('about') }}">
                        About Us
                        <i class="fa-solid fa-circle-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                        <li>
                            <a href="{{ route('terms.use') }}">Terms of Use</a>
                        </li>
                        <li>
                            <a href="{{ route('privacy.policy') }}">PrivacyPolicy</a>
                        </li>
                        <li>
                            <a href="{{ route('testimonials') }}">Testimonials</a>
                        </li>
                    </ul>
                </li>
                <li class="chevron-down">
                    <a href="{{ route('shipping.policy') }}">
                        Shipping Policy
                        <i class="fa-solid fa-circle-chevron-down"></i>
                    </a>
                    <ul class="dropdown">
                        <li>
                            <a href="{{ route('return.policy') }}">Return Policy</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('faq') }}">
                        FAQ
                    </a>
                </li>
            </ul>
        </nav>

        <nav id="mob-menu">
            <input type="checkbox" id="check">
            <ul class="d-flex flex-wrap align-items-center justify-content-start">
                <li>
                    <label for="check">
                        <i class="fa-solid fa-bars" style="font-size: 24px;"></i>
                    </label>
                </li>
            </ul>
            <ul id="menu-extra">
                <li class="chevron-down">
                    <input type="checkbox" id="check-drop">
                    <a href="javascript:(void)">
                        <label for="check-drop">
                            Products
                            <i class="fa-solid fa-circle-chevron-down"></i>
                        </label>
                    </a>
                    <ul id="dropdown-one">
                        <li>
                            <a href="{{ url('product-category/white-plates') }}">White Plates</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/silver-plates') }}">Silver Plates</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/gold-plates') }}">Gold Plates</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/plates-with-lids') }}">Plates With Lids</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/bowls') }}">Bowls</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/cups') }}">Cups</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/spoonsforks') }}">Spoons/Forks</a>
                        </li>
                        <li>
                            <a href="{{ url('product-category/expedite-shipping') }}">Expedite Shipping</a>
                        </li>
                    </ul>
                </li>
                <li class="chevron-down">
                    <input type="checkbox" id="check-drop-two">
                    <label for="check-drop-two">
                        <a href="{{ route('about') }}">
                            About Us
                            <i class="fa-solid fa-circle-chevron-down"></i>
                        </a>
                    </label>
                    <ul id="dropdown-two">
                        <li>
                            <a href="{{ route('terms.use') }}">Terms of Use</a>
                        </li>
                        <li>
                            <a href="{{ route('privacy.policy') }}">PrivacyPolicy</a>
                        </li>
                        <li>
                            <a href="{{ route('testimonials') }}">Testimonials</a>
                        </li>
                    </ul>
                </li>
                <li class="chevron-down">
                    <input type="checkbox" id="check-drop-three">
                    <label for="check-drop-three">
                        <a href="{{ route('shipping.policy') }}">
                            Shipping Policy
                            <i class="fa-solid fa-circle-chevron-down"></i>
                        </a>
                    </label>
                    <ul id="dropdown-three">
                        <li>
                            <a href="{{ route('return.policy') }}">Return Policy</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('faq') }}">
                        FAQ
                    </a>
                </li>
            </ul>
        </nav>
    </header>
