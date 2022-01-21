<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'source' => $this->faker->url,
            'title' => $this->faker->word,
            'creator' => $this->faker->name,
            'content' => $this->faker->sentence($nbWords=6, $variableNbWords=true),
            'published' => $this->faker->date,
            'summary' => $this->faker->text($maxNbChars=100),
            
        ];
    }
}
