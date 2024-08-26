<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Expenses;
use App\Models\Payroll;
use App\Models\PayrollPayment;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   
    public function employee(){
        $employee = Employee::orderBy('created_at', 'desc')->get();
        return view('Admin.employee', compact('employee'));
    }

    public function paid_salary(){
        $paid = PayrollPayment::orderBy('created_at', 'desc')->where('salary_status', '1')->get();
        return view('Admin.paid-salary', compact('paid'));
    }

    public function payroll(){
        $employee = Employee::all();
        $expenses = Expenses::where('Expenses_name', 'Salary')->first();
        $payroll = Payroll::orderBy('created_at', 'desc')->get();
        return view('Admin.payroll', compact('payroll', 'expenses', 'employee'));
    }

    public function add_employee(Request $request){
        
        $request->validate([
            'Full_Name' =>['required'],
            'Address' =>['required'],
            'Phone_number' =>['required'],
            'job_title' =>['required'],
            // 'Email' =>['required'],
           
        ]);

        $data = new Employee();
        $data->Full_name = $request->Full_Name;
        $data->Address = $request->Address;
        $data->Phone_no = $request->Phone_number;
        $data->Job_titlte = $request->job_title;
        $data->email = $request->Email;

        if($data->save()){
            return redirect()->back()->with('success', 'Employee added successfully');
        }else{
            return redirect()->back()->with('error', 'Employee  added Failed ');
        }

    }

    public function delete_employee($id)
    {
        $employee = Employee::find($id);
        $del = $employee->delete();
        if($del){
            return redirect()->route('employee')->with('success',"Employee Deleted Successfully..!");
        }else{
            return redirect()->route('employee')->with('fail',"Employee Not Deleted");
        }
    }
    
    public function edit_employee($id){
        $data = Employee::find($id);
        return view('Admin.update-employee', ['employee' => $data]);
    }

    public function update_employee(Request $request, $id){
        
        $request->validate([
            'Full_Name' =>['required'],
            'Address' =>['required'],
            'Phone_number' =>['required'],
            'job_title' =>['required'],
            // 'Email' =>['required'],
           
        ]);

        $data = Employee::find($id);
        $data->Full_name = $request->Full_Name;
        $data->Address = $request->Address;
        $data->Phone_no = $request->Phone_number;
        $data->Job_titlte = $request->job_title;
        $data->email = $request->Email;

        if($data->save()){
            return redirect()->route('employee')->with('success', 'Employee Updated successfully');
        }else{
            return redirect()->route('employee')->with('error', 'Employee  Updated Failed ');
        }

    }


    //payroll
    public function add_payroll(Request $request){
        
        $request->validate([
            'expenses_type' =>['required'],
            'employee' =>['required'],
            'amount' =>['required'],           
        ]);

        $data = new Payroll();
        $data->expenses_id = $request->expenses_type;
        $data->employee_id = $request->employee;
        $data->amount = $request->amount;

        if($data->save()){
            return redirect()->back()->with('success', 'Payroll added successfully');
        }else{
            return redirect()->back()->with('error', 'Payroll  added Failed ');
        }

    }

    public function delete_payroll($id)
    {
        $payroll = Payroll::find($id);
        $del = $payroll->delete();
        if($del){
            return redirect()->route('payroll')->with('success',"Payroll Deleted Successfully..!");
        }else{
            return redirect()->route('payroll')->with('fail',"Payroll Not Deleted");
        }
    }

    public function edit_payroll($id){
        $expense = Expenses::where('Expenses_name', 'salary')->get();
        $employee = Employee::all();
        $data = Payroll::find($id);
        return view('Admin.update-payroll', ['payroll' => $data, 'expenses' => $expense, 'employee' => $employee]);
    }

    public function update_payroll(Request $request, $id){
        
        $request->validate([
            'expenses_type' =>['required'],
            'employee' =>['required'],
            'amount' =>['required'],           
        ]);

        $data = Payroll::find($id);
        $data->amount = $request->amount;

        if($data->save()){
            return redirect()->route('payroll')->with('success', 'Payroll Updated successfully');
        }else{
            return redirect()->route('payroll')->with('error', 'Payroll  Updated Failed ');
        }

    }

    public function paySalary(Request $request, $id){
        
        $request->validate([
            'employee_id' =>['required'],
            'payroll_id' =>['required'],
            'expenses_id' =>['required'],       
            'amount' =>['required'],           

        ]);

        // dd($request->all());

        $data = Payroll::find($id);

        $data = new PayrollPayment();
        $data->employee_id = $request->employee_id;
        $data->payroll_id = $request->payroll_id;
        $data->expenses_id = $request->expenses_id;
        $data->Amount = $request->amount;

        if($data->save()){
            return redirect()->route('paid-salary')->with('success', 'Payroll Has Been Paid successfully');
        }else{
            return redirect()->route('payroll')->with('error', 'Failed To Pay Payroll ');
        }

    }

}
