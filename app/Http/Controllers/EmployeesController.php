<?php

namespace App\Http\Controllers;

use App\employees;
use DateTime;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    // ? PAGE ZONE
    // TODO: return Sign-in Page
    public function signin_page(Request $request){
        if($request->cookie('_uid')){
            return redirect('/');
        }
        return view('page.auth.signin');
    }

    // TODO: return Sign-up Page
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

    // TODO: return emp manage page.
    public function manage_emp_page(Request $request){
        if($request->cookie('_uid')){
            $acc = employees::find($request->cookie('_uid'));
            if($acc->pos_id==1){
                $resp = employees::all();
                return view('page.manage.manage_emp',compact('resp',$resp));
            }
            return redirect('/');
        }
        return redirect('/');
    }

    // TODO: return edit by admin page.
    public function edit_by_admin_page(Request $request,$id){
        $data = employees::find($id);
        return view('page.manage.edit_admin',compact('data',$data));

    }

    // TODO: return edit by emp page.
    public function edit_by_emp_page(Request $request){
        $data = employees::find($request->cookie('_uid'));
        return view('page.manage.edit',compact('data',$data));
    }
    // ? FUNCTION ZONE
    // TODO: sign in and set cookie
    public function signin(Request $request){
        $request->validate([
            'uname'=>'required',
            'pass'=>'required'
        ]);
        $resp = employees::where([['emp_name',$request->uname],['emp_password',$request->pass]])->first();
        if($resp){
            return redirect('/')
                ->cookie(cookie('_uid', $resp->id, 60*60))
                ->cookie(cookie('_posid', $resp->pos_id, 60*60));
        }else{
            return redirect('/signin');
        }
    }

    // TODO: sign up function
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
        return redirect()->to('/')->send()->with('alert', 'Account save successfully!');
    }

// TODO: signout from account.
    public function signout(){
        return redirect('/')
                ->cookie(cookie('_uid', '', -3600))
                ->cookie(cookie('_posid', '', -3600));
    }
// TODO: create admin account.
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
        }else{
            $resp->pos_id = 1;
            $resp->save();
        }
    }

// TODO: update account.
    public function emp_store(Request $request){
        $request->validate([
            'uname'=>'required',
            'upassword'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'dob'=>'required'
        ]);
        $acc = employees::find($request->id);
        $acc->emp_name = $request->uname;
        $acc->emp_password = $request->upassword;
        $acc->emp_address = $request->address;
        $acc->emp_phone = $request->phone;
        $acc->emp_dob = $request->dob;
        $acc->save();
        return redirect()->to('/emp/edit/')->send()->with('alert', 'Account save successfully!');
    }

// TODO: update employee account.
    public function admin_store(Request $request){
        $request->validate([
            'uname'=>'required',
            'upassword'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'dob'=>'required'
        ]);
        $acc = employees::find($request->id);
        $acc->emp_name = $request->uname;
        $acc->emp_password = $request->upassword;
        $acc->emp_address = $request->address;
        $acc->emp_phone = $request->phone;
        $acc->pos_id = $request->pos;
        $acc->emp_dob = $request->dob;
        $acc->save();
        return redirect()->to('/admin/manage_emp')->send()->with('alert', 'Account save successfully!');
    }

    public function admin_delete(Request $request,$id){
        if($request->cookie('_uid')){
            $acc = employees::find($request->cookie('_uid'));
            if($acc->pos_id==1){
                $acc = employees::find($id);
                $acc->delete();
                return redirect('/admin/manage_emp')->send()->with('alert', 'Account delete successfully!');
            }
        }
        return redirect('/');
    }

}
