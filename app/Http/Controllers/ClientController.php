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

    public function confirm(Request  $request){
        $name = $request->input('user');
        $password = $request->input('password');
        $data = Client::pluck('id');
        // dd($name);
        // dd($password);
        foreach($data as $item){
            $data_user = Client::find($item);
            if($name == $data_user->name and $password == $data_user->password){
                dd("si existe");
            }
        }
        return view('clients.login');
    }
  
    public function store(Request $request){
        $plan = 0;
        
        switch($request->input("plan")){
            case "BASICO":
                $plan = 1;
                break;
            case "STANDARD":
                $plan = 2;
                break;
            case "PREMIUM":
                $plan = 3;
                break;
        }


        $password = $request->input('password');
        $email =  $request->input('email');
        $data = Client::pluck('id');
        // dd($name);
        // dd($password);
        foreach($data as $item){
            $data_user = Client::find($item);
            if($email == $data_user->email){
                return view('clients.result',['plan'=>$data_user->plan]);
            }
        }

        $client = new Client();
  
        $client->name = $request->input('name');
        $client->email = $email;
        $client->password = $password;
        $client->plan = $plan;
        $client->status = 1;
        $client->status = intval($request->input('status'));
        $client->init_at = date('Y-m-d h:m:s');
        $client->expires_at = date('Y-m-d h:m:s');

        $client->save();

        return view("welcome");
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
