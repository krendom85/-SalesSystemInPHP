@php
    $plan_name = "";
    switch ($plan) {
        case 1:
            $plan_name = "BASICO";
            break;
        case 2:
            $plan_name = "STANDARD";
            break;
        case 3:
            $plan_name = "PREMIUM";
            break;
        default:
            # code...
            break;
    }
    
@endphp

@extends('templateLogin')

@section('content')
<div class="flex justify-center items-center flex-col min-h-screen">
    <div style="color: green">
        <p>Usted ya posee el plan {{$plan_name}}</p>
    </div>
    <div style="border:1px solid;width: 50%;height: 220px;">
      Usted posee los siguientes beneficios.
    <div>
        <a href="/">Regresar</a>
    </div>
</div>
@endsection