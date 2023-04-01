@php
    $plan_name = "";
    $plan_cost = "";
    switch ($plan) {
        case 1:
            $plan_name = "BASICO";
            $plan_cost = "80$";
            break;
        case 2:
            $plan_name = "STANDARD";
            $plan_cost = "110$";
            break;
        case 3:
            $plan_name = "PREMIUM";
            $plan_cost = "150$";
            break;
        default:
            # code...
            break;
    }
    
@endphp

@extends('templateLogin')

@section('content')
<form action="{{route('clients.store')}}" method="POST">
    @csrf 

    <div class="flex flex-col justify-center items-center min-h-screen flex-wrap">
        <label class="uppercase text-gray-700 text-xs">Nombre</label>
        <span class="text-xs text-red-600">@error('nombre'){{$message}} @enderror</span>
        <input type="text" name="name" class="rounded border-gray-200 w-11/12 mb-4" value="{{old('name',$client->name)}}">

        <label class="uppercase text-gray-700 text-xs">Email</label>
        <span class="text-xs text-red-600">@error('email'){{$message}} @enderror</span>
        <input type="text" name="email" class="rounded border-gray-200 w-11/12  mb-4" value="{{old('email',$client->email)}}">

        <label class="uppercase text-gray-700 text-xs">Contrasena</label>
        <span class="text-xs text-red-600">@error('password'){{$message}} @enderror</span>
        <input type="password" name="password" class="rounded border-gray-200 w-11/12  mb-4" value="{{old('password',$client->password)}}">

        <label class="uppercase text-gray-700 text-xs">Plan</label>
        <input type="text" readonly="true" name="plan" class="rounded border-gray-200 w-11/12  mb-4" value="{{$plan_name}}">

        <label class="uppercase text-gray-700 text-xs">Costo</label>
        <input type="text" readonly="true" name="cost" class="rounded border-gray-200 w-11/12  mb-4" value="{{$plan_cost}}">

        <div class="flex justify-between items-center">
            <a href="/" class="text-indigo-600">Volver</a>
            <input type="submit" value="Comprar" class="bg-gray-800 text-white rounded px-4 py-2">
        </div> 
    </div>
</form>
@endsection