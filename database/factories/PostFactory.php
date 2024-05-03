<?php

namespace Database\Factories;
use Illuminate\Support\Str; // convienrte un string en una url amigable
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>1,    // se le indica que el campo user_id es un entero sin signo
            'title'=> $title =$this->faker->sentence(), // crea un titulo aleatorio 
            'slug'=> Str::slug($title), // convierte el titulo en una url amigable 
            'body'=> $this->faker->text(2000)

        ];
    }
}
