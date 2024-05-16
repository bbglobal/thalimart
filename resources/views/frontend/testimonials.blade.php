@extends('layouts.main')

@push('title')
    <title>Testimonials - Thalimart™: Plastic plate with compartments to suit Indian food</title>
@endpush

@section('main-section')
    <main class="container">
        <article class="type-page">
            <h1>Testimonials</h1>
            <div class="testimonial my-5">
                <h3>
                    <blockquote>
                        <img src="{{ url('assets/img/quotes.png') }}" alt="quotes">
                        <span class="ms-3">Arrived ahead of schedule and exactly as described.</span>
                    </blockquote>
                </h3>
                <div class="d-flex align-items-center justify-content-cetner">
                    <img class="testimonial-img" src="{{ url('assets/img/none.png') }}" alt="image">
                    <span class="ms-3">Quick delivery and item as described.
                        <br />
                        Lance</span>
                </div>
            </div>
            <div class="testimonial my-5">
                <h3>
                    <blockquote>
                        <img src="{{ url('assets/img/quotes.png') }}" alt="quotes">
                        <span class="ms-3">Fair pricing, quick service!!</span>
                    </blockquote>
                </h3>
                <div class="d-flex align-items-center justify-content-cetner">
                    <img class="testimonial-img" src="{{ url('assets/img/none.png') }}" alt="image">
                    <span class="ms-3">Great product for price and quick delivery!!
                        <br />
                        bobbie M.</span>
                </div>
            </div>
            <div class="testimonial my-5">
                <h3>
                    <blockquote>
                        <img src="{{ url('assets/img/quotes.png') }}" alt="quotes">
                        <span class="ms-3">Good Product</span>
                    </blockquote>
                </h3>
                <div class="d-flex align-items-center justify-content-cetner">
                    <img class="testimonial-img" src="{{ url('assets/img/none.png') }}" alt="image">
                    <span class="ms-3">The product is very good. Thank you!! Mrinalini
                        <br />
                        Mrinalini</span>
                </div>
            </div>
            <div class="testimonial my-5">
                <h3>
                    <blockquote>
                        <img src="{{ url('assets/img/quotes.png') }}" alt="quotes">
                        <span class="ms-3">As described</span>
                    </blockquote>
                </h3>
                <div class="d-flex align-items-center justify-content-cetner">
                    <img class="testimonial-img" src="{{ url('assets/img/none.png') }}" alt="image">
                    <span class="ms-3">Item arrived earlier than promised and was as described. Adam F
                        <br />
                        Adam F</span>
                </div>
            </div>
            <div class="testimonial my-5">
                <h3>
                    <blockquote>
                        <img src="{{ url('assets/img/quotes.png') }}" alt="quotes">
                        <span class="ms-3">Fast Shipping and well packaged</span>
                    </blockquote>
                </h3>
                <div class="d-flex align-items-center justify-content-cetner">
                    <img class="testimonial-img" src="{{ url('assets/img/none.png') }}" alt="image">
                    <span class="ms-3">Thank you for the fast shipping! Items were packaged really well and arrived without any damage. Thank you! Rachel
                        <br />
                        Rachel</span>
                </div>
            </div>
        </article>
    </main>
@endsection
