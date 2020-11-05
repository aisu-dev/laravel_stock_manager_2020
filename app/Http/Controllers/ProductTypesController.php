<?php

namespace App\Http\Controllers;
use App\product_types;
use Illuminate\Http\Request;

class ProductTypesController extends Controller
{
    public function AutomaticCreateProductType(){
        $resp = product_types::pluck('type');
        if(count($resp)==0){
            product_types::create([
                'type'=>'Furniture',
            ]);
            product_types::create([
                'type'=>'Clothing',
            ]);
            product_types::create([
                'type'=>'Technology',
            ]);
        }
    }
}
