<?php

namespace App\Http\Controllers;

use App\Models\Alluser;
use App\Models\Comment;
use App\Models\post;
use App\Models\RequestList;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $usertypesfresh=UserType::orderBy("created_at","desc")->get();
        return view('admin.adminsocialmanageuser', compact('data','usertypesfresh'));


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
        if (session('emp_id')){
            post::where('id', '=', $postid)->delete();
            Comment::where('post_id', '=', $postid)->delete();

            return back();
        }

        return back();

    }



    function deletecomment($postid){
        Comment::where('Comment_id', '=', $postid)->delete();
        return back();

    }

    function editComment($commentid){
        //loading comments
        $commentsload=Comment::orderBy("created_at","desc")->get();
        $commentsload = DB::table('comments')
            ->where('Comment_id', '=',$commentid )
            ->get();

        return view ('admin.admineditcomments',compact('commentsload'));
    }

    function editcommentsave(Request $req){
        $com= new Comment;
        $text = $req->description;
        $comid = $req->comment_id;
        $affected = DB::table('comments')
            ->where('Comment_id', $comid)
            ->update(['text' => $text]);
        return Redirect()->route('socialusercomments');


    }
    function admineditpost($postid){
        if(session('emp_id') && session('usetype') == 'admin') {

            $posts = DB::table('posts')
                ->where('id', '=', $postid)
                ->get();

            return view('admin.admineditpost', compact('posts'));
        }
        else{
            return back();
        }
    }
    function editpostsave(Request $req){
        $postid = $req->postid;
        $title = $req->title;
        $location = $req->location;
        $description = $req->description;


        $image = time(). ".".$req->picture->extension();
        $pic = $image;
        $req->picture->move(public_path('/'),$image);

        $affected = DB::table('posts')
            ->where('id',$postid)
            ->update(['title'=>$title,'location'=>$location,'description'=>$description,'picture'=>$pic],['location'=>$location],['description'=>$description],['pic'=>$pic]);
        return Redirect()->route('socialuserposts');

    }

    function deactivateuserforsocial($id){
        if(session('emp_id')){
            $affected = DB::table('allusers')
                ->where('emp_id', $id)
                ->update(['status' => 'Deactivated']);
            return back();
        }else{
            return back();
        }
    }

    function activateuserforsocial($id){
        if(session('emp_id')){
            $affected = DB::table('allusers')
                ->where('emp_id', $id)
                ->update(['status' => 'active']);
            return back();
        }else{
            return back();
        }
    }

    function  changepassword_socialuser(Request $req){
        $id = $req->id;
        $password = $req->pass;

        if(session('emp_id')){
            $affected = DB::table('allusers')
                ->where('emp_id', $id)
                ->update(['password' =>$password ]);
            return back();
        }else{
            return back();
        }
    }


}
