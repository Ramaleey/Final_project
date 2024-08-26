@extends('Admin.layouts.main')

@section('title')
    Dashboard
@endsection

@section('page-content')
    <div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Admin Dashboard </h2>
                    <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="ecommerce-widget">

            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body" style="background-color: rgb(237, 226, 229)">
                            <h5 class="text-muted">Total Income</h5>
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1">{{ number_format($income) }} Tzs</h1>
                            </div>
                            {{--  <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                            </div>  --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body" style="background-color: rgb(165, 185, 165)">
                            <h5 class="text-muted">Total Customer</h5>
                            <div class="metric-value d-inline-block">
                                <h1  style="color: rgb(36, 36, 62)" class="mb-1">{{ count($customer) }}</h1>
                            </div>
                            {{--  <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                            </div>  --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body" style="background-color: rgb(160, 165, 164)">
                            <h5 class="text-muted">Total Product</h5>
                            <div class="metric-value d-inline-block">
                                <h1 style="color: success" class="mb-1">{{ count($product) }}</h1>
                            </div>
                            {{--  <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                <span>N/A</span>
                            </div>  --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body" style="background-color: rgb(232, 238, 238)">
                            <h5 class="text-muted">Coment</h5>
                            <div class="metric-value d-inline-block">
                                <h1 style="color: danger" class="mb-1">{{ count($coment) }}</h1>
                            </div>
                            {{--  <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                <span>-2.00%</span>
                            </div>  --}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body bg-success" >
                            <h5 class="text-muted">Paid Orders</h5>
                            <div class="metric-value d-inline-block">
                                <h1 style="color: rgb(60, 67, 60)" class="mb-1">{{ count($paid_order) }}</h1>
                            </div>
                            {{--  <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                <span>-2.00%</span>
                            </div>  --}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body bg-warning">
                            <h5 class="text-muted">Pending Orders</h5>
                            <div class="metric-value d-inline-block">
                                <h1 style="color: rgb(49, 32, 2)" class="mb-1">{{ count($pending_order) }}</h1>
                            </div>
                            {{--  <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                <span>-2.00%</span>
                            </div>  --}}
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection


  
  