@csrf 

<label class="uppercase text-gray-700 text-xs">Nombre</label>
<span class="text-xs text-red-600">@error('nombre'){{$message}} @enderror</span>
<input type="text" name="name" readonly="true" class="rounded border-gray-200 w-full mb-4" value="{{old('name',$futureEmployee->name)}}">

<label class="uppercase text-gray-700 text-xs">Email</label>
<span class="text-xs text-red-600">@error('email'){{$message}} @enderror</span>
<input type="text" name="email" class="rounded border-gray-200 w-full mb-4" value="{{old('email',$futureEmployee->email)}}">

<label class="uppercase text-gray-700 text-xs">Puesto de trabajo</label>
<span class="text-xs text-red-600">@error('job'){{$message}} @enderror</span>
<input type="text" name="job" class="rounded border-gray-200 w-full mb-4" value="{{old('job',$futureEmployee->job)}}">

<label class="uppercase text-gray-700 text-xs">Celular</label>
<span class="text-xs text-red-600">@error('cellphone'){{$message}} @enderror</span>
<input type="text" name="cellphone" class="rounded border-gray-200 w-full mb-4" value="{{old('cellphone',$futureEmployee->cellphone)}}">

<label class="uppercase text-gray-700 text-xs">Descripcion</label>
<span class="text-xs text-red-600">@error('init_at'){{$message}} @enderror</span>
<input type="text" name="description" class="rounded border-gray-200 w-full mb-4" value="{{old('description',$futureEmployee->description)}}">


<div class="flex justify-between items-center">
    <a href="{{ route('futureEmployees.index')}}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>