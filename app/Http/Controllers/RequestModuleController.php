<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\RequestList;
use Illuminate\Support\Facades\DB;


class RequestModuleController extends Controller
{
    function show(){

        $data=RequestList::orderBy("created_at","desc")->get();
        return view('request', compact('data')); 
        //return view('request',$data);
    
    }
}
