@extends('Admin.layouts.main')

@section('title')
    Payroll
@endsection


@section('page-content')
    <div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Payroll</h2>
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
            <!-- Button trigger modal -->
            
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
              Add Payroll
            </button>
            
          
            
            <div class="row">
              
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">Payroll Table</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Employee Name</th>
                                            <th>Expenses Type </th>
                                            <th>Amount </th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                            <th>Payment</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php $count = 1 @endphp
                                        @foreach ($payroll as $e)
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td>{{ $e->employee->Full_name }}</td>
                                                <td>{{ $e->expenses->Expenses_name }}</td>
                                                <td>{{ number_format($e->amount) }}</td>
                                                <td>{{ $e->created_at }}</td>
                                                <td>                                       
                                                    <a href="{{ 'edit-payroll/'.$e->id }}"> <i class="fa fa-edit"></i> </a>
                                                    <a href="{{ 'delete-payroll/'.$e->id }}" onClick="return confirm('Are you sure you want to delete?')"> <i class="fa fa-trash" style="color: red"></i> </a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('paySalary',$e->id) }}" method="POST">

                                                        @csrf
                                                        <input type="hidden" name="payroll_id" value="{{ $e->id }}">
                                                        <input type="hidden" name="employee_id" value="{{ $e->employee->id }}">
                                                        <input type="hidden" name="expenses_id" value="{{ $e->expenses->id }}">
                                                        <input type="hidden" name="amount" value="{{ $e->amount }}">

                                                        <button type="submit" class="btn btn-success btn-sm">Pay</button>
                                                    </form>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Employee Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <form action="{{ route('add-payroll') }}" method="post">
                    @csrf

                    <input type="hidden" name="expenses_type" value="{{ $expenses->id }}">
                    
                    <div class="form-group">
                        <label for="">Expenses Type</label>
                        <input type="text" value="{{ $expenses->Expenses_name }}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Employee Name</label>
                        <select name="employee" class="form-control">
                            <option>Choose Employee</option>
                            @foreach ($employee as $emp)
                                <option value="{{ $emp->id }}">{{ $emp->Full_name }} {{ $emp->Job_titlte }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Amount</label>
                        <input type="text" name="amount" placeholder="Enter Amount" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Payroll</button>
                      </div>
                </form>
          </div>
          
        </div>
      </div>
    </div>


@endsection
