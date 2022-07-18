<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\employee;
use App\Models\post;
use App\Models\reaction;
use App\Models\SocialMediaNotification;
use App\Models\socialmediaprofile;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;



class SocialMediaController extends Controller
{
    function begin(){
        if(session('emp_id')){
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
            $data=Post::orderBy("updated_at","desc")->get();
            //load employee row
            $employeerow = DB::table('employees')
                ->where('emp_id', '=',session('emp_id') )
                ->get();
            //load employee table
            $employeeall=employee::orderBy("created_at","desc")->get();

            //loading comments
            $comments=Comment::orderBy("updated_at","desc")->get();
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
            //load reactors
            $reactors = DB::table('reactions')->get();
            //load notofications
            $notifi = DB::table('social_media_notifications')
                ->where('to_people','=',session('emp_id'))
                ->get();


            //load socialprofile table
            $socpro = DB::table('socialmediaprofiles')
                ->where('emp_id', '=',session('emp_id') )
                ->get();
            //make sessions for social media user side
            $dp=$socpro[0]->profilepic;
            $bio=$socpro[0]->bio;
            $username=$socpro[0]->username;
            $name=$socpro[0]->name;
            $socpostcount=$socpro[0]->postcount;
            $socemail=$socpro[0]->email;
            $socinsta=$socpro[0]->insta;
            $soctwitter=$socpro[0]->twitter;

            Session::put('socpropic',$dp);
            Session::put('socbio',$bio);
            Session::put('socusername',$username);
            Session::put('socname',$name);
            Session::put('socpostcount',$socpostcount);
            Session::put('socemail',$socemail);
            Session::put('socinsta',$socinsta);
            Session::put('soctwitter',$soctwitter);
            Session::save();


            return view('socialmedia',compact('data','employeeall','commentCount','reactCount','comments','reactors','notifi'));
//        return view('socialmedia','data');


        }else{
            return back();
        }
         }
//load addpost page
    function addpost(){
        if(session('emp_id')){
            return view('addpost');
        }else{
            return back();
        }

    }
    //uplooad post
    function savepost(Request $req){
        if(session('emp_id')){
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


        }else{
            return back();
        }

    }

    //upload comment
    function saveComment(Request $req){
        if(session('emp_id')){
            $pid = $req->post_id;
            $savecom = new Comment();
            $savecom->text = $req->text;
            $savecom->emp_id = session('emp_id');
            $savecom->post_id = $req->post_id;
            $savecom->save();
            $pid = $req->post_id;
//            $pcount = post::select("comment_count")
//                ->where("id", "=", $pid)
//                ->first();
//
//            $pp = $pcount+1;
//            dd($pp);
//            $affected = DB::table('posts')
//                ->where('id', $req->postid)
//                ->update(['comment_count' => $pp,]);
            $notify = new SocialMediaNotification();
            $notify->text = 'Commented on your'.' '.$req->post_title .' photo';
            $notify->pic_people = session('propic');
            $notify->to_people = $req->to_people;
            $notify->did_people = session('usernamee');

            $notify->save();




            return back();

        }else{
            return back();
        }

    }
    //edit post
    function usereditpost($postid){
        $posts = DB::table('posts')
            ->where('id', '=',$postid )
            ->get();
        return view('user.usersocialmediaeditpost',compact('posts'));
    }

    //react store
    function storereact(Request $req){

        $data = reaction::where([['emp_id','=',session('emp_id')],['post_id','=', $req->post]])->first();


        if(!isset($data)){
            //set session
            Session::put('style','style="color:darkred;"');
            Session::save();
            $reac = new reaction;
            $reac->post_id = $req->post;
            $reac->emp_id = session('emp_id');
            $reac->save();

        }else{

        }

        if($reac->id){
            return response(200);
        }
        return response(400);

    }
    function editpostsavebyuser(Request $req){
        if(session('emp_id')) {
            $postid = $req->postid;
            $title = $req->title;
            $location = $req->location;
            $description = $req->description;

            $image = time() . "." . $req->picture->extension();
            $pic = $image;
            $req->picture->move(public_path('/'), $image);


            $affected = DB::table('posts')
                ->where('id', $postid)
                ->update(['title' => $title, 'location' => $location, 'description' => $description, 'picture' => $pic]);
            return Redirect()->route('social');
        }else{
            return back();
        }

    }
    function socialmediaprofile(){
        $postsforpro = DB::table('posts')
            ->where('emp_id', '=',session('emp_id') )
            ->get();
        $profile = DB::table('socialmediaprofiles')
            ->where('emp_id', '=',session('emp_id') )
            ->get();
        $postsforprocount = DB::table('posts')
            ->where('emp_id', '=',session('emp_id') )
            ->get()->count();


        return view('user.socialmediaprofile',compact('postsforpro','profile','postsforprocount'));
    }

    function updateprofile(Request $req){
        $image = time() . "." . $req->picture->extension();
        $pic = $image;
        $req->picture->move(public_path('/'), $image);

        $bio = $req->bio;
        $username = $req->username;
        $name = $req->name;
        $email = $req->email;
        $instagram = $req->insta;
        $twitter = $req->twitter;

        $affected = DB::table('socialmediaprofiles')
            ->where('emp_id', session('emp_id'))
            ->update(['profilepic' => $pic, 'bio' => $bio, 'username' => $username, 'name' => $name, 'email' => $email,'insta' => $instagram,'twitter' => $twitter]);
        session()->pull('socpropic');
        session()->pull('socbio');
        session()->pull('socusername');
        session()->pull('socname');
        session()->pull('socemail');
        session()->pull('socinsta');
        session()->pull('soctwitter');
        Session::flush();

        Session::put('socpropic',$pic);
        Session::put('socbio',$bio);
        Session::put('socusername',$username);
        Session::put('socname',$name);
        Session::put('socemail',$email);
        Session::put('socinsta',$instagram);
        Session::put('soctwitter',$twitter);
        Session::save();
        return Redirect()->route('socialmediaprofile');







    }


}
