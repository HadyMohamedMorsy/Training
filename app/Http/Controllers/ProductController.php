<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\sections;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = product::all();
        return view('Products.product' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = sections::all();
        return view('Products.create' , compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|max:255',
            'Description' => 'required',
            'section_name' => 'required',
        ]);

        product::create([
            'product_name' => $request->product_name,
            'Description' => $request->Description,
            'section_id' => $request->section_name,
        ]);

        return redirect('/products')->with("success","This Product Is Added In Our Data Base");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productSignalShow = product::find($id);

        return view('Products.show' , compact('productSignalShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productSignalEdit = product::find($id);
        
        $sections = sections::all();

        return view('Products.edit' , compact('productSignalEdit' , 'sections'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData= $request->validate([
            'product_name' => 'required',
            'section_name' => 'required',
            'Description' => 'required',
        ]);
        $finderProductToUpdated =  product::find($id);

        $finderProductToUpdated->update([
            'product_name' => $request->product_name,
            'Description' => $request->Description,
            'section_id' => $request->section_name,
        ]);

        return redirect('/products')->with("updated","This Product Is Added In Our Data Base");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finderProductToDelete = product::find($id);
        $finderProductToDelete->delete();
        return redirect('/products')->with("Deleted","This Product Is Deleted In Our Data Base");
    }

    public function getIdSections($id){
        $products = product::where('section_id' , $id)->get(['product_name' , 'id']);
        return json_encode($products , true);
    }
}
