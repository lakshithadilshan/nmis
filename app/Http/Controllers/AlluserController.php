<?php

namespace App\Http\Controllers;

use App\Models\RequestList;
use Illuminate\Http\Request;
use  App\Models\Alluser;
use  App\Models\employee;
use  App\Models\Comment;
use Session;
use Illuminate\Support\Facades\DB;



class AlluserController extends Controller
{
    function login(Request $req)
    {


        $emp_id = $req->emp_id;
        $pass = $req->password;
        // checking from database (pull from db)
        $data = DB::table('allusers')
            ->where('emp_id', '=', $emp_id)
            ->get();
        //pull pro pic
        $propic = DB::table('employees')
            ->where('emp_id', '=', $emp_id)
            ->get();
        $dp = $propic[0]->emp_pic;


        if (empty($emp_id) || empty($pass) || $pass < 8) {
            return back();
        } else {
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
                //slidebar navigation sessions
                Session::put('index', 'side-menu--active');
                Session::put('manage', '');
                Session::put('employee','');
                Session::put('request','');
                Session::put('complain', '');
                Session::put('rave', '');
                Session::put('social','');
                Session::put('mobile','');
                Session::put('personal','');
                Session::put('leave','');


                Session::put('usernamee', $username);
                Session::put('emp_id', $emp_id);
                Session::put('usertype', $usertype);
                Session::put('propic', $dp);
                Session::save();
                return view('admin.index');


            } elseif ($pw == $pass && $usertype == 'ma') {
                Session::put('usernamee', $username);
                Session::put('emp_id', $emp_id);
                Session::put('usertype', $usertype);
                Session::put('propic', $dp);
                Session::save();
                return view('welcome');


            } elseif ($pw == $pass && $usertype == 'vc') {
                Session::put('usernamee', $username);
                Session::put('emp_id', $emp_id);
                Session::put('usertype', $usertype);
                Session::put('propic', $dp);
                Session::save();
                return view('welcome');


            } elseif ($pw == $pass && $usertype == 'dvc') {
                Session::put('usernamee', $username);
                Session::put('emp_id', $emp_id);
                Session::put('usertype', $usertype);
                Session::put('propic', $dp);
                Session::save();
                return view('welcome');


            } elseif ($pw == $pass && $usertype == 'ar') {
                Session::put('usernamee', $username);
                Session::put('emp_id', $emp_id);
                Session::put('usertype', $usertype);
                Session::put('propic', $dp);
                Session::save();
                return view('welcome');


            } elseif ($pw == $pass && $usertype == 'sar') {
                Session::put('usernamee', $username);
                Session::put('emp_id', $emp_id);
                Session::put('usertype', $usertype);
                Session::put('propic', $dp);
                Session::save();
                return view('welcome');


            } elseif ($pw == $pass && $usertype == 'dean') {
                Session::put('usernamee', $username);
                Session::put('emp_id', $emp_id);
                Session::put('usertype', $usertype);
                Session::put('propic', $dp);
                Session::save();
                return view('welcome');


            } elseif ($pw == $pass && $usertype == 'Genaral') {
//            genaral user
//            ----------sidebar---------------------
                Session::put('index', '');
                Session::put('manage', '');
                Session::put('employee', '');
                Session::put('request', 'side-menu--active');
                Session::put('complain', '');
                Session::put('rave', '');
                Session::put('social', '');
                Session::put('mobile', '');
//--------------------------------------------------------
                Session::put('usernamee', $username);
                Session::put('emp_id', $emp_id);
                Session::put('usertype', $usertype);
                Session::put('propic', $dp);
                Session::save();

                $data = DB::table('request_lists')
                    ->where('emp_id', '=', $emp_id)
                    ->get();
                return Redirect()->route('UserRequestmodule');

//            return view('user.userRequest',compact('data'));
//            $data=RequestList::orderBy("created_at","asc")->get();


            } elseif ($pw != $pass) {
                return back();
            }
        }
    }

    function logout()
    {
        session()->pull('usernamee');
        session()->pull('emp_id');
        session()->pull('usertype');
        Session::flush();
        return Redirect()->route('/');

    }

    function loginform()
    {
        return view('login');
    }

    public function mobileapp()
    {

        return view('backend.mobileapp');
    }

    public function EmployeeModule()
    {
        //session for slidebar
        Session::put('index', '');
        Session::put('manage', '');
        Session::put('employee','side-menu--active');
        Session::put('request','');
        Session::put('complain', '');
        Session::put('rave', '');
        Session::put('social','');
        Session::put('mobile','');

        return view('backend.user.employee.employeeModule');
    }

    //dashbord
    function dashboard()
    {
        if (session('emp_id')) {
            Session::put('index', 'side-menu--active');
            Session::put('manage', '');
            Session::put('employee','');
            Session::put('request','');
            Session::put('complain', '');
            Session::put('rave', '');
            Session::put('social','');
            Session::put('mobile','');
            Session::save();
            return view('admin.index');
        }
    }

    //show system profile
    function systemprofile(){
        if(session('emp_id')){
            Session::put('index', '');
            Session::put('manage', '');
            Session::put('employee','');
            Session::put('request','');
            Session::put('complain', '');
            Session::put('rave', '');
            Session::put('social','');
            Session::put('mobile','');
            Session::save();
            $employees = DB::table('employees')
                ->where('emp_id','=',session('emp_id'))
                ->get();
            $pass = DB::table('allusers')
                ->where('emp_id','=',session('emp_id'))
                ->get();
            foreach ($pass as $p){
                $xx =($p->password);
            }


            return view('user.userSystemProfile',compact('employees','xx'));

        }else{
            return back ();
        }
    }

    function systemupdateprofile(Request $req){
        dd($req->add);

    }


}
