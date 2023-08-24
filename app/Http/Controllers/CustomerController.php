<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\City;



class CustomerController extends Controller
{
    public function index ()
    {
        return view('customers.index',[
            'customers' => Customer::paginate()
        ]);
    }
    public function create()
    {
        $cities = City::orderBy('name')->get();
        return view('customers.create', compact('cities' ));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'lastname' =>'required|max:255',
            'identification_card' =>'required|max:255',
            'phone' =>'required|max:255',
            'city_id' =>'required|integer',
        ]);
        Customer:: create ($data);

        return back()->with('message','Customer created.');
    }
    public function edit(Customer $customer)
    {
        $cities = City::orderBy('name')->get();
        return view('customers.edit', compact('customer', 'cities'));
    }
    public function update(Customer $customer,Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'lastname' =>'required|max:255',
            'identification_card' =>'required|max:255',
            'phone' =>'required|max:255',
            'city_id' =>'required|integer',
        ]);

        $customer->update($data);

        return back()->with('message', 'customers updated.');
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return  back()->with('message', 'customer deleted.');
    }

}
