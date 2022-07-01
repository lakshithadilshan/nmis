<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Alluser;
use Session;
use Illuminate\Support\Facades\DB;


class AlluserController extends Controller
{
    function login(Request $req){
        
        $emp_id = $req->emp_id;
        $pass = $req->password;
        // checking from database (pull from db)
        $data = DB::table('allusers')
      ->where('emp_id', '=',$emp_id )
      ->get();

        if(empty($emp_id) || empty($pass) || $pass < 8  ){
            return back();
        }else{
            //assign 
        $pw = $data[0]->password;
        $username = $data[0]->fname;
        $usertype = $data[0]->usertype;


        //validate password   and  usertype 
        if ($pw == $pass && $usertype == 'admin') {

            // if(Session::has('emp_id')){
            //     session()->pull('usernamee');
            //     session()->pull('emp_id');
            //     session()->pull('usertype');
            //     Session::flush();
            //  }
            
            Session::put('usernamee', $username);
            Session::put('emp_id', $emp_id);
            Session::put('usertype',$usertype);
            Session::save();
            return view ('admin.index');
    

        }elseif($pw == $pass && $usertype == 'ma'){
            Session::put('usernamee', $username);
            Session::put('emp_id', $emp_id);
            Session::put('usertype',$usertype);
            Session::save();
            return view('welcome');
            

        }elseif($pw == $pass && $usertype == 'vc'){
            Session::put('usernamee', $username);
            Session::put('emp_id', $emp_id);
            Session::put('usertype',$usertype);
            Session::save();
            return view('welcome');
            

        }elseif($pw == $pass && $usertype == 'dvc'){
            Session::put('usernamee', $username);
            Session::put('emp_id', $emp_id);
            Session::put('usertype',$usertype);
            Session::save();
            return view('welcome');
            

        }elseif($pw == $pass && $usertype == 'ar'){
            Session::put('usernamee', $username);
            Session::put('emp_id', $emp_id);
            Session::put('usertype',$usertype);
            Session::save();
            return view('welcome');
            

        }elseif($pw == $pass && $usertype == 'sar'){
            Session::put('usernamee', $username);
            Session::put('emp_id', $emp_id);
            Session::put('usertype',$usertype);
            Session::save();
            return view('welcome');
            

        }elseif($pw == $pass && $usertype == 'dean'){
            Session::put('usernamee', $username);
            Session::put('emp_id', $emp_id);
            Session::put('usertype',$usertype);
            Session::save();
            return view('welcome');
            

        }elseif($pw == $pass && $usertype == 'normal_user'){
            Session::put('usernamee', $username);
            Session::put('emp_id', $emp_id);
            Session::put('usertype',$usertype);
            Session::save();
            return view('welcome');
            

        }
        elseif($pw != $pass ){
            return back();
        }
      }
    }

    function logout(){
        session()->pull('usernamee');
        session()->pull('emp_id');
        session()->pull('usertype');
        Session::flush();
        return view ('login');
    }
}
