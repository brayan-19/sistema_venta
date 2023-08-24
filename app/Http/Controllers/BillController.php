<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\City;
use App\Models\Employees;
use App\Models\Product;

class BillController extends Controller
{
    public function index ()
    {
        return view('bill.index',[
            'bills' => Bill::paginate()
        ]);
    }
    public function create()
    {
        $cities = City::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $employees = Employees::orderBy('name')->get();
        $products = Product::orderBy('name')->get();
        return view('bill.create', compact('cities', 'customers', 'employees', 'products' ));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'sub_total' =>'required|max:255',
            'total' =>'required|max:255',
            'city_id' =>'required|integer',
            'customer_id' =>'required|integer',
            'employees_id' =>'required|integer',
            'product_id' =>'required|integer',
        ]);
        Bill:: create ($data);

        return back()->with('message','Bill created.');
    }
    public function edit(Bill $bill)
    {
        $cities = City::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $employees = Employee::orderBy('name')->get();
        $products = Product::orderBy('name')->get();
        return view('bills.create', compact('cities', 'customers', 'employees', 'products' ));
    }
    public function update(Bill $bill,Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'sub_total' =>'required|max:255',
            'total' =>'required|max:255',
            'city_id' =>'required|integer',
            'customer_id' =>'required|integer',
            'employees_id' =>'required|integer',
            'product_id' =>'required|integer',
        ]);

        $bill->update($data);

        return back()->with('message', 'bills updated.');
    }
    public function destroy(Bill $bill)
    {
        $bill->delete();
        return  back()->with('message', 'bill deleted.');
    }


}
