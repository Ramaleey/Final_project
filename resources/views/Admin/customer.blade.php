@extends('Admin.layouts.main')


@section('page-content')

<div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Customer </h2>
                    <div class="page-breadcrumb">
                        {{--  <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product</li>
                            </ol>
                        </nav>  --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="ecommerce-widget">
               <div class="row">
                      
                    <div class="col-md-12">
                        <div class="card">
                        <h5 class="card-header">Customer Table</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Mobile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $c)
                                        <tr>
                                            <td>{{ $c->f_name}} {{ $c->l_name}}</td>
                                            <td>{{ $c->email}}</td>
                                            <td>{{ $c->address}}</td>
                                            <td>{{ $c->phone_no}}</td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

           
            
        </div>
    </div>

@endsection