@extends('layouts.main')

@push('title')
    <title>Thalimart™: Plastic plate with compartments to suit Indian food</title>
@endpush

@section('main-section')
    <main class="container">
        @foreach ($whitePlates as $row)
            <h1>{{ $row->category }}</h1>
        @break
    @endforeach
    @if ($message = Session::get('success'))
        <div class="alert alert-primary" role="alert">
            {{ $message }} <a href="{{ route('product.cart') }}" class="alert-link">View Cart</a>.
        </div>
    @endif
    <div class="row">
        @foreach ($whitePlates as $row)
            <div class="col-12 col-md-6 col-lg-3 py-5 text-center">
                <figure class="product-img">
                    <a href="{{ route('product.detail', ['id' => $row->id]) }}">
                        <img src="{{ url('assets/img/' . $row->product_img) }}" alt="{{ $row->category }}"
                            width="100%">
                    </a>
                </figure>
                <h3>
                    <a href="{{ route('product.detail', ['id' => $row->id]) }}">{{ $row->title }}</a>
                </h3>
                <p>
                    <a href="{{ route('product.detail', ['id' => $row->id]) }}">&dollar;{{ $row->price }}.00</a>
                </p>
                @if ($row->title === 'Bio-degradable 7 Compartment White Plate (50 Plates)')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="WKKKKWS67RUCE" />
                        <table class="my-3" style="display: none;">
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $35.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $60.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $90.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $120.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>

                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'White 6 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="H75HNBGM2SW8U" />
                        <table style="display: none;">
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates ${{ $row->price }}.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'White 7 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="9ZF5342ZV9WX6" />
                        <table style="display:none;">
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $35.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $70.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $105.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $133.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'White 9 Compartment Plate Thali')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="M8R87T58JGCYC" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $40.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $80.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $120.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $160.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'White 10 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="EXJPBGB5DBR8U" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $40.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $80.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $120.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $152.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'White 11 compartment plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="F8NQ92J4MU23C" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $40.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $80.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $120.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $152.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'White 8 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="4PC9LSBAG69G4" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $55.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $110.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $165.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $220.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Metallic Silver 10 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="MGDJ5JAZ6UL2J" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $100.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $200.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $300.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $400.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Metallic Silver 9 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="TLZN2KYDJW6MC" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $110.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $220.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $330.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $440.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Silver 11 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="LFASJR9DBBSHL" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $80.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $160.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $240.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $320.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Silver Color 9 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="VELKNY8KXD7X6" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $80.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $160.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $240.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $320.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Gold 9 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="B7Y4BZXGXEV3S" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $90.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $180.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $270.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $360.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Gold 11 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="4UKH288MDRPEG" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $80.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $160.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $240.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $320.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Maharaja Royal Gold Plastic Bowl Katori')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="C6795VSTAVJEE" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 bowls">
                                            50 bowls $30.00 USD
                                        </option>
                                        <option value="100 bowls">
                                            100 bowls $60.00 USD
                                        </option>
                                        <option value="150 bowls">
                                            150 bowls $90.00 USD
                                        </option>
                                        <option value="200 bowls">
                                            200 bowls $120.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Silver Plastic Bowl')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="UY6QRTHJ3ABLE" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 bowls">
                                            50 bowls $35.00 USD
                                        </option>
                                        <option value="100 bowls">
                                            100 bowls $70.00 USD
                                        </option>
                                        <option value="150 bowls">
                                            150 bowls $105.00 USD
                                        </option>
                                        <option value="200 bowls">
                                            200 bowls $140.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'White Plastic Bowls or Katoris')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="886KZRZF69TXJ" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 bowls">
                                            50 bowls $15.00 USD
                                        </option>
                                        <option value="100 bowls">
                                            100 bowls $30.00 USD
                                        </option>
                                        <option value="150 bowls">
                                            150 bowls $45.00 USD
                                        </option>
                                        <option value="200 bowls">
                                            200 bowls $60.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Clear Cup 10oz')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="V47LWYHB9W8XG" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="25 cups">
                                            25 cups $19.00 USD
                                        </option>
                                        <option value="50 cups">
                                            50 cups $38.00 USD
                                        </option>
                                        <option value="75 cups">
                                            75 cups $57.00 USD
                                        </option>
                                        <option value="100 cups">
                                            100 cups $76.00 USD
                                        </option>
                                        <option value="200 cups">
                                            200 cups $152.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Royal Silver Forks')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="CGTGZZBM2DCPA" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 forks">
                                            50 forks $8.00 USD
                                        </option>
                                        <option value="100 forks">
                                            100 forks $16.00 USD
                                        </option>
                                        <option value="150 forks">
                                            150 forks $24.00 USD
                                        </option>
                                        <option value="200 forks">
                                            200 forks $32.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Maharaja Royal Gold Spoons')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="TH5BTFDXLD8CA" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 spoons">
                                            50 spoons $20.00 USD
                                        </option>
                                        <option value="100 spoons">
                                            100 spoons $40.00 USD
                                        </option>
                                        <option value="150 spoons">
                                            150 spoons $60.00 USD
                                        </option>
                                        <option value="200 spoons">
                                            200 spoons $80.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Royal Silver Spoons')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="2WTQL9MCK8LVC" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 spoons">
                                            50 spoons $8.00 USD
                                        </option>
                                        <option value="100 spoons">
                                            100 spoons $16.00 USD
                                        </option>
                                        <option value="150 spoons">
                                            150 spoons $24.00 USD
                                        </option>
                                        <option value="200 spoons">
                                            200 spoons $32.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Bio-Degradable 9 Compartment Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="UT5AZL65JQ8SA" />
                        <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="50 plates">
                                            50 plates $44.00 USD
                                        </option>
                                        <option value="100 plates">
                                            100 plates $88.00 USD
                                        </option>
                                        <option value="150 plates">
                                            150 plates $132.00 USD
                                        </option>
                                        <option value="200 plates">
                                            200 plates $176.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @elseif ($row->title === 'Bio-Degradable 6 Compartment Lunch Plate')
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="WS3AHFS96GFDA" />
                        <table style="display:none;">
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="40 plates">
                                            40 plates $28.00 USD
                                        </option>
                                        <option value="80 plates">
                                            80 plates $56.00 USD
                                        </option>
                                        <option value="120 plates">
                                            120 plates $84.00 USD
                                        </option>
                                        <option value="160 plates">
                                            160 plates $112.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @else
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="WS3AHFS96GFDA" />
                        {{-- <table style="display:none;"
                            <tr>
                                <td>
                                    <input type="hidden" name="on0" value="Quantity" />
                                    Quantity
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="os0">
                                        <option value="40 plates">
                                            40 plates $28.00 USD
                                        </option>
                                        <option value="80 plates">
                                            80 plates $56.00 USD
                                        </option>
                                        <option value="120 plates">
                                            120 plates $84.00 USD
                                        </option>
                                        <option value="160 plates">
                                            160 plates $112.00 USD
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table> --}}
                        <input type="hidden" name="currency_code" value="USD" />
                        <button name="submit" type="button" class="btn-thalimart mt-3">Add to Cart</button>
                    </form>

                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="U2FUKYPYAXXEU">
                        <input type="hidden" name="display" value="1">
                        <button name="submit" class="btn-thalimart mt-3">View Cart</button>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
</main>
@endsection
