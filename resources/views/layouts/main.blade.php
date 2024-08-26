<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MOFF - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assetss/image/logo.png') }}" rel="icon">
    <link href="{{ asset('assetss/image/logo.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('assetss/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetss/bootstrap/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">





    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

     


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        @include('includes.header')
    </header>
    <!-- End Header -->

    {{--  <section id="hero" class="d-flex justify-cntent-center align-items-center">
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
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
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
    </section>  --}}

    <main id="main">
        @yield('main-content')
    </main>

    <!-- ======= Footer ======= -->

    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        @include('includes.footer')
    </footer>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="fa fa-arrow-up-short"></i></a>


    <script src="{{ asset('assetss/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetss/bootstrap/js/main.js') }}"></script>
    <script src="{{ asset('assetss/bootstrap/js/bootstrap.min.js') }}"></script>

    {{--  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}

    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>



    <script src="{{ asset('assets/js/sweetAlert.js') }}"></script>
    @if ( Session('success'))
      <script>
          Swal.fire("", "{{ Session('success') }}", "success");
      </script>
    @endif
    @if ( Session('error'))
      <script>
          Swal.fire("", "{{ Session('error') }}", "error");
      </script>
    @endif

    
    {{-- load cart count --}}
    <script>
        loadcount();
        function loadcount(){

            $.ajax({
                method:"GET",
                url:"{{ route('cart.count') }}",
                success: function (response) {
                    $('.cart-count').html('');
                    $('.cart-count').html(response.count);
                }
            });
        }
</script>


   
 
    @yield('scripts')
    <!-- Font Awesome -->

</body>

</html>
