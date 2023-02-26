<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index(){
        return view('clients.index',[
            'clients'=>Client::paginate()
        ]);
    }

    public function create(Client $client){
        return view('clients.create',['client'=>$client]);
    }

    public function store(Request $request){

        $client = new Client();

        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->password = "password";
        $client->plan = intval($request->input('plan'));
        $client->status = intval($request->input('status'));
        $client->init_at = date('Y-m-d h:m:s');
        $client->expires_at = date('Y-m-d h:m:s');

        $client->save();
    }

    public function edit(Client $client){
        return view('clients.edit',['client'=>$client]);
    }


    public function update(Request $request,Client $client){
        $request->validate(
            [
                'name' => 'required',
                'email'=> 'required',
            ]
        );

        $client->update(
            [
                'name' => $request->name,
                'email'=> $request->email,
                'plan' => $request->plan,
                'status' => $request->status,
                'init_at' => $request->init_at,
                'expires_at' => $request->expires_at
            ]
        );

        return redirect()->route('clients.edit',$client);
    }

    public function destroy(Client $client){
        $client->delete();
        return back();
    }
}
