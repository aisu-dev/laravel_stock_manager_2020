<?php

namespace App\Http\Controllers;

use App\employees;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeesController extends Controller
{
    public function signin_page(Request $request){
        if($request->cookie('_uid')){
            return redirect('/');
        }
        return view('page.auth.signin');
    }

    public function signup_page(Request $request){

        if($request->cookie('_uid')){
            $acc = employees::find($request->cookie('_uid'));
            if($acc->pos_id==1){
                return view('page.auth.signup');
            }
            return redirect('/');
        }
        return redirect('/');
    }

    public function signin(Request $request){
        $request->validate([
            'uname'=>'required',
            'pass'=>'required'
        ]);
        $resp = employees::where([['emp_name',$request->uname],['emp_password',$request->pass]])->first();
        if($resp){
            $response = new Response();
            $response->withCookie(cookie('_uid', $resp->id, 60*24));
            $response->header('Location',url('/'));
            return $response;
        }else{
            return redirect('/signin')->withCookie($request->cookie('_uid'));
        }
    }

    public function signup(Request $request){
        $request->validate([
            'uname'=>'required',
            'pass'=>'required',
            'address'=>'required',
            'phone'=>'required|max:10',
            'dob'=>'required'
        ]);
        employees::create([
            'emp_name'=>$request->uname,
            'emp_password'=>$request->pass,
            'emp_address'=>$request->address,
            'emp_phone'=>$request->phone,
            'emp_dob'=> $request->dob,
            'pos_id'=>2,
        ]);
        return redirect('/');
    }

    public function AutomaticCreateBasedAdmin(){
        $resp = employees::find(1);
        if(!$resp){
            employees::create([
                'emp_name'=>'admin',
                'emp_password'=>'test',
                'emp_address'=>'abc',
                'emp_phone'=>'0000000000',
                'emp_dob'=> new DateTime(),
                'pos_id'=>1,
            ]);
        }
    }
}
