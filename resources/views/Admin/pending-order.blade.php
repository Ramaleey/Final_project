@extends('Admin.layouts.main')


@section('page-content')

<div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Pending Order </h2>
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
                        <h5 class="card-header">Pending Order Table</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>Reference No</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Payment</th>
                                            <th>Total Amaount</th>
                                            <th> Order Date</th>


                                            <th>Action</th>
                                            <th>Aprove Payment</th>

                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $o)
                                        <tr>
                                            <td>{{ $o->Reference_no }}</td>
                                            <td>{{ $o->customer->f_name }} {{ $o->customer->l_name }}</td>
                                            <td>
                                                @if ( $o->status == 0 )
                                                    <span class="badge badge-warning">Pending</span>
                                                @elseif ($o->status == 2 )
                                                <span class="badge badge-success">Accept</span>
                                                @else
                                                <span class="badge badge-danger">Reject</span>
                                                
                                                @endif
                                            </td>
                                            <td>
                                                @if ( $o->Payment_status == 0 )
                                                    <span class="badge badge-danger">Unpaid</span>
                                                @endif
                                            </td>
                                            <td>{{ number_format($o->Total_price) }}</td>
                                            <td>{{ date('M d, Y', strtotime($o->created_at)) }}</td>

                                            <td>
                                                <form action="{{ route('activate.order',$o->id) }}" method="POST">
                                                    @csrf
                                                @if ( $o->status == 0)
                                                <button type="submit" name="Status" value="2" class="btn btn-success btn-sm">Accept</button>
                                                <button type="submit" name="Status" value="1" class="btn btn-danger btn-sm">Reject</button>
                                                
                                                @elseif ($o->status == 1)
                                                <button type="submit" name="Status" value="0" class="btn btn-warning btn-sm">Pending</button>
                                                <button type="submit" name="Status" value="2" class="btn btn-success btn-sm">Accept</button>
                                                @elseif ($o->status == 2)
                                                <button type="submit" class="btn btn-success btn-sm" disabled>Accepted</button>
                                                
                                                @endif
                                                
                                                <a href="{{ route('view.orders',$o->id) }}" class="btn btn-primary btn-sm">View</a>

                                                </form>
                                                
                                            </td>
                                            <td>
                                                <form action="{{ route('payment-order',$o->id) }}" method="POST">
                                                    @csrf
                                                    @if ( $o->status == 2 && $o->Payment_status == 0)
                                                    <button type="submit" name="payment" value="1" class="btn btn-success btn-sm">Paid</button>
                                                    @endif
                                                </form>
                                            </td>
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