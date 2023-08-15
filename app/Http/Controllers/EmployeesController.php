<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Employees;


class EmployeesController extends Controller
{
    public function index ()
    {
        return view('employees.index',[
            'employees' => Employees::paginate()
        ]);
    }
    public function create()
    {
        $cities = City::orderBy('name')->get();
        return view('employees.create', compact('cities' ));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'lastname' =>'required|max:255',
            'identification_card' =>'required|max:255',
            'phone' =>'required|max:255',
            'mail' =>'required|max:255',
            'city_id' =>'required|integer',
        ]);
        Employees:: create ($data);

        return back()->with('message','Employees created.');
    }
    public function edit(Employees $employees)
    {
        $cities = City::orderBy('name')->get();
        return view('employees.edit', compact('employees', 'cities'));
    }
    public function update(Employees $employees,Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'lastname' =>'required|max:255',
            'identification_card' =>'required|max:255',
            'phone' =>'required|max:255',
            'mail' =>'required|max:255',
            'city_id' =>'required|integer',
        ]);

        $employees->update($data);

        return back()->with('message', 'employees updated.');
    }
    public function destroy(Employees $employees)
    {
        $employees->delete();
        return  back()->with('message', 'employees deleted.');
    }

}
