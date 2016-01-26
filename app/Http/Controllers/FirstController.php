<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use Illuminate\Http\Request;
use App\member;
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
        $activem = 0;

        return view('pages.home',compact('members','activem'));
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

        $member=member::create($request->all());
        $MID=$member;
        return redirect('members.'.$MID);

    }

}
