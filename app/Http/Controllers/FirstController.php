<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use Illuminate\Http\Request;
use App\member;
use Carbon\Carbon;
use App\family;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FirstController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $members = member::all();
        $activec=0;
        return view('pages.home',compact('members','activec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }


    /**
     * Show the view for stats
     *
     * @return \Illuminate\Http\Response
     */
    public function stats(){
        return view('pages.stats');
    }




    /**
     * Show the view for stats
     *
     * @param MemberRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberRequest $request){

        $family = new family;
        $member = new member;
        $family->Agency = $request['Agency'];
        $family->letterdate = Carbon::now();
        $family->Address1 = $request['address1'];
        $family->address2 = $request['address2'];
        $family->city = $request['city'];
        $family->postalCode = $request['postalCode'];
        $family->PhoneNo = $request['PhoneNo'];
        $family->province = $request['province'];
        $family->StartDate = Carbon::now();
        $family->save();
        $FID=family::orderBy('FID','desc')->first()->FID;
        $member->Fname = $request['Fname'];
        $member->Lname = $request['Lname'];
        $member->Other =  $request['Other']==null ? false : true;
        $member->Clothing =  $request['Clothing']==null ? false : true;
        $member->Furniture =  $request['Furniture']==null ? false : true;
        $member->FID = $FID;
        $member->save();
        $MID=member::orderBy('MID','desc')->first()->MID;
        return redirect('members/'.$MID);

    }
}
