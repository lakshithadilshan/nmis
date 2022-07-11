<?php

namespace App\Http\Controllers;
use App\Models\RequestList;
use App\Models\Comment;
use App\Models\RequestType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class UserRequestController extends Controller
{
    function UserRequestmodule(){
        Session::put('index', '');
        Session::put('manage', '');
        Session::put('employee','');
        Session::put('request','side-menu--active');
        Session::put('complain', '');
        Session::put('rave', '');
        Session::put('social','');
        Session::put('mobile','');
        Session::save();
        $data = DB::table('request_lists')
            ->where('emp_id', '=',session('emp_id') )
            ->get();
        $requesttypesfresh=RequestType::orderBy("created_at","desc")->get();
        return view('user.userRequest',compact('data','requesttypesfresh'));
    }
    function storeRequest(Request $req){
        $RequestSave = new RequestList;
        $RequestSave->emp_id = session('emp_id');
        $RequestSave->description = $req->description;
        $RequestSave->req_type = $req->reqtype;
        $RequestSave->priority = $req->reqpriority;
        $RequestSave->save();
        return back();



    }

    function editrequestdesc(Request $req){
        $id = $req->id;
        $description = $req->description;
        if(session('emp_id')){
            $affected = DB::table('request_lists')
                ->where('request_id', $id)
                ->update(['description' => $description]);
            return redirect()->route('UserRequestmodule');

        }else{
            return back();
        }
    }

    function cancelrequest($id){
        RequestList::where('request_id', '=', $id)->delete();
        return back();

    }
}
