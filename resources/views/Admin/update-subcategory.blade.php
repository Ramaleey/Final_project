@extends('Admin.layouts.main')
@section('title')
   Update Sub Category
@endsection


@section('page-content')

<div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Update Sub Category </h2>
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
                        <h5 class="card-header">Update Sub Category Form</h5>
                        <div class="card-body">
                            <form action="{{ route('update.sub-category', [$sub->id]) }}" method="Post" id="basicform" >

                                @csrf

                                <div class="form-group">
                                    <label for="inputUserName">Category Name</label>
                                    <select name="category_id" class="form-control">
                                        <option>Select Category</option>
                                        @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}" {{ $cat->id == $sub->cat_id ? 'selected' : '' }}>{{ $cat->category_name }}</option>
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
                                    <input id="inputUserName" type="text" value="{{ $sub->sub_category }}" name="sub_category" placeholder="Enter Sub Category Name" autocomplete="off" class="form-control">
                                    @error('sub_category')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong><em>{{ $message }}</em></strong>
                                    </span>
                                @enderror
                                </div>
                                    <div class="form-group">
                                    <label for="inputUserName">Description</label>
                                    <input id="inputUserName" type="text" name="description" value="{{ $sub->description }}" placeholder="Enter Description" autocomplete="off" class="form-control">
                                    @error('description')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong><em>{{ $message }}</em></strong>
                                    </span>
                                @enderror
                                </div>
                                    <button type="submit" class="btn btn-space btn-primary">Update Sub Category</button>
                            </form>
                        </div>
                    </div>
                </div>
               
                </div>
            </div>
           
        </div>
    </div>

@endsection