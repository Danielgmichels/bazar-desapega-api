<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition(): array
    {
        // Sorteamos um custo entre R$ 10.00 e R$ 50.00
        $custo = $this->faker->randomFloat(2, 10, 50); 
        // O preço de venda será o custo + um lucro entre R$ 20.00 e R$ 50.00
        $venda = $custo + $this->faker->randomFloat(2, 20, 50); 

        return [
            // O id_fornecedor nós vamos passar dinamicamente lá no Seeder!
            'id_tipo' => $this->faker->numberBetween(1, 5), // Ex: Sorteia ID de 1 a 5 (Casaco, Calça...)
            'id_genero' => $this->faker->numberBetween(1, 3), // Sorteia Feminino, Masculino ou Unissex
            'id_status_disp' => 1, // 1 = Disponível na Vitrine
            'data_entrada' => $this->faker->dateTimeBetween('-2 months', 'now'), // Entrou nos últimos 2 meses
            'marca' => $this->faker->company(), // Gera o nome de uma marca aleatória
            'tamanho' => $this->faker->randomElement(['PP', 'P', 'M', 'G', 'GG', '38', '40', '42']),
            'cor' => $this->faker->colorName(), // Nome de uma cor
            'preco_custo' => $custo,
            'preco_venda' => $venda,
            'foto_principal' => 'produtos/placeholder.png', // Uma imagem de teste (vamos assumir que não existe fisicamente ainda)
        ];
    }
}