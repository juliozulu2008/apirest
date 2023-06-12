<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_completo' => fake()->name(),
            'data_nascimento' => fake()->date(),
            'tipo_pessoa' => fake()->randomLetter(),
            'cpf_ou_cnpj' => fake()->randomNumber(),
            'e-mail' => fake()->email(),
            'endereco' => fake()-> randomLetter(),
            'localizacao' => fake()->randomDigit()
        ];
    }
}
