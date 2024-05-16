@extends('layouts.main')

@push('title')
    <title>Thalimart™: Plastic plate with compartments to suit Indian food</title>
@endpush

@section('main-section')
    <main class="container">
        <div class="vedio">
            <iframe width="100%" height="720" src="https://www.youtube.com/embed/rg0lgcWUSpk"
                title="Disposable plastic thalis from Plasticthali.com" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <div class="products-list row py-5">
            @foreach ($products as $row)
                @php
                    $link;
                    if ($row->category === 'Plates/Thalis') {
                        $link = 'white-plates';
                    } elseif ($row->category === 'Bowls/Katoris') {
                        $link = 'bowls';
                    } elseif ($row->category === 'Cup') {
                        $link = 'Cup';
                    } elseif ($row->category === 'Spoons/Forks') {
                        $link = 'spoonsforks';
                    }
                @endphp
                <figure class="col-12 col-md-12 col-lg-3">
                    <a href="{{ route('categories', ['category' => $link]) }}">
                        <img src="{{ url('assets/img/products/' . $row->product_img) }}" alt="product image" width="100%">
                    </a>
                    <h4 class="text-center pt-3">{{ $row->category }}</h4>
                </figure>
            @endforeach
        </div>

        <div class="values row py-5">
            <h3 class="text-center py-3">VALUES</h3>
            <figure class="col-12 col-md-12 col-lg-4">
                <a href="{{ route('quality') }}">
                    <img src="{{ url('assets/img/PlasticThali.com-Quality.jpg') }}" alt="product image" width="100%">
                </a>
            </figure>
            <figure class="col-12 col-md-12 col-lg-4">
                <a href="{{ route('faq') }}">
                    <img src="{{ url('assets/img/faq.jpg') }}" alt="product image" width="100%">
                </a>
            </figure>
            <figure class="col-12 col-md-12 col-lg-4">
                <a href="{{ route('testimonials') }}">
                    <img src="{{ url('assets/img/Testimonials2-1.jpg') }}" alt="product image" width="100%">
                </a>
            </figure>
        </div>
    </main>
@endsection
