@extends('layouts.main')

@section('title')
    My Orders
@endsection

@section('main-content')
    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>My Orders</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>My Orders</li>
                </ol>
            </div>

        </div>
    </section><!-- End My Orders Section -->

    <!-- ======= Services Section ======= -->
    <section class="services service-details">
        <div class="container">

            <div class="card">
                <div class="card-header">My Orders</div>
                <div class="card-body">
                    <h3 class="card-subtitle mb-2 text-muted">My Orders Information</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="cart-description item">Reference No</th>
                                            <th class="cart-total item">Total Price</th>
                                            <th class="cart-total item">Status</th>
                                            <th class="cart-description item">Order Date</th>
                                            <th class="cart-total last-item">Action</th>
                                        </tr>
                                    </thead><!-- /thead -->

                                    <tbody>

                                        @foreach ($orders as $order)
                                            <tr>
                                                <td class="cart-image">
                                                    <h4 class='cart-product-description'>
                                                        <center>{{ $order->Reference_no }}</center>
                                                    </h4>
                                                </td>
                                                <td class="cart-product-description">
                                                    <h4>
                                                        <center>{{ number_format($order->Total_price, 0) }}</center>
                                                    </h4>
                                                </td>
                                                <td>
                                                    @if ($order->status == 0)
                                                        <span class="badge badge-pill badge-warning">Pending</span>                                                        
                                                    @else
                                                        <span class="badge badge-pill badge-success">Accepted</span>
                                                    @endif

                                                </td>
                                                <td class="cart-product-sub-total">
                                                    <h4>{{ date('M d, Y', strtotime($order->created_at)) }}</h4>
                                                </td>

                                                <td>
                                                    <div class="pull-right">
                                                        <a href="{{ route('view-orders', [$order->id]) }}"
                                                            class="btn btn-primary btn-sm">view</a>
                                                        <a href="{{ route('delete-orders', [$order->id]) }}"
                                                            class="btn btn-danger btn-sm">delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody><!-- /tbody -->
                                </table><!-- /table -->

                            </div>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>



        </div>


    </section>
@endsection
