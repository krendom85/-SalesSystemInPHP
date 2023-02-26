<?php

namespace App\Http\Controllers;

use App\Models\FutureEmployees;
use Illuminate\Http\Request;

class FutureEmployeesController extends Controller
{
    //
    public function index(){
        return view('futureEmployees.index',[
            'people'=>FutureEmployees::paginate()
        ]);
    }

    public function edit(FutureEmployees $futureEmployee){
        return view('futureEmployees.edit',['futureEmployee'=>$futureEmployee]);
    }

    public function update(Request $request,FutureEmployees $futureEmployee){
        

        $futureEmployee->update([
            'name' => $request->name,
            'email' => $request->email,
            'job' => $request->job,
            'cellphone' => $request->cellphone,
            'description' => $request->description


        ]);

        return redirect()->route('futureEmployees.edit',$futureEmployee);
    }


    public function store(Request $request){
        
        //dd($request);

        $furureEmployed = new FutureEmployees();

        $furureEmployed->name = $request->input('name');
        $furureEmployed->email = $request->input('email');
        $furureEmployed->job = $request->input('job');
        $furureEmployed->cellphone = $request->input('cellphone');
        $furureEmployed->description = $request->input('description');

        $furureEmployed->save();

    }

    public function destroy(FutureEmployees $futureEmployee){
        $futureEmployee->delete();
        return back();
    }

}
