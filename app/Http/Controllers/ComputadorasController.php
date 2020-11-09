<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\computadoras;

class ComputadorasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadoras = computadoras::get();
        return view('computadoras.index', compact ('computadoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("computadoras.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        computadoras::create($request->all());
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $computadoras = computadoras::find($id);
        return view('computadoras.show' , compact('computadoras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computadoras = computadoras::find($id);
        return view('computadoras.edit' , compact('computadoras'));
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
        computadoras::find($id)->update($request->all());
            $this->validate($request,[ 'marca'=>'required', 'modelo'=>'required']);
            $computadoras = computadoras::all();
            return view('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $computadoras = computadoras::find($id);
             $computadoras->delete();
             $computadoras = computadoras::all();
                return view('index');
    }
}
