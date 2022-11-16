<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;
use App\Models\Homepage;
use App\Models\Value;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Footer;
use App\Models\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $slider = Slider::all();
        $homepage = Homepage::all();
        $value = Value::all();
        $footers = Footer::all();
        return view('cawebsite.home', compact('slider','homepage','footers'));
         return view('about.values1', compact('value'));


    }

     public function value()
    {
        $value = Value::all();
         $footers = Footer::all();

         return view('about.values1', compact('value','footers'));

    }
  // public function contact()
  //   {
  //       $contact = Contact::all();

  //        return view('cawebsite.contact', compact('contact'));
  //   }
     public function partner()
    {
        $partner = Partner::where('ispartner', 1)->get();
        $associate = Partner::where('ispartner', 0)->get();
         $footers = Footer::all();

         return view('about.partner2', compact('partner','footers', 'associate'));

    }

     public function service()
    {
        $service = Service::all();
         $footers = Footer::all();
         return view('cawebsite.services2', compact('service','footers'));
    }
     public function client()
    {
        $client = Client::all();
         $footers = Footer::all();
         return view('about.client2', compact('client','footers'));
    }


     public function footer()
    {
        $footers = Footer::all();

         return view('weblayout.footer', compact('footers'));
    }
      public function career()
    {
        $footers = Footer::all();

         return view('cawebsite.career', compact('footers'));
    }
     public function contact()
    {
        $footers = Footer::all();

         return view('cawebsite.contact', compact('footers'));
    }
}
