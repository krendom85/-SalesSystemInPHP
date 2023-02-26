<?php

namespace App\Http\Controllers;

use App\Models\PendingClient;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PendingClientController extends Controller
{
    //
    public function index(){
        return view('pendingClients.index',[
            'pendingClients'=>PendingClient::paginate()
        ]);
    }

    public function store(Request $request){
        $request->validate(
            [
                'email'=> 'required',
            ]
        );
        $pendingClient = new PendingClient();
        $pendingClient->email = $request->input('email');
        
        $pendingClient->save();

        return view('welcome');
    }

    public function destroy(PendingClient $pendingClient){
        $pendingClient->delete();
        return back();
    }
}
