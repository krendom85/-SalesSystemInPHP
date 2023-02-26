@csrf 

<label class="uppercase text-gray-700 text-xs">Nombre</label>
<span class="text-xs text-red-600">@error('nombre'){{$message}} @enderror</span>
<input type="text" name="name" class="rounded border-gray-200 w-full mb-4" value="{{old('name',$client->name)}}">

<label class="uppercase text-gray-700 text-xs">Email</label>
<span class="text-xs text-red-600">@error('email'){{$message}} @enderror</span>
<input type="text" name="email" class="rounded border-gray-200 w-full mb-4" value="{{old('email',$client->email)}}">

<label class="uppercase text-gray-700 text-xs">Plan</label>
<span class="text-xs text-red-600">@error('plan'){{$message}} @enderror</span>
<input type="text" name="plan" class="rounded border-gray-200 w-full mb-4" value="{{old('plan',$client->plan)}}">

<label class="uppercase text-gray-700 text-xs">status</label>
<span class="text-xs text-red-600">@error('status'){{$message}} @enderror</span>
<input type="text" name="status" class="rounded border-gray-200 w-full mb-4" value="{{old('status',$client->status)}}">

<label class="uppercase text-gray-700 text-xs">Fecha de inicio</label>
<span class="text-xs text-red-600">@error('init_at'){{$message}} @enderror</span>
<input type="text" readonly="true" name="init_at" class="rounded border-gray-200 w-full mb-4" value="{{old('init_at',$client->init_at)}}">

<label class="uppercase text-gray-700 text-xs">Fecha de expiracion</label>
<span class="text-xs text-red-600">@error('expires_at'){{$message}} @enderror</span>
<input type="text" readonly="true" name="expires_at" class="rounded border-gray-200 w-full mb-4" value="{{old('expires_at',$client->expires_at)}}">


<div class="flex justify-between items-center">
    <a href="{{ route('clients.index')}}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>