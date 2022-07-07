<?php

namespace App\Http\Controllers;
use App\Models\RequestList;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserRequestController extends Controller
{
    function UserRequestmodule(){
        $data = DB::table('request_lists')
            ->where('emp_id', '=',session('emp_id') )
            ->get();
        return view('user.userRequest',compact('data'));

    }
    function storeRequest(Request $req){
        $RequestSave = new RequestList;
        $RequestSave->emp_id = session('emp_id');
        $RequestSave->description = $req->description;
        $RequestSave->req_type = $req->reqtype;
        $RequestSave->priority = $req->reqpriority;
        $RequestSave->save();
        return back();



    }
}
