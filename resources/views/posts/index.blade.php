<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Posts') }}
            <a class="text-xs bg-gray-100 text-black px-2 py-1 rounded" href="{{route ('posts.create')}}"> Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Listado de publicaciones") }}

                    <table class="mb-4"> 

                    @foreach($posts as $post)
                    <tr class="border-b border-gray-200 text-sm">
                        <td class=" px-6 py-4">{{$post->title}}</td>
                        <td class="px-6 py4"> 

                            
                        <a href="{{route('posts.edit',$post)}}" class="text-white">Editar</a>
                        </td>
                        <td class="px-6 py-4">
                           
                            <form action="{{ route('posts.destroy',$post) }}" method="POST">

                            @csrf 
                            @method('DELETE') 

                            <input
                            type="submit" 
                            value="Eliminar" 
                            class=" bg-gray-100 text-black px-4 py-2 rounded hover:bg-red-500 hover:text-white"
                            onclick="return confirm('¿Estás seguro?')">
                            
                          </form>
                        </td>
                    </tr>
                    @endforeach
                    </table>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
