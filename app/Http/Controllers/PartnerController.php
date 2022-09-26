<?php

namespace App\Http\Controllers;
use App\Models\Partner;
use Illuminate\Http\Request;


class PartnerController extends Controller
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

        $partners = Partner::all();

        return view('partners.index', compact('partners'));
    }


    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
         $partner = New Partner();
        $image = $request->file('ca_img');
        $preimg = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path("upload"), $preimg);
        $partner->ca_img= $preimg;

    $partner->caname= $request->input('caname');
    $partner->qualification= $request->input('qualification');
    $partner->email= $request->input('email');
    $partner->mob_no= $request->input('mob_no');
    $partner->descript= $request->input('descript');


    $partner->save();
    return redirect('partners')->with('success', 'partner data saved!');;
        }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $partner = Partner::find($id);

        return view('partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('partners.edit', compact('partner'));
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

         $partner = Partner::find($request->get('id'));

       if($request->file('ca_img')!=NULL)
        {
            $image = $request->file('ca_img');
            $preimg = rand() . '.' . $image->getClientOriginalExtension();
            $partner->ca_img= $preimg;
            $image->move(public_path("upload"), $preimg);

        }


        $partner->caname = $request->get('caname');
        $partner->qualification = $request->get('qualification');
        $partner->email = $request->get('email');
        $partner->mob_no = $request->get('mob_no');
        $partner->descript = $request->get('descript');

        $partner->save();

        return redirect('/partners')->with('success', 'partner data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();

        return redirect('/partners')->with('success', 'partner data deleted!');
    }
}
