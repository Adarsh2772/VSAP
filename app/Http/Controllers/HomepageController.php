<?php

namespace App\Http\Controllers;
use App\Models\Homepage;
use Illuminate\Http\Request;


class HomepageController extends Controller
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

        $homepages = Homepage::all();

        return view('homepages.index', compact('homepages'));
    }


    public function create()
    {
        return view('homepages.create');
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

        $homepage = new Homepage([

            'title' => $request->get('title'),
            'descript' => $request->get('descript')

        ]);

        $homepage->save();

        return redirect('/homepages')->with('success', 'Homepage data saved!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $homepage = Homepage::find($id);

        return view('homepages.show', compact('homepage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homepage = Homepage::find($id);
        return view('homepages.edit', compact('homepage'));
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

         $homepage = Homepage::find($request->get('id'));



        $homepage->title = $request->get('title');
        $homepage->descript = $request->get('descript');

        $homepage->save();

        return redirect('/homepages')->with('success', 'homepage data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $homepage = Homepage::find($id);
        $homepage->delete();

        return redirect('/homepages')->with('success', 'homepage data deleted!');
    }
}
