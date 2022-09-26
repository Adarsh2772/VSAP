<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
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

        $clients = Client::all();

        return view('clients.index', compact('clients'));
    }


    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
         $client = New Client();
        $image = $request->file('client_img');
        $preimg = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path("upload"), $preimg);
        $client->client_img= $preimg;

    $client->client_name= $request->input('client_name');



    $client->save();
    return redirect('clients')->with('success', 'client data saved!');;
        }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $client = Client::find($id);

        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
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

         $client = Client::find($request->get('id'));

       if($request->file('client_img')!=NULL)
        {
            $image = $request->file('client_img');
            $preimg = rand() . '.' . $image->getClientOriginalExtension();
            $client->client_img= $preimg;
            $image->move(public_path("upload"), $preimg);

        }

        $client->client_name = $request->get('client_name');


        $client->save();

        return redirect('/clients')->with('success', 'client data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();

        return redirect('/clients')->with('success', 'client data deleted!');
    }
}
