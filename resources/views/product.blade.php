@extends('layouts.main')

@section('title')
    Products
@endsection

@section('main-content')
    <!-- ======= Our Products Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Our Products</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Our Products</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Products Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
        <div class="container">

            <div class="row">
                @if($categories->count()>0)
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active"><a href="{{ route('product') }}" class="nav-link">All</a></li>
                        @foreach($categories as $cat)
                            <li data-filter=""><a class="nav-link" href="{{ route('menubycategory',[$cat->id]) }}">{{ $cat->category_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @else
                    <h3 class="text-center">Sorry, Categories not Found !</h3>
                @endif
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                @if($product->count()>0)
                    @foreach ($product as $item)
                    <div class="col-md-3 filter-app">
                        <div class="portfolio-item">
                            <img src="{{ asset('product-images/'.$item->photo) }}" width="300px" height="100vh" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h3>
                                    {{ $item->product_name }}
                                </h3>
                                <h3>
                                    Price: {{ number_format($item->product_price) }}
                                </h3>                                 
                                <div class="row mt-4">
                                    <div class="col-md-5">
                                        <a href="{{ route('product-details', [$item->id]) }}" class="btn btn-sm text-white" style="background: rgb(245, 169, 115)">Details</a>
                                    </div>
                                    <div class="col-md-7">
                                        <form action="{{ route('add-cart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value={{$item->id}} name="product_id" class="product_id">
                                            <input type="hidden" name="product_qty" class="product_qty" value="1">
                                            {{--  <div class="card-body p-4" style="background: rgb 206,201,201">
                                                <div class="text-center text-dark">
                                                    <h5><strong>{{ $item->food_name }}</strong></h5>
                                                    <p class ="badge badge-pill bg-danger">Tsh {{ number_format($item->price,0) }}/=</p>
                                                </div>
                                            </div>  --}}
                                            <center>
                                                <button type="submit" class="add-to-cart-btn btn btn-sm text-white" style="background: rgb(245, 169, 115)">Add to cart</button>
                                            </center>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                <div class="row justify-content-center">
                    <h3 style="color: red">Sorry, Product not Found !</h3>
                </div>
                @endif            

            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
