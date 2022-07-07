<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\employee;
use App\Models\post;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;



class SocialMediaController extends Controller
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

        //loading posts
        $data=Post::orderBy("created_at","desc")->get();
        //load employee row
        $employeerow = DB::table('employees')
            ->where('emp_id', '=',session('emp_id') )
            ->get();
        //load employee table
        $employeeall=employee::orderBy("created_at","desc")->get();

        //loading comments
        $comments=Comment::orderBy("created_at","desc")->get();
        //count comments
//        SELECT post_id,COUNT(post_id) FROM `comments` GROUP BY post_id;
        $commentCount = DB::table('comments')
            ->select('post_id', DB::raw('count(*) as total'))
            ->groupBy('post_id')
            ->get();
//count reactions
        $reactCount = DB::table('reactions')
            ->select('post_id', DB::raw('count(*) as total'))
            ->groupBy('post_id')
            ->get();


        return view('socialmedia',compact('data','employeeall','commentCount','reactCount','comments'));
//        return view('socialmedia','data');
    }
//load addpost page
    function addpost(){
        return view('addpost');
    }
    //uplooad post
    function savepost(Request $req){

        $post = new post();


        $post->title = $req->title;
        $post->location = $req->location;
        $post->description = $req->description;
        $post->fname = session('usernamee');
        $post->emp_id = session('emp_id');

        $image = time(). ".".$req->picture->extension();
        $post->picture = $image;
        $req->picture->move(public_path('/'),$image);

        $post->save();
        return redirect()->route('social');




    }

    //upload comment
    function saveComment(Request $req){
        $savecom = new Comment();
        $savecom->text = $req->text;
        $savecom->emp_id = session('emp_id');
        $savecom->post_id = $req->post_id;
        $savecom->save();
        return back();
    }
}
