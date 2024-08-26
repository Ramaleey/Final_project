@extends('layouts.main')

@section('title')
    Contact Us
@endsection

@section('main-content')
    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>Shakani, Unguja <br> P. O Box 1255 Zanzibar</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>
                                    <a href="emailto:mwatimajuma@gmail.com">mwatimajuma@gmail.com</a> <br>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>
                                    <a href="tel:+255 754 536 630">+255 754 536 630</a><br>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="{{ route('add-coment') }}" method="post" role="form" class="php-email-form">

                        @csrf

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="full_name" class="form-control" id="name"
                                    placeholder="Your Full Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>

    <!-- ======= Map Section ======= -->
    {{--  <section class="map mt-2">
        <div class="container-fluid p-0">
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyColUB09K1s6oEt63D5BCChZjXSNPFksvg
        &q=Practical+Permaculture+Institute+of+Zanzibar"
                frameborder="0" allowfullscreen></iframe>
        </div>
    </section>  --}}
@endsection
