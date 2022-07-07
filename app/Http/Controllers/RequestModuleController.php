<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\DB;

use  App\Models\RequestList;



class RequestModuleController extends Controller
{
    function show(){
        Session::put('index', '');
        Session::put('manage', '');
        Session::put('employee','');
        Session::put('request','side-menu--active');
        Session::put('complain', '');
        Session::put('rave', '');
        Session::put('social','');
        Session::put('mobile','');
        Session::save();
        $data = DB::table('request_lists')
            ->where('emp_id', '=',session('emp_id') )
            ->get();
        return view('user.userRequest',compact('data'));
        //return view('request',$data);

    }
}
