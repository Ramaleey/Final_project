@extends('layouts.main')

@section('title')
    Services
@endsection

@section('main-content')
    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Services</h2>
                <ol>
                    <li><a href="#">Home</a></li>
                    <li>Our Services</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Section ======= -->
    <section class="services service-details">
        <div class="container">

            <div class="row">
                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box icon-box-pink">
                        {{--  <div class="icon"><i class="bi bi-basket"></i></div>  --}}
                        <h4 class="title"><a href="#" target="_blank">Pakacha Delivery</a>
                        </h4>
                        <p class="description">
                            We deliver products made and grown on the farm which includes chicken, eggs, coconut milk,
                            peanut
                            butter, Yoghurt,
                            and so much more.
                        </p>

                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        {{--  <div class="icon"><i class="fa fa-cutlery"></i></div>  --}}
                        <h4 class="title"><a href="#">Farm -to- Table</a></h4>
                        <p class="description">
                            An event where food and products made and grown on the farm is served. It happens on every
                            Sunday at the
                            farm
                        </p>

                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box icon-box-cooking">
                        {{--  <div class="icon"><i class="fa fa-fire"></i></i></div>  --}}
                        <h4 class="title"><a href="#" target="_blank">Cooking
                                Classes</a>
                        </h4>
                        <p class="description">
                            Here you visit the farm, pick one or two things and head on to the kitchen where you will be
                            taught how
                            to properly cook with hands on experience
                        </p>

                    </div>
                </div>

                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        {{--  <div class="icon"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAA4BJREFUaEPtmI2RTUEQhXsjIANEsESACBDBEgEiQASIABEsESACRIAIEAH1bU2/6u3XM9Mzb3btq9qpulX79t6ZOad/TvfMgez5ONhz/HJJ4H97cJ88cE9EbojIK2u0i0zgpojcFpE75bkqIj8KiQ2H1QSwEhsz2JhxXUTY/Gv5DQgeHfzNN/otf7MGc6JxCvMKAoC+X57apitTZRmBxyLyvGGplaCrYT/jAaz90rj9rID+LKF26Iy0kwfeiMjDBuJvIvK+bExs/zaxb+O6FuOfytrkC3MZf91+0wRq4LEU0qbAV3tkCQEAEvN2/Ck5cEqXV6Nf4QHk8KMDRqjwf3XzGeDeyOr3XUPoi9F21poBT8wjt2i8ar7WiZaQeON9NvXlhFdPhUhYYt8OyrktRDXrA/qo1AcF3S1M7gO//zABEhPL6XhR4r4VMgCHtFZk/y1Jj9ro0zIGdeaZWeC1iDyxC/Y88MtpcM/6bMamfpDwJPvbpPd0PiTph3Q8HWnmfPwR+zWr1qyuwAE/k/DegHeL5zaMWh7ouq+sEuUJr3A3a8wAZz5GQUCaETNCIIr/SGKxOu2GVtVWvrTeEeu0LDq2EpgXLQLEKypSS2AsRH2wHSgJCnhtnWfBM8/LdyggLQI+gR6VJGRxQAPe5gSW53dGYnvEkF1fwG5FhhnxwIPS77A54LUQ8Rvw/F5hedbz3sezYS0ZyQHV4Chpt+StZ+LGe7yL9W1oVtdvEfBAsS5uZHFrjTC5diDgG0e8y36hmrUIRHGIJawygHNLm3cAH6las/r3KjFW50RUGyutT8igPNa7Tev3ZJT3Xos9kVXWj1SNvaxwhEbseUDvYq4Es6vKMBhCNfDvOsfXk216BPjGtxSKb6szHATO57UeKn3myBBgI4rTNQcQrSapZ3odrI4YRBcEafBZD/BddCbm/4DnHe7OVGAsztmadiO6BBsCP0LA9yVRtKBYPJ4IQAHeui5kvQ/FI0MezYaQv9qYCPfqFMQAteP0NzwyBKK+nJCh6Pi8GAGw62EnrULE67FDpsQhQSLatrtFAmtjaQRgSeOX8YCX0Vr11Rj3sa7XhPaaccRTzW8zBPzNRKrALEPYWShDwB9sMlcr54U/VYk9gW5/cm7ok62ErwGrGrglPDMh5GtAeDZdgmZikRkCmTkTUOamXCgwMxQuCcxYbeWcvffAP+vevzFgbuxaAAAAAElFTkSuQmCC" />  --}}
                        {{--  </div>  --}}
                        <h4 class="title"><a href="#">Farm Tour</a></h4>
                        <p class="description">
                            An event where food and products made and grown on the farm is served. It happens on every
                            Sunday at the
                            farm
                        </p>
                        <!-- <div class="read-more"><a href="#" target="_blank"><i
                    class="bi bi-arrow-right"></i> See More</a></div> -->
                    </div>
                </div>

            </div>

        </div>
        <div class="container">



        </div>

    </section><!-- End Services Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
        <div class="container">

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assetss/image/gallery/g6.jpg') }}" alt="..."
                                style="object-fit: contain; height: 500px; width: 100%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Our Mission</a></h5>
                            <p class="card-text">
                                Growing food for our own household use, sale to our local community through Pakacha Delivery
                                Baskets,
                                delivery
                                to tourist hotels, and allowing room for events such as our weekly farm-to- table to spread
                                the
                                success of organic
                                farming.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assetss/image/gallery/g5.jpg') }}" alt="..."
                                style="object-fit: contain; height: 500px; width: 100%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">Our Core Belief</a></h5>
                            <p class="card-text">
                                We believe that welfare profit is of greater value than economic profit, we accept and
                                design for
                                climate
                                uncertainty, we consider the expansion of ecological principles to our neighboring farms, we
                                accept
                                limitations
                                and accomplishments. At Msonge we respect others and celebrate seasonality, celebrating the
                                natural
                                state.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Service Details Section -->
@endsection
