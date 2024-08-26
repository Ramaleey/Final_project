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
                    <h5 class="card-header">Update Payroll Form</h5>
                    <div class="card-body">
                        <form action="{{ route('update-payroll', [$payroll->id]) }}" method="post" id="basicform" >

                        @csrf
                    
                        <div class="form-group">
                            <label for="">Expenses Type</label>
                            <input type="text" name="expenses_type" value="{{ $payroll->expenses->Expenses_name }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Employee Name</label>
                            <input type="text" name="employee" value="{{ $payroll->employee->Full_name }}" class="form-control" readonly>
    
                        </div>
                        <div class="form-group">
                            <label for="">Amount</label>
                            <input type="text" name="amount" value="{{ $payroll->amount }}" placeholder="Enter Amount" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-space btn-primary">Update Payroll</button>

                            
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection