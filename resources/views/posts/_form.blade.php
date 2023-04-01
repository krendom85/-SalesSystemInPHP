@csrf 

<label class="uppercase text-gray-700 text-xs">Titulo</label>
<span class="text-xs text-red-600">@error('title'){{$message}} @enderror</span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{old('title',$post->title)}}">

{{-- <label class="uppercase text-gray-700 text-xs">URL</label>
<span class="text-xs text-red-600">@error('url'){{$message}} @enderror</span>
<input type="text" name="url" class="rounded border-gray-200 w-full mb-4" value="{{old('url',$post->url)}}"> --}}

<label for="imagen">Imagen:</label>
<input type="file" id="imagen" name="imagen" accept="image/*" required>


<label class="uppercase text-gray-700 text-xs">Post</label>
<span class="text-xs text-red-600">@error('post'){{$message}} @enderror</span>
<textarea type="text" name="post" class="rounded border-gray-200 w-full mb-4">{{old('plan',$post->post)}}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index')}}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>