<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;

class UserComplainController extends Controller
{
    function UserComplaintmodule(){
        return view('user.userComplain');
    }

    function storeComplain(Request $req){
        $com = new Complain;
        $com->description =$req->description;
        $com->emp_id = session('emp_id');
//        $image = time(). ".".$req->picture->extension();
//        $com->picture = $image;
//        $req->picture->move(public_path('/'),$image);
        $com->save();
        return back();

    }
}
