@extends('Admin.layouts.main')

@section('title')
    Expenses
@endsection


@section('page-content')
    <div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Expenses</h2>
                    <div class="page-breadcrumb">
                        {{--  <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Category</li>
                            </ol>
                        </nav>  --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="ecommerce-widget">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-header">Expenses Form</h5>
                        <div class="card-body">
                            <form action="{{ route('add-expenses') }}" method="post" id="basicform">
                                @csrf

                                <div class="form-group">
                                    <label for="inputUserName">Expenses Name</label>
                                    <input id="inputUserName" type="text" name="expenses_name"
                                        placeholder="Enter Expenses Name" autocomplete="off" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label for="inputUserName">Expenses Description</label>
                                    <input id="inputUserName" type="text" name="expenses_description"
                                        placeholder="Enter Expenses Description" autocomplete="off" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-space btn-primary">Add Expenses</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <h5 class="card-header">Expenses Table</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Expenses Name</th>
                                            <th>Expeses Descrption</th>
                                            <th>Created At</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php $count = 1 @endphp
                                        @foreach ($expense as $e)
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td>{{ $e->Expenses_name }}</td>
                                                <td>{{ $e->Expenses_Description }}</td>
                                                <td>{{ $e->created_at }}</td>
                                                <td>                                       
                                                    <a href="{{ 'edit-expenses/'.$e->id }}"> <i class="fa fa-edit"></i> </a>
                                                    <a href="{{ 'delete-expenses/'.$e->id }}" onClick="return confirm('Are you sure you want to delete?')"> <i class="fa fa-trash" style="color: red"></i> </a>
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
