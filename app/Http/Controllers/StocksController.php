<?php

namespace App\Http\Controllers;
use App\stocks;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    public function index(){
        // TODO: Create automatic default position.
        app('App\Http\Controllers\PositionsController')->AutomaticCreateDefaultPosition();
        app('App\Http\Controllers\EmployeesController')->AutomaticCreateBasedAdmin();
        return view('page.stock.stock');
    }
}
