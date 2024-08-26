@extends('Admin.layouts.main')
@section('title')
   Sub Category
@endsection


@section('page-content')

<div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Sub Category </h2>
                    <div class="page-breadcrumb">
                        {{--  <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sub Category</li>
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
                        <h5 class="card-header">Sub Category Form</h5>
                        <div class="card-body">
                            <form action="{{ route('add-subcategory') }}" method="Post" id="basicform" >

                                @csrf

                                <div class="form-group">
                                    <label for="inputUserName">Category Name</label>
                                    <select name="category_id" class="form-control">
                                        <option>Select Category</option>
                                        @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong><em>{{ $message }}</em></strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Sub Category Name</label>
                                    <input id="inputUserName" type="text" name="sub_category" placeholder="Enter Sub Category Name" autocomplete="off" class="form-control">
                                    @error('sub_category')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong><em>{{ $message }}</em></strong>
                                    </span>
                                @enderror
                                </div>
                                    <div class="form-group">
                                    <label for="inputUserName">Description</label>
                                    <input id="inputUserName" type="text" name="description" placeholder="Enter Description" autocomplete="off" class="form-control">
                                    @error('description')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong><em>{{ $message }}</em></strong>
                                    </span>
                                @enderror
                                </div>
                                    <button type="submit" class="btn btn-space btn-primary">Add SubCategory</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                    <h5 class="card-header">Sub Category Table</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered first">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Sub Category</th>
                                        <th>Description</th>
                                        <th>Creation date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $count = 1 @endphp
                                    @foreach ($subcategory as $sub)
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $sub->category->category_name }}</td>
                                            <td>{{ $sub->sub_category ?? 'N/A' }}</td>                                        
                                            <td>{{ $sub->description }}</td>
                                            <td>{{ date('M d, Y', strtotime($sub->created_at)) }}</td>
                                            <td>{{ date('M d, Y', strtotime($sub->updated_at)) }}</td>

                                            <td>
                                                <a href="{{ 'edit-sub/'.$sub->id }}" ><i class="fa fa-edit" style="color:green;"></i></a>
                                                <a href="{{ 'delete-sub/'.$sub->id }}" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash" style="color:red;"></i></a></td>
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