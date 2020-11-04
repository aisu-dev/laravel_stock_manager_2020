<?php

namespace App\Http\Controllers;

use DB;
use App\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::select('select * from products');
        return view('index',compact('product',$product));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        $this->validate($request,[
            'pname'=>'required',
            'type'=>'required',
            'pdes'=>'required',
            'pprice'=>'required',
            // 'date'=>'required'
        ]);
        print_r($request->input());
        $products = new Products;
        $products->prod_name = $request->pname;
        $products->prod_type = $request->type;
        $products->prod_descp = $request->pdes;
        $products->prod_price = $request->pprice;
        // $products->created_at = $request->date;

        $products->save();
        return redirect()->to('/product')->send();
    }



    public function createform(){
        return view('productcreate');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::select('select * from products where id = ?',[$id]);
        return view('productedit',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
