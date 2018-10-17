<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pots;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pots = Pots::orderBy('name','desc')->paginate(10);
        return view('pots.index')->with('pots',$pots);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pots.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name' => 'required',
        'body' => 'required'
        ]);
        //Create Pots
        $pots = new Pots;
        $pots->name = $request->input('name');
        $pots->body = $request->input('body');
        $pots->save();
        
        return redirect('/pots')->with('success','Pot Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pots = Pots::find($id);
        return view('pots.show')->with('pots',$pots);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pots = Pots::find($id);
        if(auth()->user()->admin !==1){
            return redirect('/pots')->with('error', 'Unauthorized Page');
        }
        return view('pots.edit')->with('pots',$pots);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'name' => 'required',
        'body' => 'required'
        ]);
        //Create Pots
        $pots = Pots::find($id);
        $pots->name = $request->input('name');
        $pots->body = $request->input('body');
        $pots->save();
        
        return redirect('/pots')->with('success','Pot Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pots = Pots::find($id);
        $pots->delete();
        return redirect('/pots')->with('success','Pot removed');
    }
}
