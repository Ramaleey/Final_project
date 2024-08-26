@extends('layouts.main')

@section('title')
    Product Details
@endsection

@section('main-content')
    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Product Details</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Product Details</li>
                </ol>
            </div>

        </div>
    </section><!-- End Product Details Section -->

    <!-- ======= Services Section ======= -->
    <section class="services service-details">
        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <div class="portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                        <div class="filter-app">
                            <div class="portfolio-item">
                                <img src="{{ asset('product-images/' . $product->photo) }}" width="300px" height="100vh"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="card">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    {{--  <h5 class="card-title">Card title</h5>  --}}
                                    <h3 class="card-subtitle mb-2 text-muted">Product Details</h3>
                                    <p class="description">
                                        Name: <b>{{ $product->product_name }}</b>
                                    </p>
                                    <p class="description">
                                        Category: <b>{{ $product->category->category_name ?? 'N/A' }}</b>
                                    </p>
                                    <p class="description">
                                        Sub Category: <b>{{ $product->sub_category->sub_category ?? 'N/A' }}</b>
                                    </p>
                                    <p class="description">
                                        Type: <b>{{ $product->product_type ?? 'N/A' }}</b>
                                    </p>
                                    <p class="description">
                                        Description: <b>{{ $product->product_description ?? 'N/A' }}</b>
                                    </p>
                                    <p class="description">
                                        Usage: <b> {{ $product->product_usage ?? 'N/A' }}</b>
                                    </p>
                                    <p class="description">
                                        Price: <b>{{ number_format($product->product_price) }}</b>
                                    </p>
                                </div>
                                <div class="col-md-7 product-data">
                                    <h3 class="card-subtitle mb-2 text-muted">Cart Form</h3>

                                    <form action="{{ route('add-cart') }}" method="POST">
                                        @csrf

                                        <div class="row gy-3 mb-4">
                                            <!-- Quantity Column -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Quantity</label>
                                                    <div style="display: flex; align-items: center;">
                                                        <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                        <button type="button" class="btn btn-primary btn-number increment-btn" style="margin-right: 5px;">+</button>
                                                        <input type="text" name="product_qty" class="form-control input-number input_qty" value="1" style="width: 50px;">
                                                        <button type="button" class="btn btn-danger btn-number decrement-btn" style="margin-left: 5px;">-</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Price Column -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Price</label>
                                                    <input type="text" name="product_price" id="" class="form-control"
                                                        readonly value="{{ number_format($product->product_price) }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Action</label>
                                                    <button type="submit" class="btn btn-primary">Add To
                                                        Cart</button>
                                                </div>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


    </section>
@endsection


@section('scripts')
<script>
    $(document).ready(function () {

        $('.increment-btn').click(function(e){
            e.preventDefault();

            var inc_value = $(this).closest('.product-data').find('.input_qty').val();
            var value = parseInt(inc_value, 10);

            value = isNaN(value) ? 0 : value;
            if(value < 1000){
                value++;
                $(this).closest('.product-data').find('.input_qty').val(value);
            }
        });

        $('.decrement-btn').click(function(e){
            e.preventDefault();

            var dec_value = $(this).closest('.product-data').find('.input_qty').val();
            var value = parseInt(dec_value, 10);

            value = isNaN(value) ? 0 : value;
            if(value > 1){
                value--;
                $(this).closest('.product-data').find('.input_qty').val(value);
            }
        });

    });
</script>
@endsection