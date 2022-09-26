<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
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

        $services = Service::all();

        return view('services.index', compact('services'));
    }


    public function create()
    {
        return view('services.create');
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

        $service = new Service([

            'title' => $request->get('title'),
            'descript' => $request->get('descript')

        ]);

        $service->save();

        return redirect('/services')->with('success', 'service data saved!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $service = Service::find($id);

        return view('services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit', compact('service'));
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

         $service = Service::find($request->get('id'));



        $service->title = $request->get('title');
        $service->descript = $request->get('descript');

        $service->save();

        return redirect('/services')->with('success', 'service data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect('/services')->with('success', 'service data deleted!');
    }
}
