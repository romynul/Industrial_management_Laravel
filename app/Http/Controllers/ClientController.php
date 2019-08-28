<?php

namespace App\Http\Controllers;
use App\Clients;
use App\Logs;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
       $clientList = Clients::all(); 
         return view('client.index',['client'=> $clientList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(){
        return view('client.add_client');
    }

    public function create(ClientRequest $req)
    {
         $clients = new Clients();
     
        $clients->cname = $req->cname;
        $clients->cowner = $req->cowner;
        $clients->address = $req->address;
        $clients->contact = $req->contact;
        $clients->details = $req->details;
        $clients->balance = 0;
        $clients->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->cname.' Client Added';
        $log->save();

        return redirect()->route('dashboard.client');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $clientList = Clients::all(); 
         return view('client.index',['client'=> $clientList]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Clients::find($id);
        return view('client.edit_client', ['client'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
       
       $client = Clients::find($id);

        $client->cname = $req->cname;
        $client->cowner = $req->cowner;
        $client->address = $req->address;
        $client->contact = $req->contact;
        
        $client->save();

        $log = new Logs();
        $log->employee = session('user');
        $log->action = $req->cname.' client Information update';
        $log->save();

        return redirect()->route('dashboard.client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function delete($id){

        $client = Clients::find($id);
        return view('client.delete_client', ['client'=>$client]);
    }



    public function destroy($id)
    {
         Clients::destroy($id);
        $log = new Logs();
        $log->employee = session('user');
        $log->action = $id.' id client Information Deleted';
        $log->save();
        return redirect()->route('dashboard.client');
    }
}
