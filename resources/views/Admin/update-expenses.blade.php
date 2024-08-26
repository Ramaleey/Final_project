@extends('Admin.layouts.main')

@section('title')
   Update Expenses
@endsection

@section('page-content')

<div class="container-fluid dashboard-content ">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">update Expenses </h2>
                <div class="page-breadcrumb">
                    {{--  <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">update Expenses</li>
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
                    <h5 class="card-header">updateExpenses Form</h5>
                    <div class="card-body">
                        <form action="{{ route('update-expenses', [$expenses->id]) }}" method="post" id="basicform" >

                        @csrf
                        <div class="form-group">
                            <label for="inputUserName">Expenses Name</label>
                            <input id="inputUserName" type="text" name="expenses_name" value="{{ $expenses->Expenses_name }}" placeholder="Enter Expenses Name" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputUserName">Expenses Description</label>
                            <input id="inputUserName" type="text" name="expenses_description" value="{{ $expenses->Expenses_Description }}" placeholder="Enter Expenses Description" autocomplete="off" class="form-control">
                        </div>
                                <button type="submit" class="btn btn-space btn-primary">Update Expenses</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection