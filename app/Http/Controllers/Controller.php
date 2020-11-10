<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function Home(){
        app('App\Http\Controllers\PositionsController')->AutomaticCreateDefaultPosition();
        app('App\Http\Controllers\ProductTypesController')->AutomaticCreateProductType();
        app('App\Http\Controllers\EmployeesController')->AutomaticCreateBasedAdmin();

        return view('home');
    }
}
