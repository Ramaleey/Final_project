@extends('Admin.layouts.main')


@section('page-content')

<div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Coment </h2>
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
                        <h5 class="card-header">Coment Table</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php $count = 1 @endphp
                                        @foreach ($coment as $co)
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td>{{ $co->full_name }}</td>
                                                <td>{{ $co->email }}</td>
                                                <td>{{ $co->subject }}</td>
                                                <td>{{ $co->message }}</td>
                                                <td>{{ date('M d, Y h:i A', strtotime($co->created_at)) }}</td>
                                                <td>                                       
                                                    <a href="{{ 'delete-coment/'.$co->id }}" onClick="return confirm('Are you sure you want to delete?')"> <i class="fa fa-trash" style="color: red"></i> </a>
        
                                                </td>
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