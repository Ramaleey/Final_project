@extends('layouts.main')

@section('title')
    About Us
@endsection

@section('main-content')
    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>About Us</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>About Us</li>
                </ol>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('assetss/image/gallery/family.jpg') }}" class="img-fluid img-thumbnail abt-img" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Msonge Organic Family Farm</h3>
                    <p class="fst-italic">
                        We offer a wide range of products that are fresh, organic and picked when they are ripe and
                        have the highest nutritional value
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> Naturally raised cows and chicken.</li>
                        <li><i class="bi bi-check2-circle"></i> Seasonal fruits and vegetables.</li>
                        <li><i class="bi bi-check2-circle"></i> Coconut Milk and Peanut butter</li>
                    </ul>
                    <p>
                        Msonge Farm is a 15ha, multi-enterprise farm, growing food for our own household use, sale to our
                        local
                        community through Pakacha Delivery Baskets, delivery to tourist hotels, and allowing room for events
                        such
                        as our weekly farm-to- table to spread the success of organic farming.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
        <div class="container">

            <p>
                Several decades of organic by default production systems have positively impacted on the Msonge Farm
                ecosystem.
                Applying officially organic principles since 2000 and transforming the farm to a commercial permaculture
                farm since
                2015 into a more diverse, vibrant ecological system. This is guided by our tradition and vision.
            </p><br>

            <p>
                The land is a mix of stony and sandy loamy soil of a relatively flat land. It has a Tropical island climate
                with
                temperatures averaging from a min of 21°C to a max of 32°C and humidity of up 80%. The best time to visit
                our farm
                is from June to October during the cool, dry months of spring. Another popular time to visit is from
                December to February
                when it's hot and dry. Historic rainfall is 600mm with climate change it now has an unpredictable pattern.
            </p><br>

            <p>

            </p>

        </div>
    </section>

    <section class="skills" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2>Productivity</h2>
                <p>
                    We utilize our seasonal productivity as a marketing bonus. It provides a real story for our customers as
                    they ask for
                    the name and how to prepare or eat any new additions in their Pakacha (Basket delivery).
                </p><br>

            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-7 pt-5">
                    <p>
                        The discussion in the whatsapp
                        group became very lively and knowledge sharing from different cultures. " It is called mango grape
                        vine, a local indigenous
                        fruit tree. Kids love the yellow fruits. "Aah those are cinnamon leaves, you can use them as bay
                        leaves or as tea or in porridge".
                        "New day, new food! What is this? "It is a golden apple that can be eaten with chillies and salt".
                        This is an important
                        educational tool to engage town folk with the realities of farm life. It demonstrates our commitment
                        to question the value of outside
                        inputs of materials and energy to force the ecosystem to continually produce. It allows the farm to
                        take a breath, and the farm workers,
                        to enjoy the seasonality of life.
                    </p>
                </div>

                <div class="col-md-5">
                    <img src="{{ asset('assetss/image/gallery/pakacha2.jpeg') }}" class="img-fluid img-thumbnail abt-img" alt="">
                </div>

            </div>


        </div>
    </section>
@endsection
