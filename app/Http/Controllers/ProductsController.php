<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::orderBy('name', 'asc')->paginate(5);
        return view('admin.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $p = new Product; 
        $p->name = $request->input('name');
        $p->price = $request->input('price');
        // $p->stock = $request->input('stock');
        $p->image = "null";
        $p->stock = 10;
        $p->category = "A";

        // $p->category = $request->input('category');
        $p->desc = $request->input('description');
        $p->save();
        
        return redirect('admin/products')->with('success', 'Product successfully added');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products=Product::find($id);
        return view('admin.show')->with('products', $products);
    }

    public function edit($id)
    {
        $products=Product::find($id);
        return view('admin.edit')->with('products', $products);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $p = Product::find($id); 
        $p->name = $request->input('name');
        $p->price = $request->input('price');
        // $p->stock = $request->input('stock');
        $p->image = "null";
        $p->stock = 10;
        $p->category = "A";

        // $p->category = $request->input('category');
        $p->desc = $request->input('description');
        $p->save();
        
        return redirect('admin/products')->with('success', 'Product Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect('admin/products')->with('success', 'Product Removed');

    }
}
