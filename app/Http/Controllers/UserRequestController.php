<?php

namespace App\Http\Controllers;
use App\Models\RequestList;
use App\Models\Comment;
use App\Models\RequestType;
use App\Models\RequestVehicle;
use App\Models\Vehicle;
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
        $notice = DB::table('notices')
            ->get();
        $requesttypesfresh=RequestType::orderBy("created_at","desc")->get();
        return view('user.request.userRequest',compact('notice'));
//        return view('user.userRequest',compact('data','requesttypesfresh'));
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
            return redirect()->route('usertransportrequest');

        }else{
            return back();
        }
    }

    function cancelrequest($id){
        RequestList::where('request_id', '=', $id)->delete();
        return back();

    }
    function usertransportrequest(){
        if (session('emp_id')){
            $data = RequestVehicle::where([
                'emp_id' => session('emp_id'),
            ])->get();
            $vehicle = Vehicle::Orderby("created_at","desc")->get();
            return view('user.request.userRequestTransport',compact('data','vehicle'));

        }else{
            return back();
        }
    }
    function userrequestfurniture(){
        if (session('emp_id')){
            $data = RequestList::where([
                'emp_id' => session('emp_id'),
                'req_type' => 'Furniture'
            ])->get();
            return view('user.request.userRequestFurniture',compact('data'));
        }else{
            return back();
        }
    }
    function userrequesttransfer(){
        if (session('emp_id')){
            $data = RequestList::where([
                'emp_id' => session('emp_id'),
                'req_type' => 'Transfer'
            ])->get();
            return view('user.request.userRequestTransfer',compact('data'));
        }else{
            return back();
        }
    }
    function userrequestinsurance(){
        if (session('emp_id')){
            $data = RequestList::where([
                'emp_id' => session('emp_id'),
                'req_type' => 'Insurance'
            ])->get();
            return view('user.request.userRequestInsurance',compact('data'));
        }else{
            return back();
        }
    }
    function userrequestpromotion(){
        if (session('emp_id')){
            $data = RequestList::where([
                'emp_id' => session('emp_id'),
                'req_type' => 'Promotion'
            ])->get();
            return view('user.request.userRequestPromotion',compact('data'));
        }else{
            return back();
        }

    }
    function userrequestincrements(){
        if (session('emp_id')){
            $data = RequestList::where([
                'emp_id' => session('emp_id'),
                'req_type' => 'Increment'
            ])->get();
            return view('user.request.userRequestsIncrements',compact('data'));
        }else{
            return back();
        }
    }
    function userrequestother(){
        if (session('emp_id')){
            $data = RequestList::where([
                'emp_id' => session('emp_id'),
                'req_type' => 'Other'
            ])->get();
            return view('user.request.userRequestOther',compact('data'));
        }else{
            return back();
        }
    }
    function storeTransportRequest(Request $req){
        if (session('emp_id')){
            $vehicle = new RequestVehicle;
            $vehicle->emp_id = session('emp_id');
            $vehicle->name = $req->vehicle;
            $vehicle->description = $req->description;
            $vehicle->priority = $req->reqpriority;
            $vehicle->status = 'Pending';
            $vehicle->save();
            return back();

        }else{
            return back();
        }
    }
}
