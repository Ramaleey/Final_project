@extends('Admin.layouts.main')

@section('title')
    Employee
@endsection


@section('page-content')
    <div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Employee</h2>
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
              Add Employee
            </button>
            
          
            
            <div class="row">
              
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header">Employee Table</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered first">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Address </th>
                                            <th>Phone Number </th>
                                            <th>Job Title</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php $count = 1 @endphp
                                        @foreach ($employee as $e)
                                            <tr>
                                                <td>{{ $count }}</td>
                                                <td>{{ $e->Full_name }}</td>
                                                <td>{{ $e->Address }}</td>
                                                <td>{{ $e->Phone_no }}</td>
                                                <td>{{ $e->Job_titlte }}</td>
                                                <td>{{ $e->email ?? 'N/A' }}</td>
                                                <td>{{ $e->created_at }}</td>
                                                <td>                                       
                                                    <a href="{{ 'edit-employee/'.$e->id }}"> <i class="fa fa-edit"></i> </a>
                                                    <a href="{{ 'delete-employee/'.$e->id }}" onClick="return confirm('Are you sure you want to delete?')"> <i class="fa fa-trash" style="color: red"></i> </a>
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
                <form action="{{ route('add-employee') }}" method="post">
                    @csrf
                    
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" name="Full_Name" placeholder="Enter your full name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="Address" placeholder="Enter your Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="text" name="Phone_number" placeholder="Enter your Phone Number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Job Title</label>
                        <select name="job_title" class="form-control">
                            <option>Select Job Title</option>
                            <option value ="Manager">Manager</option>
                            <option value="Dayworker">Day Worker</option>
                            <option value="Driver">Driver</option>
                            <option value="Internal Employee">Internal Employee</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="Email" placeholder="Enter your Email" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Employee</button>
                      </div>
                </form>
          </div>
          
        </div>
      </div>
    </div>


@endsection
