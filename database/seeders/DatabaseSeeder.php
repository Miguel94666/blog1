<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        //  SIRVE PARA CREAR UN USUARIO EN LA BASE DE DATOS 
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        // SIRVE PARA CREAR 80 POSTS EN LA BASE DE DATOS 
        Post::factory(80)->create();
    }
}

// se llama el modelo User y se le indica que se cree un usuario con el nombre Test User y el email
// se llama al post y se le indica que se creen 80 posts en la base de datos

//php artisan migrate:reresh –seed sirve para crear la tabla en la base de datos y se le indica que se ejecute el seeder para que se creen los datos en la base de datos