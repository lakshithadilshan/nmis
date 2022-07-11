<?php

namespace App\Http\Controllers;
use App\Models\Complain;
use App\Models\UserType;
use Session;

use Illuminate\Http\Request;

class ComplainController extends Controller
{
 function show(){
     if(session('emp_id')){
         Session::put('index', '');
         Session::put('manage', '');
         Session::put('employee','');
         Session::put('request','');
         Session::put('complain', 'side-menu--active');
         Session::put('rave', '');
         Session::put('social','');
         Session::put('mobile','');
         $data=Complain::orderBy("created_at","desc")->get();
         $usertypesfresh=UserType::orderBy("created_at","desc")->get();

         return view('complain', compact('data','usertypesfresh'));


     }else{
         return back();
     }
     }

     function admindeletecomplain($id){
         Complain::where('complain_id', '=', $id)->delete();
         return back();

     }
}
