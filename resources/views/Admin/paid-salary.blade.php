@extends('Admin.layouts.main')

@section('title')
    Paid Salary
@endsection


@section('page-content')

<div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Paid Salary </h2>
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
                        <h5 class="card-header">Paid Salary Table</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Employee Name</th>
                                            <th>Expenses Type</th>
                                            <th>Total Amaount</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $count = 1 @endphp
                                        @foreach ($paid as $o)
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $o->employee->Full_name }}</td>
                                            <td>{{ $o->expenses->Expenses_name }}</td>
                                            <td>{{ number_format($o->Amount) }}</td>
                                            <td>
                                                @if ( $o->salary_status == '1' )
                                                    <span class="badge badge-success">Paid</span>
                                                @endif
                                            </td>
                                            <td>{{ date('M d, Y', strtotime($o->created_at)) }}</td>

                                        </tr>
                                        @php $count ++ @endphp
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