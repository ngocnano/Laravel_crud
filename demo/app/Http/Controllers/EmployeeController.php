<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function getAll(){
        $employees = Employee::all();
        return view('list', ['employees' => $employees]);
    }

    public function save(Request $request){
        $id = $request->get('id');
        if($id == null){
            $employee = new Employee();
        } else {
            $employee = Employee::find($id);
        }
        $employee->id = $request->get('id');
        $employee->name = $request->get('name');
        $employee->address = $request->get('address');
        $employee->save();
        return redirect()->route("list");
    }

    public function add(){
        return view('edit', ['employee' => null]);
    }

    public function edit($id){
        $employee = Employee::find($id);
        return view('edit', ['employee' => $employee]);
    }

    public function delete($id){
        Employee::destroy($id);
        return redirect()->route("list");
    }
}
