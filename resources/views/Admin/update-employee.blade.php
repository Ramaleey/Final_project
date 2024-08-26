@extends('Admin.layouts.main')

@section('title')
   Update Employee
@endsection

@section('page-content')

<div class="container-fluid dashboard-content ">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">update Employee </h2>
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
                        <form action="{{ route('update-employee', [$employee->id]) }}" method="post" id="basicform" >

                        @csrf
                        <div class="form-group">
                            <label for="inputUserName">Expenses Name</label>
                            <input id="inputUserName" type="text" name="Full_Name" value="{{ $employee->Full_name }}" placeholder="Enter Full Name" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputUserName">Address</label>
                            <input id="inputUserName" type="text" name="Address" value="{{ $employee->Address }}" placeholder="Enter Address" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputUserName">Phone No</label>
                            <input id="inputUserName" type="text" name="Phone_number" value="{{ $employee->Phone_no }}" placeholder="Enter Phone Number" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="inputUserName">Job Title</label>
                            <select name="job_title" class="form-control">
                                <option>Select Job Title</option>
                                <option value="Manage" {{ $employee->Job_titlte == 'Manage' ? 'selected' : '' }} >Manage</option>
                                <option value="Day Worker" {{ $employee->Job_titlte == 'Day Worker' ? 'selected' : '' }}>Day Worker</option>
                                <option value="Driver" {{ $employee->Job_titlte == 'Driver' ? 'selected' : '' }}>Driver</option>
                                <option value="Internal Worker" {{ $employee->Job_titlte == 'Internal Worker' ? 'selected' : '' }}>Internal Worker</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName">Email</label>
                            <input id="inputUserName" type="text" name="Email" value="{{ $employee->email }}" placeholder="Enter Your Email" autocomplete="off" class="form-control">
                        </div>
                                <button type="submit" class="btn btn-space btn-primary">Update Employee</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection