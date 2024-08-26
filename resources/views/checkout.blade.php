@extends('layouts.main')

@section('title')
    CheckOut
@endsection

@section('main-content')
    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>CheckOut</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>CheckOut</li>
                </ol>
            </div>

        </div>
    </section><!-- End Cart Section -->

    <!-- ======= Services Section ======= -->
    <section class="services service-details">
        <div class="container">

            {{--  <div class="card">
                <div class="card-header">Personal Information</div>
                <div class="card-body">
                    <h3 class="card-subtitle mb-2 text-muted">Personal Information</h3>
                    <div class="row">
                        <div class="col-md-12">
                            
                        </div>
                    </div>
                </div>
            </div>  --}}

            <div class="card">
                <div class="card-header">My Cart</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('place.order') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-3">
                                    <h4 class="card-subtitle mb-2 text-muted">Personal Information</h4>
                                        <div class="form-group">
                                            <input type="text" readonly name="name"  value="{{ Auth::user()->f_name }} {{ Auth::user()->l_name }}" class="form-control">
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="email" readonly name="email" value="{{ Auth::user()->email }}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" readonly name="phone" value="0{{ Auth::user()->phone_no }}" class="form-control">
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" readonly name="address" value="{{ Auth::user()->address }}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3 class="card-subtitle mb-2 text-muted">Cart Information</h3>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th class="cart-product-name item">Image</th>
                                                        <th class="cart-product-name item">Product Name</th>
                                                        <th class="cart-qty item">Quantity</th>
                                                        <th class="cart-sub-total item">Price Per unit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @php $total = 0; @endphp
                                                    @foreach ($cartItem as $c)

                                                        <tr class="data">
                                                            <td class="cart-image">
                                                                <img src="{{ asset('product-images/'.$c->products->photo) }}" alt="" width="50" height="50">
                                                            </td>
                                                            <td class="cart-product-name-info">
                                                                <h4 class='cart-product-description'>{{ $c->products->product_name }}</h4>
                                                            </td>
                                                            <td class="cart-product-quantity"><h4 class="cart-sub-total-price">{{ $c->product_qty }}</h4></td>
                                                            <td class="cart-product-sub-total"><h4 class="cart-sub-total-price">TSH {{ number_format($c->products->product_price),0 }}</h4></td>

                                                        </tr>


                                                        @php $total += $c->products->product_price * $c->product_qty; @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <h4 class='cart-product-name-info pull-right'>Grand Total TSH {{ number_format($total),0 }}</h4>


                                        <h4 class="card-subtitle mt-lg-4 text-muted">Delivery Information</h4>


                                        <div class="row mt-lg-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Delivery Location <span style="color: red; font-size: 20px;">*</span></label>
                                                    <input type="text" name="delivery_location" class="form-control" placeholder="Enter Your Delivery Location" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">House Number</label>
                                                    <input type="text" name="house_no" class="form-control" placeholder="Enter House Number">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="shopping-cart-btn">
                                            
                                            <span class="">
                                                <button type="submit" name="ordersubmit" class="btn btn-upper btn-primary ">PLACE ORDER</button>
                                            </span>
                                        </div>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
       

    </section>


@endsection
