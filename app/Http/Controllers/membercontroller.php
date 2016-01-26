<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use Illuminate\Http\Request;

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
        $member=member::findOrFail($id);
        $pallowed = [
            'clothing'=>$member->select('Clothing')->get(),
            'furniture' => $member->select('Furniture')->get(),
            'other' => $member->select('Other')->get()
        ];
        return view('members.pform',compact('pallowed'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PurchaseRequest $request,$id)
    {
        $purchase=purchase::create($request->all());
        return redirect('member.previousp',compact('purchases'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purchases = member::findOrFail($id)->purchase();

        return view('member.previousp',compact('purchases'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $memberbio=member::findOrFail($id);

        return view('member.edit',compact('memberbio'));
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
        $member = member::findOrFail($id);
        $member->update($request->all());

        return redirect('members.previousp');
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
