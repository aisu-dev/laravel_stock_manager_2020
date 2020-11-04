<?php

namespace App\Http\Controllers;

use DB;
use Carbon\Carbon;
use App\products;
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
        // $this->validate($request,[
        //     'pname'=>'required',
        //     'stock_image'=>'required',
        //     'type'=>'required',
        //     'pdes'=>'required',
        //     'pprice'=>'required'
        //     // 'date'=>'required'
        // ]);
        // print_r($request->input());
        $products = new Products;
        $products->prod_name = $request->pname;
        $products->prod_img = $request->pimg;
        $products->prod_type = $request->type;
        $products->prod_descp = $request->pdes;
        $products->prod_price = $request->pprice;
        // $products->created_at = $request->date;

        $products->save();
        return redirect()->to('/product')->send();
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
        $update = Carbon::now()->toDateTimeString();
        DB::update('update products set prod_name = ?,prod_img = ?,prod_type = ?, prod_descp = ?, prod_price = ?, updated_at = ? where id = ?',[$pname,$pimg,$type,$pdes,$pprice,$update,$id]);
        return redirect()->to('/product')->send();
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

    //Search product type
    public function searchbytype($type){
        $product = DB::select('select * from products where prod_type = ?',[$type]);
        return view('index',compact('product',$product));
    }
}
