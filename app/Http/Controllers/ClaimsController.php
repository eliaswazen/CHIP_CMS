<?php

namespace App\Http\Controllers;

use App\Claim;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ClaimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $claims = Claim::all();


        return view('admin.index', ['claims'=>$claims]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Claim::class);

        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        Auth::user()->claims()->create($request->all());

        Session::flash('create-message', 'Claim was sent');


        return redirect()->route('home');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Claim $claim)
    {
        return view('admin.edit', ['claim'=>$claim]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update( Claim $claim, Request $request)
    {

        $inputs = request()->validate([
            'problem'=>'required|  max:255',
            'system'=>'required',
            'version'=>'required',
            'comment' => 'required'
        ]);




        $claim->problem = $inputs['problem'];
        $claim->system = $inputs['system'];
        $claim->version = $inputs['version'];
        $claim->comment = $inputs['comment'];


//        $this->authorize('update', $claim);


        $claim->update();


        Session::flash('message-updated', 'Post was updated');

        return redirect()->route('claims.index');

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


    public function response(){

        $claims = auth()->user()->claims()->paginate(100);


            return view('response', ['claims'=>$claims]);






    }


}
