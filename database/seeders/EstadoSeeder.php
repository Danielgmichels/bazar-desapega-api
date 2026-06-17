<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = [
            [
                "id_estado" => 11,
                "uf" => "RO",
                "nome" => "Rondônia",
            ],
            [
                "id_estado" => 12,
                "uf" => "AC",
                "nome" => "Acre",
            ],
            [
                "id_estado" => 13,
                "uf" => "AM",
                "nome" => "Amazonas",
            ],
            [
                "id_estado" => 14,
                "uf" => "RR",
                "nome" => "Roraima",
            ],
            [
                "id_estado" => 15,
                "uf" => "PA",
                "nome" => "Pará",
            ],
            [
                "id_estado" => 16,
                "uf" => "AP",
                "nome" => "Amapá",
            ],
            [
                "id_estado" => 17,
                "uf" => "TO",
                "nome" => "Tocantins",
            ],
            [
                "id_estado" => 21,
                "uf" => "MA",
                "nome" => "Maranhão",
            ],
            [
                "id_estado" => 22,
                "uf" => "PI",
                "nome" => "Piauí",
            ],
            [
                "id_estado" => 23,
                "uf" => "CE",
                "nome" => "Ceará",
            ],
            [
                "id_estado" => 24,
                "uf" => "RN",
                "nome" => "Rio Grande do Norte",
            ],
            [
                "id_estado" => 25,
                "uf" => "PB",
                "nome" => "Paraíba",
            ],
            [
                "id_estado" => 26,
                "uf" => "PE",
                "nome" => "Pernambuco",
            ],
            [
                "id_estado" => 27,
                "uf" => "AL",
                "nome" => "Alagoas",
            ],
            [
                "id_estado" => 28,
                "uf" => "SE",
                "nome" => "Sergipe",
            ],
            [
                "id_estado" => 29,
                "uf" => "BA",
                "nome" => "Bahia",
            ],
            [
                "id_estado" => 31,
                "uf" => "MG",
                "nome" => "Minas Gerais",
            ],
            [
                "id_estado" => 32,
                "uf" => "ES",
                "nome" => "Espírito Santo",
            ],
            [
                "id_estado" => 33,
                "uf" => "RJ",
                "nome" => "Rio de Janeiro",
            ],
            [
                "id_estado" => 35,
                "uf" => "SP",
                "nome" => "São Paulo",
            ],
            [
                "id_estado" => 41,
                "uf" => "PR",
                "nome" => "Paraná",
            ],
            [
                "id_estado" => 42,
                "uf" => "SC",
                "nome" => "Santa Catarina",
            ],
            [
                "id_estado" => 43,
                "uf" => "RS",
                "nome" => "Rio Grande do Sul",
            ],
            [
                "id_estado" => 50,
                "uf" => "MS",
                "nome" => "Mato Grosso do Sul",
            ],
            [
                "id_estado" => 51,
                "uf" => "MT",
                "nome" => "Mato Grosso",
            ],
            [
                "id_estado" => 52,
                "uf" => "GO",
                "nome" => "Goiás",
            ],
            [
                "id_estado" => 53,
                "uf" => "DF",
                "nome" => "Distrito Federal",
            ],
        ];
        DB::table('estados')->insert($estados);

    }
}
