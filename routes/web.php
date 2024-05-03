<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\PostController;


Route::controller(pageController::class)->group((function(){
    Route::get('/',              'home')->name('home'); // Se pasa el parametro home a la vista home
    Route::get('blog'   ,        'blog')->name('blog');
    Route::get('blog/{slug}',    'post')->name('post');
}));


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts', PostController::class)->except(['show'])->middleware(['auth']); // sirve para llamar al archivo auth.php que se encuentra en la carpeta routes y se excluye el metodo show
require __DIR__.'/auth.php'; // sirve para llamar al archivo auth.php que se encuentra en la carpeta routes




//use Illuminate\Http\Request; // Importar la clase Request 


// forma de hacerlo sin usar el metodo controller 
/* Route::get('/', [pageController::class, 'home'])->name('home'); // Se pasa el parametro home a la vista home

Route::get('blog', [pageController::class, 'blog'])->name('blog');
// Ruta con parametros  obligatorios 

Route::get('blog/{slug}',[pageController::class,'post'])->name('post'); */

 // Se pasa el parametro post a la vista post  
// Ruta con parametros opcionales


