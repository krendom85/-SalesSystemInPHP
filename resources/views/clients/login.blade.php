@extends('templateLogin')

@section('content')

<div>
    <form action="{{route('clients.confirm')}}" method="POST">
        @csrf
        <div class="flex flex-col justify-center items-center min-h-screen flex-wrap">
            <div class="mt-2">
                <p class="text-center font-medium">Usuario</p></p>
            </div>
            <div class="flex flex-col">
                <input type="text" name="user" placeholder="User" value="">
                <input type="text" name="password" placeholder="Password" value="">
            </div>
            <div>
                <a href="registerBuy">Registrarse</a>
                <button type="submit" class="min-bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Ingresar</button>
            </div>    
        </div>
    </form>
    
</div>
@endsection