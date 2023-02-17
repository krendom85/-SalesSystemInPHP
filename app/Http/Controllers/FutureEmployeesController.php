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
}
