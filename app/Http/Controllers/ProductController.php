<?php

namespace App\Http\Controllers;

use app\models\Category;
use app\models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index ()
    {
        return view('products.index',[
            'products' =>product::paginate(10)
        ]);
    }
    public function create()
    {
        $categories = category::orderBy('name')->get();
        return view('products.create', compact('categories' ));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'price' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' =>'required|integer',
        ]);
        product:: create ($data);

        return back()->with('message','product created.');
    }
    public function edit(Product $product)
    {
        $categories = Category::orderBy('name')->get();
        return view('products.edit', compact('product', 'categories'));
    }
    public function update(product $Product,Request $request)
    {
        $data = $request->validate([
            'name' =>'required|max:255',
            'price' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/|gt:0',
            'category_id' =>'required|integer',
        ]);
        $product->update($data);
        return back()->with('message', 'product updated.');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return  back()->with('message', 'product deleted.');
    }

}
