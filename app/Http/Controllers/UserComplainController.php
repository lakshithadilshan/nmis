<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class UserComplainController extends Controller
{
    function UserComplaintmodule(){
        Session::put('index', '');
        Session::put('manage', '');
        Session::put('employee','');
        Session::put('request','');
        Session::put('complain','side-menu--active');
        Session::put('rave', '');
        Session::put('social','');
        Session::put('leave','');
        Session::put('mobile','');
        Session::save();
        $data = DB::table('complains')
            ->where('emp_id', '=',session('emp_id') )
            ->get();
        return view('user.userComplain',compact('data'));
    }

    function storeComplain(Request $req){
        $com = new Complain;
        $com->description =$req->description;
        $com->emp_id = session('emp_id');
        $image = time(). ".".$req->picture->extension();
        $com->picture = $image;
        $req->picture->move(public_path('/'),$image);
        $com->save();
        return back();

    }
}
