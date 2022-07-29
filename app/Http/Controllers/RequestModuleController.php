<?php

namespace App\Http\Controllers;
use App\Models\requestChat;
use App\Models\RequestType;
use App\Models\UserType;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\RequestList;



class RequestModuleController extends Controller
{
    function show()
    {
        Session::put('index', '');
        Session::put('manage', '');
        Session::put('employee', '');
        Session::put('request', 'side-menu--active');
        Session::put('complain', '');
        Session::put('rave', '');
        Session::put('leave', '');
        Session::put('social', '');
        Session::put('mobile', '');
        Session::save();
        if (session('emp_id')) {
            $data = DB::table('request_lists')
                ->where('emp_id', '=', session('emp_id'))
                ->get();
            $usertypesfresh = UserType::orderBy("created_at", "desc")->get();
            $notice = DB::table('notices')
                ->get();
            $transportReq = DB::table('request_vehicles')
                ->where('status', '=', 'Pending')
                ->get();
            $transportReqcount = count($transportReq);
            $furniture = RequestList::where([
                'status' => 'Pending',
                'req_type' => 'Furniture'
            ])->get();
            $countfurniture = count($furniture);
            $transfer = RequestList::where([
                'status' => 'Pending',
                'req_type' => 'Transfer'
            ])->get();
            $counttransfer = count($transfer);
            $insurance = RequestList::where([
                'status' => 'Pending',
                'req_type' => 'Insurance'
            ])->get();
            $countinsurance = count($insurance);
            $promotion = RequestList::where([
                'status' => 'Pending',
                'req_type' => 'Promotion'
            ])->get();
            $countpromotion = count($promotion);
            $increment = RequestList::where([
                'status' => 'Pending',
                'req_type' => 'Increment'
            ])->get();
            $countincrement = count($increment);
            $other = RequestList::where([
                'status' => 'Pending',
                'req_type' => 'Other'
            ])->get();
            $countother = count($other);



            return view('admin.request.adminrequestMain', compact('notice', 'usertypesfresh', 'transportReqcount','countfurniture','counttransfer','countinsurance','countpromotion','countother','countincrement'));

        } else {
            return back();
        }


    }

    function approverequest($id)
    {
        if (session('emp_id')) {
            $affected = DB::table('request_lists')
                ->where('request_id', $id)
                ->update(['status' => 'approved']);
            return back();
        } else {
            return back();
        }

    }

    function rejectrequest($id)
    {
        if (session('emp_id')) {
            $affected = DB::table('request_lists')
                ->where('request_id', $id)
                ->update(['status' => 'Rejected']);
            return back();
        } else {
            return back();
        }

    }

    function admintransportrequest()
    {
        if (session('emp_id')) {
            $data = DB::table('request_vehicles')
                ->get();
            $usertypesfresh = UserType::orderBy("created_at", "desc")->get();

            return view('request', compact('data', 'usertypesfresh'));

        } else {
            return back();
        }
    }

    function adminRequestMoreBTN($id, $emp_id)
    {
        if (session('emp_id')) {

            $data = DB::table('employees')
                ->where('emp_id', $emp_id)
                ->get();
            foreach ($data as $e) {
                $pic = $e->emp_pic;
            }
            $requestdetail = DB::table('request_vehicles')
                ->where('id', $id)
                ->get();
            foreach ($requestdetail as $v) {
                $name = $v->name;
                $desc = $v->description;
                $priority = $v->priority;
            }
            $chatadmin = DB::table('request_chats')
                ->where('request_id', $id)
                ->get();


            return view('admin.request.adminrequestMore', compact('pic', 'emp_id', 'name', 'desc', 'priority', 'id', 'chatadmin'));
        } else {
            return back();
        }
    }

//-----------chat------------------------
    function requestChat(Request $req)
    {
        $chat = new requestChat;
        $chat->msg = $req->msg;
        $chat->emp_id = $req->emp_id;
        $chat->selector = $req->selector;
        $chat->request_id = $req->request_id;
        $chat->save();
        return back();

    }

    function adminreqeustfurniture()
    {
        if (session('emp_id')) {
            Session::put('adminreqtitle', 'Furniture');
            Session::save();
            $usertypesfresh = UserType::orderBy("created_at", "desc")->get();
            $data = DB::table('request_lists')
                ->where('req_type', 'Furniture')
                ->get();
            return view('admin.request.adminRequestCommonTable', compact('usertypesfresh', 'data'));
        } else {
            return back();
        }
    }

    function adminrequesttransfer()
    {
        if (session('emp_id')) {
            Session::put('adminreqtitle', 'Transfer');
            Session::save();
            $usertypesfresh = UserType::orderBy("created_at", "desc")->get();
            $data = DB::table('request_lists')
                ->where('req_type', 'Transfer')
                ->get();
            return view('admin.request.adminRequestCommonTable', compact('usertypesfresh', 'data'));
        } else {
            return back();
        }
    }

    function adminrequestinsurance()
    {
        if (session('emp_id')) {
            Session::put('adminreqtitle', 'Insurance');
            Session::save();
            $usertypesfresh = UserType::orderBy("created_at", "desc")->get();
            $data = DB::table('request_lists')
                ->where('req_type', 'Insurance')
                ->get();
            return view('admin.request.adminRequestCommonTable', compact('usertypesfresh', 'data'));
        } else {
            return back();
        }
    }
    function adminrequestpromotion(){
        if (session('emp_id')){
            Session::put('adminreqtitle','Promotion');
            Session::save();
            $usertypesfresh=UserType::orderBy("created_at","desc")->get();
            $data = DB::table('request_lists')
                ->where('req_type','Promotion')
                ->get();
            return view('admin.request.adminRequestCommonTable',compact('usertypesfresh','data'));
        }else{
            return back();
        }
    }
    function adminrequestincrements(){
        if (session('emp_id')){
            Session::put('adminreqtitle','Increment');
            Session::save();
            $usertypesfresh=UserType::orderBy("created_at","desc")->get();
            $data = DB::table('request_lists')
                ->where('req_type','Increment')
                ->get();
            return view('admin.request.adminRequestCommonTable',compact('usertypesfresh','data'));
        }else{
            return back();
        }
    }
    function adminrequestother(){
        if (session('emp_id')){
            Session::put('adminreqtitle','Other');
            Session::save();
            $usertypesfresh=UserType::orderBy("created_at","desc")->get();
            $data = DB::table('request_lists')
                ->where('req_type','Other')
                ->get();
            return view('admin.request.adminRequestCommonTable',compact('usertypesfresh','data'));
        }else{
            return back();
        }
    }

}
