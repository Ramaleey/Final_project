
@extends('layouts.main')

@section('title')
    Home
@endsection

<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Msonge Organic Family Farm</span>
                </h2>
                <p class="animate__animated animate__fadeInUp">
                    We offer a wide range of products that are fresh, organic and picked when they are ripe and
                    have the highest nutritional value
                </p>
                <a href="{{ route('about-us') }}" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Pakacha Delivery Services</h2>
                <p class="animate__animated animate__fadeInUp">
                    We deliver products made and grown on the farm which include chicken, eggs, coconut milk
                    and so much more. Download the App today.
                </p>
                <a href="" target="_blanck"
                    class="btn-get-started animate__animated animate__fadeInUp">Download</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">From Farm -to- Table</h2>
                <p class="animate__animated animate__fadeInUp">
                    An event where food and products made and grown on the farm is served. Includes chicken and
                    eggs,
                    with locally caught fish to grace the menu. Seasonal fruits juice, mint flavoured water and
                    coconut water are some of bevarages served
                </p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp" target="_blank">Read
                    More</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>

@section('main-content')
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('assetss/image/people.jpeg') }}" class="img-fluid" alt="">
                    <a href="" class="venobox play-btn mb-4" data-vbtype="video" target="_blank"
                        rel="noopener noreferrer" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Our Vision</a></h4>
                        <p class="description">
                            A farm that will develop into a self-sustaining ecosystem, requiring little to no input
                            and management.
                            The whole farm is considered to fucntion as a living ecosystem, of which we are an
                            integral part.
                        </p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">Our Philosophy</a></h4>
                        <p class="description">
                            We are custodians and respect the inheritance that was left to us. Msonge organic
                            believes that
                            sustainability begins at home, we respect all life and exhibit instinctual behaviour and
                            manage
                            rather than control. We believe that welfare profit is of greater value than economic
                            profit.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="features">
        <div class="container">

            <div class="section-title">
                <h2>Features</h2>
                <p>
                    We offer a wide range of products that are fresh, organic and picked when they are ripe and have
                    the
                    highest nutritional value. Our Chikens and cows are raised 100% organically and receive no
                    non-organic
                    herbicides and pesticides.
                </p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="{{ asset('assetss/image/food.jpeg') }}"
                        style="height: 500px; box-shadow: 0px 2px 15px rgba(63, 84, 35, 0.57);" class="img-fluid"
                        alt="">
                </div>
                <div class="col-md-7 pt-4">
                    <h3>Msonge organic farm food products</h3>
                    <p class="fst-italic">
                        We utilize our seasonal productivity as a marketing bonus. It provides a real story for our
                        customers as
                        they ask for the name and how to prepare or eat any new additions in their Pakacha (Basket
                        delivery)
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> Naturally raised cows and chicken.</li>
                        <li><i class="bi bi-check"></i> Seasonal fruits and vegetables.</li>
                        <li><i class="bi bi-check"></i> Coconut Milk and Peanut butter.</li>
                    </ul>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="{{ asset('assetss/image/pakacha.jpeg') }}"
                        style="height: 500px; box-shadow: 0px 2px 15px rgba(63, 84, 35, 0.57);" class="img-fluid"
                        alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>PAKACHA Delivery App</h3>
                    <p class="fst-italic">
                        Pakacha is a delivery service provided by Msonge Organic Family Farm. We deliver only
                        seasonally available fruits
                        and vegetables, thus Pakacha varies depending on whats available. Download and keep an eye
                        on the Pakacha App for what
                        is available.
                    </p>
                    <p>
                        Pakacha makes delivery on Monday and Thursday. On Monday we deliver to homes and businesses
                        on the East Coast
                        while on Thursday we deliver on both the East and West Coasts.
                    </p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img class="img-thumbnail" src="{{ asset('assetss/image/farmtt.png') }}"
                        style="height: 500px; box-shadow: 0px 2px 15px rgba(63, 84, 35, 0.57);" class="img-fluid"
                        alt="">
                </div>
                <div class="col-md-7 pt-5">
                    <h3>Farm -To- Table</h3>
                    <p>
                        An event where food and products made and grown on the farm is served. Includes chicken and
                        eggs,
                        with locally caught fish to grace the menu. Seasonal fruits juice, mint flavoured water and
                        coconut water are some of bevarages served.
                    </p>
                    <ul>
                        <li><i class="fa-solid fa-check"></i> Guests are seated on the traditional majamvi (Swahili straw
                            mats) around wooden tables.</li>
                        <li><i class="fa-solid fa-check"></i> Enjoy the farm scenery, rustic decor, and the living
                            ecosystem around the farm.</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

@endsection


