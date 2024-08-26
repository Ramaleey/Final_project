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
                            <form action="{{ route('add-product') }}" method="Post" id="basicform" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group">
                                    <label for="inputUserName">Category Name</label>
                                    <select name="category" id="sub_category_name" class="form-control">
                                        <option>Select Category</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Sub Category Name</label>
                                    <select name="sub_category" id="sub_category" class="form-control">

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Product Name</label>
                                    <input id="inputUserName" type="text" name="product_name"
                                        placeholder="Enter Product Name" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Product Type</label>
                                    <select name="product_type" class="form-control">
                                        <option>Select Product Type</option>
                                        <option value="Litre">Litre</option>
                                        <option value="Batch">Batch</option>
                                        <option value="Kilogram">Kilogram</option>
                                        <option value="Piece">Piece</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Description</label>
                                    <input id="inputUserName" type="text" name="description"
                                        placeholder="Enter Description" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Price</label>
                                    <input id="inputUserName" type="text" name="price" placeholder="Enter Price"
                                        autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Usage</label>
                                    <input id="inputUserName" type="text" name="usage" placeholder="Enter Usage"
                                        autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputUserName">Image</label>
                                    <input id="inputUserName" type="file" name="image" placeholder="Enter image"
                                        autocomplete="off" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-space btn-primary">Add Product</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <h5 class="card-header">Product Table</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Category Name</th>
                                            <th>Sub Category</th>
                                            <th>Product Name</th>
                                            <th>Product Type</th>
                                            <th>Price</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @php $count = 1 @endphp
                                        @foreach ($product as $pro)
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td><img src="{{ asset('product-images/'.$pro->photo) }}" width="50" height="40"></td>
                                                <td>{{ $pro->category->category_name }}</td>
                                                <td>{{ $pro->sub_category->sub_category ?? 'N/A' }}</td>
                                                <td>{{ $pro->product_name }}</td>
                                                <td>{{ $pro->product_type }}</td>
                                                <td>{{ number_format($pro->product_price) }}</td>
                                                <td>{{ date('M d, Y', strtotime($pro->created_at)) }}</td>
                                                <td>                                       
                                                    <a href="{{ 'edit-product/'.$pro->id }}"> <i class="fa fa-edit"></i> </a>
                                                    <a href="{{ 'delete-product/'.$pro->id }}" onClick="return confirm('Are you sure you want to delete?')"> <i class="fa fa-trash" style="color: red"></i> </a>
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
