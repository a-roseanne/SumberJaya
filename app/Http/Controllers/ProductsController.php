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
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //handle file
        if($request->hasFile('cover_image')){
            //getFilename
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

            $filename =pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $fileNametoStore = $filename .'_'.time() . '.' . $extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNametoStore);            

        }else{
            $fileNametoStore = 'noImage.jpg';
        }


        $p = new Product; 
        $p->name = $request->input('name');
        $p->price = $request->input('price');
        $p->stock = $request->input('stock');
        $p->category = $request->input('category');
        $p->desc = $request->input('description');
        $p->cover_image = $fileNametoStore;
        
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
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //handle file
        if($request->hasFile('cover_image')){
            //getFilename
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();

            $filename =pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $fileNametoStore = $filename .'_'.time() . '.' . $extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNametoStore);            

        }else{
            $fileNametoStore = 'noImage.jpg';
        }


        $p = Product::find($id); 
        $p->name = $request->input('name');
        $p->price = $request->input('price');
        $p->stock = $request->input('stock');
        $p->category = $request->input('category');
        $p->desc = $request->input('description');
        $p->cover_image = $fileNametoStore;
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
