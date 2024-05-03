<?php

namespace App\Http\Controllers;

use App\Models\Post; // clase de modelo  post 
use Illuminate\Http\Request; // clase de laravel 

use function Pest\Laravel\post;

class pageController extends Controller
{
  public function home (){
    return view('home');
  }



  public function blog (){
    //$posts = Post::get(); // consulta a la base de datos le dice que traiga todos los post
   // $post = Post::first(); // consulta a la base de datos le dice que traiga el primer post
   // $post = Post::latest()->get(); // consulta a la base de datos le dice que traiga el ultimo post
    // $post = Post::latest()->paginate(5); // consulta a la base de datos le dice que traiga el ultimo post y que lo pagine de 5 en 5
    // %post = Post::first()->paginate(); // consulta a la base de datos le dice que traiga el primer post y que lo pagine de 15 en 15
    // $post = Post::find(); // consulta a la base de datos le dice que traiga el post con el id 1
 // dd($post); // sirve para ver el contenido de la variable post una coleccion de datos
    $posts =Post::first()->paginate(); // consulta a la base de datos le dice que traiga el primer post y que lo pagine de 15 en 15

return view('blog', ['posts' => $posts]); // se le pasa la variable post a la vista blog y se le indica que es un array 
  }

  
  public function post (Post $post){ // se le pasa el modelo post como parametro y se le indica que es un post 
    //consulta a la base de datos
    // convierte el slug en un post
  
    return view('post', ['post' => $post]);
  }
}
