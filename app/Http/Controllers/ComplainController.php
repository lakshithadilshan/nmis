<?php

namespace App\Http\Controllers;
use App\Models\Complain;
use Session;

use Illuminate\Http\Request;

class ComplainController extends Controller
{
 function show(){
     Session::put('index', '');
     Session::put('manage', '');
     Session::put('employee','');
     Session::put('request','');
     Session::put('complain', 'side-menu--active');
     Session::put('rave', '');
     Session::put('social','');
     Session::put('mobile','');
     $data=Complain::orderBy("created_at","desc")->get();
     return view('complain', compact('data'));  }
}
