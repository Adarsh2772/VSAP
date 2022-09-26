<?php

namespace App\Http\Controllers;
use App\Models\Vsap;
use Illuminate\Http\Request;


class VsapController extends Controller
{
    //       public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {

        $vsap = Vsap::all();

        return view('vsap.index', compact('vsap'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'contact_no'=>'required',
            'email'=>'required',
            'experiance'=>'required',
            'cpatchaTextBox'=>'required'
        ]);



        $vsap = new Vsap([

            'name' => $request->get('name'),
            'phone_no' => $request->get('contact_no'),
            'email' => $request->get('email'),
            'exp'=>$request->get('experiance'),
             $fileName = time().'.'.$request->fileToUpload->getClientOriginalExtension(),
            $request->fileToUpload->move(public_path('upload'), $fileName)

        ]);

        $vsap->save();

        return true;
        // return redirect('/career')->with('success', 'data saved!');
    }

    public function createfile(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:50',
            'contact_no'=>'required',
            'email'=>'required|unique:vsaps',
            'experiance'=>'required|max:2',
            'cpatchaTextBox'=>'required'
        ]);

         $vsap = New Vsap();

    $vsap->name= $request->input('name');
    $vsap->phone_no= $request->input('contact_no');
    $vsap->email= $request->input('email');
    $vsap->exp= $request->input('experiance');

    $cofile = $request->file('fileToUpload');
    $prefile = rand() . '.' . $cofile->getClientOriginalExtension();
    $cofile->move(public_path("upload"), $prefile);
    $vsap->fileToUpload= $prefile;

    $vsap->save();


    return true;

        }


    public function show($id)
    {
       $vsap = Vsap::find($id);

        return view('vsap.index', compact('vsap'));
    }

     public function destroy($id)
    {
        $vsap = Vsap::find($id);
        $vsap->delete();

        return redirect('/vsaps')->with('success', 'vsap data deleted!');
    }

}
