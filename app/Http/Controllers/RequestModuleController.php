<?php

namespace App\Http\Controllers;
use App\Models\RequestType;
use App\Models\UserType;
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
        if(session('emp_id')){
            $data = DB::table('request_lists')
                ->where('emp_id', '=',session('emp_id') )
                ->get();
            $usertypesfresh=UserType::orderBy("created_at","desc")->get();


            return view('request',compact('data','usertypesfresh'));

        }else{
            return back();
        }


    }
    function approverequest($id){
        if(session('emp_id')){
            $affected = DB::table('request_lists')
                ->where('request_id', $id)
                ->update(['status' => 'approved']);
            return back();
        }else{
            return back();
        }

    }
    function rejectrequest($id){
        if(session('emp_id')){
            $affected = DB::table('request_lists')
                ->where('request_id', $id)
                ->update(['status' => 'Rejected']);
            return back();
        }else{
            return back();
        }

    }


}
