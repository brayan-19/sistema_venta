<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Providers;
use App\Models\City;


class ProvidersController extends Controller
{
    public function index ()
    {
        return view('providers.index',[
            'providers' => Providers::paginate()
        ]);
    }
    public function create()
    {
        $cities = City::orderBy('name')->get();
        return view('providers.create', compact('cities' ));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'last_name' =>'required|max:255',
            'phone' =>'required|max:255',
            'city_id' =>'required|integer',
        ]);
        Providers:: create ($data);

        return back()->with('message','Providers created.');
    }
    public function edit(Providers $provider)
    {
        $cities = City::orderBy('name')->get();
        return view('providers.edit', compact('provider', 'cities'));
    }
    public function update(Providers $providers,Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'last_name' =>'required|max:255',
            'phone' =>'required|max:255',
            'city_id' =>'required|integer',
        ]);

        $providers->update($data);

        return back()->with('message', 'providers updated.');
    }
    public function destroy(Providers $providers)
    {
        $providers->delete();
        return  back()->with('message', 'providers deleted.');
    }

}
