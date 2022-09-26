<?php

namespace App\Http\Controllers;
use App\Models\Footer;
use Illuminate\Http\Request;


class FooterController extends Controller
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

        $footers = Footer::all();

        return view('footers.index', compact('footers'));
    }


    public function create()
    {
        return view('footers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
         $footer = New Footer();


    $footer->services= $request->input('services');
    $footer->add= $request->input('add');
    $footer->office_no= $request->input('office_no');
    $footer->email= $request->input('email');
    $footer->website= $request->input('website');

    $footer->save();
    return redirect('footers')->with('success', 'footer data saved!');;
        }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $footer = Footer::find($id);

        return view('footers.show', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $footer = Footer::find($id);
        return view('footers.edit', compact('footer'));
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

         $footer = Footer::find($request->get('id'));


        $footer->services = $request->get('services');
        $footer->add = $request->get('add');
        $footer->office_no = $request->get('office_no');
        $footer->email = $request->get('email');
        $footer->website = $request->get('website');

        $footer->save();

        return redirect('/footers')->with('success', 'footer data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $footer = Footer::find($id);
        $footer->delete();

        return redirect('/footers')->with('success', 'footer data deleted!');
    }
}
