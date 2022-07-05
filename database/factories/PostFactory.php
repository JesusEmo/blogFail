<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'title'   =>  $title = $this->faker->realText(80), //encontrar una forma de hacer el titulo mas corto manteniento una gran cantidad de registros
            'slug'    =>  Str::slug($title),
            // 'body'  =>  $this->faker->text($maxNbChars = 3200),
            'body'    => $this->faker->realText(3100),
            // necesito poner un longtext en body pero no me deja con longText ni longtext
            //solucion: longText ya no esta disponible, en su lugar esta paragraphs($nb = 3, $asText = false) con esas respectivas variables
            // documentacion: https://github.com/fzaninotto/Faker    
        ];
    }
}
