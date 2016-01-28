<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Http\Requests\PurchaseRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\member;
use App\family;
use App\purchase;
use App\Http\Controllers\Controller;

class membercontroller extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $member=member::findByid($id);
        $pallowed = [
            'clothing'=>$member->select('Clothing')->get(),
            'furniture' => $member->select('Furniture')->get(),
            'other' => $member->select('Other')->get()
        ];
        return view('members.pform',compact('pallowed','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $attribute=array("MID"=>$id);
        $attribute=array_merge($request->all(),$attribute);
        $purchase=purchase::create($attribute);
        return redirect('members/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = member::findByid($id)->Lname;
        $purchases = purchase::where('MID',$id)->get();
        return view('members.previousp',compact('purchases','id','members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $memberbio=member::where('MID',$id)->get()->toArray();
        $familybio=family::where('FID',$memberbio[0]["FID"])->get()->toArray();
        $memberbio=$memberbio[0];
        $memberbio=collect(array_merge($memberbio,$familybio[0]));
        return view('members.edit',compact('id','memberbio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemberRequest $request, $id)
    {
        $memberbio=member::where('MID',$id)->get()->toArray();
        $family=family::where('FID',$memberbio[0]["FID"]);
        $member = member::findOrFail($id);
        $member->Fname = $request['Fname'];
        $member->Lname = $request['Lname'];
        $member->Other =  $request['Other']==null ? false : true;
        $member->Clothing =  $request['Clothing']==null ? false : true;
        $member->Furniture =  $request['Furniture']==null ? false : true;
        $member->save();
        $family= family::findOrFail($member->FID);
        $family->update($request->only(['Agency','address1','address2','city','postalCode','province','PhoneNo']));
        return redirect('members/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
