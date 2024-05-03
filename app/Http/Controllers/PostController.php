<?php

namespace App\Http\Controllers;

use App\Models\Post; // Importar la clase Post
use Illuminate\Http\Request; // Importar la clase Request
use Illuminate\Support\Str; // Importar la clase Str
class PostController extends Controller
{


   public function index()
   {
       return view('posts.index', [
           'posts' => Post::latest()->paginate()
       ]);
   }



   public function create(Post $post)
   {
       return view('posts.create', ['post' => $post]);
   }
   


   public function store(Request $request, Post $post) // Se le pasa el modelo post como parametro y se le indica que es un post Y se le pasa el parametro request
   {
    $post = $request->user()->posts()->create([
        'title'=> $title = $request->title,
        'body'=> Str::slug($title),
        'slug'=> $request->slug,
    ]);
       return redirect()-> route('posts.edit', $post); // Redireccionar a la ruta posts.edit y se le pasa el parametro post 
   }


   public function edit(Post $post)
   {
      return view('posts.edit', ['post' => $post]); // Se le pasa el parametro post a la vista edit y se le indica que es un array 
   }

   
   public function update(Request $request, Post $post)
   {
    $post -> update([
        'title'=> $title = $request->title,
        'body'=> Str::slug($title),
        'slug'=> $request->slug,
    ]);
       return redirect()-> route('posts.edit', $post); // Redireccionar a la ruta posts.edit y se le pasa el parametro post 
   }
   
   public function destroy(Post $post) // Se le pasa el modelo post como parametro y se le indica que es un post 
   {
       $post->delete(); // Eliminar el post)
       //  return redirect()->route('posts.index'); // Redireccionar a la ruta posts.index
         return back(); // Redireccionar a la pagina anterior
   } 

 
}

