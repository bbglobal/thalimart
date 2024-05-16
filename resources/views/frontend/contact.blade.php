@extends('layouts.main')

@push('title')
    <title>Contact - Thalimart™: Plastic plate with compartments to suit Indian food</title>
@endpush

@section('main-section')
    <main class="container">
        <article class="type-page">
            <h1>Contact</h1>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <h5>Tel: <a href="tel:563-284-2254">Call Us @ 563-2TH-AALI <br />
                            Call/Text us at 563-284-2254. Please text for quicker <br /> response.
                        </a></h5>
                    <h5>
                        <a href="https://api.whatsapp.com/send/?phone=15632842254&text=This+is+Vina.+How+can+I+help+you%3F&type=phone_number&app_absent=0"
                            target="_blank">Whatsapp Vina</a>
                    </h5>
                    <h5>
                        Email us at: <a href="mailto:sales@thalimart.com">
                            <strong>sales@thalimart.com</strong></a> <br />
                        <a href="https://www.facebook.com/vinaatThalimart/" target="_blank">Facebook-Thalimart</a><br />
                        <a href="https://www.linkedin.com/in/thalimart/" target="_blank">Linkedin-Thalimart</a><br />

                    </h5>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <form action="" method="post" class="row">
                        <div class="form-group col-12 col-md-6 col-lg-6">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" id="name" name="name">
                        </div>
                        <div class="form-group col-12 col-md-6 col-lg-6">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="10"></textarea>
                        </div>
                        <div class="ms-2 mt-4 form-group">
                            <button class="btn-thalimart">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </main>
@endsection
