<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{

    public function expense(){
        $expense = Expenses::orderBy('id', 'desc')->get();
        return view('Admin.expenses', compact('expense'));
    }
    //

    public function add_expenses(Request $request){
        
        $request->validate([
            'expenses_name' =>['required'],
            'expenses_description' =>['required'],
            
        ]);

        $data = new Expenses();
        $data->Expenses_name = $request->expenses_name;
        $data->Expenses_Description = $request->expenses_description;

        if($data->save()){
            return redirect()->back()->with('success', 'expenses added successfully');
        }else{
            return redirect()->back()->with('error', 'expenses  added Failed ');
        }

    }

    public function edit_expenses($id){
        $data = Expenses::find($id);
        return view('Admin.update-expenses', ['expenses' => $data]);
    }

    public function update_expenses(Request $request, $id){
        
        $request->validate([
            'expenses_name' =>['required'],
            'expenses_description' =>['required']
        ]);

        $data = Expenses::find($id);
        $data->Expenses_name = $request->expenses_name;
        $data->Expenses_Description = $request->expenses_description;


        if($data->save()){
            return redirect()->route('expenses')->with('success', 'expenses Updated successfully');
        }else{
            return redirect()->back()->with('error', 'expenses  Updated Failed ');
        }

    }

    public function delete_expenses($id)
    {
        $expense = Expenses::find($id);
        $del = $expense->delete();
        if($del){
            return redirect()->route('expenses')->with('success',"Expenses Deleted Successfully..!");
        }else{
            return redirect()->route('expenses')->with('fail',"Expenses Not Deleted");
        }
    }


}
