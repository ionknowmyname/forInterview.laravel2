<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use DB;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    function submitData(Request $req){
        //return $req->input();

        // dd($req->file('filename'));

        $client = new Client;

        $client->firstname=$req->firstname;
        $client->lastname=$req->lastname;
        $client->email=$req->email;
        $client->dateprofiled=$req->dateprofiled;
        $client->primarylegal=$req->primarylegal;
        $client->DOB=$req->DOB;
        $client->casedetails=$req->casedetails;
        //$client->filename = $req->file('filename')->store('public/images');
        // $client->filename = request()->file('filename')->store('public/images');  
        
        $client->save();
        Mail::to($client->email)->send(new WelcomeMail());  // $client->firstname
        
        return response()->json([
            'message'=>'Client Created Successfully!!',
            'client'=>$client
        ]);
        

        ////////////////////////////////////////////




        // OR
        ///////////////////////////////////////////////
        /* $client->firstname= $req['firstname'];
        $client = new Client([
            'firstname' => $request->input('firsname'),
            'lastname' => $request->input('lastname')
        ]);
        $client->save(); */
        //////////////////////////////////////////////
        

        

        // OR
        ///////////////////////////////////////
        /* $client = Client::create($req->post());
        return response()->json([
            'message'=>'Client Created Successfully!!',
            'client'=>$client
        ]);

        return response()->json('Product created!'); */
        //////////////////////////////////////

    }



    function getclientlist(){
        /* $clients = Client::all()->toArray();
        return array_reverse($clients); */

        $clients = Client::all();
        return $clients;
    }

    function getsingleclient($id) // Client  Request $req, $id
    {
        $client = Client::find($id);
        return response()->json($client);


        //$client = DB::Table('clients')->where('id', $id)->first();
        //var_dump($client);
        // return view('singleclient', ['client' => $client]);        
    }
}
