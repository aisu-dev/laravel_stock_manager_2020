<?php

namespace App\Http\Controllers;

use App\positions;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    public function AutomaticCreateDefaultPosition(){
        $resp = positions::pluck('pos_name');
        if(count($resp)==0){
            positions::create([
                'pos_name'=>'admin',
                'pos_descp'=>'can create edit update and delete'
            ]);
            positions::create([
                'pos_name'=>'normal',
                'pos_descp'=>'can update.'
            ]);
        }
    }
}
