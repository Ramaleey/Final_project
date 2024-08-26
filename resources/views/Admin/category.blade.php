@extends('Admin.layouts.main')

@section('title')
    Category
@endsection


@section('page-content')

<div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Category </h2>
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
                        <h5 class="card-header">Category Form</h5>
                        <div class="card-body">
                            <form action="{{ route('add-category') }}" method="post" id="basicform" >
                            @csrf
                                <div class="form-group">
                                    <label for="inputUserName">Category Name</label>
                                    <input id="inputUserName" type="text" name="categoryname" placeholder="Enter Category Name" autocomplete="off" class="form-control">
                                </div>
                                    <button type="submit" class="btn btn-space btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                    <h5 class="card-header">Category Table</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered first">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @php $count = 1 @endphp
                                @foreach ($category as $cat)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{ $cat->category_name }}</td>
                                        <td>{{ date('M d, Y', strtotime($cat->created_at)) }}</td>
                                        <td>{{ date('M d, Y', strtotime($cat->updated_at)) }}</td>
                                        <td>

                                            <a href="{{ 'edit-category/'.$cat->id }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ 'delete-category/'.$cat->id }}" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm">Delete</a>

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