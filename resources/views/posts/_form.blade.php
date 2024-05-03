@csrf


<label class="uppercase text-white text-xs" for=""> Titulo </label>
<input type="text" name="title" class="rounded text-black border-gray-200 w-full mb-4" value="{{$post->title}}">

<label class="uppercase text-white text-xs" for="">Contenido</label>
<textarea name="" cols="10" rows="5" class="rounded text-black border-gray-200 w-full mb-4">{{$post->body}}</textarea>


<div class=" flex justify-between items-center">

<a class=" cursor-pointer justify-end " href="{{route ('posts.index')}}">Volver</a>

<input type="submit" value="Enviar" class=" bg-gray-100 text-black px-4 py-2 rounded hover:bg-red-500 hover:text-white">

</div>