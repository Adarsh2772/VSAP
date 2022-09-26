<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;


class SliderController extends Controller
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

        $sliders = Slider::all();

        return view('sliders.index', compact('sliders'));
    }


    public function create()
    {
        return view('sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
         $slider = New Slider();
        $image = $request->file('slider_img');
        $preimg = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path("upload"), $preimg);
        $slider->slider_img= $preimg;

    $slider->title= $request->input('title');
    $slider->sub_title= $request->input('sub_title');
    $slider->descript= $request->input('descript');


    $slider->save();
    return redirect('sliders')->with('success', 'Slider data saved!');;
        }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $slider = Slider::find($id);

        return view('sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('sliders.edit', compact('slider'));
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

         $slider = Slider::find($request->get('id'));

       if($request->file('slider_img')!=NULL)
        {
            $image = $request->file('slider_img');
            $preimg = rand() . '.' . $image->getClientOriginalExtension();
            $slider->slider_img= $preimg;
            $image->move(public_path("upload"), $preimg);

        }


        $slider->title = $request->get('title');
        $slider->sub_title = $request->get('sub_title');
        $slider->descript = $request->get('descript');

        $slider->save();

        return redirect('/sliders')->with('success', 'Slider data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();

        return redirect('/sliders')->with('success', 'Slider data deleted!');
    }
}
