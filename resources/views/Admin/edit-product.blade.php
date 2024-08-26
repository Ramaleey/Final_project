@extends('Admin.layouts.main')


@section('page-content')
    <div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Product </h2>
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
                <div class="col-md-3">
                    <div class="card">
                        <h5 class="card-header">Product Form</h5>
                        <div class="card-body">
                            <form action="{{ route('update-product', [$product->id]) }}" method="Post" id="basicform" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="inputUserName">Category Name</label>
                                    <select name="category" id="sub_category_name" class="form-control">
                                        <option>Select Category</option>
                                        @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : '' }}>{{ $cat->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Sub Category Name</label>
                                    <select name="sub_category" id="sub_category" class="form-control">
                                        @foreach ($subcategory as $sub)
                                        <option value="{{ $sub->id }}" {{ $sub->id == $product->subCategory_id ? 'selected' : '' }}>{{ $sub->sub_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Product Name</label>
                                    <input id="inputUserName" type="text" name="product_name"
                                        placeholder="Enter Product Name" value="{{ $product->product_name }}" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Product Type</label>
                                    <select name="product_type" class="form-control">
                                        <option>Select Product Type</option>
                                        <option value="Litre" {{ $product->product_type == 'Litre' ? 'selected' : '' }} >Litre</option>
                                        <option value="Batch" {{ $product->product_type == 'Batch' ? 'selected' : '' }}>Batch</option>
                                        <option value="Kilogram" {{ $product->product_type == 'Kilogram' ? 'selected' : '' }}>Kilogram</option>
                                        <option value="Piece" {{ $product->product_type == 'Piece' ? 'selected' : '' }}>Piece</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Description</label>
                                    <input id="inputUserName" type="text" name="description"
                                        placeholder="Enter Description" value="{{ $product->product_description }}" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Price</label>
                                    <input id="inputUserName" type="text" name="price" value="{{ $product->product_price }}" placeholder="Enter Price"
                                        autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Usage</label>
                                    <input id="inputUserName" type="text" name="usage" value="{{ $product->product_usage }}" placeholder="Enter Usage"
                                        autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Image</label> <br>
                                    <img src="{{ asset('product-images/'.$product->photo) }}" width="130" height="100"> <br> <br>
                                    <input id="inputUserName" type="file" name="image" placeholder="Enter image"
                                        autocomplete="off" class="form-control">
                                        <br>
                                    
                                </div>
                                <button type="submit" class="btn btn-space btn-primary">Update Product</button>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>

        </div>
    </div>

  

@endsection
