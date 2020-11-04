<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\products;
use App\stocks;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //Show all products
    public function index() {
        $product = DB::select('select * from products');
        return view('index',compact('product',$product));
    }
    //Insert data DB
    public function create(Request $request) {
        $request->validate([
            'pname'=>'required',
            'pimg'=>'required',
            'type'=>'required',
            'pdes'=>'required',
            'pprice'=>'required'
        ]);
        // print_r($request->input());
        $products = new Products;
        $products->prod_name = $request->pname;
        $products->prod_img = $request->pimg;
        $products->prod_type = $request->type;
        $products->prod_descp = $request->pdes;
        $products->prod_price = $request->pprice;
        $products->prod_amount = $request->pamount;

        $products->save();

        return redirect()->to('/')->send();
    }
    //Creating product form
    public function createform(){
        return view('productcreate');
    }
    //Show product that have selected
    public function show($id) {
        $product = DB::select('select * from products where id = ?',[$id]);
        return view('productedit',['product'=>$product]);
    }

    //Update product by using id
    public function update(Request $request, $id) {
        $pname = $request->input('pname');
        $pimg = $request->input('pimg');
        $type = $request->input('type');
        $pdes = $request->input('pdes');
        $pprice = $request->input('pprice');
        $pamount = $request->input('pamount');

        $update = Carbon::now()->toDateTimeString();
        DB::update('update products set prod_name = ?,prod_img = ?,prod_type = ?, prod_descp = ?, prod_price = ?,prod_amount = ?, updated_at = ? where id = ?',[$pname,$pimg,$type,$pdes,$pprice,$pamount,$update,$id]);
        return redirect()->to('/')->send();
    }

    public function destroy($id) {
        DB::delete('delete from products where id = ?',[$id]);
        return redirect()->back() ->with('alert', 'Delete Successfully!');
    }

    //Search product name
    public function searchbyname(Request $request){
        $search = $request ->get('search');
        $product = DB::table('products')->where('prod_name','like','%'.$search.'%')->paginate(5);
        return view('index',compact('product',$product));
    }

    public function minusamount($id){
        $product = DB::select('select * from products where id = ?',[$id]);
        $update = Carbon::now()->toDateTimeString();

        if(!$product[0]->prod_amount <= 0){
            DB::update('update products set prod_amount = ?, updated_at = ? where id = ?',[$product[0]->prod_amount-1, $update, $id]);
            return redirect()->back() ->with('alert', 'Amount is changed!');
        }else{
            return redirect()->back() ->with('alert', 'This product is already out of amount!');
            
        }
    }
    public function addamount($id){
        $product = DB::select('select * from products where id = ?',[$id]);
        $update = Carbon::now()->toDateTimeString();

        DB::update('update products set prod_amount = ?, updated_at = ? where id = ?',[$product[0]->prod_amount+1, $update ,$id]);
        return redirect()->back() ->with('alert', 'Amount is changed!');
        
    }
    //Search product type
    // public function searchbytype($type){
    //     $product = DB::select('select * from products where prod_type = ?',[$type]);
    //     return view('index',compact('product',$product));
    // }
}
