<?php

namespace App\Http\Controllers;

use App\Models\Alluser;
use App\Models\Comment;
use App\Models\post;
use App\Models\RequestList;
use Illuminate\Http\Request;
use Session;

class AdminSocialMediaController extends Controller
{
    function begin(){
        Session::put('index', '');
        Session::put('manage', '');
        Session::put('employee','');
        Session::put('request','');
        Session::put('complain', '');
        Session::put('rave', '');
        Session::put('social','side-menu--active');
        Session::put('mobile','');
        Session::save();
        $activeuser=Alluser::where('status','=','active')->count();
        $offuser=Alluser::where('status','=','offline')->count();
        $postactive=post::all()->count();


        return view('admin.adminsocialmedia', compact('activeuser','offuser','postactive'));
        //return view('request',$data);

    }

    function loaduser(){
        Session::put('index', '');
        Session::put('manage', '');
        Session::put('employee','');
        Session::put('request','');
        Session::put('complain', '');
        Session::put('rave', '');
        Session::put('social','side-menu--active');
        Session::put('mobile','');
        Session::save();
        $data=Alluser::orderBy("created_at","asc")->get();
        return view('admin.adminsocialmanageuser', compact('data'));


    }

    function loadcomments(){
        Session::put('index', '');
        Session::put('manage', '');
        Session::put('employee','');
        Session::put('request','');
        Session::put('complain', '');
        Session::put('rave', '');
        Session::put('social','side-menu--active');
        Session::put('mobile','');
        Session::save();
        $data=Comment::orderBy("created_at","asc")->get();
        return view('admin.adminsocialmediacomments', compact('data'));
    }

    function loadposts(){
        Session::put('index', '');
        Session::put('manage', '');
        Session::put('employee','');
        Session::put('request','');
        Session::put('complain', '');
        Session::put('rave', '');
        Session::put('social','side-menu--active');
        Session::put('mobile','');
        Session::save();
        $data=Post::orderBy("created_at","asc")->get();
        return view('admin.adminsocialpost', compact('data'));


    }
//--------------------delete---------------------------------------------------------------
    function deletepost($postid){
        post::where('id', '=', $postid)->delete();
        return back();

    }



    function deletecomment($postid){
        Comment::where('Comment_id', '=', $postid)->delete();
        return back();

    }


}
