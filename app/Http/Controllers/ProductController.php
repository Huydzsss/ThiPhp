<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view("index", compact("product"));
    }

    /**
     * Show the form for creating a new sresource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'product_type' => 'required',
           'product_code' => 'required',
           'quantity' => 'required',

        ]);
        $product = new Product;
        $product->product_type = $request->product_type;
        $product->product_code = $request->product_code;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect()->route('Product.index')->with('success', 'Product added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
    $product = Product::find($id);
    return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product,$id)
    {
        $product = Product::find($id);
        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'product_type' => 'required|string|max:3',
            'quantity'     => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/|min:0',
            'note'         => 'nullable|string|max:60',
        ]);
        $product = Product::find($request->product_id);
        $product->product_type = $validatedData['product_type'];
        $product->quantity = $validatedData['quantity'];
        $product->note = $validatedData['note'];
        $product->save();
        return redirect()->route('Product.index')->with('success', 'Product updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,$id)
    {
        $product =Product::find($id);
        $product->delete();
        return redirect()->route('Product.index')->with('success','Delete successfully.');
    }
}
