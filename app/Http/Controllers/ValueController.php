<?php

namespace App\Http\Controllers;
use App\Models\Value;
use Illuminate\Http\Request;


class ValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $values = Value::all();

        return view('values.index', compact('values'));
    }


    public function create()
    {
        return view('values.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
         $request->validate([

            'title'=>'required',
            'descript'=>'required'

        ]);

        $value = new Value([

            'title' => $request->get('title'),
            'descript' => $request->get('descript')

        ]);

        $value->save();

        return redirect('/values')->with('success', 'value data saved!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $value = Value::find($id);

        return view('values.show', compact('value'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $value = Value::find($id);
        return view('values.edit', compact('value'));
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

         $value = Value::find($request->get('id'));



        $value->title = $request->get('title');
        $value->descript = $request->get('descript');

        $value->save();

        return redirect('/values')->with('success', 'value data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $value = Value::find($id);
        $value->delete();

        return redirect('/values')->with('success', 'value data deleted!');
    }
}
