<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $cidades = [
            [
                "id_cidade" => 1,
                "id_estado" => 11,
                "nome" => "Alta Floresta D'Oeste",
            ],
            [
                "id_cidade" => 2,
                "id_estado" => 11,
                "nome" => "Alto Alegre dos Parecis",
            ],
            [
                "id_cidade" => 3,
                "id_estado" => 11,
                "nome" => "Alto Paraíso",
            ],
            [
                "id_cidade" => 4,
                "id_estado" => 11,
                "nome" => "Alvorada D'Oeste",
            ],
            [
                "id_cidade" => 5,
                "id_estado" => 11,
                "nome" => "Ariquemes",
            ],
            [
                "id_cidade" => 6,
                "id_estado" => 11,
                "nome" => "Buritis",
            ],
            [
                "id_cidade" => 7,
                "id_estado" => 11,
                "nome" => "Cabixi",
            ],
            [
                "id_cidade" => 8,
                "id_estado" => 11,
                "nome" => "Cacaulândia",
            ],
            [
                "id_cidade" => 9,
                "id_estado" => 11,
                "nome" => "Cacoal",
            ],
            [
                "id_cidade" => 10,
                "id_estado" => 11,
                "nome" => "Campo Novo de Rondônia",
            ],
            [
                "id_cidade" => 11,
                "id_estado" => 11,
                "nome" => "Candeias do Jamari",
            ],
            [
                "id_cidade" => 12,
                "id_estado" => 11,
                "nome" => "Castanheiras",
            ],
            [
                "id_cidade" => 13,
                "id_estado" => 11,
                "nome" => "Cerejeiras",
            ],
            [
                "id_cidade" => 14,
                "id_estado" => 11,
                "nome" => "Chupinguaia",
            ],
            [
                "id_cidade" => 15,
                "id_estado" => 11,
                "nome" => "Colorado do Oeste",
            ],
            [
                "id_cidade" => 16,
                "id_estado" => 11,
                "nome" => "Corumbiara",
            ],
            [
                "id_cidade" => 17,
                "id_estado" => 11,
                "nome" => "Costa Marques",
            ],
            [
                "id_cidade" => 18,
                "id_estado" => 11,
                "nome" => "Cujubim",
            ],
            [
                "id_cidade" => 19,
                "id_estado" => 11,
                "nome" => "Espigão D'Oeste",
            ],
            [
                "id_cidade" => 20,
                "id_estado" => 11,
                "nome" => "Governador Jorge Teixeira",
            ],
            [
                "id_cidade" => 21,
                "id_estado" => 11,
                "nome" => "Guajará-Mirim",
            ],
            [
                "id_cidade" => 22,
                "id_estado" => 11,
                "nome" => "Itapuã do Oeste",
            ],
            [
                "id_cidade" => 23,
                "id_estado" => 11,
                "nome" => "Jaru",
            ],
            [
                "id_cidade" => 24,
                "id_estado" => 11,
                "nome" => "Ji-Paraná",
            ],
            [
                "id_cidade" => 25,
                "id_estado" => 11,
                "nome" => "Machadinho D'Oeste",
            ],
            [
                "id_cidade" => 26,
                "id_estado" => 11,
                "nome" => "Ministro Andreazza",
            ],
            [
                "id_cidade" => 27,
                "id_estado" => 11,
                "nome" => "Mirante da Serra",
            ],
            [
                "id_cidade" => 28,
                "id_estado" => 11,
                "nome" => "Monte Negro",
            ],
            [
                "id_cidade" => 29,
                "id_estado" => 11,
                "nome" => "Nova Brasilândia D'Oeste",
            ],
            [
                "id_cidade" => 30,
                "id_estado" => 11,
                "nome" => "Nova Mamoré",
            ],
            [
                "id_cidade" => 31,
                "id_estado" => 11,
                "nome" => "Nova União",
            ],
            [
                "id_cidade" => 32,
                "id_estado" => 11,
                "nome" => "Novo Horizonte do Oeste",
            ],
            [
                "id_cidade" => 33,
                "id_estado" => 11,
                "nome" => "Ouro Preto do Oeste",
            ],
            [
                "id_cidade" => 34,
                "id_estado" => 11,
                "nome" => "Parecis",
            ],
            [
                "id_cidade" => 35,
                "id_estado" => 11,
                "nome" => "Pimenta Bueno",
            ],
            [
                "id_cidade" => 36,
                "id_estado" => 11,
                "nome" => "Pimenteiras do Oeste",
            ],
            [
                "id_cidade" => 37,
                "id_estado" => 11,
                "nome" => "Porto Velho",
            ],
            [
                "id_cidade" => 38,
                "id_estado" => 11,
                "nome" => "Presidente Médici",
            ],
            [
                "id_cidade" => 39,
                "id_estado" => 11,
                "nome" => "Primavera de Rondônia",
            ],
            [
                "id_cidade" => 40,
                "id_estado" => 11,
                "nome" => "Rio Crespo",
            ],
            [
                "id_cidade" => 41,
                "id_estado" => 11,
                "nome" => "Rolim de Moura",
            ],
            [
                "id_cidade" => 42,
                "id_estado" => 11,
                "nome" => "Santa Luzia D'Oeste",
            ],
            [
                "id_cidade" => 43,
                "id_estado" => 11,
                "nome" => "São Felipe D'Oeste",
            ],
            [
                "id_cidade" => 44,
                "id_estado" => 11,
                "nome" => "São Francisco do Guaporé",
            ],
            [
                "id_cidade" => 45,
                "id_estado" => 11,
                "nome" => "São Miguel do Guaporé",
            ],
            [
                "id_cidade" => 46,
                "id_estado" => 11,
                "nome" => "Seringueiras",
            ],
            [
                "id_cidade" => 47,
                "id_estado" => 11,
                "nome" => "Teixeirópolis",
            ],
            [
                "id_cidade" => 48,
                "id_estado" => 11,
                "nome" => "Theobroma",
            ],
            [
                "id_cidade" => 49,
                "id_estado" => 11,
                "nome" => "Urupá",
            ],
            [
                "id_cidade" => 50,
                "id_estado" => 11,
                "nome" => "Vale do Anari",
            ],
            [
                "id_cidade" => 51,
                "id_estado" => 11,
                "nome" => "Vale do Paraíso",
            ],
            [
                "id_cidade" => 52,
                "id_estado" => 11,
                "nome" => "Vilhena",
            ],
            [
                "id_cidade" => 53,
                "id_estado" => 12,
                "nome" => "Acrelândia",
            ],
            [
                "id_cidade" => 54,
                "id_estado" => 12,
                "nome" => "Assis Brasil",
            ],
            [
                "id_cidade" => 55,
                "id_estado" => 12,
                "nome" => "Brasiléia",
            ],
            [
                "id_cidade" => 56,
                "id_estado" => 12,
                "nome" => "Bujari",
            ],
            [
                "id_cidade" => 57,
                "id_estado" => 12,
                "nome" => "Capixaba",
            ],
            [
                "id_cidade" => 58,
                "id_estado" => 12,
                "nome" => "Cruzeiro do Sul",
            ],
            [
                "id_cidade" => 59,
                "id_estado" => 12,
                "nome" => "Epitaciolândia",
            ],
            [
                "id_cidade" => 60,
                "id_estado" => 12,
                "nome" => "Feijó",
            ],
            [
                "id_cidade" => 61,
                "id_estado" => 12,
                "nome" => "Jordão",
            ],
            [
                "id_cidade" => 62,
                "id_estado" => 12,
                "nome" => "Mâncio Lima",
            ],
            [
                "id_cidade" => 63,
                "id_estado" => 12,
                "nome" => "Manoel Urbano",
            ],
            [
                "id_cidade" => 64,
                "id_estado" => 12,
                "nome" => "Marechal Thaumaturgo",
            ],
            [
                "id_cidade" => 65,
                "id_estado" => 12,
                "nome" => "Plácido de Castro",
            ],
            [
                "id_cidade" => 66,
                "id_estado" => 12,
                "nome" => "Porto Acre",
            ],
            [
                "id_cidade" => 67,
                "id_estado" => 12,
                "nome" => "Porto Walter",
            ],
            [
                "id_cidade" => 68,
                "id_estado" => 12,
                "nome" => "Rio Branco",
            ],
            [
                "id_cidade" => 69,
                "id_estado" => 12,
                "nome" => "Rodrigues Alves",
            ],
            [
                "id_cidade" => 70,
                "id_estado" => 12,
                "nome" => "Santa Rosa do Purus",
            ],
            [
                "id_cidade" => 71,
                "id_estado" => 12,
                "nome" => "Sena Madureira",
            ],
            [
                "id_cidade" => 72,
                "id_estado" => 12,
                "nome" => "Senador Guiomard",
            ],
            [
                "id_cidade" => 73,
                "id_estado" => 12,
                "nome" => "Tarauacá",
            ],
            [
                "id_cidade" => 74,
                "id_estado" => 12,
                "nome" => "Xapuri",
            ],
            [
                "id_cidade" => 75,
                "id_estado" => 13,
                "nome" => "Alvarães",
            ],
            [
                "id_cidade" => 76,
                "id_estado" => 13,
                "nome" => "Amaturá",
            ],
            [
                "id_cidade" => 77,
                "id_estado" => 13,
                "nome" => "Anamã",
            ],
            [
                "id_cidade" => 78,
                "id_estado" => 13,
                "nome" => "Anori",
            ],
            [
                "id_cidade" => 79,
                "id_estado" => 13,
                "nome" => "Apuí",
            ],
            [
                "id_cidade" => 80,
                "id_estado" => 13,
                "nome" => "Atalaia do Norte",
            ],
            [
                "id_cidade" => 81,
                "id_estado" => 13,
                "nome" => "Autazes",
            ],
            [
                "id_cidade" => 82,
                "id_estado" => 13,
                "nome" => "Barcelos",
            ],
            [
                "id_cidade" => 83,
                "id_estado" => 13,
                "nome" => "Barreirinha",
            ],
            [
                "id_cidade" => 84,
                "id_estado" => 13,
                "nome" => "Benjamin Constant",
            ],
            [
                "id_cidade" => 85,
                "id_estado" => 13,
                "nome" => "Beruri",
            ],
            [
                "id_cidade" => 86,
                "id_estado" => 13,
                "nome" => "Boa Vista do Ramos",
            ],
            [
                "id_cidade" => 87,
                "id_estado" => 13,
                "nome" => "Boca do Acre",
            ],
            [
                "id_cidade" => 88,
                "id_estado" => 13,
                "nome" => "Borba",
            ],
            [
                "id_cidade" => 89,
                "id_estado" => 13,
                "nome" => "Caapiranga",
            ],
            [
                "id_cidade" => 90,
                "id_estado" => 13,
                "nome" => "Canutama",
            ],
            [
                "id_cidade" => 91,
                "id_estado" => 13,
                "nome" => "Carauari",
            ],
            [
                "id_cidade" => 92,
                "id_estado" => 13,
                "nome" => "Careiro",
            ],
            [
                "id_cidade" => 93,
                "id_estado" => 13,
                "nome" => "Careiro da Várzea",
            ],
            [
                "id_cidade" => 94,
                "id_estado" => 13,
                "nome" => "Coari",
            ],
            [
                "id_cidade" => 95,
                "id_estado" => 13,
                "nome" => "Codajás",
            ],
            [
                "id_cidade" => 96,
                "id_estado" => 13,
                "nome" => "Eirunepé",
            ],
            [
                "id_cidade" => 97,
                "id_estado" => 13,
                "nome" => "Envira",
            ],
            [
                "id_cidade" => 98,
                "id_estado" => 13,
                "nome" => "Fonte Boa",
            ],
            [
                "id_cidade" => 99,
                "id_estado" => 13,
                "nome" => "Guajará",
            ],
            [
                "id_cidade" => 100,
                "id_estado" => 13,
                "nome" => "Humaitá",
            ],
            [
                "id_cidade" => 101,
                "id_estado" => 13,
                "nome" => "Ipixuna",
            ],
            [
                "id_cidade" => 102,
                "id_estado" => 13,
                "nome" => "Iranduba",
            ],
            [
                "id_cidade" => 103,
                "id_estado" => 13,
                "nome" => "Itacoatiara",
            ],
            [
                "id_cidade" => 104,
                "id_estado" => 13,
                "nome" => "Itamarati",
            ],
            [
                "id_cidade" => 105,
                "id_estado" => 13,
                "nome" => "Itapiranga",
            ],
            [
                "id_cidade" => 106,
                "id_estado" => 13,
                "nome" => "Japurá",
            ],
            [
                "id_cidade" => 107,
                "id_estado" => 13,
                "nome" => "Juruá",
            ],
            [
                "id_cidade" => 108,
                "id_estado" => 13,
                "nome" => "Jutaí",
            ],
            [
                "id_cidade" => 109,
                "id_estado" => 13,
                "nome" => "Lábrea",
            ],
            [
                "id_cidade" => 110,
                "id_estado" => 13,
                "nome" => "Manacapuru",
            ],
            [
                "id_cidade" => 111,
                "id_estado" => 13,
                "nome" => "Manaquiri",
            ],
            [
                "id_cidade" => 112,
                "id_estado" => 13,
                "nome" => "Manaus",
            ],
            [
                "id_cidade" => 113,
                "id_estado" => 13,
                "nome" => "Manicoré",
            ],
            [
                "id_cidade" => 114,
                "id_estado" => 13,
                "nome" => "Maraã",
            ],
            [
                "id_cidade" => 115,
                "id_estado" => 13,
                "nome" => "Maués",
            ],
            [
                "id_cidade" => 116,
                "id_estado" => 13,
                "nome" => "Nhamundá",
            ],
            [
                "id_cidade" => 117,
                "id_estado" => 13,
                "nome" => "Nova Olinda do Norte",
            ],
            [
                "id_cidade" => 118,
                "id_estado" => 13,
                "nome" => "Novo Airão",
            ],
            [
                "id_cidade" => 119,
                "id_estado" => 13,
                "nome" => "Novo Aripuanã",
            ],
            [
                "id_cidade" => 120,
                "id_estado" => 13,
                "nome" => "Parintins",
            ],
            [
                "id_cidade" => 121,
                "id_estado" => 13,
                "nome" => "Pauini",
            ],
            [
                "id_cidade" => 122,
                "id_estado" => 13,
                "nome" => "Presidente Figueiredo",
            ],
            [
                "id_cidade" => 123,
                "id_estado" => 13,
                "nome" => "Rio Preto da Eva",
            ],
            [
                "id_cidade" => 124,
                "id_estado" => 13,
                "nome" => "Santa Isabel do Rio Negro",
            ],
            [
                "id_cidade" => 125,
                "id_estado" => 13,
                "nome" => "Santo Antônio do Içá",
            ],
            [
                "id_cidade" => 126,
                "id_estado" => 13,
                "nome" => "São Gabriel da Cachoeira",
            ],
            [
                "id_cidade" => 127,
                "id_estado" => 13,
                "nome" => "São Paulo de Olivença",
            ],
            [
                "id_cidade" => 128,
                "id_estado" => 13,
                "nome" => "São Sebastião do Uatumã",
            ],
            [
                "id_cidade" => 129,
                "id_estado" => 13,
                "nome" => "Silves",
            ],
            [
                "id_cidade" => 130,
                "id_estado" => 13,
                "nome" => "Tabatinga",
            ],
            [
                "id_cidade" => 131,
                "id_estado" => 13,
                "nome" => "Tapauá",
            ],
            [
                "id_cidade" => 132,
                "id_estado" => 13,
                "nome" => "Tefé",
            ],
            [
                "id_cidade" => 133,
                "id_estado" => 13,
                "nome" => "Tonantins",
            ],
            [
                "id_cidade" => 134,
                "id_estado" => 13,
                "nome" => "Uarini",
            ],
            [
                "id_cidade" => 135,
                "id_estado" => 13,
                "nome" => "Urucará",
            ],
            [
                "id_cidade" => 136,
                "id_estado" => 13,
                "nome" => "Urucurituba",
            ],
            [
                "id_cidade" => 137,
                "id_estado" => 14,
                "nome" => "Alto Alegre",
            ],
            [
                "id_cidade" => 138,
                "id_estado" => 14,
                "nome" => "Amajari",
            ],
            [
                "id_cidade" => 139,
                "id_estado" => 14,
                "nome" => "Boa Vista",
            ],
            [
                "id_cidade" => 140,
                "id_estado" => 14,
                "nome" => "Bonfim",
            ],
            [
                "id_cidade" => 141,
                "id_estado" => 14,
                "nome" => "Cantá",
            ],
            [
                "id_cidade" => 142,
                "id_estado" => 14,
                "nome" => "Caracaraí",
            ],
            [
                "id_cidade" => 143,
                "id_estado" => 14,
                "nome" => "Caroebe",
            ],
            [
                "id_cidade" => 144,
                "id_estado" => 14,
                "nome" => "Iracema",
            ],
            [
                "id_cidade" => 145,
                "id_estado" => 14,
                "nome" => "Mucajaí",
            ],
            [
                "id_cidade" => 146,
                "id_estado" => 14,
                "nome" => "Normandia",
            ],
            [
                "id_cidade" => 147,
                "id_estado" => 14,
                "nome" => "Pacaraima",
            ],
            [
                "id_cidade" => 148,
                "id_estado" => 14,
                "nome" => "Rorainópolis",
            ],
            [
                "id_cidade" => 149,
                "id_estado" => 14,
                "nome" => "São João da Baliza",
            ],
            [
                "id_cidade" => 150,
                "id_estado" => 14,
                "nome" => "São Luiz",
            ],
            [
                "id_cidade" => 151,
                "id_estado" => 14,
                "nome" => "Uiramutã",
            ],
            [
                "id_cidade" => 152,
                "id_estado" => 15,
                "nome" => "Abaetetuba",
            ],
            [
                "id_cidade" => 153,
                "id_estado" => 15,
                "nome" => "Abel Figueiredo",
            ],
            [
                "id_cidade" => 154,
                "id_estado" => 15,
                "nome" => "Acará",
            ],
            [
                "id_cidade" => 155,
                "id_estado" => 15,
                "nome" => "Afuá",
            ],
            [
                "id_cidade" => 156,
                "id_estado" => 15,
                "nome" => "Água Azul do Norte",
            ],
            [
                "id_cidade" => 157,
                "id_estado" => 15,
                "nome" => "Alenquer",
            ],
            [
                "id_cidade" => 158,
                "id_estado" => 15,
                "nome" => "Almeirim",
            ],
            [
                "id_cidade" => 159,
                "id_estado" => 15,
                "nome" => "Altamira",
            ],
            [
                "id_cidade" => 160,
                "id_estado" => 15,
                "nome" => "Anajás",
            ],
            [
                "id_cidade" => 161,
                "id_estado" => 15,
                "nome" => "Ananindeua",
            ],
            [
                "id_cidade" => 162,
                "id_estado" => 15,
                "nome" => "Anapu",
            ],
            [
                "id_cidade" => 163,
                "id_estado" => 15,
                "nome" => "Augusto Corrêa",
            ],
            [
                "id_cidade" => 164,
                "id_estado" => 15,
                "nome" => "Aurora do Pará",
            ],
            [
                "id_cidade" => 165,
                "id_estado" => 15,
                "nome" => "Aveiro",
            ],
            [
                "id_cidade" => 166,
                "id_estado" => 15,
                "nome" => "Bagre",
            ],
            [
                "id_cidade" => 167,
                "id_estado" => 15,
                "nome" => "Baião",
            ],
            [
                "id_cidade" => 168,
                "id_estado" => 15,
                "nome" => "Bannach",
            ],
            [
                "id_cidade" => 169,
                "id_estado" => 15,
                "nome" => "Barcarena",
            ],
            [
                "id_cidade" => 170,
                "id_estado" => 15,
                "nome" => "Belém",
            ],
            [
                "id_cidade" => 171,
                "id_estado" => 15,
                "nome" => "Belterra",
            ],
            [
                "id_cidade" => 172,
                "id_estado" => 15,
                "nome" => "Benevides",
            ],
            [
                "id_cidade" => 173,
                "id_estado" => 15,
                "nome" => "Bom Jesus do Tocantins",
            ],
            [
                "id_cidade" => 174,
                "id_estado" => 15,
                "nome" => "Bonito",
            ],
            [
                "id_cidade" => 175,
                "id_estado" => 15,
                "nome" => "Bragança",
            ],
            [
                "id_cidade" => 176,
                "id_estado" => 15,
                "nome" => "Brasil Novo",
            ],
            [
                "id_cidade" => 177,
                "id_estado" => 15,
                "nome" => "Brejo Grande do Araguaia",
            ],
            [
                "id_cidade" => 178,
                "id_estado" => 15,
                "nome" => "Breu Branco",
            ],
            [
                "id_cidade" => 179,
                "id_estado" => 15,
                "nome" => "Breves",
            ],
            [
                "id_cidade" => 180,
                "id_estado" => 15,
                "nome" => "Bujaru",
            ],
            [
                "id_cidade" => 181,
                "id_estado" => 15,
                "nome" => "Cachoeira do Arari",
            ],
            [
                "id_cidade" => 182,
                "id_estado" => 15,
                "nome" => "Cachoeira do Piriá",
            ],
            [
                "id_cidade" => 183,
                "id_estado" => 15,
                "nome" => "Cametá",
            ],
            [
                "id_cidade" => 184,
                "id_estado" => 15,
                "nome" => "Canaã dos Carajás",
            ],
            [
                "id_cidade" => 185,
                "id_estado" => 15,
                "nome" => "Capanema",
            ],
            [
                "id_cidade" => 186,
                "id_estado" => 15,
                "nome" => "Capitão Poço",
            ],
            [
                "id_cidade" => 187,
                "id_estado" => 15,
                "nome" => "Castanhal",
            ],
            [
                "id_cidade" => 188,
                "id_estado" => 15,
                "nome" => "Chaves",
            ],
            [
                "id_cidade" => 189,
                "id_estado" => 15,
                "nome" => "Colares",
            ],
            [
                "id_cidade" => 190,
                "id_estado" => 15,
                "nome" => "Conceição do Araguaia",
            ],
            [
                "id_cidade" => 191,
                "id_estado" => 15,
                "nome" => "Concórdia do Pará",
            ],
            [
                "id_cidade" => 192,
                "id_estado" => 15,
                "nome" => "Cumaru do Norte",
            ],
            [
                "id_cidade" => 193,
                "id_estado" => 15,
                "nome" => "Curionópolis",
            ],
            [
                "id_cidade" => 194,
                "id_estado" => 15,
                "nome" => "Curralinho",
            ],
            [
                "id_cidade" => 195,
                "id_estado" => 15,
                "nome" => "Curuá",
            ],
            [
                "id_cidade" => 196,
                "id_estado" => 15,
                "nome" => "Curuçá",
            ],
            [
                "id_cidade" => 197,
                "id_estado" => 15,
                "nome" => "Dom Eliseu",
            ],
            [
                "id_cidade" => 198,
                "id_estado" => 15,
                "nome" => "Eldorado do Carajás",
            ],
            [
                "id_cidade" => 199,
                "id_estado" => 15,
                "nome" => "Faro",
            ],
            [
                "id_cidade" => 200,
                "id_estado" => 15,
                "nome" => "Floresta do Araguaia",
            ],
            [
                "id_cidade" => 201,
                "id_estado" => 15,
                "nome" => "Garrafão do Norte",
            ],
            [
                "id_cidade" => 202,
                "id_estado" => 15,
                "nome" => "Goianésia do Pará",
            ],
            [
                "id_cidade" => 203,
                "id_estado" => 15,
                "nome" => "Gurupá",
            ],
            [
                "id_cidade" => 204,
                "id_estado" => 15,
                "nome" => "Igarapé-Açu",
            ],
            [
                "id_cidade" => 205,
                "id_estado" => 15,
                "nome" => "Igarapé-Miri",
            ],
            [
                "id_cidade" => 206,
                "id_estado" => 15,
                "nome" => "Inhangapi",
            ],
            [
                "id_cidade" => 207,
                "id_estado" => 15,
                "nome" => "Ipixuna do Pará",
            ],
            [
                "id_cidade" => 208,
                "id_estado" => 15,
                "nome" => "Irituia",
            ],
            [
                "id_cidade" => 209,
                "id_estado" => 15,
                "nome" => "Itaituba",
            ],
            [
                "id_cidade" => 210,
                "id_estado" => 15,
                "nome" => "Itupiranga",
            ],
            [
                "id_cidade" => 211,
                "id_estado" => 15,
                "nome" => "Jacareacanga",
            ],
            [
                "id_cidade" => 212,
                "id_estado" => 15,
                "nome" => "Jacundá",
            ],
            [
                "id_cidade" => 213,
                "id_estado" => 15,
                "nome" => "Juruti",
            ],
            [
                "id_cidade" => 214,
                "id_estado" => 15,
                "nome" => "Limoeiro do Ajuru",
            ],
            [
                "id_cidade" => 215,
                "id_estado" => 15,
                "nome" => "Mãe do Rio",
            ],
            [
                "id_cidade" => 216,
                "id_estado" => 15,
                "nome" => "Magalhães Barata",
            ],
            [
                "id_cidade" => 217,
                "id_estado" => 15,
                "nome" => "Marabá",
            ],
            [
                "id_cidade" => 218,
                "id_estado" => 15,
                "nome" => "Maracanã",
            ],
            [
                "id_cidade" => 219,
                "id_estado" => 15,
                "nome" => "Marapanim",
            ],
            [
                "id_cidade" => 220,
                "id_estado" => 15,
                "nome" => "Marituba",
            ],
            [
                "id_cidade" => 221,
                "id_estado" => 15,
                "nome" => "Medicilândia",
            ],
            [
                "id_cidade" => 222,
                "id_estado" => 15,
                "nome" => "Melgaço",
            ],
            [
                "id_cidade" => 223,
                "id_estado" => 15,
                "nome" => "Mocajuba",
            ],
            [
                "id_cidade" => 224,
                "id_estado" => 15,
                "nome" => "Moju",
            ],
            [
                "id_cidade" => 225,
                "id_estado" => 15,
                "nome" => "Mojuí dos Campos",
            ],
            [
                "id_cidade" => 226,
                "id_estado" => 15,
                "nome" => "Monte Alegre",
            ],
            [
                "id_cidade" => 227,
                "id_estado" => 15,
                "nome" => "Muaná",
            ],
            [
                "id_cidade" => 228,
                "id_estado" => 15,
                "nome" => "Nova Esperança do Piriá",
            ],
            [
                "id_cidade" => 229,
                "id_estado" => 15,
                "nome" => "Nova Ipixuna",
            ],
            [
                "id_cidade" => 230,
                "id_estado" => 15,
                "nome" => "Nova Timboteua",
            ],
            [
                "id_cidade" => 231,
                "id_estado" => 15,
                "nome" => "Novo Progresso",
            ],
            [
                "id_cidade" => 232,
                "id_estado" => 15,
                "nome" => "Novo Repartimento",
            ],
            [
                "id_cidade" => 233,
                "id_estado" => 15,
                "nome" => "Óbidos",
            ],
            [
                "id_cidade" => 234,
                "id_estado" => 15,
                "nome" => "Oeiras do Pará",
            ],
            [
                "id_cidade" => 235,
                "id_estado" => 15,
                "nome" => "Oriximiná",
            ],
            [
                "id_cidade" => 236,
                "id_estado" => 15,
                "nome" => "Ourém",
            ],
            [
                "id_cidade" => 237,
                "id_estado" => 15,
                "nome" => "Ourilândia do Norte",
            ],
            [
                "id_cidade" => 238,
                "id_estado" => 15,
                "nome" => "Pacajá",
            ],
            [
                "id_cidade" => 239,
                "id_estado" => 15,
                "nome" => "Palestina do Pará",
            ],
            [
                "id_cidade" => 240,
                "id_estado" => 15,
                "nome" => "Paragominas",
            ],
            [
                "id_cidade" => 241,
                "id_estado" => 15,
                "nome" => "Parauapebas",
            ],
            [
                "id_cidade" => 242,
                "id_estado" => 15,
                "nome" => "Pau D'Arco",
            ],
            [
                "id_cidade" => 243,
                "id_estado" => 15,
                "nome" => "Peixe-Boi",
            ],
            [
                "id_cidade" => 244,
                "id_estado" => 15,
                "nome" => "Piçarra",
            ],
            [
                "id_cidade" => 245,
                "id_estado" => 15,
                "nome" => "Placas",
            ],
            [
                "id_cidade" => 246,
                "id_estado" => 15,
                "nome" => "Ponta de Pedras",
            ],
            [
                "id_cidade" => 247,
                "id_estado" => 15,
                "nome" => "Portel",
            ],
            [
                "id_cidade" => 248,
                "id_estado" => 15,
                "nome" => "Porto de Moz",
            ],
            [
                "id_cidade" => 249,
                "id_estado" => 15,
                "nome" => "Prainha",
            ],
            [
                "id_cidade" => 250,
                "id_estado" => 15,
                "nome" => "Primavera",
            ],
            [
                "id_cidade" => 251,
                "id_estado" => 15,
                "nome" => "Quatipuru",
            ],
            [
                "id_cidade" => 252,
                "id_estado" => 15,
                "nome" => "Redenção",
            ],
            [
                "id_cidade" => 253,
                "id_estado" => 15,
                "nome" => "Rio Maria",
            ],
            [
                "id_cidade" => 254,
                "id_estado" => 15,
                "nome" => "Rondon do Pará",
            ],
            [
                "id_cidade" => 255,
                "id_estado" => 15,
                "nome" => "Rurópolis",
            ],
            [
                "id_cidade" => 256,
                "id_estado" => 15,
                "nome" => "Salinópolis",
            ],
            [
                "id_cidade" => 257,
                "id_estado" => 15,
                "nome" => "Salvaterra",
            ],
            [
                "id_cidade" => 258,
                "id_estado" => 15,
                "nome" => "Santa Bárbara do Pará",
            ],
            [
                "id_cidade" => 259,
                "id_estado" => 15,
                "nome" => "Santa Cruz do Arari",
            ],
            [
                "id_cidade" => 260,
                "id_estado" => 15,
                "nome" => "Santa Izabel do Pará",
            ],
            [
                "id_cidade" => 261,
                "id_estado" => 15,
                "nome" => "Santa Luzia do Pará",
            ],
            [
                "id_cidade" => 262,
                "id_estado" => 15,
                "nome" => "Santa Maria das Barreiras",
            ],
            [
                "id_cidade" => 263,
                "id_estado" => 15,
                "nome" => "Santa Maria do Pará",
            ],
            [
                "id_cidade" => 264,
                "id_estado" => 15,
                "nome" => "Santana do Araguaia",
            ],
            [
                "id_cidade" => 265,
                "id_estado" => 15,
                "nome" => "Santarém",
            ],
            [
                "id_cidade" => 266,
                "id_estado" => 15,
                "nome" => "Santarém Novo",
            ],
            [
                "id_cidade" => 267,
                "id_estado" => 15,
                "nome" => "Santo Antônio do Tauá",
            ],
            [
                "id_cidade" => 268,
                "id_estado" => 15,
                "nome" => "São Caetano de Odivelas",
            ],
            [
                "id_cidade" => 269,
                "id_estado" => 15,
                "nome" => "São Domingos do Araguaia",
            ],
            [
                "id_cidade" => 270,
                "id_estado" => 15,
                "nome" => "São Domingos do Capim",
            ],
            [
                "id_cidade" => 271,
                "id_estado" => 15,
                "nome" => "São Félix do Xingu",
            ],
            [
                "id_cidade" => 272,
                "id_estado" => 15,
                "nome" => "São Francisco do Pará",
            ],
            [
                "id_cidade" => 273,
                "id_estado" => 15,
                "nome" => "São Geraldo do Araguaia",
            ],
            [
                "id_cidade" => 274,
                "id_estado" => 15,
                "nome" => "São João da Ponta",
            ],
            [
                "id_cidade" => 275,
                "id_estado" => 15,
                "nome" => "São João de Pirabas",
            ],
            [
                "id_cidade" => 276,
                "id_estado" => 15,
                "nome" => "São João do Araguaia",
            ],
            [
                "id_cidade" => 277,
                "id_estado" => 15,
                "nome" => "São Miguel do Guamá",
            ],
            [
                "id_cidade" => 278,
                "id_estado" => 15,
                "nome" => "São Sebastião da Boa Vista",
            ],
            [
                "id_cidade" => 279,
                "id_estado" => 15,
                "nome" => "Sapucaia",
            ],
            [
                "id_cidade" => 280,
                "id_estado" => 15,
                "nome" => "Senador José Porfírio",
            ],
            [
                "id_cidade" => 281,
                "id_estado" => 15,
                "nome" => "Soure",
            ],
            [
                "id_cidade" => 282,
                "id_estado" => 15,
                "nome" => "Tailândia",
            ],
            [
                "id_cidade" => 283,
                "id_estado" => 15,
                "nome" => "Terra Alta",
            ],
            [
                "id_cidade" => 284,
                "id_estado" => 15,
                "nome" => "Terra Santa",
            ],
            [
                "id_cidade" => 285,
                "id_estado" => 15,
                "nome" => "Tomé-Açu",
            ],
            [
                "id_cidade" => 286,
                "id_estado" => 15,
                "nome" => "Tracuateua",
            ],
            [
                "id_cidade" => 287,
                "id_estado" => 15,
                "nome" => "Trairão",
            ],
            [
                "id_cidade" => 288,
                "id_estado" => 15,
                "nome" => "Tucumã",
            ],
            [
                "id_cidade" => 289,
                "id_estado" => 15,
                "nome" => "Tucuruí",
            ],
            [
                "id_cidade" => 290,
                "id_estado" => 15,
                "nome" => "Ulianópolis",
            ],
            [
                "id_cidade" => 291,
                "id_estado" => 15,
                "nome" => "Uruará",
            ],
            [
                "id_cidade" => 292,
                "id_estado" => 15,
                "nome" => "Vigia",
            ],
            [
                "id_cidade" => 293,
                "id_estado" => 15,
                "nome" => "Viseu",
            ],
            [
                "id_cidade" => 294,
                "id_estado" => 15,
                "nome" => "Vitória do Xingu",
            ],
            [
                "id_cidade" => 295,
                "id_estado" => 15,
                "nome" => "Xinguara",
            ],
            [
                "id_cidade" => 296,
                "id_estado" => 16,
                "nome" => "Amapá",
            ],
            [
                "id_cidade" => 297,
                "id_estado" => 16,
                "nome" => "Calçoene",
            ],
            [
                "id_cidade" => 298,
                "id_estado" => 16,
                "nome" => "Cutias",
            ],
            [
                "id_cidade" => 299,
                "id_estado" => 16,
                "nome" => "Ferreira Gomes",
            ],
            [
                "id_cidade" => 300,
                "id_estado" => 16,
                "nome" => "Itaubal",
            ],
            [
                "id_cidade" => 301,
                "id_estado" => 16,
                "nome" => "Laranjal do Jari",
            ],
            [
                "id_cidade" => 302,
                "id_estado" => 16,
                "nome" => "Macapá",
            ],
            [
                "id_cidade" => 303,
                "id_estado" => 16,
                "nome" => "Mazagão",
            ],
            [
                "id_cidade" => 304,
                "id_estado" => 16,
                "nome" => "Oiapoque",
            ],
            [
                "id_cidade" => 305,
                "id_estado" => 16,
                "nome" => "Pedra Branca do Amapari",
            ],
            [
                "id_cidade" => 306,
                "id_estado" => 16,
                "nome" => "Porto Grande",
            ],
            [
                "id_cidade" => 307,
                "id_estado" => 16,
                "nome" => "Pracuúba",
            ],
            [
                "id_cidade" => 308,
                "id_estado" => 16,
                "nome" => "Santana",
            ],
            [
                "id_cidade" => 309,
                "id_estado" => 16,
                "nome" => "Serra do Navio",
            ],
            [
                "id_cidade" => 310,
                "id_estado" => 16,
                "nome" => "Tartarugalzinho",
            ],
            [
                "id_cidade" => 311,
                "id_estado" => 16,
                "nome" => "Vitória do Jari",
            ],
            [
                "id_cidade" => 312,
                "id_estado" => 17,
                "nome" => "Abreulândia",
            ],
            [
                "id_cidade" => 313,
                "id_estado" => 17,
                "nome" => "Aguiarnópolis",
            ],
            [
                "id_cidade" => 314,
                "id_estado" => 17,
                "nome" => "Aliança do Tocantins",
            ],
            [
                "id_cidade" => 315,
                "id_estado" => 17,
                "nome" => "Almas",
            ],
            [
                "id_cidade" => 316,
                "id_estado" => 17,
                "nome" => "Alvorada",
            ],
            [
                "id_cidade" => 317,
                "id_estado" => 17,
                "nome" => "Ananás",
            ],
            [
                "id_cidade" => 318,
                "id_estado" => 17,
                "nome" => "Angico",
            ],
            [
                "id_cidade" => 319,
                "id_estado" => 17,
                "nome" => "Aparecida do Rio Negro",
            ],
            [
                "id_cidade" => 320,
                "id_estado" => 17,
                "nome" => "Aragominas",
            ],
            [
                "id_cidade" => 321,
                "id_estado" => 17,
                "nome" => "Araguacema",
            ],
            [
                "id_cidade" => 322,
                "id_estado" => 17,
                "nome" => "Araguaçu",
            ],
            [
                "id_cidade" => 323,
                "id_estado" => 17,
                "nome" => "Araguaína",
            ],
            [
                "id_cidade" => 324,
                "id_estado" => 17,
                "nome" => "Araguanã",
            ],
            [
                "id_cidade" => 325,
                "id_estado" => 17,
                "nome" => "Araguatins",
            ],
            [
                "id_cidade" => 326,
                "id_estado" => 17,
                "nome" => "Arapoema",
            ],
            [
                "id_cidade" => 327,
                "id_estado" => 17,
                "nome" => "Arraias",
            ],
            [
                "id_cidade" => 328,
                "id_estado" => 17,
                "nome" => "Augustinópolis",
            ],
            [
                "id_cidade" => 329,
                "id_estado" => 17,
                "nome" => "Aurora do Tocantins",
            ],
            [
                "id_cidade" => 330,
                "id_estado" => 17,
                "nome" => "Axixá do Tocantins",
            ],
            [
                "id_cidade" => 331,
                "id_estado" => 17,
                "nome" => "Babaçulândia",
            ],
            [
                "id_cidade" => 332,
                "id_estado" => 17,
                "nome" => "Bandeirantes do Tocantins",
            ],
            [
                "id_cidade" => 333,
                "id_estado" => 17,
                "nome" => "Barra do Ouro",
            ],
            [
                "id_cidade" => 334,
                "id_estado" => 17,
                "nome" => "Barrolândia",
            ],
            [
                "id_cidade" => 335,
                "id_estado" => 17,
                "nome" => "Bernardo Sayão",
            ],
            [
                "id_cidade" => 336,
                "id_estado" => 17,
                "nome" => "Bom Jesus do Tocantins",
            ],
            [
                "id_cidade" => 337,
                "id_estado" => 17,
                "nome" => "Brasilândia do Tocantins",
            ],
            [
                "id_cidade" => 338,
                "id_estado" => 17,
                "nome" => "Brejinho de Nazaré",
            ],
            [
                "id_cidade" => 339,
                "id_estado" => 17,
                "nome" => "Buriti do Tocantins",
            ],
            [
                "id_cidade" => 340,
                "id_estado" => 17,
                "nome" => "Cachoeirinha",
            ],
            [
                "id_cidade" => 341,
                "id_estado" => 17,
                "nome" => "Campos Lindos",
            ],
            [
                "id_cidade" => 342,
                "id_estado" => 17,
                "nome" => "Cariri do Tocantins",
            ],
            [
                "id_cidade" => 343,
                "id_estado" => 17,
                "nome" => "Carmolândia",
            ],
            [
                "id_cidade" => 344,
                "id_estado" => 17,
                "nome" => "Carrasco Bonito",
            ],
            [
                "id_cidade" => 345,
                "id_estado" => 17,
                "nome" => "Caseara",
            ],
            [
                "id_cidade" => 346,
                "id_estado" => 17,
                "nome" => "Centenário",
            ],
            [
                "id_cidade" => 347,
                "id_estado" => 17,
                "nome" => "Chapada da Natividade",
            ],
            [
                "id_cidade" => 348,
                "id_estado" => 17,
                "nome" => "Chapada de Areia",
            ],
            [
                "id_cidade" => 349,
                "id_estado" => 17,
                "nome" => "Colinas do Tocantins",
            ],
            [
                "id_cidade" => 350,
                "id_estado" => 17,
                "nome" => "Colméia",
            ],
            [
                "id_cidade" => 351,
                "id_estado" => 17,
                "nome" => "Combinado",
            ],
            [
                "id_cidade" => 352,
                "id_estado" => 17,
                "nome" => "Conceição do Tocantins",
            ],
            [
                "id_cidade" => 353,
                "id_estado" => 17,
                "nome" => "Couto Magalhães",
            ],
            [
                "id_cidade" => 354,
                "id_estado" => 17,
                "nome" => "Cristalândia",
            ],
            [
                "id_cidade" => 355,
                "id_estado" => 17,
                "nome" => "Crixás do Tocantins",
            ],
            [
                "id_cidade" => 356,
                "id_estado" => 17,
                "nome" => "Darcinópolis",
            ],
            [
                "id_cidade" => 357,
                "id_estado" => 17,
                "nome" => "Dianópolis",
            ],
            [
                "id_cidade" => 358,
                "id_estado" => 17,
                "nome" => "Divinópolis do Tocantins",
            ],
            [
                "id_cidade" => 359,
                "id_estado" => 17,
                "nome" => "Dois Irmãos do Tocantins",
            ],
            [
                "id_cidade" => 360,
                "id_estado" => 17,
                "nome" => "Dueré",
            ],
            [
                "id_cidade" => 361,
                "id_estado" => 17,
                "nome" => "Esperantina",
            ],
            [
                "id_cidade" => 362,
                "id_estado" => 17,
                "nome" => "Fátima",
            ],
            [
                "id_cidade" => 363,
                "id_estado" => 17,
                "nome" => "Figueirópolis",
            ],
            [
                "id_cidade" => 364,
                "id_estado" => 17,
                "nome" => "Filadélfia",
            ],
            [
                "id_cidade" => 365,
                "id_estado" => 17,
                "nome" => "Formoso do Araguaia",
            ],
            [
                "id_cidade" => 366,
                "id_estado" => 17,
                "nome" => "Goianorte",
            ],
            [
                "id_cidade" => 367,
                "id_estado" => 17,
                "nome" => "Goiatins",
            ],
            [
                "id_cidade" => 368,
                "id_estado" => 17,
                "nome" => "Guaraí",
            ],
            [
                "id_cidade" => 369,
                "id_estado" => 17,
                "nome" => "Gurupi",
            ],
            [
                "id_cidade" => 370,
                "id_estado" => 17,
                "nome" => "Ipueiras",
            ],
            [
                "id_cidade" => 371,
                "id_estado" => 17,
                "nome" => "Itacajá",
            ],
            [
                "id_cidade" => 372,
                "id_estado" => 17,
                "nome" => "Itaguatins",
            ],
            [
                "id_cidade" => 373,
                "id_estado" => 17,
                "nome" => "Itapiratins",
            ],
            [
                "id_cidade" => 374,
                "id_estado" => 17,
                "nome" => "Itaporã do Tocantins",
            ],
            [
                "id_cidade" => 375,
                "id_estado" => 17,
                "nome" => "Jaú do Tocantins",
            ],
            [
                "id_cidade" => 376,
                "id_estado" => 17,
                "nome" => "Juarina",
            ],
            [
                "id_cidade" => 377,
                "id_estado" => 17,
                "nome" => "Lagoa da Confusão",
            ],
            [
                "id_cidade" => 378,
                "id_estado" => 17,
                "nome" => "Lagoa do Tocantins",
            ],
            [
                "id_cidade" => 379,
                "id_estado" => 17,
                "nome" => "Lajeado",
            ],
            [
                "id_cidade" => 380,
                "id_estado" => 17,
                "nome" => "Lavandeira",
            ],
            [
                "id_cidade" => 381,
                "id_estado" => 17,
                "nome" => "Lizarda",
            ],
            [
                "id_cidade" => 382,
                "id_estado" => 17,
                "nome" => "Luzinópolis",
            ],
            [
                "id_cidade" => 383,
                "id_estado" => 17,
                "nome" => "Marianópolis do Tocantins",
            ],
            [
                "id_cidade" => 384,
                "id_estado" => 17,
                "nome" => "Mateiros",
            ],
            [
                "id_cidade" => 385,
                "id_estado" => 17,
                "nome" => "Maurilândia do Tocantins",
            ],
            [
                "id_cidade" => 386,
                "id_estado" => 17,
                "nome" => "Miracema do Tocantins",
            ],
            [
                "id_cidade" => 387,
                "id_estado" => 17,
                "nome" => "Miranorte",
            ],
            [
                "id_cidade" => 388,
                "id_estado" => 17,
                "nome" => "Monte do Carmo",
            ],
            [
                "id_cidade" => 389,
                "id_estado" => 17,
                "nome" => "Monte Santo do Tocantins",
            ],
            [
                "id_cidade" => 390,
                "id_estado" => 17,
                "nome" => "Muricilândia",
            ],
            [
                "id_cidade" => 391,
                "id_estado" => 17,
                "nome" => "Natividade",
            ],
            [
                "id_cidade" => 392,
                "id_estado" => 17,
                "nome" => "Nazaré",
            ],
            [
                "id_cidade" => 393,
                "id_estado" => 17,
                "nome" => "Nova Olinda",
            ],
            [
                "id_cidade" => 394,
                "id_estado" => 17,
                "nome" => "Nova Rosalândia",
            ],
            [
                "id_cidade" => 395,
                "id_estado" => 17,
                "nome" => "Novo Acordo",
            ],
            [
                "id_cidade" => 396,
                "id_estado" => 17,
                "nome" => "Novo Alegre",
            ],
            [
                "id_cidade" => 397,
                "id_estado" => 17,
                "nome" => "Novo Jardim",
            ],
            [
                "id_cidade" => 398,
                "id_estado" => 17,
                "nome" => "Oliveira de Fátima",
            ],
            [
                "id_cidade" => 399,
                "id_estado" => 17,
                "nome" => "Palmas",
            ],
            [
                "id_cidade" => 400,
                "id_estado" => 17,
                "nome" => "Palmeirante",
            ],
            [
                "id_cidade" => 401,
                "id_estado" => 17,
                "nome" => "Palmeiras do Tocantins",
            ],
            [
                "id_cidade" => 402,
                "id_estado" => 17,
                "nome" => "Palmeirópolis",
            ],
            [
                "id_cidade" => 403,
                "id_estado" => 17,
                "nome" => "Paraíso do Tocantins",
            ],
            [
                "id_cidade" => 404,
                "id_estado" => 17,
                "nome" => "Paranã",
            ],
            [
                "id_cidade" => 405,
                "id_estado" => 17,
                "nome" => "Pau D'Arco",
            ],
            [
                "id_cidade" => 406,
                "id_estado" => 17,
                "nome" => "Pedro Afonso",
            ],
            [
                "id_cidade" => 407,
                "id_estado" => 17,
                "nome" => "Peixe",
            ],
            [
                "id_cidade" => 408,
                "id_estado" => 17,
                "nome" => "Pequizeiro",
            ],
            [
                "id_cidade" => 409,
                "id_estado" => 17,
                "nome" => "Pindorama do Tocantins",
            ],
            [
                "id_cidade" => 410,
                "id_estado" => 17,
                "nome" => "Piraquê",
            ],
            [
                "id_cidade" => 411,
                "id_estado" => 17,
                "nome" => "Pium",
            ],
            [
                "id_cidade" => 412,
                "id_estado" => 17,
                "nome" => "Ponte Alta do Bom Jesus",
            ],
            [
                "id_cidade" => 413,
                "id_estado" => 17,
                "nome" => "Ponte Alta do Tocantins",
            ],
            [
                "id_cidade" => 414,
                "id_estado" => 17,
                "nome" => "Porto Alegre do Tocantins",
            ],
            [
                "id_cidade" => 415,
                "id_estado" => 17,
                "nome" => "Porto Nacional",
            ],
            [
                "id_cidade" => 416,
                "id_estado" => 17,
                "nome" => "Praia Norte",
            ],
            [
                "id_cidade" => 417,
                "id_estado" => 17,
                "nome" => "Presidente Kennedy",
            ],
            [
                "id_cidade" => 418,
                "id_estado" => 17,
                "nome" => "Pugmil",
            ],
            [
                "id_cidade" => 419,
                "id_estado" => 17,
                "nome" => "Recursolândia",
            ],
            [
                "id_cidade" => 420,
                "id_estado" => 17,
                "nome" => "Riachinho",
            ],
            [
                "id_cidade" => 421,
                "id_estado" => 17,
                "nome" => "Rio da Conceição",
            ],
            [
                "id_cidade" => 422,
                "id_estado" => 17,
                "nome" => "Rio dos Bois",
            ],
            [
                "id_cidade" => 423,
                "id_estado" => 17,
                "nome" => "Rio Sono",
            ],
            [
                "id_cidade" => 424,
                "id_estado" => 17,
                "nome" => "Sampaio",
            ],
            [
                "id_cidade" => 425,
                "id_estado" => 17,
                "nome" => "Sandolândia",
            ],
            [
                "id_cidade" => 426,
                "id_estado" => 17,
                "nome" => "Santa Fé do Araguaia",
            ],
            [
                "id_cidade" => 427,
                "id_estado" => 17,
                "nome" => "Santa Maria do Tocantins",
            ],
            [
                "id_cidade" => 428,
                "id_estado" => 17,
                "nome" => "Santa Rita do Tocantins",
            ],
            [
                "id_cidade" => 429,
                "id_estado" => 17,
                "nome" => "Santa Rosa do Tocantins",
            ],
            [
                "id_cidade" => 430,
                "id_estado" => 17,
                "nome" => "Santa Tereza do Tocantins",
            ],
            [
                "id_cidade" => 431,
                "id_estado" => 17,
                "nome" => "Santa Terezinha do Tocantins",
            ],
            [
                "id_cidade" => 432,
                "id_estado" => 17,
                "nome" => "São Bento do Tocantins",
            ],
            [
                "id_cidade" => 433,
                "id_estado" => 17,
                "nome" => "São Félix do Tocantins",
            ],
            [
                "id_cidade" => 434,
                "id_estado" => 17,
                "nome" => "São Miguel do Tocantins",
            ],
            [
                "id_cidade" => 435,
                "id_estado" => 17,
                "nome" => "São Salvador do Tocantins",
            ],
            [
                "id_cidade" => 436,
                "id_estado" => 17,
                "nome" => "São Sebastião do Tocantins",
            ],
            [
                "id_cidade" => 437,
                "id_estado" => 17,
                "nome" => "São Valério",
            ],
            [
                "id_cidade" => 438,
                "id_estado" => 17,
                "nome" => "Silvanópolis",
            ],
            [
                "id_cidade" => 439,
                "id_estado" => 17,
                "nome" => "Sítio Novo do Tocantins",
            ],
            [
                "id_cidade" => 440,
                "id_estado" => 17,
                "nome" => "Sucupira",
            ],
            [
                "id_cidade" => 441,
                "id_estado" => 17,
                "nome" => "Tabocão",
            ],
            [
                "id_cidade" => 442,
                "id_estado" => 17,
                "nome" => "Taguatinga",
            ],
            [
                "id_cidade" => 443,
                "id_estado" => 17,
                "nome" => "Taipas do Tocantins",
            ],
            [
                "id_cidade" => 444,
                "id_estado" => 17,
                "nome" => "Talismã",
            ],
            [
                "id_cidade" => 445,
                "id_estado" => 17,
                "nome" => "Tocantínia",
            ],
            [
                "id_cidade" => 446,
                "id_estado" => 17,
                "nome" => "Tocantinópolis",
            ],
            [
                "id_cidade" => 447,
                "id_estado" => 17,
                "nome" => "Tupirama",
            ],
            [
                "id_cidade" => 448,
                "id_estado" => 17,
                "nome" => "Tupiratins",
            ],
            [
                "id_cidade" => 449,
                "id_estado" => 17,
                "nome" => "Wanderlândia",
            ],
            [
                "id_cidade" => 450,
                "id_estado" => 17,
                "nome" => "Xambioá",
            ],
            [
                "id_cidade" => 451,
                "id_estado" => 21,
                "nome" => "Açailândia",
            ],
            [
                "id_cidade" => 452,
                "id_estado" => 21,
                "nome" => "Afonso Cunha",
            ],
            [
                "id_cidade" => 453,
                "id_estado" => 21,
                "nome" => "Água Doce do Maranhão",
            ],
            [
                "id_cidade" => 454,
                "id_estado" => 21,
                "nome" => "Alcântara",
            ],
            [
                "id_cidade" => 455,
                "id_estado" => 21,
                "nome" => "Aldeias Altas",
            ],
            [
                "id_cidade" => 456,
                "id_estado" => 21,
                "nome" => "Altamira do Maranhão",
            ],
            [
                "id_cidade" => 457,
                "id_estado" => 21,
                "nome" => "Alto Alegre do Maranhão",
            ],
            [
                "id_cidade" => 458,
                "id_estado" => 21,
                "nome" => "Alto Alegre do Pindaré",
            ],
            [
                "id_cidade" => 459,
                "id_estado" => 21,
                "nome" => "Alto Parnaíba",
            ],
            [
                "id_cidade" => 460,
                "id_estado" => 21,
                "nome" => "Amapá do Maranhão",
            ],
            [
                "id_cidade" => 461,
                "id_estado" => 21,
                "nome" => "Amarante do Maranhão",
            ],
            [
                "id_cidade" => 462,
                "id_estado" => 21,
                "nome" => "Anajatuba",
            ],
            [
                "id_cidade" => 463,
                "id_estado" => 21,
                "nome" => "Anapurus",
            ],
            [
                "id_cidade" => 464,
                "id_estado" => 21,
                "nome" => "Apicum-Açu",
            ],
            [
                "id_cidade" => 465,
                "id_estado" => 21,
                "nome" => "Araguanã",
            ],
            [
                "id_cidade" => 466,
                "id_estado" => 21,
                "nome" => "Araioses",
            ],
            [
                "id_cidade" => 467,
                "id_estado" => 21,
                "nome" => "Arame",
            ],
            [
                "id_cidade" => 468,
                "id_estado" => 21,
                "nome" => "Arari",
            ],
            [
                "id_cidade" => 469,
                "id_estado" => 21,
                "nome" => "Axixá",
            ],
            [
                "id_cidade" => 470,
                "id_estado" => 21,
                "nome" => "Bacabal",
            ],
            [
                "id_cidade" => 471,
                "id_estado" => 21,
                "nome" => "Bacabeira",
            ],
            [
                "id_cidade" => 472,
                "id_estado" => 21,
                "nome" => "Bacuri",
            ],
            [
                "id_cidade" => 473,
                "id_estado" => 21,
                "nome" => "Bacurituba",
            ],
            [
                "id_cidade" => 474,
                "id_estado" => 21,
                "nome" => "Balsas",
            ],
            [
                "id_cidade" => 475,
                "id_estado" => 21,
                "nome" => "Barão de Grajaú",
            ],
            [
                "id_cidade" => 476,
                "id_estado" => 21,
                "nome" => "Barra do Corda",
            ],
            [
                "id_cidade" => 477,
                "id_estado" => 21,
                "nome" => "Barreirinhas",
            ],
            [
                "id_cidade" => 478,
                "id_estado" => 21,
                "nome" => "Bela Vista do Maranhão",
            ],
            [
                "id_cidade" => 479,
                "id_estado" => 21,
                "nome" => "Belágua",
            ],
            [
                "id_cidade" => 480,
                "id_estado" => 21,
                "nome" => "Benedito Leite",
            ],
            [
                "id_cidade" => 481,
                "id_estado" => 21,
                "nome" => "Bequimão",
            ],
            [
                "id_cidade" => 482,
                "id_estado" => 21,
                "nome" => "Bernardo do Mearim",
            ],
            [
                "id_cidade" => 483,
                "id_estado" => 21,
                "nome" => "Boa Vista do Gurupi",
            ],
            [
                "id_cidade" => 484,
                "id_estado" => 21,
                "nome" => "Bom Jardim",
            ],
            [
                "id_cidade" => 485,
                "id_estado" => 21,
                "nome" => "Bom Jesus das Selvas",
            ],
            [
                "id_cidade" => 486,
                "id_estado" => 21,
                "nome" => "Bom Lugar",
            ],
            [
                "id_cidade" => 487,
                "id_estado" => 21,
                "nome" => "Brejo",
            ],
            [
                "id_cidade" => 488,
                "id_estado" => 21,
                "nome" => "Brejo de Areia",
            ],
            [
                "id_cidade" => 489,
                "id_estado" => 21,
                "nome" => "Buriti",
            ],
            [
                "id_cidade" => 490,
                "id_estado" => 21,
                "nome" => "Buriti Bravo",
            ],
            [
                "id_cidade" => 491,
                "id_estado" => 21,
                "nome" => "Buriticupu",
            ],
            [
                "id_cidade" => 492,
                "id_estado" => 21,
                "nome" => "Buritirana",
            ],
            [
                "id_cidade" => 493,
                "id_estado" => 21,
                "nome" => "Cachoeira Grande",
            ],
            [
                "id_cidade" => 494,
                "id_estado" => 21,
                "nome" => "Cajapió",
            ],
            [
                "id_cidade" => 495,
                "id_estado" => 21,
                "nome" => "Cajari",
            ],
            [
                "id_cidade" => 496,
                "id_estado" => 21,
                "nome" => "Campestre do Maranhão",
            ],
            [
                "id_cidade" => 497,
                "id_estado" => 21,
                "nome" => "Cândido Mendes",
            ],
            [
                "id_cidade" => 498,
                "id_estado" => 21,
                "nome" => "Cantanhede",
            ],
            [
                "id_cidade" => 499,
                "id_estado" => 21,
                "nome" => "Capinzal do Norte",
            ],
            [
                "id_cidade" => 500,
                "id_estado" => 21,
                "nome" => "Carolina",
            ],
            [
                "id_cidade" => 501,
                "id_estado" => 21,
                "nome" => "Carutapera",
            ],
            [
                "id_cidade" => 502,
                "id_estado" => 21,
                "nome" => "Caxias",
            ],
            [
                "id_cidade" => 503,
                "id_estado" => 21,
                "nome" => "Cedral",
            ],
            [
                "id_cidade" => 504,
                "id_estado" => 21,
                "nome" => "Central do Maranhão",
            ],
            [
                "id_cidade" => 505,
                "id_estado" => 21,
                "nome" => "Centro do Guilherme",
            ],
            [
                "id_cidade" => 506,
                "id_estado" => 21,
                "nome" => "Centro Novo do Maranhão",
            ],
            [
                "id_cidade" => 507,
                "id_estado" => 21,
                "nome" => "Chapadinha",
            ],
            [
                "id_cidade" => 508,
                "id_estado" => 21,
                "nome" => "Cidelândia",
            ],
            [
                "id_cidade" => 509,
                "id_estado" => 21,
                "nome" => "Codó",
            ],
            [
                "id_cidade" => 510,
                "id_estado" => 21,
                "nome" => "Coelho Neto",
            ],
            [
                "id_cidade" => 511,
                "id_estado" => 21,
                "nome" => "Colinas",
            ],
            [
                "id_cidade" => 512,
                "id_estado" => 21,
                "nome" => "Conceição do Lago-Açu",
            ],
            [
                "id_cidade" => 513,
                "id_estado" => 21,
                "nome" => "Coroatá",
            ],
            [
                "id_cidade" => 514,
                "id_estado" => 21,
                "nome" => "Cururupu",
            ],
            [
                "id_cidade" => 515,
                "id_estado" => 21,
                "nome" => "Davinópolis",
            ],
            [
                "id_cidade" => 516,
                "id_estado" => 21,
                "nome" => "Dom Pedro",
            ],
            [
                "id_cidade" => 517,
                "id_estado" => 21,
                "nome" => "Duque Bacelar",
            ],
            [
                "id_cidade" => 518,
                "id_estado" => 21,
                "nome" => "Esperantinópolis",
            ],
            [
                "id_cidade" => 519,
                "id_estado" => 21,
                "nome" => "Estreito",
            ],
            [
                "id_cidade" => 520,
                "id_estado" => 21,
                "nome" => "Feira Nova do Maranhão",
            ],
            [
                "id_cidade" => 521,
                "id_estado" => 21,
                "nome" => "Fernando Falcão",
            ],
            [
                "id_cidade" => 522,
                "id_estado" => 21,
                "nome" => "Formosa da Serra Negra",
            ],
            [
                "id_cidade" => 523,
                "id_estado" => 21,
                "nome" => "Fortaleza dos Nogueiras",
            ],
            [
                "id_cidade" => 524,
                "id_estado" => 21,
                "nome" => "Fortuna",
            ],
            [
                "id_cidade" => 525,
                "id_estado" => 21,
                "nome" => "Godofredo Viana",
            ],
            [
                "id_cidade" => 526,
                "id_estado" => 21,
                "nome" => "Gonçalves Dias",
            ],
            [
                "id_cidade" => 527,
                "id_estado" => 21,
                "nome" => "Governador Archer",
            ],
            [
                "id_cidade" => 528,
                "id_estado" => 21,
                "nome" => "Governador Edison Lobão",
            ],
            [
                "id_cidade" => 529,
                "id_estado" => 21,
                "nome" => "Governador Eugênio Barros",
            ],
            [
                "id_cidade" => 530,
                "id_estado" => 21,
                "nome" => "Governador Luiz Rocha",
            ],
            [
                "id_cidade" => 531,
                "id_estado" => 21,
                "nome" => "Governador Newton Bello",
            ],
            [
                "id_cidade" => 532,
                "id_estado" => 21,
                "nome" => "Governador Nunes Freire",
            ],
            [
                "id_cidade" => 533,
                "id_estado" => 21,
                "nome" => "Graça Aranha",
            ],
            [
                "id_cidade" => 534,
                "id_estado" => 21,
                "nome" => "Grajaú",
            ],
            [
                "id_cidade" => 535,
                "id_estado" => 21,
                "nome" => "Guimarães",
            ],
            [
                "id_cidade" => 536,
                "id_estado" => 21,
                "nome" => "Humberto de Campos",
            ],
            [
                "id_cidade" => 537,
                "id_estado" => 21,
                "nome" => "Icatu",
            ],
            [
                "id_cidade" => 538,
                "id_estado" => 21,
                "nome" => "Igarapé do Meio",
            ],
            [
                "id_cidade" => 539,
                "id_estado" => 21,
                "nome" => "Igarapé Grande",
            ],
            [
                "id_cidade" => 540,
                "id_estado" => 21,
                "nome" => "Imperatriz",
            ],
            [
                "id_cidade" => 541,
                "id_estado" => 21,
                "nome" => "Itaipava do Grajaú",
            ],
            [
                "id_cidade" => 542,
                "id_estado" => 21,
                "nome" => "Itapecuru Mirim",
            ],
            [
                "id_cidade" => 543,
                "id_estado" => 21,
                "nome" => "Itinga do Maranhão",
            ],
            [
                "id_cidade" => 544,
                "id_estado" => 21,
                "nome" => "Jatobá",
            ],
            [
                "id_cidade" => 545,
                "id_estado" => 21,
                "nome" => "Jenipapo dos Vieiras",
            ],
            [
                "id_cidade" => 546,
                "id_estado" => 21,
                "nome" => "João Lisboa",
            ],
            [
                "id_cidade" => 547,
                "id_estado" => 21,
                "nome" => "Joselândia",
            ],
            [
                "id_cidade" => 548,
                "id_estado" => 21,
                "nome" => "Junco do Maranhão",
            ],
            [
                "id_cidade" => 549,
                "id_estado" => 21,
                "nome" => "Lago da Pedra",
            ],
            [
                "id_cidade" => 550,
                "id_estado" => 21,
                "nome" => "Lago do Junco",
            ],
            [
                "id_cidade" => 551,
                "id_estado" => 21,
                "nome" => "Lago dos Rodrigues",
            ],
            [
                "id_cidade" => 552,
                "id_estado" => 21,
                "nome" => "Lago Verde",
            ],
            [
                "id_cidade" => 553,
                "id_estado" => 21,
                "nome" => "Lagoa do Mato",
            ],
            [
                "id_cidade" => 554,
                "id_estado" => 21,
                "nome" => "Lagoa Grande do Maranhão",
            ],
            [
                "id_cidade" => 555,
                "id_estado" => 21,
                "nome" => "Lajeado Novo",
            ],
            [
                "id_cidade" => 556,
                "id_estado" => 21,
                "nome" => "Lima Campos",
            ],
            [
                "id_cidade" => 557,
                "id_estado" => 21,
                "nome" => "Loreto",
            ],
            [
                "id_cidade" => 558,
                "id_estado" => 21,
                "nome" => "Luís Domingues",
            ],
            [
                "id_cidade" => 559,
                "id_estado" => 21,
                "nome" => "Magalhães de Almeida",
            ],
            [
                "id_cidade" => 560,
                "id_estado" => 21,
                "nome" => "Maracaçumé",
            ],
            [
                "id_cidade" => 561,
                "id_estado" => 21,
                "nome" => "Marajá do Sena",
            ],
            [
                "id_cidade" => 562,
                "id_estado" => 21,
                "nome" => "Maranhãozinho",
            ],
            [
                "id_cidade" => 563,
                "id_estado" => 21,
                "nome" => "Mata Roma",
            ],
            [
                "id_cidade" => 564,
                "id_estado" => 21,
                "nome" => "Matinha",
            ],
            [
                "id_cidade" => 565,
                "id_estado" => 21,
                "nome" => "Matões",
            ],
            [
                "id_cidade" => 566,
                "id_estado" => 21,
                "nome" => "Matões do Norte",
            ],
            [
                "id_cidade" => 567,
                "id_estado" => 21,
                "nome" => "Milagres do Maranhão",
            ],
            [
                "id_cidade" => 568,
                "id_estado" => 21,
                "nome" => "Mirador",
            ],
            [
                "id_cidade" => 569,
                "id_estado" => 21,
                "nome" => "Miranda do Norte",
            ],
            [
                "id_cidade" => 570,
                "id_estado" => 21,
                "nome" => "Mirinzal",
            ],
            [
                "id_cidade" => 571,
                "id_estado" => 21,
                "nome" => "Monção",
            ],
            [
                "id_cidade" => 572,
                "id_estado" => 21,
                "nome" => "Montes Altos",
            ],
            [
                "id_cidade" => 573,
                "id_estado" => 21,
                "nome" => "Morros",
            ],
            [
                "id_cidade" => 574,
                "id_estado" => 21,
                "nome" => "Nina Rodrigues",
            ],
            [
                "id_cidade" => 575,
                "id_estado" => 21,
                "nome" => "Nova Colinas",
            ],
            [
                "id_cidade" => 576,
                "id_estado" => 21,
                "nome" => "Nova Iorque",
            ],
            [
                "id_cidade" => 577,
                "id_estado" => 21,
                "nome" => "Nova Olinda do Maranhão",
            ],
            [
                "id_cidade" => 578,
                "id_estado" => 21,
                "nome" => "Olho d'Água das Cunhãs",
            ],
            [
                "id_cidade" => 579,
                "id_estado" => 21,
                "nome" => "Olinda Nova do Maranhão",
            ],
            [
                "id_cidade" => 580,
                "id_estado" => 21,
                "nome" => "Paço do Lumiar",
            ],
            [
                "id_cidade" => 581,
                "id_estado" => 21,
                "nome" => "Palmeirândia",
            ],
            [
                "id_cidade" => 582,
                "id_estado" => 21,
                "nome" => "Paraibano",
            ],
            [
                "id_cidade" => 583,
                "id_estado" => 21,
                "nome" => "Parnarama",
            ],
            [
                "id_cidade" => 584,
                "id_estado" => 21,
                "nome" => "Passagem Franca",
            ],
            [
                "id_cidade" => 585,
                "id_estado" => 21,
                "nome" => "Pastos Bons",
            ],
            [
                "id_cidade" => 586,
                "id_estado" => 21,
                "nome" => "Paulino Neves",
            ],
            [
                "id_cidade" => 587,
                "id_estado" => 21,
                "nome" => "Paulo Ramos",
            ],
            [
                "id_cidade" => 588,
                "id_estado" => 21,
                "nome" => "Pedreiras",
            ],
            [
                "id_cidade" => 589,
                "id_estado" => 21,
                "nome" => "Pedro do Rosário",
            ],
            [
                "id_cidade" => 590,
                "id_estado" => 21,
                "nome" => "Penalva",
            ],
            [
                "id_cidade" => 591,
                "id_estado" => 21,
                "nome" => "Peri Mirim",
            ],
            [
                "id_cidade" => 592,
                "id_estado" => 21,
                "nome" => "Peritoró",
            ],
            [
                "id_cidade" => 593,
                "id_estado" => 21,
                "nome" => "Pindaré-Mirim",
            ],
            [
                "id_cidade" => 594,
                "id_estado" => 21,
                "nome" => "Pinheiro",
            ],
            [
                "id_cidade" => 595,
                "id_estado" => 21,
                "nome" => "Pio XII",
            ],
            [
                "id_cidade" => 596,
                "id_estado" => 21,
                "nome" => "Pirapemas",
            ],
            [
                "id_cidade" => 597,
                "id_estado" => 21,
                "nome" => "Poção de Pedras",
            ],
            [
                "id_cidade" => 598,
                "id_estado" => 21,
                "nome" => "Porto Franco",
            ],
            [
                "id_cidade" => 599,
                "id_estado" => 21,
                "nome" => "Porto Rico do Maranhão",
            ],
            [
                "id_cidade" => 600,
                "id_estado" => 21,
                "nome" => "Presidente Dutra",
            ],
            [
                "id_cidade" => 601,
                "id_estado" => 21,
                "nome" => "Presidente Juscelino",
            ],
            [
                "id_cidade" => 602,
                "id_estado" => 21,
                "nome" => "Presidente Médici",
            ],
            [
                "id_cidade" => 603,
                "id_estado" => 21,
                "nome" => "Presidente Sarney",
            ],
            [
                "id_cidade" => 604,
                "id_estado" => 21,
                "nome" => "Presidente Vargas",
            ],
            [
                "id_cidade" => 605,
                "id_estado" => 21,
                "nome" => "Primeira Cruz",
            ],
            [
                "id_cidade" => 606,
                "id_estado" => 21,
                "nome" => "Raposa",
            ],
            [
                "id_cidade" => 607,
                "id_estado" => 21,
                "nome" => "Riachão",
            ],
            [
                "id_cidade" => 608,
                "id_estado" => 21,
                "nome" => "Ribamar Fiquene",
            ],
            [
                "id_cidade" => 609,
                "id_estado" => 21,
                "nome" => "Rosário",
            ],
            [
                "id_cidade" => 610,
                "id_estado" => 21,
                "nome" => "Sambaíba",
            ],
            [
                "id_cidade" => 611,
                "id_estado" => 21,
                "nome" => "Santa Filomena do Maranhão",
            ],
            [
                "id_cidade" => 612,
                "id_estado" => 21,
                "nome" => "Santa Helena",
            ],
            [
                "id_cidade" => 613,
                "id_estado" => 21,
                "nome" => "Santa Inês",
            ],
            [
                "id_cidade" => 614,
                "id_estado" => 21,
                "nome" => "Santa Luzia",
            ],
            [
                "id_cidade" => 615,
                "id_estado" => 21,
                "nome" => "Santa Luzia do Paruá",
            ],
            [
                "id_cidade" => 616,
                "id_estado" => 21,
                "nome" => "Santa Quitéria do Maranhão",
            ],
            [
                "id_cidade" => 617,
                "id_estado" => 21,
                "nome" => "Santa Rita",
            ],
            [
                "id_cidade" => 618,
                "id_estado" => 21,
                "nome" => "Santana do Maranhão",
            ],
            [
                "id_cidade" => 619,
                "id_estado" => 21,
                "nome" => "Santo Amaro do Maranhão",
            ],
            [
                "id_cidade" => 620,
                "id_estado" => 21,
                "nome" => "Santo Antônio dos Lopes",
            ],
            [
                "id_cidade" => 621,
                "id_estado" => 21,
                "nome" => "São Benedito do Rio Preto",
            ],
            [
                "id_cidade" => 622,
                "id_estado" => 21,
                "nome" => "São Bento",
            ],
            [
                "id_cidade" => 623,
                "id_estado" => 21,
                "nome" => "São Bernardo",
            ],
            [
                "id_cidade" => 624,
                "id_estado" => 21,
                "nome" => "São Domingos do Azeitão",
            ],
            [
                "id_cidade" => 625,
                "id_estado" => 21,
                "nome" => "São Domingos do Maranhão",
            ],
            [
                "id_cidade" => 626,
                "id_estado" => 21,
                "nome" => "São Félix de Balsas",
            ],
            [
                "id_cidade" => 627,
                "id_estado" => 21,
                "nome" => "São Francisco do Brejão",
            ],
            [
                "id_cidade" => 628,
                "id_estado" => 21,
                "nome" => "São Francisco do Maranhão",
            ],
            [
                "id_cidade" => 629,
                "id_estado" => 21,
                "nome" => "São João Batista",
            ],
            [
                "id_cidade" => 630,
                "id_estado" => 21,
                "nome" => "São João do Carú",
            ],
            [
                "id_cidade" => 631,
                "id_estado" => 21,
                "nome" => "São João do Paraíso",
            ],
            [
                "id_cidade" => 632,
                "id_estado" => 21,
                "nome" => "São João do Soter",
            ],
            [
                "id_cidade" => 633,
                "id_estado" => 21,
                "nome" => "São João dos Patos",
            ],
            [
                "id_cidade" => 634,
                "id_estado" => 21,
                "nome" => "São José de Ribamar",
            ],
            [
                "id_cidade" => 635,
                "id_estado" => 21,
                "nome" => "São José dos Basílios",
            ],
            [
                "id_cidade" => 636,
                "id_estado" => 21,
                "nome" => "São Luís",
            ],
            [
                "id_cidade" => 637,
                "id_estado" => 21,
                "nome" => "São Luís Gonzaga do Maranhão",
            ],
            [
                "id_cidade" => 638,
                "id_estado" => 21,
                "nome" => "São Mateus do Maranhão",
            ],
            [
                "id_cidade" => 639,
                "id_estado" => 21,
                "nome" => "São Pedro da Água Branca",
            ],
            [
                "id_cidade" => 640,
                "id_estado" => 21,
                "nome" => "São Pedro dos Crentes",
            ],
            [
                "id_cidade" => 641,
                "id_estado" => 21,
                "nome" => "São Raimundo das Mangabeiras",
            ],
            [
                "id_cidade" => 642,
                "id_estado" => 21,
                "nome" => "São Raimundo do Doca Bezerra",
            ],
            [
                "id_cidade" => 643,
                "id_estado" => 21,
                "nome" => "São Roberto",
            ],
            [
                "id_cidade" => 644,
                "id_estado" => 21,
                "nome" => "São Vicente Ferrer",
            ],
            [
                "id_cidade" => 645,
                "id_estado" => 21,
                "nome" => "Satubinha",
            ],
            [
                "id_cidade" => 646,
                "id_estado" => 21,
                "nome" => "Senador Alexandre Costa",
            ],
            [
                "id_cidade" => 647,
                "id_estado" => 21,
                "nome" => "Senador La Rocque",
            ],
            [
                "id_cidade" => 648,
                "id_estado" => 21,
                "nome" => "Serrano do Maranhão",
            ],
            [
                "id_cidade" => 649,
                "id_estado" => 21,
                "nome" => "Sítio Novo",
            ],
            [
                "id_cidade" => 650,
                "id_estado" => 21,
                "nome" => "Sucupira do Norte",
            ],
            [
                "id_cidade" => 651,
                "id_estado" => 21,
                "nome" => "Sucupira do Riachão",
            ],
            [
                "id_cidade" => 652,
                "id_estado" => 21,
                "nome" => "Tasso Fragoso",
            ],
            [
                "id_cidade" => 653,
                "id_estado" => 21,
                "nome" => "Timbiras",
            ],
            [
                "id_cidade" => 654,
                "id_estado" => 21,
                "nome" => "Timon",
            ],
            [
                "id_cidade" => 655,
                "id_estado" => 21,
                "nome" => "Trizidela do Vale",
            ],
            [
                "id_cidade" => 656,
                "id_estado" => 21,
                "nome" => "Tufilândia",
            ],
            [
                "id_cidade" => 657,
                "id_estado" => 21,
                "nome" => "Tuntum",
            ],
            [
                "id_cidade" => 658,
                "id_estado" => 21,
                "nome" => "Turiaçu",
            ],
            [
                "id_cidade" => 659,
                "id_estado" => 21,
                "nome" => "Turilândia",
            ],
            [
                "id_cidade" => 660,
                "id_estado" => 21,
                "nome" => "Tutóia",
            ],
            [
                "id_cidade" => 661,
                "id_estado" => 21,
                "nome" => "Urbano Santos",
            ],
            [
                "id_cidade" => 662,
                "id_estado" => 21,
                "nome" => "Vargem Grande",
            ],
            [
                "id_cidade" => 663,
                "id_estado" => 21,
                "nome" => "Viana",
            ],
            [
                "id_cidade" => 664,
                "id_estado" => 21,
                "nome" => "Vila Nova dos Martírios",
            ],
            [
                "id_cidade" => 665,
                "id_estado" => 21,
                "nome" => "Vitória do Mearim",
            ],
            [
                "id_cidade" => 666,
                "id_estado" => 21,
                "nome" => "Vitorino Freire",
            ],
            [
                "id_cidade" => 667,
                "id_estado" => 21,
                "nome" => "Zé Doca",
            ],
            [
                "id_cidade" => 668,
                "id_estado" => 22,
                "nome" => "Acauã",
            ],
            [
                "id_cidade" => 669,
                "id_estado" => 22,
                "nome" => "Agricolândia",
            ],
            [
                "id_cidade" => 670,
                "id_estado" => 22,
                "nome" => "Água Branca",
            ],
            [
                "id_cidade" => 671,
                "id_estado" => 22,
                "nome" => "Alagoinha do Piauí",
            ],
            [
                "id_cidade" => 672,
                "id_estado" => 22,
                "nome" => "Alegrete do Piauí",
            ],
            [
                "id_cidade" => 673,
                "id_estado" => 22,
                "nome" => "Alto Longá",
            ],
            [
                "id_cidade" => 674,
                "id_estado" => 22,
                "nome" => "Altos",
            ],
            [
                "id_cidade" => 675,
                "id_estado" => 22,
                "nome" => "Alvorada do Gurguéia",
            ],
            [
                "id_cidade" => 676,
                "id_estado" => 22,
                "nome" => "Amarante",
            ],
            [
                "id_cidade" => 677,
                "id_estado" => 22,
                "nome" => "Angical do Piauí",
            ],
            [
                "id_cidade" => 678,
                "id_estado" => 22,
                "nome" => "Anísio de Abreu",
            ],
            [
                "id_cidade" => 679,
                "id_estado" => 22,
                "nome" => "Antônio Almeida",
            ],
            [
                "id_cidade" => 680,
                "id_estado" => 22,
                "nome" => "Aroazes",
            ],
            [
                "id_cidade" => 681,
                "id_estado" => 22,
                "nome" => "Aroeiras do Itaim",
            ],
            [
                "id_cidade" => 682,
                "id_estado" => 22,
                "nome" => "Arraial",
            ],
            [
                "id_cidade" => 683,
                "id_estado" => 22,
                "nome" => "Assunção do Piauí",
            ],
            [
                "id_cidade" => 684,
                "id_estado" => 22,
                "nome" => "Avelino Lopes",
            ],
            [
                "id_cidade" => 685,
                "id_estado" => 22,
                "nome" => "Baixa Grande do Ribeiro",
            ],
            [
                "id_cidade" => 686,
                "id_estado" => 22,
                "nome" => "Barra D'Alcântara",
            ],
            [
                "id_cidade" => 687,
                "id_estado" => 22,
                "nome" => "Barras",
            ],
            [
                "id_cidade" => 688,
                "id_estado" => 22,
                "nome" => "Barreiras do Piauí",
            ],
            [
                "id_cidade" => 689,
                "id_estado" => 22,
                "nome" => "Barro Duro",
            ],
            [
                "id_cidade" => 690,
                "id_estado" => 22,
                "nome" => "Batalha",
            ],
            [
                "id_cidade" => 691,
                "id_estado" => 22,
                "nome" => "Bela Vista do Piauí",
            ],
            [
                "id_cidade" => 692,
                "id_estado" => 22,
                "nome" => "Belém do Piauí",
            ],
            [
                "id_cidade" => 693,
                "id_estado" => 22,
                "nome" => "Beneditinos",
            ],
            [
                "id_cidade" => 694,
                "id_estado" => 22,
                "nome" => "Bertolínia",
            ],
            [
                "id_cidade" => 695,
                "id_estado" => 22,
                "nome" => "Betânia do Piauí",
            ],
            [
                "id_cidade" => 696,
                "id_estado" => 22,
                "nome" => "Boa Hora",
            ],
            [
                "id_cidade" => 697,
                "id_estado" => 22,
                "nome" => "Bocaina",
            ],
            [
                "id_cidade" => 698,
                "id_estado" => 22,
                "nome" => "Bom Jesus",
            ],
            [
                "id_cidade" => 699,
                "id_estado" => 22,
                "nome" => "Bom Princípio do Piauí",
            ],
            [
                "id_cidade" => 700,
                "id_estado" => 22,
                "nome" => "Bonfim do Piauí",
            ],
            [
                "id_cidade" => 701,
                "id_estado" => 22,
                "nome" => "Boqueirão do Piauí",
            ],
            [
                "id_cidade" => 702,
                "id_estado" => 22,
                "nome" => "Brasileira",
            ],
            [
                "id_cidade" => 703,
                "id_estado" => 22,
                "nome" => "Brejo do Piauí",
            ],
            [
                "id_cidade" => 704,
                "id_estado" => 22,
                "nome" => "Buriti dos Lopes",
            ],
            [
                "id_cidade" => 705,
                "id_estado" => 22,
                "nome" => "Buriti dos Montes",
            ],
            [
                "id_cidade" => 706,
                "id_estado" => 22,
                "nome" => "Cabeceiras do Piauí",
            ],
            [
                "id_cidade" => 707,
                "id_estado" => 22,
                "nome" => "Cajazeiras do Piauí",
            ],
            [
                "id_cidade" => 708,
                "id_estado" => 22,
                "nome" => "Cajueiro da Praia",
            ],
            [
                "id_cidade" => 709,
                "id_estado" => 22,
                "nome" => "Caldeirão Grande do Piauí",
            ],
            [
                "id_cidade" => 710,
                "id_estado" => 22,
                "nome" => "Campinas do Piauí",
            ],
            [
                "id_cidade" => 711,
                "id_estado" => 22,
                "nome" => "Campo Alegre do Fidalgo",
            ],
            [
                "id_cidade" => 712,
                "id_estado" => 22,
                "nome" => "Campo Grande do Piauí",
            ],
            [
                "id_cidade" => 713,
                "id_estado" => 22,
                "nome" => "Campo Largo do Piauí",
            ],
            [
                "id_cidade" => 714,
                "id_estado" => 22,
                "nome" => "Campo Maior",
            ],
            [
                "id_cidade" => 715,
                "id_estado" => 22,
                "nome" => "Canavieira",
            ],
            [
                "id_cidade" => 716,
                "id_estado" => 22,
                "nome" => "Canto do Buriti",
            ],
            [
                "id_cidade" => 717,
                "id_estado" => 22,
                "nome" => "Capitão de Campos",
            ],
            [
                "id_cidade" => 718,
                "id_estado" => 22,
                "nome" => "Capitão Gervásio Oliveira",
            ],
            [
                "id_cidade" => 719,
                "id_estado" => 22,
                "nome" => "Caracol",
            ],
            [
                "id_cidade" => 720,
                "id_estado" => 22,
                "nome" => "Caraúbas do Piauí",
            ],
            [
                "id_cidade" => 721,
                "id_estado" => 22,
                "nome" => "Caridade do Piauí",
            ],
            [
                "id_cidade" => 722,
                "id_estado" => 22,
                "nome" => "Castelo do Piauí",
            ],
            [
                "id_cidade" => 723,
                "id_estado" => 22,
                "nome" => "Caxingó",
            ],
            [
                "id_cidade" => 724,
                "id_estado" => 22,
                "nome" => "Cocal",
            ],
            [
                "id_cidade" => 725,
                "id_estado" => 22,
                "nome" => "Cocal de Telha",
            ],
            [
                "id_cidade" => 726,
                "id_estado" => 22,
                "nome" => "Cocal dos Alves",
            ],
            [
                "id_cidade" => 727,
                "id_estado" => 22,
                "nome" => "Coivaras",
            ],
            [
                "id_cidade" => 728,
                "id_estado" => 22,
                "nome" => "Colônia do Gurguéia",
            ],
            [
                "id_cidade" => 729,
                "id_estado" => 22,
                "nome" => "Colônia do Piauí",
            ],
            [
                "id_cidade" => 730,
                "id_estado" => 22,
                "nome" => "Conceição do Canindé",
            ],
            [
                "id_cidade" => 731,
                "id_estado" => 22,
                "nome" => "Coronel José Dias",
            ],
            [
                "id_cidade" => 732,
                "id_estado" => 22,
                "nome" => "Corrente",
            ],
            [
                "id_cidade" => 733,
                "id_estado" => 22,
                "nome" => "Cristalândia do Piauí",
            ],
            [
                "id_cidade" => 734,
                "id_estado" => 22,
                "nome" => "Cristino Castro",
            ],
            [
                "id_cidade" => 735,
                "id_estado" => 22,
                "nome" => "Curimatá",
            ],
            [
                "id_cidade" => 736,
                "id_estado" => 22,
                "nome" => "Currais",
            ],
            [
                "id_cidade" => 737,
                "id_estado" => 22,
                "nome" => "Curral Novo do Piauí",
            ],
            [
                "id_cidade" => 738,
                "id_estado" => 22,
                "nome" => "Curralinhos",
            ],
            [
                "id_cidade" => 739,
                "id_estado" => 22,
                "nome" => "Demerval Lobão",
            ],
            [
                "id_cidade" => 740,
                "id_estado" => 22,
                "nome" => "Dirceu Arcoverde",
            ],
            [
                "id_cidade" => 741,
                "id_estado" => 22,
                "nome" => "Dom Expedito Lopes",
            ],
            [
                "id_cidade" => 742,
                "id_estado" => 22,
                "nome" => "Dom Inocêncio",
            ],
            [
                "id_cidade" => 743,
                "id_estado" => 22,
                "nome" => "Domingos Mourão",
            ],
            [
                "id_cidade" => 744,
                "id_estado" => 22,
                "nome" => "Elesbão Veloso",
            ],
            [
                "id_cidade" => 745,
                "id_estado" => 22,
                "nome" => "Eliseu Martins",
            ],
            [
                "id_cidade" => 746,
                "id_estado" => 22,
                "nome" => "Esperantina",
            ],
            [
                "id_cidade" => 747,
                "id_estado" => 22,
                "nome" => "Fartura do Piauí",
            ],
            [
                "id_cidade" => 748,
                "id_estado" => 22,
                "nome" => "Flores do Piauí",
            ],
            [
                "id_cidade" => 749,
                "id_estado" => 22,
                "nome" => "Floresta do Piauí",
            ],
            [
                "id_cidade" => 750,
                "id_estado" => 22,
                "nome" => "Floriano",
            ],
            [
                "id_cidade" => 751,
                "id_estado" => 22,
                "nome" => "Francinópolis",
            ],
            [
                "id_cidade" => 752,
                "id_estado" => 22,
                "nome" => "Francisco Ayres",
            ],
            [
                "id_cidade" => 753,
                "id_estado" => 22,
                "nome" => "Francisco Macedo",
            ],
            [
                "id_cidade" => 754,
                "id_estado" => 22,
                "nome" => "Francisco Santos",
            ],
            [
                "id_cidade" => 755,
                "id_estado" => 22,
                "nome" => "Fronteiras",
            ],
            [
                "id_cidade" => 756,
                "id_estado" => 22,
                "nome" => "Geminiano",
            ],
            [
                "id_cidade" => 757,
                "id_estado" => 22,
                "nome" => "Gilbués",
            ],
            [
                "id_cidade" => 758,
                "id_estado" => 22,
                "nome" => "Guadalupe",
            ],
            [
                "id_cidade" => 759,
                "id_estado" => 22,
                "nome" => "Guaribas",
            ],
            [
                "id_cidade" => 760,
                "id_estado" => 22,
                "nome" => "Hugo Napoleão",
            ],
            [
                "id_cidade" => 761,
                "id_estado" => 22,
                "nome" => "Ilha Grande",
            ],
            [
                "id_cidade" => 762,
                "id_estado" => 22,
                "nome" => "Inhuma",
            ],
            [
                "id_cidade" => 763,
                "id_estado" => 22,
                "nome" => "Ipiranga do Piauí",
            ],
            [
                "id_cidade" => 764,
                "id_estado" => 22,
                "nome" => "Isaías Coelho",
            ],
            [
                "id_cidade" => 765,
                "id_estado" => 22,
                "nome" => "Itainópolis",
            ],
            [
                "id_cidade" => 766,
                "id_estado" => 22,
                "nome" => "Itaueira",
            ],
            [
                "id_cidade" => 767,
                "id_estado" => 22,
                "nome" => "Jacobina do Piauí",
            ],
            [
                "id_cidade" => 768,
                "id_estado" => 22,
                "nome" => "Jaicós",
            ],
            [
                "id_cidade" => 769,
                "id_estado" => 22,
                "nome" => "Jardim do Mulato",
            ],
            [
                "id_cidade" => 770,
                "id_estado" => 22,
                "nome" => "Jatobá do Piauí",
            ],
            [
                "id_cidade" => 771,
                "id_estado" => 22,
                "nome" => "Jerumenha",
            ],
            [
                "id_cidade" => 772,
                "id_estado" => 22,
                "nome" => "João Costa",
            ],
            [
                "id_cidade" => 773,
                "id_estado" => 22,
                "nome" => "Joaquim Pires",
            ],
            [
                "id_cidade" => 774,
                "id_estado" => 22,
                "nome" => "Joca Marques",
            ],
            [
                "id_cidade" => 775,
                "id_estado" => 22,
                "nome" => "José de Freitas",
            ],
            [
                "id_cidade" => 776,
                "id_estado" => 22,
                "nome" => "Juazeiro do Piauí",
            ],
            [
                "id_cidade" => 777,
                "id_estado" => 22,
                "nome" => "Júlio Borges",
            ],
            [
                "id_cidade" => 778,
                "id_estado" => 22,
                "nome" => "Jurema",
            ],
            [
                "id_cidade" => 779,
                "id_estado" => 22,
                "nome" => "Lagoa Alegre",
            ],
            [
                "id_cidade" => 780,
                "id_estado" => 22,
                "nome" => "Lagoa de São Francisco",
            ],
            [
                "id_cidade" => 781,
                "id_estado" => 22,
                "nome" => "Lagoa do Barro do Piauí",
            ],
            [
                "id_cidade" => 782,
                "id_estado" => 22,
                "nome" => "Lagoa do Piauí",
            ],
            [
                "id_cidade" => 783,
                "id_estado" => 22,
                "nome" => "Lagoa do Sítio",
            ],
            [
                "id_cidade" => 784,
                "id_estado" => 22,
                "nome" => "Lagoinha do Piauí",
            ],
            [
                "id_cidade" => 785,
                "id_estado" => 22,
                "nome" => "Landri Sales",
            ],
            [
                "id_cidade" => 786,
                "id_estado" => 22,
                "nome" => "Luís Correia",
            ],
            [
                "id_cidade" => 787,
                "id_estado" => 22,
                "nome" => "Luzilândia",
            ],
            [
                "id_cidade" => 788,
                "id_estado" => 22,
                "nome" => "Madeiro",
            ],
            [
                "id_cidade" => 789,
                "id_estado" => 22,
                "nome" => "Manoel Emídio",
            ],
            [
                "id_cidade" => 790,
                "id_estado" => 22,
                "nome" => "Marcolândia",
            ],
            [
                "id_cidade" => 791,
                "id_estado" => 22,
                "nome" => "Marcos Parente",
            ],
            [
                "id_cidade" => 792,
                "id_estado" => 22,
                "nome" => "Massapê do Piauí",
            ],
            [
                "id_cidade" => 793,
                "id_estado" => 22,
                "nome" => "Matias Olímpio",
            ],
            [
                "id_cidade" => 794,
                "id_estado" => 22,
                "nome" => "Miguel Alves",
            ],
            [
                "id_cidade" => 795,
                "id_estado" => 22,
                "nome" => "Miguel Leão",
            ],
            [
                "id_cidade" => 796,
                "id_estado" => 22,
                "nome" => "Milton Brandão",
            ],
            [
                "id_cidade" => 797,
                "id_estado" => 22,
                "nome" => "Monsenhor Gil",
            ],
            [
                "id_cidade" => 798,
                "id_estado" => 22,
                "nome" => "Monsenhor Hipólito",
            ],
            [
                "id_cidade" => 799,
                "id_estado" => 22,
                "nome" => "Monte Alegre do Piauí",
            ],
            [
                "id_cidade" => 800,
                "id_estado" => 22,
                "nome" => "Morro Cabeça no Tempo",
            ],
            [
                "id_cidade" => 801,
                "id_estado" => 22,
                "nome" => "Morro do Chapéu do Piauí",
            ],
            [
                "id_cidade" => 802,
                "id_estado" => 22,
                "nome" => "Murici dos Portelas",
            ],
            [
                "id_cidade" => 803,
                "id_estado" => 22,
                "nome" => "Nazaré do Piauí",
            ],
            [
                "id_cidade" => 804,
                "id_estado" => 22,
                "nome" => "Nazária",
            ],
            [
                "id_cidade" => 805,
                "id_estado" => 22,
                "nome" => "Nossa Senhora de Nazaré",
            ],
            [
                "id_cidade" => 806,
                "id_estado" => 22,
                "nome" => "Nossa Senhora dos Remédios",
            ],
            [
                "id_cidade" => 807,
                "id_estado" => 22,
                "nome" => "Nova Santa Rita",
            ],
            [
                "id_cidade" => 808,
                "id_estado" => 22,
                "nome" => "Novo Oriente do Piauí",
            ],
            [
                "id_cidade" => 809,
                "id_estado" => 22,
                "nome" => "Novo Santo Antônio",
            ],
            [
                "id_cidade" => 810,
                "id_estado" => 22,
                "nome" => "Oeiras",
            ],
            [
                "id_cidade" => 811,
                "id_estado" => 22,
                "nome" => "Olho D'Água do Piauí",
            ],
            [
                "id_cidade" => 812,
                "id_estado" => 22,
                "nome" => "Padre Marcos",
            ],
            [
                "id_cidade" => 813,
                "id_estado" => 22,
                "nome" => "Paes Landim",
            ],
            [
                "id_cidade" => 814,
                "id_estado" => 22,
                "nome" => "Pajeú do Piauí",
            ],
            [
                "id_cidade" => 815,
                "id_estado" => 22,
                "nome" => "Palmeira do Piauí",
            ],
            [
                "id_cidade" => 816,
                "id_estado" => 22,
                "nome" => "Palmeirais",
            ],
            [
                "id_cidade" => 817,
                "id_estado" => 22,
                "nome" => "Paquetá",
            ],
            [
                "id_cidade" => 818,
                "id_estado" => 22,
                "nome" => "Parnaguá",
            ],
            [
                "id_cidade" => 819,
                "id_estado" => 22,
                "nome" => "Parnaíba",
            ],
            [
                "id_cidade" => 820,
                "id_estado" => 22,
                "nome" => "Passagem Franca do Piauí",
            ],
            [
                "id_cidade" => 821,
                "id_estado" => 22,
                "nome" => "Patos do Piauí",
            ],
            [
                "id_cidade" => 822,
                "id_estado" => 22,
                "nome" => "Pau D'Arco do Piauí",
            ],
            [
                "id_cidade" => 823,
                "id_estado" => 22,
                "nome" => "Paulistana",
            ],
            [
                "id_cidade" => 824,
                "id_estado" => 22,
                "nome" => "Pavussu",
            ],
            [
                "id_cidade" => 825,
                "id_estado" => 22,
                "nome" => "Pedro II",
            ],
            [
                "id_cidade" => 826,
                "id_estado" => 22,
                "nome" => "Pedro Laurentino",
            ],
            [
                "id_cidade" => 827,
                "id_estado" => 22,
                "nome" => "Picos",
            ],
            [
                "id_cidade" => 828,
                "id_estado" => 22,
                "nome" => "Pimenteiras",
            ],
            [
                "id_cidade" => 829,
                "id_estado" => 22,
                "nome" => "Pio IX",
            ],
            [
                "id_cidade" => 830,
                "id_estado" => 22,
                "nome" => "Piracuruca",
            ],
            [
                "id_cidade" => 831,
                "id_estado" => 22,
                "nome" => "Piripiri",
            ],
            [
                "id_cidade" => 832,
                "id_estado" => 22,
                "nome" => "Porto",
            ],
            [
                "id_cidade" => 833,
                "id_estado" => 22,
                "nome" => "Porto Alegre do Piauí",
            ],
            [
                "id_cidade" => 834,
                "id_estado" => 22,
                "nome" => "Prata do Piauí",
            ],
            [
                "id_cidade" => 835,
                "id_estado" => 22,
                "nome" => "Queimada Nova",
            ],
            [
                "id_cidade" => 836,
                "id_estado" => 22,
                "nome" => "Redenção do Gurguéia",
            ],
            [
                "id_cidade" => 837,
                "id_estado" => 22,
                "nome" => "Regeneração",
            ],
            [
                "id_cidade" => 838,
                "id_estado" => 22,
                "nome" => "Riacho Frio",
            ],
            [
                "id_cidade" => 839,
                "id_estado" => 22,
                "nome" => "Ribeira do Piauí",
            ],
            [
                "id_cidade" => 840,
                "id_estado" => 22,
                "nome" => "Ribeiro Gonçalves",
            ],
            [
                "id_cidade" => 841,
                "id_estado" => 22,
                "nome" => "Rio Grande do Piauí",
            ],
            [
                "id_cidade" => 842,
                "id_estado" => 22,
                "nome" => "Santa Cruz do Piauí",
            ],
            [
                "id_cidade" => 843,
                "id_estado" => 22,
                "nome" => "Santa Cruz dos Milagres",
            ],
            [
                "id_cidade" => 844,
                "id_estado" => 22,
                "nome" => "Santa Filomena",
            ],
            [
                "id_cidade" => 845,
                "id_estado" => 22,
                "nome" => "Santa Luz",
            ],
            [
                "id_cidade" => 846,
                "id_estado" => 22,
                "nome" => "Santa Rosa do Piauí",
            ],
            [
                "id_cidade" => 847,
                "id_estado" => 22,
                "nome" => "Santana do Piauí",
            ],
            [
                "id_cidade" => 848,
                "id_estado" => 22,
                "nome" => "Santo Antônio de Lisboa",
            ],
            [
                "id_cidade" => 849,
                "id_estado" => 22,
                "nome" => "Santo Antônio dos Milagres",
            ],
            [
                "id_cidade" => 850,
                "id_estado" => 22,
                "nome" => "Santo Inácio do Piauí",
            ],
            [
                "id_cidade" => 851,
                "id_estado" => 22,
                "nome" => "São Braz do Piauí",
            ],
            [
                "id_cidade" => 852,
                "id_estado" => 22,
                "nome" => "São Félix do Piauí",
            ],
            [
                "id_cidade" => 853,
                "id_estado" => 22,
                "nome" => "São Francisco de Assis do Piauí",
            ],
            [
                "id_cidade" => 854,
                "id_estado" => 22,
                "nome" => "São Francisco do Piauí",
            ],
            [
                "id_cidade" => 855,
                "id_estado" => 22,
                "nome" => "São Gonçalo do Gurguéia",
            ],
            [
                "id_cidade" => 856,
                "id_estado" => 22,
                "nome" => "São Gonçalo do Piauí",
            ],
            [
                "id_cidade" => 857,
                "id_estado" => 22,
                "nome" => "São João da Canabrava",
            ],
            [
                "id_cidade" => 858,
                "id_estado" => 22,
                "nome" => "São João da Fronteira",
            ],
            [
                "id_cidade" => 859,
                "id_estado" => 22,
                "nome" => "São João da Serra",
            ],
            [
                "id_cidade" => 860,
                "id_estado" => 22,
                "nome" => "São João da Varjota",
            ],
            [
                "id_cidade" => 861,
                "id_estado" => 22,
                "nome" => "São João do Arraial",
            ],
            [
                "id_cidade" => 862,
                "id_estado" => 22,
                "nome" => "São João do Piauí",
            ],
            [
                "id_cidade" => 863,
                "id_estado" => 22,
                "nome" => "São José do Divino",
            ],
            [
                "id_cidade" => 864,
                "id_estado" => 22,
                "nome" => "São José do Peixe",
            ],
            [
                "id_cidade" => 865,
                "id_estado" => 22,
                "nome" => "São José do Piauí",
            ],
            [
                "id_cidade" => 866,
                "id_estado" => 22,
                "nome" => "São Julião",
            ],
            [
                "id_cidade" => 867,
                "id_estado" => 22,
                "nome" => "São Lourenço do Piauí",
            ],
            [
                "id_cidade" => 868,
                "id_estado" => 22,
                "nome" => "São Luis do Piauí",
            ],
            [
                "id_cidade" => 869,
                "id_estado" => 22,
                "nome" => "São Miguel da Baixa Grande",
            ],
            [
                "id_cidade" => 870,
                "id_estado" => 22,
                "nome" => "São Miguel do Fidalgo",
            ],
            [
                "id_cidade" => 871,
                "id_estado" => 22,
                "nome" => "São Miguel do Tapuio",
            ],
            [
                "id_cidade" => 872,
                "id_estado" => 22,
                "nome" => "São Pedro do Piauí",
            ],
            [
                "id_cidade" => 873,
                "id_estado" => 22,
                "nome" => "São Raimundo Nonato",
            ],
            [
                "id_cidade" => 874,
                "id_estado" => 22,
                "nome" => "Sebastião Barros",
            ],
            [
                "id_cidade" => 875,
                "id_estado" => 22,
                "nome" => "Sebastião Leal",
            ],
            [
                "id_cidade" => 876,
                "id_estado" => 22,
                "nome" => "Sigefredo Pacheco",
            ],
            [
                "id_cidade" => 877,
                "id_estado" => 22,
                "nome" => "Simões",
            ],
            [
                "id_cidade" => 878,
                "id_estado" => 22,
                "nome" => "Simplício Mendes",
            ],
            [
                "id_cidade" => 879,
                "id_estado" => 22,
                "nome" => "Socorro do Piauí",
            ],
            [
                "id_cidade" => 880,
                "id_estado" => 22,
                "nome" => "Sussuapara",
            ],
            [
                "id_cidade" => 881,
                "id_estado" => 22,
                "nome" => "Tamboril do Piauí",
            ],
            [
                "id_cidade" => 882,
                "id_estado" => 22,
                "nome" => "Tanque do Piauí",
            ],
            [
                "id_cidade" => 883,
                "id_estado" => 22,
                "nome" => "Teresina",
            ],
            [
                "id_cidade" => 884,
                "id_estado" => 22,
                "nome" => "União",
            ],
            [
                "id_cidade" => 885,
                "id_estado" => 22,
                "nome" => "Uruçuí",
            ],
            [
                "id_cidade" => 886,
                "id_estado" => 22,
                "nome" => "Valença do Piauí",
            ],
            [
                "id_cidade" => 887,
                "id_estado" => 22,
                "nome" => "Várzea Branca",
            ],
            [
                "id_cidade" => 888,
                "id_estado" => 22,
                "nome" => "Várzea Grande",
            ],
            [
                "id_cidade" => 889,
                "id_estado" => 22,
                "nome" => "Vera Mendes",
            ],
            [
                "id_cidade" => 890,
                "id_estado" => 22,
                "nome" => "Vila Nova do Piauí",
            ],
            [
                "id_cidade" => 891,
                "id_estado" => 22,
                "nome" => "Wall Ferraz",
            ],
            [
                "id_cidade" => 892,
                "id_estado" => 23,
                "nome" => "Abaiara",
            ],
            [
                "id_cidade" => 893,
                "id_estado" => 23,
                "nome" => "Acarape",
            ],
            [
                "id_cidade" => 894,
                "id_estado" => 23,
                "nome" => "Acaraú",
            ],
            [
                "id_cidade" => 895,
                "id_estado" => 23,
                "nome" => "Acopiara",
            ],
            [
                "id_cidade" => 896,
                "id_estado" => 23,
                "nome" => "Aiuaba",
            ],
            [
                "id_cidade" => 897,
                "id_estado" => 23,
                "nome" => "Alcântaras",
            ],
            [
                "id_cidade" => 898,
                "id_estado" => 23,
                "nome" => "Altaneira",
            ],
            [
                "id_cidade" => 899,
                "id_estado" => 23,
                "nome" => "Alto Santo",
            ],
            [
                "id_cidade" => 900,
                "id_estado" => 23,
                "nome" => "Amontada",
            ],
            [
                "id_cidade" => 901,
                "id_estado" => 23,
                "nome" => "Antonina do Norte",
            ],
            [
                "id_cidade" => 902,
                "id_estado" => 23,
                "nome" => "Apuiarés",
            ],
            [
                "id_cidade" => 903,
                "id_estado" => 23,
                "nome" => "Aquiraz",
            ],
            [
                "id_cidade" => 904,
                "id_estado" => 23,
                "nome" => "Aracati",
            ],
            [
                "id_cidade" => 905,
                "id_estado" => 23,
                "nome" => "Aracoiaba",
            ],
            [
                "id_cidade" => 906,
                "id_estado" => 23,
                "nome" => "Ararendá",
            ],
            [
                "id_cidade" => 907,
                "id_estado" => 23,
                "nome" => "Araripe",
            ],
            [
                "id_cidade" => 908,
                "id_estado" => 23,
                "nome" => "Aratuba",
            ],
            [
                "id_cidade" => 909,
                "id_estado" => 23,
                "nome" => "Arneiroz",
            ],
            [
                "id_cidade" => 910,
                "id_estado" => 23,
                "nome" => "Assaré",
            ],
            [
                "id_cidade" => 911,
                "id_estado" => 23,
                "nome" => "Aurora",
            ],
            [
                "id_cidade" => 912,
                "id_estado" => 23,
                "nome" => "Baixio",
            ],
            [
                "id_cidade" => 913,
                "id_estado" => 23,
                "nome" => "Banabuiú",
            ],
            [
                "id_cidade" => 914,
                "id_estado" => 23,
                "nome" => "Barbalha",
            ],
            [
                "id_cidade" => 915,
                "id_estado" => 23,
                "nome" => "Barreira",
            ],
            [
                "id_cidade" => 916,
                "id_estado" => 23,
                "nome" => "Barro",
            ],
            [
                "id_cidade" => 917,
                "id_estado" => 23,
                "nome" => "Barroquinha",
            ],
            [
                "id_cidade" => 918,
                "id_estado" => 23,
                "nome" => "Baturité",
            ],
            [
                "id_cidade" => 919,
                "id_estado" => 23,
                "nome" => "Beberibe",
            ],
            [
                "id_cidade" => 920,
                "id_estado" => 23,
                "nome" => "Bela Cruz",
            ],
            [
                "id_cidade" => 921,
                "id_estado" => 23,
                "nome" => "Boa Viagem",
            ],
            [
                "id_cidade" => 922,
                "id_estado" => 23,
                "nome" => "Brejo Santo",
            ],
            [
                "id_cidade" => 923,
                "id_estado" => 23,
                "nome" => "Camocim",
            ],
            [
                "id_cidade" => 924,
                "id_estado" => 23,
                "nome" => "Campos Sales",
            ],
            [
                "id_cidade" => 925,
                "id_estado" => 23,
                "nome" => "Canindé",
            ],
            [
                "id_cidade" => 926,
                "id_estado" => 23,
                "nome" => "Capistrano",
            ],
            [
                "id_cidade" => 927,
                "id_estado" => 23,
                "nome" => "Caridade",
            ],
            [
                "id_cidade" => 928,
                "id_estado" => 23,
                "nome" => "Cariré",
            ],
            [
                "id_cidade" => 929,
                "id_estado" => 23,
                "nome" => "Caririaçu",
            ],
            [
                "id_cidade" => 930,
                "id_estado" => 23,
                "nome" => "Cariús",
            ],
            [
                "id_cidade" => 931,
                "id_estado" => 23,
                "nome" => "Carnaubal",
            ],
            [
                "id_cidade" => 932,
                "id_estado" => 23,
                "nome" => "Cascavel",
            ],
            [
                "id_cidade" => 933,
                "id_estado" => 23,
                "nome" => "Catarina",
            ],
            [
                "id_cidade" => 934,
                "id_estado" => 23,
                "nome" => "Catunda",
            ],
            [
                "id_cidade" => 935,
                "id_estado" => 23,
                "nome" => "Caucaia",
            ],
            [
                "id_cidade" => 936,
                "id_estado" => 23,
                "nome" => "Cedro",
            ],
            [
                "id_cidade" => 937,
                "id_estado" => 23,
                "nome" => "Chaval",
            ],
            [
                "id_cidade" => 938,
                "id_estado" => 23,
                "nome" => "Choró",
            ],
            [
                "id_cidade" => 939,
                "id_estado" => 23,
                "nome" => "Chorozinho",
            ],
            [
                "id_cidade" => 940,
                "id_estado" => 23,
                "nome" => "Coreaú",
            ],
            [
                "id_cidade" => 941,
                "id_estado" => 23,
                "nome" => "Crateús",
            ],
            [
                "id_cidade" => 942,
                "id_estado" => 23,
                "nome" => "Crato",
            ],
            [
                "id_cidade" => 943,
                "id_estado" => 23,
                "nome" => "Croatá",
            ],
            [
                "id_cidade" => 944,
                "id_estado" => 23,
                "nome" => "Cruz",
            ],
            [
                "id_cidade" => 945,
                "id_estado" => 23,
                "nome" => "Deputado Irapuan Pinheiro",
            ],
            [
                "id_cidade" => 946,
                "id_estado" => 23,
                "nome" => "Ereré",
            ],
            [
                "id_cidade" => 947,
                "id_estado" => 23,
                "nome" => "Eusébio",
            ],
            [
                "id_cidade" => 948,
                "id_estado" => 23,
                "nome" => "Farias Brito",
            ],
            [
                "id_cidade" => 949,
                "id_estado" => 23,
                "nome" => "Forquilha",
            ],
            [
                "id_cidade" => 950,
                "id_estado" => 23,
                "nome" => "Fortaleza",
            ],
            [
                "id_cidade" => 951,
                "id_estado" => 23,
                "nome" => "Fortim",
            ],
            [
                "id_cidade" => 952,
                "id_estado" => 23,
                "nome" => "Frecheirinha",
            ],
            [
                "id_cidade" => 953,
                "id_estado" => 23,
                "nome" => "General Sampaio",
            ],
            [
                "id_cidade" => 954,
                "id_estado" => 23,
                "nome" => "Graça",
            ],
            [
                "id_cidade" => 955,
                "id_estado" => 23,
                "nome" => "Granja",
            ],
            [
                "id_cidade" => 956,
                "id_estado" => 23,
                "nome" => "Granjeiro",
            ],
            [
                "id_cidade" => 957,
                "id_estado" => 23,
                "nome" => "Groaíras",
            ],
            [
                "id_cidade" => 958,
                "id_estado" => 23,
                "nome" => "Guaiúba",
            ],
            [
                "id_cidade" => 959,
                "id_estado" => 23,
                "nome" => "Guaraciaba do Norte",
            ],
            [
                "id_cidade" => 960,
                "id_estado" => 23,
                "nome" => "Guaramiranga",
            ],
            [
                "id_cidade" => 961,
                "id_estado" => 23,
                "nome" => "Hidrolândia",
            ],
            [
                "id_cidade" => 962,
                "id_estado" => 23,
                "nome" => "Horizonte",
            ],
            [
                "id_cidade" => 963,
                "id_estado" => 23,
                "nome" => "Ibaretama",
            ],
            [
                "id_cidade" => 964,
                "id_estado" => 23,
                "nome" => "Ibiapina",
            ],
            [
                "id_cidade" => 965,
                "id_estado" => 23,
                "nome" => "Ibicuitinga",
            ],
            [
                "id_cidade" => 966,
                "id_estado" => 23,
                "nome" => "Icapuí",
            ],
            [
                "id_cidade" => 967,
                "id_estado" => 23,
                "nome" => "Icó",
            ],
            [
                "id_cidade" => 968,
                "id_estado" => 23,
                "nome" => "Iguatu",
            ],
            [
                "id_cidade" => 969,
                "id_estado" => 23,
                "nome" => "Independência",
            ],
            [
                "id_cidade" => 970,
                "id_estado" => 23,
                "nome" => "Ipaporanga",
            ],
            [
                "id_cidade" => 971,
                "id_estado" => 23,
                "nome" => "Ipaumirim",
            ],
            [
                "id_cidade" => 972,
                "id_estado" => 23,
                "nome" => "Ipu",
            ],
            [
                "id_cidade" => 973,
                "id_estado" => 23,
                "nome" => "Ipueiras",
            ],
            [
                "id_cidade" => 974,
                "id_estado" => 23,
                "nome" => "Iracema",
            ],
            [
                "id_cidade" => 975,
                "id_estado" => 23,
                "nome" => "Irauçuba",
            ],
            [
                "id_cidade" => 976,
                "id_estado" => 23,
                "nome" => "Itaiçaba",
            ],
            [
                "id_cidade" => 977,
                "id_estado" => 23,
                "nome" => "Itaitinga",
            ],
            [
                "id_cidade" => 978,
                "id_estado" => 23,
                "nome" => "Itapajé",
            ],
            [
                "id_cidade" => 979,
                "id_estado" => 23,
                "nome" => "Itapipoca",
            ],
            [
                "id_cidade" => 980,
                "id_estado" => 23,
                "nome" => "Itapiúna",
            ],
            [
                "id_cidade" => 981,
                "id_estado" => 23,
                "nome" => "Itarema",
            ],
            [
                "id_cidade" => 982,
                "id_estado" => 23,
                "nome" => "Itatira",
            ],
            [
                "id_cidade" => 983,
                "id_estado" => 23,
                "nome" => "Jaguaretama",
            ],
            [
                "id_cidade" => 984,
                "id_estado" => 23,
                "nome" => "Jaguaribara",
            ],
            [
                "id_cidade" => 985,
                "id_estado" => 23,
                "nome" => "Jaguaribe",
            ],
            [
                "id_cidade" => 986,
                "id_estado" => 23,
                "nome" => "Jaguaruana",
            ],
            [
                "id_cidade" => 987,
                "id_estado" => 23,
                "nome" => "Jardim",
            ],
            [
                "id_cidade" => 988,
                "id_estado" => 23,
                "nome" => "Jati",
            ],
            [
                "id_cidade" => 989,
                "id_estado" => 23,
                "nome" => "Jijoca de Jericoacoara",
            ],
            [
                "id_cidade" => 990,
                "id_estado" => 23,
                "nome" => "Juazeiro do Norte",
            ],
            [
                "id_cidade" => 991,
                "id_estado" => 23,
                "nome" => "Jucás",
            ],
            [
                "id_cidade" => 992,
                "id_estado" => 23,
                "nome" => "Lavras da Mangabeira",
            ],
            [
                "id_cidade" => 993,
                "id_estado" => 23,
                "nome" => "Limoeiro do Norte",
            ],
            [
                "id_cidade" => 994,
                "id_estado" => 23,
                "nome" => "Madalena",
            ],
            [
                "id_cidade" => 995,
                "id_estado" => 23,
                "nome" => "Maracanaú",
            ],
            [
                "id_cidade" => 996,
                "id_estado" => 23,
                "nome" => "Maranguape",
            ],
            [
                "id_cidade" => 997,
                "id_estado" => 23,
                "nome" => "Marco",
            ],
            [
                "id_cidade" => 998,
                "id_estado" => 23,
                "nome" => "Martinópole",
            ],
            [
                "id_cidade" => 999,
                "id_estado" => 23,
                "nome" => "Massapê",
            ],
            [
                "id_cidade" => 1000,
                "id_estado" => 23,
                "nome" => "Mauriti",
            ],
            [
                "id_cidade" => 1001,
                "id_estado" => 23,
                "nome" => "Meruoca",
            ],
            [
                "id_cidade" => 1002,
                "id_estado" => 23,
                "nome" => "Milagres",
            ],
            [
                "id_cidade" => 1003,
                "id_estado" => 23,
                "nome" => "Milhã",
            ],
            [
                "id_cidade" => 1004,
                "id_estado" => 23,
                "nome" => "Miraíma",
            ],
            [
                "id_cidade" => 1005,
                "id_estado" => 23,
                "nome" => "Missão Velha",
            ],
            [
                "id_cidade" => 1006,
                "id_estado" => 23,
                "nome" => "Mombaça",
            ],
            [
                "id_cidade" => 1007,
                "id_estado" => 23,
                "nome" => "Monsenhor Tabosa",
            ],
            [
                "id_cidade" => 1008,
                "id_estado" => 23,
                "nome" => "Morada Nova",
            ],
            [
                "id_cidade" => 1009,
                "id_estado" => 23,
                "nome" => "Moraújo",
            ],
            [
                "id_cidade" => 1010,
                "id_estado" => 23,
                "nome" => "Morrinhos",
            ],
            [
                "id_cidade" => 1011,
                "id_estado" => 23,
                "nome" => "Mucambo",
            ],
            [
                "id_cidade" => 1012,
                "id_estado" => 23,
                "nome" => "Mulungu",
            ],
            [
                "id_cidade" => 1013,
                "id_estado" => 23,
                "nome" => "Nova Olinda",
            ],
            [
                "id_cidade" => 1014,
                "id_estado" => 23,
                "nome" => "Nova Russas",
            ],
            [
                "id_cidade" => 1015,
                "id_estado" => 23,
                "nome" => "Novo Oriente",
            ],
            [
                "id_cidade" => 1016,
                "id_estado" => 23,
                "nome" => "Ocara",
            ],
            [
                "id_cidade" => 1017,
                "id_estado" => 23,
                "nome" => "Orós",
            ],
            [
                "id_cidade" => 1018,
                "id_estado" => 23,
                "nome" => "Pacajus",
            ],
            [
                "id_cidade" => 1019,
                "id_estado" => 23,
                "nome" => "Pacatuba",
            ],
            [
                "id_cidade" => 1020,
                "id_estado" => 23,
                "nome" => "Pacoti",
            ],
            [
                "id_cidade" => 1021,
                "id_estado" => 23,
                "nome" => "Pacujá",
            ],
            [
                "id_cidade" => 1022,
                "id_estado" => 23,
                "nome" => "Palhano",
            ],
            [
                "id_cidade" => 1023,
                "id_estado" => 23,
                "nome" => "Palmácia",
            ],
            [
                "id_cidade" => 1024,
                "id_estado" => 23,
                "nome" => "Paracuru",
            ],
            [
                "id_cidade" => 1025,
                "id_estado" => 23,
                "nome" => "Paraipaba",
            ],
            [
                "id_cidade" => 1026,
                "id_estado" => 23,
                "nome" => "Parambu",
            ],
            [
                "id_cidade" => 1027,
                "id_estado" => 23,
                "nome" => "Paramoti",
            ],
            [
                "id_cidade" => 1028,
                "id_estado" => 23,
                "nome" => "Pedra Branca",
            ],
            [
                "id_cidade" => 1029,
                "id_estado" => 23,
                "nome" => "Penaforte",
            ],
            [
                "id_cidade" => 1030,
                "id_estado" => 23,
                "nome" => "Pentecoste",
            ],
            [
                "id_cidade" => 1031,
                "id_estado" => 23,
                "nome" => "Pereiro",
            ],
            [
                "id_cidade" => 1032,
                "id_estado" => 23,
                "nome" => "Pindoretama",
            ],
            [
                "id_cidade" => 1033,
                "id_estado" => 23,
                "nome" => "Piquet Carneiro",
            ],
            [
                "id_cidade" => 1034,
                "id_estado" => 23,
                "nome" => "Pires Ferreira",
            ],
            [
                "id_cidade" => 1035,
                "id_estado" => 23,
                "nome" => "Poranga",
            ],
            [
                "id_cidade" => 1036,
                "id_estado" => 23,
                "nome" => "Porteiras",
            ],
            [
                "id_cidade" => 1037,
                "id_estado" => 23,
                "nome" => "Potengi",
            ],
            [
                "id_cidade" => 1038,
                "id_estado" => 23,
                "nome" => "Potiretama",
            ],
            [
                "id_cidade" => 1039,
                "id_estado" => 23,
                "nome" => "Quiterianópolis",
            ],
            [
                "id_cidade" => 1040,
                "id_estado" => 23,
                "nome" => "Quixadá",
            ],
            [
                "id_cidade" => 1041,
                "id_estado" => 23,
                "nome" => "Quixelô",
            ],
            [
                "id_cidade" => 1042,
                "id_estado" => 23,
                "nome" => "Quixeramobim",
            ],
            [
                "id_cidade" => 1043,
                "id_estado" => 23,
                "nome" => "Quixeré",
            ],
            [
                "id_cidade" => 1044,
                "id_estado" => 23,
                "nome" => "Redenção",
            ],
            [
                "id_cidade" => 1045,
                "id_estado" => 23,
                "nome" => "Reriutaba",
            ],
            [
                "id_cidade" => 1046,
                "id_estado" => 23,
                "nome" => "Russas",
            ],
            [
                "id_cidade" => 1047,
                "id_estado" => 23,
                "nome" => "Saboeiro",
            ],
            [
                "id_cidade" => 1048,
                "id_estado" => 23,
                "nome" => "Salitre",
            ],
            [
                "id_cidade" => 1049,
                "id_estado" => 23,
                "nome" => "Santa Quitéria",
            ],
            [
                "id_cidade" => 1050,
                "id_estado" => 23,
                "nome" => "Santana do Acaraú",
            ],
            [
                "id_cidade" => 1051,
                "id_estado" => 23,
                "nome" => "Santana do Cariri",
            ],
            [
                "id_cidade" => 1052,
                "id_estado" => 23,
                "nome" => "São Benedito",
            ],
            [
                "id_cidade" => 1053,
                "id_estado" => 23,
                "nome" => "São Gonçalo do Amarante",
            ],
            [
                "id_cidade" => 1054,
                "id_estado" => 23,
                "nome" => "São João do Jaguaribe",
            ],
            [
                "id_cidade" => 1055,
                "id_estado" => 23,
                "nome" => "São Luís do Curu",
            ],
            [
                "id_cidade" => 1056,
                "id_estado" => 23,
                "nome" => "Senador Pompeu",
            ],
            [
                "id_cidade" => 1057,
                "id_estado" => 23,
                "nome" => "Senador Sá",
            ],
            [
                "id_cidade" => 1058,
                "id_estado" => 23,
                "nome" => "Sobral",
            ],
            [
                "id_cidade" => 1059,
                "id_estado" => 23,
                "nome" => "Solonópole",
            ],
            [
                "id_cidade" => 1060,
                "id_estado" => 23,
                "nome" => "Tabuleiro do Norte",
            ],
            [
                "id_cidade" => 1061,
                "id_estado" => 23,
                "nome" => "Tamboril",
            ],
            [
                "id_cidade" => 1062,
                "id_estado" => 23,
                "nome" => "Tarrafas",
            ],
            [
                "id_cidade" => 1063,
                "id_estado" => 23,
                "nome" => "Tauá",
            ],
            [
                "id_cidade" => 1064,
                "id_estado" => 23,
                "nome" => "Tejuçuoca",
            ],
            [
                "id_cidade" => 1065,
                "id_estado" => 23,
                "nome" => "Tianguá",
            ],
            [
                "id_cidade" => 1066,
                "id_estado" => 23,
                "nome" => "Trairi",
            ],
            [
                "id_cidade" => 1067,
                "id_estado" => 23,
                "nome" => "Tururu",
            ],
            [
                "id_cidade" => 1068,
                "id_estado" => 23,
                "nome" => "Ubajara",
            ],
            [
                "id_cidade" => 1069,
                "id_estado" => 23,
                "nome" => "Umari",
            ],
            [
                "id_cidade" => 1070,
                "id_estado" => 23,
                "nome" => "Umirim",
            ],
            [
                "id_cidade" => 1071,
                "id_estado" => 23,
                "nome" => "Uruburetama",
            ],
            [
                "id_cidade" => 1072,
                "id_estado" => 23,
                "nome" => "Uruoca",
            ],
            [
                "id_cidade" => 1073,
                "id_estado" => 23,
                "nome" => "Varjota",
            ],
            [
                "id_cidade" => 1074,
                "id_estado" => 23,
                "nome" => "Várzea Alegre",
            ],
            [
                "id_cidade" => 1075,
                "id_estado" => 23,
                "nome" => "Viçosa do Ceará",
            ],
            [
                "id_cidade" => 1076,
                "id_estado" => 24,
                "nome" => "Acari",
            ],
            [
                "id_cidade" => 1077,
                "id_estado" => 24,
                "nome" => "Açu",
            ],
            [
                "id_cidade" => 1078,
                "id_estado" => 24,
                "nome" => "Afonso Bezerra",
            ],
            [
                "id_cidade" => 1079,
                "id_estado" => 24,
                "nome" => "Água Nova",
            ],
            [
                "id_cidade" => 1080,
                "id_estado" => 24,
                "nome" => "Alexandria",
            ],
            [
                "id_cidade" => 1081,
                "id_estado" => 24,
                "nome" => "Almino Afonso",
            ],
            [
                "id_cidade" => 1082,
                "id_estado" => 24,
                "nome" => "Alto do Rodrigues",
            ],
            [
                "id_cidade" => 1083,
                "id_estado" => 24,
                "nome" => "Angicos",
            ],
            [
                "id_cidade" => 1084,
                "id_estado" => 24,
                "nome" => "Antônio Martins",
            ],
            [
                "id_cidade" => 1085,
                "id_estado" => 24,
                "nome" => "Apodi",
            ],
            [
                "id_cidade" => 1086,
                "id_estado" => 24,
                "nome" => "Areia Branca",
            ],
            [
                "id_cidade" => 1087,
                "id_estado" => 24,
                "nome" => "Arês",
            ],
            [
                "id_cidade" => 1088,
                "id_estado" => 24,
                "nome" => "Baía Formosa",
            ],
            [
                "id_cidade" => 1089,
                "id_estado" => 24,
                "nome" => "Baraúna",
            ],
            [
                "id_cidade" => 1090,
                "id_estado" => 24,
                "nome" => "Barcelona",
            ],
            [
                "id_cidade" => 1091,
                "id_estado" => 24,
                "nome" => "Bento Fernandes",
            ],
            [
                "id_cidade" => 1092,
                "id_estado" => 24,
                "nome" => "Bodó",
            ],
            [
                "id_cidade" => 1093,
                "id_estado" => 24,
                "nome" => "Bom Jesus",
            ],
            [
                "id_cidade" => 1094,
                "id_estado" => 24,
                "nome" => "Brejinho",
            ],
            [
                "id_cidade" => 1095,
                "id_estado" => 24,
                "nome" => "Caiçara do Norte",
            ],
            [
                "id_cidade" => 1096,
                "id_estado" => 24,
                "nome" => "Caiçara do Rio do Vento",
            ],
            [
                "id_cidade" => 1097,
                "id_estado" => 24,
                "nome" => "Caicó",
            ],
            [
                "id_cidade" => 1098,
                "id_estado" => 24,
                "nome" => "Campo Grande",
            ],
            [
                "id_cidade" => 1099,
                "id_estado" => 24,
                "nome" => "Campo Redondo",
            ],
            [
                "id_cidade" => 1100,
                "id_estado" => 24,
                "nome" => "Canguaretama",
            ],
            [
                "id_cidade" => 1101,
                "id_estado" => 24,
                "nome" => "Caraúbas",
            ],
            [
                "id_cidade" => 1102,
                "id_estado" => 24,
                "nome" => "Carnaúba dos Dantas",
            ],
            [
                "id_cidade" => 1103,
                "id_estado" => 24,
                "nome" => "Carnaubais",
            ],
            [
                "id_cidade" => 1104,
                "id_estado" => 24,
                "nome" => "Ceará-Mirim",
            ],
            [
                "id_cidade" => 1105,
                "id_estado" => 24,
                "nome" => "Cerro Corá",
            ],
            [
                "id_cidade" => 1106,
                "id_estado" => 24,
                "nome" => "Coronel Ezequiel",
            ],
            [
                "id_cidade" => 1107,
                "id_estado" => 24,
                "nome" => "Coronel João Pessoa",
            ],
            [
                "id_cidade" => 1108,
                "id_estado" => 24,
                "nome" => "Cruzeta",
            ],
            [
                "id_cidade" => 1109,
                "id_estado" => 24,
                "nome" => "Currais Novos",
            ],
            [
                "id_cidade" => 1110,
                "id_estado" => 24,
                "nome" => "Doutor Severiano",
            ],
            [
                "id_cidade" => 1111,
                "id_estado" => 24,
                "nome" => "Encanto",
            ],
            [
                "id_cidade" => 1112,
                "id_estado" => 24,
                "nome" => "Equador",
            ],
            [
                "id_cidade" => 1113,
                "id_estado" => 24,
                "nome" => "Espírito Santo",
            ],
            [
                "id_cidade" => 1114,
                "id_estado" => 24,
                "nome" => "Extremoz",
            ],
            [
                "id_cidade" => 1115,
                "id_estado" => 24,
                "nome" => "Felipe Guerra",
            ],
            [
                "id_cidade" => 1116,
                "id_estado" => 24,
                "nome" => "Fernando Pedroza",
            ],
            [
                "id_cidade" => 1117,
                "id_estado" => 24,
                "nome" => "Florânia",
            ],
            [
                "id_cidade" => 1118,
                "id_estado" => 24,
                "nome" => "Francisco Dantas",
            ],
            [
                "id_cidade" => 1119,
                "id_estado" => 24,
                "nome" => "Frutuoso Gomes",
            ],
            [
                "id_cidade" => 1120,
                "id_estado" => 24,
                "nome" => "Galinhos",
            ],
            [
                "id_cidade" => 1121,
                "id_estado" => 24,
                "nome" => "Goianinha",
            ],
            [
                "id_cidade" => 1122,
                "id_estado" => 24,
                "nome" => "Governador Dix-Sept Rosado",
            ],
            [
                "id_cidade" => 1123,
                "id_estado" => 24,
                "nome" => "Grossos",
            ],
            [
                "id_cidade" => 1124,
                "id_estado" => 24,
                "nome" => "Guamaré",
            ],
            [
                "id_cidade" => 1125,
                "id_estado" => 24,
                "nome" => "Ielmo Marinho",
            ],
            [
                "id_cidade" => 1126,
                "id_estado" => 24,
                "nome" => "Ipanguaçu",
            ],
            [
                "id_cidade" => 1127,
                "id_estado" => 24,
                "nome" => "Ipueira",
            ],
            [
                "id_cidade" => 1128,
                "id_estado" => 24,
                "nome" => "Itajá",
            ],
            [
                "id_cidade" => 1129,
                "id_estado" => 24,
                "nome" => "Itaú",
            ],
            [
                "id_cidade" => 1130,
                "id_estado" => 24,
                "nome" => "Jaçanã",
            ],
            [
                "id_cidade" => 1131,
                "id_estado" => 24,
                "nome" => "Jandaíra",
            ],
            [
                "id_cidade" => 1132,
                "id_estado" => 24,
                "nome" => "Janduís",
            ],
            [
                "id_cidade" => 1133,
                "id_estado" => 24,
                "nome" => "Januário Cicco",
            ],
            [
                "id_cidade" => 1134,
                "id_estado" => 24,
                "nome" => "Japi",
            ],
            [
                "id_cidade" => 1135,
                "id_estado" => 24,
                "nome" => "Jardim de Angicos",
            ],
            [
                "id_cidade" => 1136,
                "id_estado" => 24,
                "nome" => "Jardim de Piranhas",
            ],
            [
                "id_cidade" => 1137,
                "id_estado" => 24,
                "nome" => "Jardim do Seridó",
            ],
            [
                "id_cidade" => 1138,
                "id_estado" => 24,
                "nome" => "João Câmara",
            ],
            [
                "id_cidade" => 1139,
                "id_estado" => 24,
                "nome" => "João Dias",
            ],
            [
                "id_cidade" => 1140,
                "id_estado" => 24,
                "nome" => "José da Penha",
            ],
            [
                "id_cidade" => 1141,
                "id_estado" => 24,
                "nome" => "Jucurutu",
            ],
            [
                "id_cidade" => 1142,
                "id_estado" => 24,
                "nome" => "Jundiá",
            ],
            [
                "id_cidade" => 1143,
                "id_estado" => 24,
                "nome" => "Lagoa d'Anta",
            ],
            [
                "id_cidade" => 1144,
                "id_estado" => 24,
                "nome" => "Lagoa de Pedras",
            ],
            [
                "id_cidade" => 1145,
                "id_estado" => 24,
                "nome" => "Lagoa de Velhos",
            ],
            [
                "id_cidade" => 1146,
                "id_estado" => 24,
                "nome" => "Lagoa Nova",
            ],
            [
                "id_cidade" => 1147,
                "id_estado" => 24,
                "nome" => "Lagoa Salgada",
            ],
            [
                "id_cidade" => 1148,
                "id_estado" => 24,
                "nome" => "Lajes",
            ],
            [
                "id_cidade" => 1149,
                "id_estado" => 24,
                "nome" => "Lajes Pintadas",
            ],
            [
                "id_cidade" => 1150,
                "id_estado" => 24,
                "nome" => "Lucrécia",
            ],
            [
                "id_cidade" => 1151,
                "id_estado" => 24,
                "nome" => "Luís Gomes",
            ],
            [
                "id_cidade" => 1152,
                "id_estado" => 24,
                "nome" => "Macaíba",
            ],
            [
                "id_cidade" => 1153,
                "id_estado" => 24,
                "nome" => "Macau",
            ],
            [
                "id_cidade" => 1154,
                "id_estado" => 24,
                "nome" => "Major Sales",
            ],
            [
                "id_cidade" => 1155,
                "id_estado" => 24,
                "nome" => "Marcelino Vieira",
            ],
            [
                "id_cidade" => 1156,
                "id_estado" => 24,
                "nome" => "Martins",
            ],
            [
                "id_cidade" => 1157,
                "id_estado" => 24,
                "nome" => "Maxaranguape",
            ],
            [
                "id_cidade" => 1158,
                "id_estado" => 24,
                "nome" => "Messias Targino",
            ],
            [
                "id_cidade" => 1159,
                "id_estado" => 24,
                "nome" => "Montanhas",
            ],
            [
                "id_cidade" => 1160,
                "id_estado" => 24,
                "nome" => "Monte Alegre",
            ],
            [
                "id_cidade" => 1161,
                "id_estado" => 24,
                "nome" => "Monte das Gameleiras",
            ],
            [
                "id_cidade" => 1162,
                "id_estado" => 24,
                "nome" => "Mossoró",
            ],
            [
                "id_cidade" => 1163,
                "id_estado" => 24,
                "nome" => "Natal",
            ],
            [
                "id_cidade" => 1164,
                "id_estado" => 24,
                "nome" => "Nísia Floresta",
            ],
            [
                "id_cidade" => 1165,
                "id_estado" => 24,
                "nome" => "Nova Cruz",
            ],
            [
                "id_cidade" => 1166,
                "id_estado" => 24,
                "nome" => "Olho d'Água do Borges",
            ],
            [
                "id_cidade" => 1167,
                "id_estado" => 24,
                "nome" => "Ouro Branco",
            ],
            [
                "id_cidade" => 1168,
                "id_estado" => 24,
                "nome" => "Paraná",
            ],
            [
                "id_cidade" => 1169,
                "id_estado" => 24,
                "nome" => "Paraú",
            ],
            [
                "id_cidade" => 1170,
                "id_estado" => 24,
                "nome" => "Parazinho",
            ],
            [
                "id_cidade" => 1171,
                "id_estado" => 24,
                "nome" => "Parelhas",
            ],
            [
                "id_cidade" => 1172,
                "id_estado" => 24,
                "nome" => "Parnamirim",
            ],
            [
                "id_cidade" => 1173,
                "id_estado" => 24,
                "nome" => "Passa e Fica",
            ],
            [
                "id_cidade" => 1174,
                "id_estado" => 24,
                "nome" => "Passagem",
            ],
            [
                "id_cidade" => 1175,
                "id_estado" => 24,
                "nome" => "Patu",
            ],
            [
                "id_cidade" => 1176,
                "id_estado" => 24,
                "nome" => "Pau dos Ferros",
            ],
            [
                "id_cidade" => 1177,
                "id_estado" => 24,
                "nome" => "Pedra Grande",
            ],
            [
                "id_cidade" => 1178,
                "id_estado" => 24,
                "nome" => "Pedra Preta",
            ],
            [
                "id_cidade" => 1179,
                "id_estado" => 24,
                "nome" => "Pedro Avelino",
            ],
            [
                "id_cidade" => 1180,
                "id_estado" => 24,
                "nome" => "Pedro Velho",
            ],
            [
                "id_cidade" => 1181,
                "id_estado" => 24,
                "nome" => "Pendências",
            ],
            [
                "id_cidade" => 1182,
                "id_estado" => 24,
                "nome" => "Pilões",
            ],
            [
                "id_cidade" => 1183,
                "id_estado" => 24,
                "nome" => "Poço Branco",
            ],
            [
                "id_cidade" => 1184,
                "id_estado" => 24,
                "nome" => "Portalegre",
            ],
            [
                "id_cidade" => 1185,
                "id_estado" => 24,
                "nome" => "Porto do Mangue",
            ],
            [
                "id_cidade" => 1186,
                "id_estado" => 24,
                "nome" => "Pureza",
            ],
            [
                "id_cidade" => 1187,
                "id_estado" => 24,
                "nome" => "Rafael Fernandes",
            ],
            [
                "id_cidade" => 1188,
                "id_estado" => 24,
                "nome" => "Rafael Godeiro",
            ],
            [
                "id_cidade" => 1189,
                "id_estado" => 24,
                "nome" => "Riacho da Cruz",
            ],
            [
                "id_cidade" => 1190,
                "id_estado" => 24,
                "nome" => "Riacho de Santana",
            ],
            [
                "id_cidade" => 1191,
                "id_estado" => 24,
                "nome" => "Riachuelo",
            ],
            [
                "id_cidade" => 1192,
                "id_estado" => 24,
                "nome" => "Rio do Fogo",
            ],
            [
                "id_cidade" => 1193,
                "id_estado" => 24,
                "nome" => "Rodolfo Fernandes",
            ],
            [
                "id_cidade" => 1194,
                "id_estado" => 24,
                "nome" => "Ruy Barbosa",
            ],
            [
                "id_cidade" => 1195,
                "id_estado" => 24,
                "nome" => "Santa Cruz",
            ],
            [
                "id_cidade" => 1196,
                "id_estado" => 24,
                "nome" => "Santa Maria",
            ],
            [
                "id_cidade" => 1197,
                "id_estado" => 24,
                "nome" => "Santana do Matos",
            ],
            [
                "id_cidade" => 1198,
                "id_estado" => 24,
                "nome" => "Santana do Seridó",
            ],
            [
                "id_cidade" => 1199,
                "id_estado" => 24,
                "nome" => "Santo Antônio",
            ],
            [
                "id_cidade" => 1200,
                "id_estado" => 24,
                "nome" => "São Bento do Norte",
            ],
            [
                "id_cidade" => 1201,
                "id_estado" => 24,
                "nome" => "São Bento do Trairí",
            ],
            [
                "id_cidade" => 1202,
                "id_estado" => 24,
                "nome" => "São Fernando",
            ],
            [
                "id_cidade" => 1203,
                "id_estado" => 24,
                "nome" => "São Francisco do Oeste",
            ],
            [
                "id_cidade" => 1204,
                "id_estado" => 24,
                "nome" => "São Gonçalo do Amarante",
            ],
            [
                "id_cidade" => 1205,
                "id_estado" => 24,
                "nome" => "São João do Sabugi",
            ],
            [
                "id_cidade" => 1206,
                "id_estado" => 24,
                "nome" => "São José de Mipibu",
            ],
            [
                "id_cidade" => 1207,
                "id_estado" => 24,
                "nome" => "São José do Campestre",
            ],
            [
                "id_cidade" => 1208,
                "id_estado" => 24,
                "nome" => "São José do Seridó",
            ],
            [
                "id_cidade" => 1209,
                "id_estado" => 24,
                "nome" => "São Miguel",
            ],
            [
                "id_cidade" => 1210,
                "id_estado" => 24,
                "nome" => "São Miguel do Gostoso",
            ],
            [
                "id_cidade" => 1211,
                "id_estado" => 24,
                "nome" => "São Paulo do Potengi",
            ],
            [
                "id_cidade" => 1212,
                "id_estado" => 24,
                "nome" => "São Pedro",
            ],
            [
                "id_cidade" => 1213,
                "id_estado" => 24,
                "nome" => "São Rafael",
            ],
            [
                "id_cidade" => 1214,
                "id_estado" => 24,
                "nome" => "São Tomé",
            ],
            [
                "id_cidade" => 1215,
                "id_estado" => 24,
                "nome" => "São Vicente",
            ],
            [
                "id_cidade" => 1216,
                "id_estado" => 24,
                "nome" => "Senador Elói de Souza",
            ],
            [
                "id_cidade" => 1217,
                "id_estado" => 24,
                "nome" => "Senador Georgino Avelino",
            ],
            [
                "id_cidade" => 1218,
                "id_estado" => 24,
                "nome" => "Serra Caiada",
            ],
            [
                "id_cidade" => 1219,
                "id_estado" => 24,
                "nome" => "Serra de São Bento",
            ],
            [
                "id_cidade" => 1220,
                "id_estado" => 24,
                "nome" => "Serra do Mel",
            ],
            [
                "id_cidade" => 1221,
                "id_estado" => 24,
                "nome" => "Serra Negra do Norte",
            ],
            [
                "id_cidade" => 1222,
                "id_estado" => 24,
                "nome" => "Serrinha",
            ],
            [
                "id_cidade" => 1223,
                "id_estado" => 24,
                "nome" => "Serrinha dos Pintos",
            ],
            [
                "id_cidade" => 1224,
                "id_estado" => 24,
                "nome" => "Severiano Melo",
            ],
            [
                "id_cidade" => 1225,
                "id_estado" => 24,
                "nome" => "Sítio Novo",
            ],
            [
                "id_cidade" => 1226,
                "id_estado" => 24,
                "nome" => "Taboleiro Grande",
            ],
            [
                "id_cidade" => 1227,
                "id_estado" => 24,
                "nome" => "Taipu",
            ],
            [
                "id_cidade" => 1228,
                "id_estado" => 24,
                "nome" => "Tangará",
            ],
            [
                "id_cidade" => 1229,
                "id_estado" => 24,
                "nome" => "Tenente Ananias",
            ],
            [
                "id_cidade" => 1230,
                "id_estado" => 24,
                "nome" => "Tenente Laurentino Cruz",
            ],
            [
                "id_cidade" => 1231,
                "id_estado" => 24,
                "nome" => "Tibau",
            ],
            [
                "id_cidade" => 1232,
                "id_estado" => 24,
                "nome" => "Tibau do Sul",
            ],
            [
                "id_cidade" => 1233,
                "id_estado" => 24,
                "nome" => "Timbaúba dos Batistas",
            ],
            [
                "id_cidade" => 1234,
                "id_estado" => 24,
                "nome" => "Touros",
            ],
            [
                "id_cidade" => 1235,
                "id_estado" => 24,
                "nome" => "Triunfo Potiguar",
            ],
            [
                "id_cidade" => 1236,
                "id_estado" => 24,
                "nome" => "Umarizal",
            ],
            [
                "id_cidade" => 1237,
                "id_estado" => 24,
                "nome" => "Upanema",
            ],
            [
                "id_cidade" => 1238,
                "id_estado" => 24,
                "nome" => "Várzea",
            ],
            [
                "id_cidade" => 1239,
                "id_estado" => 24,
                "nome" => "Venha-Ver",
            ],
            [
                "id_cidade" => 1240,
                "id_estado" => 24,
                "nome" => "Vera Cruz",
            ],
            [
                "id_cidade" => 1241,
                "id_estado" => 24,
                "nome" => "Viçosa",
            ],
            [
                "id_cidade" => 1242,
                "id_estado" => 24,
                "nome" => "Vila Flor",
            ],
            [
                "id_cidade" => 1243,
                "id_estado" => 25,
                "nome" => "Água Branca",
            ],
            [
                "id_cidade" => 1244,
                "id_estado" => 25,
                "nome" => "Aguiar",
            ],
            [
                "id_cidade" => 1245,
                "id_estado" => 25,
                "nome" => "Alagoa Grande",
            ],
            [
                "id_cidade" => 1246,
                "id_estado" => 25,
                "nome" => "Alagoa Nova",
            ],
            [
                "id_cidade" => 1247,
                "id_estado" => 25,
                "nome" => "Alagoinha",
            ],
            [
                "id_cidade" => 1248,
                "id_estado" => 25,
                "nome" => "Alcantil",
            ],
            [
                "id_cidade" => 1249,
                "id_estado" => 25,
                "nome" => "Algodão de Jandaíra",
            ],
            [
                "id_cidade" => 1250,
                "id_estado" => 25,
                "nome" => "Alhandra",
            ],
            [
                "id_cidade" => 1251,
                "id_estado" => 25,
                "nome" => "Amparo",
            ],
            [
                "id_cidade" => 1252,
                "id_estado" => 25,
                "nome" => "Aparecida",
            ],
            [
                "id_cidade" => 1253,
                "id_estado" => 25,
                "nome" => "Araçagi",
            ],
            [
                "id_cidade" => 1254,
                "id_estado" => 25,
                "nome" => "Arara",
            ],
            [
                "id_cidade" => 1255,
                "id_estado" => 25,
                "nome" => "Araruna",
            ],
            [
                "id_cidade" => 1256,
                "id_estado" => 25,
                "nome" => "Areia",
            ],
            [
                "id_cidade" => 1257,
                "id_estado" => 25,
                "nome" => "Areia de Baraúnas",
            ],
            [
                "id_cidade" => 1258,
                "id_estado" => 25,
                "nome" => "Areial",
            ],
            [
                "id_cidade" => 1259,
                "id_estado" => 25,
                "nome" => "Aroeiras",
            ],
            [
                "id_cidade" => 1260,
                "id_estado" => 25,
                "nome" => "Assunção",
            ],
            [
                "id_cidade" => 1261,
                "id_estado" => 25,
                "nome" => "Baía da Traição",
            ],
            [
                "id_cidade" => 1262,
                "id_estado" => 25,
                "nome" => "Bananeiras",
            ],
            [
                "id_cidade" => 1263,
                "id_estado" => 25,
                "nome" => "Baraúna",
            ],
            [
                "id_cidade" => 1264,
                "id_estado" => 25,
                "nome" => "Barra de Santa Rosa",
            ],
            [
                "id_cidade" => 1265,
                "id_estado" => 25,
                "nome" => "Barra de Santana",
            ],
            [
                "id_cidade" => 1266,
                "id_estado" => 25,
                "nome" => "Barra de São Miguel",
            ],
            [
                "id_cidade" => 1267,
                "id_estado" => 25,
                "nome" => "Bayeux",
            ],
            [
                "id_cidade" => 1268,
                "id_estado" => 25,
                "nome" => "Belém",
            ],
            [
                "id_cidade" => 1269,
                "id_estado" => 25,
                "nome" => "Belém do Brejo do Cruz",
            ],
            [
                "id_cidade" => 1270,
                "id_estado" => 25,
                "nome" => "Bernardino Batista",
            ],
            [
                "id_cidade" => 1271,
                "id_estado" => 25,
                "nome" => "Boa Ventura",
            ],
            [
                "id_cidade" => 1272,
                "id_estado" => 25,
                "nome" => "Boa Vista",
            ],
            [
                "id_cidade" => 1273,
                "id_estado" => 25,
                "nome" => "Bom Jesus",
            ],
            [
                "id_cidade" => 1274,
                "id_estado" => 25,
                "nome" => "Bom Sucesso",
            ],
            [
                "id_cidade" => 1275,
                "id_estado" => 25,
                "nome" => "Bonito de Santa Fé",
            ],
            [
                "id_cidade" => 1276,
                "id_estado" => 25,
                "nome" => "Boqueirão",
            ],
            [
                "id_cidade" => 1277,
                "id_estado" => 25,
                "nome" => "Borborema",
            ],
            [
                "id_cidade" => 1278,
                "id_estado" => 25,
                "nome" => "Brejo do Cruz",
            ],
            [
                "id_cidade" => 1279,
                "id_estado" => 25,
                "nome" => "Brejo dos Santos",
            ],
            [
                "id_cidade" => 1280,
                "id_estado" => 25,
                "nome" => "Caaporã",
            ],
            [
                "id_cidade" => 1281,
                "id_estado" => 25,
                "nome" => "Cabaceiras",
            ],
            [
                "id_cidade" => 1282,
                "id_estado" => 25,
                "nome" => "Cabedelo",
            ],
            [
                "id_cidade" => 1283,
                "id_estado" => 25,
                "nome" => "Cachoeira dos Índios",
            ],
            [
                "id_cidade" => 1284,
                "id_estado" => 25,
                "nome" => "Cacimba de Areia",
            ],
            [
                "id_cidade" => 1285,
                "id_estado" => 25,
                "nome" => "Cacimba de Dentro",
            ],
            [
                "id_cidade" => 1286,
                "id_estado" => 25,
                "nome" => "Cacimbas",
            ],
            [
                "id_cidade" => 1287,
                "id_estado" => 25,
                "nome" => "Caiçara",
            ],
            [
                "id_cidade" => 1288,
                "id_estado" => 25,
                "nome" => "Cajazeiras",
            ],
            [
                "id_cidade" => 1289,
                "id_estado" => 25,
                "nome" => "Cajazeirinhas",
            ],
            [
                "id_cidade" => 1290,
                "id_estado" => 25,
                "nome" => "Caldas Brandão",
            ],
            [
                "id_cidade" => 1291,
                "id_estado" => 25,
                "nome" => "Camalaú",
            ],
            [
                "id_cidade" => 1292,
                "id_estado" => 25,
                "nome" => "Campina Grande",
            ],
            [
                "id_cidade" => 1293,
                "id_estado" => 25,
                "nome" => "Capim",
            ],
            [
                "id_cidade" => 1294,
                "id_estado" => 25,
                "nome" => "Caraúbas",
            ],
            [
                "id_cidade" => 1295,
                "id_estado" => 25,
                "nome" => "Carrapateira",
            ],
            [
                "id_cidade" => 1296,
                "id_estado" => 25,
                "nome" => "Casserengue",
            ],
            [
                "id_cidade" => 1297,
                "id_estado" => 25,
                "nome" => "Catingueira",
            ],
            [
                "id_cidade" => 1298,
                "id_estado" => 25,
                "nome" => "Catolé do Rocha",
            ],
            [
                "id_cidade" => 1299,
                "id_estado" => 25,
                "nome" => "Caturité",
            ],
            [
                "id_cidade" => 1300,
                "id_estado" => 25,
                "nome" => "Conceição",
            ],
            [
                "id_cidade" => 1301,
                "id_estado" => 25,
                "nome" => "Condado",
            ],
            [
                "id_cidade" => 1302,
                "id_estado" => 25,
                "nome" => "Conde",
            ],
            [
                "id_cidade" => 1303,
                "id_estado" => 25,
                "nome" => "Congo",
            ],
            [
                "id_cidade" => 1304,
                "id_estado" => 25,
                "nome" => "Coremas",
            ],
            [
                "id_cidade" => 1305,
                "id_estado" => 25,
                "nome" => "Coxixola",
            ],
            [
                "id_cidade" => 1306,
                "id_estado" => 25,
                "nome" => "Cruz do Espírito Santo",
            ],
            [
                "id_cidade" => 1307,
                "id_estado" => 25,
                "nome" => "Cubati",
            ],
            [
                "id_cidade" => 1308,
                "id_estado" => 25,
                "nome" => "Cuité",
            ],
            [
                "id_cidade" => 1309,
                "id_estado" => 25,
                "nome" => "Cuité de Mamanguape",
            ],
            [
                "id_cidade" => 1310,
                "id_estado" => 25,
                "nome" => "Cuitegi",
            ],
            [
                "id_cidade" => 1311,
                "id_estado" => 25,
                "nome" => "Curral de Cima",
            ],
            [
                "id_cidade" => 1312,
                "id_estado" => 25,
                "nome" => "Curral Velho",
            ],
            [
                "id_cidade" => 1313,
                "id_estado" => 25,
                "nome" => "Damião",
            ],
            [
                "id_cidade" => 1314,
                "id_estado" => 25,
                "nome" => "Desterro",
            ],
            [
                "id_cidade" => 1315,
                "id_estado" => 25,
                "nome" => "Diamante",
            ],
            [
                "id_cidade" => 1316,
                "id_estado" => 25,
                "nome" => "Dona Inês",
            ],
            [
                "id_cidade" => 1317,
                "id_estado" => 25,
                "nome" => "Duas Estradas",
            ],
            [
                "id_cidade" => 1318,
                "id_estado" => 25,
                "nome" => "Emas",
            ],
            [
                "id_cidade" => 1319,
                "id_estado" => 25,
                "nome" => "Esperança",
            ],
            [
                "id_cidade" => 1320,
                "id_estado" => 25,
                "nome" => "Fagundes",
            ],
            [
                "id_cidade" => 1321,
                "id_estado" => 25,
                "nome" => "Frei Martinho",
            ],
            [
                "id_cidade" => 1322,
                "id_estado" => 25,
                "nome" => "Gado Bravo",
            ],
            [
                "id_cidade" => 1323,
                "id_estado" => 25,
                "nome" => "Guarabira",
            ],
            [
                "id_cidade" => 1324,
                "id_estado" => 25,
                "nome" => "Gurinhém",
            ],
            [
                "id_cidade" => 1325,
                "id_estado" => 25,
                "nome" => "Gurjão",
            ],
            [
                "id_cidade" => 1326,
                "id_estado" => 25,
                "nome" => "Ibiara",
            ],
            [
                "id_cidade" => 1327,
                "id_estado" => 25,
                "nome" => "Igaracy",
            ],
            [
                "id_cidade" => 1328,
                "id_estado" => 25,
                "nome" => "Imaculada",
            ],
            [
                "id_cidade" => 1329,
                "id_estado" => 25,
                "nome" => "Ingá",
            ],
            [
                "id_cidade" => 1330,
                "id_estado" => 25,
                "nome" => "Itabaiana",
            ],
            [
                "id_cidade" => 1331,
                "id_estado" => 25,
                "nome" => "Itaporanga",
            ],
            [
                "id_cidade" => 1332,
                "id_estado" => 25,
                "nome" => "Itapororoca",
            ],
            [
                "id_cidade" => 1333,
                "id_estado" => 25,
                "nome" => "Itatuba",
            ],
            [
                "id_cidade" => 1334,
                "id_estado" => 25,
                "nome" => "Jacaraú",
            ],
            [
                "id_cidade" => 1335,
                "id_estado" => 25,
                "nome" => "Jericó",
            ],
            [
                "id_cidade" => 1336,
                "id_estado" => 25,
                "nome" => "João Pessoa",
            ],
            [
                "id_cidade" => 1337,
                "id_estado" => 25,
                "nome" => "Joca Claudino",
            ],
            [
                "id_cidade" => 1338,
                "id_estado" => 25,
                "nome" => "Juarez Távora",
            ],
            [
                "id_cidade" => 1339,
                "id_estado" => 25,
                "nome" => "Juazeirinho",
            ],
            [
                "id_cidade" => 1340,
                "id_estado" => 25,
                "nome" => "Junco do Seridó",
            ],
            [
                "id_cidade" => 1341,
                "id_estado" => 25,
                "nome" => "Juripiranga",
            ],
            [
                "id_cidade" => 1342,
                "id_estado" => 25,
                "nome" => "Juru",
            ],
            [
                "id_cidade" => 1343,
                "id_estado" => 25,
                "nome" => "Lagoa",
            ],
            [
                "id_cidade" => 1344,
                "id_estado" => 25,
                "nome" => "Lagoa de Dentro",
            ],
            [
                "id_cidade" => 1345,
                "id_estado" => 25,
                "nome" => "Lagoa Seca",
            ],
            [
                "id_cidade" => 1346,
                "id_estado" => 25,
                "nome" => "Lastro",
            ],
            [
                "id_cidade" => 1347,
                "id_estado" => 25,
                "nome" => "Livramento",
            ],
            [
                "id_cidade" => 1348,
                "id_estado" => 25,
                "nome" => "Logradouro",
            ],
            [
                "id_cidade" => 1349,
                "id_estado" => 25,
                "nome" => "Lucena",
            ],
            [
                "id_cidade" => 1350,
                "id_estado" => 25,
                "nome" => "Mãe d'Água",
            ],
            [
                "id_cidade" => 1351,
                "id_estado" => 25,
                "nome" => "Malta",
            ],
            [
                "id_cidade" => 1352,
                "id_estado" => 25,
                "nome" => "Mamanguape",
            ],
            [
                "id_cidade" => 1353,
                "id_estado" => 25,
                "nome" => "Manaíra",
            ],
            [
                "id_cidade" => 1354,
                "id_estado" => 25,
                "nome" => "Marcação",
            ],
            [
                "id_cidade" => 1355,
                "id_estado" => 25,
                "nome" => "Mari",
            ],
            [
                "id_cidade" => 1356,
                "id_estado" => 25,
                "nome" => "Marizópolis",
            ],
            [
                "id_cidade" => 1357,
                "id_estado" => 25,
                "nome" => "Massaranduba",
            ],
            [
                "id_cidade" => 1358,
                "id_estado" => 25,
                "nome" => "Mataraca",
            ],
            [
                "id_cidade" => 1359,
                "id_estado" => 25,
                "nome" => "Matinhas",
            ],
            [
                "id_cidade" => 1360,
                "id_estado" => 25,
                "nome" => "Mato Grosso",
            ],
            [
                "id_cidade" => 1361,
                "id_estado" => 25,
                "nome" => "Maturéia",
            ],
            [
                "id_cidade" => 1362,
                "id_estado" => 25,
                "nome" => "Mogeiro",
            ],
            [
                "id_cidade" => 1363,
                "id_estado" => 25,
                "nome" => "Montadas",
            ],
            [
                "id_cidade" => 1364,
                "id_estado" => 25,
                "nome" => "Monte Horebe",
            ],
            [
                "id_cidade" => 1365,
                "id_estado" => 25,
                "nome" => "Monteiro",
            ],
            [
                "id_cidade" => 1366,
                "id_estado" => 25,
                "nome" => "Mulungu",
            ],
            [
                "id_cidade" => 1367,
                "id_estado" => 25,
                "nome" => "Natuba",
            ],
            [
                "id_cidade" => 1368,
                "id_estado" => 25,
                "nome" => "Nazarezinho",
            ],
            [
                "id_cidade" => 1369,
                "id_estado" => 25,
                "nome" => "Nova Floresta",
            ],
            [
                "id_cidade" => 1370,
                "id_estado" => 25,
                "nome" => "Nova Olinda",
            ],
            [
                "id_cidade" => 1371,
                "id_estado" => 25,
                "nome" => "Nova Palmeira",
            ],
            [
                "id_cidade" => 1372,
                "id_estado" => 25,
                "nome" => "Olho d'Água",
            ],
            [
                "id_cidade" => 1373,
                "id_estado" => 25,
                "nome" => "Olivedos",
            ],
            [
                "id_cidade" => 1374,
                "id_estado" => 25,
                "nome" => "Ouro Velho",
            ],
            [
                "id_cidade" => 1375,
                "id_estado" => 25,
                "nome" => "Parari",
            ],
            [
                "id_cidade" => 1376,
                "id_estado" => 25,
                "nome" => "Passagem",
            ],
            [
                "id_cidade" => 1377,
                "id_estado" => 25,
                "nome" => "Patos",
            ],
            [
                "id_cidade" => 1378,
                "id_estado" => 25,
                "nome" => "Paulista",
            ],
            [
                "id_cidade" => 1379,
                "id_estado" => 25,
                "nome" => "Pedra Branca",
            ],
            [
                "id_cidade" => 1380,
                "id_estado" => 25,
                "nome" => "Pedra Lavrada",
            ],
            [
                "id_cidade" => 1381,
                "id_estado" => 25,
                "nome" => "Pedras de Fogo",
            ],
            [
                "id_cidade" => 1382,
                "id_estado" => 25,
                "nome" => "Pedro Régis",
            ],
            [
                "id_cidade" => 1383,
                "id_estado" => 25,
                "nome" => "Piancó",
            ],
            [
                "id_cidade" => 1384,
                "id_estado" => 25,
                "nome" => "Picuí",
            ],
            [
                "id_cidade" => 1385,
                "id_estado" => 25,
                "nome" => "Pilar",
            ],
            [
                "id_cidade" => 1386,
                "id_estado" => 25,
                "nome" => "Pilões",
            ],
            [
                "id_cidade" => 1387,
                "id_estado" => 25,
                "nome" => "Pilõezinhos",
            ],
            [
                "id_cidade" => 1388,
                "id_estado" => 25,
                "nome" => "Pirpirituba",
            ],
            [
                "id_cidade" => 1389,
                "id_estado" => 25,
                "nome" => "Pitimbu",
            ],
            [
                "id_cidade" => 1390,
                "id_estado" => 25,
                "nome" => "Pocinhos",
            ],
            [
                "id_cidade" => 1391,
                "id_estado" => 25,
                "nome" => "Poço Dantas",
            ],
            [
                "id_cidade" => 1392,
                "id_estado" => 25,
                "nome" => "Poço de José de Moura",
            ],
            [
                "id_cidade" => 1393,
                "id_estado" => 25,
                "nome" => "Pombal",
            ],
            [
                "id_cidade" => 1394,
                "id_estado" => 25,
                "nome" => "Prata",
            ],
            [
                "id_cidade" => 1395,
                "id_estado" => 25,
                "nome" => "Princesa Isabel",
            ],
            [
                "id_cidade" => 1396,
                "id_estado" => 25,
                "nome" => "Puxinanã",
            ],
            [
                "id_cidade" => 1397,
                "id_estado" => 25,
                "nome" => "Queimadas",
            ],
            [
                "id_cidade" => 1398,
                "id_estado" => 25,
                "nome" => "Quixaba",
            ],
            [
                "id_cidade" => 1399,
                "id_estado" => 25,
                "nome" => "Remígio",
            ],
            [
                "id_cidade" => 1400,
                "id_estado" => 25,
                "nome" => "Riachão",
            ],
            [
                "id_cidade" => 1401,
                "id_estado" => 25,
                "nome" => "Riachão do Bacamarte",
            ],
            [
                "id_cidade" => 1402,
                "id_estado" => 25,
                "nome" => "Riachão do Poço",
            ],
            [
                "id_cidade" => 1403,
                "id_estado" => 25,
                "nome" => "Riacho de Santo Antônio",
            ],
            [
                "id_cidade" => 1404,
                "id_estado" => 25,
                "nome" => "Riacho dos Cavalos",
            ],
            [
                "id_cidade" => 1405,
                "id_estado" => 25,
                "nome" => "Rio Tinto",
            ],
            [
                "id_cidade" => 1406,
                "id_estado" => 25,
                "nome" => "Salgadinho",
            ],
            [
                "id_cidade" => 1407,
                "id_estado" => 25,
                "nome" => "Salgado de São Félix",
            ],
            [
                "id_cidade" => 1408,
                "id_estado" => 25,
                "nome" => "Santa Cecília",
            ],
            [
                "id_cidade" => 1409,
                "id_estado" => 25,
                "nome" => "Santa Cruz",
            ],
            [
                "id_cidade" => 1410,
                "id_estado" => 25,
                "nome" => "Santa Helena",
            ],
            [
                "id_cidade" => 1411,
                "id_estado" => 25,
                "nome" => "Santa Inês",
            ],
            [
                "id_cidade" => 1412,
                "id_estado" => 25,
                "nome" => "Santa Luzia",
            ],
            [
                "id_cidade" => 1413,
                "id_estado" => 25,
                "nome" => "Santa Rita",
            ],
            [
                "id_cidade" => 1414,
                "id_estado" => 25,
                "nome" => "Santa Teresinha",
            ],
            [
                "id_cidade" => 1415,
                "id_estado" => 25,
                "nome" => "Santana de Mangueira",
            ],
            [
                "id_cidade" => 1416,
                "id_estado" => 25,
                "nome" => "Santana dos Garrotes",
            ],
            [
                "id_cidade" => 1417,
                "id_estado" => 25,
                "nome" => "Santo André",
            ],
            [
                "id_cidade" => 1418,
                "id_estado" => 25,
                "nome" => "São Bentinho",
            ],
            [
                "id_cidade" => 1419,
                "id_estado" => 25,
                "nome" => "São Bento",
            ],
            [
                "id_cidade" => 1420,
                "id_estado" => 25,
                "nome" => "São Domingos",
            ],
            [
                "id_cidade" => 1421,
                "id_estado" => 25,
                "nome" => "São Domingos do Cariri",
            ],
            [
                "id_cidade" => 1422,
                "id_estado" => 25,
                "nome" => "São Francisco",
            ],
            [
                "id_cidade" => 1423,
                "id_estado" => 25,
                "nome" => "São João do Cariri",
            ],
            [
                "id_cidade" => 1424,
                "id_estado" => 25,
                "nome" => "São João do Rio do Peixe",
            ],
            [
                "id_cidade" => 1425,
                "id_estado" => 25,
                "nome" => "São João do Tigre",
            ],
            [
                "id_cidade" => 1426,
                "id_estado" => 25,
                "nome" => "São José da Lagoa Tapada",
            ],
            [
                "id_cidade" => 1427,
                "id_estado" => 25,
                "nome" => "São José de Caiana",
            ],
            [
                "id_cidade" => 1428,
                "id_estado" => 25,
                "nome" => "São José de Espinharas",
            ],
            [
                "id_cidade" => 1429,
                "id_estado" => 25,
                "nome" => "São José de Piranhas",
            ],
            [
                "id_cidade" => 1430,
                "id_estado" => 25,
                "nome" => "São José de Princesa",
            ],
            [
                "id_cidade" => 1431,
                "id_estado" => 25,
                "nome" => "São José do Bonfim",
            ],
            [
                "id_cidade" => 1432,
                "id_estado" => 25,
                "nome" => "São José do Brejo do Cruz",
            ],
            [
                "id_cidade" => 1433,
                "id_estado" => 25,
                "nome" => "São José do Sabugi",
            ],
            [
                "id_cidade" => 1434,
                "id_estado" => 25,
                "nome" => "São José dos Cordeiros",
            ],
            [
                "id_cidade" => 1435,
                "id_estado" => 25,
                "nome" => "São José dos Ramos",
            ],
            [
                "id_cidade" => 1436,
                "id_estado" => 25,
                "nome" => "São Mamede",
            ],
            [
                "id_cidade" => 1437,
                "id_estado" => 25,
                "nome" => "São Miguel de Taipu",
            ],
            [
                "id_cidade" => 1438,
                "id_estado" => 25,
                "nome" => "São Sebastião de Lagoa de Roça",
            ],
            [
                "id_cidade" => 1439,
                "id_estado" => 25,
                "nome" => "São Sebastião do Umbuzeiro",
            ],
            [
                "id_cidade" => 1440,
                "id_estado" => 25,
                "nome" => "São Vicente do Seridó",
            ],
            [
                "id_cidade" => 1441,
                "id_estado" => 25,
                "nome" => "Sapé",
            ],
            [
                "id_cidade" => 1442,
                "id_estado" => 25,
                "nome" => "Serra Branca",
            ],
            [
                "id_cidade" => 1443,
                "id_estado" => 25,
                "nome" => "Serra da Raiz",
            ],
            [
                "id_cidade" => 1444,
                "id_estado" => 25,
                "nome" => "Serra Grande",
            ],
            [
                "id_cidade" => 1445,
                "id_estado" => 25,
                "nome" => "Serra Redonda",
            ],
            [
                "id_cidade" => 1446,
                "id_estado" => 25,
                "nome" => "Serraria",
            ],
            [
                "id_cidade" => 1447,
                "id_estado" => 25,
                "nome" => "Sertãozinho",
            ],
            [
                "id_cidade" => 1448,
                "id_estado" => 25,
                "nome" => "Sobrado",
            ],
            [
                "id_cidade" => 1449,
                "id_estado" => 25,
                "nome" => "Solânea",
            ],
            [
                "id_cidade" => 1450,
                "id_estado" => 25,
                "nome" => "Soledade",
            ],
            [
                "id_cidade" => 1451,
                "id_estado" => 25,
                "nome" => "Sossêgo",
            ],
            [
                "id_cidade" => 1452,
                "id_estado" => 25,
                "nome" => "Sousa",
            ],
            [
                "id_cidade" => 1453,
                "id_estado" => 25,
                "nome" => "Sumé",
            ],
            [
                "id_cidade" => 1454,
                "id_estado" => 25,
                "nome" => "Tacima",
            ],
            [
                "id_cidade" => 1455,
                "id_estado" => 25,
                "nome" => "Taperoá",
            ],
            [
                "id_cidade" => 1456,
                "id_estado" => 25,
                "nome" => "Tavares",
            ],
            [
                "id_cidade" => 1457,
                "id_estado" => 25,
                "nome" => "Teixeira",
            ],
            [
                "id_cidade" => 1458,
                "id_estado" => 25,
                "nome" => "Tenório",
            ],
            [
                "id_cidade" => 1459,
                "id_estado" => 25,
                "nome" => "Triunfo",
            ],
            [
                "id_cidade" => 1460,
                "id_estado" => 25,
                "nome" => "Uiraúna",
            ],
            [
                "id_cidade" => 1461,
                "id_estado" => 25,
                "nome" => "Umbuzeiro",
            ],
            [
                "id_cidade" => 1462,
                "id_estado" => 25,
                "nome" => "Várzea",
            ],
            [
                "id_cidade" => 1463,
                "id_estado" => 25,
                "nome" => "Vieirópolis",
            ],
            [
                "id_cidade" => 1464,
                "id_estado" => 25,
                "nome" => "Vista Serrana",
            ],
            [
                "id_cidade" => 1465,
                "id_estado" => 25,
                "nome" => "Zabelê",
            ],
            [
                "id_cidade" => 1466,
                "id_estado" => 26,
                "nome" => "Abreu e Lima",
            ],
            [
                "id_cidade" => 1467,
                "id_estado" => 26,
                "nome" => "Afogados da Ingazeira",
            ],
            [
                "id_cidade" => 1468,
                "id_estado" => 26,
                "nome" => "Afrânio",
            ],
            [
                "id_cidade" => 1469,
                "id_estado" => 26,
                "nome" => "Agrestina",
            ],
            [
                "id_cidade" => 1470,
                "id_estado" => 26,
                "nome" => "Água Preta",
            ],
            [
                "id_cidade" => 1471,
                "id_estado" => 26,
                "nome" => "Águas Belas",
            ],
            [
                "id_cidade" => 1472,
                "id_estado" => 26,
                "nome" => "Alagoinha",
            ],
            [
                "id_cidade" => 1473,
                "id_estado" => 26,
                "nome" => "Aliança",
            ],
            [
                "id_cidade" => 1474,
                "id_estado" => 26,
                "nome" => "Altinho",
            ],
            [
                "id_cidade" => 1475,
                "id_estado" => 26,
                "nome" => "Amaraji",
            ],
            [
                "id_cidade" => 1476,
                "id_estado" => 26,
                "nome" => "Angelim",
            ],
            [
                "id_cidade" => 1477,
                "id_estado" => 26,
                "nome" => "Araçoiaba",
            ],
            [
                "id_cidade" => 1478,
                "id_estado" => 26,
                "nome" => "Araripina",
            ],
            [
                "id_cidade" => 1479,
                "id_estado" => 26,
                "nome" => "Arcoverde",
            ],
            [
                "id_cidade" => 1480,
                "id_estado" => 26,
                "nome" => "Barra de Guabiraba",
            ],
            [
                "id_cidade" => 1481,
                "id_estado" => 26,
                "nome" => "Barreiros",
            ],
            [
                "id_cidade" => 1482,
                "id_estado" => 26,
                "nome" => "Belém de Maria",
            ],
            [
                "id_cidade" => 1483,
                "id_estado" => 26,
                "nome" => "Belém do São Francisco",
            ],
            [
                "id_cidade" => 1484,
                "id_estado" => 26,
                "nome" => "Belo Jardim",
            ],
            [
                "id_cidade" => 1485,
                "id_estado" => 26,
                "nome" => "Betânia",
            ],
            [
                "id_cidade" => 1486,
                "id_estado" => 26,
                "nome" => "Bezerros",
            ],
            [
                "id_cidade" => 1487,
                "id_estado" => 26,
                "nome" => "Bodocó",
            ],
            [
                "id_cidade" => 1488,
                "id_estado" => 26,
                "nome" => "Bom Conselho",
            ],
            [
                "id_cidade" => 1489,
                "id_estado" => 26,
                "nome" => "Bom Jardim",
            ],
            [
                "id_cidade" => 1490,
                "id_estado" => 26,
                "nome" => "Bonito",
            ],
            [
                "id_cidade" => 1491,
                "id_estado" => 26,
                "nome" => "Brejão",
            ],
            [
                "id_cidade" => 1492,
                "id_estado" => 26,
                "nome" => "Brejinho",
            ],
            [
                "id_cidade" => 1493,
                "id_estado" => 26,
                "nome" => "Brejo da Madre de Deus",
            ],
            [
                "id_cidade" => 1494,
                "id_estado" => 26,
                "nome" => "Buenos Aires",
            ],
            [
                "id_cidade" => 1495,
                "id_estado" => 26,
                "nome" => "Buíque",
            ],
            [
                "id_cidade" => 1496,
                "id_estado" => 26,
                "nome" => "Cabo de Santo Agostinho",
            ],
            [
                "id_cidade" => 1497,
                "id_estado" => 26,
                "nome" => "Cabrobó",
            ],
            [
                "id_cidade" => 1498,
                "id_estado" => 26,
                "nome" => "Cachoeirinha",
            ],
            [
                "id_cidade" => 1499,
                "id_estado" => 26,
                "nome" => "Caetés",
            ],
            [
                "id_cidade" => 1500,
                "id_estado" => 26,
                "nome" => "Calçado",
            ],
            [
                "id_cidade" => 1501,
                "id_estado" => 26,
                "nome" => "Calumbi",
            ],
            [
                "id_cidade" => 1502,
                "id_estado" => 26,
                "nome" => "Camaragibe",
            ],
            [
                "id_cidade" => 1503,
                "id_estado" => 26,
                "nome" => "Camocim de São Félix",
            ],
            [
                "id_cidade" => 1504,
                "id_estado" => 26,
                "nome" => "Camutanga",
            ],
            [
                "id_cidade" => 1505,
                "id_estado" => 26,
                "nome" => "Canhotinho",
            ],
            [
                "id_cidade" => 1506,
                "id_estado" => 26,
                "nome" => "Capoeiras",
            ],
            [
                "id_cidade" => 1507,
                "id_estado" => 26,
                "nome" => "Carnaíba",
            ],
            [
                "id_cidade" => 1508,
                "id_estado" => 26,
                "nome" => "Carnaubeira da Penha",
            ],
            [
                "id_cidade" => 1509,
                "id_estado" => 26,
                "nome" => "Carpina",
            ],
            [
                "id_cidade" => 1510,
                "id_estado" => 26,
                "nome" => "Caruaru",
            ],
            [
                "id_cidade" => 1511,
                "id_estado" => 26,
                "nome" => "Casinhas",
            ],
            [
                "id_cidade" => 1512,
                "id_estado" => 26,
                "nome" => "Catende",
            ],
            [
                "id_cidade" => 1513,
                "id_estado" => 26,
                "nome" => "Cedro",
            ],
            [
                "id_cidade" => 1514,
                "id_estado" => 26,
                "nome" => "Chã de Alegria",
            ],
            [
                "id_cidade" => 1515,
                "id_estado" => 26,
                "nome" => "Chã Grande",
            ],
            [
                "id_cidade" => 1516,
                "id_estado" => 26,
                "nome" => "Condado",
            ],
            [
                "id_cidade" => 1517,
                "id_estado" => 26,
                "nome" => "Correntes",
            ],
            [
                "id_cidade" => 1518,
                "id_estado" => 26,
                "nome" => "Cortês",
            ],
            [
                "id_cidade" => 1519,
                "id_estado" => 26,
                "nome" => "Cumaru",
            ],
            [
                "id_cidade" => 1520,
                "id_estado" => 26,
                "nome" => "Cupira",
            ],
            [
                "id_cidade" => 1521,
                "id_estado" => 26,
                "nome" => "Custódia",
            ],
            [
                "id_cidade" => 1522,
                "id_estado" => 26,
                "nome" => "Dormentes",
            ],
            [
                "id_cidade" => 1523,
                "id_estado" => 26,
                "nome" => "Escada",
            ],
            [
                "id_cidade" => 1524,
                "id_estado" => 26,
                "nome" => "Exu",
            ],
            [
                "id_cidade" => 1525,
                "id_estado" => 26,
                "nome" => "Feira Nova",
            ],
            [
                "id_cidade" => 1526,
                "id_estado" => 26,
                "nome" => "Fernando de Noronha",
            ],
            [
                "id_cidade" => 1527,
                "id_estado" => 26,
                "nome" => "Ferreiros",
            ],
            [
                "id_cidade" => 1528,
                "id_estado" => 26,
                "nome" => "Flores",
            ],
            [
                "id_cidade" => 1529,
                "id_estado" => 26,
                "nome" => "Floresta",
            ],
            [
                "id_cidade" => 1530,
                "id_estado" => 26,
                "nome" => "Frei Miguelinho",
            ],
            [
                "id_cidade" => 1531,
                "id_estado" => 26,
                "nome" => "Gameleira",
            ],
            [
                "id_cidade" => 1532,
                "id_estado" => 26,
                "nome" => "Garanhuns",
            ],
            [
                "id_cidade" => 1533,
                "id_estado" => 26,
                "nome" => "Glória do Goitá",
            ],
            [
                "id_cidade" => 1534,
                "id_estado" => 26,
                "nome" => "Goiana",
            ],
            [
                "id_cidade" => 1535,
                "id_estado" => 26,
                "nome" => "Granito",
            ],
            [
                "id_cidade" => 1536,
                "id_estado" => 26,
                "nome" => "Gravatá",
            ],
            [
                "id_cidade" => 1537,
                "id_estado" => 26,
                "nome" => "Iati",
            ],
            [
                "id_cidade" => 1538,
                "id_estado" => 26,
                "nome" => "Ibimirim",
            ],
            [
                "id_cidade" => 1539,
                "id_estado" => 26,
                "nome" => "Ibirajuba",
            ],
            [
                "id_cidade" => 1540,
                "id_estado" => 26,
                "nome" => "Igarassu",
            ],
            [
                "id_cidade" => 1541,
                "id_estado" => 26,
                "nome" => "Iguaracy",
            ],
            [
                "id_cidade" => 1542,
                "id_estado" => 26,
                "nome" => "Ilha de Itamaracá",
            ],
            [
                "id_cidade" => 1543,
                "id_estado" => 26,
                "nome" => "Inajá",
            ],
            [
                "id_cidade" => 1544,
                "id_estado" => 26,
                "nome" => "Ingazeira",
            ],
            [
                "id_cidade" => 1545,
                "id_estado" => 26,
                "nome" => "Ipojuca",
            ],
            [
                "id_cidade" => 1546,
                "id_estado" => 26,
                "nome" => "Ipubi",
            ],
            [
                "id_cidade" => 1547,
                "id_estado" => 26,
                "nome" => "Itacuruba",
            ],
            [
                "id_cidade" => 1548,
                "id_estado" => 26,
                "nome" => "Itaíba",
            ],
            [
                "id_cidade" => 1549,
                "id_estado" => 26,
                "nome" => "Itambé",
            ],
            [
                "id_cidade" => 1550,
                "id_estado" => 26,
                "nome" => "Itapetim",
            ],
            [
                "id_cidade" => 1551,
                "id_estado" => 26,
                "nome" => "Itapissuma",
            ],
            [
                "id_cidade" => 1552,
                "id_estado" => 26,
                "nome" => "Itaquitinga",
            ],
            [
                "id_cidade" => 1553,
                "id_estado" => 26,
                "nome" => "Jaboatão dos Guararapes",
            ],
            [
                "id_cidade" => 1554,
                "id_estado" => 26,
                "nome" => "Jaqueira",
            ],
            [
                "id_cidade" => 1555,
                "id_estado" => 26,
                "nome" => "Jataúba",
            ],
            [
                "id_cidade" => 1556,
                "id_estado" => 26,
                "nome" => "Jatobá",
            ],
            [
                "id_cidade" => 1557,
                "id_estado" => 26,
                "nome" => "João Alfredo",
            ],
            [
                "id_cidade" => 1558,
                "id_estado" => 26,
                "nome" => "Joaquim Nabuco",
            ],
            [
                "id_cidade" => 1559,
                "id_estado" => 26,
                "nome" => "Jucati",
            ],
            [
                "id_cidade" => 1560,
                "id_estado" => 26,
                "nome" => "Jupi",
            ],
            [
                "id_cidade" => 1561,
                "id_estado" => 26,
                "nome" => "Jurema",
            ],
            [
                "id_cidade" => 1562,
                "id_estado" => 26,
                "nome" => "Lagoa de Itaenga",
            ],
            [
                "id_cidade" => 1563,
                "id_estado" => 26,
                "nome" => "Lagoa do Carro",
            ],
            [
                "id_cidade" => 1564,
                "id_estado" => 26,
                "nome" => "Lagoa do Ouro",
            ],
            [
                "id_cidade" => 1565,
                "id_estado" => 26,
                "nome" => "Lagoa dos Gatos",
            ],
            [
                "id_cidade" => 1566,
                "id_estado" => 26,
                "nome" => "Lagoa Grande",
            ],
            [
                "id_cidade" => 1567,
                "id_estado" => 26,
                "nome" => "Lajedo",
            ],
            [
                "id_cidade" => 1568,
                "id_estado" => 26,
                "nome" => "Limoeiro",
            ],
            [
                "id_cidade" => 1569,
                "id_estado" => 26,
                "nome" => "Macaparana",
            ],
            [
                "id_cidade" => 1570,
                "id_estado" => 26,
                "nome" => "Machados",
            ],
            [
                "id_cidade" => 1571,
                "id_estado" => 26,
                "nome" => "Manari",
            ],
            [
                "id_cidade" => 1572,
                "id_estado" => 26,
                "nome" => "Maraial",
            ],
            [
                "id_cidade" => 1573,
                "id_estado" => 26,
                "nome" => "Mirandiba",
            ],
            [
                "id_cidade" => 1574,
                "id_estado" => 26,
                "nome" => "Moreilândia",
            ],
            [
                "id_cidade" => 1575,
                "id_estado" => 26,
                "nome" => "Moreno",
            ],
            [
                "id_cidade" => 1576,
                "id_estado" => 26,
                "nome" => "Nazaré da Mata",
            ],
            [
                "id_cidade" => 1577,
                "id_estado" => 26,
                "nome" => "Olinda",
            ],
            [
                "id_cidade" => 1578,
                "id_estado" => 26,
                "nome" => "Orobó",
            ],
            [
                "id_cidade" => 1579,
                "id_estado" => 26,
                "nome" => "Orocó",
            ],
            [
                "id_cidade" => 1580,
                "id_estado" => 26,
                "nome" => "Ouricuri",
            ],
            [
                "id_cidade" => 1581,
                "id_estado" => 26,
                "nome" => "Palmares",
            ],
            [
                "id_cidade" => 1582,
                "id_estado" => 26,
                "nome" => "Palmeirina",
            ],
            [
                "id_cidade" => 1583,
                "id_estado" => 26,
                "nome" => "Panelas",
            ],
            [
                "id_cidade" => 1584,
                "id_estado" => 26,
                "nome" => "Paranatama",
            ],
            [
                "id_cidade" => 1585,
                "id_estado" => 26,
                "nome" => "Parnamirim",
            ],
            [
                "id_cidade" => 1586,
                "id_estado" => 26,
                "nome" => "Passira",
            ],
            [
                "id_cidade" => 1587,
                "id_estado" => 26,
                "nome" => "Paudalho",
            ],
            [
                "id_cidade" => 1588,
                "id_estado" => 26,
                "nome" => "Paulista",
            ],
            [
                "id_cidade" => 1589,
                "id_estado" => 26,
                "nome" => "Pedra",
            ],
            [
                "id_cidade" => 1590,
                "id_estado" => 26,
                "nome" => "Pesqueira",
            ],
            [
                "id_cidade" => 1591,
                "id_estado" => 26,
                "nome" => "Petrolândia",
            ],
            [
                "id_cidade" => 1592,
                "id_estado" => 26,
                "nome" => "Petrolina",
            ],
            [
                "id_cidade" => 1593,
                "id_estado" => 26,
                "nome" => "Poção",
            ],
            [
                "id_cidade" => 1594,
                "id_estado" => 26,
                "nome" => "Pombos",
            ],
            [
                "id_cidade" => 1595,
                "id_estado" => 26,
                "nome" => "Primavera",
            ],
            [
                "id_cidade" => 1596,
                "id_estado" => 26,
                "nome" => "Quipapá",
            ],
            [
                "id_cidade" => 1597,
                "id_estado" => 26,
                "nome" => "Quixaba",
            ],
            [
                "id_cidade" => 1598,
                "id_estado" => 26,
                "nome" => "Recife",
            ],
            [
                "id_cidade" => 1599,
                "id_estado" => 26,
                "nome" => "Riacho das Almas",
            ],
            [
                "id_cidade" => 1600,
                "id_estado" => 26,
                "nome" => "Ribeirão",
            ],
            [
                "id_cidade" => 1601,
                "id_estado" => 26,
                "nome" => "Rio Formoso",
            ],
            [
                "id_cidade" => 1602,
                "id_estado" => 26,
                "nome" => "Sairé",
            ],
            [
                "id_cidade" => 1603,
                "id_estado" => 26,
                "nome" => "Salgadinho",
            ],
            [
                "id_cidade" => 1604,
                "id_estado" => 26,
                "nome" => "Salgueiro",
            ],
            [
                "id_cidade" => 1605,
                "id_estado" => 26,
                "nome" => "Saloá",
            ],
            [
                "id_cidade" => 1606,
                "id_estado" => 26,
                "nome" => "Sanharó",
            ],
            [
                "id_cidade" => 1607,
                "id_estado" => 26,
                "nome" => "Santa Cruz",
            ],
            [
                "id_cidade" => 1608,
                "id_estado" => 26,
                "nome" => "Santa Cruz da Baixa Verde",
            ],
            [
                "id_cidade" => 1609,
                "id_estado" => 26,
                "nome" => "Santa Cruz do Capibaribe",
            ],
            [
                "id_cidade" => 1610,
                "id_estado" => 26,
                "nome" => "Santa Filomena",
            ],
            [
                "id_cidade" => 1611,
                "id_estado" => 26,
                "nome" => "Santa Maria da Boa Vista",
            ],
            [
                "id_cidade" => 1612,
                "id_estado" => 26,
                "nome" => "Santa Maria do Cambucá",
            ],
            [
                "id_cidade" => 1613,
                "id_estado" => 26,
                "nome" => "Santa Terezinha",
            ],
            [
                "id_cidade" => 1614,
                "id_estado" => 26,
                "nome" => "São Benedito do Sul",
            ],
            [
                "id_cidade" => 1615,
                "id_estado" => 26,
                "nome" => "São Bento do Una",
            ],
            [
                "id_cidade" => 1616,
                "id_estado" => 26,
                "nome" => "São Caitano",
            ],
            [
                "id_cidade" => 1617,
                "id_estado" => 26,
                "nome" => "São João",
            ],
            [
                "id_cidade" => 1618,
                "id_estado" => 26,
                "nome" => "São Joaquim do Monte",
            ],
            [
                "id_cidade" => 1619,
                "id_estado" => 26,
                "nome" => "São José da Coroa Grande",
            ],
            [
                "id_cidade" => 1620,
                "id_estado" => 26,
                "nome" => "São José do Belmonte",
            ],
            [
                "id_cidade" => 1621,
                "id_estado" => 26,
                "nome" => "São José do Egito",
            ],
            [
                "id_cidade" => 1622,
                "id_estado" => 26,
                "nome" => "São Lourenço da Mata",
            ],
            [
                "id_cidade" => 1623,
                "id_estado" => 26,
                "nome" => "São Vicente Férrer",
            ],
            [
                "id_cidade" => 1624,
                "id_estado" => 26,
                "nome" => "Serra Talhada",
            ],
            [
                "id_cidade" => 1625,
                "id_estado" => 26,
                "nome" => "Serrita",
            ],
            [
                "id_cidade" => 1626,
                "id_estado" => 26,
                "nome" => "Sertânia",
            ],
            [
                "id_cidade" => 1627,
                "id_estado" => 26,
                "nome" => "Sirinhaém",
            ],
            [
                "id_cidade" => 1628,
                "id_estado" => 26,
                "nome" => "Solidão",
            ],
            [
                "id_cidade" => 1629,
                "id_estado" => 26,
                "nome" => "Surubim",
            ],
            [
                "id_cidade" => 1630,
                "id_estado" => 26,
                "nome" => "Tabira",
            ],
            [
                "id_cidade" => 1631,
                "id_estado" => 26,
                "nome" => "Tacaimbó",
            ],
            [
                "id_cidade" => 1632,
                "id_estado" => 26,
                "nome" => "Tacaratu",
            ],
            [
                "id_cidade" => 1633,
                "id_estado" => 26,
                "nome" => "Tamandaré",
            ],
            [
                "id_cidade" => 1634,
                "id_estado" => 26,
                "nome" => "Taquaritinga do Norte",
            ],
            [
                "id_cidade" => 1635,
                "id_estado" => 26,
                "nome" => "Terezinha",
            ],
            [
                "id_cidade" => 1636,
                "id_estado" => 26,
                "nome" => "Terra Nova",
            ],
            [
                "id_cidade" => 1637,
                "id_estado" => 26,
                "nome" => "Timbaúba",
            ],
            [
                "id_cidade" => 1638,
                "id_estado" => 26,
                "nome" => "Toritama",
            ],
            [
                "id_cidade" => 1639,
                "id_estado" => 26,
                "nome" => "Tracunhaém",
            ],
            [
                "id_cidade" => 1640,
                "id_estado" => 26,
                "nome" => "Trindade",
            ],
            [
                "id_cidade" => 1641,
                "id_estado" => 26,
                "nome" => "Triunfo",
            ],
            [
                "id_cidade" => 1642,
                "id_estado" => 26,
                "nome" => "Tupanatinga",
            ],
            [
                "id_cidade" => 1643,
                "id_estado" => 26,
                "nome" => "Tuparetama",
            ],
            [
                "id_cidade" => 1644,
                "id_estado" => 26,
                "nome" => "Venturosa",
            ],
            [
                "id_cidade" => 1645,
                "id_estado" => 26,
                "nome" => "Verdejante",
            ],
            [
                "id_cidade" => 1646,
                "id_estado" => 26,
                "nome" => "Vertente do Lério",
            ],
            [
                "id_cidade" => 1647,
                "id_estado" => 26,
                "nome" => "Vertentes",
            ],
            [
                "id_cidade" => 1648,
                "id_estado" => 26,
                "nome" => "Vicência",
            ],
            [
                "id_cidade" => 1649,
                "id_estado" => 26,
                "nome" => "Vitória de Santo Antão",
            ],
            [
                "id_cidade" => 1650,
                "id_estado" => 26,
                "nome" => "Xexéu",
            ],
            [
                "id_cidade" => 1651,
                "id_estado" => 27,
                "nome" => "Água Branca",
            ],
            [
                "id_cidade" => 1652,
                "id_estado" => 27,
                "nome" => "Anadia",
            ],
            [
                "id_cidade" => 1653,
                "id_estado" => 27,
                "nome" => "Arapiraca",
            ],
            [
                "id_cidade" => 1654,
                "id_estado" => 27,
                "nome" => "Atalaia",
            ],
            [
                "id_cidade" => 1655,
                "id_estado" => 27,
                "nome" => "Barra de Santo Antônio",
            ],
            [
                "id_cidade" => 1656,
                "id_estado" => 27,
                "nome" => "Barra de São Miguel",
            ],
            [
                "id_cidade" => 1657,
                "id_estado" => 27,
                "nome" => "Batalha",
            ],
            [
                "id_cidade" => 1658,
                "id_estado" => 27,
                "nome" => "Belém",
            ],
            [
                "id_cidade" => 1659,
                "id_estado" => 27,
                "nome" => "Belo Monte",
            ],
            [
                "id_cidade" => 1660,
                "id_estado" => 27,
                "nome" => "Boca da Mata",
            ],
            [
                "id_cidade" => 1661,
                "id_estado" => 27,
                "nome" => "Branquinha",
            ],
            [
                "id_cidade" => 1662,
                "id_estado" => 27,
                "nome" => "Cacimbinhas",
            ],
            [
                "id_cidade" => 1663,
                "id_estado" => 27,
                "nome" => "Cajueiro",
            ],
            [
                "id_cidade" => 1664,
                "id_estado" => 27,
                "nome" => "Campestre",
            ],
            [
                "id_cidade" => 1665,
                "id_estado" => 27,
                "nome" => "Campo Alegre",
            ],
            [
                "id_cidade" => 1666,
                "id_estado" => 27,
                "nome" => "Campo Grande",
            ],
            [
                "id_cidade" => 1667,
                "id_estado" => 27,
                "nome" => "Canapi",
            ],
            [
                "id_cidade" => 1668,
                "id_estado" => 27,
                "nome" => "Capela",
            ],
            [
                "id_cidade" => 1669,
                "id_estado" => 27,
                "nome" => "Carneiros",
            ],
            [
                "id_cidade" => 1670,
                "id_estado" => 27,
                "nome" => "Chã Preta",
            ],
            [
                "id_cidade" => 1671,
                "id_estado" => 27,
                "nome" => "Coité do Nóia",
            ],
            [
                "id_cidade" => 1672,
                "id_estado" => 27,
                "nome" => "Colônia Leopoldina",
            ],
            [
                "id_cidade" => 1673,
                "id_estado" => 27,
                "nome" => "Coqueiro Seco",
            ],
            [
                "id_cidade" => 1674,
                "id_estado" => 27,
                "nome" => "Coruripe",
            ],
            [
                "id_cidade" => 1675,
                "id_estado" => 27,
                "nome" => "Craíbas",
            ],
            [
                "id_cidade" => 1676,
                "id_estado" => 27,
                "nome" => "Delmiro Gouveia",
            ],
            [
                "id_cidade" => 1677,
                "id_estado" => 27,
                "nome" => "Dois Riachos",
            ],
            [
                "id_cidade" => 1678,
                "id_estado" => 27,
                "nome" => "Estrela de Alagoas",
            ],
            [
                "id_cidade" => 1679,
                "id_estado" => 27,
                "nome" => "Feira Grande",
            ],
            [
                "id_cidade" => 1680,
                "id_estado" => 27,
                "nome" => "Feliz Deserto",
            ],
            [
                "id_cidade" => 1681,
                "id_estado" => 27,
                "nome" => "Flexeiras",
            ],
            [
                "id_cidade" => 1682,
                "id_estado" => 27,
                "nome" => "Girau do Ponciano",
            ],
            [
                "id_cidade" => 1683,
                "id_estado" => 27,
                "nome" => "Ibateguara",
            ],
            [
                "id_cidade" => 1684,
                "id_estado" => 27,
                "nome" => "Igaci",
            ],
            [
                "id_cidade" => 1685,
                "id_estado" => 27,
                "nome" => "Igreja Nova",
            ],
            [
                "id_cidade" => 1686,
                "id_estado" => 27,
                "nome" => "Inhapi",
            ],
            [
                "id_cidade" => 1687,
                "id_estado" => 27,
                "nome" => "Jacaré dos Homens",
            ],
            [
                "id_cidade" => 1688,
                "id_estado" => 27,
                "nome" => "Jacuípe",
            ],
            [
                "id_cidade" => 1689,
                "id_estado" => 27,
                "nome" => "Japaratinga",
            ],
            [
                "id_cidade" => 1690,
                "id_estado" => 27,
                "nome" => "Jaramataia",
            ],
            [
                "id_cidade" => 1691,
                "id_estado" => 27,
                "nome" => "Jequiá da Praia",
            ],
            [
                "id_cidade" => 1692,
                "id_estado" => 27,
                "nome" => "Joaquim Gomes",
            ],
            [
                "id_cidade" => 1693,
                "id_estado" => 27,
                "nome" => "Jundiá",
            ],
            [
                "id_cidade" => 1694,
                "id_estado" => 27,
                "nome" => "Junqueiro",
            ],
            [
                "id_cidade" => 1695,
                "id_estado" => 27,
                "nome" => "Lagoa da Canoa",
            ],
            [
                "id_cidade" => 1696,
                "id_estado" => 27,
                "nome" => "Limoeiro de Anadia",
            ],
            [
                "id_cidade" => 1697,
                "id_estado" => 27,
                "nome" => "Maceió",
            ],
            [
                "id_cidade" => 1698,
                "id_estado" => 27,
                "nome" => "Major Isidoro",
            ],
            [
                "id_cidade" => 1699,
                "id_estado" => 27,
                "nome" => "Mar Vermelho",
            ],
            [
                "id_cidade" => 1700,
                "id_estado" => 27,
                "nome" => "Maragogi",
            ],
            [
                "id_cidade" => 1701,
                "id_estado" => 27,
                "nome" => "Maravilha",
            ],
            [
                "id_cidade" => 1702,
                "id_estado" => 27,
                "nome" => "Marechal Deodoro",
            ],
            [
                "id_cidade" => 1703,
                "id_estado" => 27,
                "nome" => "Maribondo",
            ],
            [
                "id_cidade" => 1704,
                "id_estado" => 27,
                "nome" => "Mata Grande",
            ],
            [
                "id_cidade" => 1705,
                "id_estado" => 27,
                "nome" => "Matriz de Camaragibe",
            ],
            [
                "id_cidade" => 1706,
                "id_estado" => 27,
                "nome" => "Messias",
            ],
            [
                "id_cidade" => 1707,
                "id_estado" => 27,
                "nome" => "Minador do Negrão",
            ],
            [
                "id_cidade" => 1708,
                "id_estado" => 27,
                "nome" => "Monteirópolis",
            ],
            [
                "id_cidade" => 1709,
                "id_estado" => 27,
                "nome" => "Murici",
            ],
            [
                "id_cidade" => 1710,
                "id_estado" => 27,
                "nome" => "Novo Lino",
            ],
            [
                "id_cidade" => 1711,
                "id_estado" => 27,
                "nome" => "Olho d'Água das Flores",
            ],
            [
                "id_cidade" => 1712,
                "id_estado" => 27,
                "nome" => "Olho d'Água do Casado",
            ],
            [
                "id_cidade" => 1713,
                "id_estado" => 27,
                "nome" => "Olho d'Água Grande",
            ],
            [
                "id_cidade" => 1714,
                "id_estado" => 27,
                "nome" => "Olivença",
            ],
            [
                "id_cidade" => 1715,
                "id_estado" => 27,
                "nome" => "Ouro Branco",
            ],
            [
                "id_cidade" => 1716,
                "id_estado" => 27,
                "nome" => "Palestina",
            ],
            [
                "id_cidade" => 1717,
                "id_estado" => 27,
                "nome" => "Palmeira dos Índios",
            ],
            [
                "id_cidade" => 1718,
                "id_estado" => 27,
                "nome" => "Pão de Açúcar",
            ],
            [
                "id_cidade" => 1719,
                "id_estado" => 27,
                "nome" => "Pariconha",
            ],
            [
                "id_cidade" => 1720,
                "id_estado" => 27,
                "nome" => "Paripueira",
            ],
            [
                "id_cidade" => 1721,
                "id_estado" => 27,
                "nome" => "Passo de Camaragibe",
            ],
            [
                "id_cidade" => 1722,
                "id_estado" => 27,
                "nome" => "Paulo Jacinto",
            ],
            [
                "id_cidade" => 1723,
                "id_estado" => 27,
                "nome" => "Penedo",
            ],
            [
                "id_cidade" => 1724,
                "id_estado" => 27,
                "nome" => "Piaçabuçu",
            ],
            [
                "id_cidade" => 1725,
                "id_estado" => 27,
                "nome" => "Pilar",
            ],
            [
                "id_cidade" => 1726,
                "id_estado" => 27,
                "nome" => "Pindoba",
            ],
            [
                "id_cidade" => 1727,
                "id_estado" => 27,
                "nome" => "Piranhas",
            ],
            [
                "id_cidade" => 1728,
                "id_estado" => 27,
                "nome" => "Poço das Trincheiras",
            ],
            [
                "id_cidade" => 1729,
                "id_estado" => 27,
                "nome" => "Porto Calvo",
            ],
            [
                "id_cidade" => 1730,
                "id_estado" => 27,
                "nome" => "Porto de Pedras",
            ],
            [
                "id_cidade" => 1731,
                "id_estado" => 27,
                "nome" => "Porto Real do Colégio",
            ],
            [
                "id_cidade" => 1732,
                "id_estado" => 27,
                "nome" => "Quebrangulo",
            ],
            [
                "id_cidade" => 1733,
                "id_estado" => 27,
                "nome" => "Rio Largo",
            ],
            [
                "id_cidade" => 1734,
                "id_estado" => 27,
                "nome" => "Roteiro",
            ],
            [
                "id_cidade" => 1735,
                "id_estado" => 27,
                "nome" => "Santa Luzia do Norte",
            ],
            [
                "id_cidade" => 1736,
                "id_estado" => 27,
                "nome" => "Santana do Ipanema",
            ],
            [
                "id_cidade" => 1737,
                "id_estado" => 27,
                "nome" => "Santana do Mundaú",
            ],
            [
                "id_cidade" => 1738,
                "id_estado" => 27,
                "nome" => "São Brás",
            ],
            [
                "id_cidade" => 1739,
                "id_estado" => 27,
                "nome" => "São José da Laje",
            ],
            [
                "id_cidade" => 1740,
                "id_estado" => 27,
                "nome" => "São José da Tapera",
            ],
            [
                "id_cidade" => 1741,
                "id_estado" => 27,
                "nome" => "São Luís do Quitunde",
            ],
            [
                "id_cidade" => 1742,
                "id_estado" => 27,
                "nome" => "São Miguel dos Campos",
            ],
            [
                "id_cidade" => 1743,
                "id_estado" => 27,
                "nome" => "São Miguel dos Milagres",
            ],
            [
                "id_cidade" => 1744,
                "id_estado" => 27,
                "nome" => "São Sebastião",
            ],
            [
                "id_cidade" => 1745,
                "id_estado" => 27,
                "nome" => "Satuba",
            ],
            [
                "id_cidade" => 1746,
                "id_estado" => 27,
                "nome" => "Senador Rui Palmeira",
            ],
            [
                "id_cidade" => 1747,
                "id_estado" => 27,
                "nome" => "Tanque d'Arca",
            ],
            [
                "id_cidade" => 1748,
                "id_estado" => 27,
                "nome" => "Taquarana",
            ],
            [
                "id_cidade" => 1749,
                "id_estado" => 27,
                "nome" => "Teotônio Vilela",
            ],
            [
                "id_cidade" => 1750,
                "id_estado" => 27,
                "nome" => "Traipu",
            ],
            [
                "id_cidade" => 1751,
                "id_estado" => 27,
                "nome" => "União dos Palmares",
            ],
            [
                "id_cidade" => 1752,
                "id_estado" => 27,
                "nome" => "Viçosa",
            ],
            [
                "id_cidade" => 1753,
                "id_estado" => 28,
                "nome" => "Amparo do São Francisco",
            ],
            [
                "id_cidade" => 1754,
                "id_estado" => 28,
                "nome" => "Aquidabã",
            ],
            [
                "id_cidade" => 1755,
                "id_estado" => 28,
                "nome" => "Aracaju",
            ],
            [
                "id_cidade" => 1756,
                "id_estado" => 28,
                "nome" => "Arauá",
            ],
            [
                "id_cidade" => 1757,
                "id_estado" => 28,
                "nome" => "Areia Branca",
            ],
            [
                "id_cidade" => 1758,
                "id_estado" => 28,
                "nome" => "Barra dos Coqueiros",
            ],
            [
                "id_cidade" => 1759,
                "id_estado" => 28,
                "nome" => "Boquim",
            ],
            [
                "id_cidade" => 1760,
                "id_estado" => 28,
                "nome" => "Brejo Grande",
            ],
            [
                "id_cidade" => 1761,
                "id_estado" => 28,
                "nome" => "Campo do Brito",
            ],
            [
                "id_cidade" => 1762,
                "id_estado" => 28,
                "nome" => "Canhoba",
            ],
            [
                "id_cidade" => 1763,
                "id_estado" => 28,
                "nome" => "Canindé de São Francisco",
            ],
            [
                "id_cidade" => 1764,
                "id_estado" => 28,
                "nome" => "Capela",
            ],
            [
                "id_cidade" => 1765,
                "id_estado" => 28,
                "nome" => "Carira",
            ],
            [
                "id_cidade" => 1766,
                "id_estado" => 28,
                "nome" => "Carmópolis",
            ],
            [
                "id_cidade" => 1767,
                "id_estado" => 28,
                "nome" => "Cedro de São João",
            ],
            [
                "id_cidade" => 1768,
                "id_estado" => 28,
                "nome" => "Cristinápolis",
            ],
            [
                "id_cidade" => 1769,
                "id_estado" => 28,
                "nome" => "Cumbe",
            ],
            [
                "id_cidade" => 1770,
                "id_estado" => 28,
                "nome" => "Divina Pastora",
            ],
            [
                "id_cidade" => 1771,
                "id_estado" => 28,
                "nome" => "Estância",
            ],
            [
                "id_cidade" => 1772,
                "id_estado" => 28,
                "nome" => "Feira Nova",
            ],
            [
                "id_cidade" => 1773,
                "id_estado" => 28,
                "nome" => "Frei Paulo",
            ],
            [
                "id_cidade" => 1774,
                "id_estado" => 28,
                "nome" => "Gararu",
            ],
            [
                "id_cidade" => 1775,
                "id_estado" => 28,
                "nome" => "General Maynard",
            ],
            [
                "id_cidade" => 1776,
                "id_estado" => 28,
                "nome" => "Gracho Cardoso",
            ],
            [
                "id_cidade" => 1777,
                "id_estado" => 28,
                "nome" => "Ilha das Flores",
            ],
            [
                "id_cidade" => 1778,
                "id_estado" => 28,
                "nome" => "Indiaroba",
            ],
            [
                "id_cidade" => 1779,
                "id_estado" => 28,
                "nome" => "Itabaiana",
            ],
            [
                "id_cidade" => 1780,
                "id_estado" => 28,
                "nome" => "Itabaianinha",
            ],
            [
                "id_cidade" => 1781,
                "id_estado" => 28,
                "nome" => "Itabi",
            ],
            [
                "id_cidade" => 1782,
                "id_estado" => 28,
                "nome" => "Itaporanga d'Ajuda",
            ],
            [
                "id_cidade" => 1783,
                "id_estado" => 28,
                "nome" => "Japaratuba",
            ],
            [
                "id_cidade" => 1784,
                "id_estado" => 28,
                "nome" => "Japoatã",
            ],
            [
                "id_cidade" => 1785,
                "id_estado" => 28,
                "nome" => "Lagarto",
            ],
            [
                "id_cidade" => 1786,
                "id_estado" => 28,
                "nome" => "Laranjeiras",
            ],
            [
                "id_cidade" => 1787,
                "id_estado" => 28,
                "nome" => "Macambira",
            ],
            [
                "id_cidade" => 1788,
                "id_estado" => 28,
                "nome" => "Malhada dos Bois",
            ],
            [
                "id_cidade" => 1789,
                "id_estado" => 28,
                "nome" => "Malhador",
            ],
            [
                "id_cidade" => 1790,
                "id_estado" => 28,
                "nome" => "Maruim",
            ],
            [
                "id_cidade" => 1791,
                "id_estado" => 28,
                "nome" => "Moita Bonita",
            ],
            [
                "id_cidade" => 1792,
                "id_estado" => 28,
                "nome" => "Monte Alegre de Sergipe",
            ],
            [
                "id_cidade" => 1793,
                "id_estado" => 28,
                "nome" => "Muribeca",
            ],
            [
                "id_cidade" => 1794,
                "id_estado" => 28,
                "nome" => "Neópolis",
            ],
            [
                "id_cidade" => 1795,
                "id_estado" => 28,
                "nome" => "Nossa Senhora Aparecida",
            ],
            [
                "id_cidade" => 1796,
                "id_estado" => 28,
                "nome" => "Nossa Senhora da Glória",
            ],
            [
                "id_cidade" => 1797,
                "id_estado" => 28,
                "nome" => "Nossa Senhora das Dores",
            ],
            [
                "id_cidade" => 1798,
                "id_estado" => 28,
                "nome" => "Nossa Senhora de Lourdes",
            ],
            [
                "id_cidade" => 1799,
                "id_estado" => 28,
                "nome" => "Nossa Senhora do Socorro",
            ],
            [
                "id_cidade" => 1800,
                "id_estado" => 28,
                "nome" => "Pacatuba",
            ],
            [
                "id_cidade" => 1801,
                "id_estado" => 28,
                "nome" => "Pedra Mole",
            ],
            [
                "id_cidade" => 1802,
                "id_estado" => 28,
                "nome" => "Pedrinhas",
            ],
            [
                "id_cidade" => 1803,
                "id_estado" => 28,
                "nome" => "Pinhão",
            ],
            [
                "id_cidade" => 1804,
                "id_estado" => 28,
                "nome" => "Pirambu",
            ],
            [
                "id_cidade" => 1805,
                "id_estado" => 28,
                "nome" => "Poço Redondo",
            ],
            [
                "id_cidade" => 1806,
                "id_estado" => 28,
                "nome" => "Poço Verde",
            ],
            [
                "id_cidade" => 1807,
                "id_estado" => 28,
                "nome" => "Porto da Folha",
            ],
            [
                "id_cidade" => 1808,
                "id_estado" => 28,
                "nome" => "Propriá",
            ],
            [
                "id_cidade" => 1809,
                "id_estado" => 28,
                "nome" => "Riachão do Dantas",
            ],
            [
                "id_cidade" => 1810,
                "id_estado" => 28,
                "nome" => "Riachuelo",
            ],
            [
                "id_cidade" => 1811,
                "id_estado" => 28,
                "nome" => "Ribeirópolis",
            ],
            [
                "id_cidade" => 1812,
                "id_estado" => 28,
                "nome" => "Rosário do Catete",
            ],
            [
                "id_cidade" => 1813,
                "id_estado" => 28,
                "nome" => "Salgado",
            ],
            [
                "id_cidade" => 1814,
                "id_estado" => 28,
                "nome" => "Santa Luzia do Itanhy",
            ],
            [
                "id_cidade" => 1815,
                "id_estado" => 28,
                "nome" => "Santa Rosa de Lima",
            ],
            [
                "id_cidade" => 1816,
                "id_estado" => 28,
                "nome" => "Santana do São Francisco",
            ],
            [
                "id_cidade" => 1817,
                "id_estado" => 28,
                "nome" => "Santo Amaro das Brotas",
            ],
            [
                "id_cidade" => 1818,
                "id_estado" => 28,
                "nome" => "São Cristóvão",
            ],
            [
                "id_cidade" => 1819,
                "id_estado" => 28,
                "nome" => "São Domingos",
            ],
            [
                "id_cidade" => 1820,
                "id_estado" => 28,
                "nome" => "São Francisco",
            ],
            [
                "id_cidade" => 1821,
                "id_estado" => 28,
                "nome" => "São Miguel do Aleixo",
            ],
            [
                "id_cidade" => 1822,
                "id_estado" => 28,
                "nome" => "Simão Dias",
            ],
            [
                "id_cidade" => 1823,
                "id_estado" => 28,
                "nome" => "Siriri",
            ],
            [
                "id_cidade" => 1824,
                "id_estado" => 28,
                "nome" => "Telha",
            ],
            [
                "id_cidade" => 1825,
                "id_estado" => 28,
                "nome" => "Tobias Barreto",
            ],
            [
                "id_cidade" => 1826,
                "id_estado" => 28,
                "nome" => "Tomar do Geru",
            ],
            [
                "id_cidade" => 1827,
                "id_estado" => 28,
                "nome" => "Umbaúba",
            ],
            [
                "id_cidade" => 1828,
                "id_estado" => 29,
                "nome" => "Abaíra",
            ],
            [
                "id_cidade" => 1829,
                "id_estado" => 29,
                "nome" => "Abaré",
            ],
            [
                "id_cidade" => 1830,
                "id_estado" => 29,
                "nome" => "Acajutiba",
            ],
            [
                "id_cidade" => 1831,
                "id_estado" => 29,
                "nome" => "Adustina",
            ],
            [
                "id_cidade" => 1832,
                "id_estado" => 29,
                "nome" => "Água Fria",
            ],
            [
                "id_cidade" => 1833,
                "id_estado" => 29,
                "nome" => "Aiquara",
            ],
            [
                "id_cidade" => 1834,
                "id_estado" => 29,
                "nome" => "Alagoinhas",
            ],
            [
                "id_cidade" => 1835,
                "id_estado" => 29,
                "nome" => "Alcobaça",
            ],
            [
                "id_cidade" => 1836,
                "id_estado" => 29,
                "nome" => "Almadina",
            ],
            [
                "id_cidade" => 1837,
                "id_estado" => 29,
                "nome" => "Amargosa",
            ],
            [
                "id_cidade" => 1838,
                "id_estado" => 29,
                "nome" => "Amélia Rodrigues",
            ],
            [
                "id_cidade" => 1839,
                "id_estado" => 29,
                "nome" => "América Dourada",
            ],
            [
                "id_cidade" => 1840,
                "id_estado" => 29,
                "nome" => "Anagé",
            ],
            [
                "id_cidade" => 1841,
                "id_estado" => 29,
                "nome" => "Andaraí",
            ],
            [
                "id_cidade" => 1842,
                "id_estado" => 29,
                "nome" => "Andorinha",
            ],
            [
                "id_cidade" => 1843,
                "id_estado" => 29,
                "nome" => "Angical",
            ],
            [
                "id_cidade" => 1844,
                "id_estado" => 29,
                "nome" => "Anguera",
            ],
            [
                "id_cidade" => 1845,
                "id_estado" => 29,
                "nome" => "Antas",
            ],
            [
                "id_cidade" => 1846,
                "id_estado" => 29,
                "nome" => "Antônio Cardoso",
            ],
            [
                "id_cidade" => 1847,
                "id_estado" => 29,
                "nome" => "Antônio Gonçalves",
            ],
            [
                "id_cidade" => 1848,
                "id_estado" => 29,
                "nome" => "Aporá",
            ],
            [
                "id_cidade" => 1849,
                "id_estado" => 29,
                "nome" => "Apuarema",
            ],
            [
                "id_cidade" => 1850,
                "id_estado" => 29,
                "nome" => "Araçás",
            ],
            [
                "id_cidade" => 1851,
                "id_estado" => 29,
                "nome" => "Aracatu",
            ],
            [
                "id_cidade" => 1852,
                "id_estado" => 29,
                "nome" => "Araci",
            ],
            [
                "id_cidade" => 1853,
                "id_estado" => 29,
                "nome" => "Aramari",
            ],
            [
                "id_cidade" => 1854,
                "id_estado" => 29,
                "nome" => "Arataca",
            ],
            [
                "id_cidade" => 1855,
                "id_estado" => 29,
                "nome" => "Aratuípe",
            ],
            [
                "id_cidade" => 1856,
                "id_estado" => 29,
                "nome" => "Aurelino Leal",
            ],
            [
                "id_cidade" => 1857,
                "id_estado" => 29,
                "nome" => "Baianópolis",
            ],
            [
                "id_cidade" => 1858,
                "id_estado" => 29,
                "nome" => "Baixa Grande",
            ],
            [
                "id_cidade" => 1859,
                "id_estado" => 29,
                "nome" => "Banzaê",
            ],
            [
                "id_cidade" => 1860,
                "id_estado" => 29,
                "nome" => "Barra",
            ],
            [
                "id_cidade" => 1861,
                "id_estado" => 29,
                "nome" => "Barra da Estiva",
            ],
            [
                "id_cidade" => 1862,
                "id_estado" => 29,
                "nome" => "Barra do Choça",
            ],
            [
                "id_cidade" => 1863,
                "id_estado" => 29,
                "nome" => "Barra do Mendes",
            ],
            [
                "id_cidade" => 1864,
                "id_estado" => 29,
                "nome" => "Barra do Rocha",
            ],
            [
                "id_cidade" => 1865,
                "id_estado" => 29,
                "nome" => "Barreiras",
            ],
            [
                "id_cidade" => 1866,
                "id_estado" => 29,
                "nome" => "Barro Alto",
            ],
            [
                "id_cidade" => 1867,
                "id_estado" => 29,
                "nome" => "Barro Preto",
            ],
            [
                "id_cidade" => 1868,
                "id_estado" => 29,
                "nome" => "Barrocas",
            ],
            [
                "id_cidade" => 1869,
                "id_estado" => 29,
                "nome" => "Belmonte",
            ],
            [
                "id_cidade" => 1870,
                "id_estado" => 29,
                "nome" => "Belo Campo",
            ],
            [
                "id_cidade" => 1871,
                "id_estado" => 29,
                "nome" => "Biritinga",
            ],
            [
                "id_cidade" => 1872,
                "id_estado" => 29,
                "nome" => "Boa Nova",
            ],
            [
                "id_cidade" => 1873,
                "id_estado" => 29,
                "nome" => "Boa Vista do Tupim",
            ],
            [
                "id_cidade" => 1874,
                "id_estado" => 29,
                "nome" => "Bom Jesus da Lapa",
            ],
            [
                "id_cidade" => 1875,
                "id_estado" => 29,
                "nome" => "Bom Jesus da Serra",
            ],
            [
                "id_cidade" => 1876,
                "id_estado" => 29,
                "nome" => "Boninal",
            ],
            [
                "id_cidade" => 1877,
                "id_estado" => 29,
                "nome" => "Bonito",
            ],
            [
                "id_cidade" => 1878,
                "id_estado" => 29,
                "nome" => "Boquira",
            ],
            [
                "id_cidade" => 1879,
                "id_estado" => 29,
                "nome" => "Botuporã",
            ],
            [
                "id_cidade" => 1880,
                "id_estado" => 29,
                "nome" => "Brejões",
            ],
            [
                "id_cidade" => 1881,
                "id_estado" => 29,
                "nome" => "Brejolândia",
            ],
            [
                "id_cidade" => 1882,
                "id_estado" => 29,
                "nome" => "Brotas de Macaúbas",
            ],
            [
                "id_cidade" => 1883,
                "id_estado" => 29,
                "nome" => "Brumado",
            ],
            [
                "id_cidade" => 1884,
                "id_estado" => 29,
                "nome" => "Buerarema",
            ],
            [
                "id_cidade" => 1885,
                "id_estado" => 29,
                "nome" => "Buritirama",
            ],
            [
                "id_cidade" => 1886,
                "id_estado" => 29,
                "nome" => "Caatiba",
            ],
            [
                "id_cidade" => 1887,
                "id_estado" => 29,
                "nome" => "Cabaceiras do Paraguaçu",
            ],
            [
                "id_cidade" => 1888,
                "id_estado" => 29,
                "nome" => "Cachoeira",
            ],
            [
                "id_cidade" => 1889,
                "id_estado" => 29,
                "nome" => "Caculé",
            ],
            [
                "id_cidade" => 1890,
                "id_estado" => 29,
                "nome" => "Caém",
            ],
            [
                "id_cidade" => 1891,
                "id_estado" => 29,
                "nome" => "Caetanos",
            ],
            [
                "id_cidade" => 1892,
                "id_estado" => 29,
                "nome" => "Caetité",
            ],
            [
                "id_cidade" => 1893,
                "id_estado" => 29,
                "nome" => "Cafarnaum",
            ],
            [
                "id_cidade" => 1894,
                "id_estado" => 29,
                "nome" => "Cairu",
            ],
            [
                "id_cidade" => 1895,
                "id_estado" => 29,
                "nome" => "Caldeirão Grande",
            ],
            [
                "id_cidade" => 1896,
                "id_estado" => 29,
                "nome" => "Camacan",
            ],
            [
                "id_cidade" => 1897,
                "id_estado" => 29,
                "nome" => "Camaçari",
            ],
            [
                "id_cidade" => 1898,
                "id_estado" => 29,
                "nome" => "Camamu",
            ],
            [
                "id_cidade" => 1899,
                "id_estado" => 29,
                "nome" => "Campo Alegre de Lourdes",
            ],
            [
                "id_cidade" => 1900,
                "id_estado" => 29,
                "nome" => "Campo Formoso",
            ],
            [
                "id_cidade" => 1901,
                "id_estado" => 29,
                "nome" => "Canápolis",
            ],
            [
                "id_cidade" => 1902,
                "id_estado" => 29,
                "nome" => "Canarana",
            ],
            [
                "id_cidade" => 1903,
                "id_estado" => 29,
                "nome" => "Canavieiras",
            ],
            [
                "id_cidade" => 1904,
                "id_estado" => 29,
                "nome" => "Candeal",
            ],
            [
                "id_cidade" => 1905,
                "id_estado" => 29,
                "nome" => "Candeias",
            ],
            [
                "id_cidade" => 1906,
                "id_estado" => 29,
                "nome" => "Candiba",
            ],
            [
                "id_cidade" => 1907,
                "id_estado" => 29,
                "nome" => "Cândido Sales",
            ],
            [
                "id_cidade" => 1908,
                "id_estado" => 29,
                "nome" => "Cansanção",
            ],
            [
                "id_cidade" => 1909,
                "id_estado" => 29,
                "nome" => "Canudos",
            ],
            [
                "id_cidade" => 1910,
                "id_estado" => 29,
                "nome" => "Capela do Alto Alegre",
            ],
            [
                "id_cidade" => 1911,
                "id_estado" => 29,
                "nome" => "Capim Grosso",
            ],
            [
                "id_cidade" => 1912,
                "id_estado" => 29,
                "nome" => "Caraíbas",
            ],
            [
                "id_cidade" => 1913,
                "id_estado" => 29,
                "nome" => "Caravelas",
            ],
            [
                "id_cidade" => 1914,
                "id_estado" => 29,
                "nome" => "Cardeal da Silva",
            ],
            [
                "id_cidade" => 1915,
                "id_estado" => 29,
                "nome" => "Carinhanha",
            ],
            [
                "id_cidade" => 1916,
                "id_estado" => 29,
                "nome" => "Casa Nova",
            ],
            [
                "id_cidade" => 1917,
                "id_estado" => 29,
                "nome" => "Castro Alves",
            ],
            [
                "id_cidade" => 1918,
                "id_estado" => 29,
                "nome" => "Catolândia",
            ],
            [
                "id_cidade" => 1919,
                "id_estado" => 29,
                "nome" => "Catu",
            ],
            [
                "id_cidade" => 1920,
                "id_estado" => 29,
                "nome" => "Caturama",
            ],
            [
                "id_cidade" => 1921,
                "id_estado" => 29,
                "nome" => "Central",
            ],
            [
                "id_cidade" => 1922,
                "id_estado" => 29,
                "nome" => "Chorrochó",
            ],
            [
                "id_cidade" => 1923,
                "id_estado" => 29,
                "nome" => "Cícero Dantas",
            ],
            [
                "id_cidade" => 1924,
                "id_estado" => 29,
                "nome" => "Cipó",
            ],
            [
                "id_cidade" => 1925,
                "id_estado" => 29,
                "nome" => "Coaraci",
            ],
            [
                "id_cidade" => 1926,
                "id_estado" => 29,
                "nome" => "Cocos",
            ],
            [
                "id_cidade" => 1927,
                "id_estado" => 29,
                "nome" => "Conceição da Feira",
            ],
            [
                "id_cidade" => 1928,
                "id_estado" => 29,
                "nome" => "Conceição do Almeida",
            ],
            [
                "id_cidade" => 1929,
                "id_estado" => 29,
                "nome" => "Conceição do Coité",
            ],
            [
                "id_cidade" => 1930,
                "id_estado" => 29,
                "nome" => "Conceição do Jacuípe",
            ],
            [
                "id_cidade" => 1931,
                "id_estado" => 29,
                "nome" => "Conde",
            ],
            [
                "id_cidade" => 1932,
                "id_estado" => 29,
                "nome" => "Condeúba",
            ],
            [
                "id_cidade" => 1933,
                "id_estado" => 29,
                "nome" => "Contendas do Sincorá",
            ],
            [
                "id_cidade" => 1934,
                "id_estado" => 29,
                "nome" => "Coração de Maria",
            ],
            [
                "id_cidade" => 1935,
                "id_estado" => 29,
                "nome" => "Cordeiros",
            ],
            [
                "id_cidade" => 1936,
                "id_estado" => 29,
                "nome" => "Coribe",
            ],
            [
                "id_cidade" => 1937,
                "id_estado" => 29,
                "nome" => "Coronel João Sá",
            ],
            [
                "id_cidade" => 1938,
                "id_estado" => 29,
                "nome" => "Correntina",
            ],
            [
                "id_cidade" => 1939,
                "id_estado" => 29,
                "nome" => "Cotegipe",
            ],
            [
                "id_cidade" => 1940,
                "id_estado" => 29,
                "nome" => "Cravolândia",
            ],
            [
                "id_cidade" => 1941,
                "id_estado" => 29,
                "nome" => "Crisópolis",
            ],
            [
                "id_cidade" => 1942,
                "id_estado" => 29,
                "nome" => "Cristópolis",
            ],
            [
                "id_cidade" => 1943,
                "id_estado" => 29,
                "nome" => "Cruz das Almas",
            ],
            [
                "id_cidade" => 1944,
                "id_estado" => 29,
                "nome" => "Curaçá",
            ],
            [
                "id_cidade" => 1945,
                "id_estado" => 29,
                "nome" => "Dário Meira",
            ],
            [
                "id_cidade" => 1946,
                "id_estado" => 29,
                "nome" => "Dias d'Ávila",
            ],
            [
                "id_cidade" => 1947,
                "id_estado" => 29,
                "nome" => "Dom Basílio",
            ],
            [
                "id_cidade" => 1948,
                "id_estado" => 29,
                "nome" => "Dom Macedo Costa",
            ],
            [
                "id_cidade" => 1949,
                "id_estado" => 29,
                "nome" => "Elísio Medrado",
            ],
            [
                "id_cidade" => 1950,
                "id_estado" => 29,
                "nome" => "Encruzilhada",
            ],
            [
                "id_cidade" => 1951,
                "id_estado" => 29,
                "nome" => "Entre Rios",
            ],
            [
                "id_cidade" => 1952,
                "id_estado" => 29,
                "nome" => "Érico Cardoso",
            ],
            [
                "id_cidade" => 1953,
                "id_estado" => 29,
                "nome" => "Esplanada",
            ],
            [
                "id_cidade" => 1954,
                "id_estado" => 29,
                "nome" => "Euclides da Cunha",
            ],
            [
                "id_cidade" => 1955,
                "id_estado" => 29,
                "nome" => "Eunápolis",
            ],
            [
                "id_cidade" => 1956,
                "id_estado" => 29,
                "nome" => "Fátima",
            ],
            [
                "id_cidade" => 1957,
                "id_estado" => 29,
                "nome" => "Feira da Mata",
            ],
            [
                "id_cidade" => 1958,
                "id_estado" => 29,
                "nome" => "Feira de Santana",
            ],
            [
                "id_cidade" => 1959,
                "id_estado" => 29,
                "nome" => "Filadélfia",
            ],
            [
                "id_cidade" => 1960,
                "id_estado" => 29,
                "nome" => "Firmino Alves",
            ],
            [
                "id_cidade" => 1961,
                "id_estado" => 29,
                "nome" => "Floresta Azul",
            ],
            [
                "id_cidade" => 1962,
                "id_estado" => 29,
                "nome" => "Formosa do Rio Preto",
            ],
            [
                "id_cidade" => 1963,
                "id_estado" => 29,
                "nome" => "Gandu",
            ],
            [
                "id_cidade" => 1964,
                "id_estado" => 29,
                "nome" => "Gavião",
            ],
            [
                "id_cidade" => 1965,
                "id_estado" => 29,
                "nome" => "Gentio do Ouro",
            ],
            [
                "id_cidade" => 1966,
                "id_estado" => 29,
                "nome" => "Glória",
            ],
            [
                "id_cidade" => 1967,
                "id_estado" => 29,
                "nome" => "Gongogi",
            ],
            [
                "id_cidade" => 1968,
                "id_estado" => 29,
                "nome" => "Governador Mangabeira",
            ],
            [
                "id_cidade" => 1969,
                "id_estado" => 29,
                "nome" => "Guajeru",
            ],
            [
                "id_cidade" => 1970,
                "id_estado" => 29,
                "nome" => "Guanambi",
            ],
            [
                "id_cidade" => 1971,
                "id_estado" => 29,
                "nome" => "Guaratinga",
            ],
            [
                "id_cidade" => 1972,
                "id_estado" => 29,
                "nome" => "Heliópolis",
            ],
            [
                "id_cidade" => 1973,
                "id_estado" => 29,
                "nome" => "Iaçu",
            ],
            [
                "id_cidade" => 1974,
                "id_estado" => 29,
                "nome" => "Ibiassucê",
            ],
            [
                "id_cidade" => 1975,
                "id_estado" => 29,
                "nome" => "Ibicaraí",
            ],
            [
                "id_cidade" => 1976,
                "id_estado" => 29,
                "nome" => "Ibicoara",
            ],
            [
                "id_cidade" => 1977,
                "id_estado" => 29,
                "nome" => "Ibicuí",
            ],
            [
                "id_cidade" => 1978,
                "id_estado" => 29,
                "nome" => "Ibipeba",
            ],
            [
                "id_cidade" => 1979,
                "id_estado" => 29,
                "nome" => "Ibipitanga",
            ],
            [
                "id_cidade" => 1980,
                "id_estado" => 29,
                "nome" => "Ibiquera",
            ],
            [
                "id_cidade" => 1981,
                "id_estado" => 29,
                "nome" => "Ibirapitanga",
            ],
            [
                "id_cidade" => 1982,
                "id_estado" => 29,
                "nome" => "Ibirapuã",
            ],
            [
                "id_cidade" => 1983,
                "id_estado" => 29,
                "nome" => "Ibirataia",
            ],
            [
                "id_cidade" => 1984,
                "id_estado" => 29,
                "nome" => "Ibitiara",
            ],
            [
                "id_cidade" => 1985,
                "id_estado" => 29,
                "nome" => "Ibititá",
            ],
            [
                "id_cidade" => 1986,
                "id_estado" => 29,
                "nome" => "Ibotirama",
            ],
            [
                "id_cidade" => 1987,
                "id_estado" => 29,
                "nome" => "Ichu",
            ],
            [
                "id_cidade" => 1988,
                "id_estado" => 29,
                "nome" => "Igaporã",
            ],
            [
                "id_cidade" => 1989,
                "id_estado" => 29,
                "nome" => "Igrapiúna",
            ],
            [
                "id_cidade" => 1990,
                "id_estado" => 29,
                "nome" => "Iguaí",
            ],
            [
                "id_cidade" => 1991,
                "id_estado" => 29,
                "nome" => "Ilhéus",
            ],
            [
                "id_cidade" => 1992,
                "id_estado" => 29,
                "nome" => "Inhambupe",
            ],
            [
                "id_cidade" => 1993,
                "id_estado" => 29,
                "nome" => "Ipecaetá",
            ],
            [
                "id_cidade" => 1994,
                "id_estado" => 29,
                "nome" => "Ipiaú",
            ],
            [
                "id_cidade" => 1995,
                "id_estado" => 29,
                "nome" => "Ipirá",
            ],
            [
                "id_cidade" => 1996,
                "id_estado" => 29,
                "nome" => "Ipupiara",
            ],
            [
                "id_cidade" => 1997,
                "id_estado" => 29,
                "nome" => "Irajuba",
            ],
            [
                "id_cidade" => 1998,
                "id_estado" => 29,
                "nome" => "Iramaia",
            ],
            [
                "id_cidade" => 1999,
                "id_estado" => 29,
                "nome" => "Iraquara",
            ],
            [
                "id_cidade" => 2000,
                "id_estado" => 29,
                "nome" => "Irará",
            ],
            [
                "id_cidade" => 2001,
                "id_estado" => 29,
                "nome" => "Irecê",
            ],
            [
                "id_cidade" => 2002,
                "id_estado" => 29,
                "nome" => "Itabela",
            ],
            [
                "id_cidade" => 2003,
                "id_estado" => 29,
                "nome" => "Itaberaba",
            ],
            [
                "id_cidade" => 2004,
                "id_estado" => 29,
                "nome" => "Itabuna",
            ],
            [
                "id_cidade" => 2005,
                "id_estado" => 29,
                "nome" => "Itacaré",
            ],
            [
                "id_cidade" => 2006,
                "id_estado" => 29,
                "nome" => "Itaeté",
            ],
            [
                "id_cidade" => 2007,
                "id_estado" => 29,
                "nome" => "Itagi",
            ],
            [
                "id_cidade" => 2008,
                "id_estado" => 29,
                "nome" => "Itagibá",
            ],
            [
                "id_cidade" => 2009,
                "id_estado" => 29,
                "nome" => "Itagimirim",
            ],
            [
                "id_cidade" => 2010,
                "id_estado" => 29,
                "nome" => "Itaguaçu da Bahia",
            ],
            [
                "id_cidade" => 2011,
                "id_estado" => 29,
                "nome" => "Itaju do Colônia",
            ],
            [
                "id_cidade" => 2012,
                "id_estado" => 29,
                "nome" => "Itajuípe",
            ],
            [
                "id_cidade" => 2013,
                "id_estado" => 29,
                "nome" => "Itamaraju",
            ],
            [
                "id_cidade" => 2014,
                "id_estado" => 29,
                "nome" => "Itamari",
            ],
            [
                "id_cidade" => 2015,
                "id_estado" => 29,
                "nome" => "Itambé",
            ],
            [
                "id_cidade" => 2016,
                "id_estado" => 29,
                "nome" => "Itanagra",
            ],
            [
                "id_cidade" => 2017,
                "id_estado" => 29,
                "nome" => "Itanhém",
            ],
            [
                "id_cidade" => 2018,
                "id_estado" => 29,
                "nome" => "Itaparica",
            ],
            [
                "id_cidade" => 2019,
                "id_estado" => 29,
                "nome" => "Itapé",
            ],
            [
                "id_cidade" => 2020,
                "id_estado" => 29,
                "nome" => "Itapebi",
            ],
            [
                "id_cidade" => 2021,
                "id_estado" => 29,
                "nome" => "Itapetinga",
            ],
            [
                "id_cidade" => 2022,
                "id_estado" => 29,
                "nome" => "Itapicuru",
            ],
            [
                "id_cidade" => 2023,
                "id_estado" => 29,
                "nome" => "Itapitanga",
            ],
            [
                "id_cidade" => 2024,
                "id_estado" => 29,
                "nome" => "Itaquara",
            ],
            [
                "id_cidade" => 2025,
                "id_estado" => 29,
                "nome" => "Itarantim",
            ],
            [
                "id_cidade" => 2026,
                "id_estado" => 29,
                "nome" => "Itatim",
            ],
            [
                "id_cidade" => 2027,
                "id_estado" => 29,
                "nome" => "Itiruçu",
            ],
            [
                "id_cidade" => 2028,
                "id_estado" => 29,
                "nome" => "Itiúba",
            ],
            [
                "id_cidade" => 2029,
                "id_estado" => 29,
                "nome" => "Itororó",
            ],
            [
                "id_cidade" => 2030,
                "id_estado" => 29,
                "nome" => "Ituaçu",
            ],
            [
                "id_cidade" => 2031,
                "id_estado" => 29,
                "nome" => "Ituberá",
            ],
            [
                "id_cidade" => 2032,
                "id_estado" => 29,
                "nome" => "Iuiu",
            ],
            [
                "id_cidade" => 2033,
                "id_estado" => 29,
                "nome" => "Jaborandi",
            ],
            [
                "id_cidade" => 2034,
                "id_estado" => 29,
                "nome" => "Jacaraci",
            ],
            [
                "id_cidade" => 2035,
                "id_estado" => 29,
                "nome" => "Jacobina",
            ],
            [
                "id_cidade" => 2036,
                "id_estado" => 29,
                "nome" => "Jaguaquara",
            ],
            [
                "id_cidade" => 2037,
                "id_estado" => 29,
                "nome" => "Jaguarari",
            ],
            [
                "id_cidade" => 2038,
                "id_estado" => 29,
                "nome" => "Jaguaripe",
            ],
            [
                "id_cidade" => 2039,
                "id_estado" => 29,
                "nome" => "Jandaíra",
            ],
            [
                "id_cidade" => 2040,
                "id_estado" => 29,
                "nome" => "Jequié",
            ],
            [
                "id_cidade" => 2041,
                "id_estado" => 29,
                "nome" => "Jeremoabo",
            ],
            [
                "id_cidade" => 2042,
                "id_estado" => 29,
                "nome" => "Jiquiriçá",
            ],
            [
                "id_cidade" => 2043,
                "id_estado" => 29,
                "nome" => "Jitaúna",
            ],
            [
                "id_cidade" => 2044,
                "id_estado" => 29,
                "nome" => "João Dourado",
            ],
            [
                "id_cidade" => 2045,
                "id_estado" => 29,
                "nome" => "Juazeiro",
            ],
            [
                "id_cidade" => 2046,
                "id_estado" => 29,
                "nome" => "Jucuruçu",
            ],
            [
                "id_cidade" => 2047,
                "id_estado" => 29,
                "nome" => "Jussara",
            ],
            [
                "id_cidade" => 2048,
                "id_estado" => 29,
                "nome" => "Jussari",
            ],
            [
                "id_cidade" => 2049,
                "id_estado" => 29,
                "nome" => "Jussiape",
            ],
            [
                "id_cidade" => 2050,
                "id_estado" => 29,
                "nome" => "Lafaiete Coutinho",
            ],
            [
                "id_cidade" => 2051,
                "id_estado" => 29,
                "nome" => "Lagoa Real",
            ],
            [
                "id_cidade" => 2052,
                "id_estado" => 29,
                "nome" => "Laje",
            ],
            [
                "id_cidade" => 2053,
                "id_estado" => 29,
                "nome" => "Lajedão",
            ],
            [
                "id_cidade" => 2054,
                "id_estado" => 29,
                "nome" => "Lajedinho",
            ],
            [
                "id_cidade" => 2055,
                "id_estado" => 29,
                "nome" => "Lajedo do Tabocal",
            ],
            [
                "id_cidade" => 2056,
                "id_estado" => 29,
                "nome" => "Lamarão",
            ],
            [
                "id_cidade" => 2057,
                "id_estado" => 29,
                "nome" => "Lapão",
            ],
            [
                "id_cidade" => 2058,
                "id_estado" => 29,
                "nome" => "Lauro de Freitas",
            ],
            [
                "id_cidade" => 2059,
                "id_estado" => 29,
                "nome" => "Lençóis",
            ],
            [
                "id_cidade" => 2060,
                "id_estado" => 29,
                "nome" => "Licínio de Almeida",
            ],
            [
                "id_cidade" => 2061,
                "id_estado" => 29,
                "nome" => "Livramento de Nossa Senhora",
            ],
            [
                "id_cidade" => 2062,
                "id_estado" => 29,
                "nome" => "Luís Eduardo Magalhães",
            ],
            [
                "id_cidade" => 2063,
                "id_estado" => 29,
                "nome" => "Macajuba",
            ],
            [
                "id_cidade" => 2064,
                "id_estado" => 29,
                "nome" => "Macarani",
            ],
            [
                "id_cidade" => 2065,
                "id_estado" => 29,
                "nome" => "Macaúbas",
            ],
            [
                "id_cidade" => 2066,
                "id_estado" => 29,
                "nome" => "Macururé",
            ],
            [
                "id_cidade" => 2067,
                "id_estado" => 29,
                "nome" => "Madre de Deus",
            ],
            [
                "id_cidade" => 2068,
                "id_estado" => 29,
                "nome" => "Maetinga",
            ],
            [
                "id_cidade" => 2069,
                "id_estado" => 29,
                "nome" => "Maiquinique",
            ],
            [
                "id_cidade" => 2070,
                "id_estado" => 29,
                "nome" => "Mairi",
            ],
            [
                "id_cidade" => 2071,
                "id_estado" => 29,
                "nome" => "Malhada",
            ],
            [
                "id_cidade" => 2072,
                "id_estado" => 29,
                "nome" => "Malhada de Pedras",
            ],
            [
                "id_cidade" => 2073,
                "id_estado" => 29,
                "nome" => "Manoel Vitorino",
            ],
            [
                "id_cidade" => 2074,
                "id_estado" => 29,
                "nome" => "Mansidão",
            ],
            [
                "id_cidade" => 2075,
                "id_estado" => 29,
                "nome" => "Maracás",
            ],
            [
                "id_cidade" => 2076,
                "id_estado" => 29,
                "nome" => "Maragogipe",
            ],
            [
                "id_cidade" => 2077,
                "id_estado" => 29,
                "nome" => "Maraú",
            ],
            [
                "id_cidade" => 2078,
                "id_estado" => 29,
                "nome" => "Marcionílio Souza",
            ],
            [
                "id_cidade" => 2079,
                "id_estado" => 29,
                "nome" => "Mascote",
            ],
            [
                "id_cidade" => 2080,
                "id_estado" => 29,
                "nome" => "Mata de São João",
            ],
            [
                "id_cidade" => 2081,
                "id_estado" => 29,
                "nome" => "Matina",
            ],
            [
                "id_cidade" => 2082,
                "id_estado" => 29,
                "nome" => "Medeiros Neto",
            ],
            [
                "id_cidade" => 2083,
                "id_estado" => 29,
                "nome" => "Miguel Calmon",
            ],
            [
                "id_cidade" => 2084,
                "id_estado" => 29,
                "nome" => "Milagres",
            ],
            [
                "id_cidade" => 2085,
                "id_estado" => 29,
                "nome" => "Mirangaba",
            ],
            [
                "id_cidade" => 2086,
                "id_estado" => 29,
                "nome" => "Mirante",
            ],
            [
                "id_cidade" => 2087,
                "id_estado" => 29,
                "nome" => "Monte Santo",
            ],
            [
                "id_cidade" => 2088,
                "id_estado" => 29,
                "nome" => "Morpará",
            ],
            [
                "id_cidade" => 2089,
                "id_estado" => 29,
                "nome" => "Morro do Chapéu",
            ],
            [
                "id_cidade" => 2090,
                "id_estado" => 29,
                "nome" => "Mortugaba",
            ],
            [
                "id_cidade" => 2091,
                "id_estado" => 29,
                "nome" => "Mucugê",
            ],
            [
                "id_cidade" => 2092,
                "id_estado" => 29,
                "nome" => "Mucuri",
            ],
            [
                "id_cidade" => 2093,
                "id_estado" => 29,
                "nome" => "Mulungu do Morro",
            ],
            [
                "id_cidade" => 2094,
                "id_estado" => 29,
                "nome" => "Mundo Novo",
            ],
            [
                "id_cidade" => 2095,
                "id_estado" => 29,
                "nome" => "Muniz Ferreira",
            ],
            [
                "id_cidade" => 2096,
                "id_estado" => 29,
                "nome" => "Muquém do São Francisco",
            ],
            [
                "id_cidade" => 2097,
                "id_estado" => 29,
                "nome" => "Muritiba",
            ],
            [
                "id_cidade" => 2098,
                "id_estado" => 29,
                "nome" => "Mutuípe",
            ],
            [
                "id_cidade" => 2099,
                "id_estado" => 29,
                "nome" => "Nazaré",
            ],
            [
                "id_cidade" => 2100,
                "id_estado" => 29,
                "nome" => "Nilo Peçanha",
            ],
            [
                "id_cidade" => 2101,
                "id_estado" => 29,
                "nome" => "Nordestina",
            ],
            [
                "id_cidade" => 2102,
                "id_estado" => 29,
                "nome" => "Nova Canaã",
            ],
            [
                "id_cidade" => 2103,
                "id_estado" => 29,
                "nome" => "Nova Fátima",
            ],
            [
                "id_cidade" => 2104,
                "id_estado" => 29,
                "nome" => "Nova Ibiá",
            ],
            [
                "id_cidade" => 2105,
                "id_estado" => 29,
                "nome" => "Nova Itarana",
            ],
            [
                "id_cidade" => 2106,
                "id_estado" => 29,
                "nome" => "Nova Redenção",
            ],
            [
                "id_cidade" => 2107,
                "id_estado" => 29,
                "nome" => "Nova Soure",
            ],
            [
                "id_cidade" => 2108,
                "id_estado" => 29,
                "nome" => "Nova Viçosa",
            ],
            [
                "id_cidade" => 2109,
                "id_estado" => 29,
                "nome" => "Novo Horizonte",
            ],
            [
                "id_cidade" => 2110,
                "id_estado" => 29,
                "nome" => "Novo Triunfo",
            ],
            [
                "id_cidade" => 2111,
                "id_estado" => 29,
                "nome" => "Olindina",
            ],
            [
                "id_cidade" => 2112,
                "id_estado" => 29,
                "nome" => "Oliveira dos Brejinhos",
            ],
            [
                "id_cidade" => 2113,
                "id_estado" => 29,
                "nome" => "Ouriçangas",
            ],
            [
                "id_cidade" => 2114,
                "id_estado" => 29,
                "nome" => "Ourolândia",
            ],
            [
                "id_cidade" => 2115,
                "id_estado" => 29,
                "nome" => "Palmas de Monte Alto",
            ],
            [
                "id_cidade" => 2116,
                "id_estado" => 29,
                "nome" => "Palmeiras",
            ],
            [
                "id_cidade" => 2117,
                "id_estado" => 29,
                "nome" => "Paramirim",
            ],
            [
                "id_cidade" => 2118,
                "id_estado" => 29,
                "nome" => "Paratinga",
            ],
            [
                "id_cidade" => 2119,
                "id_estado" => 29,
                "nome" => "Paripiranga",
            ],
            [
                "id_cidade" => 2120,
                "id_estado" => 29,
                "nome" => "Pau Brasil",
            ],
            [
                "id_cidade" => 2121,
                "id_estado" => 29,
                "nome" => "Paulo Afonso",
            ],
            [
                "id_cidade" => 2122,
                "id_estado" => 29,
                "nome" => "Pé de Serra",
            ],
            [
                "id_cidade" => 2123,
                "id_estado" => 29,
                "nome" => "Pedrão",
            ],
            [
                "id_cidade" => 2124,
                "id_estado" => 29,
                "nome" => "Pedro Alexandre",
            ],
            [
                "id_cidade" => 2125,
                "id_estado" => 29,
                "nome" => "Piatã",
            ],
            [
                "id_cidade" => 2126,
                "id_estado" => 29,
                "nome" => "Pilão Arcado",
            ],
            [
                "id_cidade" => 2127,
                "id_estado" => 29,
                "nome" => "Pindaí",
            ],
            [
                "id_cidade" => 2128,
                "id_estado" => 29,
                "nome" => "Pindobaçu",
            ],
            [
                "id_cidade" => 2129,
                "id_estado" => 29,
                "nome" => "Pintadas",
            ],
            [
                "id_cidade" => 2130,
                "id_estado" => 29,
                "nome" => "Piraí do Norte",
            ],
            [
                "id_cidade" => 2131,
                "id_estado" => 29,
                "nome" => "Piripá",
            ],
            [
                "id_cidade" => 2132,
                "id_estado" => 29,
                "nome" => "Piritiba",
            ],
            [
                "id_cidade" => 2133,
                "id_estado" => 29,
                "nome" => "Planaltino",
            ],
            [
                "id_cidade" => 2134,
                "id_estado" => 29,
                "nome" => "Planalto",
            ],
            [
                "id_cidade" => 2135,
                "id_estado" => 29,
                "nome" => "Poções",
            ],
            [
                "id_cidade" => 2136,
                "id_estado" => 29,
                "nome" => "Pojuca",
            ],
            [
                "id_cidade" => 2137,
                "id_estado" => 29,
                "nome" => "Ponto Novo",
            ],
            [
                "id_cidade" => 2138,
                "id_estado" => 29,
                "nome" => "Porto Seguro",
            ],
            [
                "id_cidade" => 2139,
                "id_estado" => 29,
                "nome" => "Potiraguá",
            ],
            [
                "id_cidade" => 2140,
                "id_estado" => 29,
                "nome" => "Prado",
            ],
            [
                "id_cidade" => 2141,
                "id_estado" => 29,
                "nome" => "Presidente Dutra",
            ],
            [
                "id_cidade" => 2142,
                "id_estado" => 29,
                "nome" => "Presidente Jânio Quadros",
            ],
            [
                "id_cidade" => 2143,
                "id_estado" => 29,
                "nome" => "Presidente Tancredo Neves",
            ],
            [
                "id_cidade" => 2144,
                "id_estado" => 29,
                "nome" => "Queimadas",
            ],
            [
                "id_cidade" => 2145,
                "id_estado" => 29,
                "nome" => "Quijingue",
            ],
            [
                "id_cidade" => 2146,
                "id_estado" => 29,
                "nome" => "Quixabeira",
            ],
            [
                "id_cidade" => 2147,
                "id_estado" => 29,
                "nome" => "Rafael Jambeiro",
            ],
            [
                "id_cidade" => 2148,
                "id_estado" => 29,
                "nome" => "Remanso",
            ],
            [
                "id_cidade" => 2149,
                "id_estado" => 29,
                "nome" => "Retirolândia",
            ],
            [
                "id_cidade" => 2150,
                "id_estado" => 29,
                "nome" => "Riachão das Neves",
            ],
            [
                "id_cidade" => 2151,
                "id_estado" => 29,
                "nome" => "Riachão do Jacuípe",
            ],
            [
                "id_cidade" => 2152,
                "id_estado" => 29,
                "nome" => "Riacho de Santana",
            ],
            [
                "id_cidade" => 2153,
                "id_estado" => 29,
                "nome" => "Ribeira do Amparo",
            ],
            [
                "id_cidade" => 2154,
                "id_estado" => 29,
                "nome" => "Ribeira do Pombal",
            ],
            [
                "id_cidade" => 2155,
                "id_estado" => 29,
                "nome" => "Ribeirão do Largo",
            ],
            [
                "id_cidade" => 2156,
                "id_estado" => 29,
                "nome" => "Rio de Contas",
            ],
            [
                "id_cidade" => 2157,
                "id_estado" => 29,
                "nome" => "Rio do Antônio",
            ],
            [
                "id_cidade" => 2158,
                "id_estado" => 29,
                "nome" => "Rio do Pires",
            ],
            [
                "id_cidade" => 2159,
                "id_estado" => 29,
                "nome" => "Rio Real",
            ],
            [
                "id_cidade" => 2160,
                "id_estado" => 29,
                "nome" => "Rodelas",
            ],
            [
                "id_cidade" => 2161,
                "id_estado" => 29,
                "nome" => "Ruy Barbosa",
            ],
            [
                "id_cidade" => 2162,
                "id_estado" => 29,
                "nome" => "Salinas da Margarida",
            ],
            [
                "id_cidade" => 2163,
                "id_estado" => 29,
                "nome" => "Salvador",
            ],
            [
                "id_cidade" => 2164,
                "id_estado" => 29,
                "nome" => "Santa Bárbara",
            ],
            [
                "id_cidade" => 2165,
                "id_estado" => 29,
                "nome" => "Santa Brígida",
            ],
            [
                "id_cidade" => 2166,
                "id_estado" => 29,
                "nome" => "Santa Cruz Cabrália",
            ],
            [
                "id_cidade" => 2167,
                "id_estado" => 29,
                "nome" => "Santa Cruz da Vitória",
            ],
            [
                "id_cidade" => 2168,
                "id_estado" => 29,
                "nome" => "Santa Inês",
            ],
            [
                "id_cidade" => 2169,
                "id_estado" => 29,
                "nome" => "Santa Luzia",
            ],
            [
                "id_cidade" => 2170,
                "id_estado" => 29,
                "nome" => "Santa Maria da Vitória",
            ],
            [
                "id_cidade" => 2171,
                "id_estado" => 29,
                "nome" => "Santa Rita de Cássia",
            ],
            [
                "id_cidade" => 2172,
                "id_estado" => 29,
                "nome" => "Santa Terezinha",
            ],
            [
                "id_cidade" => 2173,
                "id_estado" => 29,
                "nome" => "Santaluz",
            ],
            [
                "id_cidade" => 2174,
                "id_estado" => 29,
                "nome" => "Santana",
            ],
            [
                "id_cidade" => 2175,
                "id_estado" => 29,
                "nome" => "Santanópolis",
            ],
            [
                "id_cidade" => 2176,
                "id_estado" => 29,
                "nome" => "Santo Amaro",
            ],
            [
                "id_cidade" => 2177,
                "id_estado" => 29,
                "nome" => "Santo Antônio de Jesus",
            ],
            [
                "id_cidade" => 2178,
                "id_estado" => 29,
                "nome" => "Santo Estêvão",
            ],
            [
                "id_cidade" => 2179,
                "id_estado" => 29,
                "nome" => "São Desidério",
            ],
            [
                "id_cidade" => 2180,
                "id_estado" => 29,
                "nome" => "São Domingos",
            ],
            [
                "id_cidade" => 2181,
                "id_estado" => 29,
                "nome" => "São Felipe",
            ],
            [
                "id_cidade" => 2182,
                "id_estado" => 29,
                "nome" => "São Félix",
            ],
            [
                "id_cidade" => 2183,
                "id_estado" => 29,
                "nome" => "São Félix do Coribe",
            ],
            [
                "id_cidade" => 2184,
                "id_estado" => 29,
                "nome" => "São Francisco do Conde",
            ],
            [
                "id_cidade" => 2185,
                "id_estado" => 29,
                "nome" => "São Gabriel",
            ],
            [
                "id_cidade" => 2186,
                "id_estado" => 29,
                "nome" => "São Gonçalo dos Campos",
            ],
            [
                "id_cidade" => 2187,
                "id_estado" => 29,
                "nome" => "São José da Vitória",
            ],
            [
                "id_cidade" => 2188,
                "id_estado" => 29,
                "nome" => "São José do Jacuípe",
            ],
            [
                "id_cidade" => 2189,
                "id_estado" => 29,
                "nome" => "São Miguel das Matas",
            ],
            [
                "id_cidade" => 2190,
                "id_estado" => 29,
                "nome" => "São Sebastião do Passé",
            ],
            [
                "id_cidade" => 2191,
                "id_estado" => 29,
                "nome" => "Sapeaçu",
            ],
            [
                "id_cidade" => 2192,
                "id_estado" => 29,
                "nome" => "Sátiro Dias",
            ],
            [
                "id_cidade" => 2193,
                "id_estado" => 29,
                "nome" => "Saubara",
            ],
            [
                "id_cidade" => 2194,
                "id_estado" => 29,
                "nome" => "Saúde",
            ],
            [
                "id_cidade" => 2195,
                "id_estado" => 29,
                "nome" => "Seabra",
            ],
            [
                "id_cidade" => 2196,
                "id_estado" => 29,
                "nome" => "Sebastião Laranjeiras",
            ],
            [
                "id_cidade" => 2197,
                "id_estado" => 29,
                "nome" => "Senhor do Bonfim",
            ],
            [
                "id_cidade" => 2198,
                "id_estado" => 29,
                "nome" => "Sento Sé",
            ],
            [
                "id_cidade" => 2199,
                "id_estado" => 29,
                "nome" => "Serra do Ramalho",
            ],
            [
                "id_cidade" => 2200,
                "id_estado" => 29,
                "nome" => "Serra Dourada",
            ],
            [
                "id_cidade" => 2201,
                "id_estado" => 29,
                "nome" => "Serra Preta",
            ],
            [
                "id_cidade" => 2202,
                "id_estado" => 29,
                "nome" => "Serrinha",
            ],
            [
                "id_cidade" => 2203,
                "id_estado" => 29,
                "nome" => "Serrolândia",
            ],
            [
                "id_cidade" => 2204,
                "id_estado" => 29,
                "nome" => "Simões Filho",
            ],
            [
                "id_cidade" => 2205,
                "id_estado" => 29,
                "nome" => "Sítio do Mato",
            ],
            [
                "id_cidade" => 2206,
                "id_estado" => 29,
                "nome" => "Sítio do Quinto",
            ],
            [
                "id_cidade" => 2207,
                "id_estado" => 29,
                "nome" => "Sobradinho",
            ],
            [
                "id_cidade" => 2208,
                "id_estado" => 29,
                "nome" => "Souto Soares",
            ],
            [
                "id_cidade" => 2209,
                "id_estado" => 29,
                "nome" => "Tabocas do Brejo Velho",
            ],
            [
                "id_cidade" => 2210,
                "id_estado" => 29,
                "nome" => "Tanhaçu",
            ],
            [
                "id_cidade" => 2211,
                "id_estado" => 29,
                "nome" => "Tanque Novo",
            ],
            [
                "id_cidade" => 2212,
                "id_estado" => 29,
                "nome" => "Tanquinho",
            ],
            [
                "id_cidade" => 2213,
                "id_estado" => 29,
                "nome" => "Taperoá",
            ],
            [
                "id_cidade" => 2214,
                "id_estado" => 29,
                "nome" => "Tapiramutá",
            ],
            [
                "id_cidade" => 2215,
                "id_estado" => 29,
                "nome" => "Teixeira de Freitas",
            ],
            [
                "id_cidade" => 2216,
                "id_estado" => 29,
                "nome" => "Teodoro Sampaio",
            ],
            [
                "id_cidade" => 2217,
                "id_estado" => 29,
                "nome" => "Teofilândia",
            ],
            [
                "id_cidade" => 2218,
                "id_estado" => 29,
                "nome" => "Teolândia",
            ],
            [
                "id_cidade" => 2219,
                "id_estado" => 29,
                "nome" => "Terra Nova",
            ],
            [
                "id_cidade" => 2220,
                "id_estado" => 29,
                "nome" => "Tremedal",
            ],
            [
                "id_cidade" => 2221,
                "id_estado" => 29,
                "nome" => "Tucano",
            ],
            [
                "id_cidade" => 2222,
                "id_estado" => 29,
                "nome" => "Uauá",
            ],
            [
                "id_cidade" => 2223,
                "id_estado" => 29,
                "nome" => "Ubaíra",
            ],
            [
                "id_cidade" => 2224,
                "id_estado" => 29,
                "nome" => "Ubaitaba",
            ],
            [
                "id_cidade" => 2225,
                "id_estado" => 29,
                "nome" => "Ubatã",
            ],
            [
                "id_cidade" => 2226,
                "id_estado" => 29,
                "nome" => "Uibaí",
            ],
            [
                "id_cidade" => 2227,
                "id_estado" => 29,
                "nome" => "Umburanas",
            ],
            [
                "id_cidade" => 2228,
                "id_estado" => 29,
                "nome" => "Una",
            ],
            [
                "id_cidade" => 2229,
                "id_estado" => 29,
                "nome" => "Urandi",
            ],
            [
                "id_cidade" => 2230,
                "id_estado" => 29,
                "nome" => "Uruçuca",
            ],
            [
                "id_cidade" => 2231,
                "id_estado" => 29,
                "nome" => "Utinga",
            ],
            [
                "id_cidade" => 2232,
                "id_estado" => 29,
                "nome" => "Valença",
            ],
            [
                "id_cidade" => 2233,
                "id_estado" => 29,
                "nome" => "Valente",
            ],
            [
                "id_cidade" => 2234,
                "id_estado" => 29,
                "nome" => "Várzea da Roça",
            ],
            [
                "id_cidade" => 2235,
                "id_estado" => 29,
                "nome" => "Várzea do Poço",
            ],
            [
                "id_cidade" => 2236,
                "id_estado" => 29,
                "nome" => "Várzea Nova",
            ],
            [
                "id_cidade" => 2237,
                "id_estado" => 29,
                "nome" => "Varzedo",
            ],
            [
                "id_cidade" => 2238,
                "id_estado" => 29,
                "nome" => "Vera Cruz",
            ],
            [
                "id_cidade" => 2239,
                "id_estado" => 29,
                "nome" => "Vereda",
            ],
            [
                "id_cidade" => 2240,
                "id_estado" => 29,
                "nome" => "Vitória da Conquista",
            ],
            [
                "id_cidade" => 2241,
                "id_estado" => 29,
                "nome" => "Wagner",
            ],
            [
                "id_cidade" => 2242,
                "id_estado" => 29,
                "nome" => "Wanderley",
            ],
            [
                "id_cidade" => 2243,
                "id_estado" => 29,
                "nome" => "Wenceslau Guimarães",
            ],
            [
                "id_cidade" => 2244,
                "id_estado" => 29,
                "nome" => "Xique-Xique",
            ],
            [
                "id_cidade" => 2245,
                "id_estado" => 31,
                "nome" => "Abadia dos Dourados",
            ],
            [
                "id_cidade" => 2246,
                "id_estado" => 31,
                "nome" => "Abaeté",
            ],
            [
                "id_cidade" => 2247,
                "id_estado" => 31,
                "nome" => "Abre Campo",
            ],
            [
                "id_cidade" => 2248,
                "id_estado" => 31,
                "nome" => "Acaiaca",
            ],
            [
                "id_cidade" => 2249,
                "id_estado" => 31,
                "nome" => "Açucena",
            ],
            [
                "id_cidade" => 2250,
                "id_estado" => 31,
                "nome" => "Água Boa",
            ],
            [
                "id_cidade" => 2251,
                "id_estado" => 31,
                "nome" => "Água Comprida",
            ],
            [
                "id_cidade" => 2252,
                "id_estado" => 31,
                "nome" => "Aguanil",
            ],
            [
                "id_cidade" => 2253,
                "id_estado" => 31,
                "nome" => "Águas Formosas",
            ],
            [
                "id_cidade" => 2254,
                "id_estado" => 31,
                "nome" => "Águas Vermelhas",
            ],
            [
                "id_cidade" => 2255,
                "id_estado" => 31,
                "nome" => "Aimorés",
            ],
            [
                "id_cidade" => 2256,
                "id_estado" => 31,
                "nome" => "Aiuruoca",
            ],
            [
                "id_cidade" => 2257,
                "id_estado" => 31,
                "nome" => "Alagoa",
            ],
            [
                "id_cidade" => 2258,
                "id_estado" => 31,
                "nome" => "Albertina",
            ],
            [
                "id_cidade" => 2259,
                "id_estado" => 31,
                "nome" => "Além Paraíba",
            ],
            [
                "id_cidade" => 2260,
                "id_estado" => 31,
                "nome" => "Alfenas",
            ],
            [
                "id_cidade" => 2261,
                "id_estado" => 31,
                "nome" => "Alfredo Vasconcelos",
            ],
            [
                "id_cidade" => 2262,
                "id_estado" => 31,
                "nome" => "Almenara",
            ],
            [
                "id_cidade" => 2263,
                "id_estado" => 31,
                "nome" => "Alpercata",
            ],
            [
                "id_cidade" => 2264,
                "id_estado" => 31,
                "nome" => "Alpinópolis",
            ],
            [
                "id_cidade" => 2265,
                "id_estado" => 31,
                "nome" => "Alterosa",
            ],
            [
                "id_cidade" => 2266,
                "id_estado" => 31,
                "nome" => "Alto Caparaó",
            ],
            [
                "id_cidade" => 2267,
                "id_estado" => 31,
                "nome" => "Alto Jequitibá",
            ],
            [
                "id_cidade" => 2268,
                "id_estado" => 31,
                "nome" => "Alto Rio Doce",
            ],
            [
                "id_cidade" => 2269,
                "id_estado" => 31,
                "nome" => "Alvarenga",
            ],
            [
                "id_cidade" => 2270,
                "id_estado" => 31,
                "nome" => "Alvinópolis",
            ],
            [
                "id_cidade" => 2271,
                "id_estado" => 31,
                "nome" => "Alvorada de Minas",
            ],
            [
                "id_cidade" => 2272,
                "id_estado" => 31,
                "nome" => "Amparo do Serra",
            ],
            [
                "id_cidade" => 2273,
                "id_estado" => 31,
                "nome" => "Andradas",
            ],
            [
                "id_cidade" => 2274,
                "id_estado" => 31,
                "nome" => "Andrelândia",
            ],
            [
                "id_cidade" => 2275,
                "id_estado" => 31,
                "nome" => "Angelândia",
            ],
            [
                "id_cidade" => 2276,
                "id_estado" => 31,
                "nome" => "Antônio Carlos",
            ],
            [
                "id_cidade" => 2277,
                "id_estado" => 31,
                "nome" => "Antônio Dias",
            ],
            [
                "id_cidade" => 2278,
                "id_estado" => 31,
                "nome" => "Antônio Prado de Minas",
            ],
            [
                "id_cidade" => 2279,
                "id_estado" => 31,
                "nome" => "Araçaí",
            ],
            [
                "id_cidade" => 2280,
                "id_estado" => 31,
                "nome" => "Aracitaba",
            ],
            [
                "id_cidade" => 2281,
                "id_estado" => 31,
                "nome" => "Araçuaí",
            ],
            [
                "id_cidade" => 2282,
                "id_estado" => 31,
                "nome" => "Araguari",
            ],
            [
                "id_cidade" => 2283,
                "id_estado" => 31,
                "nome" => "Arantina",
            ],
            [
                "id_cidade" => 2284,
                "id_estado" => 31,
                "nome" => "Araponga",
            ],
            [
                "id_cidade" => 2285,
                "id_estado" => 31,
                "nome" => "Araporã",
            ],
            [
                "id_cidade" => 2286,
                "id_estado" => 31,
                "nome" => "Arapuá",
            ],
            [
                "id_cidade" => 2287,
                "id_estado" => 31,
                "nome" => "Araújos",
            ],
            [
                "id_cidade" => 2288,
                "id_estado" => 31,
                "nome" => "Araxá",
            ],
            [
                "id_cidade" => 2289,
                "id_estado" => 31,
                "nome" => "Arceburgo",
            ],
            [
                "id_cidade" => 2290,
                "id_estado" => 31,
                "nome" => "Arcos",
            ],
            [
                "id_cidade" => 2291,
                "id_estado" => 31,
                "nome" => "Areado",
            ],
            [
                "id_cidade" => 2292,
                "id_estado" => 31,
                "nome" => "Argirita",
            ],
            [
                "id_cidade" => 2293,
                "id_estado" => 31,
                "nome" => "Aricanduva",
            ],
            [
                "id_cidade" => 2294,
                "id_estado" => 31,
                "nome" => "Arinos",
            ],
            [
                "id_cidade" => 2295,
                "id_estado" => 31,
                "nome" => "Astolfo Dutra",
            ],
            [
                "id_cidade" => 2296,
                "id_estado" => 31,
                "nome" => "Ataléia",
            ],
            [
                "id_cidade" => 2297,
                "id_estado" => 31,
                "nome" => "Augusto de Lima",
            ],
            [
                "id_cidade" => 2298,
                "id_estado" => 31,
                "nome" => "Baependi",
            ],
            [
                "id_cidade" => 2299,
                "id_estado" => 31,
                "nome" => "Baldim",
            ],
            [
                "id_cidade" => 2300,
                "id_estado" => 31,
                "nome" => "Bambuí",
            ],
            [
                "id_cidade" => 2301,
                "id_estado" => 31,
                "nome" => "Bandeira",
            ],
            [
                "id_cidade" => 2302,
                "id_estado" => 31,
                "nome" => "Bandeira do Sul",
            ],
            [
                "id_cidade" => 2303,
                "id_estado" => 31,
                "nome" => "Barão de Cocais",
            ],
            [
                "id_cidade" => 2304,
                "id_estado" => 31,
                "nome" => "Barão de Monte Alto",
            ],
            [
                "id_cidade" => 2305,
                "id_estado" => 31,
                "nome" => "Barbacena",
            ],
            [
                "id_cidade" => 2306,
                "id_estado" => 31,
                "nome" => "Barra Longa",
            ],
            [
                "id_cidade" => 2307,
                "id_estado" => 31,
                "nome" => "Barroso",
            ],
            [
                "id_cidade" => 2308,
                "id_estado" => 31,
                "nome" => "Bela Vista de Minas",
            ],
            [
                "id_cidade" => 2309,
                "id_estado" => 31,
                "nome" => "Belmiro Braga",
            ],
            [
                "id_cidade" => 2310,
                "id_estado" => 31,
                "nome" => "Belo Horizonte",
            ],
            [
                "id_cidade" => 2311,
                "id_estado" => 31,
                "nome" => "Belo Oriente",
            ],
            [
                "id_cidade" => 2312,
                "id_estado" => 31,
                "nome" => "Belo Vale",
            ],
            [
                "id_cidade" => 2313,
                "id_estado" => 31,
                "nome" => "Berilo",
            ],
            [
                "id_cidade" => 2314,
                "id_estado" => 31,
                "nome" => "Berizal",
            ],
            [
                "id_cidade" => 2315,
                "id_estado" => 31,
                "nome" => "Bertópolis",
            ],
            [
                "id_cidade" => 2316,
                "id_estado" => 31,
                "nome" => "Betim",
            ],
            [
                "id_cidade" => 2317,
                "id_estado" => 31,
                "nome" => "Bias Fortes",
            ],
            [
                "id_cidade" => 2318,
                "id_estado" => 31,
                "nome" => "Bicas",
            ],
            [
                "id_cidade" => 2319,
                "id_estado" => 31,
                "nome" => "Biquinhas",
            ],
            [
                "id_cidade" => 2320,
                "id_estado" => 31,
                "nome" => "Boa Esperança",
            ],
            [
                "id_cidade" => 2321,
                "id_estado" => 31,
                "nome" => "Bocaina de Minas",
            ],
            [
                "id_cidade" => 2322,
                "id_estado" => 31,
                "nome" => "Bocaiúva",
            ],
            [
                "id_cidade" => 2323,
                "id_estado" => 31,
                "nome" => "Bom Despacho",
            ],
            [
                "id_cidade" => 2324,
                "id_estado" => 31,
                "nome" => "Bom Jardim de Minas",
            ],
            [
                "id_cidade" => 2325,
                "id_estado" => 31,
                "nome" => "Bom Jesus da Penha",
            ],
            [
                "id_cidade" => 2326,
                "id_estado" => 31,
                "nome" => "Bom Jesus do Amparo",
            ],
            [
                "id_cidade" => 2327,
                "id_estado" => 31,
                "nome" => "Bom Jesus do Galho",
            ],
            [
                "id_cidade" => 2328,
                "id_estado" => 31,
                "nome" => "Bom Repouso",
            ],
            [
                "id_cidade" => 2329,
                "id_estado" => 31,
                "nome" => "Bom Sucesso",
            ],
            [
                "id_cidade" => 2330,
                "id_estado" => 31,
                "nome" => "Bonfim",
            ],
            [
                "id_cidade" => 2331,
                "id_estado" => 31,
                "nome" => "Bonfinópolis de Minas",
            ],
            [
                "id_cidade" => 2332,
                "id_estado" => 31,
                "nome" => "Bonito de Minas",
            ],
            [
                "id_cidade" => 2333,
                "id_estado" => 31,
                "nome" => "Borda da Mata",
            ],
            [
                "id_cidade" => 2334,
                "id_estado" => 31,
                "nome" => "Botelhos",
            ],
            [
                "id_cidade" => 2335,
                "id_estado" => 31,
                "nome" => "Botumirim",
            ],
            [
                "id_cidade" => 2336,
                "id_estado" => 31,
                "nome" => "Brás Pires",
            ],
            [
                "id_cidade" => 2337,
                "id_estado" => 31,
                "nome" => "Brasilândia de Minas",
            ],
            [
                "id_cidade" => 2338,
                "id_estado" => 31,
                "nome" => "Brasília de Minas",
            ],
            [
                "id_cidade" => 2339,
                "id_estado" => 31,
                "nome" => "Braúnas",
            ],
            [
                "id_cidade" => 2340,
                "id_estado" => 31,
                "nome" => "Brazópolis",
            ],
            [
                "id_cidade" => 2341,
                "id_estado" => 31,
                "nome" => "Brumadinho",
            ],
            [
                "id_cidade" => 2342,
                "id_estado" => 31,
                "nome" => "Bueno Brandão",
            ],
            [
                "id_cidade" => 2343,
                "id_estado" => 31,
                "nome" => "Buenópolis",
            ],
            [
                "id_cidade" => 2344,
                "id_estado" => 31,
                "nome" => "Bugre",
            ],
            [
                "id_cidade" => 2345,
                "id_estado" => 31,
                "nome" => "Buritis",
            ],
            [
                "id_cidade" => 2346,
                "id_estado" => 31,
                "nome" => "Buritizeiro",
            ],
            [
                "id_cidade" => 2347,
                "id_estado" => 31,
                "nome" => "Cabeceira Grande",
            ],
            [
                "id_cidade" => 2348,
                "id_estado" => 31,
                "nome" => "Cabo Verde",
            ],
            [
                "id_cidade" => 2349,
                "id_estado" => 31,
                "nome" => "Cachoeira da Prata",
            ],
            [
                "id_cidade" => 2350,
                "id_estado" => 31,
                "nome" => "Cachoeira de Minas",
            ],
            [
                "id_cidade" => 2351,
                "id_estado" => 31,
                "nome" => "Cachoeira de Pajeú",
            ],
            [
                "id_cidade" => 2352,
                "id_estado" => 31,
                "nome" => "Cachoeira Dourada",
            ],
            [
                "id_cidade" => 2353,
                "id_estado" => 31,
                "nome" => "Caetanópolis",
            ],
            [
                "id_cidade" => 2354,
                "id_estado" => 31,
                "nome" => "Caeté",
            ],
            [
                "id_cidade" => 2355,
                "id_estado" => 31,
                "nome" => "Caiana",
            ],
            [
                "id_cidade" => 2356,
                "id_estado" => 31,
                "nome" => "Cajuri",
            ],
            [
                "id_cidade" => 2357,
                "id_estado" => 31,
                "nome" => "Caldas",
            ],
            [
                "id_cidade" => 2358,
                "id_estado" => 31,
                "nome" => "Camacho",
            ],
            [
                "id_cidade" => 2359,
                "id_estado" => 31,
                "nome" => "Camanducaia",
            ],
            [
                "id_cidade" => 2360,
                "id_estado" => 31,
                "nome" => "Cambuí",
            ],
            [
                "id_cidade" => 2361,
                "id_estado" => 31,
                "nome" => "Cambuquira",
            ],
            [
                "id_cidade" => 2362,
                "id_estado" => 31,
                "nome" => "Campanário",
            ],
            [
                "id_cidade" => 2363,
                "id_estado" => 31,
                "nome" => "Campanha",
            ],
            [
                "id_cidade" => 2364,
                "id_estado" => 31,
                "nome" => "Campestre",
            ],
            [
                "id_cidade" => 2365,
                "id_estado" => 31,
                "nome" => "Campina Verde",
            ],
            [
                "id_cidade" => 2366,
                "id_estado" => 31,
                "nome" => "Campo Azul",
            ],
            [
                "id_cidade" => 2367,
                "id_estado" => 31,
                "nome" => "Campo Belo",
            ],
            [
                "id_cidade" => 2368,
                "id_estado" => 31,
                "nome" => "Campo do Meio",
            ],
            [
                "id_cidade" => 2369,
                "id_estado" => 31,
                "nome" => "Campo Florido",
            ],
            [
                "id_cidade" => 2370,
                "id_estado" => 31,
                "nome" => "Campos Altos",
            ],
            [
                "id_cidade" => 2371,
                "id_estado" => 31,
                "nome" => "Campos Gerais",
            ],
            [
                "id_cidade" => 2372,
                "id_estado" => 31,
                "nome" => "Cana Verde",
            ],
            [
                "id_cidade" => 2373,
                "id_estado" => 31,
                "nome" => "Canaã",
            ],
            [
                "id_cidade" => 2374,
                "id_estado" => 31,
                "nome" => "Canápolis",
            ],
            [
                "id_cidade" => 2375,
                "id_estado" => 31,
                "nome" => "Candeias",
            ],
            [
                "id_cidade" => 2376,
                "id_estado" => 31,
                "nome" => "Cantagalo",
            ],
            [
                "id_cidade" => 2377,
                "id_estado" => 31,
                "nome" => "Caparaó",
            ],
            [
                "id_cidade" => 2378,
                "id_estado" => 31,
                "nome" => "Capela Nova",
            ],
            [
                "id_cidade" => 2379,
                "id_estado" => 31,
                "nome" => "Capelinha",
            ],
            [
                "id_cidade" => 2380,
                "id_estado" => 31,
                "nome" => "Capetinga",
            ],
            [
                "id_cidade" => 2381,
                "id_estado" => 31,
                "nome" => "Capim Branco",
            ],
            [
                "id_cidade" => 2382,
                "id_estado" => 31,
                "nome" => "Capinópolis",
            ],
            [
                "id_cidade" => 2383,
                "id_estado" => 31,
                "nome" => "Capitão Andrade",
            ],
            [
                "id_cidade" => 2384,
                "id_estado" => 31,
                "nome" => "Capitão Enéas",
            ],
            [
                "id_cidade" => 2385,
                "id_estado" => 31,
                "nome" => "Capitólio",
            ],
            [
                "id_cidade" => 2386,
                "id_estado" => 31,
                "nome" => "Caputira",
            ],
            [
                "id_cidade" => 2387,
                "id_estado" => 31,
                "nome" => "Caraí",
            ],
            [
                "id_cidade" => 2388,
                "id_estado" => 31,
                "nome" => "Caranaíba",
            ],
            [
                "id_cidade" => 2389,
                "id_estado" => 31,
                "nome" => "Carandaí",
            ],
            [
                "id_cidade" => 2390,
                "id_estado" => 31,
                "nome" => "Carangola",
            ],
            [
                "id_cidade" => 2391,
                "id_estado" => 31,
                "nome" => "Caratinga",
            ],
            [
                "id_cidade" => 2392,
                "id_estado" => 31,
                "nome" => "Carbonita",
            ],
            [
                "id_cidade" => 2393,
                "id_estado" => 31,
                "nome" => "Careaçu",
            ],
            [
                "id_cidade" => 2394,
                "id_estado" => 31,
                "nome" => "Carlos Chagas",
            ],
            [
                "id_cidade" => 2395,
                "id_estado" => 31,
                "nome" => "Carmésia",
            ],
            [
                "id_cidade" => 2396,
                "id_estado" => 31,
                "nome" => "Carmo da Cachoeira",
            ],
            [
                "id_cidade" => 2397,
                "id_estado" => 31,
                "nome" => "Carmo da Mata",
            ],
            [
                "id_cidade" => 2398,
                "id_estado" => 31,
                "nome" => "Carmo de Minas",
            ],
            [
                "id_cidade" => 2399,
                "id_estado" => 31,
                "nome" => "Carmo do Cajuru",
            ],
            [
                "id_cidade" => 2400,
                "id_estado" => 31,
                "nome" => "Carmo do Paranaíba",
            ],
            [
                "id_cidade" => 2401,
                "id_estado" => 31,
                "nome" => "Carmo do Rio Claro",
            ],
            [
                "id_cidade" => 2402,
                "id_estado" => 31,
                "nome" => "Carmópolis de Minas",
            ],
            [
                "id_cidade" => 2403,
                "id_estado" => 31,
                "nome" => "Carneirinho",
            ],
            [
                "id_cidade" => 2404,
                "id_estado" => 31,
                "nome" => "Carrancas",
            ],
            [
                "id_cidade" => 2405,
                "id_estado" => 31,
                "nome" => "Carvalhópolis",
            ],
            [
                "id_cidade" => 2406,
                "id_estado" => 31,
                "nome" => "Carvalhos",
            ],
            [
                "id_cidade" => 2407,
                "id_estado" => 31,
                "nome" => "Casa Grande",
            ],
            [
                "id_cidade" => 2408,
                "id_estado" => 31,
                "nome" => "Cascalho Rico",
            ],
            [
                "id_cidade" => 2409,
                "id_estado" => 31,
                "nome" => "Cássia",
            ],
            [
                "id_cidade" => 2410,
                "id_estado" => 31,
                "nome" => "Cataguases",
            ],
            [
                "id_cidade" => 2411,
                "id_estado" => 31,
                "nome" => "Catas Altas",
            ],
            [
                "id_cidade" => 2412,
                "id_estado" => 31,
                "nome" => "Catas Altas da Noruega",
            ],
            [
                "id_cidade" => 2413,
                "id_estado" => 31,
                "nome" => "Catuji",
            ],
            [
                "id_cidade" => 2414,
                "id_estado" => 31,
                "nome" => "Catuti",
            ],
            [
                "id_cidade" => 2415,
                "id_estado" => 31,
                "nome" => "Caxambu",
            ],
            [
                "id_cidade" => 2416,
                "id_estado" => 31,
                "nome" => "Cedro do Abaeté",
            ],
            [
                "id_cidade" => 2417,
                "id_estado" => 31,
                "nome" => "Central de Minas",
            ],
            [
                "id_cidade" => 2418,
                "id_estado" => 31,
                "nome" => "Centralina",
            ],
            [
                "id_cidade" => 2419,
                "id_estado" => 31,
                "nome" => "Chácara",
            ],
            [
                "id_cidade" => 2420,
                "id_estado" => 31,
                "nome" => "Chalé",
            ],
            [
                "id_cidade" => 2421,
                "id_estado" => 31,
                "nome" => "Chapada do Norte",
            ],
            [
                "id_cidade" => 2422,
                "id_estado" => 31,
                "nome" => "Chapada Gaúcha",
            ],
            [
                "id_cidade" => 2423,
                "id_estado" => 31,
                "nome" => "Chiador",
            ],
            [
                "id_cidade" => 2424,
                "id_estado" => 31,
                "nome" => "Cipotânea",
            ],
            [
                "id_cidade" => 2425,
                "id_estado" => 31,
                "nome" => "Claraval",
            ],
            [
                "id_cidade" => 2426,
                "id_estado" => 31,
                "nome" => "Claro dos Poções",
            ],
            [
                "id_cidade" => 2427,
                "id_estado" => 31,
                "nome" => "Cláudio",
            ],
            [
                "id_cidade" => 2428,
                "id_estado" => 31,
                "nome" => "Coimbra",
            ],
            [
                "id_cidade" => 2429,
                "id_estado" => 31,
                "nome" => "Coluna",
            ],
            [
                "id_cidade" => 2430,
                "id_estado" => 31,
                "nome" => "Comendador Gomes",
            ],
            [
                "id_cidade" => 2431,
                "id_estado" => 31,
                "nome" => "Comercinho",
            ],
            [
                "id_cidade" => 2432,
                "id_estado" => 31,
                "nome" => "Conceição da Aparecida",
            ],
            [
                "id_cidade" => 2433,
                "id_estado" => 31,
                "nome" => "Conceição da Barra de Minas",
            ],
            [
                "id_cidade" => 2434,
                "id_estado" => 31,
                "nome" => "Conceição das Alagoas",
            ],
            [
                "id_cidade" => 2435,
                "id_estado" => 31,
                "nome" => "Conceição das Pedras",
            ],
            [
                "id_cidade" => 2436,
                "id_estado" => 31,
                "nome" => "Conceição de Ipanema",
            ],
            [
                "id_cidade" => 2437,
                "id_estado" => 31,
                "nome" => "Conceição do Mato Dentro",
            ],
            [
                "id_cidade" => 2438,
                "id_estado" => 31,
                "nome" => "Conceição do Pará",
            ],
            [
                "id_cidade" => 2439,
                "id_estado" => 31,
                "nome" => "Conceição do Rio Verde",
            ],
            [
                "id_cidade" => 2440,
                "id_estado" => 31,
                "nome" => "Conceição dos Ouros",
            ],
            [
                "id_cidade" => 2441,
                "id_estado" => 31,
                "nome" => "Cônego Marinho",
            ],
            [
                "id_cidade" => 2442,
                "id_estado" => 31,
                "nome" => "Confins",
            ],
            [
                "id_cidade" => 2443,
                "id_estado" => 31,
                "nome" => "Congonhal",
            ],
            [
                "id_cidade" => 2444,
                "id_estado" => 31,
                "nome" => "Congonhas",
            ],
            [
                "id_cidade" => 2445,
                "id_estado" => 31,
                "nome" => "Congonhas do Norte",
            ],
            [
                "id_cidade" => 2446,
                "id_estado" => 31,
                "nome" => "Conquista",
            ],
            [
                "id_cidade" => 2447,
                "id_estado" => 31,
                "nome" => "Conselheiro Lafaiete",
            ],
            [
                "id_cidade" => 2448,
                "id_estado" => 31,
                "nome" => "Conselheiro Pena",
            ],
            [
                "id_cidade" => 2449,
                "id_estado" => 31,
                "nome" => "Consolação",
            ],
            [
                "id_cidade" => 2450,
                "id_estado" => 31,
                "nome" => "Contagem",
            ],
            [
                "id_cidade" => 2451,
                "id_estado" => 31,
                "nome" => "Coqueiral",
            ],
            [
                "id_cidade" => 2452,
                "id_estado" => 31,
                "nome" => "Coração de Jesus",
            ],
            [
                "id_cidade" => 2453,
                "id_estado" => 31,
                "nome" => "Cordisburgo",
            ],
            [
                "id_cidade" => 2454,
                "id_estado" => 31,
                "nome" => "Cordislândia",
            ],
            [
                "id_cidade" => 2455,
                "id_estado" => 31,
                "nome" => "Corinto",
            ],
            [
                "id_cidade" => 2456,
                "id_estado" => 31,
                "nome" => "Coroaci",
            ],
            [
                "id_cidade" => 2457,
                "id_estado" => 31,
                "nome" => "Coromandel",
            ],
            [
                "id_cidade" => 2458,
                "id_estado" => 31,
                "nome" => "Coronel Fabriciano",
            ],
            [
                "id_cidade" => 2459,
                "id_estado" => 31,
                "nome" => "Coronel Murta",
            ],
            [
                "id_cidade" => 2460,
                "id_estado" => 31,
                "nome" => "Coronel Pacheco",
            ],
            [
                "id_cidade" => 2461,
                "id_estado" => 31,
                "nome" => "Coronel Xavier Chaves",
            ],
            [
                "id_cidade" => 2462,
                "id_estado" => 31,
                "nome" => "Córrego Danta",
            ],
            [
                "id_cidade" => 2463,
                "id_estado" => 31,
                "nome" => "Córrego do Bom Jesus",
            ],
            [
                "id_cidade" => 2464,
                "id_estado" => 31,
                "nome" => "Córrego Fundo",
            ],
            [
                "id_cidade" => 2465,
                "id_estado" => 31,
                "nome" => "Córrego Novo",
            ],
            [
                "id_cidade" => 2466,
                "id_estado" => 31,
                "nome" => "Couto de Magalhães de Minas",
            ],
            [
                "id_cidade" => 2467,
                "id_estado" => 31,
                "nome" => "Crisólita",
            ],
            [
                "id_cidade" => 2468,
                "id_estado" => 31,
                "nome" => "Cristais",
            ],
            [
                "id_cidade" => 2469,
                "id_estado" => 31,
                "nome" => "Cristália",
            ],
            [
                "id_cidade" => 2470,
                "id_estado" => 31,
                "nome" => "Cristiano Otoni",
            ],
            [
                "id_cidade" => 2471,
                "id_estado" => 31,
                "nome" => "Cristina",
            ],
            [
                "id_cidade" => 2472,
                "id_estado" => 31,
                "nome" => "Crucilândia",
            ],
            [
                "id_cidade" => 2473,
                "id_estado" => 31,
                "nome" => "Cruzeiro da Fortaleza",
            ],
            [
                "id_cidade" => 2474,
                "id_estado" => 31,
                "nome" => "Cruzília",
            ],
            [
                "id_cidade" => 2475,
                "id_estado" => 31,
                "nome" => "Cuparaque",
            ],
            [
                "id_cidade" => 2476,
                "id_estado" => 31,
                "nome" => "Curral de Dentro",
            ],
            [
                "id_cidade" => 2477,
                "id_estado" => 31,
                "nome" => "Curvelo",
            ],
            [
                "id_cidade" => 2478,
                "id_estado" => 31,
                "nome" => "Datas",
            ],
            [
                "id_cidade" => 2479,
                "id_estado" => 31,
                "nome" => "Delfim Moreira",
            ],
            [
                "id_cidade" => 2480,
                "id_estado" => 31,
                "nome" => "Delfinópolis",
            ],
            [
                "id_cidade" => 2481,
                "id_estado" => 31,
                "nome" => "Delta",
            ],
            [
                "id_cidade" => 2482,
                "id_estado" => 31,
                "nome" => "Descoberto",
            ],
            [
                "id_cidade" => 2483,
                "id_estado" => 31,
                "nome" => "Desterro de Entre Rios",
            ],
            [
                "id_cidade" => 2484,
                "id_estado" => 31,
                "nome" => "Desterro do Melo",
            ],
            [
                "id_cidade" => 2485,
                "id_estado" => 31,
                "nome" => "Diamantina",
            ],
            [
                "id_cidade" => 2486,
                "id_estado" => 31,
                "nome" => "Diogo de Vasconcelos",
            ],
            [
                "id_cidade" => 2487,
                "id_estado" => 31,
                "nome" => "Dionísio",
            ],
            [
                "id_cidade" => 2488,
                "id_estado" => 31,
                "nome" => "Divinésia",
            ],
            [
                "id_cidade" => 2489,
                "id_estado" => 31,
                "nome" => "Divino",
            ],
            [
                "id_cidade" => 2490,
                "id_estado" => 31,
                "nome" => "Divino das Laranjeiras",
            ],
            [
                "id_cidade" => 2491,
                "id_estado" => 31,
                "nome" => "Divinolândia de Minas",
            ],
            [
                "id_cidade" => 2492,
                "id_estado" => 31,
                "nome" => "Divinópolis",
            ],
            [
                "id_cidade" => 2493,
                "id_estado" => 31,
                "nome" => "Divisa Alegre",
            ],
            [
                "id_cidade" => 2494,
                "id_estado" => 31,
                "nome" => "Divisa Nova",
            ],
            [
                "id_cidade" => 2495,
                "id_estado" => 31,
                "nome" => "Divisópolis",
            ],
            [
                "id_cidade" => 2496,
                "id_estado" => 31,
                "nome" => "Dom Bosco",
            ],
            [
                "id_cidade" => 2497,
                "id_estado" => 31,
                "nome" => "Dom Cavati",
            ],
            [
                "id_cidade" => 2498,
                "id_estado" => 31,
                "nome" => "Dom Joaquim",
            ],
            [
                "id_cidade" => 2499,
                "id_estado" => 31,
                "nome" => "Dom Silvério",
            ],
            [
                "id_cidade" => 2500,
                "id_estado" => 31,
                "nome" => "Dom Viçoso",
            ],
            [
                "id_cidade" => 2501,
                "id_estado" => 31,
                "nome" => "Dona Euzébia",
            ],
            [
                "id_cidade" => 2502,
                "id_estado" => 31,
                "nome" => "Dores de Campos",
            ],
            [
                "id_cidade" => 2503,
                "id_estado" => 31,
                "nome" => "Dores de Guanhães",
            ],
            [
                "id_cidade" => 2504,
                "id_estado" => 31,
                "nome" => "Dores do Indaiá",
            ],
            [
                "id_cidade" => 2505,
                "id_estado" => 31,
                "nome" => "Dores do Turvo",
            ],
            [
                "id_cidade" => 2506,
                "id_estado" => 31,
                "nome" => "Doresópolis",
            ],
            [
                "id_cidade" => 2507,
                "id_estado" => 31,
                "nome" => "Douradoquara",
            ],
            [
                "id_cidade" => 2508,
                "id_estado" => 31,
                "nome" => "Durandé",
            ],
            [
                "id_cidade" => 2509,
                "id_estado" => 31,
                "nome" => "Elói Mendes",
            ],
            [
                "id_cidade" => 2510,
                "id_estado" => 31,
                "nome" => "Engenheiro Caldas",
            ],
            [
                "id_cidade" => 2511,
                "id_estado" => 31,
                "nome" => "Engenheiro Navarro",
            ],
            [
                "id_cidade" => 2512,
                "id_estado" => 31,
                "nome" => "Entre Folhas",
            ],
            [
                "id_cidade" => 2513,
                "id_estado" => 31,
                "nome" => "Entre Rios de Minas",
            ],
            [
                "id_cidade" => 2514,
                "id_estado" => 31,
                "nome" => "Ervália",
            ],
            [
                "id_cidade" => 2515,
                "id_estado" => 31,
                "nome" => "Esmeraldas",
            ],
            [
                "id_cidade" => 2516,
                "id_estado" => 31,
                "nome" => "Espera Feliz",
            ],
            [
                "id_cidade" => 2517,
                "id_estado" => 31,
                "nome" => "Espinosa",
            ],
            [
                "id_cidade" => 2518,
                "id_estado" => 31,
                "nome" => "Espírito Santo do Dourado",
            ],
            [
                "id_cidade" => 2519,
                "id_estado" => 31,
                "nome" => "Estiva",
            ],
            [
                "id_cidade" => 2520,
                "id_estado" => 31,
                "nome" => "Estrela Dalva",
            ],
            [
                "id_cidade" => 2521,
                "id_estado" => 31,
                "nome" => "Estrela do Indaiá",
            ],
            [
                "id_cidade" => 2522,
                "id_estado" => 31,
                "nome" => "Estrela do Sul",
            ],
            [
                "id_cidade" => 2523,
                "id_estado" => 31,
                "nome" => "Eugenópolis",
            ],
            [
                "id_cidade" => 2524,
                "id_estado" => 31,
                "nome" => "Ewbank da Câmara",
            ],
            [
                "id_cidade" => 2525,
                "id_estado" => 31,
                "nome" => "Extrema",
            ],
            [
                "id_cidade" => 2526,
                "id_estado" => 31,
                "nome" => "Fama",
            ],
            [
                "id_cidade" => 2527,
                "id_estado" => 31,
                "nome" => "Faria Lemos",
            ],
            [
                "id_cidade" => 2528,
                "id_estado" => 31,
                "nome" => "Felício dos Santos",
            ],
            [
                "id_cidade" => 2529,
                "id_estado" => 31,
                "nome" => "Felisburgo",
            ],
            [
                "id_cidade" => 2530,
                "id_estado" => 31,
                "nome" => "Felixlândia",
            ],
            [
                "id_cidade" => 2531,
                "id_estado" => 31,
                "nome" => "Fernandes Tourinho",
            ],
            [
                "id_cidade" => 2532,
                "id_estado" => 31,
                "nome" => "Ferros",
            ],
            [
                "id_cidade" => 2533,
                "id_estado" => 31,
                "nome" => "Fervedouro",
            ],
            [
                "id_cidade" => 2534,
                "id_estado" => 31,
                "nome" => "Florestal",
            ],
            [
                "id_cidade" => 2535,
                "id_estado" => 31,
                "nome" => "Formiga",
            ],
            [
                "id_cidade" => 2536,
                "id_estado" => 31,
                "nome" => "Formoso",
            ],
            [
                "id_cidade" => 2537,
                "id_estado" => 31,
                "nome" => "Fortaleza de Minas",
            ],
            [
                "id_cidade" => 2538,
                "id_estado" => 31,
                "nome" => "Fortuna de Minas",
            ],
            [
                "id_cidade" => 2539,
                "id_estado" => 31,
                "nome" => "Francisco Badaró",
            ],
            [
                "id_cidade" => 2540,
                "id_estado" => 31,
                "nome" => "Francisco Dumont",
            ],
            [
                "id_cidade" => 2541,
                "id_estado" => 31,
                "nome" => "Francisco Sá",
            ],
            [
                "id_cidade" => 2542,
                "id_estado" => 31,
                "nome" => "Franciscópolis",
            ],
            [
                "id_cidade" => 2543,
                "id_estado" => 31,
                "nome" => "Frei Gaspar",
            ],
            [
                "id_cidade" => 2544,
                "id_estado" => 31,
                "nome" => "Frei Inocêncio",
            ],
            [
                "id_cidade" => 2545,
                "id_estado" => 31,
                "nome" => "Frei Lagonegro",
            ],
            [
                "id_cidade" => 2546,
                "id_estado" => 31,
                "nome" => "Fronteira",
            ],
            [
                "id_cidade" => 2547,
                "id_estado" => 31,
                "nome" => "Fronteira dos Vales",
            ],
            [
                "id_cidade" => 2548,
                "id_estado" => 31,
                "nome" => "Fruta de Leite",
            ],
            [
                "id_cidade" => 2549,
                "id_estado" => 31,
                "nome" => "Frutal",
            ],
            [
                "id_cidade" => 2550,
                "id_estado" => 31,
                "nome" => "Funilândia",
            ],
            [
                "id_cidade" => 2551,
                "id_estado" => 31,
                "nome" => "Galiléia",
            ],
            [
                "id_cidade" => 2552,
                "id_estado" => 31,
                "nome" => "Gameleiras",
            ],
            [
                "id_cidade" => 2553,
                "id_estado" => 31,
                "nome" => "Glaucilândia",
            ],
            [
                "id_cidade" => 2554,
                "id_estado" => 31,
                "nome" => "Goiabeira",
            ],
            [
                "id_cidade" => 2555,
                "id_estado" => 31,
                "nome" => "Goianá",
            ],
            [
                "id_cidade" => 2556,
                "id_estado" => 31,
                "nome" => "Gonçalves",
            ],
            [
                "id_cidade" => 2557,
                "id_estado" => 31,
                "nome" => "Gonzaga",
            ],
            [
                "id_cidade" => 2558,
                "id_estado" => 31,
                "nome" => "Gouveia",
            ],
            [
                "id_cidade" => 2559,
                "id_estado" => 31,
                "nome" => "Governador Valadares",
            ],
            [
                "id_cidade" => 2560,
                "id_estado" => 31,
                "nome" => "Grão Mogol",
            ],
            [
                "id_cidade" => 2561,
                "id_estado" => 31,
                "nome" => "Grupiara",
            ],
            [
                "id_cidade" => 2562,
                "id_estado" => 31,
                "nome" => "Guanhães",
            ],
            [
                "id_cidade" => 2563,
                "id_estado" => 31,
                "nome" => "Guapé",
            ],
            [
                "id_cidade" => 2564,
                "id_estado" => 31,
                "nome" => "Guaraciaba",
            ],
            [
                "id_cidade" => 2565,
                "id_estado" => 31,
                "nome" => "Guaraciama",
            ],
            [
                "id_cidade" => 2566,
                "id_estado" => 31,
                "nome" => "Guaranésia",
            ],
            [
                "id_cidade" => 2567,
                "id_estado" => 31,
                "nome" => "Guarani",
            ],
            [
                "id_cidade" => 2568,
                "id_estado" => 31,
                "nome" => "Guarará",
            ],
            [
                "id_cidade" => 2569,
                "id_estado" => 31,
                "nome" => "Guarda-Mor",
            ],
            [
                "id_cidade" => 2570,
                "id_estado" => 31,
                "nome" => "Guaxupé",
            ],
            [
                "id_cidade" => 2571,
                "id_estado" => 31,
                "nome" => "Guidoval",
            ],
            [
                "id_cidade" => 2572,
                "id_estado" => 31,
                "nome" => "Guimarânia",
            ],
            [
                "id_cidade" => 2573,
                "id_estado" => 31,
                "nome" => "Guiricema",
            ],
            [
                "id_cidade" => 2574,
                "id_estado" => 31,
                "nome" => "Gurinhatã",
            ],
            [
                "id_cidade" => 2575,
                "id_estado" => 31,
                "nome" => "Heliodora",
            ],
            [
                "id_cidade" => 2576,
                "id_estado" => 31,
                "nome" => "Iapu",
            ],
            [
                "id_cidade" => 2577,
                "id_estado" => 31,
                "nome" => "Ibertioga",
            ],
            [
                "id_cidade" => 2578,
                "id_estado" => 31,
                "nome" => "Ibiá",
            ],
            [
                "id_cidade" => 2579,
                "id_estado" => 31,
                "nome" => "Ibiaí",
            ],
            [
                "id_cidade" => 2580,
                "id_estado" => 31,
                "nome" => "Ibiracatu",
            ],
            [
                "id_cidade" => 2581,
                "id_estado" => 31,
                "nome" => "Ibiraci",
            ],
            [
                "id_cidade" => 2582,
                "id_estado" => 31,
                "nome" => "Ibirité",
            ],
            [
                "id_cidade" => 2583,
                "id_estado" => 31,
                "nome" => "Ibitiúra de Minas",
            ],
            [
                "id_cidade" => 2584,
                "id_estado" => 31,
                "nome" => "Ibituruna",
            ],
            [
                "id_cidade" => 2585,
                "id_estado" => 31,
                "nome" => "Icaraí de Minas",
            ],
            [
                "id_cidade" => 2586,
                "id_estado" => 31,
                "nome" => "Igarapé",
            ],
            [
                "id_cidade" => 2587,
                "id_estado" => 31,
                "nome" => "Igaratinga",
            ],
            [
                "id_cidade" => 2588,
                "id_estado" => 31,
                "nome" => "Iguatama",
            ],
            [
                "id_cidade" => 2589,
                "id_estado" => 31,
                "nome" => "Ijaci",
            ],
            [
                "id_cidade" => 2590,
                "id_estado" => 31,
                "nome" => "Ilicínea",
            ],
            [
                "id_cidade" => 2591,
                "id_estado" => 31,
                "nome" => "Imbé de Minas",
            ],
            [
                "id_cidade" => 2592,
                "id_estado" => 31,
                "nome" => "Inconfidentes",
            ],
            [
                "id_cidade" => 2593,
                "id_estado" => 31,
                "nome" => "Indaiabira",
            ],
            [
                "id_cidade" => 2594,
                "id_estado" => 31,
                "nome" => "Indianópolis",
            ],
            [
                "id_cidade" => 2595,
                "id_estado" => 31,
                "nome" => "Ingaí",
            ],
            [
                "id_cidade" => 2596,
                "id_estado" => 31,
                "nome" => "Inhapim",
            ],
            [
                "id_cidade" => 2597,
                "id_estado" => 31,
                "nome" => "Inhaúma",
            ],
            [
                "id_cidade" => 2598,
                "id_estado" => 31,
                "nome" => "Inimutaba",
            ],
            [
                "id_cidade" => 2599,
                "id_estado" => 31,
                "nome" => "Ipaba",
            ],
            [
                "id_cidade" => 2600,
                "id_estado" => 31,
                "nome" => "Ipanema",
            ],
            [
                "id_cidade" => 2601,
                "id_estado" => 31,
                "nome" => "Ipatinga",
            ],
            [
                "id_cidade" => 2602,
                "id_estado" => 31,
                "nome" => "Ipiaçu",
            ],
            [
                "id_cidade" => 2603,
                "id_estado" => 31,
                "nome" => "Ipuiúna",
            ],
            [
                "id_cidade" => 2604,
                "id_estado" => 31,
                "nome" => "Iraí de Minas",
            ],
            [
                "id_cidade" => 2605,
                "id_estado" => 31,
                "nome" => "Itabira",
            ],
            [
                "id_cidade" => 2606,
                "id_estado" => 31,
                "nome" => "Itabirinha",
            ],
            [
                "id_cidade" => 2607,
                "id_estado" => 31,
                "nome" => "Itabirito",
            ],
            [
                "id_cidade" => 2608,
                "id_estado" => 31,
                "nome" => "Itacambira",
            ],
            [
                "id_cidade" => 2609,
                "id_estado" => 31,
                "nome" => "Itacarambi",
            ],
            [
                "id_cidade" => 2610,
                "id_estado" => 31,
                "nome" => "Itaguara",
            ],
            [
                "id_cidade" => 2611,
                "id_estado" => 31,
                "nome" => "Itaipé",
            ],
            [
                "id_cidade" => 2612,
                "id_estado" => 31,
                "nome" => "Itajubá",
            ],
            [
                "id_cidade" => 2613,
                "id_estado" => 31,
                "nome" => "Itamarandiba",
            ],
            [
                "id_cidade" => 2614,
                "id_estado" => 31,
                "nome" => "Itamarati de Minas",
            ],
            [
                "id_cidade" => 2615,
                "id_estado" => 31,
                "nome" => "Itambacuri",
            ],
            [
                "id_cidade" => 2616,
                "id_estado" => 31,
                "nome" => "Itambé do Mato Dentro",
            ],
            [
                "id_cidade" => 2617,
                "id_estado" => 31,
                "nome" => "Itamogi",
            ],
            [
                "id_cidade" => 2618,
                "id_estado" => 31,
                "nome" => "Itamonte",
            ],
            [
                "id_cidade" => 2619,
                "id_estado" => 31,
                "nome" => "Itanhandu",
            ],
            [
                "id_cidade" => 2620,
                "id_estado" => 31,
                "nome" => "Itanhomi",
            ],
            [
                "id_cidade" => 2621,
                "id_estado" => 31,
                "nome" => "Itaobim",
            ],
            [
                "id_cidade" => 2622,
                "id_estado" => 31,
                "nome" => "Itapagipe",
            ],
            [
                "id_cidade" => 2623,
                "id_estado" => 31,
                "nome" => "Itapecerica",
            ],
            [
                "id_cidade" => 2624,
                "id_estado" => 31,
                "nome" => "Itapeva",
            ],
            [
                "id_cidade" => 2625,
                "id_estado" => 31,
                "nome" => "Itatiaiuçu",
            ],
            [
                "id_cidade" => 2626,
                "id_estado" => 31,
                "nome" => "Itaú de Minas",
            ],
            [
                "id_cidade" => 2627,
                "id_estado" => 31,
                "nome" => "Itaúna",
            ],
            [
                "id_cidade" => 2628,
                "id_estado" => 31,
                "nome" => "Itaverava",
            ],
            [
                "id_cidade" => 2629,
                "id_estado" => 31,
                "nome" => "Itinga",
            ],
            [
                "id_cidade" => 2630,
                "id_estado" => 31,
                "nome" => "Itueta",
            ],
            [
                "id_cidade" => 2631,
                "id_estado" => 31,
                "nome" => "Ituiutaba",
            ],
            [
                "id_cidade" => 2632,
                "id_estado" => 31,
                "nome" => "Itumirim",
            ],
            [
                "id_cidade" => 2633,
                "id_estado" => 31,
                "nome" => "Iturama",
            ],
            [
                "id_cidade" => 2634,
                "id_estado" => 31,
                "nome" => "Itutinga",
            ],
            [
                "id_cidade" => 2635,
                "id_estado" => 31,
                "nome" => "Jaboticatubas",
            ],
            [
                "id_cidade" => 2636,
                "id_estado" => 31,
                "nome" => "Jacinto",
            ],
            [
                "id_cidade" => 2637,
                "id_estado" => 31,
                "nome" => "Jacuí",
            ],
            [
                "id_cidade" => 2638,
                "id_estado" => 31,
                "nome" => "Jacutinga",
            ],
            [
                "id_cidade" => 2639,
                "id_estado" => 31,
                "nome" => "Jaguaraçu",
            ],
            [
                "id_cidade" => 2640,
                "id_estado" => 31,
                "nome" => "Jaíba",
            ],
            [
                "id_cidade" => 2641,
                "id_estado" => 31,
                "nome" => "Jampruca",
            ],
            [
                "id_cidade" => 2642,
                "id_estado" => 31,
                "nome" => "Janaúba",
            ],
            [
                "id_cidade" => 2643,
                "id_estado" => 31,
                "nome" => "Januária",
            ],
            [
                "id_cidade" => 2644,
                "id_estado" => 31,
                "nome" => "Japaraíba",
            ],
            [
                "id_cidade" => 2645,
                "id_estado" => 31,
                "nome" => "Japonvar",
            ],
            [
                "id_cidade" => 2646,
                "id_estado" => 31,
                "nome" => "Jeceaba",
            ],
            [
                "id_cidade" => 2647,
                "id_estado" => 31,
                "nome" => "Jenipapo de Minas",
            ],
            [
                "id_cidade" => 2648,
                "id_estado" => 31,
                "nome" => "Jequeri",
            ],
            [
                "id_cidade" => 2649,
                "id_estado" => 31,
                "nome" => "Jequitaí",
            ],
            [
                "id_cidade" => 2650,
                "id_estado" => 31,
                "nome" => "Jequitibá",
            ],
            [
                "id_cidade" => 2651,
                "id_estado" => 31,
                "nome" => "Jequitinhonha",
            ],
            [
                "id_cidade" => 2652,
                "id_estado" => 31,
                "nome" => "Jesuânia",
            ],
            [
                "id_cidade" => 2653,
                "id_estado" => 31,
                "nome" => "Joaíma",
            ],
            [
                "id_cidade" => 2654,
                "id_estado" => 31,
                "nome" => "Joanésia",
            ],
            [
                "id_cidade" => 2655,
                "id_estado" => 31,
                "nome" => "João Monlevade",
            ],
            [
                "id_cidade" => 2656,
                "id_estado" => 31,
                "nome" => "João Pinheiro",
            ],
            [
                "id_cidade" => 2657,
                "id_estado" => 31,
                "nome" => "Joaquim Felício",
            ],
            [
                "id_cidade" => 2658,
                "id_estado" => 31,
                "nome" => "Jordânia",
            ],
            [
                "id_cidade" => 2659,
                "id_estado" => 31,
                "nome" => "José Gonçalves de Minas",
            ],
            [
                "id_cidade" => 2660,
                "id_estado" => 31,
                "nome" => "José Raydan",
            ],
            [
                "id_cidade" => 2661,
                "id_estado" => 31,
                "nome" => "Josenópolis",
            ],
            [
                "id_cidade" => 2662,
                "id_estado" => 31,
                "nome" => "Juatuba",
            ],
            [
                "id_cidade" => 2663,
                "id_estado" => 31,
                "nome" => "Juiz de Fora",
            ],
            [
                "id_cidade" => 2664,
                "id_estado" => 31,
                "nome" => "Juramento",
            ],
            [
                "id_cidade" => 2665,
                "id_estado" => 31,
                "nome" => "Juruaia",
            ],
            [
                "id_cidade" => 2666,
                "id_estado" => 31,
                "nome" => "Juvenília",
            ],
            [
                "id_cidade" => 2667,
                "id_estado" => 31,
                "nome" => "Ladainha",
            ],
            [
                "id_cidade" => 2668,
                "id_estado" => 31,
                "nome" => "Lagamar",
            ],
            [
                "id_cidade" => 2669,
                "id_estado" => 31,
                "nome" => "Lagoa da Prata",
            ],
            [
                "id_cidade" => 2670,
                "id_estado" => 31,
                "nome" => "Lagoa dos Patos",
            ],
            [
                "id_cidade" => 2671,
                "id_estado" => 31,
                "nome" => "Lagoa Dourada",
            ],
            [
                "id_cidade" => 2672,
                "id_estado" => 31,
                "nome" => "Lagoa Formosa",
            ],
            [
                "id_cidade" => 2673,
                "id_estado" => 31,
                "nome" => "Lagoa Grande",
            ],
            [
                "id_cidade" => 2674,
                "id_estado" => 31,
                "nome" => "Lagoa Santa",
            ],
            [
                "id_cidade" => 2675,
                "id_estado" => 31,
                "nome" => "Lajinha",
            ],
            [
                "id_cidade" => 2676,
                "id_estado" => 31,
                "nome" => "Lambari",
            ],
            [
                "id_cidade" => 2677,
                "id_estado" => 31,
                "nome" => "Lamim",
            ],
            [
                "id_cidade" => 2678,
                "id_estado" => 31,
                "nome" => "Laranjal",
            ],
            [
                "id_cidade" => 2679,
                "id_estado" => 31,
                "nome" => "Lassance",
            ],
            [
                "id_cidade" => 2680,
                "id_estado" => 31,
                "nome" => "Lavras",
            ],
            [
                "id_cidade" => 2681,
                "id_estado" => 31,
                "nome" => "Leandro Ferreira",
            ],
            [
                "id_cidade" => 2682,
                "id_estado" => 31,
                "nome" => "Leme do Prado",
            ],
            [
                "id_cidade" => 2683,
                "id_estado" => 31,
                "nome" => "Leopoldina",
            ],
            [
                "id_cidade" => 2684,
                "id_estado" => 31,
                "nome" => "Liberdade",
            ],
            [
                "id_cidade" => 2685,
                "id_estado" => 31,
                "nome" => "Lima Duarte",
            ],
            [
                "id_cidade" => 2686,
                "id_estado" => 31,
                "nome" => "Limeira do Oeste",
            ],
            [
                "id_cidade" => 2687,
                "id_estado" => 31,
                "nome" => "Lontra",
            ],
            [
                "id_cidade" => 2688,
                "id_estado" => 31,
                "nome" => "Luisburgo",
            ],
            [
                "id_cidade" => 2689,
                "id_estado" => 31,
                "nome" => "Luislândia",
            ],
            [
                "id_cidade" => 2690,
                "id_estado" => 31,
                "nome" => "Luminárias",
            ],
            [
                "id_cidade" => 2691,
                "id_estado" => 31,
                "nome" => "Luz",
            ],
            [
                "id_cidade" => 2692,
                "id_estado" => 31,
                "nome" => "Machacalis",
            ],
            [
                "id_cidade" => 2693,
                "id_estado" => 31,
                "nome" => "Machado",
            ],
            [
                "id_cidade" => 2694,
                "id_estado" => 31,
                "nome" => "Madre de Deus de Minas",
            ],
            [
                "id_cidade" => 2695,
                "id_estado" => 31,
                "nome" => "Malacacheta",
            ],
            [
                "id_cidade" => 2696,
                "id_estado" => 31,
                "nome" => "Mamonas",
            ],
            [
                "id_cidade" => 2697,
                "id_estado" => 31,
                "nome" => "Manga",
            ],
            [
                "id_cidade" => 2698,
                "id_estado" => 31,
                "nome" => "Manhuaçu",
            ],
            [
                "id_cidade" => 2699,
                "id_estado" => 31,
                "nome" => "Manhumirim",
            ],
            [
                "id_cidade" => 2700,
                "id_estado" => 31,
                "nome" => "Mantena",
            ],
            [
                "id_cidade" => 2701,
                "id_estado" => 31,
                "nome" => "Mar de Espanha",
            ],
            [
                "id_cidade" => 2702,
                "id_estado" => 31,
                "nome" => "Maravilhas",
            ],
            [
                "id_cidade" => 2703,
                "id_estado" => 31,
                "nome" => "Maria da Fé",
            ],
            [
                "id_cidade" => 2704,
                "id_estado" => 31,
                "nome" => "Mariana",
            ],
            [
                "id_cidade" => 2705,
                "id_estado" => 31,
                "nome" => "Marilac",
            ],
            [
                "id_cidade" => 2706,
                "id_estado" => 31,
                "nome" => "Mário Campos",
            ],
            [
                "id_cidade" => 2707,
                "id_estado" => 31,
                "nome" => "Maripá de Minas",
            ],
            [
                "id_cidade" => 2708,
                "id_estado" => 31,
                "nome" => "Marliéria",
            ],
            [
                "id_cidade" => 2709,
                "id_estado" => 31,
                "nome" => "Marmelópolis",
            ],
            [
                "id_cidade" => 2710,
                "id_estado" => 31,
                "nome" => "Martinho Campos",
            ],
            [
                "id_cidade" => 2711,
                "id_estado" => 31,
                "nome" => "Martins Soares",
            ],
            [
                "id_cidade" => 2712,
                "id_estado" => 31,
                "nome" => "Mata Verde",
            ],
            [
                "id_cidade" => 2713,
                "id_estado" => 31,
                "nome" => "Materlândia",
            ],
            [
                "id_cidade" => 2714,
                "id_estado" => 31,
                "nome" => "Mateus Leme",
            ],
            [
                "id_cidade" => 2715,
                "id_estado" => 31,
                "nome" => "Mathias Lobato",
            ],
            [
                "id_cidade" => 2716,
                "id_estado" => 31,
                "nome" => "Matias Barbosa",
            ],
            [
                "id_cidade" => 2717,
                "id_estado" => 31,
                "nome" => "Matias Cardoso",
            ],
            [
                "id_cidade" => 2718,
                "id_estado" => 31,
                "nome" => "Matipó",
            ],
            [
                "id_cidade" => 2719,
                "id_estado" => 31,
                "nome" => "Mato Verde",
            ],
            [
                "id_cidade" => 2720,
                "id_estado" => 31,
                "nome" => "Matozinhos",
            ],
            [
                "id_cidade" => 2721,
                "id_estado" => 31,
                "nome" => "Matutina",
            ],
            [
                "id_cidade" => 2722,
                "id_estado" => 31,
                "nome" => "Medeiros",
            ],
            [
                "id_cidade" => 2723,
                "id_estado" => 31,
                "nome" => "Medina",
            ],
            [
                "id_cidade" => 2724,
                "id_estado" => 31,
                "nome" => "Mendes Pimentel",
            ],
            [
                "id_cidade" => 2725,
                "id_estado" => 31,
                "nome" => "Mercês",
            ],
            [
                "id_cidade" => 2726,
                "id_estado" => 31,
                "nome" => "Mesquita",
            ],
            [
                "id_cidade" => 2727,
                "id_estado" => 31,
                "nome" => "Minas Novas",
            ],
            [
                "id_cidade" => 2728,
                "id_estado" => 31,
                "nome" => "Minduri",
            ],
            [
                "id_cidade" => 2729,
                "id_estado" => 31,
                "nome" => "Mirabela",
            ],
            [
                "id_cidade" => 2730,
                "id_estado" => 31,
                "nome" => "Miradouro",
            ],
            [
                "id_cidade" => 2731,
                "id_estado" => 31,
                "nome" => "Miraí",
            ],
            [
                "id_cidade" => 2732,
                "id_estado" => 31,
                "nome" => "Miravânia",
            ],
            [
                "id_cidade" => 2733,
                "id_estado" => 31,
                "nome" => "Moeda",
            ],
            [
                "id_cidade" => 2734,
                "id_estado" => 31,
                "nome" => "Moema",
            ],
            [
                "id_cidade" => 2735,
                "id_estado" => 31,
                "nome" => "Monjolos",
            ],
            [
                "id_cidade" => 2736,
                "id_estado" => 31,
                "nome" => "Monsenhor Paulo",
            ],
            [
                "id_cidade" => 2737,
                "id_estado" => 31,
                "nome" => "Montalvânia",
            ],
            [
                "id_cidade" => 2738,
                "id_estado" => 31,
                "nome" => "Monte Alegre de Minas",
            ],
            [
                "id_cidade" => 2739,
                "id_estado" => 31,
                "nome" => "Monte Azul",
            ],
            [
                "id_cidade" => 2740,
                "id_estado" => 31,
                "nome" => "Monte Belo",
            ],
            [
                "id_cidade" => 2741,
                "id_estado" => 31,
                "nome" => "Monte Carmelo",
            ],
            [
                "id_cidade" => 2742,
                "id_estado" => 31,
                "nome" => "Monte Formoso",
            ],
            [
                "id_cidade" => 2743,
                "id_estado" => 31,
                "nome" => "Monte Santo de Minas",
            ],
            [
                "id_cidade" => 2744,
                "id_estado" => 31,
                "nome" => "Monte Sião",
            ],
            [
                "id_cidade" => 2745,
                "id_estado" => 31,
                "nome" => "Montes Claros",
            ],
            [
                "id_cidade" => 2746,
                "id_estado" => 31,
                "nome" => "Montezuma",
            ],
            [
                "id_cidade" => 2747,
                "id_estado" => 31,
                "nome" => "Morada Nova de Minas",
            ],
            [
                "id_cidade" => 2748,
                "id_estado" => 31,
                "nome" => "Morro da Garça",
            ],
            [
                "id_cidade" => 2749,
                "id_estado" => 31,
                "nome" => "Morro do Pilar",
            ],
            [
                "id_cidade" => 2750,
                "id_estado" => 31,
                "nome" => "Munhoz",
            ],
            [
                "id_cidade" => 2751,
                "id_estado" => 31,
                "nome" => "Muriaé",
            ],
            [
                "id_cidade" => 2752,
                "id_estado" => 31,
                "nome" => "Mutum",
            ],
            [
                "id_cidade" => 2753,
                "id_estado" => 31,
                "nome" => "Muzambinho",
            ],
            [
                "id_cidade" => 2754,
                "id_estado" => 31,
                "nome" => "Nacip Raydan",
            ],
            [
                "id_cidade" => 2755,
                "id_estado" => 31,
                "nome" => "Nanuque",
            ],
            [
                "id_cidade" => 2756,
                "id_estado" => 31,
                "nome" => "Naque",
            ],
            [
                "id_cidade" => 2757,
                "id_estado" => 31,
                "nome" => "Natalândia",
            ],
            [
                "id_cidade" => 2758,
                "id_estado" => 31,
                "nome" => "Natércia",
            ],
            [
                "id_cidade" => 2759,
                "id_estado" => 31,
                "nome" => "Nazareno",
            ],
            [
                "id_cidade" => 2760,
                "id_estado" => 31,
                "nome" => "Nepomuceno",
            ],
            [
                "id_cidade" => 2761,
                "id_estado" => 31,
                "nome" => "Ninheira",
            ],
            [
                "id_cidade" => 2762,
                "id_estado" => 31,
                "nome" => "Nova Belém",
            ],
            [
                "id_cidade" => 2763,
                "id_estado" => 31,
                "nome" => "Nova Era",
            ],
            [
                "id_cidade" => 2764,
                "id_estado" => 31,
                "nome" => "Nova Lima",
            ],
            [
                "id_cidade" => 2765,
                "id_estado" => 31,
                "nome" => "Nova Módica",
            ],
            [
                "id_cidade" => 2766,
                "id_estado" => 31,
                "nome" => "Nova Ponte",
            ],
            [
                "id_cidade" => 2767,
                "id_estado" => 31,
                "nome" => "Nova Porteirinha",
            ],
            [
                "id_cidade" => 2768,
                "id_estado" => 31,
                "nome" => "Nova Resende",
            ],
            [
                "id_cidade" => 2769,
                "id_estado" => 31,
                "nome" => "Nova Serrana",
            ],
            [
                "id_cidade" => 2770,
                "id_estado" => 31,
                "nome" => "Nova União",
            ],
            [
                "id_cidade" => 2771,
                "id_estado" => 31,
                "nome" => "Novo Cruzeiro",
            ],
            [
                "id_cidade" => 2772,
                "id_estado" => 31,
                "nome" => "Novo Oriente de Minas",
            ],
            [
                "id_cidade" => 2773,
                "id_estado" => 31,
                "nome" => "Novorizonte",
            ],
            [
                "id_cidade" => 2774,
                "id_estado" => 31,
                "nome" => "Olaria",
            ],
            [
                "id_cidade" => 2775,
                "id_estado" => 31,
                "nome" => "Olhos-d'Água",
            ],
            [
                "id_cidade" => 2776,
                "id_estado" => 31,
                "nome" => "Olímpio Noronha",
            ],
            [
                "id_cidade" => 2777,
                "id_estado" => 31,
                "nome" => "Oliveira",
            ],
            [
                "id_cidade" => 2778,
                "id_estado" => 31,
                "nome" => "Oliveira Fortes",
            ],
            [
                "id_cidade" => 2779,
                "id_estado" => 31,
                "nome" => "Onça de Pitangui",
            ],
            [
                "id_cidade" => 2780,
                "id_estado" => 31,
                "nome" => "Oratórios",
            ],
            [
                "id_cidade" => 2781,
                "id_estado" => 31,
                "nome" => "Orizânia",
            ],
            [
                "id_cidade" => 2782,
                "id_estado" => 31,
                "nome" => "Ouro Branco",
            ],
            [
                "id_cidade" => 2783,
                "id_estado" => 31,
                "nome" => "Ouro Fino",
            ],
            [
                "id_cidade" => 2784,
                "id_estado" => 31,
                "nome" => "Ouro Preto",
            ],
            [
                "id_cidade" => 2785,
                "id_estado" => 31,
                "nome" => "Ouro Verde de Minas",
            ],
            [
                "id_cidade" => 2786,
                "id_estado" => 31,
                "nome" => "Padre Carvalho",
            ],
            [
                "id_cidade" => 2787,
                "id_estado" => 31,
                "nome" => "Padre Paraíso",
            ],
            [
                "id_cidade" => 2788,
                "id_estado" => 31,
                "nome" => "Pai Pedro",
            ],
            [
                "id_cidade" => 2789,
                "id_estado" => 31,
                "nome" => "Paineiras",
            ],
            [
                "id_cidade" => 2790,
                "id_estado" => 31,
                "nome" => "Pains",
            ],
            [
                "id_cidade" => 2791,
                "id_estado" => 31,
                "nome" => "Paiva",
            ],
            [
                "id_cidade" => 2792,
                "id_estado" => 31,
                "nome" => "Palma",
            ],
            [
                "id_cidade" => 2793,
                "id_estado" => 31,
                "nome" => "Palmópolis",
            ],
            [
                "id_cidade" => 2794,
                "id_estado" => 31,
                "nome" => "Papagaios",
            ],
            [
                "id_cidade" => 2795,
                "id_estado" => 31,
                "nome" => "Pará de Minas",
            ],
            [
                "id_cidade" => 2796,
                "id_estado" => 31,
                "nome" => "Paracatu",
            ],
            [
                "id_cidade" => 2797,
                "id_estado" => 31,
                "nome" => "Paraguaçu",
            ],
            [
                "id_cidade" => 2798,
                "id_estado" => 31,
                "nome" => "Paraisópolis",
            ],
            [
                "id_cidade" => 2799,
                "id_estado" => 31,
                "nome" => "Paraopeba",
            ],
            [
                "id_cidade" => 2800,
                "id_estado" => 31,
                "nome" => "Passa Quatro",
            ],
            [
                "id_cidade" => 2801,
                "id_estado" => 31,
                "nome" => "Passa Tempo",
            ],
            [
                "id_cidade" => 2802,
                "id_estado" => 31,
                "nome" => "Passa Vinte",
            ],
            [
                "id_cidade" => 2803,
                "id_estado" => 31,
                "nome" => "Passabém",
            ],
            [
                "id_cidade" => 2804,
                "id_estado" => 31,
                "nome" => "Passos",
            ],
            [
                "id_cidade" => 2805,
                "id_estado" => 31,
                "nome" => "Patis",
            ],
            [
                "id_cidade" => 2806,
                "id_estado" => 31,
                "nome" => "Patos de Minas",
            ],
            [
                "id_cidade" => 2807,
                "id_estado" => 31,
                "nome" => "Patrocínio",
            ],
            [
                "id_cidade" => 2808,
                "id_estado" => 31,
                "nome" => "Patrocínio do Muriaé",
            ],
            [
                "id_cidade" => 2809,
                "id_estado" => 31,
                "nome" => "Paula Cândido",
            ],
            [
                "id_cidade" => 2810,
                "id_estado" => 31,
                "nome" => "Paulistas",
            ],
            [
                "id_cidade" => 2811,
                "id_estado" => 31,
                "nome" => "Pavão",
            ],
            [
                "id_cidade" => 2812,
                "id_estado" => 31,
                "nome" => "Peçanha",
            ],
            [
                "id_cidade" => 2813,
                "id_estado" => 31,
                "nome" => "Pedra Azul",
            ],
            [
                "id_cidade" => 2814,
                "id_estado" => 31,
                "nome" => "Pedra Bonita",
            ],
            [
                "id_cidade" => 2815,
                "id_estado" => 31,
                "nome" => "Pedra do Anta",
            ],
            [
                "id_cidade" => 2816,
                "id_estado" => 31,
                "nome" => "Pedra do Indaiá",
            ],
            [
                "id_cidade" => 2817,
                "id_estado" => 31,
                "nome" => "Pedra Dourada",
            ],
            [
                "id_cidade" => 2818,
                "id_estado" => 31,
                "nome" => "Pedralva",
            ],
            [
                "id_cidade" => 2819,
                "id_estado" => 31,
                "nome" => "Pedras de Maria da Cruz",
            ],
            [
                "id_cidade" => 2820,
                "id_estado" => 31,
                "nome" => "Pedrinópolis",
            ],
            [
                "id_cidade" => 2821,
                "id_estado" => 31,
                "nome" => "Pedro Leopoldo",
            ],
            [
                "id_cidade" => 2822,
                "id_estado" => 31,
                "nome" => "Pedro Teixeira",
            ],
            [
                "id_cidade" => 2823,
                "id_estado" => 31,
                "nome" => "Pequeri",
            ],
            [
                "id_cidade" => 2824,
                "id_estado" => 31,
                "nome" => "Pequi",
            ],
            [
                "id_cidade" => 2825,
                "id_estado" => 31,
                "nome" => "Perdigão",
            ],
            [
                "id_cidade" => 2826,
                "id_estado" => 31,
                "nome" => "Perdizes",
            ],
            [
                "id_cidade" => 2827,
                "id_estado" => 31,
                "nome" => "Perdões",
            ],
            [
                "id_cidade" => 2828,
                "id_estado" => 31,
                "nome" => "Periquito",
            ],
            [
                "id_cidade" => 2829,
                "id_estado" => 31,
                "nome" => "Pescador",
            ],
            [
                "id_cidade" => 2830,
                "id_estado" => 31,
                "nome" => "Piau",
            ],
            [
                "id_cidade" => 2831,
                "id_estado" => 31,
                "nome" => "Piedade de Caratinga",
            ],
            [
                "id_cidade" => 2832,
                "id_estado" => 31,
                "nome" => "Piedade de Ponte Nova",
            ],
            [
                "id_cidade" => 2833,
                "id_estado" => 31,
                "nome" => "Piedade do Rio Grande",
            ],
            [
                "id_cidade" => 2834,
                "id_estado" => 31,
                "nome" => "Piedade dos Gerais",
            ],
            [
                "id_cidade" => 2835,
                "id_estado" => 31,
                "nome" => "Pimenta",
            ],
            [
                "id_cidade" => 2836,
                "id_estado" => 31,
                "nome" => "Pingo-d'Água",
            ],
            [
                "id_cidade" => 2837,
                "id_estado" => 31,
                "nome" => "Pintópolis",
            ],
            [
                "id_cidade" => 2838,
                "id_estado" => 31,
                "nome" => "Piracema",
            ],
            [
                "id_cidade" => 2839,
                "id_estado" => 31,
                "nome" => "Pirajuba",
            ],
            [
                "id_cidade" => 2840,
                "id_estado" => 31,
                "nome" => "Piranga",
            ],
            [
                "id_cidade" => 2841,
                "id_estado" => 31,
                "nome" => "Piranguçu",
            ],
            [
                "id_cidade" => 2842,
                "id_estado" => 31,
                "nome" => "Piranguinho",
            ],
            [
                "id_cidade" => 2843,
                "id_estado" => 31,
                "nome" => "Pirapetinga",
            ],
            [
                "id_cidade" => 2844,
                "id_estado" => 31,
                "nome" => "Pirapora",
            ],
            [
                "id_cidade" => 2845,
                "id_estado" => 31,
                "nome" => "Piraúba",
            ],
            [
                "id_cidade" => 2846,
                "id_estado" => 31,
                "nome" => "Pitangui",
            ],
            [
                "id_cidade" => 2847,
                "id_estado" => 31,
                "nome" => "Piumhi",
            ],
            [
                "id_cidade" => 2848,
                "id_estado" => 31,
                "nome" => "Planura",
            ],
            [
                "id_cidade" => 2849,
                "id_estado" => 31,
                "nome" => "Poço Fundo",
            ],
            [
                "id_cidade" => 2850,
                "id_estado" => 31,
                "nome" => "Poços de Caldas",
            ],
            [
                "id_cidade" => 2851,
                "id_estado" => 31,
                "nome" => "Pocrane",
            ],
            [
                "id_cidade" => 2852,
                "id_estado" => 31,
                "nome" => "Pompéu",
            ],
            [
                "id_cidade" => 2853,
                "id_estado" => 31,
                "nome" => "Ponte Nova",
            ],
            [
                "id_cidade" => 2854,
                "id_estado" => 31,
                "nome" => "Ponto Chique",
            ],
            [
                "id_cidade" => 2855,
                "id_estado" => 31,
                "nome" => "Ponto dos Volantes",
            ],
            [
                "id_cidade" => 2856,
                "id_estado" => 31,
                "nome" => "Porteirinha",
            ],
            [
                "id_cidade" => 2857,
                "id_estado" => 31,
                "nome" => "Porto Firme",
            ],
            [
                "id_cidade" => 2858,
                "id_estado" => 31,
                "nome" => "Poté",
            ],
            [
                "id_cidade" => 2859,
                "id_estado" => 31,
                "nome" => "Pouso Alegre",
            ],
            [
                "id_cidade" => 2860,
                "id_estado" => 31,
                "nome" => "Pouso Alto",
            ],
            [
                "id_cidade" => 2861,
                "id_estado" => 31,
                "nome" => "Prados",
            ],
            [
                "id_cidade" => 2862,
                "id_estado" => 31,
                "nome" => "Prata",
            ],
            [
                "id_cidade" => 2863,
                "id_estado" => 31,
                "nome" => "Pratápolis",
            ],
            [
                "id_cidade" => 2864,
                "id_estado" => 31,
                "nome" => "Pratinha",
            ],
            [
                "id_cidade" => 2865,
                "id_estado" => 31,
                "nome" => "Presidente Bernardes",
            ],
            [
                "id_cidade" => 2866,
                "id_estado" => 31,
                "nome" => "Presidente Juscelino",
            ],
            [
                "id_cidade" => 2867,
                "id_estado" => 31,
                "nome" => "Presidente Kubitschek",
            ],
            [
                "id_cidade" => 2868,
                "id_estado" => 31,
                "nome" => "Presidente Olegário",
            ],
            [
                "id_cidade" => 2869,
                "id_estado" => 31,
                "nome" => "Prudente de Morais",
            ],
            [
                "id_cidade" => 2870,
                "id_estado" => 31,
                "nome" => "Quartel Geral",
            ],
            [
                "id_cidade" => 2871,
                "id_estado" => 31,
                "nome" => "Queluzito",
            ],
            [
                "id_cidade" => 2872,
                "id_estado" => 31,
                "nome" => "Raposos",
            ],
            [
                "id_cidade" => 2873,
                "id_estado" => 31,
                "nome" => "Raul Soares",
            ],
            [
                "id_cidade" => 2874,
                "id_estado" => 31,
                "nome" => "Recreio",
            ],
            [
                "id_cidade" => 2875,
                "id_estado" => 31,
                "nome" => "Reduto",
            ],
            [
                "id_cidade" => 2876,
                "id_estado" => 31,
                "nome" => "Resende Costa",
            ],
            [
                "id_cidade" => 2877,
                "id_estado" => 31,
                "nome" => "Resplendor",
            ],
            [
                "id_cidade" => 2878,
                "id_estado" => 31,
                "nome" => "Ressaquinha",
            ],
            [
                "id_cidade" => 2879,
                "id_estado" => 31,
                "nome" => "Riachinho",
            ],
            [
                "id_cidade" => 2880,
                "id_estado" => 31,
                "nome" => "Riacho dos Machados",
            ],
            [
                "id_cidade" => 2881,
                "id_estado" => 31,
                "nome" => "Ribeirão das Neves",
            ],
            [
                "id_cidade" => 2882,
                "id_estado" => 31,
                "nome" => "Ribeirão Vermelho",
            ],
            [
                "id_cidade" => 2883,
                "id_estado" => 31,
                "nome" => "Rio Acima",
            ],
            [
                "id_cidade" => 2884,
                "id_estado" => 31,
                "nome" => "Rio Casca",
            ],
            [
                "id_cidade" => 2885,
                "id_estado" => 31,
                "nome" => "Rio do Prado",
            ],
            [
                "id_cidade" => 2886,
                "id_estado" => 31,
                "nome" => "Rio Doce",
            ],
            [
                "id_cidade" => 2887,
                "id_estado" => 31,
                "nome" => "Rio Espera",
            ],
            [
                "id_cidade" => 2888,
                "id_estado" => 31,
                "nome" => "Rio Manso",
            ],
            [
                "id_cidade" => 2889,
                "id_estado" => 31,
                "nome" => "Rio Novo",
            ],
            [
                "id_cidade" => 2890,
                "id_estado" => 31,
                "nome" => "Rio Paranaíba",
            ],
            [
                "id_cidade" => 2891,
                "id_estado" => 31,
                "nome" => "Rio Pardo de Minas",
            ],
            [
                "id_cidade" => 2892,
                "id_estado" => 31,
                "nome" => "Rio Piracicaba",
            ],
            [
                "id_cidade" => 2893,
                "id_estado" => 31,
                "nome" => "Rio Pomba",
            ],
            [
                "id_cidade" => 2894,
                "id_estado" => 31,
                "nome" => "Rio Preto",
            ],
            [
                "id_cidade" => 2895,
                "id_estado" => 31,
                "nome" => "Rio Vermelho",
            ],
            [
                "id_cidade" => 2896,
                "id_estado" => 31,
                "nome" => "Ritápolis",
            ],
            [
                "id_cidade" => 2897,
                "id_estado" => 31,
                "nome" => "Rochedo de Minas",
            ],
            [
                "id_cidade" => 2898,
                "id_estado" => 31,
                "nome" => "Rodeiro",
            ],
            [
                "id_cidade" => 2899,
                "id_estado" => 31,
                "nome" => "Romaria",
            ],
            [
                "id_cidade" => 2900,
                "id_estado" => 31,
                "nome" => "Rosário da Limeira",
            ],
            [
                "id_cidade" => 2901,
                "id_estado" => 31,
                "nome" => "Rubelita",
            ],
            [
                "id_cidade" => 2902,
                "id_estado" => 31,
                "nome" => "Rubim",
            ],
            [
                "id_cidade" => 2903,
                "id_estado" => 31,
                "nome" => "Sabará",
            ],
            [
                "id_cidade" => 2904,
                "id_estado" => 31,
                "nome" => "Sabinópolis",
            ],
            [
                "id_cidade" => 2905,
                "id_estado" => 31,
                "nome" => "Sacramento",
            ],
            [
                "id_cidade" => 2906,
                "id_estado" => 31,
                "nome" => "Salinas",
            ],
            [
                "id_cidade" => 2907,
                "id_estado" => 31,
                "nome" => "Salto da Divisa",
            ],
            [
                "id_cidade" => 2908,
                "id_estado" => 31,
                "nome" => "Santa Bárbara",
            ],
            [
                "id_cidade" => 2909,
                "id_estado" => 31,
                "nome" => "Santa Bárbara do Leste",
            ],
            [
                "id_cidade" => 2910,
                "id_estado" => 31,
                "nome" => "Santa Bárbara do Monte Verde",
            ],
            [
                "id_cidade" => 2911,
                "id_estado" => 31,
                "nome" => "Santa Bárbara do Tugúrio",
            ],
            [
                "id_cidade" => 2912,
                "id_estado" => 31,
                "nome" => "Santa Cruz de Minas",
            ],
            [
                "id_cidade" => 2913,
                "id_estado" => 31,
                "nome" => "Santa Cruz de Salinas",
            ],
            [
                "id_cidade" => 2914,
                "id_estado" => 31,
                "nome" => "Santa Cruz do Escalvado",
            ],
            [
                "id_cidade" => 2915,
                "id_estado" => 31,
                "nome" => "Santa Efigênia de Minas",
            ],
            [
                "id_cidade" => 2916,
                "id_estado" => 31,
                "nome" => "Santa Fé de Minas",
            ],
            [
                "id_cidade" => 2917,
                "id_estado" => 31,
                "nome" => "Santa Helena de Minas",
            ],
            [
                "id_cidade" => 2918,
                "id_estado" => 31,
                "nome" => "Santa Juliana",
            ],
            [
                "id_cidade" => 2919,
                "id_estado" => 31,
                "nome" => "Santa Luzia",
            ],
            [
                "id_cidade" => 2920,
                "id_estado" => 31,
                "nome" => "Santa Margarida",
            ],
            [
                "id_cidade" => 2921,
                "id_estado" => 31,
                "nome" => "Santa Maria de Itabira",
            ],
            [
                "id_cidade" => 2922,
                "id_estado" => 31,
                "nome" => "Santa Maria do Salto",
            ],
            [
                "id_cidade" => 2923,
                "id_estado" => 31,
                "nome" => "Santa Maria do Suaçuí",
            ],
            [
                "id_cidade" => 2924,
                "id_estado" => 31,
                "nome" => "Santa Rita de Caldas",
            ],
            [
                "id_cidade" => 2925,
                "id_estado" => 31,
                "nome" => "Santa Rita de Ibitipoca",
            ],
            [
                "id_cidade" => 2926,
                "id_estado" => 31,
                "nome" => "Santa Rita de Jacutinga",
            ],
            [
                "id_cidade" => 2927,
                "id_estado" => 31,
                "nome" => "Santa Rita de Minas",
            ],
            [
                "id_cidade" => 2928,
                "id_estado" => 31,
                "nome" => "Santa Rita do Itueto",
            ],
            [
                "id_cidade" => 2929,
                "id_estado" => 31,
                "nome" => "Santa Rita do Sapucaí",
            ],
            [
                "id_cidade" => 2930,
                "id_estado" => 31,
                "nome" => "Santa Rosa da Serra",
            ],
            [
                "id_cidade" => 2931,
                "id_estado" => 31,
                "nome" => "Santa Vitória",
            ],
            [
                "id_cidade" => 2932,
                "id_estado" => 31,
                "nome" => "Santana da Vargem",
            ],
            [
                "id_cidade" => 2933,
                "id_estado" => 31,
                "nome" => "Santana de Cataguases",
            ],
            [
                "id_cidade" => 2934,
                "id_estado" => 31,
                "nome" => "Santana de Pirapama",
            ],
            [
                "id_cidade" => 2935,
                "id_estado" => 31,
                "nome" => "Santana do Deserto",
            ],
            [
                "id_cidade" => 2936,
                "id_estado" => 31,
                "nome" => "Santana do Garambéu",
            ],
            [
                "id_cidade" => 2937,
                "id_estado" => 31,
                "nome" => "Santana do Jacaré",
            ],
            [
                "id_cidade" => 2938,
                "id_estado" => 31,
                "nome" => "Santana do Manhuaçu",
            ],
            [
                "id_cidade" => 2939,
                "id_estado" => 31,
                "nome" => "Santana do Paraíso",
            ],
            [
                "id_cidade" => 2940,
                "id_estado" => 31,
                "nome" => "Santana do Riacho",
            ],
            [
                "id_cidade" => 2941,
                "id_estado" => 31,
                "nome" => "Santana dos Montes",
            ],
            [
                "id_cidade" => 2942,
                "id_estado" => 31,
                "nome" => "Santo Antônio do Amparo",
            ],
            [
                "id_cidade" => 2943,
                "id_estado" => 31,
                "nome" => "Santo Antônio do Aventureiro",
            ],
            [
                "id_cidade" => 2944,
                "id_estado" => 31,
                "nome" => "Santo Antônio do Grama",
            ],
            [
                "id_cidade" => 2945,
                "id_estado" => 31,
                "nome" => "Santo Antônio do Itambé",
            ],
            [
                "id_cidade" => 2946,
                "id_estado" => 31,
                "nome" => "Santo Antônio do Jacinto",
            ],
            [
                "id_cidade" => 2947,
                "id_estado" => 31,
                "nome" => "Santo Antônio do Monte",
            ],
            [
                "id_cidade" => 2948,
                "id_estado" => 31,
                "nome" => "Santo Antônio do Retiro",
            ],
            [
                "id_cidade" => 2949,
                "id_estado" => 31,
                "nome" => "Santo Antônio do Rio Abaixo",
            ],
            [
                "id_cidade" => 2950,
                "id_estado" => 31,
                "nome" => "Santo Hipólito",
            ],
            [
                "id_cidade" => 2951,
                "id_estado" => 31,
                "nome" => "Santos Dumont",
            ],
            [
                "id_cidade" => 2952,
                "id_estado" => 31,
                "nome" => "São Bento Abade",
            ],
            [
                "id_cidade" => 2953,
                "id_estado" => 31,
                "nome" => "São Brás do Suaçuí",
            ],
            [
                "id_cidade" => 2954,
                "id_estado" => 31,
                "nome" => "São Domingos das Dores",
            ],
            [
                "id_cidade" => 2955,
                "id_estado" => 31,
                "nome" => "São Domingos do Prata",
            ],
            [
                "id_cidade" => 2956,
                "id_estado" => 31,
                "nome" => "São Félix de Minas",
            ],
            [
                "id_cidade" => 2957,
                "id_estado" => 31,
                "nome" => "São Francisco",
            ],
            [
                "id_cidade" => 2958,
                "id_estado" => 31,
                "nome" => "São Francisco de Paula",
            ],
            [
                "id_cidade" => 2959,
                "id_estado" => 31,
                "nome" => "São Francisco de Sales",
            ],
            [
                "id_cidade" => 2960,
                "id_estado" => 31,
                "nome" => "São Francisco do Glória",
            ],
            [
                "id_cidade" => 2961,
                "id_estado" => 31,
                "nome" => "São Geraldo",
            ],
            [
                "id_cidade" => 2962,
                "id_estado" => 31,
                "nome" => "São Geraldo da Piedade",
            ],
            [
                "id_cidade" => 2963,
                "id_estado" => 31,
                "nome" => "São Geraldo do Baixio",
            ],
            [
                "id_cidade" => 2964,
                "id_estado" => 31,
                "nome" => "São Gonçalo do Abaeté",
            ],
            [
                "id_cidade" => 2965,
                "id_estado" => 31,
                "nome" => "São Gonçalo do Pará",
            ],
            [
                "id_cidade" => 2966,
                "id_estado" => 31,
                "nome" => "São Gonçalo do Rio Abaixo",
            ],
            [
                "id_cidade" => 2967,
                "id_estado" => 31,
                "nome" => "São Gonçalo do Rio Preto",
            ],
            [
                "id_cidade" => 2968,
                "id_estado" => 31,
                "nome" => "São Gonçalo do Sapucaí",
            ],
            [
                "id_cidade" => 2969,
                "id_estado" => 31,
                "nome" => "São Gotardo",
            ],
            [
                "id_cidade" => 2970,
                "id_estado" => 31,
                "nome" => "São João Batista do Glória",
            ],
            [
                "id_cidade" => 2971,
                "id_estado" => 31,
                "nome" => "São João da Lagoa",
            ],
            [
                "id_cidade" => 2972,
                "id_estado" => 31,
                "nome" => "São João da Mata",
            ],
            [
                "id_cidade" => 2973,
                "id_estado" => 31,
                "nome" => "São João da Ponte",
            ],
            [
                "id_cidade" => 2974,
                "id_estado" => 31,
                "nome" => "São João das Missões",
            ],
            [
                "id_cidade" => 2975,
                "id_estado" => 31,
                "nome" => "São João del Rei",
            ],
            [
                "id_cidade" => 2976,
                "id_estado" => 31,
                "nome" => "São João do Manhuaçu",
            ],
            [
                "id_cidade" => 2977,
                "id_estado" => 31,
                "nome" => "São João do Manteninha",
            ],
            [
                "id_cidade" => 2978,
                "id_estado" => 31,
                "nome" => "São João do Oriente",
            ],
            [
                "id_cidade" => 2979,
                "id_estado" => 31,
                "nome" => "São João do Pacuí",
            ],
            [
                "id_cidade" => 2980,
                "id_estado" => 31,
                "nome" => "São João do Paraíso",
            ],
            [
                "id_cidade" => 2981,
                "id_estado" => 31,
                "nome" => "São João Evangelista",
            ],
            [
                "id_cidade" => 2982,
                "id_estado" => 31,
                "nome" => "São João Nepomuceno",
            ],
            [
                "id_cidade" => 2983,
                "id_estado" => 31,
                "nome" => "São Joaquim de Bicas",
            ],
            [
                "id_cidade" => 2984,
                "id_estado" => 31,
                "nome" => "São José da Barra",
            ],
            [
                "id_cidade" => 2985,
                "id_estado" => 31,
                "nome" => "São José da Lapa",
            ],
            [
                "id_cidade" => 2986,
                "id_estado" => 31,
                "nome" => "São José da Safira",
            ],
            [
                "id_cidade" => 2987,
                "id_estado" => 31,
                "nome" => "São José da Varginha",
            ],
            [
                "id_cidade" => 2988,
                "id_estado" => 31,
                "nome" => "São José do Alegre",
            ],
            [
                "id_cidade" => 2989,
                "id_estado" => 31,
                "nome" => "São José do Divino",
            ],
            [
                "id_cidade" => 2990,
                "id_estado" => 31,
                "nome" => "São José do Goiabal",
            ],
            [
                "id_cidade" => 2991,
                "id_estado" => 31,
                "nome" => "São José do Jacuri",
            ],
            [
                "id_cidade" => 2992,
                "id_estado" => 31,
                "nome" => "São José do Mantimento",
            ],
            [
                "id_cidade" => 2993,
                "id_estado" => 31,
                "nome" => "São Lourenço",
            ],
            [
                "id_cidade" => 2994,
                "id_estado" => 31,
                "nome" => "São Miguel do Anta",
            ],
            [
                "id_cidade" => 2995,
                "id_estado" => 31,
                "nome" => "São Pedro da União",
            ],
            [
                "id_cidade" => 2996,
                "id_estado" => 31,
                "nome" => "São Pedro do Suaçuí",
            ],
            [
                "id_cidade" => 2997,
                "id_estado" => 31,
                "nome" => "São Pedro dos Ferros",
            ],
            [
                "id_cidade" => 2998,
                "id_estado" => 31,
                "nome" => "São Romão",
            ],
            [
                "id_cidade" => 2999,
                "id_estado" => 31,
                "nome" => "São Roque de Minas",
            ],
            [
                "id_cidade" => 3000,
                "id_estado" => 31,
                "nome" => "São Sebastião da Bela Vista",
            ],
            [
                "id_cidade" => 3001,
                "id_estado" => 31,
                "nome" => "São Sebastião da Vargem Alegre",
            ],
            [
                "id_cidade" => 3002,
                "id_estado" => 31,
                "nome" => "São Sebastião do Anta",
            ],
            [
                "id_cidade" => 3003,
                "id_estado" => 31,
                "nome" => "São Sebastião do Maranhão",
            ],
            [
                "id_cidade" => 3004,
                "id_estado" => 31,
                "nome" => "São Sebastião do Oeste",
            ],
            [
                "id_cidade" => 3005,
                "id_estado" => 31,
                "nome" => "São Sebastião do Paraíso",
            ],
            [
                "id_cidade" => 3006,
                "id_estado" => 31,
                "nome" => "São Sebastião do Rio Preto",
            ],
            [
                "id_cidade" => 3007,
                "id_estado" => 31,
                "nome" => "São Sebastião do Rio Verde",
            ],
            [
                "id_cidade" => 3008,
                "id_estado" => 31,
                "nome" => "São Tiago",
            ],
            [
                "id_cidade" => 3009,
                "id_estado" => 31,
                "nome" => "São Tomás de Aquino",
            ],
            [
                "id_cidade" => 3010,
                "id_estado" => 31,
                "nome" => "São Tomé das Letras",
            ],
            [
                "id_cidade" => 3011,
                "id_estado" => 31,
                "nome" => "São Vicente de Minas",
            ],
            [
                "id_cidade" => 3012,
                "id_estado" => 31,
                "nome" => "Sapucaí-Mirim",
            ],
            [
                "id_cidade" => 3013,
                "id_estado" => 31,
                "nome" => "Sardoá",
            ],
            [
                "id_cidade" => 3014,
                "id_estado" => 31,
                "nome" => "Sarzedo",
            ],
            [
                "id_cidade" => 3015,
                "id_estado" => 31,
                "nome" => "Sem-Peixe",
            ],
            [
                "id_cidade" => 3016,
                "id_estado" => 31,
                "nome" => "Senador Amaral",
            ],
            [
                "id_cidade" => 3017,
                "id_estado" => 31,
                "nome" => "Senador Cortes",
            ],
            [
                "id_cidade" => 3018,
                "id_estado" => 31,
                "nome" => "Senador Firmino",
            ],
            [
                "id_cidade" => 3019,
                "id_estado" => 31,
                "nome" => "Senador José Bento",
            ],
            [
                "id_cidade" => 3020,
                "id_estado" => 31,
                "nome" => "Senador Modestino Gonçalves",
            ],
            [
                "id_cidade" => 3021,
                "id_estado" => 31,
                "nome" => "Senhora de Oliveira",
            ],
            [
                "id_cidade" => 3022,
                "id_estado" => 31,
                "nome" => "Senhora do Porto",
            ],
            [
                "id_cidade" => 3023,
                "id_estado" => 31,
                "nome" => "Senhora dos Remédios",
            ],
            [
                "id_cidade" => 3024,
                "id_estado" => 31,
                "nome" => "Sericita",
            ],
            [
                "id_cidade" => 3025,
                "id_estado" => 31,
                "nome" => "Seritinga",
            ],
            [
                "id_cidade" => 3026,
                "id_estado" => 31,
                "nome" => "Serra Azul de Minas",
            ],
            [
                "id_cidade" => 3027,
                "id_estado" => 31,
                "nome" => "Serra da Saudade",
            ],
            [
                "id_cidade" => 3028,
                "id_estado" => 31,
                "nome" => "Serra do Salitre",
            ],
            [
                "id_cidade" => 3029,
                "id_estado" => 31,
                "nome" => "Serra dos Aimorés",
            ],
            [
                "id_cidade" => 3030,
                "id_estado" => 31,
                "nome" => "Serrania",
            ],
            [
                "id_cidade" => 3031,
                "id_estado" => 31,
                "nome" => "Serranópolis de Minas",
            ],
            [
                "id_cidade" => 3032,
                "id_estado" => 31,
                "nome" => "Serranos",
            ],
            [
                "id_cidade" => 3033,
                "id_estado" => 31,
                "nome" => "Serro",
            ],
            [
                "id_cidade" => 3034,
                "id_estado" => 31,
                "nome" => "Sete Lagoas",
            ],
            [
                "id_cidade" => 3035,
                "id_estado" => 31,
                "nome" => "Setubinha",
            ],
            [
                "id_cidade" => 3036,
                "id_estado" => 31,
                "nome" => "Silveirânia",
            ],
            [
                "id_cidade" => 3037,
                "id_estado" => 31,
                "nome" => "Silvianópolis",
            ],
            [
                "id_cidade" => 3038,
                "id_estado" => 31,
                "nome" => "Simão Pereira",
            ],
            [
                "id_cidade" => 3039,
                "id_estado" => 31,
                "nome" => "Simonésia",
            ],
            [
                "id_cidade" => 3040,
                "id_estado" => 31,
                "nome" => "Sobrália",
            ],
            [
                "id_cidade" => 3041,
                "id_estado" => 31,
                "nome" => "Soledade de Minas",
            ],
            [
                "id_cidade" => 3042,
                "id_estado" => 31,
                "nome" => "Tabuleiro",
            ],
            [
                "id_cidade" => 3043,
                "id_estado" => 31,
                "nome" => "Taiobeiras",
            ],
            [
                "id_cidade" => 3044,
                "id_estado" => 31,
                "nome" => "Taparuba",
            ],
            [
                "id_cidade" => 3045,
                "id_estado" => 31,
                "nome" => "Tapira",
            ],
            [
                "id_cidade" => 3046,
                "id_estado" => 31,
                "nome" => "Tapiraí",
            ],
            [
                "id_cidade" => 3047,
                "id_estado" => 31,
                "nome" => "Taquaraçu de Minas",
            ],
            [
                "id_cidade" => 3048,
                "id_estado" => 31,
                "nome" => "Tarumirim",
            ],
            [
                "id_cidade" => 3049,
                "id_estado" => 31,
                "nome" => "Teixeiras",
            ],
            [
                "id_cidade" => 3050,
                "id_estado" => 31,
                "nome" => "Teófilo Otoni",
            ],
            [
                "id_cidade" => 3051,
                "id_estado" => 31,
                "nome" => "Timóteo",
            ],
            [
                "id_cidade" => 3052,
                "id_estado" => 31,
                "nome" => "Tiradentes",
            ],
            [
                "id_cidade" => 3053,
                "id_estado" => 31,
                "nome" => "Tiros",
            ],
            [
                "id_cidade" => 3054,
                "id_estado" => 31,
                "nome" => "Tocantins",
            ],
            [
                "id_cidade" => 3055,
                "id_estado" => 31,
                "nome" => "Tocos do Moji",
            ],
            [
                "id_cidade" => 3056,
                "id_estado" => 31,
                "nome" => "Toledo",
            ],
            [
                "id_cidade" => 3057,
                "id_estado" => 31,
                "nome" => "Tombos",
            ],
            [
                "id_cidade" => 3058,
                "id_estado" => 31,
                "nome" => "Três Corações",
            ],
            [
                "id_cidade" => 3059,
                "id_estado" => 31,
                "nome" => "Três Marias",
            ],
            [
                "id_cidade" => 3060,
                "id_estado" => 31,
                "nome" => "Três Pontas",
            ],
            [
                "id_cidade" => 3061,
                "id_estado" => 31,
                "nome" => "Tumiritinga",
            ],
            [
                "id_cidade" => 3062,
                "id_estado" => 31,
                "nome" => "Tupaciguara",
            ],
            [
                "id_cidade" => 3063,
                "id_estado" => 31,
                "nome" => "Turmalina",
            ],
            [
                "id_cidade" => 3064,
                "id_estado" => 31,
                "nome" => "Turvolândia",
            ],
            [
                "id_cidade" => 3065,
                "id_estado" => 31,
                "nome" => "Ubá",
            ],
            [
                "id_cidade" => 3066,
                "id_estado" => 31,
                "nome" => "Ubaí",
            ],
            [
                "id_cidade" => 3067,
                "id_estado" => 31,
                "nome" => "Ubaporanga",
            ],
            [
                "id_cidade" => 3068,
                "id_estado" => 31,
                "nome" => "Uberaba",
            ],
            [
                "id_cidade" => 3069,
                "id_estado" => 31,
                "nome" => "Uberlândia",
            ],
            [
                "id_cidade" => 3070,
                "id_estado" => 31,
                "nome" => "Umburatiba",
            ],
            [
                "id_cidade" => 3071,
                "id_estado" => 31,
                "nome" => "Unaí",
            ],
            [
                "id_cidade" => 3072,
                "id_estado" => 31,
                "nome" => "União de Minas",
            ],
            [
                "id_cidade" => 3073,
                "id_estado" => 31,
                "nome" => "Uruana de Minas",
            ],
            [
                "id_cidade" => 3074,
                "id_estado" => 31,
                "nome" => "Urucânia",
            ],
            [
                "id_cidade" => 3075,
                "id_estado" => 31,
                "nome" => "Urucuia",
            ],
            [
                "id_cidade" => 3076,
                "id_estado" => 31,
                "nome" => "Vargem Alegre",
            ],
            [
                "id_cidade" => 3077,
                "id_estado" => 31,
                "nome" => "Vargem Bonita",
            ],
            [
                "id_cidade" => 3078,
                "id_estado" => 31,
                "nome" => "Vargem Grande do Rio Pardo",
            ],
            [
                "id_cidade" => 3079,
                "id_estado" => 31,
                "nome" => "Varginha",
            ],
            [
                "id_cidade" => 3080,
                "id_estado" => 31,
                "nome" => "Varjão de Minas",
            ],
            [
                "id_cidade" => 3081,
                "id_estado" => 31,
                "nome" => "Várzea da Palma",
            ],
            [
                "id_cidade" => 3082,
                "id_estado" => 31,
                "nome" => "Varzelândia",
            ],
            [
                "id_cidade" => 3083,
                "id_estado" => 31,
                "nome" => "Vazante",
            ],
            [
                "id_cidade" => 3084,
                "id_estado" => 31,
                "nome" => "Verdelândia",
            ],
            [
                "id_cidade" => 3085,
                "id_estado" => 31,
                "nome" => "Veredinha",
            ],
            [
                "id_cidade" => 3086,
                "id_estado" => 31,
                "nome" => "Veríssimo",
            ],
            [
                "id_cidade" => 3087,
                "id_estado" => 31,
                "nome" => "Vermelho Novo",
            ],
            [
                "id_cidade" => 3088,
                "id_estado" => 31,
                "nome" => "Vespasiano",
            ],
            [
                "id_cidade" => 3089,
                "id_estado" => 31,
                "nome" => "Viçosa",
            ],
            [
                "id_cidade" => 3090,
                "id_estado" => 31,
                "nome" => "Vieiras",
            ],
            [
                "id_cidade" => 3091,
                "id_estado" => 31,
                "nome" => "Virgem da Lapa",
            ],
            [
                "id_cidade" => 3092,
                "id_estado" => 31,
                "nome" => "Virgínia",
            ],
            [
                "id_cidade" => 3093,
                "id_estado" => 31,
                "nome" => "Virginópolis",
            ],
            [
                "id_cidade" => 3094,
                "id_estado" => 31,
                "nome" => "Virgolândia",
            ],
            [
                "id_cidade" => 3095,
                "id_estado" => 31,
                "nome" => "Visconde do Rio Branco",
            ],
            [
                "id_cidade" => 3096,
                "id_estado" => 31,
                "nome" => "Volta Grande",
            ],
            [
                "id_cidade" => 3097,
                "id_estado" => 31,
                "nome" => "Wenceslau Braz",
            ],
            [
                "id_cidade" => 3098,
                "id_estado" => 32,
                "nome" => "Afonso Cláudio",
            ],
            [
                "id_cidade" => 3099,
                "id_estado" => 32,
                "nome" => "Água Doce do Norte",
            ],
            [
                "id_cidade" => 3100,
                "id_estado" => 32,
                "nome" => "Águia Branca",
            ],
            [
                "id_cidade" => 3101,
                "id_estado" => 32,
                "nome" => "Alegre",
            ],
            [
                "id_cidade" => 3102,
                "id_estado" => 32,
                "nome" => "Alfredo Chaves",
            ],
            [
                "id_cidade" => 3103,
                "id_estado" => 32,
                "nome" => "Alto Rio Novo",
            ],
            [
                "id_cidade" => 3104,
                "id_estado" => 32,
                "nome" => "Anchieta",
            ],
            [
                "id_cidade" => 3105,
                "id_estado" => 32,
                "nome" => "Apiacá",
            ],
            [
                "id_cidade" => 3106,
                "id_estado" => 32,
                "nome" => "Aracruz",
            ],
            [
                "id_cidade" => 3107,
                "id_estado" => 32,
                "nome" => "Atílio Vivácqua",
            ],
            [
                "id_cidade" => 3108,
                "id_estado" => 32,
                "nome" => "Baixo Guandu",
            ],
            [
                "id_cidade" => 3109,
                "id_estado" => 32,
                "nome" => "Barra de São Francisco",
            ],
            [
                "id_cidade" => 3110,
                "id_estado" => 32,
                "nome" => "Boa Esperança",
            ],
            [
                "id_cidade" => 3111,
                "id_estado" => 32,
                "nome" => "Bom Jesus do Norte",
            ],
            [
                "id_cidade" => 3112,
                "id_estado" => 32,
                "nome" => "Brejetuba",
            ],
            [
                "id_cidade" => 3113,
                "id_estado" => 32,
                "nome" => "Cachoeiro de Itapemirim",
            ],
            [
                "id_cidade" => 3114,
                "id_estado" => 32,
                "nome" => "Cariacica",
            ],
            [
                "id_cidade" => 3115,
                "id_estado" => 32,
                "nome" => "Castelo",
            ],
            [
                "id_cidade" => 3116,
                "id_estado" => 32,
                "nome" => "Colatina",
            ],
            [
                "id_cidade" => 3117,
                "id_estado" => 32,
                "nome" => "Conceição da Barra",
            ],
            [
                "id_cidade" => 3118,
                "id_estado" => 32,
                "nome" => "Conceição do Castelo",
            ],
            [
                "id_cidade" => 3119,
                "id_estado" => 32,
                "nome" => "Divino de São Lourenço",
            ],
            [
                "id_cidade" => 3120,
                "id_estado" => 32,
                "nome" => "Domingos Martins",
            ],
            [
                "id_cidade" => 3121,
                "id_estado" => 32,
                "nome" => "Dores do Rio Preto",
            ],
            [
                "id_cidade" => 3122,
                "id_estado" => 32,
                "nome" => "Ecoporanga",
            ],
            [
                "id_cidade" => 3123,
                "id_estado" => 32,
                "nome" => "Fundão",
            ],
            [
                "id_cidade" => 3124,
                "id_estado" => 32,
                "nome" => "Governador Lindenberg",
            ],
            [
                "id_cidade" => 3125,
                "id_estado" => 32,
                "nome" => "Guaçuí",
            ],
            [
                "id_cidade" => 3126,
                "id_estado" => 32,
                "nome" => "Guarapari",
            ],
            [
                "id_cidade" => 3127,
                "id_estado" => 32,
                "nome" => "Ibatiba",
            ],
            [
                "id_cidade" => 3128,
                "id_estado" => 32,
                "nome" => "Ibiraçu",
            ],
            [
                "id_cidade" => 3129,
                "id_estado" => 32,
                "nome" => "Ibitirama",
            ],
            [
                "id_cidade" => 3130,
                "id_estado" => 32,
                "nome" => "Iconha",
            ],
            [
                "id_cidade" => 3131,
                "id_estado" => 32,
                "nome" => "Irupi",
            ],
            [
                "id_cidade" => 3132,
                "id_estado" => 32,
                "nome" => "Itaguaçu",
            ],
            [
                "id_cidade" => 3133,
                "id_estado" => 32,
                "nome" => "Itapemirim",
            ],
            [
                "id_cidade" => 3134,
                "id_estado" => 32,
                "nome" => "Itarana",
            ],
            [
                "id_cidade" => 3135,
                "id_estado" => 32,
                "nome" => "Iúna",
            ],
            [
                "id_cidade" => 3136,
                "id_estado" => 32,
                "nome" => "Jaguaré",
            ],
            [
                "id_cidade" => 3137,
                "id_estado" => 32,
                "nome" => "Jerônimo Monteiro",
            ],
            [
                "id_cidade" => 3138,
                "id_estado" => 32,
                "nome" => "João Neiva",
            ],
            [
                "id_cidade" => 3139,
                "id_estado" => 32,
                "nome" => "Laranja da Terra",
            ],
            [
                "id_cidade" => 3140,
                "id_estado" => 32,
                "nome" => "Linhares",
            ],
            [
                "id_cidade" => 3141,
                "id_estado" => 32,
                "nome" => "Mantenópolis",
            ],
            [
                "id_cidade" => 3142,
                "id_estado" => 32,
                "nome" => "Marataízes",
            ],
            [
                "id_cidade" => 3143,
                "id_estado" => 32,
                "nome" => "Marechal Floriano",
            ],
            [
                "id_cidade" => 3144,
                "id_estado" => 32,
                "nome" => "Marilândia",
            ],
            [
                "id_cidade" => 3145,
                "id_estado" => 32,
                "nome" => "Mimoso do Sul",
            ],
            [
                "id_cidade" => 3146,
                "id_estado" => 32,
                "nome" => "Montanha",
            ],
            [
                "id_cidade" => 3147,
                "id_estado" => 32,
                "nome" => "Mucurici",
            ],
            [
                "id_cidade" => 3148,
                "id_estado" => 32,
                "nome" => "Muniz Freire",
            ],
            [
                "id_cidade" => 3149,
                "id_estado" => 32,
                "nome" => "Muqui",
            ],
            [
                "id_cidade" => 3150,
                "id_estado" => 32,
                "nome" => "Nova Venécia",
            ],
            [
                "id_cidade" => 3151,
                "id_estado" => 32,
                "nome" => "Pancas",
            ],
            [
                "id_cidade" => 3152,
                "id_estado" => 32,
                "nome" => "Pedro Canário",
            ],
            [
                "id_cidade" => 3153,
                "id_estado" => 32,
                "nome" => "Pinheiros",
            ],
            [
                "id_cidade" => 3154,
                "id_estado" => 32,
                "nome" => "Piúma",
            ],
            [
                "id_cidade" => 3155,
                "id_estado" => 32,
                "nome" => "Ponto Belo",
            ],
            [
                "id_cidade" => 3156,
                "id_estado" => 32,
                "nome" => "Presidente Kennedy",
            ],
            [
                "id_cidade" => 3157,
                "id_estado" => 32,
                "nome" => "Rio Bananal",
            ],
            [
                "id_cidade" => 3158,
                "id_estado" => 32,
                "nome" => "Rio Novo do Sul",
            ],
            [
                "id_cidade" => 3159,
                "id_estado" => 32,
                "nome" => "Santa Leopoldina",
            ],
            [
                "id_cidade" => 3160,
                "id_estado" => 32,
                "nome" => "Santa Maria de Jetibá",
            ],
            [
                "id_cidade" => 3161,
                "id_estado" => 32,
                "nome" => "Santa Teresa",
            ],
            [
                "id_cidade" => 3162,
                "id_estado" => 32,
                "nome" => "São Domingos do Norte",
            ],
            [
                "id_cidade" => 3163,
                "id_estado" => 32,
                "nome" => "São Gabriel da Palha",
            ],
            [
                "id_cidade" => 3164,
                "id_estado" => 32,
                "nome" => "São José do Calçado",
            ],
            [
                "id_cidade" => 3165,
                "id_estado" => 32,
                "nome" => "São Mateus",
            ],
            [
                "id_cidade" => 3166,
                "id_estado" => 32,
                "nome" => "São Roque do Canaã",
            ],
            [
                "id_cidade" => 3167,
                "id_estado" => 32,
                "nome" => "Serra",
            ],
            [
                "id_cidade" => 3168,
                "id_estado" => 32,
                "nome" => "Sooretama",
            ],
            [
                "id_cidade" => 3169,
                "id_estado" => 32,
                "nome" => "Vargem Alta",
            ],
            [
                "id_cidade" => 3170,
                "id_estado" => 32,
                "nome" => "Venda Nova do Imigrante",
            ],
            [
                "id_cidade" => 3171,
                "id_estado" => 32,
                "nome" => "Viana",
            ],
            [
                "id_cidade" => 3172,
                "id_estado" => 32,
                "nome" => "Vila Pavão",
            ],
            [
                "id_cidade" => 3173,
                "id_estado" => 32,
                "nome" => "Vila Valério",
            ],
            [
                "id_cidade" => 3174,
                "id_estado" => 32,
                "nome" => "Vila Velha",
            ],
            [
                "id_cidade" => 3175,
                "id_estado" => 32,
                "nome" => "Vitória",
            ],
            [
                "id_cidade" => 3176,
                "id_estado" => 33,
                "nome" => "Angra dos Reis",
            ],
            [
                "id_cidade" => 3177,
                "id_estado" => 33,
                "nome" => "Aperibé",
            ],
            [
                "id_cidade" => 3178,
                "id_estado" => 33,
                "nome" => "Araruama",
            ],
            [
                "id_cidade" => 3179,
                "id_estado" => 33,
                "nome" => "Areal",
            ],
            [
                "id_cidade" => 3180,
                "id_estado" => 33,
                "nome" => "Armação dos Búzios",
            ],
            [
                "id_cidade" => 3181,
                "id_estado" => 33,
                "nome" => "Arraial do Cabo",
            ],
            [
                "id_cidade" => 3182,
                "id_estado" => 33,
                "nome" => "Barra do Piraí",
            ],
            [
                "id_cidade" => 3183,
                "id_estado" => 33,
                "nome" => "Barra Mansa",
            ],
            [
                "id_cidade" => 3184,
                "id_estado" => 33,
                "nome" => "Belford Roxo",
            ],
            [
                "id_cidade" => 3185,
                "id_estado" => 33,
                "nome" => "Bom Jardim",
            ],
            [
                "id_cidade" => 3186,
                "id_estado" => 33,
                "nome" => "Bom Jesus do Itabapoana",
            ],
            [
                "id_cidade" => 3187,
                "id_estado" => 33,
                "nome" => "Cabo Frio",
            ],
            [
                "id_cidade" => 3188,
                "id_estado" => 33,
                "nome" => "Cachoeiras de Macacu",
            ],
            [
                "id_cidade" => 3189,
                "id_estado" => 33,
                "nome" => "Cambuci",
            ],
            [
                "id_cidade" => 3190,
                "id_estado" => 33,
                "nome" => "Campos dos Goytacazes",
            ],
            [
                "id_cidade" => 3191,
                "id_estado" => 33,
                "nome" => "Cantagalo",
            ],
            [
                "id_cidade" => 3192,
                "id_estado" => 33,
                "nome" => "Carapebus",
            ],
            [
                "id_cidade" => 3193,
                "id_estado" => 33,
                "nome" => "Cardoso Moreira",
            ],
            [
                "id_cidade" => 3194,
                "id_estado" => 33,
                "nome" => "Carmo",
            ],
            [
                "id_cidade" => 3195,
                "id_estado" => 33,
                "nome" => "Casimiro de Abreu",
            ],
            [
                "id_cidade" => 3196,
                "id_estado" => 33,
                "nome" => "Comendador Levy Gasparian",
            ],
            [
                "id_cidade" => 3197,
                "id_estado" => 33,
                "nome" => "Conceição de Macabu",
            ],
            [
                "id_cidade" => 3198,
                "id_estado" => 33,
                "nome" => "Cordeiro",
            ],
            [
                "id_cidade" => 3199,
                "id_estado" => 33,
                "nome" => "Duas Barras",
            ],
            [
                "id_cidade" => 3200,
                "id_estado" => 33,
                "nome" => "Duque de Caxias",
            ],
            [
                "id_cidade" => 3201,
                "id_estado" => 33,
                "nome" => "Engenheiro Paulo de Frontin",
            ],
            [
                "id_cidade" => 3202,
                "id_estado" => 33,
                "nome" => "Guapimirim",
            ],
            [
                "id_cidade" => 3203,
                "id_estado" => 33,
                "nome" => "Iguaba Grande",
            ],
            [
                "id_cidade" => 3204,
                "id_estado" => 33,
                "nome" => "Itaboraí",
            ],
            [
                "id_cidade" => 3205,
                "id_estado" => 33,
                "nome" => "Itaguaí",
            ],
            [
                "id_cidade" => 3206,
                "id_estado" => 33,
                "nome" => "Italva",
            ],
            [
                "id_cidade" => 3207,
                "id_estado" => 33,
                "nome" => "Itaocara",
            ],
            [
                "id_cidade" => 3208,
                "id_estado" => 33,
                "nome" => "Itaperuna",
            ],
            [
                "id_cidade" => 3209,
                "id_estado" => 33,
                "nome" => "Itatiaia",
            ],
            [
                "id_cidade" => 3210,
                "id_estado" => 33,
                "nome" => "Japeri",
            ],
            [
                "id_cidade" => 3211,
                "id_estado" => 33,
                "nome" => "Laje do Muriaé",
            ],
            [
                "id_cidade" => 3212,
                "id_estado" => 33,
                "nome" => "Macaé",
            ],
            [
                "id_cidade" => 3213,
                "id_estado" => 33,
                "nome" => "Macuco",
            ],
            [
                "id_cidade" => 3214,
                "id_estado" => 33,
                "nome" => "Magé",
            ],
            [
                "id_cidade" => 3215,
                "id_estado" => 33,
                "nome" => "Mangaratiba",
            ],
            [
                "id_cidade" => 3216,
                "id_estado" => 33,
                "nome" => "Maricá",
            ],
            [
                "id_cidade" => 3217,
                "id_estado" => 33,
                "nome" => "Mendes",
            ],
            [
                "id_cidade" => 3218,
                "id_estado" => 33,
                "nome" => "Mesquita",
            ],
            [
                "id_cidade" => 3219,
                "id_estado" => 33,
                "nome" => "Miguel Pereira",
            ],
            [
                "id_cidade" => 3220,
                "id_estado" => 33,
                "nome" => "Miracema",
            ],
            [
                "id_cidade" => 3221,
                "id_estado" => 33,
                "nome" => "Natividade",
            ],
            [
                "id_cidade" => 3222,
                "id_estado" => 33,
                "nome" => "Nilópolis",
            ],
            [
                "id_cidade" => 3223,
                "id_estado" => 33,
                "nome" => "Niterói",
            ],
            [
                "id_cidade" => 3224,
                "id_estado" => 33,
                "nome" => "Nova Friburgo",
            ],
            [
                "id_cidade" => 3225,
                "id_estado" => 33,
                "nome" => "Nova Iguaçu",
            ],
            [
                "id_cidade" => 3226,
                "id_estado" => 33,
                "nome" => "Paracambi",
            ],
            [
                "id_cidade" => 3227,
                "id_estado" => 33,
                "nome" => "Paraíba do Sul",
            ],
            [
                "id_cidade" => 3228,
                "id_estado" => 33,
                "nome" => "Paraty",
            ],
            [
                "id_cidade" => 3229,
                "id_estado" => 33,
                "nome" => "Paty do Alferes",
            ],
            [
                "id_cidade" => 3230,
                "id_estado" => 33,
                "nome" => "Petrópolis",
            ],
            [
                "id_cidade" => 3231,
                "id_estado" => 33,
                "nome" => "Pinheiral",
            ],
            [
                "id_cidade" => 3232,
                "id_estado" => 33,
                "nome" => "Piraí",
            ],
            [
                "id_cidade" => 3233,
                "id_estado" => 33,
                "nome" => "Porciúncula",
            ],
            [
                "id_cidade" => 3234,
                "id_estado" => 33,
                "nome" => "Porto Real",
            ],
            [
                "id_cidade" => 3235,
                "id_estado" => 33,
                "nome" => "Quatis",
            ],
            [
                "id_cidade" => 3236,
                "id_estado" => 33,
                "nome" => "Queimados",
            ],
            [
                "id_cidade" => 3237,
                "id_estado" => 33,
                "nome" => "Quissamã",
            ],
            [
                "id_cidade" => 3238,
                "id_estado" => 33,
                "nome" => "Resende",
            ],
            [
                "id_cidade" => 3239,
                "id_estado" => 33,
                "nome" => "Rio Bonito",
            ],
            [
                "id_cidade" => 3240,
                "id_estado" => 33,
                "nome" => "Rio Claro",
            ],
            [
                "id_cidade" => 3241,
                "id_estado" => 33,
                "nome" => "Rio das Flores",
            ],
            [
                "id_cidade" => 3242,
                "id_estado" => 33,
                "nome" => "Rio das Ostras",
            ],
            [
                "id_cidade" => 3243,
                "id_estado" => 33,
                "nome" => "Rio de Janeiro",
            ],
            [
                "id_cidade" => 3244,
                "id_estado" => 33,
                "nome" => "Santa Maria Madalena",
            ],
            [
                "id_cidade" => 3245,
                "id_estado" => 33,
                "nome" => "Santo Antônio de Pádua",
            ],
            [
                "id_cidade" => 3246,
                "id_estado" => 33,
                "nome" => "São Fidélis",
            ],
            [
                "id_cidade" => 3247,
                "id_estado" => 33,
                "nome" => "São Francisco de Itabapoana",
            ],
            [
                "id_cidade" => 3248,
                "id_estado" => 33,
                "nome" => "São Gonçalo",
            ],
            [
                "id_cidade" => 3249,
                "id_estado" => 33,
                "nome" => "São João da Barra",
            ],
            [
                "id_cidade" => 3250,
                "id_estado" => 33,
                "nome" => "São João de Meriti",
            ],
            [
                "id_cidade" => 3251,
                "id_estado" => 33,
                "nome" => "São José de Ubá",
            ],
            [
                "id_cidade" => 3252,
                "id_estado" => 33,
                "nome" => "São José do Vale do Rio Preto",
            ],
            [
                "id_cidade" => 3253,
                "id_estado" => 33,
                "nome" => "São Pedro da Aldeia",
            ],
            [
                "id_cidade" => 3254,
                "id_estado" => 33,
                "nome" => "São Sebastião do Alto",
            ],
            [
                "id_cidade" => 3255,
                "id_estado" => 33,
                "nome" => "Sapucaia",
            ],
            [
                "id_cidade" => 3256,
                "id_estado" => 33,
                "nome" => "Saquarema",
            ],
            [
                "id_cidade" => 3257,
                "id_estado" => 33,
                "nome" => "Seropédica",
            ],
            [
                "id_cidade" => 3258,
                "id_estado" => 33,
                "nome" => "Silva Jardim",
            ],
            [
                "id_cidade" => 3259,
                "id_estado" => 33,
                "nome" => "Sumidouro",
            ],
            [
                "id_cidade" => 3260,
                "id_estado" => 33,
                "nome" => "Tanguá",
            ],
            [
                "id_cidade" => 3261,
                "id_estado" => 33,
                "nome" => "Teresópolis",
            ],
            [
                "id_cidade" => 3262,
                "id_estado" => 33,
                "nome" => "Trajano de Moraes",
            ],
            [
                "id_cidade" => 3263,
                "id_estado" => 33,
                "nome" => "Três Rios",
            ],
            [
                "id_cidade" => 3264,
                "id_estado" => 33,
                "nome" => "Valença",
            ],
            [
                "id_cidade" => 3265,
                "id_estado" => 33,
                "nome" => "Varre-Sai",
            ],
            [
                "id_cidade" => 3266,
                "id_estado" => 33,
                "nome" => "Vassouras",
            ],
            [
                "id_cidade" => 3267,
                "id_estado" => 33,
                "nome" => "Volta Redonda",
            ],
            [
                "id_cidade" => 3268,
                "id_estado" => 35,
                "nome" => "Adamantina",
            ],
            [
                "id_cidade" => 3269,
                "id_estado" => 35,
                "nome" => "Adolfo",
            ],
            [
                "id_cidade" => 3270,
                "id_estado" => 35,
                "nome" => "Aguaí",
            ],
            [
                "id_cidade" => 3271,
                "id_estado" => 35,
                "nome" => "Águas da Prata",
            ],
            [
                "id_cidade" => 3272,
                "id_estado" => 35,
                "nome" => "Águas de Lindóia",
            ],
            [
                "id_cidade" => 3273,
                "id_estado" => 35,
                "nome" => "Águas de Santa Bárbara",
            ],
            [
                "id_cidade" => 3274,
                "id_estado" => 35,
                "nome" => "Águas de São Pedro",
            ],
            [
                "id_cidade" => 3275,
                "id_estado" => 35,
                "nome" => "Agudos",
            ],
            [
                "id_cidade" => 3276,
                "id_estado" => 35,
                "nome" => "Alambari",
            ],
            [
                "id_cidade" => 3277,
                "id_estado" => 35,
                "nome" => "Alfredo Marcondes",
            ],
            [
                "id_cidade" => 3278,
                "id_estado" => 35,
                "nome" => "Altair",
            ],
            [
                "id_cidade" => 3279,
                "id_estado" => 35,
                "nome" => "Altinópolis",
            ],
            [
                "id_cidade" => 3280,
                "id_estado" => 35,
                "nome" => "Alto Alegre",
            ],
            [
                "id_cidade" => 3281,
                "id_estado" => 35,
                "nome" => "Alumínio",
            ],
            [
                "id_cidade" => 3282,
                "id_estado" => 35,
                "nome" => "Álvares Florence",
            ],
            [
                "id_cidade" => 3283,
                "id_estado" => 35,
                "nome" => "Álvares Machado",
            ],
            [
                "id_cidade" => 3284,
                "id_estado" => 35,
                "nome" => "Álvaro de Carvalho",
            ],
            [
                "id_cidade" => 3285,
                "id_estado" => 35,
                "nome" => "Alvinlândia",
            ],
            [
                "id_cidade" => 3286,
                "id_estado" => 35,
                "nome" => "Americana",
            ],
            [
                "id_cidade" => 3287,
                "id_estado" => 35,
                "nome" => "Américo Brasiliense",
            ],
            [
                "id_cidade" => 3288,
                "id_estado" => 35,
                "nome" => "Américo de Campos",
            ],
            [
                "id_cidade" => 3289,
                "id_estado" => 35,
                "nome" => "Amparo",
            ],
            [
                "id_cidade" => 3290,
                "id_estado" => 35,
                "nome" => "Analândia",
            ],
            [
                "id_cidade" => 3291,
                "id_estado" => 35,
                "nome" => "Andradina",
            ],
            [
                "id_cidade" => 3292,
                "id_estado" => 35,
                "nome" => "Angatuba",
            ],
            [
                "id_cidade" => 3293,
                "id_estado" => 35,
                "nome" => "Anhembi",
            ],
            [
                "id_cidade" => 3294,
                "id_estado" => 35,
                "nome" => "Anhumas",
            ],
            [
                "id_cidade" => 3295,
                "id_estado" => 35,
                "nome" => "Aparecida",
            ],
            [
                "id_cidade" => 3296,
                "id_estado" => 35,
                "nome" => "Aparecida d'Oeste",
            ],
            [
                "id_cidade" => 3297,
                "id_estado" => 35,
                "nome" => "Apiaí",
            ],
            [
                "id_cidade" => 3298,
                "id_estado" => 35,
                "nome" => "Araçariguama",
            ],
            [
                "id_cidade" => 3299,
                "id_estado" => 35,
                "nome" => "Araçatuba",
            ],
            [
                "id_cidade" => 3300,
                "id_estado" => 35,
                "nome" => "Araçoiaba da Serra",
            ],
            [
                "id_cidade" => 3301,
                "id_estado" => 35,
                "nome" => "Aramina",
            ],
            [
                "id_cidade" => 3302,
                "id_estado" => 35,
                "nome" => "Arandu",
            ],
            [
                "id_cidade" => 3303,
                "id_estado" => 35,
                "nome" => "Arapeí",
            ],
            [
                "id_cidade" => 3304,
                "id_estado" => 35,
                "nome" => "Araraquara",
            ],
            [
                "id_cidade" => 3305,
                "id_estado" => 35,
                "nome" => "Araras",
            ],
            [
                "id_cidade" => 3306,
                "id_estado" => 35,
                "nome" => "Arco-Íris",
            ],
            [
                "id_cidade" => 3307,
                "id_estado" => 35,
                "nome" => "Arealva",
            ],
            [
                "id_cidade" => 3308,
                "id_estado" => 35,
                "nome" => "Areias",
            ],
            [
                "id_cidade" => 3309,
                "id_estado" => 35,
                "nome" => "Areiópolis",
            ],
            [
                "id_cidade" => 3310,
                "id_estado" => 35,
                "nome" => "Ariranha",
            ],
            [
                "id_cidade" => 3311,
                "id_estado" => 35,
                "nome" => "Artur Nogueira",
            ],
            [
                "id_cidade" => 3312,
                "id_estado" => 35,
                "nome" => "Arujá",
            ],
            [
                "id_cidade" => 3313,
                "id_estado" => 35,
                "nome" => "Aspásia",
            ],
            [
                "id_cidade" => 3314,
                "id_estado" => 35,
                "nome" => "Assis",
            ],
            [
                "id_cidade" => 3315,
                "id_estado" => 35,
                "nome" => "Atibaia",
            ],
            [
                "id_cidade" => 3316,
                "id_estado" => 35,
                "nome" => "Auriflama",
            ],
            [
                "id_cidade" => 3317,
                "id_estado" => 35,
                "nome" => "Avaí",
            ],
            [
                "id_cidade" => 3318,
                "id_estado" => 35,
                "nome" => "Avanhandava",
            ],
            [
                "id_cidade" => 3319,
                "id_estado" => 35,
                "nome" => "Avaré",
            ],
            [
                "id_cidade" => 3320,
                "id_estado" => 35,
                "nome" => "Bady Bassitt",
            ],
            [
                "id_cidade" => 3321,
                "id_estado" => 35,
                "nome" => "Balbinos",
            ],
            [
                "id_cidade" => 3322,
                "id_estado" => 35,
                "nome" => "Bálsamo",
            ],
            [
                "id_cidade" => 3323,
                "id_estado" => 35,
                "nome" => "Bananal",
            ],
            [
                "id_cidade" => 3324,
                "id_estado" => 35,
                "nome" => "Barão de Antonina",
            ],
            [
                "id_cidade" => 3325,
                "id_estado" => 35,
                "nome" => "Barbosa",
            ],
            [
                "id_cidade" => 3326,
                "id_estado" => 35,
                "nome" => "Bariri",
            ],
            [
                "id_cidade" => 3327,
                "id_estado" => 35,
                "nome" => "Barra Bonita",
            ],
            [
                "id_cidade" => 3328,
                "id_estado" => 35,
                "nome" => "Barra do Chapéu",
            ],
            [
                "id_cidade" => 3329,
                "id_estado" => 35,
                "nome" => "Barra do Turvo",
            ],
            [
                "id_cidade" => 3330,
                "id_estado" => 35,
                "nome" => "Barretos",
            ],
            [
                "id_cidade" => 3331,
                "id_estado" => 35,
                "nome" => "Barrinha",
            ],
            [
                "id_cidade" => 3332,
                "id_estado" => 35,
                "nome" => "Barueri",
            ],
            [
                "id_cidade" => 3333,
                "id_estado" => 35,
                "nome" => "Bastos",
            ],
            [
                "id_cidade" => 3334,
                "id_estado" => 35,
                "nome" => "Batatais",
            ],
            [
                "id_cidade" => 3335,
                "id_estado" => 35,
                "nome" => "Bauru",
            ],
            [
                "id_cidade" => 3336,
                "id_estado" => 35,
                "nome" => "Bebedouro",
            ],
            [
                "id_cidade" => 3337,
                "id_estado" => 35,
                "nome" => "Bento de Abreu",
            ],
            [
                "id_cidade" => 3338,
                "id_estado" => 35,
                "nome" => "Bernardino de Campos",
            ],
            [
                "id_cidade" => 3339,
                "id_estado" => 35,
                "nome" => "Bertioga",
            ],
            [
                "id_cidade" => 3340,
                "id_estado" => 35,
                "nome" => "Bilac",
            ],
            [
                "id_cidade" => 3341,
                "id_estado" => 35,
                "nome" => "Birigui",
            ],
            [
                "id_cidade" => 3342,
                "id_estado" => 35,
                "nome" => "Biritiba Mirim",
            ],
            [
                "id_cidade" => 3343,
                "id_estado" => 35,
                "nome" => "Boa Esperança do Sul",
            ],
            [
                "id_cidade" => 3344,
                "id_estado" => 35,
                "nome" => "Bocaina",
            ],
            [
                "id_cidade" => 3345,
                "id_estado" => 35,
                "nome" => "Bofete",
            ],
            [
                "id_cidade" => 3346,
                "id_estado" => 35,
                "nome" => "Boituva",
            ],
            [
                "id_cidade" => 3347,
                "id_estado" => 35,
                "nome" => "Bom Jesus dos Perdões",
            ],
            [
                "id_cidade" => 3348,
                "id_estado" => 35,
                "nome" => "Bom Sucesso de Itararé",
            ],
            [
                "id_cidade" => 3349,
                "id_estado" => 35,
                "nome" => "Borá",
            ],
            [
                "id_cidade" => 3350,
                "id_estado" => 35,
                "nome" => "Boracéia",
            ],
            [
                "id_cidade" => 3351,
                "id_estado" => 35,
                "nome" => "Borborema",
            ],
            [
                "id_cidade" => 3352,
                "id_estado" => 35,
                "nome" => "Borebi",
            ],
            [
                "id_cidade" => 3353,
                "id_estado" => 35,
                "nome" => "Botucatu",
            ],
            [
                "id_cidade" => 3354,
                "id_estado" => 35,
                "nome" => "Bragança Paulista",
            ],
            [
                "id_cidade" => 3355,
                "id_estado" => 35,
                "nome" => "Braúna",
            ],
            [
                "id_cidade" => 3356,
                "id_estado" => 35,
                "nome" => "Brejo Alegre",
            ],
            [
                "id_cidade" => 3357,
                "id_estado" => 35,
                "nome" => "Brodowski",
            ],
            [
                "id_cidade" => 3358,
                "id_estado" => 35,
                "nome" => "Brotas",
            ],
            [
                "id_cidade" => 3359,
                "id_estado" => 35,
                "nome" => "Buri",
            ],
            [
                "id_cidade" => 3360,
                "id_estado" => 35,
                "nome" => "Buritama",
            ],
            [
                "id_cidade" => 3361,
                "id_estado" => 35,
                "nome" => "Buritizal",
            ],
            [
                "id_cidade" => 3362,
                "id_estado" => 35,
                "nome" => "Cabrália Paulista",
            ],
            [
                "id_cidade" => 3363,
                "id_estado" => 35,
                "nome" => "Cabreúva",
            ],
            [
                "id_cidade" => 3364,
                "id_estado" => 35,
                "nome" => "Caçapava",
            ],
            [
                "id_cidade" => 3365,
                "id_estado" => 35,
                "nome" => "Cachoeira Paulista",
            ],
            [
                "id_cidade" => 3366,
                "id_estado" => 35,
                "nome" => "Caconde",
            ],
            [
                "id_cidade" => 3367,
                "id_estado" => 35,
                "nome" => "Cafelândia",
            ],
            [
                "id_cidade" => 3368,
                "id_estado" => 35,
                "nome" => "Caiabu",
            ],
            [
                "id_cidade" => 3369,
                "id_estado" => 35,
                "nome" => "Caieiras",
            ],
            [
                "id_cidade" => 3370,
                "id_estado" => 35,
                "nome" => "Caiuá",
            ],
            [
                "id_cidade" => 3371,
                "id_estado" => 35,
                "nome" => "Cajamar",
            ],
            [
                "id_cidade" => 3372,
                "id_estado" => 35,
                "nome" => "Cajati",
            ],
            [
                "id_cidade" => 3373,
                "id_estado" => 35,
                "nome" => "Cajobi",
            ],
            [
                "id_cidade" => 3374,
                "id_estado" => 35,
                "nome" => "Cajuru",
            ],
            [
                "id_cidade" => 3375,
                "id_estado" => 35,
                "nome" => "Campina do Monte Alegre",
            ],
            [
                "id_cidade" => 3376,
                "id_estado" => 35,
                "nome" => "Campinas",
            ],
            [
                "id_cidade" => 3377,
                "id_estado" => 35,
                "nome" => "Campo Limpo Paulista",
            ],
            [
                "id_cidade" => 3378,
                "id_estado" => 35,
                "nome" => "Campos do Jordão",
            ],
            [
                "id_cidade" => 3379,
                "id_estado" => 35,
                "nome" => "Campos Novos Paulista",
            ],
            [
                "id_cidade" => 3380,
                "id_estado" => 35,
                "nome" => "Cananéia",
            ],
            [
                "id_cidade" => 3381,
                "id_estado" => 35,
                "nome" => "Canas",
            ],
            [
                "id_cidade" => 3382,
                "id_estado" => 35,
                "nome" => "Cândido Mota",
            ],
            [
                "id_cidade" => 3383,
                "id_estado" => 35,
                "nome" => "Cândido Rodrigues",
            ],
            [
                "id_cidade" => 3384,
                "id_estado" => 35,
                "nome" => "Canitar",
            ],
            [
                "id_cidade" => 3385,
                "id_estado" => 35,
                "nome" => "Capão Bonito",
            ],
            [
                "id_cidade" => 3386,
                "id_estado" => 35,
                "nome" => "Capela do Alto",
            ],
            [
                "id_cidade" => 3387,
                "id_estado" => 35,
                "nome" => "Capivari",
            ],
            [
                "id_cidade" => 3388,
                "id_estado" => 35,
                "nome" => "Caraguatatuba",
            ],
            [
                "id_cidade" => 3389,
                "id_estado" => 35,
                "nome" => "Carapicuíba",
            ],
            [
                "id_cidade" => 3390,
                "id_estado" => 35,
                "nome" => "Cardoso",
            ],
            [
                "id_cidade" => 3391,
                "id_estado" => 35,
                "nome" => "Casa Branca",
            ],
            [
                "id_cidade" => 3392,
                "id_estado" => 35,
                "nome" => "Cássia dos Coqueiros",
            ],
            [
                "id_cidade" => 3393,
                "id_estado" => 35,
                "nome" => "Castilho",
            ],
            [
                "id_cidade" => 3394,
                "id_estado" => 35,
                "nome" => "Catanduva",
            ],
            [
                "id_cidade" => 3395,
                "id_estado" => 35,
                "nome" => "Catiguá",
            ],
            [
                "id_cidade" => 3396,
                "id_estado" => 35,
                "nome" => "Cedral",
            ],
            [
                "id_cidade" => 3397,
                "id_estado" => 35,
                "nome" => "Cerqueira César",
            ],
            [
                "id_cidade" => 3398,
                "id_estado" => 35,
                "nome" => "Cerquilho",
            ],
            [
                "id_cidade" => 3399,
                "id_estado" => 35,
                "nome" => "Cesário Lange",
            ],
            [
                "id_cidade" => 3400,
                "id_estado" => 35,
                "nome" => "Charqueada",
            ],
            [
                "id_cidade" => 3401,
                "id_estado" => 35,
                "nome" => "Chavantes",
            ],
            [
                "id_cidade" => 3402,
                "id_estado" => 35,
                "nome" => "Clementina",
            ],
            [
                "id_cidade" => 3403,
                "id_estado" => 35,
                "nome" => "Colina",
            ],
            [
                "id_cidade" => 3404,
                "id_estado" => 35,
                "nome" => "Colômbia",
            ],
            [
                "id_cidade" => 3405,
                "id_estado" => 35,
                "nome" => "Conchal",
            ],
            [
                "id_cidade" => 3406,
                "id_estado" => 35,
                "nome" => "Conchas",
            ],
            [
                "id_cidade" => 3407,
                "id_estado" => 35,
                "nome" => "Cordeirópolis",
            ],
            [
                "id_cidade" => 3408,
                "id_estado" => 35,
                "nome" => "Coroados",
            ],
            [
                "id_cidade" => 3409,
                "id_estado" => 35,
                "nome" => "Coronel Macedo",
            ],
            [
                "id_cidade" => 3410,
                "id_estado" => 35,
                "nome" => "Corumbataí",
            ],
            [
                "id_cidade" => 3411,
                "id_estado" => 35,
                "nome" => "Cosmópolis",
            ],
            [
                "id_cidade" => 3412,
                "id_estado" => 35,
                "nome" => "Cosmorama",
            ],
            [
                "id_cidade" => 3413,
                "id_estado" => 35,
                "nome" => "Cotia",
            ],
            [
                "id_cidade" => 3414,
                "id_estado" => 35,
                "nome" => "Cravinhos",
            ],
            [
                "id_cidade" => 3415,
                "id_estado" => 35,
                "nome" => "Cristais Paulista",
            ],
            [
                "id_cidade" => 3416,
                "id_estado" => 35,
                "nome" => "Cruzália",
            ],
            [
                "id_cidade" => 3417,
                "id_estado" => 35,
                "nome" => "Cruzeiro",
            ],
            [
                "id_cidade" => 3418,
                "id_estado" => 35,
                "nome" => "Cubatão",
            ],
            [
                "id_cidade" => 3419,
                "id_estado" => 35,
                "nome" => "Cunha",
            ],
            [
                "id_cidade" => 3420,
                "id_estado" => 35,
                "nome" => "Descalvado",
            ],
            [
                "id_cidade" => 3421,
                "id_estado" => 35,
                "nome" => "Diadema",
            ],
            [
                "id_cidade" => 3422,
                "id_estado" => 35,
                "nome" => "Dirce Reis",
            ],
            [
                "id_cidade" => 3423,
                "id_estado" => 35,
                "nome" => "Divinolândia",
            ],
            [
                "id_cidade" => 3424,
                "id_estado" => 35,
                "nome" => "Dobrada",
            ],
            [
                "id_cidade" => 3425,
                "id_estado" => 35,
                "nome" => "Dois Córregos",
            ],
            [
                "id_cidade" => 3426,
                "id_estado" => 35,
                "nome" => "Dolcinópolis",
            ],
            [
                "id_cidade" => 3427,
                "id_estado" => 35,
                "nome" => "Dourado",
            ],
            [
                "id_cidade" => 3428,
                "id_estado" => 35,
                "nome" => "Dracena",
            ],
            [
                "id_cidade" => 3429,
                "id_estado" => 35,
                "nome" => "Duartina",
            ],
            [
                "id_cidade" => 3430,
                "id_estado" => 35,
                "nome" => "Dumont",
            ],
            [
                "id_cidade" => 3431,
                "id_estado" => 35,
                "nome" => "Echaporã",
            ],
            [
                "id_cidade" => 3432,
                "id_estado" => 35,
                "nome" => "Eldorado",
            ],
            [
                "id_cidade" => 3433,
                "id_estado" => 35,
                "nome" => "Elias Fausto",
            ],
            [
                "id_cidade" => 3434,
                "id_estado" => 35,
                "nome" => "Elisiário",
            ],
            [
                "id_cidade" => 3435,
                "id_estado" => 35,
                "nome" => "Embaúba",
            ],
            [
                "id_cidade" => 3436,
                "id_estado" => 35,
                "nome" => "Embu das Artes",
            ],
            [
                "id_cidade" => 3437,
                "id_estado" => 35,
                "nome" => "Embu-Guaçu",
            ],
            [
                "id_cidade" => 3438,
                "id_estado" => 35,
                "nome" => "Emilianópolis",
            ],
            [
                "id_cidade" => 3439,
                "id_estado" => 35,
                "nome" => "Engenheiro Coelho",
            ],
            [
                "id_cidade" => 3440,
                "id_estado" => 35,
                "nome" => "Espírito Santo do Pinhal",
            ],
            [
                "id_cidade" => 3441,
                "id_estado" => 35,
                "nome" => "Espírito Santo do Turvo",
            ],
            [
                "id_cidade" => 3442,
                "id_estado" => 35,
                "nome" => "Estiva Gerbi",
            ],
            [
                "id_cidade" => 3443,
                "id_estado" => 35,
                "nome" => "Estrela do Norte",
            ],
            [
                "id_cidade" => 3444,
                "id_estado" => 35,
                "nome" => "Estrela d'Oeste",
            ],
            [
                "id_cidade" => 3445,
                "id_estado" => 35,
                "nome" => "Euclides da Cunha Paulista",
            ],
            [
                "id_cidade" => 3446,
                "id_estado" => 35,
                "nome" => "Fartura",
            ],
            [
                "id_cidade" => 3447,
                "id_estado" => 35,
                "nome" => "Fernando Prestes",
            ],
            [
                "id_cidade" => 3448,
                "id_estado" => 35,
                "nome" => "Fernandópolis",
            ],
            [
                "id_cidade" => 3449,
                "id_estado" => 35,
                "nome" => "Fernão",
            ],
            [
                "id_cidade" => 3450,
                "id_estado" => 35,
                "nome" => "Ferraz de Vasconcelos",
            ],
            [
                "id_cidade" => 3451,
                "id_estado" => 35,
                "nome" => "Flora Rica",
            ],
            [
                "id_cidade" => 3452,
                "id_estado" => 35,
                "nome" => "Floreal",
            ],
            [
                "id_cidade" => 3453,
                "id_estado" => 35,
                "nome" => "Flórida Paulista",
            ],
            [
                "id_cidade" => 3454,
                "id_estado" => 35,
                "nome" => "Florínea",
            ],
            [
                "id_cidade" => 3455,
                "id_estado" => 35,
                "nome" => "Franca",
            ],
            [
                "id_cidade" => 3456,
                "id_estado" => 35,
                "nome" => "Francisco Morato",
            ],
            [
                "id_cidade" => 3457,
                "id_estado" => 35,
                "nome" => "Franco da Rocha",
            ],
            [
                "id_cidade" => 3458,
                "id_estado" => 35,
                "nome" => "Gabriel Monteiro",
            ],
            [
                "id_cidade" => 3459,
                "id_estado" => 35,
                "nome" => "Gália",
            ],
            [
                "id_cidade" => 3460,
                "id_estado" => 35,
                "nome" => "Garça",
            ],
            [
                "id_cidade" => 3461,
                "id_estado" => 35,
                "nome" => "Gastão Vidigal",
            ],
            [
                "id_cidade" => 3462,
                "id_estado" => 35,
                "nome" => "Gavião Peixoto",
            ],
            [
                "id_cidade" => 3463,
                "id_estado" => 35,
                "nome" => "General Salgado",
            ],
            [
                "id_cidade" => 3464,
                "id_estado" => 35,
                "nome" => "Getulina",
            ],
            [
                "id_cidade" => 3465,
                "id_estado" => 35,
                "nome" => "Glicério",
            ],
            [
                "id_cidade" => 3466,
                "id_estado" => 35,
                "nome" => "Guaiçara",
            ],
            [
                "id_cidade" => 3467,
                "id_estado" => 35,
                "nome" => "Guaimbê",
            ],
            [
                "id_cidade" => 3468,
                "id_estado" => 35,
                "nome" => "Guaíra",
            ],
            [
                "id_cidade" => 3469,
                "id_estado" => 35,
                "nome" => "Guapiaçu",
            ],
            [
                "id_cidade" => 3470,
                "id_estado" => 35,
                "nome" => "Guapiara",
            ],
            [
                "id_cidade" => 3471,
                "id_estado" => 35,
                "nome" => "Guará",
            ],
            [
                "id_cidade" => 3472,
                "id_estado" => 35,
                "nome" => "Guaraçaí",
            ],
            [
                "id_cidade" => 3473,
                "id_estado" => 35,
                "nome" => "Guaraci",
            ],
            [
                "id_cidade" => 3474,
                "id_estado" => 35,
                "nome" => "Guarani d'Oeste",
            ],
            [
                "id_cidade" => 3475,
                "id_estado" => 35,
                "nome" => "Guarantã",
            ],
            [
                "id_cidade" => 3476,
                "id_estado" => 35,
                "nome" => "Guararapes",
            ],
            [
                "id_cidade" => 3477,
                "id_estado" => 35,
                "nome" => "Guararema",
            ],
            [
                "id_cidade" => 3478,
                "id_estado" => 35,
                "nome" => "Guaratinguetá",
            ],
            [
                "id_cidade" => 3479,
                "id_estado" => 35,
                "nome" => "Guareí",
            ],
            [
                "id_cidade" => 3480,
                "id_estado" => 35,
                "nome" => "Guariba",
            ],
            [
                "id_cidade" => 3481,
                "id_estado" => 35,
                "nome" => "Guarujá",
            ],
            [
                "id_cidade" => 3482,
                "id_estado" => 35,
                "nome" => "Guarulhos",
            ],
            [
                "id_cidade" => 3483,
                "id_estado" => 35,
                "nome" => "Guatapará",
            ],
            [
                "id_cidade" => 3484,
                "id_estado" => 35,
                "nome" => "Guzolândia",
            ],
            [
                "id_cidade" => 3485,
                "id_estado" => 35,
                "nome" => "Herculândia",
            ],
            [
                "id_cidade" => 3486,
                "id_estado" => 35,
                "nome" => "Holambra",
            ],
            [
                "id_cidade" => 3487,
                "id_estado" => 35,
                "nome" => "Hortolândia",
            ],
            [
                "id_cidade" => 3488,
                "id_estado" => 35,
                "nome" => "Iacanga",
            ],
            [
                "id_cidade" => 3489,
                "id_estado" => 35,
                "nome" => "Iacri",
            ],
            [
                "id_cidade" => 3490,
                "id_estado" => 35,
                "nome" => "Iaras",
            ],
            [
                "id_cidade" => 3491,
                "id_estado" => 35,
                "nome" => "Ibaté",
            ],
            [
                "id_cidade" => 3492,
                "id_estado" => 35,
                "nome" => "Ibirá",
            ],
            [
                "id_cidade" => 3493,
                "id_estado" => 35,
                "nome" => "Ibirarema",
            ],
            [
                "id_cidade" => 3494,
                "id_estado" => 35,
                "nome" => "Ibitinga",
            ],
            [
                "id_cidade" => 3495,
                "id_estado" => 35,
                "nome" => "Ibiúna",
            ],
            [
                "id_cidade" => 3496,
                "id_estado" => 35,
                "nome" => "Icém",
            ],
            [
                "id_cidade" => 3497,
                "id_estado" => 35,
                "nome" => "Iepê",
            ],
            [
                "id_cidade" => 3498,
                "id_estado" => 35,
                "nome" => "Igaraçu do Tietê",
            ],
            [
                "id_cidade" => 3499,
                "id_estado" => 35,
                "nome" => "Igarapava",
            ],
            [
                "id_cidade" => 3500,
                "id_estado" => 35,
                "nome" => "Igaratá",
            ],
            [
                "id_cidade" => 3501,
                "id_estado" => 35,
                "nome" => "Iguape",
            ],
            [
                "id_cidade" => 3502,
                "id_estado" => 35,
                "nome" => "Ilha Comprida",
            ],
            [
                "id_cidade" => 3503,
                "id_estado" => 35,
                "nome" => "Ilha Solteira",
            ],
            [
                "id_cidade" => 3504,
                "id_estado" => 35,
                "nome" => "Ilhabela",
            ],
            [
                "id_cidade" => 3505,
                "id_estado" => 35,
                "nome" => "Indaiatuba",
            ],
            [
                "id_cidade" => 3506,
                "id_estado" => 35,
                "nome" => "Indiana",
            ],
            [
                "id_cidade" => 3507,
                "id_estado" => 35,
                "nome" => "Indiaporã",
            ],
            [
                "id_cidade" => 3508,
                "id_estado" => 35,
                "nome" => "Inúbia Paulista",
            ],
            [
                "id_cidade" => 3509,
                "id_estado" => 35,
                "nome" => "Ipaussu",
            ],
            [
                "id_cidade" => 3510,
                "id_estado" => 35,
                "nome" => "Iperó",
            ],
            [
                "id_cidade" => 3511,
                "id_estado" => 35,
                "nome" => "Ipeúna",
            ],
            [
                "id_cidade" => 3512,
                "id_estado" => 35,
                "nome" => "Ipiguá",
            ],
            [
                "id_cidade" => 3513,
                "id_estado" => 35,
                "nome" => "Iporanga",
            ],
            [
                "id_cidade" => 3514,
                "id_estado" => 35,
                "nome" => "Ipuã",
            ],
            [
                "id_cidade" => 3515,
                "id_estado" => 35,
                "nome" => "Iracemápolis",
            ],
            [
                "id_cidade" => 3516,
                "id_estado" => 35,
                "nome" => "Irapuã",
            ],
            [
                "id_cidade" => 3517,
                "id_estado" => 35,
                "nome" => "Irapuru",
            ],
            [
                "id_cidade" => 3518,
                "id_estado" => 35,
                "nome" => "Itaberá",
            ],
            [
                "id_cidade" => 3519,
                "id_estado" => 35,
                "nome" => "Itaí",
            ],
            [
                "id_cidade" => 3520,
                "id_estado" => 35,
                "nome" => "Itajobi",
            ],
            [
                "id_cidade" => 3521,
                "id_estado" => 35,
                "nome" => "Itaju",
            ],
            [
                "id_cidade" => 3522,
                "id_estado" => 35,
                "nome" => "Itanhaém",
            ],
            [
                "id_cidade" => 3523,
                "id_estado" => 35,
                "nome" => "Itaoca",
            ],
            [
                "id_cidade" => 3524,
                "id_estado" => 35,
                "nome" => "Itapecerica da Serra",
            ],
            [
                "id_cidade" => 3525,
                "id_estado" => 35,
                "nome" => "Itapetininga",
            ],
            [
                "id_cidade" => 3526,
                "id_estado" => 35,
                "nome" => "Itapeva",
            ],
            [
                "id_cidade" => 3527,
                "id_estado" => 35,
                "nome" => "Itapevi",
            ],
            [
                "id_cidade" => 3528,
                "id_estado" => 35,
                "nome" => "Itapira",
            ],
            [
                "id_cidade" => 3529,
                "id_estado" => 35,
                "nome" => "Itapirapuã Paulista",
            ],
            [
                "id_cidade" => 3530,
                "id_estado" => 35,
                "nome" => "Itápolis",
            ],
            [
                "id_cidade" => 3531,
                "id_estado" => 35,
                "nome" => "Itaporanga",
            ],
            [
                "id_cidade" => 3532,
                "id_estado" => 35,
                "nome" => "Itapuí",
            ],
            [
                "id_cidade" => 3533,
                "id_estado" => 35,
                "nome" => "Itapura",
            ],
            [
                "id_cidade" => 3534,
                "id_estado" => 35,
                "nome" => "Itaquaquecetuba",
            ],
            [
                "id_cidade" => 3535,
                "id_estado" => 35,
                "nome" => "Itararé",
            ],
            [
                "id_cidade" => 3536,
                "id_estado" => 35,
                "nome" => "Itariri",
            ],
            [
                "id_cidade" => 3537,
                "id_estado" => 35,
                "nome" => "Itatiba",
            ],
            [
                "id_cidade" => 3538,
                "id_estado" => 35,
                "nome" => "Itatinga",
            ],
            [
                "id_cidade" => 3539,
                "id_estado" => 35,
                "nome" => "Itirapina",
            ],
            [
                "id_cidade" => 3540,
                "id_estado" => 35,
                "nome" => "Itirapuã",
            ],
            [
                "id_cidade" => 3541,
                "id_estado" => 35,
                "nome" => "Itobi",
            ],
            [
                "id_cidade" => 3542,
                "id_estado" => 35,
                "nome" => "Itu",
            ],
            [
                "id_cidade" => 3543,
                "id_estado" => 35,
                "nome" => "Itupeva",
            ],
            [
                "id_cidade" => 3544,
                "id_estado" => 35,
                "nome" => "Ituverava",
            ],
            [
                "id_cidade" => 3545,
                "id_estado" => 35,
                "nome" => "Jaborandi",
            ],
            [
                "id_cidade" => 3546,
                "id_estado" => 35,
                "nome" => "Jaboticabal",
            ],
            [
                "id_cidade" => 3547,
                "id_estado" => 35,
                "nome" => "Jacareí",
            ],
            [
                "id_cidade" => 3548,
                "id_estado" => 35,
                "nome" => "Jaci",
            ],
            [
                "id_cidade" => 3549,
                "id_estado" => 35,
                "nome" => "Jacupiranga",
            ],
            [
                "id_cidade" => 3550,
                "id_estado" => 35,
                "nome" => "Jaguariúna",
            ],
            [
                "id_cidade" => 3551,
                "id_estado" => 35,
                "nome" => "Jales",
            ],
            [
                "id_cidade" => 3552,
                "id_estado" => 35,
                "nome" => "Jambeiro",
            ],
            [
                "id_cidade" => 3553,
                "id_estado" => 35,
                "nome" => "Jandira",
            ],
            [
                "id_cidade" => 3554,
                "id_estado" => 35,
                "nome" => "Jardinópolis",
            ],
            [
                "id_cidade" => 3555,
                "id_estado" => 35,
                "nome" => "Jarinu",
            ],
            [
                "id_cidade" => 3556,
                "id_estado" => 35,
                "nome" => "Jaú",
            ],
            [
                "id_cidade" => 3557,
                "id_estado" => 35,
                "nome" => "Jeriquara",
            ],
            [
                "id_cidade" => 3558,
                "id_estado" => 35,
                "nome" => "Joanópolis",
            ],
            [
                "id_cidade" => 3559,
                "id_estado" => 35,
                "nome" => "João Ramalho",
            ],
            [
                "id_cidade" => 3560,
                "id_estado" => 35,
                "nome" => "José Bonifácio",
            ],
            [
                "id_cidade" => 3561,
                "id_estado" => 35,
                "nome" => "Júlio Mesquita",
            ],
            [
                "id_cidade" => 3562,
                "id_estado" => 35,
                "nome" => "Jumirim",
            ],
            [
                "id_cidade" => 3563,
                "id_estado" => 35,
                "nome" => "Jundiaí",
            ],
            [
                "id_cidade" => 3564,
                "id_estado" => 35,
                "nome" => "Junqueirópolis",
            ],
            [
                "id_cidade" => 3565,
                "id_estado" => 35,
                "nome" => "Juquiá",
            ],
            [
                "id_cidade" => 3566,
                "id_estado" => 35,
                "nome" => "Juquitiba",
            ],
            [
                "id_cidade" => 3567,
                "id_estado" => 35,
                "nome" => "Lagoinha",
            ],
            [
                "id_cidade" => 3568,
                "id_estado" => 35,
                "nome" => "Laranjal Paulista",
            ],
            [
                "id_cidade" => 3569,
                "id_estado" => 35,
                "nome" => "Lavínia",
            ],
            [
                "id_cidade" => 3570,
                "id_estado" => 35,
                "nome" => "Lavrinhas",
            ],
            [
                "id_cidade" => 3571,
                "id_estado" => 35,
                "nome" => "Leme",
            ],
            [
                "id_cidade" => 3572,
                "id_estado" => 35,
                "nome" => "Lençóis Paulista",
            ],
            [
                "id_cidade" => 3573,
                "id_estado" => 35,
                "nome" => "Limeira",
            ],
            [
                "id_cidade" => 3574,
                "id_estado" => 35,
                "nome" => "Lindóia",
            ],
            [
                "id_cidade" => 3575,
                "id_estado" => 35,
                "nome" => "Lins",
            ],
            [
                "id_cidade" => 3576,
                "id_estado" => 35,
                "nome" => "Lorena",
            ],
            [
                "id_cidade" => 3577,
                "id_estado" => 35,
                "nome" => "Lourdes",
            ],
            [
                "id_cidade" => 3578,
                "id_estado" => 35,
                "nome" => "Louveira",
            ],
            [
                "id_cidade" => 3579,
                "id_estado" => 35,
                "nome" => "Lucélia",
            ],
            [
                "id_cidade" => 3580,
                "id_estado" => 35,
                "nome" => "Lucianópolis",
            ],
            [
                "id_cidade" => 3581,
                "id_estado" => 35,
                "nome" => "Luís Antônio",
            ],
            [
                "id_cidade" => 3582,
                "id_estado" => 35,
                "nome" => "Luiziânia",
            ],
            [
                "id_cidade" => 3583,
                "id_estado" => 35,
                "nome" => "Lupércio",
            ],
            [
                "id_cidade" => 3584,
                "id_estado" => 35,
                "nome" => "Lutécia",
            ],
            [
                "id_cidade" => 3585,
                "id_estado" => 35,
                "nome" => "Macatuba",
            ],
            [
                "id_cidade" => 3586,
                "id_estado" => 35,
                "nome" => "Macaubal",
            ],
            [
                "id_cidade" => 3587,
                "id_estado" => 35,
                "nome" => "Macedônia",
            ],
            [
                "id_cidade" => 3588,
                "id_estado" => 35,
                "nome" => "Magda",
            ],
            [
                "id_cidade" => 3589,
                "id_estado" => 35,
                "nome" => "Mairinque",
            ],
            [
                "id_cidade" => 3590,
                "id_estado" => 35,
                "nome" => "Mairiporã",
            ],
            [
                "id_cidade" => 3591,
                "id_estado" => 35,
                "nome" => "Manduri",
            ],
            [
                "id_cidade" => 3592,
                "id_estado" => 35,
                "nome" => "Marabá Paulista",
            ],
            [
                "id_cidade" => 3593,
                "id_estado" => 35,
                "nome" => "Maracaí",
            ],
            [
                "id_cidade" => 3594,
                "id_estado" => 35,
                "nome" => "Marapoama",
            ],
            [
                "id_cidade" => 3595,
                "id_estado" => 35,
                "nome" => "Mariápolis",
            ],
            [
                "id_cidade" => 3596,
                "id_estado" => 35,
                "nome" => "Marília",
            ],
            [
                "id_cidade" => 3597,
                "id_estado" => 35,
                "nome" => "Marinópolis",
            ],
            [
                "id_cidade" => 3598,
                "id_estado" => 35,
                "nome" => "Martinópolis",
            ],
            [
                "id_cidade" => 3599,
                "id_estado" => 35,
                "nome" => "Matão",
            ],
            [
                "id_cidade" => 3600,
                "id_estado" => 35,
                "nome" => "Mauá",
            ],
            [
                "id_cidade" => 3601,
                "id_estado" => 35,
                "nome" => "Mendonça",
            ],
            [
                "id_cidade" => 3602,
                "id_estado" => 35,
                "nome" => "Meridiano",
            ],
            [
                "id_cidade" => 3603,
                "id_estado" => 35,
                "nome" => "Mesópolis",
            ],
            [
                "id_cidade" => 3604,
                "id_estado" => 35,
                "nome" => "Miguelópolis",
            ],
            [
                "id_cidade" => 3605,
                "id_estado" => 35,
                "nome" => "Mineiros do Tietê",
            ],
            [
                "id_cidade" => 3606,
                "id_estado" => 35,
                "nome" => "Mira Estrela",
            ],
            [
                "id_cidade" => 3607,
                "id_estado" => 35,
                "nome" => "Miracatu",
            ],
            [
                "id_cidade" => 3608,
                "id_estado" => 35,
                "nome" => "Mirandópolis",
            ],
            [
                "id_cidade" => 3609,
                "id_estado" => 35,
                "nome" => "Mirante do Paranapanema",
            ],
            [
                "id_cidade" => 3610,
                "id_estado" => 35,
                "nome" => "Mirassol",
            ],
            [
                "id_cidade" => 3611,
                "id_estado" => 35,
                "nome" => "Mirassolândia",
            ],
            [
                "id_cidade" => 3612,
                "id_estado" => 35,
                "nome" => "Mococa",
            ],
            [
                "id_cidade" => 3613,
                "id_estado" => 35,
                "nome" => "Mogi das Cruzes",
            ],
            [
                "id_cidade" => 3614,
                "id_estado" => 35,
                "nome" => "Mogi Guaçu",
            ],
            [
                "id_cidade" => 3615,
                "id_estado" => 35,
                "nome" => "Mogi Mirim",
            ],
            [
                "id_cidade" => 3616,
                "id_estado" => 35,
                "nome" => "Mombuca",
            ],
            [
                "id_cidade" => 3617,
                "id_estado" => 35,
                "nome" => "Monções",
            ],
            [
                "id_cidade" => 3618,
                "id_estado" => 35,
                "nome" => "Mongaguá",
            ],
            [
                "id_cidade" => 3619,
                "id_estado" => 35,
                "nome" => "Monte Alegre do Sul",
            ],
            [
                "id_cidade" => 3620,
                "id_estado" => 35,
                "nome" => "Monte Alto",
            ],
            [
                "id_cidade" => 3621,
                "id_estado" => 35,
                "nome" => "Monte Aprazível",
            ],
            [
                "id_cidade" => 3622,
                "id_estado" => 35,
                "nome" => "Monte Azul Paulista",
            ],
            [
                "id_cidade" => 3623,
                "id_estado" => 35,
                "nome" => "Monte Castelo",
            ],
            [
                "id_cidade" => 3624,
                "id_estado" => 35,
                "nome" => "Monte Mor",
            ],
            [
                "id_cidade" => 3625,
                "id_estado" => 35,
                "nome" => "Monteiro Lobato",
            ],
            [
                "id_cidade" => 3626,
                "id_estado" => 35,
                "nome" => "Morro Agudo",
            ],
            [
                "id_cidade" => 3627,
                "id_estado" => 35,
                "nome" => "Morungaba",
            ],
            [
                "id_cidade" => 3628,
                "id_estado" => 35,
                "nome" => "Motuca",
            ],
            [
                "id_cidade" => 3629,
                "id_estado" => 35,
                "nome" => "Murutinga do Sul",
            ],
            [
                "id_cidade" => 3630,
                "id_estado" => 35,
                "nome" => "Nantes",
            ],
            [
                "id_cidade" => 3631,
                "id_estado" => 35,
                "nome" => "Narandiba",
            ],
            [
                "id_cidade" => 3632,
                "id_estado" => 35,
                "nome" => "Natividade da Serra",
            ],
            [
                "id_cidade" => 3633,
                "id_estado" => 35,
                "nome" => "Nazaré Paulista",
            ],
            [
                "id_cidade" => 3634,
                "id_estado" => 35,
                "nome" => "Neves Paulista",
            ],
            [
                "id_cidade" => 3635,
                "id_estado" => 35,
                "nome" => "Nhandeara",
            ],
            [
                "id_cidade" => 3636,
                "id_estado" => 35,
                "nome" => "Nipoã",
            ],
            [
                "id_cidade" => 3637,
                "id_estado" => 35,
                "nome" => "Nova Aliança",
            ],
            [
                "id_cidade" => 3638,
                "id_estado" => 35,
                "nome" => "Nova Campina",
            ],
            [
                "id_cidade" => 3639,
                "id_estado" => 35,
                "nome" => "Nova Canaã Paulista",
            ],
            [
                "id_cidade" => 3640,
                "id_estado" => 35,
                "nome" => "Nova Castilho",
            ],
            [
                "id_cidade" => 3641,
                "id_estado" => 35,
                "nome" => "Nova Europa",
            ],
            [
                "id_cidade" => 3642,
                "id_estado" => 35,
                "nome" => "Nova Granada",
            ],
            [
                "id_cidade" => 3643,
                "id_estado" => 35,
                "nome" => "Nova Guataporanga",
            ],
            [
                "id_cidade" => 3644,
                "id_estado" => 35,
                "nome" => "Nova Independência",
            ],
            [
                "id_cidade" => 3645,
                "id_estado" => 35,
                "nome" => "Nova Luzitânia",
            ],
            [
                "id_cidade" => 3646,
                "id_estado" => 35,
                "nome" => "Nova Odessa",
            ],
            [
                "id_cidade" => 3647,
                "id_estado" => 35,
                "nome" => "Novais",
            ],
            [
                "id_cidade" => 3648,
                "id_estado" => 35,
                "nome" => "Novo Horizonte",
            ],
            [
                "id_cidade" => 3649,
                "id_estado" => 35,
                "nome" => "Nuporanga",
            ],
            [
                "id_cidade" => 3650,
                "id_estado" => 35,
                "nome" => "Ocauçu",
            ],
            [
                "id_cidade" => 3651,
                "id_estado" => 35,
                "nome" => "Óleo",
            ],
            [
                "id_cidade" => 3652,
                "id_estado" => 35,
                "nome" => "Olímpia",
            ],
            [
                "id_cidade" => 3653,
                "id_estado" => 35,
                "nome" => "Onda Verde",
            ],
            [
                "id_cidade" => 3654,
                "id_estado" => 35,
                "nome" => "Oriente",
            ],
            [
                "id_cidade" => 3655,
                "id_estado" => 35,
                "nome" => "Orindiúva",
            ],
            [
                "id_cidade" => 3656,
                "id_estado" => 35,
                "nome" => "Orlândia",
            ],
            [
                "id_cidade" => 3657,
                "id_estado" => 35,
                "nome" => "Osasco",
            ],
            [
                "id_cidade" => 3658,
                "id_estado" => 35,
                "nome" => "Oscar Bressane",
            ],
            [
                "id_cidade" => 3659,
                "id_estado" => 35,
                "nome" => "Osvaldo Cruz",
            ],
            [
                "id_cidade" => 3660,
                "id_estado" => 35,
                "nome" => "Ourinhos",
            ],
            [
                "id_cidade" => 3661,
                "id_estado" => 35,
                "nome" => "Ouro Verde",
            ],
            [
                "id_cidade" => 3662,
                "id_estado" => 35,
                "nome" => "Ouroeste",
            ],
            [
                "id_cidade" => 3663,
                "id_estado" => 35,
                "nome" => "Pacaembu",
            ],
            [
                "id_cidade" => 3664,
                "id_estado" => 35,
                "nome" => "Palestina",
            ],
            [
                "id_cidade" => 3665,
                "id_estado" => 35,
                "nome" => "Palmares Paulista",
            ],
            [
                "id_cidade" => 3666,
                "id_estado" => 35,
                "nome" => "Palmeira d'Oeste",
            ],
            [
                "id_cidade" => 3667,
                "id_estado" => 35,
                "nome" => "Palmital",
            ],
            [
                "id_cidade" => 3668,
                "id_estado" => 35,
                "nome" => "Panorama",
            ],
            [
                "id_cidade" => 3669,
                "id_estado" => 35,
                "nome" => "Paraguaçu Paulista",
            ],
            [
                "id_cidade" => 3670,
                "id_estado" => 35,
                "nome" => "Paraibuna",
            ],
            [
                "id_cidade" => 3671,
                "id_estado" => 35,
                "nome" => "Paraíso",
            ],
            [
                "id_cidade" => 3672,
                "id_estado" => 35,
                "nome" => "Paranapanema",
            ],
            [
                "id_cidade" => 3673,
                "id_estado" => 35,
                "nome" => "Paranapuã",
            ],
            [
                "id_cidade" => 3674,
                "id_estado" => 35,
                "nome" => "Parapuã",
            ],
            [
                "id_cidade" => 3675,
                "id_estado" => 35,
                "nome" => "Pardinho",
            ],
            [
                "id_cidade" => 3676,
                "id_estado" => 35,
                "nome" => "Pariquera-Açu",
            ],
            [
                "id_cidade" => 3677,
                "id_estado" => 35,
                "nome" => "Parisi",
            ],
            [
                "id_cidade" => 3678,
                "id_estado" => 35,
                "nome" => "Patrocínio Paulista",
            ],
            [
                "id_cidade" => 3679,
                "id_estado" => 35,
                "nome" => "Paulicéia",
            ],
            [
                "id_cidade" => 3680,
                "id_estado" => 35,
                "nome" => "Paulínia",
            ],
            [
                "id_cidade" => 3681,
                "id_estado" => 35,
                "nome" => "Paulistânia",
            ],
            [
                "id_cidade" => 3682,
                "id_estado" => 35,
                "nome" => "Paulo de Faria",
            ],
            [
                "id_cidade" => 3683,
                "id_estado" => 35,
                "nome" => "Pederneiras",
            ],
            [
                "id_cidade" => 3684,
                "id_estado" => 35,
                "nome" => "Pedra Bela",
            ],
            [
                "id_cidade" => 3685,
                "id_estado" => 35,
                "nome" => "Pedranópolis",
            ],
            [
                "id_cidade" => 3686,
                "id_estado" => 35,
                "nome" => "Pedregulho",
            ],
            [
                "id_cidade" => 3687,
                "id_estado" => 35,
                "nome" => "Pedreira",
            ],
            [
                "id_cidade" => 3688,
                "id_estado" => 35,
                "nome" => "Pedrinhas Paulista",
            ],
            [
                "id_cidade" => 3689,
                "id_estado" => 35,
                "nome" => "Pedro de Toledo",
            ],
            [
                "id_cidade" => 3690,
                "id_estado" => 35,
                "nome" => "Penápolis",
            ],
            [
                "id_cidade" => 3691,
                "id_estado" => 35,
                "nome" => "Pereira Barreto",
            ],
            [
                "id_cidade" => 3692,
                "id_estado" => 35,
                "nome" => "Pereiras",
            ],
            [
                "id_cidade" => 3693,
                "id_estado" => 35,
                "nome" => "Peruíbe",
            ],
            [
                "id_cidade" => 3694,
                "id_estado" => 35,
                "nome" => "Piacatu",
            ],
            [
                "id_cidade" => 3695,
                "id_estado" => 35,
                "nome" => "Piedade",
            ],
            [
                "id_cidade" => 3696,
                "id_estado" => 35,
                "nome" => "Pilar do Sul",
            ],
            [
                "id_cidade" => 3697,
                "id_estado" => 35,
                "nome" => "Pindamonhangaba",
            ],
            [
                "id_cidade" => 3698,
                "id_estado" => 35,
                "nome" => "Pindorama",
            ],
            [
                "id_cidade" => 3699,
                "id_estado" => 35,
                "nome" => "Pinhalzinho",
            ],
            [
                "id_cidade" => 3700,
                "id_estado" => 35,
                "nome" => "Piquerobi",
            ],
            [
                "id_cidade" => 3701,
                "id_estado" => 35,
                "nome" => "Piquete",
            ],
            [
                "id_cidade" => 3702,
                "id_estado" => 35,
                "nome" => "Piracaia",
            ],
            [
                "id_cidade" => 3703,
                "id_estado" => 35,
                "nome" => "Piracicaba",
            ],
            [
                "id_cidade" => 3704,
                "id_estado" => 35,
                "nome" => "Piraju",
            ],
            [
                "id_cidade" => 3705,
                "id_estado" => 35,
                "nome" => "Pirajuí",
            ],
            [
                "id_cidade" => 3706,
                "id_estado" => 35,
                "nome" => "Pirangi",
            ],
            [
                "id_cidade" => 3707,
                "id_estado" => 35,
                "nome" => "Pirapora do Bom Jesus",
            ],
            [
                "id_cidade" => 3708,
                "id_estado" => 35,
                "nome" => "Pirapozinho",
            ],
            [
                "id_cidade" => 3709,
                "id_estado" => 35,
                "nome" => "Pirassununga",
            ],
            [
                "id_cidade" => 3710,
                "id_estado" => 35,
                "nome" => "Piratininga",
            ],
            [
                "id_cidade" => 3711,
                "id_estado" => 35,
                "nome" => "Pitangueiras",
            ],
            [
                "id_cidade" => 3712,
                "id_estado" => 35,
                "nome" => "Planalto",
            ],
            [
                "id_cidade" => 3713,
                "id_estado" => 35,
                "nome" => "Platina",
            ],
            [
                "id_cidade" => 3714,
                "id_estado" => 35,
                "nome" => "Poá",
            ],
            [
                "id_cidade" => 3715,
                "id_estado" => 35,
                "nome" => "Poloni",
            ],
            [
                "id_cidade" => 3716,
                "id_estado" => 35,
                "nome" => "Pompéia",
            ],
            [
                "id_cidade" => 3717,
                "id_estado" => 35,
                "nome" => "Pongaí",
            ],
            [
                "id_cidade" => 3718,
                "id_estado" => 35,
                "nome" => "Pontal",
            ],
            [
                "id_cidade" => 3719,
                "id_estado" => 35,
                "nome" => "Pontalinda",
            ],
            [
                "id_cidade" => 3720,
                "id_estado" => 35,
                "nome" => "Pontes Gestal",
            ],
            [
                "id_cidade" => 3721,
                "id_estado" => 35,
                "nome" => "Populina",
            ],
            [
                "id_cidade" => 3722,
                "id_estado" => 35,
                "nome" => "Porangaba",
            ],
            [
                "id_cidade" => 3723,
                "id_estado" => 35,
                "nome" => "Porto Feliz",
            ],
            [
                "id_cidade" => 3724,
                "id_estado" => 35,
                "nome" => "Porto Ferreira",
            ],
            [
                "id_cidade" => 3725,
                "id_estado" => 35,
                "nome" => "Potim",
            ],
            [
                "id_cidade" => 3726,
                "id_estado" => 35,
                "nome" => "Potirendaba",
            ],
            [
                "id_cidade" => 3727,
                "id_estado" => 35,
                "nome" => "Pracinha",
            ],
            [
                "id_cidade" => 3728,
                "id_estado" => 35,
                "nome" => "Pradópolis",
            ],
            [
                "id_cidade" => 3729,
                "id_estado" => 35,
                "nome" => "Praia Grande",
            ],
            [
                "id_cidade" => 3730,
                "id_estado" => 35,
                "nome" => "Pratânia",
            ],
            [
                "id_cidade" => 3731,
                "id_estado" => 35,
                "nome" => "Presidente Alves",
            ],
            [
                "id_cidade" => 3732,
                "id_estado" => 35,
                "nome" => "Presidente Bernardes",
            ],
            [
                "id_cidade" => 3733,
                "id_estado" => 35,
                "nome" => "Presidente Epitácio",
            ],
            [
                "id_cidade" => 3734,
                "id_estado" => 35,
                "nome" => "Presidente Prudente",
            ],
            [
                "id_cidade" => 3735,
                "id_estado" => 35,
                "nome" => "Presidente Venceslau",
            ],
            [
                "id_cidade" => 3736,
                "id_estado" => 35,
                "nome" => "Promissão",
            ],
            [
                "id_cidade" => 3737,
                "id_estado" => 35,
                "nome" => "Quadra",
            ],
            [
                "id_cidade" => 3738,
                "id_estado" => 35,
                "nome" => "Quatá",
            ],
            [
                "id_cidade" => 3739,
                "id_estado" => 35,
                "nome" => "Queiroz",
            ],
            [
                "id_cidade" => 3740,
                "id_estado" => 35,
                "nome" => "Queluz",
            ],
            [
                "id_cidade" => 3741,
                "id_estado" => 35,
                "nome" => "Quintana",
            ],
            [
                "id_cidade" => 3742,
                "id_estado" => 35,
                "nome" => "Rafard",
            ],
            [
                "id_cidade" => 3743,
                "id_estado" => 35,
                "nome" => "Rancharia",
            ],
            [
                "id_cidade" => 3744,
                "id_estado" => 35,
                "nome" => "Redenção da Serra",
            ],
            [
                "id_cidade" => 3745,
                "id_estado" => 35,
                "nome" => "Regente Feijó",
            ],
            [
                "id_cidade" => 3746,
                "id_estado" => 35,
                "nome" => "Reginópolis",
            ],
            [
                "id_cidade" => 3747,
                "id_estado" => 35,
                "nome" => "Registro",
            ],
            [
                "id_cidade" => 3748,
                "id_estado" => 35,
                "nome" => "Restinga",
            ],
            [
                "id_cidade" => 3749,
                "id_estado" => 35,
                "nome" => "Ribeira",
            ],
            [
                "id_cidade" => 3750,
                "id_estado" => 35,
                "nome" => "Ribeirão Bonito",
            ],
            [
                "id_cidade" => 3751,
                "id_estado" => 35,
                "nome" => "Ribeirão Branco",
            ],
            [
                "id_cidade" => 3752,
                "id_estado" => 35,
                "nome" => "Ribeirão Corrente",
            ],
            [
                "id_cidade" => 3753,
                "id_estado" => 35,
                "nome" => "Ribeirão do Sul",
            ],
            [
                "id_cidade" => 3754,
                "id_estado" => 35,
                "nome" => "Ribeirão dos Índios",
            ],
            [
                "id_cidade" => 3755,
                "id_estado" => 35,
                "nome" => "Ribeirão Grande",
            ],
            [
                "id_cidade" => 3756,
                "id_estado" => 35,
                "nome" => "Ribeirão Pires",
            ],
            [
                "id_cidade" => 3757,
                "id_estado" => 35,
                "nome" => "Ribeirão Preto",
            ],
            [
                "id_cidade" => 3758,
                "id_estado" => 35,
                "nome" => "Rifaina",
            ],
            [
                "id_cidade" => 3759,
                "id_estado" => 35,
                "nome" => "Rincão",
            ],
            [
                "id_cidade" => 3760,
                "id_estado" => 35,
                "nome" => "Rinópolis",
            ],
            [
                "id_cidade" => 3761,
                "id_estado" => 35,
                "nome" => "Rio Claro",
            ],
            [
                "id_cidade" => 3762,
                "id_estado" => 35,
                "nome" => "Rio das Pedras",
            ],
            [
                "id_cidade" => 3763,
                "id_estado" => 35,
                "nome" => "Rio Grande da Serra",
            ],
            [
                "id_cidade" => 3764,
                "id_estado" => 35,
                "nome" => "Riolândia",
            ],
            [
                "id_cidade" => 3765,
                "id_estado" => 35,
                "nome" => "Riversul",
            ],
            [
                "id_cidade" => 3766,
                "id_estado" => 35,
                "nome" => "Rosana",
            ],
            [
                "id_cidade" => 3767,
                "id_estado" => 35,
                "nome" => "Roseira",
            ],
            [
                "id_cidade" => 3768,
                "id_estado" => 35,
                "nome" => "Rubiácea",
            ],
            [
                "id_cidade" => 3769,
                "id_estado" => 35,
                "nome" => "Rubinéia",
            ],
            [
                "id_cidade" => 3770,
                "id_estado" => 35,
                "nome" => "Sabino",
            ],
            [
                "id_cidade" => 3771,
                "id_estado" => 35,
                "nome" => "Sagres",
            ],
            [
                "id_cidade" => 3772,
                "id_estado" => 35,
                "nome" => "Sales",
            ],
            [
                "id_cidade" => 3773,
                "id_estado" => 35,
                "nome" => "Sales Oliveira",
            ],
            [
                "id_cidade" => 3774,
                "id_estado" => 35,
                "nome" => "Salesópolis",
            ],
            [
                "id_cidade" => 3775,
                "id_estado" => 35,
                "nome" => "Salmourão",
            ],
            [
                "id_cidade" => 3776,
                "id_estado" => 35,
                "nome" => "Saltinho",
            ],
            [
                "id_cidade" => 3777,
                "id_estado" => 35,
                "nome" => "Salto",
            ],
            [
                "id_cidade" => 3778,
                "id_estado" => 35,
                "nome" => "Salto de Pirapora",
            ],
            [
                "id_cidade" => 3779,
                "id_estado" => 35,
                "nome" => "Salto Grande",
            ],
            [
                "id_cidade" => 3780,
                "id_estado" => 35,
                "nome" => "Sandovalina",
            ],
            [
                "id_cidade" => 3781,
                "id_estado" => 35,
                "nome" => "Santa Adélia",
            ],
            [
                "id_cidade" => 3782,
                "id_estado" => 35,
                "nome" => "Santa Albertina",
            ],
            [
                "id_cidade" => 3783,
                "id_estado" => 35,
                "nome" => "Santa Bárbara d'Oeste",
            ],
            [
                "id_cidade" => 3784,
                "id_estado" => 35,
                "nome" => "Santa Branca",
            ],
            [
                "id_cidade" => 3785,
                "id_estado" => 35,
                "nome" => "Santa Clara d'Oeste",
            ],
            [
                "id_cidade" => 3786,
                "id_estado" => 35,
                "nome" => "Santa Cruz da Conceição",
            ],
            [
                "id_cidade" => 3787,
                "id_estado" => 35,
                "nome" => "Santa Cruz da Esperança",
            ],
            [
                "id_cidade" => 3788,
                "id_estado" => 35,
                "nome" => "Santa Cruz das Palmeiras",
            ],
            [
                "id_cidade" => 3789,
                "id_estado" => 35,
                "nome" => "Santa Cruz do Rio Pardo",
            ],
            [
                "id_cidade" => 3790,
                "id_estado" => 35,
                "nome" => "Santa Ernestina",
            ],
            [
                "id_cidade" => 3791,
                "id_estado" => 35,
                "nome" => "Santa Fé do Sul",
            ],
            [
                "id_cidade" => 3792,
                "id_estado" => 35,
                "nome" => "Santa Gertrudes",
            ],
            [
                "id_cidade" => 3793,
                "id_estado" => 35,
                "nome" => "Santa Isabel",
            ],
            [
                "id_cidade" => 3794,
                "id_estado" => 35,
                "nome" => "Santa Lúcia",
            ],
            [
                "id_cidade" => 3795,
                "id_estado" => 35,
                "nome" => "Santa Maria da Serra",
            ],
            [
                "id_cidade" => 3796,
                "id_estado" => 35,
                "nome" => "Santa Mercedes",
            ],
            [
                "id_cidade" => 3797,
                "id_estado" => 35,
                "nome" => "Santa Rita do Passa Quatro",
            ],
            [
                "id_cidade" => 3798,
                "id_estado" => 35,
                "nome" => "Santa Rita d'Oeste",
            ],
            [
                "id_cidade" => 3799,
                "id_estado" => 35,
                "nome" => "Santa Rosa de Viterbo",
            ],
            [
                "id_cidade" => 3800,
                "id_estado" => 35,
                "nome" => "Santa Salete",
            ],
            [
                "id_cidade" => 3801,
                "id_estado" => 35,
                "nome" => "Santana da Ponte Pensa",
            ],
            [
                "id_cidade" => 3802,
                "id_estado" => 35,
                "nome" => "Santana de Parnaíba",
            ],
            [
                "id_cidade" => 3803,
                "id_estado" => 35,
                "nome" => "Santo Anastácio",
            ],
            [
                "id_cidade" => 3804,
                "id_estado" => 35,
                "nome" => "Santo André",
            ],
            [
                "id_cidade" => 3805,
                "id_estado" => 35,
                "nome" => "Santo Antônio da Alegria",
            ],
            [
                "id_cidade" => 3806,
                "id_estado" => 35,
                "nome" => "Santo Antônio de Posse",
            ],
            [
                "id_cidade" => 3807,
                "id_estado" => 35,
                "nome" => "Santo Antônio do Aracanguá",
            ],
            [
                "id_cidade" => 3808,
                "id_estado" => 35,
                "nome" => "Santo Antônio do Jardim",
            ],
            [
                "id_cidade" => 3809,
                "id_estado" => 35,
                "nome" => "Santo Antônio do Pinhal",
            ],
            [
                "id_cidade" => 3810,
                "id_estado" => 35,
                "nome" => "Santo Expedito",
            ],
            [
                "id_cidade" => 3811,
                "id_estado" => 35,
                "nome" => "Santópolis do Aguapeí",
            ],
            [
                "id_cidade" => 3812,
                "id_estado" => 35,
                "nome" => "Santos",
            ],
            [
                "id_cidade" => 3813,
                "id_estado" => 35,
                "nome" => "São Bento do Sapucaí",
            ],
            [
                "id_cidade" => 3814,
                "id_estado" => 35,
                "nome" => "São Bernardo do Campo",
            ],
            [
                "id_cidade" => 3815,
                "id_estado" => 35,
                "nome" => "São Caetano do Sul",
            ],
            [
                "id_cidade" => 3816,
                "id_estado" => 35,
                "nome" => "São Carlos",
            ],
            [
                "id_cidade" => 3817,
                "id_estado" => 35,
                "nome" => "São Francisco",
            ],
            [
                "id_cidade" => 3818,
                "id_estado" => 35,
                "nome" => "São João da Boa Vista",
            ],
            [
                "id_cidade" => 3819,
                "id_estado" => 35,
                "nome" => "São João das Duas Pontes",
            ],
            [
                "id_cidade" => 3820,
                "id_estado" => 35,
                "nome" => "São João de Iracema",
            ],
            [
                "id_cidade" => 3821,
                "id_estado" => 35,
                "nome" => "São João do Pau d'Alho",
            ],
            [
                "id_cidade" => 3822,
                "id_estado" => 35,
                "nome" => "São Joaquim da Barra",
            ],
            [
                "id_cidade" => 3823,
                "id_estado" => 35,
                "nome" => "São José da Bela Vista",
            ],
            [
                "id_cidade" => 3824,
                "id_estado" => 35,
                "nome" => "São José do Barreiro",
            ],
            [
                "id_cidade" => 3825,
                "id_estado" => 35,
                "nome" => "São José do Rio Pardo",
            ],
            [
                "id_cidade" => 3826,
                "id_estado" => 35,
                "nome" => "São José do Rio Preto",
            ],
            [
                "id_cidade" => 3827,
                "id_estado" => 35,
                "nome" => "São José dos Campos",
            ],
            [
                "id_cidade" => 3828,
                "id_estado" => 35,
                "nome" => "São Lourenço da Serra",
            ],
            [
                "id_cidade" => 3829,
                "id_estado" => 35,
                "nome" => "São Luiz do Paraitinga",
            ],
            [
                "id_cidade" => 3830,
                "id_estado" => 35,
                "nome" => "São Manuel",
            ],
            [
                "id_cidade" => 3831,
                "id_estado" => 35,
                "nome" => "São Miguel Arcanjo",
            ],
            [
                "id_cidade" => 3832,
                "id_estado" => 35,
                "nome" => "São Paulo",
            ],
            [
                "id_cidade" => 3833,
                "id_estado" => 35,
                "nome" => "São Pedro",
            ],
            [
                "id_cidade" => 3834,
                "id_estado" => 35,
                "nome" => "São Pedro do Turvo",
            ],
            [
                "id_cidade" => 3835,
                "id_estado" => 35,
                "nome" => "São Roque",
            ],
            [
                "id_cidade" => 3836,
                "id_estado" => 35,
                "nome" => "São Sebastião",
            ],
            [
                "id_cidade" => 3837,
                "id_estado" => 35,
                "nome" => "São Sebastião da Grama",
            ],
            [
                "id_cidade" => 3838,
                "id_estado" => 35,
                "nome" => "São Simão",
            ],
            [
                "id_cidade" => 3839,
                "id_estado" => 35,
                "nome" => "São Vicente",
            ],
            [
                "id_cidade" => 3840,
                "id_estado" => 35,
                "nome" => "Sarapuí",
            ],
            [
                "id_cidade" => 3841,
                "id_estado" => 35,
                "nome" => "Sarutaiá",
            ],
            [
                "id_cidade" => 3842,
                "id_estado" => 35,
                "nome" => "Sebastianópolis do Sul",
            ],
            [
                "id_cidade" => 3843,
                "id_estado" => 35,
                "nome" => "Serra Azul",
            ],
            [
                "id_cidade" => 3844,
                "id_estado" => 35,
                "nome" => "Serra Negra",
            ],
            [
                "id_cidade" => 3845,
                "id_estado" => 35,
                "nome" => "Serrana",
            ],
            [
                "id_cidade" => 3846,
                "id_estado" => 35,
                "nome" => "Sertãozinho",
            ],
            [
                "id_cidade" => 3847,
                "id_estado" => 35,
                "nome" => "Sete Barras",
            ],
            [
                "id_cidade" => 3848,
                "id_estado" => 35,
                "nome" => "Severínia",
            ],
            [
                "id_cidade" => 3849,
                "id_estado" => 35,
                "nome" => "Silveiras",
            ],
            [
                "id_cidade" => 3850,
                "id_estado" => 35,
                "nome" => "Socorro",
            ],
            [
                "id_cidade" => 3851,
                "id_estado" => 35,
                "nome" => "Sorocaba",
            ],
            [
                "id_cidade" => 3852,
                "id_estado" => 35,
                "nome" => "Sud Mennucci",
            ],
            [
                "id_cidade" => 3853,
                "id_estado" => 35,
                "nome" => "Sumaré",
            ],
            [
                "id_cidade" => 3854,
                "id_estado" => 35,
                "nome" => "Suzanápolis",
            ],
            [
                "id_cidade" => 3855,
                "id_estado" => 35,
                "nome" => "Suzano",
            ],
            [
                "id_cidade" => 3856,
                "id_estado" => 35,
                "nome" => "Tabapuã",
            ],
            [
                "id_cidade" => 3857,
                "id_estado" => 35,
                "nome" => "Tabatinga",
            ],
            [
                "id_cidade" => 3858,
                "id_estado" => 35,
                "nome" => "Taboão da Serra",
            ],
            [
                "id_cidade" => 3859,
                "id_estado" => 35,
                "nome" => "Taciba",
            ],
            [
                "id_cidade" => 3860,
                "id_estado" => 35,
                "nome" => "Taguaí",
            ],
            [
                "id_cidade" => 3861,
                "id_estado" => 35,
                "nome" => "Taiaçu",
            ],
            [
                "id_cidade" => 3862,
                "id_estado" => 35,
                "nome" => "Taiúva",
            ],
            [
                "id_cidade" => 3863,
                "id_estado" => 35,
                "nome" => "Tambaú",
            ],
            [
                "id_cidade" => 3864,
                "id_estado" => 35,
                "nome" => "Tanabi",
            ],
            [
                "id_cidade" => 3865,
                "id_estado" => 35,
                "nome" => "Tapiraí",
            ],
            [
                "id_cidade" => 3866,
                "id_estado" => 35,
                "nome" => "Tapiratiba",
            ],
            [
                "id_cidade" => 3867,
                "id_estado" => 35,
                "nome" => "Taquaral",
            ],
            [
                "id_cidade" => 3868,
                "id_estado" => 35,
                "nome" => "Taquaritinga",
            ],
            [
                "id_cidade" => 3869,
                "id_estado" => 35,
                "nome" => "Taquarituba",
            ],
            [
                "id_cidade" => 3870,
                "id_estado" => 35,
                "nome" => "Taquarivaí",
            ],
            [
                "id_cidade" => 3871,
                "id_estado" => 35,
                "nome" => "Tarabai",
            ],
            [
                "id_cidade" => 3872,
                "id_estado" => 35,
                "nome" => "Tarumã",
            ],
            [
                "id_cidade" => 3873,
                "id_estado" => 35,
                "nome" => "Tatuí",
            ],
            [
                "id_cidade" => 3874,
                "id_estado" => 35,
                "nome" => "Taubaté",
            ],
            [
                "id_cidade" => 3875,
                "id_estado" => 35,
                "nome" => "Tejupá",
            ],
            [
                "id_cidade" => 3876,
                "id_estado" => 35,
                "nome" => "Teodoro Sampaio",
            ],
            [
                "id_cidade" => 3877,
                "id_estado" => 35,
                "nome" => "Terra Roxa",
            ],
            [
                "id_cidade" => 3878,
                "id_estado" => 35,
                "nome" => "Tietê",
            ],
            [
                "id_cidade" => 3879,
                "id_estado" => 35,
                "nome" => "Timburi",
            ],
            [
                "id_cidade" => 3880,
                "id_estado" => 35,
                "nome" => "Torre de Pedra",
            ],
            [
                "id_cidade" => 3881,
                "id_estado" => 35,
                "nome" => "Torrinha",
            ],
            [
                "id_cidade" => 3882,
                "id_estado" => 35,
                "nome" => "Trabiju",
            ],
            [
                "id_cidade" => 3883,
                "id_estado" => 35,
                "nome" => "Tremembé",
            ],
            [
                "id_cidade" => 3884,
                "id_estado" => 35,
                "nome" => "Três Fronteiras",
            ],
            [
                "id_cidade" => 3885,
                "id_estado" => 35,
                "nome" => "Tuiuti",
            ],
            [
                "id_cidade" => 3886,
                "id_estado" => 35,
                "nome" => "Tupã",
            ],
            [
                "id_cidade" => 3887,
                "id_estado" => 35,
                "nome" => "Tupi Paulista",
            ],
            [
                "id_cidade" => 3888,
                "id_estado" => 35,
                "nome" => "Turiúba",
            ],
            [
                "id_cidade" => 3889,
                "id_estado" => 35,
                "nome" => "Turmalina",
            ],
            [
                "id_cidade" => 3890,
                "id_estado" => 35,
                "nome" => "Ubarana",
            ],
            [
                "id_cidade" => 3891,
                "id_estado" => 35,
                "nome" => "Ubatuba",
            ],
            [
                "id_cidade" => 3892,
                "id_estado" => 35,
                "nome" => "Ubirajara",
            ],
            [
                "id_cidade" => 3893,
                "id_estado" => 35,
                "nome" => "Uchoa",
            ],
            [
                "id_cidade" => 3894,
                "id_estado" => 35,
                "nome" => "União Paulista",
            ],
            [
                "id_cidade" => 3895,
                "id_estado" => 35,
                "nome" => "Urânia",
            ],
            [
                "id_cidade" => 3896,
                "id_estado" => 35,
                "nome" => "Uru",
            ],
            [
                "id_cidade" => 3897,
                "id_estado" => 35,
                "nome" => "Urupês",
            ],
            [
                "id_cidade" => 3898,
                "id_estado" => 35,
                "nome" => "Valentim Gentil",
            ],
            [
                "id_cidade" => 3899,
                "id_estado" => 35,
                "nome" => "Valinhos",
            ],
            [
                "id_cidade" => 3900,
                "id_estado" => 35,
                "nome" => "Valparaíso",
            ],
            [
                "id_cidade" => 3901,
                "id_estado" => 35,
                "nome" => "Vargem",
            ],
            [
                "id_cidade" => 3902,
                "id_estado" => 35,
                "nome" => "Vargem Grande do Sul",
            ],
            [
                "id_cidade" => 3903,
                "id_estado" => 35,
                "nome" => "Vargem Grande Paulista",
            ],
            [
                "id_cidade" => 3904,
                "id_estado" => 35,
                "nome" => "Várzea Paulista",
            ],
            [
                "id_cidade" => 3905,
                "id_estado" => 35,
                "nome" => "Vera Cruz",
            ],
            [
                "id_cidade" => 3906,
                "id_estado" => 35,
                "nome" => "Vinhedo",
            ],
            [
                "id_cidade" => 3907,
                "id_estado" => 35,
                "nome" => "Viradouro",
            ],
            [
                "id_cidade" => 3908,
                "id_estado" => 35,
                "nome" => "Vista Alegre do Alto",
            ],
            [
                "id_cidade" => 3909,
                "id_estado" => 35,
                "nome" => "Vitória Brasil",
            ],
            [
                "id_cidade" => 3910,
                "id_estado" => 35,
                "nome" => "Votorantim",
            ],
            [
                "id_cidade" => 3911,
                "id_estado" => 35,
                "nome" => "Votuporanga",
            ],
            [
                "id_cidade" => 3912,
                "id_estado" => 35,
                "nome" => "Zacarias",
            ],
            [
                "id_cidade" => 3913,
                "id_estado" => 41,
                "nome" => "Abatiá",
            ],
            [
                "id_cidade" => 3914,
                "id_estado" => 41,
                "nome" => "Adrianópolis",
            ],
            [
                "id_cidade" => 3915,
                "id_estado" => 41,
                "nome" => "Agudos do Sul",
            ],
            [
                "id_cidade" => 3916,
                "id_estado" => 41,
                "nome" => "Almirante Tamandaré",
            ],
            [
                "id_cidade" => 3917,
                "id_estado" => 41,
                "nome" => "Altamira do Paraná",
            ],
            [
                "id_cidade" => 3918,
                "id_estado" => 41,
                "nome" => "Alto Paraíso",
            ],
            [
                "id_cidade" => 3919,
                "id_estado" => 41,
                "nome" => "Alto Paraná",
            ],
            [
                "id_cidade" => 3920,
                "id_estado" => 41,
                "nome" => "Alto Piquiri",
            ],
            [
                "id_cidade" => 3921,
                "id_estado" => 41,
                "nome" => "Altônia",
            ],
            [
                "id_cidade" => 3922,
                "id_estado" => 41,
                "nome" => "Alvorada do Sul",
            ],
            [
                "id_cidade" => 3923,
                "id_estado" => 41,
                "nome" => "Amaporã",
            ],
            [
                "id_cidade" => 3924,
                "id_estado" => 41,
                "nome" => "Ampére",
            ],
            [
                "id_cidade" => 3925,
                "id_estado" => 41,
                "nome" => "Anahy",
            ],
            [
                "id_cidade" => 3926,
                "id_estado" => 41,
                "nome" => "Andirá",
            ],
            [
                "id_cidade" => 3927,
                "id_estado" => 41,
                "nome" => "Ângulo",
            ],
            [
                "id_cidade" => 3928,
                "id_estado" => 41,
                "nome" => "Antonina",
            ],
            [
                "id_cidade" => 3929,
                "id_estado" => 41,
                "nome" => "Antônio Olinto",
            ],
            [
                "id_cidade" => 3930,
                "id_estado" => 41,
                "nome" => "Apucarana",
            ],
            [
                "id_cidade" => 3931,
                "id_estado" => 41,
                "nome" => "Arapongas",
            ],
            [
                "id_cidade" => 3932,
                "id_estado" => 41,
                "nome" => "Arapoti",
            ],
            [
                "id_cidade" => 3933,
                "id_estado" => 41,
                "nome" => "Arapuã",
            ],
            [
                "id_cidade" => 3934,
                "id_estado" => 41,
                "nome" => "Araruna",
            ],
            [
                "id_cidade" => 3935,
                "id_estado" => 41,
                "nome" => "Araucária",
            ],
            [
                "id_cidade" => 3936,
                "id_estado" => 41,
                "nome" => "Ariranha do Ivaí",
            ],
            [
                "id_cidade" => 3937,
                "id_estado" => 41,
                "nome" => "Assaí",
            ],
            [
                "id_cidade" => 3938,
                "id_estado" => 41,
                "nome" => "Assis Chateaubriand",
            ],
            [
                "id_cidade" => 3939,
                "id_estado" => 41,
                "nome" => "Astorga",
            ],
            [
                "id_cidade" => 3940,
                "id_estado" => 41,
                "nome" => "Atalaia",
            ],
            [
                "id_cidade" => 3941,
                "id_estado" => 41,
                "nome" => "Balsa Nova",
            ],
            [
                "id_cidade" => 3942,
                "id_estado" => 41,
                "nome" => "Bandeirantes",
            ],
            [
                "id_cidade" => 3943,
                "id_estado" => 41,
                "nome" => "Barbosa Ferraz",
            ],
            [
                "id_cidade" => 3944,
                "id_estado" => 41,
                "nome" => "Barra do Jacaré",
            ],
            [
                "id_cidade" => 3945,
                "id_estado" => 41,
                "nome" => "Barracão",
            ],
            [
                "id_cidade" => 3946,
                "id_estado" => 41,
                "nome" => "Bela Vista da Caroba",
            ],
            [
                "id_cidade" => 3947,
                "id_estado" => 41,
                "nome" => "Bela Vista do Paraíso",
            ],
            [
                "id_cidade" => 3948,
                "id_estado" => 41,
                "nome" => "Bituruna",
            ],
            [
                "id_cidade" => 3949,
                "id_estado" => 41,
                "nome" => "Boa Esperança",
            ],
            [
                "id_cidade" => 3950,
                "id_estado" => 41,
                "nome" => "Boa Esperança do Iguaçu",
            ],
            [
                "id_cidade" => 3951,
                "id_estado" => 41,
                "nome" => "Boa Ventura de São Roque",
            ],
            [
                "id_cidade" => 3952,
                "id_estado" => 41,
                "nome" => "Boa Vista da Aparecida",
            ],
            [
                "id_cidade" => 3953,
                "id_estado" => 41,
                "nome" => "Bocaiúva do Sul",
            ],
            [
                "id_cidade" => 3954,
                "id_estado" => 41,
                "nome" => "Bom Jesus do Sul",
            ],
            [
                "id_cidade" => 3955,
                "id_estado" => 41,
                "nome" => "Bom Sucesso",
            ],
            [
                "id_cidade" => 3956,
                "id_estado" => 41,
                "nome" => "Bom Sucesso do Sul",
            ],
            [
                "id_cidade" => 3957,
                "id_estado" => 41,
                "nome" => "Borrazópolis",
            ],
            [
                "id_cidade" => 3958,
                "id_estado" => 41,
                "nome" => "Braganey",
            ],
            [
                "id_cidade" => 3959,
                "id_estado" => 41,
                "nome" => "Brasilândia do Sul",
            ],
            [
                "id_cidade" => 3960,
                "id_estado" => 41,
                "nome" => "Cafeara",
            ],
            [
                "id_cidade" => 3961,
                "id_estado" => 41,
                "nome" => "Cafelândia",
            ],
            [
                "id_cidade" => 3962,
                "id_estado" => 41,
                "nome" => "Cafezal do Sul",
            ],
            [
                "id_cidade" => 3963,
                "id_estado" => 41,
                "nome" => "Califórnia",
            ],
            [
                "id_cidade" => 3964,
                "id_estado" => 41,
                "nome" => "Cambará",
            ],
            [
                "id_cidade" => 3965,
                "id_estado" => 41,
                "nome" => "Cambé",
            ],
            [
                "id_cidade" => 3966,
                "id_estado" => 41,
                "nome" => "Cambira",
            ],
            [
                "id_cidade" => 3967,
                "id_estado" => 41,
                "nome" => "Campina da Lagoa",
            ],
            [
                "id_cidade" => 3968,
                "id_estado" => 41,
                "nome" => "Campina do Simão",
            ],
            [
                "id_cidade" => 3969,
                "id_estado" => 41,
                "nome" => "Campina Grande do Sul",
            ],
            [
                "id_cidade" => 3970,
                "id_estado" => 41,
                "nome" => "Campo Bonito",
            ],
            [
                "id_cidade" => 3971,
                "id_estado" => 41,
                "nome" => "Campo do Tenente",
            ],
            [
                "id_cidade" => 3972,
                "id_estado" => 41,
                "nome" => "Campo Largo",
            ],
            [
                "id_cidade" => 3973,
                "id_estado" => 41,
                "nome" => "Campo Magro",
            ],
            [
                "id_cidade" => 3974,
                "id_estado" => 41,
                "nome" => "Campo Mourão",
            ],
            [
                "id_cidade" => 3975,
                "id_estado" => 41,
                "nome" => "Cândido de Abreu",
            ],
            [
                "id_cidade" => 3976,
                "id_estado" => 41,
                "nome" => "Candói",
            ],
            [
                "id_cidade" => 3977,
                "id_estado" => 41,
                "nome" => "Cantagalo",
            ],
            [
                "id_cidade" => 3978,
                "id_estado" => 41,
                "nome" => "Capanema",
            ],
            [
                "id_cidade" => 3979,
                "id_estado" => 41,
                "nome" => "Capitão Leônidas Marques",
            ],
            [
                "id_cidade" => 3980,
                "id_estado" => 41,
                "nome" => "Carambeí",
            ],
            [
                "id_cidade" => 3981,
                "id_estado" => 41,
                "nome" => "Carlópolis",
            ],
            [
                "id_cidade" => 3982,
                "id_estado" => 41,
                "nome" => "Cascavel",
            ],
            [
                "id_cidade" => 3983,
                "id_estado" => 41,
                "nome" => "Castro",
            ],
            [
                "id_cidade" => 3984,
                "id_estado" => 41,
                "nome" => "Catanduvas",
            ],
            [
                "id_cidade" => 3985,
                "id_estado" => 41,
                "nome" => "Centenário do Sul",
            ],
            [
                "id_cidade" => 3986,
                "id_estado" => 41,
                "nome" => "Cerro Azul",
            ],
            [
                "id_cidade" => 3987,
                "id_estado" => 41,
                "nome" => "Céu Azul",
            ],
            [
                "id_cidade" => 3988,
                "id_estado" => 41,
                "nome" => "Chopinzinho",
            ],
            [
                "id_cidade" => 3989,
                "id_estado" => 41,
                "nome" => "Cianorte",
            ],
            [
                "id_cidade" => 3990,
                "id_estado" => 41,
                "nome" => "Cidade Gaúcha",
            ],
            [
                "id_cidade" => 3991,
                "id_estado" => 41,
                "nome" => "Clevelândia",
            ],
            [
                "id_cidade" => 3992,
                "id_estado" => 41,
                "nome" => "Colombo",
            ],
            [
                "id_cidade" => 3993,
                "id_estado" => 41,
                "nome" => "Colorado",
            ],
            [
                "id_cidade" => 3994,
                "id_estado" => 41,
                "nome" => "Congonhinhas",
            ],
            [
                "id_cidade" => 3995,
                "id_estado" => 41,
                "nome" => "Conselheiro Mairinck",
            ],
            [
                "id_cidade" => 3996,
                "id_estado" => 41,
                "nome" => "Contenda",
            ],
            [
                "id_cidade" => 3997,
                "id_estado" => 41,
                "nome" => "Corbélia",
            ],
            [
                "id_cidade" => 3998,
                "id_estado" => 41,
                "nome" => "Cornélio Procópio",
            ],
            [
                "id_cidade" => 3999,
                "id_estado" => 41,
                "nome" => "Coronel Domingos Soares",
            ],
            [
                "id_cidade" => 4000,
                "id_estado" => 41,
                "nome" => "Coronel Vivida",
            ],
            [
                "id_cidade" => 4001,
                "id_estado" => 41,
                "nome" => "Corumbataí do Sul",
            ],
            [
                "id_cidade" => 4002,
                "id_estado" => 41,
                "nome" => "Cruz Machado",
            ],
            [
                "id_cidade" => 4003,
                "id_estado" => 41,
                "nome" => "Cruzeiro do Iguaçu",
            ],
            [
                "id_cidade" => 4004,
                "id_estado" => 41,
                "nome" => "Cruzeiro do Oeste",
            ],
            [
                "id_cidade" => 4005,
                "id_estado" => 41,
                "nome" => "Cruzeiro do Sul",
            ],
            [
                "id_cidade" => 4006,
                "id_estado" => 41,
                "nome" => "Cruzmaltina",
            ],
            [
                "id_cidade" => 4007,
                "id_estado" => 41,
                "nome" => "Curitiba",
            ],
            [
                "id_cidade" => 4008,
                "id_estado" => 41,
                "nome" => "Curiúva",
            ],
            [
                "id_cidade" => 4009,
                "id_estado" => 41,
                "nome" => "Diamante do Norte",
            ],
            [
                "id_cidade" => 4010,
                "id_estado" => 41,
                "nome" => "Diamante do Sul",
            ],
            [
                "id_cidade" => 4011,
                "id_estado" => 41,
                "nome" => "Diamante D'Oeste",
            ],
            [
                "id_cidade" => 4012,
                "id_estado" => 41,
                "nome" => "Dois Vizinhos",
            ],
            [
                "id_cidade" => 4013,
                "id_estado" => 41,
                "nome" => "Douradina",
            ],
            [
                "id_cidade" => 4014,
                "id_estado" => 41,
                "nome" => "Doutor Camargo",
            ],
            [
                "id_cidade" => 4015,
                "id_estado" => 41,
                "nome" => "Doutor Ulysses",
            ],
            [
                "id_cidade" => 4016,
                "id_estado" => 41,
                "nome" => "Enéas Marques",
            ],
            [
                "id_cidade" => 4017,
                "id_estado" => 41,
                "nome" => "Engenheiro Beltrão",
            ],
            [
                "id_cidade" => 4018,
                "id_estado" => 41,
                "nome" => "Entre Rios do Oeste",
            ],
            [
                "id_cidade" => 4019,
                "id_estado" => 41,
                "nome" => "Esperança Nova",
            ],
            [
                "id_cidade" => 4020,
                "id_estado" => 41,
                "nome" => "Espigão Alto do Iguaçu",
            ],
            [
                "id_cidade" => 4021,
                "id_estado" => 41,
                "nome" => "Farol",
            ],
            [
                "id_cidade" => 4022,
                "id_estado" => 41,
                "nome" => "Faxinal",
            ],
            [
                "id_cidade" => 4023,
                "id_estado" => 41,
                "nome" => "Fazenda Rio Grande",
            ],
            [
                "id_cidade" => 4024,
                "id_estado" => 41,
                "nome" => "Fênix",
            ],
            [
                "id_cidade" => 4025,
                "id_estado" => 41,
                "nome" => "Fernandes Pinheiro",
            ],
            [
                "id_cidade" => 4026,
                "id_estado" => 41,
                "nome" => "Figueira",
            ],
            [
                "id_cidade" => 4027,
                "id_estado" => 41,
                "nome" => "Flor da Serra do Sul",
            ],
            [
                "id_cidade" => 4028,
                "id_estado" => 41,
                "nome" => "Floraí",
            ],
            [
                "id_cidade" => 4029,
                "id_estado" => 41,
                "nome" => "Floresta",
            ],
            [
                "id_cidade" => 4030,
                "id_estado" => 41,
                "nome" => "Florestópolis",
            ],
            [
                "id_cidade" => 4031,
                "id_estado" => 41,
                "nome" => "Flórida",
            ],
            [
                "id_cidade" => 4032,
                "id_estado" => 41,
                "nome" => "Formosa do Oeste",
            ],
            [
                "id_cidade" => 4033,
                "id_estado" => 41,
                "nome" => "Foz do Iguaçu",
            ],
            [
                "id_cidade" => 4034,
                "id_estado" => 41,
                "nome" => "Foz do Jordão",
            ],
            [
                "id_cidade" => 4035,
                "id_estado" => 41,
                "nome" => "Francisco Alves",
            ],
            [
                "id_cidade" => 4036,
                "id_estado" => 41,
                "nome" => "Francisco Beltrão",
            ],
            [
                "id_cidade" => 4037,
                "id_estado" => 41,
                "nome" => "General Carneiro",
            ],
            [
                "id_cidade" => 4038,
                "id_estado" => 41,
                "nome" => "Godoy Moreira",
            ],
            [
                "id_cidade" => 4039,
                "id_estado" => 41,
                "nome" => "Goioerê",
            ],
            [
                "id_cidade" => 4040,
                "id_estado" => 41,
                "nome" => "Goioxim",
            ],
            [
                "id_cidade" => 4041,
                "id_estado" => 41,
                "nome" => "Grandes Rios",
            ],
            [
                "id_cidade" => 4042,
                "id_estado" => 41,
                "nome" => "Guaíra",
            ],
            [
                "id_cidade" => 4043,
                "id_estado" => 41,
                "nome" => "Guairaçá",
            ],
            [
                "id_cidade" => 4044,
                "id_estado" => 41,
                "nome" => "Guamiranga",
            ],
            [
                "id_cidade" => 4045,
                "id_estado" => 41,
                "nome" => "Guapirama",
            ],
            [
                "id_cidade" => 4046,
                "id_estado" => 41,
                "nome" => "Guaporema",
            ],
            [
                "id_cidade" => 4047,
                "id_estado" => 41,
                "nome" => "Guaraci",
            ],
            [
                "id_cidade" => 4048,
                "id_estado" => 41,
                "nome" => "Guaraniaçu",
            ],
            [
                "id_cidade" => 4049,
                "id_estado" => 41,
                "nome" => "Guarapuava",
            ],
            [
                "id_cidade" => 4050,
                "id_estado" => 41,
                "nome" => "Guaraqueçaba",
            ],
            [
                "id_cidade" => 4051,
                "id_estado" => 41,
                "nome" => "Guaratuba",
            ],
            [
                "id_cidade" => 4052,
                "id_estado" => 41,
                "nome" => "Honório Serpa",
            ],
            [
                "id_cidade" => 4053,
                "id_estado" => 41,
                "nome" => "Ibaiti",
            ],
            [
                "id_cidade" => 4054,
                "id_estado" => 41,
                "nome" => "Ibema",
            ],
            [
                "id_cidade" => 4055,
                "id_estado" => 41,
                "nome" => "Ibiporã",
            ],
            [
                "id_cidade" => 4056,
                "id_estado" => 41,
                "nome" => "Icaraíma",
            ],
            [
                "id_cidade" => 4057,
                "id_estado" => 41,
                "nome" => "Iguaraçu",
            ],
            [
                "id_cidade" => 4058,
                "id_estado" => 41,
                "nome" => "Iguatu",
            ],
            [
                "id_cidade" => 4059,
                "id_estado" => 41,
                "nome" => "Imbaú",
            ],
            [
                "id_cidade" => 4060,
                "id_estado" => 41,
                "nome" => "Imbituva",
            ],
            [
                "id_cidade" => 4061,
                "id_estado" => 41,
                "nome" => "Inácio Martins",
            ],
            [
                "id_cidade" => 4062,
                "id_estado" => 41,
                "nome" => "Inajá",
            ],
            [
                "id_cidade" => 4063,
                "id_estado" => 41,
                "nome" => "Indianópolis",
            ],
            [
                "id_cidade" => 4064,
                "id_estado" => 41,
                "nome" => "Ipiranga",
            ],
            [
                "id_cidade" => 4065,
                "id_estado" => 41,
                "nome" => "Iporã",
            ],
            [
                "id_cidade" => 4066,
                "id_estado" => 41,
                "nome" => "Iracema do Oeste",
            ],
            [
                "id_cidade" => 4067,
                "id_estado" => 41,
                "nome" => "Irati",
            ],
            [
                "id_cidade" => 4068,
                "id_estado" => 41,
                "nome" => "Iretama",
            ],
            [
                "id_cidade" => 4069,
                "id_estado" => 41,
                "nome" => "Itaguajé",
            ],
            [
                "id_cidade" => 4070,
                "id_estado" => 41,
                "nome" => "Itaipulândia",
            ],
            [
                "id_cidade" => 4071,
                "id_estado" => 41,
                "nome" => "Itambaracá",
            ],
            [
                "id_cidade" => 4072,
                "id_estado" => 41,
                "nome" => "Itambé",
            ],
            [
                "id_cidade" => 4073,
                "id_estado" => 41,
                "nome" => "Itapejara d'Oeste",
            ],
            [
                "id_cidade" => 4074,
                "id_estado" => 41,
                "nome" => "Itaperuçu",
            ],
            [
                "id_cidade" => 4075,
                "id_estado" => 41,
                "nome" => "Itaúna do Sul",
            ],
            [
                "id_cidade" => 4076,
                "id_estado" => 41,
                "nome" => "Ivaí",
            ],
            [
                "id_cidade" => 4077,
                "id_estado" => 41,
                "nome" => "Ivaiporã",
            ],
            [
                "id_cidade" => 4078,
                "id_estado" => 41,
                "nome" => "Ivaté",
            ],
            [
                "id_cidade" => 4079,
                "id_estado" => 41,
                "nome" => "Ivatuba",
            ],
            [
                "id_cidade" => 4080,
                "id_estado" => 41,
                "nome" => "Jaboti",
            ],
            [
                "id_cidade" => 4081,
                "id_estado" => 41,
                "nome" => "Jacarezinho",
            ],
            [
                "id_cidade" => 4082,
                "id_estado" => 41,
                "nome" => "Jaguapitã",
            ],
            [
                "id_cidade" => 4083,
                "id_estado" => 41,
                "nome" => "Jaguariaíva",
            ],
            [
                "id_cidade" => 4084,
                "id_estado" => 41,
                "nome" => "Jandaia do Sul",
            ],
            [
                "id_cidade" => 4085,
                "id_estado" => 41,
                "nome" => "Janiópolis",
            ],
            [
                "id_cidade" => 4086,
                "id_estado" => 41,
                "nome" => "Japira",
            ],
            [
                "id_cidade" => 4087,
                "id_estado" => 41,
                "nome" => "Japurá",
            ],
            [
                "id_cidade" => 4088,
                "id_estado" => 41,
                "nome" => "Jardim Alegre",
            ],
            [
                "id_cidade" => 4089,
                "id_estado" => 41,
                "nome" => "Jardim Olinda",
            ],
            [
                "id_cidade" => 4090,
                "id_estado" => 41,
                "nome" => "Jataizinho",
            ],
            [
                "id_cidade" => 4091,
                "id_estado" => 41,
                "nome" => "Jesuítas",
            ],
            [
                "id_cidade" => 4092,
                "id_estado" => 41,
                "nome" => "Joaquim Távora",
            ],
            [
                "id_cidade" => 4093,
                "id_estado" => 41,
                "nome" => "Jundiaí do Sul",
            ],
            [
                "id_cidade" => 4094,
                "id_estado" => 41,
                "nome" => "Juranda",
            ],
            [
                "id_cidade" => 4095,
                "id_estado" => 41,
                "nome" => "Jussara",
            ],
            [
                "id_cidade" => 4096,
                "id_estado" => 41,
                "nome" => "Kaloré",
            ],
            [
                "id_cidade" => 4097,
                "id_estado" => 41,
                "nome" => "Lapa",
            ],
            [
                "id_cidade" => 4098,
                "id_estado" => 41,
                "nome" => "Laranjal",
            ],
            [
                "id_cidade" => 4099,
                "id_estado" => 41,
                "nome" => "Laranjeiras do Sul",
            ],
            [
                "id_cidade" => 4100,
                "id_estado" => 41,
                "nome" => "Leópolis",
            ],
            [
                "id_cidade" => 4101,
                "id_estado" => 41,
                "nome" => "Lidianópolis",
            ],
            [
                "id_cidade" => 4102,
                "id_estado" => 41,
                "nome" => "Lindoeste",
            ],
            [
                "id_cidade" => 4103,
                "id_estado" => 41,
                "nome" => "Loanda",
            ],
            [
                "id_cidade" => 4104,
                "id_estado" => 41,
                "nome" => "Lobato",
            ],
            [
                "id_cidade" => 4105,
                "id_estado" => 41,
                "nome" => "Londrina",
            ],
            [
                "id_cidade" => 4106,
                "id_estado" => 41,
                "nome" => "Luiziana",
            ],
            [
                "id_cidade" => 4107,
                "id_estado" => 41,
                "nome" => "Lunardelli",
            ],
            [
                "id_cidade" => 4108,
                "id_estado" => 41,
                "nome" => "Lupionópolis",
            ],
            [
                "id_cidade" => 4109,
                "id_estado" => 41,
                "nome" => "Mallet",
            ],
            [
                "id_cidade" => 4110,
                "id_estado" => 41,
                "nome" => "Mamborê",
            ],
            [
                "id_cidade" => 4111,
                "id_estado" => 41,
                "nome" => "Mandaguaçu",
            ],
            [
                "id_cidade" => 4112,
                "id_estado" => 41,
                "nome" => "Mandaguari",
            ],
            [
                "id_cidade" => 4113,
                "id_estado" => 41,
                "nome" => "Mandirituba",
            ],
            [
                "id_cidade" => 4114,
                "id_estado" => 41,
                "nome" => "Manfrinópolis",
            ],
            [
                "id_cidade" => 4115,
                "id_estado" => 41,
                "nome" => "Mangueirinha",
            ],
            [
                "id_cidade" => 4116,
                "id_estado" => 41,
                "nome" => "Manoel Ribas",
            ],
            [
                "id_cidade" => 4117,
                "id_estado" => 41,
                "nome" => "Marechal Cândido Rondon",
            ],
            [
                "id_cidade" => 4118,
                "id_estado" => 41,
                "nome" => "Maria Helena",
            ],
            [
                "id_cidade" => 4119,
                "id_estado" => 41,
                "nome" => "Marialva",
            ],
            [
                "id_cidade" => 4120,
                "id_estado" => 41,
                "nome" => "Marilândia do Sul",
            ],
            [
                "id_cidade" => 4121,
                "id_estado" => 41,
                "nome" => "Marilena",
            ],
            [
                "id_cidade" => 4122,
                "id_estado" => 41,
                "nome" => "Mariluz",
            ],
            [
                "id_cidade" => 4123,
                "id_estado" => 41,
                "nome" => "Maringá",
            ],
            [
                "id_cidade" => 4124,
                "id_estado" => 41,
                "nome" => "Mariópolis",
            ],
            [
                "id_cidade" => 4125,
                "id_estado" => 41,
                "nome" => "Maripá",
            ],
            [
                "id_cidade" => 4126,
                "id_estado" => 41,
                "nome" => "Marmeleiro",
            ],
            [
                "id_cidade" => 4127,
                "id_estado" => 41,
                "nome" => "Marquinho",
            ],
            [
                "id_cidade" => 4128,
                "id_estado" => 41,
                "nome" => "Marumbi",
            ],
            [
                "id_cidade" => 4129,
                "id_estado" => 41,
                "nome" => "Matelândia",
            ],
            [
                "id_cidade" => 4130,
                "id_estado" => 41,
                "nome" => "Matinhos",
            ],
            [
                "id_cidade" => 4131,
                "id_estado" => 41,
                "nome" => "Mato Rico",
            ],
            [
                "id_cidade" => 4132,
                "id_estado" => 41,
                "nome" => "Mauá da Serra",
            ],
            [
                "id_cidade" => 4133,
                "id_estado" => 41,
                "nome" => "Medianeira",
            ],
            [
                "id_cidade" => 4134,
                "id_estado" => 41,
                "nome" => "Mercedes",
            ],
            [
                "id_cidade" => 4135,
                "id_estado" => 41,
                "nome" => "Mirador",
            ],
            [
                "id_cidade" => 4136,
                "id_estado" => 41,
                "nome" => "Miraselva",
            ],
            [
                "id_cidade" => 4137,
                "id_estado" => 41,
                "nome" => "Missal",
            ],
            [
                "id_cidade" => 4138,
                "id_estado" => 41,
                "nome" => "Moreira Sales",
            ],
            [
                "id_cidade" => 4139,
                "id_estado" => 41,
                "nome" => "Morretes",
            ],
            [
                "id_cidade" => 4140,
                "id_estado" => 41,
                "nome" => "Munhoz de Melo",
            ],
            [
                "id_cidade" => 4141,
                "id_estado" => 41,
                "nome" => "Nossa Senhora das Graças",
            ],
            [
                "id_cidade" => 4142,
                "id_estado" => 41,
                "nome" => "Nova Aliança do Ivaí",
            ],
            [
                "id_cidade" => 4143,
                "id_estado" => 41,
                "nome" => "Nova América da Colina",
            ],
            [
                "id_cidade" => 4144,
                "id_estado" => 41,
                "nome" => "Nova Aurora",
            ],
            [
                "id_cidade" => 4145,
                "id_estado" => 41,
                "nome" => "Nova Cantu",
            ],
            [
                "id_cidade" => 4146,
                "id_estado" => 41,
                "nome" => "Nova Esperança",
            ],
            [
                "id_cidade" => 4147,
                "id_estado" => 41,
                "nome" => "Nova Esperança do Sudoeste",
            ],
            [
                "id_cidade" => 4148,
                "id_estado" => 41,
                "nome" => "Nova Fátima",
            ],
            [
                "id_cidade" => 4149,
                "id_estado" => 41,
                "nome" => "Nova Laranjeiras",
            ],
            [
                "id_cidade" => 4150,
                "id_estado" => 41,
                "nome" => "Nova Londrina",
            ],
            [
                "id_cidade" => 4151,
                "id_estado" => 41,
                "nome" => "Nova Olímpia",
            ],
            [
                "id_cidade" => 4152,
                "id_estado" => 41,
                "nome" => "Nova Prata do Iguaçu",
            ],
            [
                "id_cidade" => 4153,
                "id_estado" => 41,
                "nome" => "Nova Santa Bárbara",
            ],
            [
                "id_cidade" => 4154,
                "id_estado" => 41,
                "nome" => "Nova Santa Rosa",
            ],
            [
                "id_cidade" => 4155,
                "id_estado" => 41,
                "nome" => "Nova Tebas",
            ],
            [
                "id_cidade" => 4156,
                "id_estado" => 41,
                "nome" => "Novo Itacolomi",
            ],
            [
                "id_cidade" => 4157,
                "id_estado" => 41,
                "nome" => "Ortigueira",
            ],
            [
                "id_cidade" => 4158,
                "id_estado" => 41,
                "nome" => "Ourizona",
            ],
            [
                "id_cidade" => 4159,
                "id_estado" => 41,
                "nome" => "Ouro Verde do Oeste",
            ],
            [
                "id_cidade" => 4160,
                "id_estado" => 41,
                "nome" => "Paiçandu",
            ],
            [
                "id_cidade" => 4161,
                "id_estado" => 41,
                "nome" => "Palmas",
            ],
            [
                "id_cidade" => 4162,
                "id_estado" => 41,
                "nome" => "Palmeira",
            ],
            [
                "id_cidade" => 4163,
                "id_estado" => 41,
                "nome" => "Palmital",
            ],
            [
                "id_cidade" => 4164,
                "id_estado" => 41,
                "nome" => "Palotina",
            ],
            [
                "id_cidade" => 4165,
                "id_estado" => 41,
                "nome" => "Paraíso do Norte",
            ],
            [
                "id_cidade" => 4166,
                "id_estado" => 41,
                "nome" => "Paranacity",
            ],
            [
                "id_cidade" => 4167,
                "id_estado" => 41,
                "nome" => "Paranaguá",
            ],
            [
                "id_cidade" => 4168,
                "id_estado" => 41,
                "nome" => "Paranapoema",
            ],
            [
                "id_cidade" => 4169,
                "id_estado" => 41,
                "nome" => "Paranavaí",
            ],
            [
                "id_cidade" => 4170,
                "id_estado" => 41,
                "nome" => "Pato Bragado",
            ],
            [
                "id_cidade" => 4171,
                "id_estado" => 41,
                "nome" => "Pato Branco",
            ],
            [
                "id_cidade" => 4172,
                "id_estado" => 41,
                "nome" => "Paula Freitas",
            ],
            [
                "id_cidade" => 4173,
                "id_estado" => 41,
                "nome" => "Paulo Frontin",
            ],
            [
                "id_cidade" => 4174,
                "id_estado" => 41,
                "nome" => "Peabiru",
            ],
            [
                "id_cidade" => 4175,
                "id_estado" => 41,
                "nome" => "Perobal",
            ],
            [
                "id_cidade" => 4176,
                "id_estado" => 41,
                "nome" => "Pérola",
            ],
            [
                "id_cidade" => 4177,
                "id_estado" => 41,
                "nome" => "Pérola d'Oeste",
            ],
            [
                "id_cidade" => 4178,
                "id_estado" => 41,
                "nome" => "Piên",
            ],
            [
                "id_cidade" => 4179,
                "id_estado" => 41,
                "nome" => "Pinhais",
            ],
            [
                "id_cidade" => 4180,
                "id_estado" => 41,
                "nome" => "Pinhal de São Bento",
            ],
            [
                "id_cidade" => 4181,
                "id_estado" => 41,
                "nome" => "Pinhalão",
            ],
            [
                "id_cidade" => 4182,
                "id_estado" => 41,
                "nome" => "Pinhão",
            ],
            [
                "id_cidade" => 4183,
                "id_estado" => 41,
                "nome" => "Piraí do Sul",
            ],
            [
                "id_cidade" => 4184,
                "id_estado" => 41,
                "nome" => "Piraquara",
            ],
            [
                "id_cidade" => 4185,
                "id_estado" => 41,
                "nome" => "Pitanga",
            ],
            [
                "id_cidade" => 4186,
                "id_estado" => 41,
                "nome" => "Pitangueiras",
            ],
            [
                "id_cidade" => 4187,
                "id_estado" => 41,
                "nome" => "Planaltina do Paraná",
            ],
            [
                "id_cidade" => 4188,
                "id_estado" => 41,
                "nome" => "Planalto",
            ],
            [
                "id_cidade" => 4189,
                "id_estado" => 41,
                "nome" => "Ponta Grossa",
            ],
            [
                "id_cidade" => 4190,
                "id_estado" => 41,
                "nome" => "Pontal do Paraná",
            ],
            [
                "id_cidade" => 4191,
                "id_estado" => 41,
                "nome" => "Porecatu",
            ],
            [
                "id_cidade" => 4192,
                "id_estado" => 41,
                "nome" => "Porto Amazonas",
            ],
            [
                "id_cidade" => 4193,
                "id_estado" => 41,
                "nome" => "Porto Barreiro",
            ],
            [
                "id_cidade" => 4194,
                "id_estado" => 41,
                "nome" => "Porto Rico",
            ],
            [
                "id_cidade" => 4195,
                "id_estado" => 41,
                "nome" => "Porto Vitória",
            ],
            [
                "id_cidade" => 4196,
                "id_estado" => 41,
                "nome" => "Prado Ferreira",
            ],
            [
                "id_cidade" => 4197,
                "id_estado" => 41,
                "nome" => "Pranchita",
            ],
            [
                "id_cidade" => 4198,
                "id_estado" => 41,
                "nome" => "Presidente Castelo Branco",
            ],
            [
                "id_cidade" => 4199,
                "id_estado" => 41,
                "nome" => "Primeiro de Maio",
            ],
            [
                "id_cidade" => 4200,
                "id_estado" => 41,
                "nome" => "Prudentópolis",
            ],
            [
                "id_cidade" => 4201,
                "id_estado" => 41,
                "nome" => "Quarto Centenário",
            ],
            [
                "id_cidade" => 4202,
                "id_estado" => 41,
                "nome" => "Quatiguá",
            ],
            [
                "id_cidade" => 4203,
                "id_estado" => 41,
                "nome" => "Quatro Barras",
            ],
            [
                "id_cidade" => 4204,
                "id_estado" => 41,
                "nome" => "Quatro Pontes",
            ],
            [
                "id_cidade" => 4205,
                "id_estado" => 41,
                "nome" => "Quedas do Iguaçu",
            ],
            [
                "id_cidade" => 4206,
                "id_estado" => 41,
                "nome" => "Querência do Norte",
            ],
            [
                "id_cidade" => 4207,
                "id_estado" => 41,
                "nome" => "Quinta do Sol",
            ],
            [
                "id_cidade" => 4208,
                "id_estado" => 41,
                "nome" => "Quitandinha",
            ],
            [
                "id_cidade" => 4209,
                "id_estado" => 41,
                "nome" => "Ramilândia",
            ],
            [
                "id_cidade" => 4210,
                "id_estado" => 41,
                "nome" => "Rancho Alegre",
            ],
            [
                "id_cidade" => 4211,
                "id_estado" => 41,
                "nome" => "Rancho Alegre D'Oeste",
            ],
            [
                "id_cidade" => 4212,
                "id_estado" => 41,
                "nome" => "Realeza",
            ],
            [
                "id_cidade" => 4213,
                "id_estado" => 41,
                "nome" => "Rebouças",
            ],
            [
                "id_cidade" => 4214,
                "id_estado" => 41,
                "nome" => "Renascença",
            ],
            [
                "id_cidade" => 4215,
                "id_estado" => 41,
                "nome" => "Reserva",
            ],
            [
                "id_cidade" => 4216,
                "id_estado" => 41,
                "nome" => "Reserva do Iguaçu",
            ],
            [
                "id_cidade" => 4217,
                "id_estado" => 41,
                "nome" => "Ribeirão Claro",
            ],
            [
                "id_cidade" => 4218,
                "id_estado" => 41,
                "nome" => "Ribeirão do Pinhal",
            ],
            [
                "id_cidade" => 4219,
                "id_estado" => 41,
                "nome" => "Rio Azul",
            ],
            [
                "id_cidade" => 4220,
                "id_estado" => 41,
                "nome" => "Rio Bom",
            ],
            [
                "id_cidade" => 4221,
                "id_estado" => 41,
                "nome" => "Rio Bonito do Iguaçu",
            ],
            [
                "id_cidade" => 4222,
                "id_estado" => 41,
                "nome" => "Rio Branco do Ivaí",
            ],
            [
                "id_cidade" => 4223,
                "id_estado" => 41,
                "nome" => "Rio Branco do Sul",
            ],
            [
                "id_cidade" => 4224,
                "id_estado" => 41,
                "nome" => "Rio Negro",
            ],
            [
                "id_cidade" => 4225,
                "id_estado" => 41,
                "nome" => "Rolândia",
            ],
            [
                "id_cidade" => 4226,
                "id_estado" => 41,
                "nome" => "Roncador",
            ],
            [
                "id_cidade" => 4227,
                "id_estado" => 41,
                "nome" => "Rondon",
            ],
            [
                "id_cidade" => 4228,
                "id_estado" => 41,
                "nome" => "Rosário do Ivaí",
            ],
            [
                "id_cidade" => 4229,
                "id_estado" => 41,
                "nome" => "Sabáudia",
            ],
            [
                "id_cidade" => 4230,
                "id_estado" => 41,
                "nome" => "Salgado Filho",
            ],
            [
                "id_cidade" => 4231,
                "id_estado" => 41,
                "nome" => "Salto do Itararé",
            ],
            [
                "id_cidade" => 4232,
                "id_estado" => 41,
                "nome" => "Salto do Lontra",
            ],
            [
                "id_cidade" => 4233,
                "id_estado" => 41,
                "nome" => "Santa Amélia",
            ],
            [
                "id_cidade" => 4234,
                "id_estado" => 41,
                "nome" => "Santa Cecília do Pavão",
            ],
            [
                "id_cidade" => 4235,
                "id_estado" => 41,
                "nome" => "Santa Cruz de Monte Castelo",
            ],
            [
                "id_cidade" => 4236,
                "id_estado" => 41,
                "nome" => "Santa Fé",
            ],
            [
                "id_cidade" => 4237,
                "id_estado" => 41,
                "nome" => "Santa Helena",
            ],
            [
                "id_cidade" => 4238,
                "id_estado" => 41,
                "nome" => "Santa Inês",
            ],
            [
                "id_cidade" => 4239,
                "id_estado" => 41,
                "nome" => "Santa Isabel do Ivaí",
            ],
            [
                "id_cidade" => 4240,
                "id_estado" => 41,
                "nome" => "Santa Izabel do Oeste",
            ],
            [
                "id_cidade" => 4241,
                "id_estado" => 41,
                "nome" => "Santa Lúcia",
            ],
            [
                "id_cidade" => 4242,
                "id_estado" => 41,
                "nome" => "Santa Maria do Oeste",
            ],
            [
                "id_cidade" => 4243,
                "id_estado" => 41,
                "nome" => "Santa Mariana",
            ],
            [
                "id_cidade" => 4244,
                "id_estado" => 41,
                "nome" => "Santa Mônica",
            ],
            [
                "id_cidade" => 4245,
                "id_estado" => 41,
                "nome" => "Santa Tereza do Oeste",
            ],
            [
                "id_cidade" => 4246,
                "id_estado" => 41,
                "nome" => "Santa Terezinha de Itaipu",
            ],
            [
                "id_cidade" => 4247,
                "id_estado" => 41,
                "nome" => "Santana do Itararé",
            ],
            [
                "id_cidade" => 4248,
                "id_estado" => 41,
                "nome" => "Santo Antônio da Platina",
            ],
            [
                "id_cidade" => 4249,
                "id_estado" => 41,
                "nome" => "Santo Antônio do Caiuá",
            ],
            [
                "id_cidade" => 4250,
                "id_estado" => 41,
                "nome" => "Santo Antônio do Paraíso",
            ],
            [
                "id_cidade" => 4251,
                "id_estado" => 41,
                "nome" => "Santo Antônio do Sudoeste",
            ],
            [
                "id_cidade" => 4252,
                "id_estado" => 41,
                "nome" => "Santo Inácio",
            ],
            [
                "id_cidade" => 4253,
                "id_estado" => 41,
                "nome" => "São Carlos do Ivaí",
            ],
            [
                "id_cidade" => 4254,
                "id_estado" => 41,
                "nome" => "São Jerônimo da Serra",
            ],
            [
                "id_cidade" => 4255,
                "id_estado" => 41,
                "nome" => "São João",
            ],
            [
                "id_cidade" => 4256,
                "id_estado" => 41,
                "nome" => "São João do Caiuá",
            ],
            [
                "id_cidade" => 4257,
                "id_estado" => 41,
                "nome" => "São João do Ivaí",
            ],
            [
                "id_cidade" => 4258,
                "id_estado" => 41,
                "nome" => "São João do Triunfo",
            ],
            [
                "id_cidade" => 4259,
                "id_estado" => 41,
                "nome" => "São Jorge do Ivaí",
            ],
            [
                "id_cidade" => 4260,
                "id_estado" => 41,
                "nome" => "São Jorge do Patrocínio",
            ],
            [
                "id_cidade" => 4261,
                "id_estado" => 41,
                "nome" => "São Jorge d'Oeste",
            ],
            [
                "id_cidade" => 4262,
                "id_estado" => 41,
                "nome" => "São José da Boa Vista",
            ],
            [
                "id_cidade" => 4263,
                "id_estado" => 41,
                "nome" => "São José das Palmeiras",
            ],
            [
                "id_cidade" => 4264,
                "id_estado" => 41,
                "nome" => "São José dos Pinhais",
            ],
            [
                "id_cidade" => 4265,
                "id_estado" => 41,
                "nome" => "São Manoel do Paraná",
            ],
            [
                "id_cidade" => 4266,
                "id_estado" => 41,
                "nome" => "São Mateus do Sul",
            ],
            [
                "id_cidade" => 4267,
                "id_estado" => 41,
                "nome" => "São Miguel do Iguaçu",
            ],
            [
                "id_cidade" => 4268,
                "id_estado" => 41,
                "nome" => "São Pedro do Iguaçu",
            ],
            [
                "id_cidade" => 4269,
                "id_estado" => 41,
                "nome" => "São Pedro do Ivaí",
            ],
            [
                "id_cidade" => 4270,
                "id_estado" => 41,
                "nome" => "São Pedro do Paraná",
            ],
            [
                "id_cidade" => 4271,
                "id_estado" => 41,
                "nome" => "São Sebastião da Amoreira",
            ],
            [
                "id_cidade" => 4272,
                "id_estado" => 41,
                "nome" => "São Tomé",
            ],
            [
                "id_cidade" => 4273,
                "id_estado" => 41,
                "nome" => "Sapopema",
            ],
            [
                "id_cidade" => 4274,
                "id_estado" => 41,
                "nome" => "Sarandi",
            ],
            [
                "id_cidade" => 4275,
                "id_estado" => 41,
                "nome" => "Saudade do Iguaçu",
            ],
            [
                "id_cidade" => 4276,
                "id_estado" => 41,
                "nome" => "Sengés",
            ],
            [
                "id_cidade" => 4277,
                "id_estado" => 41,
                "nome" => "Serranópolis do Iguaçu",
            ],
            [
                "id_cidade" => 4278,
                "id_estado" => 41,
                "nome" => "Sertaneja",
            ],
            [
                "id_cidade" => 4279,
                "id_estado" => 41,
                "nome" => "Sertanópolis",
            ],
            [
                "id_cidade" => 4280,
                "id_estado" => 41,
                "nome" => "Siqueira Campos",
            ],
            [
                "id_cidade" => 4281,
                "id_estado" => 41,
                "nome" => "Sulina",
            ],
            [
                "id_cidade" => 4282,
                "id_estado" => 41,
                "nome" => "Tamarana",
            ],
            [
                "id_cidade" => 4283,
                "id_estado" => 41,
                "nome" => "Tamboara",
            ],
            [
                "id_cidade" => 4284,
                "id_estado" => 41,
                "nome" => "Tapejara",
            ],
            [
                "id_cidade" => 4285,
                "id_estado" => 41,
                "nome" => "Tapira",
            ],
            [
                "id_cidade" => 4286,
                "id_estado" => 41,
                "nome" => "Teixeira Soares",
            ],
            [
                "id_cidade" => 4287,
                "id_estado" => 41,
                "nome" => "Telêmaco Borba",
            ],
            [
                "id_cidade" => 4288,
                "id_estado" => 41,
                "nome" => "Terra Boa",
            ],
            [
                "id_cidade" => 4289,
                "id_estado" => 41,
                "nome" => "Terra Rica",
            ],
            [
                "id_cidade" => 4290,
                "id_estado" => 41,
                "nome" => "Terra Roxa",
            ],
            [
                "id_cidade" => 4291,
                "id_estado" => 41,
                "nome" => "Tibagi",
            ],
            [
                "id_cidade" => 4292,
                "id_estado" => 41,
                "nome" => "Tijucas do Sul",
            ],
            [
                "id_cidade" => 4293,
                "id_estado" => 41,
                "nome" => "Toledo",
            ],
            [
                "id_cidade" => 4294,
                "id_estado" => 41,
                "nome" => "Tomazina",
            ],
            [
                "id_cidade" => 4295,
                "id_estado" => 41,
                "nome" => "Três Barras do Paraná",
            ],
            [
                "id_cidade" => 4296,
                "id_estado" => 41,
                "nome" => "Tunas do Paraná",
            ],
            [
                "id_cidade" => 4297,
                "id_estado" => 41,
                "nome" => "Tuneiras do Oeste",
            ],
            [
                "id_cidade" => 4298,
                "id_estado" => 41,
                "nome" => "Tupãssi",
            ],
            [
                "id_cidade" => 4299,
                "id_estado" => 41,
                "nome" => "Turvo",
            ],
            [
                "id_cidade" => 4300,
                "id_estado" => 41,
                "nome" => "Ubiratã",
            ],
            [
                "id_cidade" => 4301,
                "id_estado" => 41,
                "nome" => "Umuarama",
            ],
            [
                "id_cidade" => 4302,
                "id_estado" => 41,
                "nome" => "União da Vitória",
            ],
            [
                "id_cidade" => 4303,
                "id_estado" => 41,
                "nome" => "Uniflor",
            ],
            [
                "id_cidade" => 4304,
                "id_estado" => 41,
                "nome" => "Uraí",
            ],
            [
                "id_cidade" => 4305,
                "id_estado" => 41,
                "nome" => "Ventania",
            ],
            [
                "id_cidade" => 4306,
                "id_estado" => 41,
                "nome" => "Vera Cruz do Oeste",
            ],
            [
                "id_cidade" => 4307,
                "id_estado" => 41,
                "nome" => "Verê",
            ],
            [
                "id_cidade" => 4308,
                "id_estado" => 41,
                "nome" => "Virmond",
            ],
            [
                "id_cidade" => 4309,
                "id_estado" => 41,
                "nome" => "Vitorino",
            ],
            [
                "id_cidade" => 4310,
                "id_estado" => 41,
                "nome" => "Wenceslau Braz",
            ],
            [
                "id_cidade" => 4311,
                "id_estado" => 41,
                "nome" => "Xambrê",
            ],
            [
                "id_cidade" => 4312,
                "id_estado" => 42,
                "nome" => "Abdon Batista",
            ],
            [
                "id_cidade" => 4313,
                "id_estado" => 42,
                "nome" => "Abelardo Luz",
            ],
            [
                "id_cidade" => 4314,
                "id_estado" => 42,
                "nome" => "Agrolândia",
            ],
            [
                "id_cidade" => 4315,
                "id_estado" => 42,
                "nome" => "Agronômica",
            ],
            [
                "id_cidade" => 4316,
                "id_estado" => 42,
                "nome" => "Água Doce",
            ],
            [
                "id_cidade" => 4317,
                "id_estado" => 42,
                "nome" => "Águas de Chapecó",
            ],
            [
                "id_cidade" => 4318,
                "id_estado" => 42,
                "nome" => "Águas Frias",
            ],
            [
                "id_cidade" => 4319,
                "id_estado" => 42,
                "nome" => "Águas Mornas",
            ],
            [
                "id_cidade" => 4320,
                "id_estado" => 42,
                "nome" => "Alfredo Wagner",
            ],
            [
                "id_cidade" => 4321,
                "id_estado" => 42,
                "nome" => "Alto Bela Vista",
            ],
            [
                "id_cidade" => 4322,
                "id_estado" => 42,
                "nome" => "Anchieta",
            ],
            [
                "id_cidade" => 4323,
                "id_estado" => 42,
                "nome" => "Angelina",
            ],
            [
                "id_cidade" => 4324,
                "id_estado" => 42,
                "nome" => "Anita Garibaldi",
            ],
            [
                "id_cidade" => 4325,
                "id_estado" => 42,
                "nome" => "Anitápolis",
            ],
            [
                "id_cidade" => 4326,
                "id_estado" => 42,
                "nome" => "Antônio Carlos",
            ],
            [
                "id_cidade" => 4327,
                "id_estado" => 42,
                "nome" => "Apiúna",
            ],
            [
                "id_cidade" => 4328,
                "id_estado" => 42,
                "nome" => "Arabutã",
            ],
            [
                "id_cidade" => 4329,
                "id_estado" => 42,
                "nome" => "Araquari",
            ],
            [
                "id_cidade" => 4330,
                "id_estado" => 42,
                "nome" => "Araranguá",
            ],
            [
                "id_cidade" => 4331,
                "id_estado" => 42,
                "nome" => "Armazém",
            ],
            [
                "id_cidade" => 4332,
                "id_estado" => 42,
                "nome" => "Arroio Trinta",
            ],
            [
                "id_cidade" => 4333,
                "id_estado" => 42,
                "nome" => "Arvoredo",
            ],
            [
                "id_cidade" => 4334,
                "id_estado" => 42,
                "nome" => "Ascurra",
            ],
            [
                "id_cidade" => 4335,
                "id_estado" => 42,
                "nome" => "Atalanta",
            ],
            [
                "id_cidade" => 4336,
                "id_estado" => 42,
                "nome" => "Aurora",
            ],
            [
                "id_cidade" => 4337,
                "id_estado" => 42,
                "nome" => "Balneário Arroio do Silva",
            ],
            [
                "id_cidade" => 4338,
                "id_estado" => 42,
                "nome" => "Balneário Barra do Sul",
            ],
            [
                "id_cidade" => 4339,
                "id_estado" => 42,
                "nome" => "Balneário Camboriú",
            ],
            [
                "id_cidade" => 4340,
                "id_estado" => 42,
                "nome" => "Balneário Gaivota",
            ],
            [
                "id_cidade" => 4341,
                "id_estado" => 42,
                "nome" => "Balneário Piçarras",
            ],
            [
                "id_cidade" => 4342,
                "id_estado" => 42,
                "nome" => "Balneário Rincão",
            ],
            [
                "id_cidade" => 4343,
                "id_estado" => 42,
                "nome" => "Bandeirante",
            ],
            [
                "id_cidade" => 4344,
                "id_estado" => 42,
                "nome" => "Barra Bonita",
            ],
            [
                "id_cidade" => 4345,
                "id_estado" => 42,
                "nome" => "Barra Velha",
            ],
            [
                "id_cidade" => 4346,
                "id_estado" => 42,
                "nome" => "Bela Vista do Toldo",
            ],
            [
                "id_cidade" => 4347,
                "id_estado" => 42,
                "nome" => "Belmonte",
            ],
            [
                "id_cidade" => 4348,
                "id_estado" => 42,
                "nome" => "Benedito Novo",
            ],
            [
                "id_cidade" => 4349,
                "id_estado" => 42,
                "nome" => "Biguaçu",
            ],
            [
                "id_cidade" => 4350,
                "id_estado" => 42,
                "nome" => "Blumenau",
            ],
            [
                "id_cidade" => 4351,
                "id_estado" => 42,
                "nome" => "Bocaina do Sul",
            ],
            [
                "id_cidade" => 4352,
                "id_estado" => 42,
                "nome" => "Bom Jardim da Serra",
            ],
            [
                "id_cidade" => 4353,
                "id_estado" => 42,
                "nome" => "Bom Jesus",
            ],
            [
                "id_cidade" => 4354,
                "id_estado" => 42,
                "nome" => "Bom Jesus do Oeste",
            ],
            [
                "id_cidade" => 4355,
                "id_estado" => 42,
                "nome" => "Bom Retiro",
            ],
            [
                "id_cidade" => 4356,
                "id_estado" => 42,
                "nome" => "Bombinhas",
            ],
            [
                "id_cidade" => 4357,
                "id_estado" => 42,
                "nome" => "Botuverá",
            ],
            [
                "id_cidade" => 4358,
                "id_estado" => 42,
                "nome" => "Braço do Norte",
            ],
            [
                "id_cidade" => 4359,
                "id_estado" => 42,
                "nome" => "Braço do Trombudo",
            ],
            [
                "id_cidade" => 4360,
                "id_estado" => 42,
                "nome" => "Brunópolis",
            ],
            [
                "id_cidade" => 4361,
                "id_estado" => 42,
                "nome" => "Brusque",
            ],
            [
                "id_cidade" => 4362,
                "id_estado" => 42,
                "nome" => "Caçador",
            ],
            [
                "id_cidade" => 4363,
                "id_estado" => 42,
                "nome" => "Caibi",
            ],
            [
                "id_cidade" => 4364,
                "id_estado" => 42,
                "nome" => "Calmon",
            ],
            [
                "id_cidade" => 4365,
                "id_estado" => 42,
                "nome" => "Camboriú",
            ],
            [
                "id_cidade" => 4366,
                "id_estado" => 42,
                "nome" => "Campo Alegre",
            ],
            [
                "id_cidade" => 4367,
                "id_estado" => 42,
                "nome" => "Campo Belo do Sul",
            ],
            [
                "id_cidade" => 4368,
                "id_estado" => 42,
                "nome" => "Campo Erê",
            ],
            [
                "id_cidade" => 4369,
                "id_estado" => 42,
                "nome" => "Campos Novos",
            ],
            [
                "id_cidade" => 4370,
                "id_estado" => 42,
                "nome" => "Canelinha",
            ],
            [
                "id_cidade" => 4371,
                "id_estado" => 42,
                "nome" => "Canoinhas",
            ],
            [
                "id_cidade" => 4372,
                "id_estado" => 42,
                "nome" => "Capão Alto",
            ],
            [
                "id_cidade" => 4373,
                "id_estado" => 42,
                "nome" => "Capinzal",
            ],
            [
                "id_cidade" => 4374,
                "id_estado" => 42,
                "nome" => "Capivari de Baixo",
            ],
            [
                "id_cidade" => 4375,
                "id_estado" => 42,
                "nome" => "Catanduvas",
            ],
            [
                "id_cidade" => 4376,
                "id_estado" => 42,
                "nome" => "Caxambu do Sul",
            ],
            [
                "id_cidade" => 4377,
                "id_estado" => 42,
                "nome" => "Celso Ramos",
            ],
            [
                "id_cidade" => 4378,
                "id_estado" => 42,
                "nome" => "Cerro Negro",
            ],
            [
                "id_cidade" => 4379,
                "id_estado" => 42,
                "nome" => "Chapadão do Lageado",
            ],
            [
                "id_cidade" => 4380,
                "id_estado" => 42,
                "nome" => "Chapecó",
            ],
            [
                "id_cidade" => 4381,
                "id_estado" => 42,
                "nome" => "Cocal do Sul",
            ],
            [
                "id_cidade" => 4382,
                "id_estado" => 42,
                "nome" => "Concórdia",
            ],
            [
                "id_cidade" => 4383,
                "id_estado" => 42,
                "nome" => "Cordilheira Alta",
            ],
            [
                "id_cidade" => 4384,
                "id_estado" => 42,
                "nome" => "Coronel Freitas",
            ],
            [
                "id_cidade" => 4385,
                "id_estado" => 42,
                "nome" => "Coronel Martins",
            ],
            [
                "id_cidade" => 4386,
                "id_estado" => 42,
                "nome" => "Correia Pinto",
            ],
            [
                "id_cidade" => 4387,
                "id_estado" => 42,
                "nome" => "Corupá",
            ],
            [
                "id_cidade" => 4388,
                "id_estado" => 42,
                "nome" => "Criciúma",
            ],
            [
                "id_cidade" => 4389,
                "id_estado" => 42,
                "nome" => "Cunha Porã",
            ],
            [
                "id_cidade" => 4390,
                "id_estado" => 42,
                "nome" => "Cunhataí",
            ],
            [
                "id_cidade" => 4391,
                "id_estado" => 42,
                "nome" => "Curitibanos",
            ],
            [
                "id_cidade" => 4392,
                "id_estado" => 42,
                "nome" => "Descanso",
            ],
            [
                "id_cidade" => 4393,
                "id_estado" => 42,
                "nome" => "Dionísio Cerqueira",
            ],
            [
                "id_cidade" => 4394,
                "id_estado" => 42,
                "nome" => "Dona Emma",
            ],
            [
                "id_cidade" => 4395,
                "id_estado" => 42,
                "nome" => "Doutor Pedrinho",
            ],
            [
                "id_cidade" => 4396,
                "id_estado" => 42,
                "nome" => "Entre Rios",
            ],
            [
                "id_cidade" => 4397,
                "id_estado" => 42,
                "nome" => "Ermo",
            ],
            [
                "id_cidade" => 4398,
                "id_estado" => 42,
                "nome" => "Erval Velho",
            ],
            [
                "id_cidade" => 4399,
                "id_estado" => 42,
                "nome" => "Faxinal dos Guedes",
            ],
            [
                "id_cidade" => 4400,
                "id_estado" => 42,
                "nome" => "Flor do Sertão",
            ],
            [
                "id_cidade" => 4401,
                "id_estado" => 42,
                "nome" => "Florianópolis",
            ],
            [
                "id_cidade" => 4402,
                "id_estado" => 42,
                "nome" => "Formosa do Sul",
            ],
            [
                "id_cidade" => 4403,
                "id_estado" => 42,
                "nome" => "Forquilhinha",
            ],
            [
                "id_cidade" => 4404,
                "id_estado" => 42,
                "nome" => "Fraiburgo",
            ],
            [
                "id_cidade" => 4405,
                "id_estado" => 42,
                "nome" => "Frei Rogério",
            ],
            [
                "id_cidade" => 4406,
                "id_estado" => 42,
                "nome" => "Galvão",
            ],
            [
                "id_cidade" => 4407,
                "id_estado" => 42,
                "nome" => "Garopaba",
            ],
            [
                "id_cidade" => 4408,
                "id_estado" => 42,
                "nome" => "Garuva",
            ],
            [
                "id_cidade" => 4409,
                "id_estado" => 42,
                "nome" => "Gaspar",
            ],
            [
                "id_cidade" => 4410,
                "id_estado" => 42,
                "nome" => "Governador Celso Ramos",
            ],
            [
                "id_cidade" => 4411,
                "id_estado" => 42,
                "nome" => "Grão-Pará",
            ],
            [
                "id_cidade" => 4412,
                "id_estado" => 42,
                "nome" => "Gravatal",
            ],
            [
                "id_cidade" => 4413,
                "id_estado" => 42,
                "nome" => "Guabiruba",
            ],
            [
                "id_cidade" => 4414,
                "id_estado" => 42,
                "nome" => "Guaraciaba",
            ],
            [
                "id_cidade" => 4415,
                "id_estado" => 42,
                "nome" => "Guaramirim",
            ],
            [
                "id_cidade" => 4416,
                "id_estado" => 42,
                "nome" => "Guarujá do Sul",
            ],
            [
                "id_cidade" => 4417,
                "id_estado" => 42,
                "nome" => "Guatambú",
            ],
            [
                "id_cidade" => 4418,
                "id_estado" => 42,
                "nome" => "Herval d'Oeste",
            ],
            [
                "id_cidade" => 4419,
                "id_estado" => 42,
                "nome" => "Ibiam",
            ],
            [
                "id_cidade" => 4420,
                "id_estado" => 42,
                "nome" => "Ibicaré",
            ],
            [
                "id_cidade" => 4421,
                "id_estado" => 42,
                "nome" => "Ibirama",
            ],
            [
                "id_cidade" => 4422,
                "id_estado" => 42,
                "nome" => "Içara",
            ],
            [
                "id_cidade" => 4423,
                "id_estado" => 42,
                "nome" => "Ilhota",
            ],
            [
                "id_cidade" => 4424,
                "id_estado" => 42,
                "nome" => "Imaruí",
            ],
            [
                "id_cidade" => 4425,
                "id_estado" => 42,
                "nome" => "Imbituba",
            ],
            [
                "id_cidade" => 4426,
                "id_estado" => 42,
                "nome" => "Imbuia",
            ],
            [
                "id_cidade" => 4427,
                "id_estado" => 42,
                "nome" => "Indaial",
            ],
            [
                "id_cidade" => 4428,
                "id_estado" => 42,
                "nome" => "Iomerê",
            ],
            [
                "id_cidade" => 4429,
                "id_estado" => 42,
                "nome" => "Ipira",
            ],
            [
                "id_cidade" => 4430,
                "id_estado" => 42,
                "nome" => "Iporã do Oeste",
            ],
            [
                "id_cidade" => 4431,
                "id_estado" => 42,
                "nome" => "Ipuaçu",
            ],
            [
                "id_cidade" => 4432,
                "id_estado" => 42,
                "nome" => "Ipumirim",
            ],
            [
                "id_cidade" => 4433,
                "id_estado" => 42,
                "nome" => "Iraceminha",
            ],
            [
                "id_cidade" => 4434,
                "id_estado" => 42,
                "nome" => "Irani",
            ],
            [
                "id_cidade" => 4435,
                "id_estado" => 42,
                "nome" => "Irati",
            ],
            [
                "id_cidade" => 4436,
                "id_estado" => 42,
                "nome" => "Irineópolis",
            ],
            [
                "id_cidade" => 4437,
                "id_estado" => 42,
                "nome" => "Itá",
            ],
            [
                "id_cidade" => 4438,
                "id_estado" => 42,
                "nome" => "Itaiópolis",
            ],
            [
                "id_cidade" => 4439,
                "id_estado" => 42,
                "nome" => "Itajaí",
            ],
            [
                "id_cidade" => 4440,
                "id_estado" => 42,
                "nome" => "Itapema",
            ],
            [
                "id_cidade" => 4441,
                "id_estado" => 42,
                "nome" => "Itapiranga",
            ],
            [
                "id_cidade" => 4442,
                "id_estado" => 42,
                "nome" => "Itapoá",
            ],
            [
                "id_cidade" => 4443,
                "id_estado" => 42,
                "nome" => "Ituporanga",
            ],
            [
                "id_cidade" => 4444,
                "id_estado" => 42,
                "nome" => "Jaborá",
            ],
            [
                "id_cidade" => 4445,
                "id_estado" => 42,
                "nome" => "Jacinto Machado",
            ],
            [
                "id_cidade" => 4446,
                "id_estado" => 42,
                "nome" => "Jaguaruna",
            ],
            [
                "id_cidade" => 4447,
                "id_estado" => 42,
                "nome" => "Jaraguá do Sul",
            ],
            [
                "id_cidade" => 4448,
                "id_estado" => 42,
                "nome" => "Jardinópolis",
            ],
            [
                "id_cidade" => 4449,
                "id_estado" => 42,
                "nome" => "Joaçaba",
            ],
            [
                "id_cidade" => 4450,
                "id_estado" => 42,
                "nome" => "Joinville",
            ],
            [
                "id_cidade" => 4451,
                "id_estado" => 42,
                "nome" => "José Boiteux",
            ],
            [
                "id_cidade" => 4452,
                "id_estado" => 42,
                "nome" => "Jupiá",
            ],
            [
                "id_cidade" => 4453,
                "id_estado" => 42,
                "nome" => "Lacerdópolis",
            ],
            [
                "id_cidade" => 4454,
                "id_estado" => 42,
                "nome" => "Lages",
            ],
            [
                "id_cidade" => 4455,
                "id_estado" => 42,
                "nome" => "Laguna",
            ],
            [
                "id_cidade" => 4456,
                "id_estado" => 42,
                "nome" => "Lajeado Grande",
            ],
            [
                "id_cidade" => 4457,
                "id_estado" => 42,
                "nome" => "Laurentino",
            ],
            [
                "id_cidade" => 4458,
                "id_estado" => 42,
                "nome" => "Lauro Müller",
            ],
            [
                "id_cidade" => 4459,
                "id_estado" => 42,
                "nome" => "Lebon Régis",
            ],
            [
                "id_cidade" => 4460,
                "id_estado" => 42,
                "nome" => "Leoberto Leal",
            ],
            [
                "id_cidade" => 4461,
                "id_estado" => 42,
                "nome" => "Lindóia do Sul",
            ],
            [
                "id_cidade" => 4462,
                "id_estado" => 42,
                "nome" => "Lontras",
            ],
            [
                "id_cidade" => 4463,
                "id_estado" => 42,
                "nome" => "Luiz Alves",
            ],
            [
                "id_cidade" => 4464,
                "id_estado" => 42,
                "nome" => "Luzerna",
            ],
            [
                "id_cidade" => 4465,
                "id_estado" => 42,
                "nome" => "Macieira",
            ],
            [
                "id_cidade" => 4466,
                "id_estado" => 42,
                "nome" => "Mafra",
            ],
            [
                "id_cidade" => 4467,
                "id_estado" => 42,
                "nome" => "Major Gercino",
            ],
            [
                "id_cidade" => 4468,
                "id_estado" => 42,
                "nome" => "Major Vieira",
            ],
            [
                "id_cidade" => 4469,
                "id_estado" => 42,
                "nome" => "Maracajá",
            ],
            [
                "id_cidade" => 4470,
                "id_estado" => 42,
                "nome" => "Maravilha",
            ],
            [
                "id_cidade" => 4471,
                "id_estado" => 42,
                "nome" => "Marema",
            ],
            [
                "id_cidade" => 4472,
                "id_estado" => 42,
                "nome" => "Massaranduba",
            ],
            [
                "id_cidade" => 4473,
                "id_estado" => 42,
                "nome" => "Matos Costa",
            ],
            [
                "id_cidade" => 4474,
                "id_estado" => 42,
                "nome" => "Meleiro",
            ],
            [
                "id_cidade" => 4475,
                "id_estado" => 42,
                "nome" => "Mirim Doce",
            ],
            [
                "id_cidade" => 4476,
                "id_estado" => 42,
                "nome" => "Modelo",
            ],
            [
                "id_cidade" => 4477,
                "id_estado" => 42,
                "nome" => "Mondaí",
            ],
            [
                "id_cidade" => 4478,
                "id_estado" => 42,
                "nome" => "Monte Carlo",
            ],
            [
                "id_cidade" => 4479,
                "id_estado" => 42,
                "nome" => "Monte Castelo",
            ],
            [
                "id_cidade" => 4480,
                "id_estado" => 42,
                "nome" => "Morro da Fumaça",
            ],
            [
                "id_cidade" => 4481,
                "id_estado" => 42,
                "nome" => "Morro Grande",
            ],
            [
                "id_cidade" => 4482,
                "id_estado" => 42,
                "nome" => "Navegantes",
            ],
            [
                "id_cidade" => 4483,
                "id_estado" => 42,
                "nome" => "Nova Erechim",
            ],
            [
                "id_cidade" => 4484,
                "id_estado" => 42,
                "nome" => "Nova Itaberaba",
            ],
            [
                "id_cidade" => 4485,
                "id_estado" => 42,
                "nome" => "Nova Trento",
            ],
            [
                "id_cidade" => 4486,
                "id_estado" => 42,
                "nome" => "Nova Veneza",
            ],
            [
                "id_cidade" => 4487,
                "id_estado" => 42,
                "nome" => "Novo Horizonte",
            ],
            [
                "id_cidade" => 4488,
                "id_estado" => 42,
                "nome" => "Orleans",
            ],
            [
                "id_cidade" => 4489,
                "id_estado" => 42,
                "nome" => "Otacílio Costa",
            ],
            [
                "id_cidade" => 4490,
                "id_estado" => 42,
                "nome" => "Ouro",
            ],
            [
                "id_cidade" => 4491,
                "id_estado" => 42,
                "nome" => "Ouro Verde",
            ],
            [
                "id_cidade" => 4492,
                "id_estado" => 42,
                "nome" => "Paial",
            ],
            [
                "id_cidade" => 4493,
                "id_estado" => 42,
                "nome" => "Painel",
            ],
            [
                "id_cidade" => 4494,
                "id_estado" => 42,
                "nome" => "Palhoça",
            ],
            [
                "id_cidade" => 4495,
                "id_estado" => 42,
                "nome" => "Palma Sola",
            ],
            [
                "id_cidade" => 4496,
                "id_estado" => 42,
                "nome" => "Palmeira",
            ],
            [
                "id_cidade" => 4497,
                "id_estado" => 42,
                "nome" => "Palmitos",
            ],
            [
                "id_cidade" => 4498,
                "id_estado" => 42,
                "nome" => "Papanduva",
            ],
            [
                "id_cidade" => 4499,
                "id_estado" => 42,
                "nome" => "Paraíso",
            ],
            [
                "id_cidade" => 4500,
                "id_estado" => 42,
                "nome" => "Passo de Torres",
            ],
            [
                "id_cidade" => 4501,
                "id_estado" => 42,
                "nome" => "Passos Maia",
            ],
            [
                "id_cidade" => 4502,
                "id_estado" => 42,
                "nome" => "Paulo Lopes",
            ],
            [
                "id_cidade" => 4503,
                "id_estado" => 42,
                "nome" => "Pedras Grandes",
            ],
            [
                "id_cidade" => 4504,
                "id_estado" => 42,
                "nome" => "Penha",
            ],
            [
                "id_cidade" => 4505,
                "id_estado" => 42,
                "nome" => "Peritiba",
            ],
            [
                "id_cidade" => 4506,
                "id_estado" => 42,
                "nome" => "Pescaria Brava",
            ],
            [
                "id_cidade" => 4507,
                "id_estado" => 42,
                "nome" => "Petrolândia",
            ],
            [
                "id_cidade" => 4508,
                "id_estado" => 42,
                "nome" => "Pinhalzinho",
            ],
            [
                "id_cidade" => 4509,
                "id_estado" => 42,
                "nome" => "Pinheiro Preto",
            ],
            [
                "id_cidade" => 4510,
                "id_estado" => 42,
                "nome" => "Piratuba",
            ],
            [
                "id_cidade" => 4511,
                "id_estado" => 42,
                "nome" => "Planalto Alegre",
            ],
            [
                "id_cidade" => 4512,
                "id_estado" => 42,
                "nome" => "Pomerode",
            ],
            [
                "id_cidade" => 4513,
                "id_estado" => 42,
                "nome" => "Ponte Alta",
            ],
            [
                "id_cidade" => 4514,
                "id_estado" => 42,
                "nome" => "Ponte Alta do Norte",
            ],
            [
                "id_cidade" => 4515,
                "id_estado" => 42,
                "nome" => "Ponte Serrada",
            ],
            [
                "id_cidade" => 4516,
                "id_estado" => 42,
                "nome" => "Porto Belo",
            ],
            [
                "id_cidade" => 4517,
                "id_estado" => 42,
                "nome" => "Porto União",
            ],
            [
                "id_cidade" => 4518,
                "id_estado" => 42,
                "nome" => "Pouso Redondo",
            ],
            [
                "id_cidade" => 4519,
                "id_estado" => 42,
                "nome" => "Praia Grande",
            ],
            [
                "id_cidade" => 4520,
                "id_estado" => 42,
                "nome" => "Presidente Castello Branco",
            ],
            [
                "id_cidade" => 4521,
                "id_estado" => 42,
                "nome" => "Presidente Getúlio",
            ],
            [
                "id_cidade" => 4522,
                "id_estado" => 42,
                "nome" => "Presidente Nereu",
            ],
            [
                "id_cidade" => 4523,
                "id_estado" => 42,
                "nome" => "Princesa",
            ],
            [
                "id_cidade" => 4524,
                "id_estado" => 42,
                "nome" => "Quilombo",
            ],
            [
                "id_cidade" => 4525,
                "id_estado" => 42,
                "nome" => "Rancho Queimado",
            ],
            [
                "id_cidade" => 4526,
                "id_estado" => 42,
                "nome" => "Rio das Antas",
            ],
            [
                "id_cidade" => 4527,
                "id_estado" => 42,
                "nome" => "Rio do Campo",
            ],
            [
                "id_cidade" => 4528,
                "id_estado" => 42,
                "nome" => "Rio do Oeste",
            ],
            [
                "id_cidade" => 4529,
                "id_estado" => 42,
                "nome" => "Rio do Sul",
            ],
            [
                "id_cidade" => 4530,
                "id_estado" => 42,
                "nome" => "Rio dos Cedros",
            ],
            [
                "id_cidade" => 4531,
                "id_estado" => 42,
                "nome" => "Rio Fortuna",
            ],
            [
                "id_cidade" => 4532,
                "id_estado" => 42,
                "nome" => "Rio Negrinho",
            ],
            [
                "id_cidade" => 4533,
                "id_estado" => 42,
                "nome" => "Rio Rufino",
            ],
            [
                "id_cidade" => 4534,
                "id_estado" => 42,
                "nome" => "Riqueza",
            ],
            [
                "id_cidade" => 4535,
                "id_estado" => 42,
                "nome" => "Rodeio",
            ],
            [
                "id_cidade" => 4536,
                "id_estado" => 42,
                "nome" => "Romelândia",
            ],
            [
                "id_cidade" => 4537,
                "id_estado" => 42,
                "nome" => "Salete",
            ],
            [
                "id_cidade" => 4538,
                "id_estado" => 42,
                "nome" => "Saltinho",
            ],
            [
                "id_cidade" => 4539,
                "id_estado" => 42,
                "nome" => "Salto Veloso",
            ],
            [
                "id_cidade" => 4540,
                "id_estado" => 42,
                "nome" => "Sangão",
            ],
            [
                "id_cidade" => 4541,
                "id_estado" => 42,
                "nome" => "Santa Cecília",
            ],
            [
                "id_cidade" => 4542,
                "id_estado" => 42,
                "nome" => "Santa Helena",
            ],
            [
                "id_cidade" => 4543,
                "id_estado" => 42,
                "nome" => "Santa Rosa de Lima",
            ],
            [
                "id_cidade" => 4544,
                "id_estado" => 42,
                "nome" => "Santa Rosa do Sul",
            ],
            [
                "id_cidade" => 4545,
                "id_estado" => 42,
                "nome" => "Santa Terezinha",
            ],
            [
                "id_cidade" => 4546,
                "id_estado" => 42,
                "nome" => "Santa Terezinha do Progresso",
            ],
            [
                "id_cidade" => 4547,
                "id_estado" => 42,
                "nome" => "Santiago do Sul",
            ],
            [
                "id_cidade" => 4548,
                "id_estado" => 42,
                "nome" => "Santo Amaro da Imperatriz",
            ],
            [
                "id_cidade" => 4549,
                "id_estado" => 42,
                "nome" => "São Bento do Sul",
            ],
            [
                "id_cidade" => 4550,
                "id_estado" => 42,
                "nome" => "São Bernardino",
            ],
            [
                "id_cidade" => 4551,
                "id_estado" => 42,
                "nome" => "São Bonifácio",
            ],
            [
                "id_cidade" => 4552,
                "id_estado" => 42,
                "nome" => "São Carlos",
            ],
            [
                "id_cidade" => 4553,
                "id_estado" => 42,
                "nome" => "São Cristóvão do Sul",
            ],
            [
                "id_cidade" => 4554,
                "id_estado" => 42,
                "nome" => "São Domingos",
            ],
            [
                "id_cidade" => 4555,
                "id_estado" => 42,
                "nome" => "São Francisco do Sul",
            ],
            [
                "id_cidade" => 4556,
                "id_estado" => 42,
                "nome" => "São João Batista",
            ],
            [
                "id_cidade" => 4557,
                "id_estado" => 42,
                "nome" => "São João do Itaperiú",
            ],
            [
                "id_cidade" => 4558,
                "id_estado" => 42,
                "nome" => "São João do Oeste",
            ],
            [
                "id_cidade" => 4559,
                "id_estado" => 42,
                "nome" => "São João do Sul",
            ],
            [
                "id_cidade" => 4560,
                "id_estado" => 42,
                "nome" => "São Joaquim",
            ],
            [
                "id_cidade" => 4561,
                "id_estado" => 42,
                "nome" => "São José",
            ],
            [
                "id_cidade" => 4562,
                "id_estado" => 42,
                "nome" => "São José do Cedro",
            ],
            [
                "id_cidade" => 4563,
                "id_estado" => 42,
                "nome" => "São José do Cerrito",
            ],
            [
                "id_cidade" => 4564,
                "id_estado" => 42,
                "nome" => "São Lourenço do Oeste",
            ],
            [
                "id_cidade" => 4565,
                "id_estado" => 42,
                "nome" => "São Ludgero",
            ],
            [
                "id_cidade" => 4566,
                "id_estado" => 42,
                "nome" => "São Martinho",
            ],
            [
                "id_cidade" => 4567,
                "id_estado" => 42,
                "nome" => "São Miguel da Boa Vista",
            ],
            [
                "id_cidade" => 4568,
                "id_estado" => 42,
                "nome" => "São Miguel do Oeste",
            ],
            [
                "id_cidade" => 4569,
                "id_estado" => 42,
                "nome" => "São Pedro de Alcântara",
            ],
            [
                "id_cidade" => 4570,
                "id_estado" => 42,
                "nome" => "Saudades",
            ],
            [
                "id_cidade" => 4571,
                "id_estado" => 42,
                "nome" => "Schroeder",
            ],
            [
                "id_cidade" => 4572,
                "id_estado" => 42,
                "nome" => "Seara",
            ],
            [
                "id_cidade" => 4573,
                "id_estado" => 42,
                "nome" => "Serra Alta",
            ],
            [
                "id_cidade" => 4574,
                "id_estado" => 42,
                "nome" => "Siderópolis",
            ],
            [
                "id_cidade" => 4575,
                "id_estado" => 42,
                "nome" => "Sombrio",
            ],
            [
                "id_cidade" => 4576,
                "id_estado" => 42,
                "nome" => "Sul Brasil",
            ],
            [
                "id_cidade" => 4577,
                "id_estado" => 42,
                "nome" => "Taió",
            ],
            [
                "id_cidade" => 4578,
                "id_estado" => 42,
                "nome" => "Tangará",
            ],
            [
                "id_cidade" => 4579,
                "id_estado" => 42,
                "nome" => "Tigrinhos",
            ],
            [
                "id_cidade" => 4580,
                "id_estado" => 42,
                "nome" => "Tijucas",
            ],
            [
                "id_cidade" => 4581,
                "id_estado" => 42,
                "nome" => "Timbé do Sul",
            ],
            [
                "id_cidade" => 4582,
                "id_estado" => 42,
                "nome" => "Timbó",
            ],
            [
                "id_cidade" => 4583,
                "id_estado" => 42,
                "nome" => "Timbó Grande",
            ],
            [
                "id_cidade" => 4584,
                "id_estado" => 42,
                "nome" => "Três Barras",
            ],
            [
                "id_cidade" => 4585,
                "id_estado" => 42,
                "nome" => "Treviso",
            ],
            [
                "id_cidade" => 4586,
                "id_estado" => 42,
                "nome" => "Treze de Maio",
            ],
            [
                "id_cidade" => 4587,
                "id_estado" => 42,
                "nome" => "Treze Tílias",
            ],
            [
                "id_cidade" => 4588,
                "id_estado" => 42,
                "nome" => "Trombudo Central",
            ],
            [
                "id_cidade" => 4589,
                "id_estado" => 42,
                "nome" => "Tubarão",
            ],
            [
                "id_cidade" => 4590,
                "id_estado" => 42,
                "nome" => "Tunápolis",
            ],
            [
                "id_cidade" => 4591,
                "id_estado" => 42,
                "nome" => "Turvo",
            ],
            [
                "id_cidade" => 4592,
                "id_estado" => 42,
                "nome" => "União do Oeste",
            ],
            [
                "id_cidade" => 4593,
                "id_estado" => 42,
                "nome" => "Urubici",
            ],
            [
                "id_cidade" => 4594,
                "id_estado" => 42,
                "nome" => "Urupema",
            ],
            [
                "id_cidade" => 4595,
                "id_estado" => 42,
                "nome" => "Urussanga",
            ],
            [
                "id_cidade" => 4596,
                "id_estado" => 42,
                "nome" => "Vargeão",
            ],
            [
                "id_cidade" => 4597,
                "id_estado" => 42,
                "nome" => "Vargem",
            ],
            [
                "id_cidade" => 4598,
                "id_estado" => 42,
                "nome" => "Vargem Bonita",
            ],
            [
                "id_cidade" => 4599,
                "id_estado" => 42,
                "nome" => "Vidal Ramos",
            ],
            [
                "id_cidade" => 4600,
                "id_estado" => 42,
                "nome" => "Videira",
            ],
            [
                "id_cidade" => 4601,
                "id_estado" => 42,
                "nome" => "Vitor Meireles",
            ],
            [
                "id_cidade" => 4602,
                "id_estado" => 42,
                "nome" => "Witmarsum",
            ],
            [
                "id_cidade" => 4603,
                "id_estado" => 42,
                "nome" => "Xanxerê",
            ],
            [
                "id_cidade" => 4604,
                "id_estado" => 42,
                "nome" => "Xavantina",
            ],
            [
                "id_cidade" => 4605,
                "id_estado" => 42,
                "nome" => "Xaxim",
            ],
            [
                "id_cidade" => 4606,
                "id_estado" => 42,
                "nome" => "Zortéa",
            ],
            [
                "id_cidade" => 4607,
                "id_estado" => 43,
                "nome" => "Aceguá",
            ],
            [
                "id_cidade" => 4608,
                "id_estado" => 43,
                "nome" => "Água Santa",
            ],
            [
                "id_cidade" => 4609,
                "id_estado" => 43,
                "nome" => "Agudo",
            ],
            [
                "id_cidade" => 4610,
                "id_estado" => 43,
                "nome" => "Ajuricaba",
            ],
            [
                "id_cidade" => 4611,
                "id_estado" => 43,
                "nome" => "Alecrim",
            ],
            [
                "id_cidade" => 4612,
                "id_estado" => 43,
                "nome" => "Alegrete",
            ],
            [
                "id_cidade" => 4613,
                "id_estado" => 43,
                "nome" => "Alegria",
            ],
            [
                "id_cidade" => 4614,
                "id_estado" => 43,
                "nome" => "Almirante Tamandaré do Sul",
            ],
            [
                "id_cidade" => 4615,
                "id_estado" => 43,
                "nome" => "Alpestre",
            ],
            [
                "id_cidade" => 4616,
                "id_estado" => 43,
                "nome" => "Alto Alegre",
            ],
            [
                "id_cidade" => 4617,
                "id_estado" => 43,
                "nome" => "Alto Feliz",
            ],
            [
                "id_cidade" => 4618,
                "id_estado" => 43,
                "nome" => "Alvorada",
            ],
            [
                "id_cidade" => 4619,
                "id_estado" => 43,
                "nome" => "Amaral Ferrador",
            ],
            [
                "id_cidade" => 4620,
                "id_estado" => 43,
                "nome" => "Ametista do Sul",
            ],
            [
                "id_cidade" => 4621,
                "id_estado" => 43,
                "nome" => "André da Rocha",
            ],
            [
                "id_cidade" => 4622,
                "id_estado" => 43,
                "nome" => "Anta Gorda",
            ],
            [
                "id_cidade" => 4623,
                "id_estado" => 43,
                "nome" => "Antônio Prado",
            ],
            [
                "id_cidade" => 4624,
                "id_estado" => 43,
                "nome" => "Arambaré",
            ],
            [
                "id_cidade" => 4625,
                "id_estado" => 43,
                "nome" => "Araricá",
            ],
            [
                "id_cidade" => 4626,
                "id_estado" => 43,
                "nome" => "Aratiba",
            ],
            [
                "id_cidade" => 4627,
                "id_estado" => 43,
                "nome" => "Arroio do Meio",
            ],
            [
                "id_cidade" => 4628,
                "id_estado" => 43,
                "nome" => "Arroio do Padre",
            ],
            [
                "id_cidade" => 4629,
                "id_estado" => 43,
                "nome" => "Arroio do Sal",
            ],
            [
                "id_cidade" => 4630,
                "id_estado" => 43,
                "nome" => "Arroio do Tigre",
            ],
            [
                "id_cidade" => 4631,
                "id_estado" => 43,
                "nome" => "Arroio dos Ratos",
            ],
            [
                "id_cidade" => 4632,
                "id_estado" => 43,
                "nome" => "Arroio Grande",
            ],
            [
                "id_cidade" => 4633,
                "id_estado" => 43,
                "nome" => "Arvorezinha",
            ],
            [
                "id_cidade" => 4634,
                "id_estado" => 43,
                "nome" => "Augusto Pestana",
            ],
            [
                "id_cidade" => 4635,
                "id_estado" => 43,
                "nome" => "Áurea",
            ],
            [
                "id_cidade" => 4636,
                "id_estado" => 43,
                "nome" => "Bagé",
            ],
            [
                "id_cidade" => 4637,
                "id_estado" => 43,
                "nome" => "Balneário Pinhal",
            ],
            [
                "id_cidade" => 4638,
                "id_estado" => 43,
                "nome" => "Barão",
            ],
            [
                "id_cidade" => 4639,
                "id_estado" => 43,
                "nome" => "Barão de Cotegipe",
            ],
            [
                "id_cidade" => 4640,
                "id_estado" => 43,
                "nome" => "Barão do Triunfo",
            ],
            [
                "id_cidade" => 4641,
                "id_estado" => 43,
                "nome" => "Barra do Guarita",
            ],
            [
                "id_cidade" => 4642,
                "id_estado" => 43,
                "nome" => "Barra do Quaraí",
            ],
            [
                "id_cidade" => 4643,
                "id_estado" => 43,
                "nome" => "Barra do Ribeiro",
            ],
            [
                "id_cidade" => 4644,
                "id_estado" => 43,
                "nome" => "Barra do Rio Azul",
            ],
            [
                "id_cidade" => 4645,
                "id_estado" => 43,
                "nome" => "Barra Funda",
            ],
            [
                "id_cidade" => 4646,
                "id_estado" => 43,
                "nome" => "Barracão",
            ],
            [
                "id_cidade" => 4647,
                "id_estado" => 43,
                "nome" => "Barros Cassal",
            ],
            [
                "id_cidade" => 4648,
                "id_estado" => 43,
                "nome" => "Benjamin Constant do Sul",
            ],
            [
                "id_cidade" => 4649,
                "id_estado" => 43,
                "nome" => "Bento Gonçalves",
            ],
            [
                "id_cidade" => 4650,
                "id_estado" => 43,
                "nome" => "Boa Vista das Missões",
            ],
            [
                "id_cidade" => 4651,
                "id_estado" => 43,
                "nome" => "Boa Vista do Buricá",
            ],
            [
                "id_cidade" => 4652,
                "id_estado" => 43,
                "nome" => "Boa Vista do Cadeado",
            ],
            [
                "id_cidade" => 4653,
                "id_estado" => 43,
                "nome" => "Boa Vista do Incra",
            ],
            [
                "id_cidade" => 4654,
                "id_estado" => 43,
                "nome" => "Boa Vista do Sul",
            ],
            [
                "id_cidade" => 4655,
                "id_estado" => 43,
                "nome" => "Bom Jesus",
            ],
            [
                "id_cidade" => 4656,
                "id_estado" => 43,
                "nome" => "Bom Princípio",
            ],
            [
                "id_cidade" => 4657,
                "id_estado" => 43,
                "nome" => "Bom Progresso",
            ],
            [
                "id_cidade" => 4658,
                "id_estado" => 43,
                "nome" => "Bom Retiro do Sul",
            ],
            [
                "id_cidade" => 4659,
                "id_estado" => 43,
                "nome" => "Boqueirão do Leão",
            ],
            [
                "id_cidade" => 4660,
                "id_estado" => 43,
                "nome" => "Bossoroca",
            ],
            [
                "id_cidade" => 4661,
                "id_estado" => 43,
                "nome" => "Bozano",
            ],
            [
                "id_cidade" => 4662,
                "id_estado" => 43,
                "nome" => "Braga",
            ],
            [
                "id_cidade" => 4663,
                "id_estado" => 43,
                "nome" => "Brochier",
            ],
            [
                "id_cidade" => 4664,
                "id_estado" => 43,
                "nome" => "Butiá",
            ],
            [
                "id_cidade" => 4665,
                "id_estado" => 43,
                "nome" => "Caçapava do Sul",
            ],
            [
                "id_cidade" => 4666,
                "id_estado" => 43,
                "nome" => "Cacequi",
            ],
            [
                "id_cidade" => 4667,
                "id_estado" => 43,
                "nome" => "Cachoeira do Sul",
            ],
            [
                "id_cidade" => 4668,
                "id_estado" => 43,
                "nome" => "Cachoeirinha",
            ],
            [
                "id_cidade" => 4669,
                "id_estado" => 43,
                "nome" => "Cacique Doble",
            ],
            [
                "id_cidade" => 4670,
                "id_estado" => 43,
                "nome" => "Caibaté",
            ],
            [
                "id_cidade" => 4671,
                "id_estado" => 43,
                "nome" => "Caiçara",
            ],
            [
                "id_cidade" => 4672,
                "id_estado" => 43,
                "nome" => "Camaquã",
            ],
            [
                "id_cidade" => 4673,
                "id_estado" => 43,
                "nome" => "Camargo",
            ],
            [
                "id_cidade" => 4674,
                "id_estado" => 43,
                "nome" => "Cambará do Sul",
            ],
            [
                "id_cidade" => 4675,
                "id_estado" => 43,
                "nome" => "Campestre da Serra",
            ],
            [
                "id_cidade" => 4676,
                "id_estado" => 43,
                "nome" => "Campina das Missões",
            ],
            [
                "id_cidade" => 4677,
                "id_estado" => 43,
                "nome" => "Campinas do Sul",
            ],
            [
                "id_cidade" => 4678,
                "id_estado" => 43,
                "nome" => "Campo Bom",
            ],
            [
                "id_cidade" => 4679,
                "id_estado" => 43,
                "nome" => "Campo Novo",
            ],
            [
                "id_cidade" => 4680,
                "id_estado" => 43,
                "nome" => "Campos Borges",
            ],
            [
                "id_cidade" => 4681,
                "id_estado" => 43,
                "nome" => "Candelária",
            ],
            [
                "id_cidade" => 4682,
                "id_estado" => 43,
                "nome" => "Cândido Godói",
            ],
            [
                "id_cidade" => 4683,
                "id_estado" => 43,
                "nome" => "Candiota",
            ],
            [
                "id_cidade" => 4684,
                "id_estado" => 43,
                "nome" => "Canela",
            ],
            [
                "id_cidade" => 4685,
                "id_estado" => 43,
                "nome" => "Canguçu",
            ],
            [
                "id_cidade" => 4686,
                "id_estado" => 43,
                "nome" => "Canoas",
            ],
            [
                "id_cidade" => 4687,
                "id_estado" => 43,
                "nome" => "Canudos do Vale",
            ],
            [
                "id_cidade" => 4688,
                "id_estado" => 43,
                "nome" => "Capão Bonito do Sul",
            ],
            [
                "id_cidade" => 4689,
                "id_estado" => 43,
                "nome" => "Capão da Canoa",
            ],
            [
                "id_cidade" => 4690,
                "id_estado" => 43,
                "nome" => "Capão do Cipó",
            ],
            [
                "id_cidade" => 4691,
                "id_estado" => 43,
                "nome" => "Capão do Leão",
            ],
            [
                "id_cidade" => 4692,
                "id_estado" => 43,
                "nome" => "Capela de Santana",
            ],
            [
                "id_cidade" => 4693,
                "id_estado" => 43,
                "nome" => "Capitão",
            ],
            [
                "id_cidade" => 4694,
                "id_estado" => 43,
                "nome" => "Capivari do Sul",
            ],
            [
                "id_cidade" => 4695,
                "id_estado" => 43,
                "nome" => "Caraá",
            ],
            [
                "id_cidade" => 4696,
                "id_estado" => 43,
                "nome" => "Carazinho",
            ],
            [
                "id_cidade" => 4697,
                "id_estado" => 43,
                "nome" => "Carlos Barbosa",
            ],
            [
                "id_cidade" => 4698,
                "id_estado" => 43,
                "nome" => "Carlos Gomes",
            ],
            [
                "id_cidade" => 4699,
                "id_estado" => 43,
                "nome" => "Casca",
            ],
            [
                "id_cidade" => 4700,
                "id_estado" => 43,
                "nome" => "Caseiros",
            ],
            [
                "id_cidade" => 4701,
                "id_estado" => 43,
                "nome" => "Catuípe",
            ],
            [
                "id_cidade" => 4702,
                "id_estado" => 43,
                "nome" => "Caxias do Sul",
            ],
            [
                "id_cidade" => 4703,
                "id_estado" => 43,
                "nome" => "Centenário",
            ],
            [
                "id_cidade" => 4704,
                "id_estado" => 43,
                "nome" => "Cerrito",
            ],
            [
                "id_cidade" => 4705,
                "id_estado" => 43,
                "nome" => "Cerro Branco",
            ],
            [
                "id_cidade" => 4706,
                "id_estado" => 43,
                "nome" => "Cerro Grande",
            ],
            [
                "id_cidade" => 4707,
                "id_estado" => 43,
                "nome" => "Cerro Grande do Sul",
            ],
            [
                "id_cidade" => 4708,
                "id_estado" => 43,
                "nome" => "Cerro Largo",
            ],
            [
                "id_cidade" => 4709,
                "id_estado" => 43,
                "nome" => "Chapada",
            ],
            [
                "id_cidade" => 4710,
                "id_estado" => 43,
                "nome" => "Charqueadas",
            ],
            [
                "id_cidade" => 4711,
                "id_estado" => 43,
                "nome" => "Charrua",
            ],
            [
                "id_cidade" => 4712,
                "id_estado" => 43,
                "nome" => "Chiapetta",
            ],
            [
                "id_cidade" => 4713,
                "id_estado" => 43,
                "nome" => "Chuí",
            ],
            [
                "id_cidade" => 4714,
                "id_estado" => 43,
                "nome" => "Chuvisca",
            ],
            [
                "id_cidade" => 4715,
                "id_estado" => 43,
                "nome" => "Cidreira",
            ],
            [
                "id_cidade" => 4716,
                "id_estado" => 43,
                "nome" => "Ciríaco",
            ],
            [
                "id_cidade" => 4717,
                "id_estado" => 43,
                "nome" => "Colinas",
            ],
            [
                "id_cidade" => 4718,
                "id_estado" => 43,
                "nome" => "Colorado",
            ],
            [
                "id_cidade" => 4719,
                "id_estado" => 43,
                "nome" => "Condor",
            ],
            [
                "id_cidade" => 4720,
                "id_estado" => 43,
                "nome" => "Constantina",
            ],
            [
                "id_cidade" => 4721,
                "id_estado" => 43,
                "nome" => "Coqueiro Baixo",
            ],
            [
                "id_cidade" => 4722,
                "id_estado" => 43,
                "nome" => "Coqueiros do Sul",
            ],
            [
                "id_cidade" => 4723,
                "id_estado" => 43,
                "nome" => "Coronel Barros",
            ],
            [
                "id_cidade" => 4724,
                "id_estado" => 43,
                "nome" => "Coronel Bicaco",
            ],
            [
                "id_cidade" => 4725,
                "id_estado" => 43,
                "nome" => "Coronel Pilar",
            ],
            [
                "id_cidade" => 4726,
                "id_estado" => 43,
                "nome" => "Cotiporã",
            ],
            [
                "id_cidade" => 4727,
                "id_estado" => 43,
                "nome" => "Coxilha",
            ],
            [
                "id_cidade" => 4728,
                "id_estado" => 43,
                "nome" => "Crissiumal",
            ],
            [
                "id_cidade" => 4729,
                "id_estado" => 43,
                "nome" => "Cristal",
            ],
            [
                "id_cidade" => 4730,
                "id_estado" => 43,
                "nome" => "Cristal do Sul",
            ],
            [
                "id_cidade" => 4731,
                "id_estado" => 43,
                "nome" => "Cruz Alta",
            ],
            [
                "id_cidade" => 4732,
                "id_estado" => 43,
                "nome" => "Cruzaltense",
            ],
            [
                "id_cidade" => 4733,
                "id_estado" => 43,
                "nome" => "Cruzeiro do Sul",
            ],
            [
                "id_cidade" => 4734,
                "id_estado" => 43,
                "nome" => "David Canabarro",
            ],
            [
                "id_cidade" => 4735,
                "id_estado" => 43,
                "nome" => "Derrubadas",
            ],
            [
                "id_cidade" => 4736,
                "id_estado" => 43,
                "nome" => "Dezesseis de Novembro",
            ],
            [
                "id_cidade" => 4737,
                "id_estado" => 43,
                "nome" => "Dilermando de Aguiar",
            ],
            [
                "id_cidade" => 4738,
                "id_estado" => 43,
                "nome" => "Dois Irmãos",
            ],
            [
                "id_cidade" => 4739,
                "id_estado" => 43,
                "nome" => "Dois Irmãos das Missões",
            ],
            [
                "id_cidade" => 4740,
                "id_estado" => 43,
                "nome" => "Dois Lajeados",
            ],
            [
                "id_cidade" => 4741,
                "id_estado" => 43,
                "nome" => "Dom Feliciano",
            ],
            [
                "id_cidade" => 4742,
                "id_estado" => 43,
                "nome" => "Dom Pedrito",
            ],
            [
                "id_cidade" => 4743,
                "id_estado" => 43,
                "nome" => "Dom Pedro de Alcântara",
            ],
            [
                "id_cidade" => 4744,
                "id_estado" => 43,
                "nome" => "Dona Francisca",
            ],
            [
                "id_cidade" => 4745,
                "id_estado" => 43,
                "nome" => "Doutor Maurício Cardoso",
            ],
            [
                "id_cidade" => 4746,
                "id_estado" => 43,
                "nome" => "Doutor Ricardo",
            ],
            [
                "id_cidade" => 4747,
                "id_estado" => 43,
                "nome" => "Eldorado do Sul",
            ],
            [
                "id_cidade" => 4748,
                "id_estado" => 43,
                "nome" => "Encantado",
            ],
            [
                "id_cidade" => 4749,
                "id_estado" => 43,
                "nome" => "Encruzilhada do Sul",
            ],
            [
                "id_cidade" => 4750,
                "id_estado" => 43,
                "nome" => "Engenho Velho",
            ],
            [
                "id_cidade" => 4751,
                "id_estado" => 43,
                "nome" => "Entre Rios do Sul",
            ],
            [
                "id_cidade" => 4752,
                "id_estado" => 43,
                "nome" => "Entre-Ijuís",
            ],
            [
                "id_cidade" => 4753,
                "id_estado" => 43,
                "nome" => "Erebango",
            ],
            [
                "id_cidade" => 4754,
                "id_estado" => 43,
                "nome" => "Erechim",
            ],
            [
                "id_cidade" => 4755,
                "id_estado" => 43,
                "nome" => "Ernestina",
            ],
            [
                "id_cidade" => 4756,
                "id_estado" => 43,
                "nome" => "Erval Grande",
            ],
            [
                "id_cidade" => 4757,
                "id_estado" => 43,
                "nome" => "Erval Seco",
            ],
            [
                "id_cidade" => 4758,
                "id_estado" => 43,
                "nome" => "Esmeralda",
            ],
            [
                "id_cidade" => 4759,
                "id_estado" => 43,
                "nome" => "Esperança do Sul",
            ],
            [
                "id_cidade" => 4760,
                "id_estado" => 43,
                "nome" => "Espumoso",
            ],
            [
                "id_cidade" => 4761,
                "id_estado" => 43,
                "nome" => "Estação",
            ],
            [
                "id_cidade" => 4762,
                "id_estado" => 43,
                "nome" => "Estância Velha",
            ],
            [
                "id_cidade" => 4763,
                "id_estado" => 43,
                "nome" => "Esteio",
            ],
            [
                "id_cidade" => 4764,
                "id_estado" => 43,
                "nome" => "Estrela",
            ],
            [
                "id_cidade" => 4765,
                "id_estado" => 43,
                "nome" => "Estrela Velha",
            ],
            [
                "id_cidade" => 4766,
                "id_estado" => 43,
                "nome" => "Eugênio de Castro",
            ],
            [
                "id_cidade" => 4767,
                "id_estado" => 43,
                "nome" => "Fagundes Varela",
            ],
            [
                "id_cidade" => 4768,
                "id_estado" => 43,
                "nome" => "Farroupilha",
            ],
            [
                "id_cidade" => 4769,
                "id_estado" => 43,
                "nome" => "Faxinal do Soturno",
            ],
            [
                "id_cidade" => 4770,
                "id_estado" => 43,
                "nome" => "Faxinalzinho",
            ],
            [
                "id_cidade" => 4771,
                "id_estado" => 43,
                "nome" => "Fazenda Vilanova",
            ],
            [
                "id_cidade" => 4772,
                "id_estado" => 43,
                "nome" => "Feliz",
            ],
            [
                "id_cidade" => 4773,
                "id_estado" => 43,
                "nome" => "Flores da Cunha",
            ],
            [
                "id_cidade" => 4774,
                "id_estado" => 43,
                "nome" => "Floriano Peixoto",
            ],
            [
                "id_cidade" => 4775,
                "id_estado" => 43,
                "nome" => "Fontoura Xavier",
            ],
            [
                "id_cidade" => 4776,
                "id_estado" => 43,
                "nome" => "Formigueiro",
            ],
            [
                "id_cidade" => 4777,
                "id_estado" => 43,
                "nome" => "Forquetinha",
            ],
            [
                "id_cidade" => 4778,
                "id_estado" => 43,
                "nome" => "Fortaleza dos Valos",
            ],
            [
                "id_cidade" => 4779,
                "id_estado" => 43,
                "nome" => "Frederico Westphalen",
            ],
            [
                "id_cidade" => 4780,
                "id_estado" => 43,
                "nome" => "Garibaldi",
            ],
            [
                "id_cidade" => 4781,
                "id_estado" => 43,
                "nome" => "Garruchos",
            ],
            [
                "id_cidade" => 4782,
                "id_estado" => 43,
                "nome" => "Gaurama",
            ],
            [
                "id_cidade" => 4783,
                "id_estado" => 43,
                "nome" => "General Câmara",
            ],
            [
                "id_cidade" => 4784,
                "id_estado" => 43,
                "nome" => "Gentil",
            ],
            [
                "id_cidade" => 4785,
                "id_estado" => 43,
                "nome" => "Getúlio Vargas",
            ],
            [
                "id_cidade" => 4786,
                "id_estado" => 43,
                "nome" => "Giruá",
            ],
            [
                "id_cidade" => 4787,
                "id_estado" => 43,
                "nome" => "Glorinha",
            ],
            [
                "id_cidade" => 4788,
                "id_estado" => 43,
                "nome" => "Gramado",
            ],
            [
                "id_cidade" => 4789,
                "id_estado" => 43,
                "nome" => "Gramado dos Loureiros",
            ],
            [
                "id_cidade" => 4790,
                "id_estado" => 43,
                "nome" => "Gramado Xavier",
            ],
            [
                "id_cidade" => 4791,
                "id_estado" => 43,
                "nome" => "Gravataí",
            ],
            [
                "id_cidade" => 4792,
                "id_estado" => 43,
                "nome" => "Guabiju",
            ],
            [
                "id_cidade" => 4793,
                "id_estado" => 43,
                "nome" => "Guaíba",
            ],
            [
                "id_cidade" => 4794,
                "id_estado" => 43,
                "nome" => "Guaporé",
            ],
            [
                "id_cidade" => 4795,
                "id_estado" => 43,
                "nome" => "Guarani das Missões",
            ],
            [
                "id_cidade" => 4796,
                "id_estado" => 43,
                "nome" => "Harmonia",
            ],
            [
                "id_cidade" => 4797,
                "id_estado" => 43,
                "nome" => "Herval",
            ],
            [
                "id_cidade" => 4798,
                "id_estado" => 43,
                "nome" => "Herveiras",
            ],
            [
                "id_cidade" => 4799,
                "id_estado" => 43,
                "nome" => "Horizontina",
            ],
            [
                "id_cidade" => 4800,
                "id_estado" => 43,
                "nome" => "Hulha Negra",
            ],
            [
                "id_cidade" => 4801,
                "id_estado" => 43,
                "nome" => "Humaitá",
            ],
            [
                "id_cidade" => 4802,
                "id_estado" => 43,
                "nome" => "Ibarama",
            ],
            [
                "id_cidade" => 4803,
                "id_estado" => 43,
                "nome" => "Ibiaçá",
            ],
            [
                "id_cidade" => 4804,
                "id_estado" => 43,
                "nome" => "Ibiraiaras",
            ],
            [
                "id_cidade" => 4805,
                "id_estado" => 43,
                "nome" => "Ibirapuitã",
            ],
            [
                "id_cidade" => 4806,
                "id_estado" => 43,
                "nome" => "Ibirubá",
            ],
            [
                "id_cidade" => 4807,
                "id_estado" => 43,
                "nome" => "Igrejinha",
            ],
            [
                "id_cidade" => 4808,
                "id_estado" => 43,
                "nome" => "Ijuí",
            ],
            [
                "id_cidade" => 4809,
                "id_estado" => 43,
                "nome" => "Ilópolis",
            ],
            [
                "id_cidade" => 4810,
                "id_estado" => 43,
                "nome" => "Imbé",
            ],
            [
                "id_cidade" => 4811,
                "id_estado" => 43,
                "nome" => "Imigrante",
            ],
            [
                "id_cidade" => 4812,
                "id_estado" => 43,
                "nome" => "Independência",
            ],
            [
                "id_cidade" => 4813,
                "id_estado" => 43,
                "nome" => "Inhacorá",
            ],
            [
                "id_cidade" => 4814,
                "id_estado" => 43,
                "nome" => "Ipê",
            ],
            [
                "id_cidade" => 4815,
                "id_estado" => 43,
                "nome" => "Ipiranga do Sul",
            ],
            [
                "id_cidade" => 4816,
                "id_estado" => 43,
                "nome" => "Iraí",
            ],
            [
                "id_cidade" => 4817,
                "id_estado" => 43,
                "nome" => "Itaara",
            ],
            [
                "id_cidade" => 4818,
                "id_estado" => 43,
                "nome" => "Itacurubi",
            ],
            [
                "id_cidade" => 4819,
                "id_estado" => 43,
                "nome" => "Itapuca",
            ],
            [
                "id_cidade" => 4820,
                "id_estado" => 43,
                "nome" => "Itaqui",
            ],
            [
                "id_cidade" => 4821,
                "id_estado" => 43,
                "nome" => "Itati",
            ],
            [
                "id_cidade" => 4822,
                "id_estado" => 43,
                "nome" => "Itatiba do Sul",
            ],
            [
                "id_cidade" => 4823,
                "id_estado" => 43,
                "nome" => "Ivorá",
            ],
            [
                "id_cidade" => 4824,
                "id_estado" => 43,
                "nome" => "Ivoti",
            ],
            [
                "id_cidade" => 4825,
                "id_estado" => 43,
                "nome" => "Jaboticaba",
            ],
            [
                "id_cidade" => 4826,
                "id_estado" => 43,
                "nome" => "Jacuizinho",
            ],
            [
                "id_cidade" => 4827,
                "id_estado" => 43,
                "nome" => "Jacutinga",
            ],
            [
                "id_cidade" => 4828,
                "id_estado" => 43,
                "nome" => "Jaguarão",
            ],
            [
                "id_cidade" => 4829,
                "id_estado" => 43,
                "nome" => "Jaguari",
            ],
            [
                "id_cidade" => 4830,
                "id_estado" => 43,
                "nome" => "Jaquirana",
            ],
            [
                "id_cidade" => 4831,
                "id_estado" => 43,
                "nome" => "Jari",
            ],
            [
                "id_cidade" => 4832,
                "id_estado" => 43,
                "nome" => "Jóia",
            ],
            [
                "id_cidade" => 4833,
                "id_estado" => 43,
                "nome" => "Júlio de Castilhos",
            ],
            [
                "id_cidade" => 4834,
                "id_estado" => 43,
                "nome" => "Lagoa Bonita do Sul",
            ],
            [
                "id_cidade" => 4835,
                "id_estado" => 43,
                "nome" => "Lagoa dos Três Cantos",
            ],
            [
                "id_cidade" => 4836,
                "id_estado" => 43,
                "nome" => "Lagoa Vermelha",
            ],
            [
                "id_cidade" => 4837,
                "id_estado" => 43,
                "nome" => "Lagoão",
            ],
            [
                "id_cidade" => 4838,
                "id_estado" => 43,
                "nome" => "Lajeado",
            ],
            [
                "id_cidade" => 4839,
                "id_estado" => 43,
                "nome" => "Lajeado do Bugre",
            ],
            [
                "id_cidade" => 4840,
                "id_estado" => 43,
                "nome" => "Lavras do Sul",
            ],
            [
                "id_cidade" => 4841,
                "id_estado" => 43,
                "nome" => "Liberato Salzano",
            ],
            [
                "id_cidade" => 4842,
                "id_estado" => 43,
                "nome" => "Lindolfo Collor",
            ],
            [
                "id_cidade" => 4843,
                "id_estado" => 43,
                "nome" => "Linha Nova",
            ],
            [
                "id_cidade" => 4844,
                "id_estado" => 43,
                "nome" => "Maçambará",
            ],
            [
                "id_cidade" => 4845,
                "id_estado" => 43,
                "nome" => "Machadinho",
            ],
            [
                "id_cidade" => 4846,
                "id_estado" => 43,
                "nome" => "Mampituba",
            ],
            [
                "id_cidade" => 4847,
                "id_estado" => 43,
                "nome" => "Manoel Viana",
            ],
            [
                "id_cidade" => 4848,
                "id_estado" => 43,
                "nome" => "Maquiné",
            ],
            [
                "id_cidade" => 4849,
                "id_estado" => 43,
                "nome" => "Maratá",
            ],
            [
                "id_cidade" => 4850,
                "id_estado" => 43,
                "nome" => "Marau",
            ],
            [
                "id_cidade" => 4851,
                "id_estado" => 43,
                "nome" => "Marcelino Ramos",
            ],
            [
                "id_cidade" => 4852,
                "id_estado" => 43,
                "nome" => "Mariana Pimentel",
            ],
            [
                "id_cidade" => 4853,
                "id_estado" => 43,
                "nome" => "Mariano Moro",
            ],
            [
                "id_cidade" => 4854,
                "id_estado" => 43,
                "nome" => "Marques de Souza",
            ],
            [
                "id_cidade" => 4855,
                "id_estado" => 43,
                "nome" => "Mata",
            ],
            [
                "id_cidade" => 4856,
                "id_estado" => 43,
                "nome" => "Mato Castelhano",
            ],
            [
                "id_cidade" => 4857,
                "id_estado" => 43,
                "nome" => "Mato Leitão",
            ],
            [
                "id_cidade" => 4858,
                "id_estado" => 43,
                "nome" => "Mato Queimado",
            ],
            [
                "id_cidade" => 4859,
                "id_estado" => 43,
                "nome" => "Maximiliano de Almeida",
            ],
            [
                "id_cidade" => 4860,
                "id_estado" => 43,
                "nome" => "Minas do Leão",
            ],
            [
                "id_cidade" => 4861,
                "id_estado" => 43,
                "nome" => "Miraguaí",
            ],
            [
                "id_cidade" => 4862,
                "id_estado" => 43,
                "nome" => "Montauri",
            ],
            [
                "id_cidade" => 4863,
                "id_estado" => 43,
                "nome" => "Monte Alegre dos Campos",
            ],
            [
                "id_cidade" => 4864,
                "id_estado" => 43,
                "nome" => "Monte Belo do Sul",
            ],
            [
                "id_cidade" => 4865,
                "id_estado" => 43,
                "nome" => "Montenegro",
            ],
            [
                "id_cidade" => 4866,
                "id_estado" => 43,
                "nome" => "Mormaço",
            ],
            [
                "id_cidade" => 4867,
                "id_estado" => 43,
                "nome" => "Morrinhos do Sul",
            ],
            [
                "id_cidade" => 4868,
                "id_estado" => 43,
                "nome" => "Morro Redondo",
            ],
            [
                "id_cidade" => 4869,
                "id_estado" => 43,
                "nome" => "Morro Reuter",
            ],
            [
                "id_cidade" => 4870,
                "id_estado" => 43,
                "nome" => "Mostardas",
            ],
            [
                "id_cidade" => 4871,
                "id_estado" => 43,
                "nome" => "Muçum",
            ],
            [
                "id_cidade" => 4872,
                "id_estado" => 43,
                "nome" => "Muitos Capões",
            ],
            [
                "id_cidade" => 4873,
                "id_estado" => 43,
                "nome" => "Muliterno",
            ],
            [
                "id_cidade" => 4874,
                "id_estado" => 43,
                "nome" => "Não-Me-Toque",
            ],
            [
                "id_cidade" => 4875,
                "id_estado" => 43,
                "nome" => "Nicolau Vergueiro",
            ],
            [
                "id_cidade" => 4876,
                "id_estado" => 43,
                "nome" => "Nonoai",
            ],
            [
                "id_cidade" => 4877,
                "id_estado" => 43,
                "nome" => "Nova Alvorada",
            ],
            [
                "id_cidade" => 4878,
                "id_estado" => 43,
                "nome" => "Nova Araçá",
            ],
            [
                "id_cidade" => 4879,
                "id_estado" => 43,
                "nome" => "Nova Bassano",
            ],
            [
                "id_cidade" => 4880,
                "id_estado" => 43,
                "nome" => "Nova Boa Vista",
            ],
            [
                "id_cidade" => 4881,
                "id_estado" => 43,
                "nome" => "Nova Bréscia",
            ],
            [
                "id_cidade" => 4882,
                "id_estado" => 43,
                "nome" => "Nova Candelária",
            ],
            [
                "id_cidade" => 4883,
                "id_estado" => 43,
                "nome" => "Nova Esperança do Sul",
            ],
            [
                "id_cidade" => 4884,
                "id_estado" => 43,
                "nome" => "Nova Hartz",
            ],
            [
                "id_cidade" => 4885,
                "id_estado" => 43,
                "nome" => "Nova Pádua",
            ],
            [
                "id_cidade" => 4886,
                "id_estado" => 43,
                "nome" => "Nova Palma",
            ],
            [
                "id_cidade" => 4887,
                "id_estado" => 43,
                "nome" => "Nova Petrópolis",
            ],
            [
                "id_cidade" => 4888,
                "id_estado" => 43,
                "nome" => "Nova Prata",
            ],
            [
                "id_cidade" => 4889,
                "id_estado" => 43,
                "nome" => "Nova Ramada",
            ],
            [
                "id_cidade" => 4890,
                "id_estado" => 43,
                "nome" => "Nova Roma do Sul",
            ],
            [
                "id_cidade" => 4891,
                "id_estado" => 43,
                "nome" => "Nova Santa Rita",
            ],
            [
                "id_cidade" => 4892,
                "id_estado" => 43,
                "nome" => "Novo Barreiro",
            ],
            [
                "id_cidade" => 4893,
                "id_estado" => 43,
                "nome" => "Novo Cabrais",
            ],
            [
                "id_cidade" => 4894,
                "id_estado" => 43,
                "nome" => "Novo Hamburgo",
            ],
            [
                "id_cidade" => 4895,
                "id_estado" => 43,
                "nome" => "Novo Machado",
            ],
            [
                "id_cidade" => 4896,
                "id_estado" => 43,
                "nome" => "Novo Tiradentes",
            ],
            [
                "id_cidade" => 4897,
                "id_estado" => 43,
                "nome" => "Novo Xingu",
            ],
            [
                "id_cidade" => 4898,
                "id_estado" => 43,
                "nome" => "Osório",
            ],
            [
                "id_cidade" => 4899,
                "id_estado" => 43,
                "nome" => "Paim Filho",
            ],
            [
                "id_cidade" => 4900,
                "id_estado" => 43,
                "nome" => "Palmares do Sul",
            ],
            [
                "id_cidade" => 4901,
                "id_estado" => 43,
                "nome" => "Palmeira das Missões",
            ],
            [
                "id_cidade" => 4902,
                "id_estado" => 43,
                "nome" => "Palmitinho",
            ],
            [
                "id_cidade" => 4903,
                "id_estado" => 43,
                "nome" => "Panambi",
            ],
            [
                "id_cidade" => 4904,
                "id_estado" => 43,
                "nome" => "Pantano Grande",
            ],
            [
                "id_cidade" => 4905,
                "id_estado" => 43,
                "nome" => "Paraí",
            ],
            [
                "id_cidade" => 4906,
                "id_estado" => 43,
                "nome" => "Paraíso do Sul",
            ],
            [
                "id_cidade" => 4907,
                "id_estado" => 43,
                "nome" => "Pareci Novo",
            ],
            [
                "id_cidade" => 4908,
                "id_estado" => 43,
                "nome" => "Parobé",
            ],
            [
                "id_cidade" => 4909,
                "id_estado" => 43,
                "nome" => "Passa Sete",
            ],
            [
                "id_cidade" => 4910,
                "id_estado" => 43,
                "nome" => "Passo do Sobrado",
            ],
            [
                "id_cidade" => 4911,
                "id_estado" => 43,
                "nome" => "Passo Fundo",
            ],
            [
                "id_cidade" => 4912,
                "id_estado" => 43,
                "nome" => "Paulo Bento",
            ],
            [
                "id_cidade" => 4913,
                "id_estado" => 43,
                "nome" => "Paverama",
            ],
            [
                "id_cidade" => 4914,
                "id_estado" => 43,
                "nome" => "Pedras Altas",
            ],
            [
                "id_cidade" => 4915,
                "id_estado" => 43,
                "nome" => "Pedro Osório",
            ],
            [
                "id_cidade" => 4916,
                "id_estado" => 43,
                "nome" => "Pejuçara",
            ],
            [
                "id_cidade" => 4917,
                "id_estado" => 43,
                "nome" => "Pelotas",
            ],
            [
                "id_cidade" => 4918,
                "id_estado" => 43,
                "nome" => "Picada Café",
            ],
            [
                "id_cidade" => 4919,
                "id_estado" => 43,
                "nome" => "Pinhal",
            ],
            [
                "id_cidade" => 4920,
                "id_estado" => 43,
                "nome" => "Pinhal da Serra",
            ],
            [
                "id_cidade" => 4921,
                "id_estado" => 43,
                "nome" => "Pinhal Grande",
            ],
            [
                "id_cidade" => 4922,
                "id_estado" => 43,
                "nome" => "Pinheirinho do Vale",
            ],
            [
                "id_cidade" => 4923,
                "id_estado" => 43,
                "nome" => "Pinheiro Machado",
            ],
            [
                "id_cidade" => 4924,
                "id_estado" => 43,
                "nome" => "Pinto Bandeira",
            ],
            [
                "id_cidade" => 4925,
                "id_estado" => 43,
                "nome" => "Pirapó",
            ],
            [
                "id_cidade" => 4926,
                "id_estado" => 43,
                "nome" => "Piratini",
            ],
            [
                "id_cidade" => 4927,
                "id_estado" => 43,
                "nome" => "Planalto",
            ],
            [
                "id_cidade" => 4928,
                "id_estado" => 43,
                "nome" => "Poço das Antas",
            ],
            [
                "id_cidade" => 4929,
                "id_estado" => 43,
                "nome" => "Pontão",
            ],
            [
                "id_cidade" => 4930,
                "id_estado" => 43,
                "nome" => "Ponte Preta",
            ],
            [
                "id_cidade" => 4931,
                "id_estado" => 43,
                "nome" => "Portão",
            ],
            [
                "id_cidade" => 4932,
                "id_estado" => 43,
                "nome" => "Porto Alegre",
            ],
            [
                "id_cidade" => 4933,
                "id_estado" => 43,
                "nome" => "Porto Lucena",
            ],
            [
                "id_cidade" => 4934,
                "id_estado" => 43,
                "nome" => "Porto Mauá",
            ],
            [
                "id_cidade" => 4935,
                "id_estado" => 43,
                "nome" => "Porto Vera Cruz",
            ],
            [
                "id_cidade" => 4936,
                "id_estado" => 43,
                "nome" => "Porto Xavier",
            ],
            [
                "id_cidade" => 4937,
                "id_estado" => 43,
                "nome" => "Pouso Novo",
            ],
            [
                "id_cidade" => 4938,
                "id_estado" => 43,
                "nome" => "Presidente Lucena",
            ],
            [
                "id_cidade" => 4939,
                "id_estado" => 43,
                "nome" => "Progresso",
            ],
            [
                "id_cidade" => 4940,
                "id_estado" => 43,
                "nome" => "Protásio Alves",
            ],
            [
                "id_cidade" => 4941,
                "id_estado" => 43,
                "nome" => "Putinga",
            ],
            [
                "id_cidade" => 4942,
                "id_estado" => 43,
                "nome" => "Quaraí",
            ],
            [
                "id_cidade" => 4943,
                "id_estado" => 43,
                "nome" => "Quatro Irmãos",
            ],
            [
                "id_cidade" => 4944,
                "id_estado" => 43,
                "nome" => "Quevedos",
            ],
            [
                "id_cidade" => 4945,
                "id_estado" => 43,
                "nome" => "Quinze de Novembro",
            ],
            [
                "id_cidade" => 4946,
                "id_estado" => 43,
                "nome" => "Redentora",
            ],
            [
                "id_cidade" => 4947,
                "id_estado" => 43,
                "nome" => "Relvado",
            ],
            [
                "id_cidade" => 4948,
                "id_estado" => 43,
                "nome" => "Restinga Sêca",
            ],
            [
                "id_cidade" => 4949,
                "id_estado" => 43,
                "nome" => "Rio dos Índios",
            ],
            [
                "id_cidade" => 4950,
                "id_estado" => 43,
                "nome" => "Rio Grande",
            ],
            [
                "id_cidade" => 4951,
                "id_estado" => 43,
                "nome" => "Rio Pardo",
            ],
            [
                "id_cidade" => 4952,
                "id_estado" => 43,
                "nome" => "Riozinho",
            ],
            [
                "id_cidade" => 4953,
                "id_estado" => 43,
                "nome" => "Roca Sales",
            ],
            [
                "id_cidade" => 4954,
                "id_estado" => 43,
                "nome" => "Rodeio Bonito",
            ],
            [
                "id_cidade" => 4955,
                "id_estado" => 43,
                "nome" => "Rolador",
            ],
            [
                "id_cidade" => 4956,
                "id_estado" => 43,
                "nome" => "Rolante",
            ],
            [
                "id_cidade" => 4957,
                "id_estado" => 43,
                "nome" => "Ronda Alta",
            ],
            [
                "id_cidade" => 4958,
                "id_estado" => 43,
                "nome" => "Rondinha",
            ],
            [
                "id_cidade" => 4959,
                "id_estado" => 43,
                "nome" => "Roque Gonzales",
            ],
            [
                "id_cidade" => 4960,
                "id_estado" => 43,
                "nome" => "Rosário do Sul",
            ],
            [
                "id_cidade" => 4961,
                "id_estado" => 43,
                "nome" => "Sagrada Família",
            ],
            [
                "id_cidade" => 4962,
                "id_estado" => 43,
                "nome" => "Saldanha Marinho",
            ],
            [
                "id_cidade" => 4963,
                "id_estado" => 43,
                "nome" => "Salto do Jacuí",
            ],
            [
                "id_cidade" => 4964,
                "id_estado" => 43,
                "nome" => "Salvador das Missões",
            ],
            [
                "id_cidade" => 4965,
                "id_estado" => 43,
                "nome" => "Salvador do Sul",
            ],
            [
                "id_cidade" => 4966,
                "id_estado" => 43,
                "nome" => "Sananduva",
            ],
            [
                "id_cidade" => 4967,
                "id_estado" => 43,
                "nome" => "Santa Bárbara do Sul",
            ],
            [
                "id_cidade" => 4968,
                "id_estado" => 43,
                "nome" => "Santa Cecília do Sul",
            ],
            [
                "id_cidade" => 4969,
                "id_estado" => 43,
                "nome" => "Santa Clara do Sul",
            ],
            [
                "id_cidade" => 4970,
                "id_estado" => 43,
                "nome" => "Santa Cruz do Sul",
            ],
            [
                "id_cidade" => 4971,
                "id_estado" => 43,
                "nome" => "Santa Margarida do Sul",
            ],
            [
                "id_cidade" => 4972,
                "id_estado" => 43,
                "nome" => "Santa Maria",
            ],
            [
                "id_cidade" => 4973,
                "id_estado" => 43,
                "nome" => "Santa Maria do Herval",
            ],
            [
                "id_cidade" => 4974,
                "id_estado" => 43,
                "nome" => "Santa Rosa",
            ],
            [
                "id_cidade" => 4975,
                "id_estado" => 43,
                "nome" => "Santa Tereza",
            ],
            [
                "id_cidade" => 4976,
                "id_estado" => 43,
                "nome" => "Santa Vitória do Palmar",
            ],
            [
                "id_cidade" => 4977,
                "id_estado" => 43,
                "nome" => "Santana da Boa Vista",
            ],
            [
                "id_cidade" => 4978,
                "id_estado" => 43,
                "nome" => "Sant'Ana do Livramento",
            ],
            [
                "id_cidade" => 4979,
                "id_estado" => 43,
                "nome" => "Santiago",
            ],
            [
                "id_cidade" => 4980,
                "id_estado" => 43,
                "nome" => "Santo Ângelo",
            ],
            [
                "id_cidade" => 4981,
                "id_estado" => 43,
                "nome" => "Santo Antônio da Patrulha",
            ],
            [
                "id_cidade" => 4982,
                "id_estado" => 43,
                "nome" => "Santo Antônio das Missões",
            ],
            [
                "id_cidade" => 4983,
                "id_estado" => 43,
                "nome" => "Santo Antônio do Palma",
            ],
            [
                "id_cidade" => 4984,
                "id_estado" => 43,
                "nome" => "Santo Antônio do Planalto",
            ],
            [
                "id_cidade" => 4985,
                "id_estado" => 43,
                "nome" => "Santo Augusto",
            ],
            [
                "id_cidade" => 4986,
                "id_estado" => 43,
                "nome" => "Santo Cristo",
            ],
            [
                "id_cidade" => 4987,
                "id_estado" => 43,
                "nome" => "Santo Expedito do Sul",
            ],
            [
                "id_cidade" => 4988,
                "id_estado" => 43,
                "nome" => "São Borja",
            ],
            [
                "id_cidade" => 4989,
                "id_estado" => 43,
                "nome" => "São Domingos do Sul",
            ],
            [
                "id_cidade" => 4990,
                "id_estado" => 43,
                "nome" => "São Francisco de Assis",
            ],
            [
                "id_cidade" => 4991,
                "id_estado" => 43,
                "nome" => "São Francisco de Paula",
            ],
            [
                "id_cidade" => 4992,
                "id_estado" => 43,
                "nome" => "São Gabriel",
            ],
            [
                "id_cidade" => 4993,
                "id_estado" => 43,
                "nome" => "São Jerônimo",
            ],
            [
                "id_cidade" => 4994,
                "id_estado" => 43,
                "nome" => "São João da Urtiga",
            ],
            [
                "id_cidade" => 4995,
                "id_estado" => 43,
                "nome" => "São João do Polêsine",
            ],
            [
                "id_cidade" => 4996,
                "id_estado" => 43,
                "nome" => "São Jorge",
            ],
            [
                "id_cidade" => 4997,
                "id_estado" => 43,
                "nome" => "São José das Missões",
            ],
            [
                "id_cidade" => 4998,
                "id_estado" => 43,
                "nome" => "São José do Herval",
            ],
            [
                "id_cidade" => 4999,
                "id_estado" => 43,
                "nome" => "São José do Hortêncio",
            ],
            [
                "id_cidade" => 5000,
                "id_estado" => 43,
                "nome" => "São José do Inhacorá",
            ],
            [
                "id_cidade" => 5001,
                "id_estado" => 43,
                "nome" => "São José do Norte",
            ],
            [
                "id_cidade" => 5002,
                "id_estado" => 43,
                "nome" => "São José do Ouro",
            ],
            [
                "id_cidade" => 5003,
                "id_estado" => 43,
                "nome" => "São José do Sul",
            ],
            [
                "id_cidade" => 5004,
                "id_estado" => 43,
                "nome" => "São José dos Ausentes",
            ],
            [
                "id_cidade" => 5005,
                "id_estado" => 43,
                "nome" => "São Leopoldo",
            ],
            [
                "id_cidade" => 5006,
                "id_estado" => 43,
                "nome" => "São Lourenço do Sul",
            ],
            [
                "id_cidade" => 5007,
                "id_estado" => 43,
                "nome" => "São Luiz Gonzaga",
            ],
            [
                "id_cidade" => 5008,
                "id_estado" => 43,
                "nome" => "São Marcos",
            ],
            [
                "id_cidade" => 5009,
                "id_estado" => 43,
                "nome" => "São Martinho",
            ],
            [
                "id_cidade" => 5010,
                "id_estado" => 43,
                "nome" => "São Martinho da Serra",
            ],
            [
                "id_cidade" => 5011,
                "id_estado" => 43,
                "nome" => "São Miguel das Missões",
            ],
            [
                "id_cidade" => 5012,
                "id_estado" => 43,
                "nome" => "São Nicolau",
            ],
            [
                "id_cidade" => 5013,
                "id_estado" => 43,
                "nome" => "São Paulo das Missões",
            ],
            [
                "id_cidade" => 5014,
                "id_estado" => 43,
                "nome" => "São Pedro da Serra",
            ],
            [
                "id_cidade" => 5015,
                "id_estado" => 43,
                "nome" => "São Pedro das Missões",
            ],
            [
                "id_cidade" => 5016,
                "id_estado" => 43,
                "nome" => "São Pedro do Butiá",
            ],
            [
                "id_cidade" => 5017,
                "id_estado" => 43,
                "nome" => "São Pedro do Sul",
            ],
            [
                "id_cidade" => 5018,
                "id_estado" => 43,
                "nome" => "São Sebastião do Caí",
            ],
            [
                "id_cidade" => 5019,
                "id_estado" => 43,
                "nome" => "São Sepé",
            ],
            [
                "id_cidade" => 5020,
                "id_estado" => 43,
                "nome" => "São Valentim",
            ],
            [
                "id_cidade" => 5021,
                "id_estado" => 43,
                "nome" => "São Valentim do Sul",
            ],
            [
                "id_cidade" => 5022,
                "id_estado" => 43,
                "nome" => "São Valério do Sul",
            ],
            [
                "id_cidade" => 5023,
                "id_estado" => 43,
                "nome" => "São Vendelino",
            ],
            [
                "id_cidade" => 5024,
                "id_estado" => 43,
                "nome" => "São Vicente do Sul",
            ],
            [
                "id_cidade" => 5025,
                "id_estado" => 43,
                "nome" => "Sapiranga",
            ],
            [
                "id_cidade" => 5026,
                "id_estado" => 43,
                "nome" => "Sapucaia do Sul",
            ],
            [
                "id_cidade" => 5027,
                "id_estado" => 43,
                "nome" => "Sarandi",
            ],
            [
                "id_cidade" => 5028,
                "id_estado" => 43,
                "nome" => "Seberi",
            ],
            [
                "id_cidade" => 5029,
                "id_estado" => 43,
                "nome" => "Sede Nova",
            ],
            [
                "id_cidade" => 5030,
                "id_estado" => 43,
                "nome" => "Segredo",
            ],
            [
                "id_cidade" => 5031,
                "id_estado" => 43,
                "nome" => "Selbach",
            ],
            [
                "id_cidade" => 5032,
                "id_estado" => 43,
                "nome" => "Senador Salgado Filho",
            ],
            [
                "id_cidade" => 5033,
                "id_estado" => 43,
                "nome" => "Sentinela do Sul",
            ],
            [
                "id_cidade" => 5034,
                "id_estado" => 43,
                "nome" => "Serafina Corrêa",
            ],
            [
                "id_cidade" => 5035,
                "id_estado" => 43,
                "nome" => "Sério",
            ],
            [
                "id_cidade" => 5036,
                "id_estado" => 43,
                "nome" => "Sertão",
            ],
            [
                "id_cidade" => 5037,
                "id_estado" => 43,
                "nome" => "Sertão Santana",
            ],
            [
                "id_cidade" => 5038,
                "id_estado" => 43,
                "nome" => "Sete de Setembro",
            ],
            [
                "id_cidade" => 5039,
                "id_estado" => 43,
                "nome" => "Severiano de Almeida",
            ],
            [
                "id_cidade" => 5040,
                "id_estado" => 43,
                "nome" => "Silveira Martins",
            ],
            [
                "id_cidade" => 5041,
                "id_estado" => 43,
                "nome" => "Sinimbu",
            ],
            [
                "id_cidade" => 5042,
                "id_estado" => 43,
                "nome" => "Sobradinho",
            ],
            [
                "id_cidade" => 5043,
                "id_estado" => 43,
                "nome" => "Soledade",
            ],
            [
                "id_cidade" => 5044,
                "id_estado" => 43,
                "nome" => "Tabaí",
            ],
            [
                "id_cidade" => 5045,
                "id_estado" => 43,
                "nome" => "Tapejara",
            ],
            [
                "id_cidade" => 5046,
                "id_estado" => 43,
                "nome" => "Tapera",
            ],
            [
                "id_cidade" => 5047,
                "id_estado" => 43,
                "nome" => "Tapes",
            ],
            [
                "id_cidade" => 5048,
                "id_estado" => 43,
                "nome" => "Taquara",
            ],
            [
                "id_cidade" => 5049,
                "id_estado" => 43,
                "nome" => "Taquari",
            ],
            [
                "id_cidade" => 5050,
                "id_estado" => 43,
                "nome" => "Taquaruçu do Sul",
            ],
            [
                "id_cidade" => 5051,
                "id_estado" => 43,
                "nome" => "Tavares",
            ],
            [
                "id_cidade" => 5052,
                "id_estado" => 43,
                "nome" => "Tenente Portela",
            ],
            [
                "id_cidade" => 5053,
                "id_estado" => 43,
                "nome" => "Terra de Areia",
            ],
            [
                "id_cidade" => 5054,
                "id_estado" => 43,
                "nome" => "Teutônia",
            ],
            [
                "id_cidade" => 5055,
                "id_estado" => 43,
                "nome" => "Tio Hugo",
            ],
            [
                "id_cidade" => 5056,
                "id_estado" => 43,
                "nome" => "Tiradentes do Sul",
            ],
            [
                "id_cidade" => 5057,
                "id_estado" => 43,
                "nome" => "Toropi",
            ],
            [
                "id_cidade" => 5058,
                "id_estado" => 43,
                "nome" => "Torres",
            ],
            [
                "id_cidade" => 5059,
                "id_estado" => 43,
                "nome" => "Tramandaí",
            ],
            [
                "id_cidade" => 5060,
                "id_estado" => 43,
                "nome" => "Travesseiro",
            ],
            [
                "id_cidade" => 5061,
                "id_estado" => 43,
                "nome" => "Três Arroios",
            ],
            [
                "id_cidade" => 5062,
                "id_estado" => 43,
                "nome" => "Três Cachoeiras",
            ],
            [
                "id_cidade" => 5063,
                "id_estado" => 43,
                "nome" => "Três Coroas",
            ],
            [
                "id_cidade" => 5064,
                "id_estado" => 43,
                "nome" => "Três de Maio",
            ],
            [
                "id_cidade" => 5065,
                "id_estado" => 43,
                "nome" => "Três Forquilhas",
            ],
            [
                "id_cidade" => 5066,
                "id_estado" => 43,
                "nome" => "Três Palmeiras",
            ],
            [
                "id_cidade" => 5067,
                "id_estado" => 43,
                "nome" => "Três Passos",
            ],
            [
                "id_cidade" => 5068,
                "id_estado" => 43,
                "nome" => "Trindade do Sul",
            ],
            [
                "id_cidade" => 5069,
                "id_estado" => 43,
                "nome" => "Triunfo",
            ],
            [
                "id_cidade" => 5070,
                "id_estado" => 43,
                "nome" => "Tucunduva",
            ],
            [
                "id_cidade" => 5071,
                "id_estado" => 43,
                "nome" => "Tunas",
            ],
            [
                "id_cidade" => 5072,
                "id_estado" => 43,
                "nome" => "Tupanci do Sul",
            ],
            [
                "id_cidade" => 5073,
                "id_estado" => 43,
                "nome" => "Tupanciretã",
            ],
            [
                "id_cidade" => 5074,
                "id_estado" => 43,
                "nome" => "Tupandi",
            ],
            [
                "id_cidade" => 5075,
                "id_estado" => 43,
                "nome" => "Tuparendi",
            ],
            [
                "id_cidade" => 5076,
                "id_estado" => 43,
                "nome" => "Turuçu",
            ],
            [
                "id_cidade" => 5077,
                "id_estado" => 43,
                "nome" => "Ubiretama",
            ],
            [
                "id_cidade" => 5078,
                "id_estado" => 43,
                "nome" => "União da Serra",
            ],
            [
                "id_cidade" => 5079,
                "id_estado" => 43,
                "nome" => "Unistalda",
            ],
            [
                "id_cidade" => 5080,
                "id_estado" => 43,
                "nome" => "Uruguaiana",
            ],
            [
                "id_cidade" => 5081,
                "id_estado" => 43,
                "nome" => "Vacaria",
            ],
            [
                "id_cidade" => 5082,
                "id_estado" => 43,
                "nome" => "Vale do Sol",
            ],
            [
                "id_cidade" => 5083,
                "id_estado" => 43,
                "nome" => "Vale Real",
            ],
            [
                "id_cidade" => 5084,
                "id_estado" => 43,
                "nome" => "Vale Verde",
            ],
            [
                "id_cidade" => 5085,
                "id_estado" => 43,
                "nome" => "Vanini",
            ],
            [
                "id_cidade" => 5086,
                "id_estado" => 43,
                "nome" => "Venâncio Aires",
            ],
            [
                "id_cidade" => 5087,
                "id_estado" => 43,
                "nome" => "Vera Cruz",
            ],
            [
                "id_cidade" => 5088,
                "id_estado" => 43,
                "nome" => "Veranópolis",
            ],
            [
                "id_cidade" => 5089,
                "id_estado" => 43,
                "nome" => "Vespasiano Corrêa",
            ],
            [
                "id_cidade" => 5090,
                "id_estado" => 43,
                "nome" => "Viadutos",
            ],
            [
                "id_cidade" => 5091,
                "id_estado" => 43,
                "nome" => "Viamão",
            ],
            [
                "id_cidade" => 5092,
                "id_estado" => 43,
                "nome" => "Vicente Dutra",
            ],
            [
                "id_cidade" => 5093,
                "id_estado" => 43,
                "nome" => "Victor Graeff",
            ],
            [
                "id_cidade" => 5094,
                "id_estado" => 43,
                "nome" => "Vila Flores",
            ],
            [
                "id_cidade" => 5095,
                "id_estado" => 43,
                "nome" => "Vila Lângaro",
            ],
            [
                "id_cidade" => 5096,
                "id_estado" => 43,
                "nome" => "Vila Maria",
            ],
            [
                "id_cidade" => 5097,
                "id_estado" => 43,
                "nome" => "Vila Nova do Sul",
            ],
            [
                "id_cidade" => 5098,
                "id_estado" => 43,
                "nome" => "Vista Alegre",
            ],
            [
                "id_cidade" => 5099,
                "id_estado" => 43,
                "nome" => "Vista Alegre do Prata",
            ],
            [
                "id_cidade" => 5100,
                "id_estado" => 43,
                "nome" => "Vista Gaúcha",
            ],
            [
                "id_cidade" => 5101,
                "id_estado" => 43,
                "nome" => "Vitória das Missões",
            ],
            [
                "id_cidade" => 5102,
                "id_estado" => 43,
                "nome" => "Westfália",
            ],
            [
                "id_cidade" => 5103,
                "id_estado" => 43,
                "nome" => "Xangri-lá",
            ],
            [
                "id_cidade" => 5104,
                "id_estado" => 50,
                "nome" => "Água Clara",
            ],
            [
                "id_cidade" => 5105,
                "id_estado" => 50,
                "nome" => "Alcinópolis",
            ],
            [
                "id_cidade" => 5106,
                "id_estado" => 50,
                "nome" => "Amambai",
            ],
            [
                "id_cidade" => 5107,
                "id_estado" => 50,
                "nome" => "Anastácio",
            ],
            [
                "id_cidade" => 5108,
                "id_estado" => 50,
                "nome" => "Anaurilândia",
            ],
            [
                "id_cidade" => 5109,
                "id_estado" => 50,
                "nome" => "Angélica",
            ],
            [
                "id_cidade" => 5110,
                "id_estado" => 50,
                "nome" => "Antônio João",
            ],
            [
                "id_cidade" => 5111,
                "id_estado" => 50,
                "nome" => "Aparecida do Taboado",
            ],
            [
                "id_cidade" => 5112,
                "id_estado" => 50,
                "nome" => "Aquidauana",
            ],
            [
                "id_cidade" => 5113,
                "id_estado" => 50,
                "nome" => "Aral Moreira",
            ],
            [
                "id_cidade" => 5114,
                "id_estado" => 50,
                "nome" => "Bandeirantes",
            ],
            [
                "id_cidade" => 5115,
                "id_estado" => 50,
                "nome" => "Bataguassu",
            ],
            [
                "id_cidade" => 5116,
                "id_estado" => 50,
                "nome" => "Batayporã",
            ],
            [
                "id_cidade" => 5117,
                "id_estado" => 50,
                "nome" => "Bela Vista",
            ],
            [
                "id_cidade" => 5118,
                "id_estado" => 50,
                "nome" => "Bodoquena",
            ],
            [
                "id_cidade" => 5119,
                "id_estado" => 50,
                "nome" => "Bonito",
            ],
            [
                "id_cidade" => 5120,
                "id_estado" => 50,
                "nome" => "Brasilândia",
            ],
            [
                "id_cidade" => 5121,
                "id_estado" => 50,
                "nome" => "Caarapó",
            ],
            [
                "id_cidade" => 5122,
                "id_estado" => 50,
                "nome" => "Camapuã",
            ],
            [
                "id_cidade" => 5123,
                "id_estado" => 50,
                "nome" => "Campo Grande",
            ],
            [
                "id_cidade" => 5124,
                "id_estado" => 50,
                "nome" => "Caracol",
            ],
            [
                "id_cidade" => 5125,
                "id_estado" => 50,
                "nome" => "Cassilândia",
            ],
            [
                "id_cidade" => 5126,
                "id_estado" => 50,
                "nome" => "Chapadão do Sul",
            ],
            [
                "id_cidade" => 5127,
                "id_estado" => 50,
                "nome" => "Corguinho",
            ],
            [
                "id_cidade" => 5128,
                "id_estado" => 50,
                "nome" => "Coronel Sapucaia",
            ],
            [
                "id_cidade" => 5129,
                "id_estado" => 50,
                "nome" => "Corumbá",
            ],
            [
                "id_cidade" => 5130,
                "id_estado" => 50,
                "nome" => "Costa Rica",
            ],
            [
                "id_cidade" => 5131,
                "id_estado" => 50,
                "nome" => "Coxim",
            ],
            [
                "id_cidade" => 5132,
                "id_estado" => 50,
                "nome" => "Deodápolis",
            ],
            [
                "id_cidade" => 5133,
                "id_estado" => 50,
                "nome" => "Dois Irmãos do Buriti",
            ],
            [
                "id_cidade" => 5134,
                "id_estado" => 50,
                "nome" => "Douradina",
            ],
            [
                "id_cidade" => 5135,
                "id_estado" => 50,
                "nome" => "Dourados",
            ],
            [
                "id_cidade" => 5136,
                "id_estado" => 50,
                "nome" => "Eldorado",
            ],
            [
                "id_cidade" => 5137,
                "id_estado" => 50,
                "nome" => "Fátima do Sul",
            ],
            [
                "id_cidade" => 5138,
                "id_estado" => 50,
                "nome" => "Figueirão",
            ],
            [
                "id_cidade" => 5139,
                "id_estado" => 50,
                "nome" => "Glória de Dourados",
            ],
            [
                "id_cidade" => 5140,
                "id_estado" => 50,
                "nome" => "Guia Lopes da Laguna",
            ],
            [
                "id_cidade" => 5141,
                "id_estado" => 50,
                "nome" => "Iguatemi",
            ],
            [
                "id_cidade" => 5142,
                "id_estado" => 50,
                "nome" => "Inocência",
            ],
            [
                "id_cidade" => 5143,
                "id_estado" => 50,
                "nome" => "Itaporã",
            ],
            [
                "id_cidade" => 5144,
                "id_estado" => 50,
                "nome" => "Itaquiraí",
            ],
            [
                "id_cidade" => 5145,
                "id_estado" => 50,
                "nome" => "Ivinhema",
            ],
            [
                "id_cidade" => 5146,
                "id_estado" => 50,
                "nome" => "Japorã",
            ],
            [
                "id_cidade" => 5147,
                "id_estado" => 50,
                "nome" => "Jaraguari",
            ],
            [
                "id_cidade" => 5148,
                "id_estado" => 50,
                "nome" => "Jardim",
            ],
            [
                "id_cidade" => 5149,
                "id_estado" => 50,
                "nome" => "Jateí",
            ],
            [
                "id_cidade" => 5150,
                "id_estado" => 50,
                "nome" => "Juti",
            ],
            [
                "id_cidade" => 5151,
                "id_estado" => 50,
                "nome" => "Ladário",
            ],
            [
                "id_cidade" => 5152,
                "id_estado" => 50,
                "nome" => "Laguna Carapã",
            ],
            [
                "id_cidade" => 5153,
                "id_estado" => 50,
                "nome" => "Maracaju",
            ],
            [
                "id_cidade" => 5154,
                "id_estado" => 50,
                "nome" => "Miranda",
            ],
            [
                "id_cidade" => 5155,
                "id_estado" => 50,
                "nome" => "Mundo Novo",
            ],
            [
                "id_cidade" => 5156,
                "id_estado" => 50,
                "nome" => "Naviraí",
            ],
            [
                "id_cidade" => 5157,
                "id_estado" => 50,
                "nome" => "Nioaque",
            ],
            [
                "id_cidade" => 5158,
                "id_estado" => 50,
                "nome" => "Nova Alvorada do Sul",
            ],
            [
                "id_cidade" => 5159,
                "id_estado" => 50,
                "nome" => "Nova Andradina",
            ],
            [
                "id_cidade" => 5160,
                "id_estado" => 50,
                "nome" => "Novo Horizonte do Sul",
            ],
            [
                "id_cidade" => 5161,
                "id_estado" => 50,
                "nome" => "Paraíso das Águas",
            ],
            [
                "id_cidade" => 5162,
                "id_estado" => 50,
                "nome" => "Paranaíba",
            ],
            [
                "id_cidade" => 5163,
                "id_estado" => 50,
                "nome" => "Paranhos",
            ],
            [
                "id_cidade" => 5164,
                "id_estado" => 50,
                "nome" => "Pedro Gomes",
            ],
            [
                "id_cidade" => 5165,
                "id_estado" => 50,
                "nome" => "Ponta Porã",
            ],
            [
                "id_cidade" => 5166,
                "id_estado" => 50,
                "nome" => "Porto Murtinho",
            ],
            [
                "id_cidade" => 5167,
                "id_estado" => 50,
                "nome" => "Ribas do Rio Pardo",
            ],
            [
                "id_cidade" => 5168,
                "id_estado" => 50,
                "nome" => "Rio Brilhante",
            ],
            [
                "id_cidade" => 5169,
                "id_estado" => 50,
                "nome" => "Rio Negro",
            ],
            [
                "id_cidade" => 5170,
                "id_estado" => 50,
                "nome" => "Rio Verde de Mato Grosso",
            ],
            [
                "id_cidade" => 5171,
                "id_estado" => 50,
                "nome" => "Rochedo",
            ],
            [
                "id_cidade" => 5172,
                "id_estado" => 50,
                "nome" => "Santa Rita do Pardo",
            ],
            [
                "id_cidade" => 5173,
                "id_estado" => 50,
                "nome" => "São Gabriel do Oeste",
            ],
            [
                "id_cidade" => 5174,
                "id_estado" => 50,
                "nome" => "Selvíria",
            ],
            [
                "id_cidade" => 5175,
                "id_estado" => 50,
                "nome" => "Sete Quedas",
            ],
            [
                "id_cidade" => 5176,
                "id_estado" => 50,
                "nome" => "Sidrolândia",
            ],
            [
                "id_cidade" => 5177,
                "id_estado" => 50,
                "nome" => "Sonora",
            ],
            [
                "id_cidade" => 5178,
                "id_estado" => 50,
                "nome" => "Tacuru",
            ],
            [
                "id_cidade" => 5179,
                "id_estado" => 50,
                "nome" => "Taquarussu",
            ],
            [
                "id_cidade" => 5180,
                "id_estado" => 50,
                "nome" => "Terenos",
            ],
            [
                "id_cidade" => 5181,
                "id_estado" => 50,
                "nome" => "Três Lagoas",
            ],
            [
                "id_cidade" => 5182,
                "id_estado" => 50,
                "nome" => "Vicentina",
            ],
            [
                "id_cidade" => 5183,
                "id_estado" => 51,
                "nome" => "Acorizal",
            ],
            [
                "id_cidade" => 5184,
                "id_estado" => 51,
                "nome" => "Água Boa",
            ],
            [
                "id_cidade" => 5185,
                "id_estado" => 51,
                "nome" => "Alta Floresta",
            ],
            [
                "id_cidade" => 5186,
                "id_estado" => 51,
                "nome" => "Alto Araguaia",
            ],
            [
                "id_cidade" => 5187,
                "id_estado" => 51,
                "nome" => "Alto Boa Vista",
            ],
            [
                "id_cidade" => 5188,
                "id_estado" => 51,
                "nome" => "Alto Garças",
            ],
            [
                "id_cidade" => 5189,
                "id_estado" => 51,
                "nome" => "Alto Paraguai",
            ],
            [
                "id_cidade" => 5190,
                "id_estado" => 51,
                "nome" => "Alto Taquari",
            ],
            [
                "id_cidade" => 5191,
                "id_estado" => 51,
                "nome" => "Apiacás",
            ],
            [
                "id_cidade" => 5192,
                "id_estado" => 51,
                "nome" => "Araguaiana",
            ],
            [
                "id_cidade" => 5193,
                "id_estado" => 51,
                "nome" => "Araguainha",
            ],
            [
                "id_cidade" => 5194,
                "id_estado" => 51,
                "nome" => "Araputanga",
            ],
            [
                "id_cidade" => 5195,
                "id_estado" => 51,
                "nome" => "Arenápolis",
            ],
            [
                "id_cidade" => 5196,
                "id_estado" => 51,
                "nome" => "Aripuanã",
            ],
            [
                "id_cidade" => 5197,
                "id_estado" => 51,
                "nome" => "Barão de Melgaço",
            ],
            [
                "id_cidade" => 5198,
                "id_estado" => 51,
                "nome" => "Barra do Bugres",
            ],
            [
                "id_cidade" => 5199,
                "id_estado" => 51,
                "nome" => "Barra do Garças",
            ],
            [
                "id_cidade" => 5200,
                "id_estado" => 51,
                "nome" => "Bom Jesus do Araguaia",
            ],
            [
                "id_cidade" => 5201,
                "id_estado" => 51,
                "nome" => "Brasnorte",
            ],
            [
                "id_cidade" => 5202,
                "id_estado" => 51,
                "nome" => "Cáceres",
            ],
            [
                "id_cidade" => 5203,
                "id_estado" => 51,
                "nome" => "Campinápolis",
            ],
            [
                "id_cidade" => 5204,
                "id_estado" => 51,
                "nome" => "Campo Novo do Parecis",
            ],
            [
                "id_cidade" => 5205,
                "id_estado" => 51,
                "nome" => "Campo Verde",
            ],
            [
                "id_cidade" => 5206,
                "id_estado" => 51,
                "nome" => "Campos de Júlio",
            ],
            [
                "id_cidade" => 5207,
                "id_estado" => 51,
                "nome" => "Canabrava do Norte",
            ],
            [
                "id_cidade" => 5208,
                "id_estado" => 51,
                "nome" => "Canarana",
            ],
            [
                "id_cidade" => 5209,
                "id_estado" => 51,
                "nome" => "Carlinda",
            ],
            [
                "id_cidade" => 5210,
                "id_estado" => 51,
                "nome" => "Castanheira",
            ],
            [
                "id_cidade" => 5211,
                "id_estado" => 51,
                "nome" => "Chapada dos Guimarães",
            ],
            [
                "id_cidade" => 5212,
                "id_estado" => 51,
                "nome" => "Cláudia",
            ],
            [
                "id_cidade" => 5213,
                "id_estado" => 51,
                "nome" => "Cocalinho",
            ],
            [
                "id_cidade" => 5214,
                "id_estado" => 51,
                "nome" => "Colíder",
            ],
            [
                "id_cidade" => 5215,
                "id_estado" => 51,
                "nome" => "Colniza",
            ],
            [
                "id_cidade" => 5216,
                "id_estado" => 51,
                "nome" => "Comodoro",
            ],
            [
                "id_cidade" => 5217,
                "id_estado" => 51,
                "nome" => "Confresa",
            ],
            [
                "id_cidade" => 5218,
                "id_estado" => 51,
                "nome" => "Conquista D'Oeste",
            ],
            [
                "id_cidade" => 5219,
                "id_estado" => 51,
                "nome" => "Cotriguaçu",
            ],
            [
                "id_cidade" => 5220,
                "id_estado" => 51,
                "nome" => "Cuiabá",
            ],
            [
                "id_cidade" => 5221,
                "id_estado" => 51,
                "nome" => "Curvelândia",
            ],
            [
                "id_cidade" => 5222,
                "id_estado" => 51,
                "nome" => "Denise",
            ],
            [
                "id_cidade" => 5223,
                "id_estado" => 51,
                "nome" => "Diamantino",
            ],
            [
                "id_cidade" => 5224,
                "id_estado" => 51,
                "nome" => "Dom Aquino",
            ],
            [
                "id_cidade" => 5225,
                "id_estado" => 51,
                "nome" => "Feliz Natal",
            ],
            [
                "id_cidade" => 5226,
                "id_estado" => 51,
                "nome" => "Figueirópolis D'Oeste",
            ],
            [
                "id_cidade" => 5227,
                "id_estado" => 51,
                "nome" => "Gaúcha do Norte",
            ],
            [
                "id_cidade" => 5228,
                "id_estado" => 51,
                "nome" => "General Carneiro",
            ],
            [
                "id_cidade" => 5229,
                "id_estado" => 51,
                "nome" => "Glória D'Oeste",
            ],
            [
                "id_cidade" => 5230,
                "id_estado" => 51,
                "nome" => "Guarantã do Norte",
            ],
            [
                "id_cidade" => 5231,
                "id_estado" => 51,
                "nome" => "Guiratinga",
            ],
            [
                "id_cidade" => 5232,
                "id_estado" => 51,
                "nome" => "Indiavaí",
            ],
            [
                "id_cidade" => 5233,
                "id_estado" => 51,
                "nome" => "Ipiranga do Norte",
            ],
            [
                "id_cidade" => 5234,
                "id_estado" => 51,
                "nome" => "Itanhangá",
            ],
            [
                "id_cidade" => 5235,
                "id_estado" => 51,
                "nome" => "Itaúba",
            ],
            [
                "id_cidade" => 5236,
                "id_estado" => 51,
                "nome" => "Itiquira",
            ],
            [
                "id_cidade" => 5237,
                "id_estado" => 51,
                "nome" => "Jaciara",
            ],
            [
                "id_cidade" => 5238,
                "id_estado" => 51,
                "nome" => "Jangada",
            ],
            [
                "id_cidade" => 5239,
                "id_estado" => 51,
                "nome" => "Jauru",
            ],
            [
                "id_cidade" => 5240,
                "id_estado" => 51,
                "nome" => "Juara",
            ],
            [
                "id_cidade" => 5241,
                "id_estado" => 51,
                "nome" => "Juína",
            ],
            [
                "id_cidade" => 5242,
                "id_estado" => 51,
                "nome" => "Juruena",
            ],
            [
                "id_cidade" => 5243,
                "id_estado" => 51,
                "nome" => "Juscimeira",
            ],
            [
                "id_cidade" => 5244,
                "id_estado" => 51,
                "nome" => "Lambari D'Oeste",
            ],
            [
                "id_cidade" => 5245,
                "id_estado" => 51,
                "nome" => "Lucas do Rio Verde",
            ],
            [
                "id_cidade" => 5246,
                "id_estado" => 51,
                "nome" => "Luciara",
            ],
            [
                "id_cidade" => 5247,
                "id_estado" => 51,
                "nome" => "Marcelândia",
            ],
            [
                "id_cidade" => 5248,
                "id_estado" => 51,
                "nome" => "Matupá",
            ],
            [
                "id_cidade" => 5249,
                "id_estado" => 51,
                "nome" => "Mirassol d'Oeste",
            ],
            [
                "id_cidade" => 5250,
                "id_estado" => 51,
                "nome" => "Nobres",
            ],
            [
                "id_cidade" => 5251,
                "id_estado" => 51,
                "nome" => "Nortelândia",
            ],
            [
                "id_cidade" => 5252,
                "id_estado" => 51,
                "nome" => "Nossa Senhora do Livramento",
            ],
            [
                "id_cidade" => 5253,
                "id_estado" => 51,
                "nome" => "Nova Bandeirantes",
            ],
            [
                "id_cidade" => 5254,
                "id_estado" => 51,
                "nome" => "Nova Brasilândia",
            ],
            [
                "id_cidade" => 5255,
                "id_estado" => 51,
                "nome" => "Nova Canaã do Norte",
            ],
            [
                "id_cidade" => 5256,
                "id_estado" => 51,
                "nome" => "Nova Guarita",
            ],
            [
                "id_cidade" => 5257,
                "id_estado" => 51,
                "nome" => "Nova Lacerda",
            ],
            [
                "id_cidade" => 5258,
                "id_estado" => 51,
                "nome" => "Nova Marilândia",
            ],
            [
                "id_cidade" => 5259,
                "id_estado" => 51,
                "nome" => "Nova Maringá",
            ],
            [
                "id_cidade" => 5260,
                "id_estado" => 51,
                "nome" => "Nova Monte Verde",
            ],
            [
                "id_cidade" => 5261,
                "id_estado" => 51,
                "nome" => "Nova Mutum",
            ],
            [
                "id_cidade" => 5262,
                "id_estado" => 51,
                "nome" => "Nova Nazaré",
            ],
            [
                "id_cidade" => 5263,
                "id_estado" => 51,
                "nome" => "Nova Olímpia",
            ],
            [
                "id_cidade" => 5264,
                "id_estado" => 51,
                "nome" => "Nova Santa Helena",
            ],
            [
                "id_cidade" => 5265,
                "id_estado" => 51,
                "nome" => "Nova Ubiratã",
            ],
            [
                "id_cidade" => 5266,
                "id_estado" => 51,
                "nome" => "Nova Xavantina",
            ],
            [
                "id_cidade" => 5267,
                "id_estado" => 51,
                "nome" => "Novo Horizonte do Norte",
            ],
            [
                "id_cidade" => 5268,
                "id_estado" => 51,
                "nome" => "Novo Mundo",
            ],
            [
                "id_cidade" => 5269,
                "id_estado" => 51,
                "nome" => "Novo Santo Antônio",
            ],
            [
                "id_cidade" => 5270,
                "id_estado" => 51,
                "nome" => "Novo São Joaquim",
            ],
            [
                "id_cidade" => 5271,
                "id_estado" => 51,
                "nome" => "Paranaíta",
            ],
            [
                "id_cidade" => 5272,
                "id_estado" => 51,
                "nome" => "Paranatinga",
            ],
            [
                "id_cidade" => 5273,
                "id_estado" => 51,
                "nome" => "Pedra Preta",
            ],
            [
                "id_cidade" => 5274,
                "id_estado" => 51,
                "nome" => "Peixoto de Azevedo",
            ],
            [
                "id_cidade" => 5275,
                "id_estado" => 51,
                "nome" => "Planalto da Serra",
            ],
            [
                "id_cidade" => 5276,
                "id_estado" => 51,
                "nome" => "Poconé",
            ],
            [
                "id_cidade" => 5277,
                "id_estado" => 51,
                "nome" => "Pontal do Araguaia",
            ],
            [
                "id_cidade" => 5278,
                "id_estado" => 51,
                "nome" => "Ponte Branca",
            ],
            [
                "id_cidade" => 5279,
                "id_estado" => 51,
                "nome" => "Pontes e Lacerda",
            ],
            [
                "id_cidade" => 5280,
                "id_estado" => 51,
                "nome" => "Porto Alegre do Norte",
            ],
            [
                "id_cidade" => 5281,
                "id_estado" => 51,
                "nome" => "Porto dos Gaúchos",
            ],
            [
                "id_cidade" => 5282,
                "id_estado" => 51,
                "nome" => "Porto Esperidião",
            ],
            [
                "id_cidade" => 5283,
                "id_estado" => 51,
                "nome" => "Porto Estrela",
            ],
            [
                "id_cidade" => 5284,
                "id_estado" => 51,
                "nome" => "Poxoréu",
            ],
            [
                "id_cidade" => 5285,
                "id_estado" => 51,
                "nome" => "Primavera do Leste",
            ],
            [
                "id_cidade" => 5286,
                "id_estado" => 51,
                "nome" => "Querência",
            ],
            [
                "id_cidade" => 5287,
                "id_estado" => 51,
                "nome" => "Reserva do Cabaçal",
            ],
            [
                "id_cidade" => 5288,
                "id_estado" => 51,
                "nome" => "Ribeirão Cascalheira",
            ],
            [
                "id_cidade" => 5289,
                "id_estado" => 51,
                "nome" => "Ribeirãozinho",
            ],
            [
                "id_cidade" => 5290,
                "id_estado" => 51,
                "nome" => "Rio Branco",
            ],
            [
                "id_cidade" => 5291,
                "id_estado" => 51,
                "nome" => "Rondolândia",
            ],
            [
                "id_cidade" => 5292,
                "id_estado" => 51,
                "nome" => "Rondonópolis",
            ],
            [
                "id_cidade" => 5293,
                "id_estado" => 51,
                "nome" => "Rosário Oeste",
            ],
            [
                "id_cidade" => 5294,
                "id_estado" => 51,
                "nome" => "Salto do Céu",
            ],
            [
                "id_cidade" => 5295,
                "id_estado" => 51,
                "nome" => "Santa Carmem",
            ],
            [
                "id_cidade" => 5296,
                "id_estado" => 51,
                "nome" => "Santa Cruz do Xingu",
            ],
            [
                "id_cidade" => 5297,
                "id_estado" => 51,
                "nome" => "Santa Rita do Trivelato",
            ],
            [
                "id_cidade" => 5298,
                "id_estado" => 51,
                "nome" => "Santa Terezinha",
            ],
            [
                "id_cidade" => 5299,
                "id_estado" => 51,
                "nome" => "Santo Afonso",
            ],
            [
                "id_cidade" => 5300,
                "id_estado" => 51,
                "nome" => "Santo Antônio do Leste",
            ],
            [
                "id_cidade" => 5301,
                "id_estado" => 51,
                "nome" => "Santo Antônio do Leverger",
            ],
            [
                "id_cidade" => 5302,
                "id_estado" => 51,
                "nome" => "São Félix do Araguaia",
            ],
            [
                "id_cidade" => 5303,
                "id_estado" => 51,
                "nome" => "São José do Povo",
            ],
            [
                "id_cidade" => 5304,
                "id_estado" => 51,
                "nome" => "São José do Rio Claro",
            ],
            [
                "id_cidade" => 5305,
                "id_estado" => 51,
                "nome" => "São José do Xingu",
            ],
            [
                "id_cidade" => 5306,
                "id_estado" => 51,
                "nome" => "São José dos Quatro Marcos",
            ],
            [
                "id_cidade" => 5307,
                "id_estado" => 51,
                "nome" => "São Pedro da Cipa",
            ],
            [
                "id_cidade" => 5308,
                "id_estado" => 51,
                "nome" => "Sapezal",
            ],
            [
                "id_cidade" => 5309,
                "id_estado" => 51,
                "nome" => "Serra Nova Dourada",
            ],
            [
                "id_cidade" => 5310,
                "id_estado" => 51,
                "nome" => "Sinop",
            ],
            [
                "id_cidade" => 5311,
                "id_estado" => 51,
                "nome" => "Sorriso",
            ],
            [
                "id_cidade" => 5312,
                "id_estado" => 51,
                "nome" => "Tabaporã",
            ],
            [
                "id_cidade" => 5313,
                "id_estado" => 51,
                "nome" => "Tangará da Serra",
            ],
            [
                "id_cidade" => 5314,
                "id_estado" => 51,
                "nome" => "Tapurah",
            ],
            [
                "id_cidade" => 5315,
                "id_estado" => 51,
                "nome" => "Terra Nova do Norte",
            ],
            [
                "id_cidade" => 5316,
                "id_estado" => 51,
                "nome" => "Tesouro",
            ],
            [
                "id_cidade" => 5317,
                "id_estado" => 51,
                "nome" => "Torixoréu",
            ],
            [
                "id_cidade" => 5318,
                "id_estado" => 51,
                "nome" => "União do Sul",
            ],
            [
                "id_cidade" => 5319,
                "id_estado" => 51,
                "nome" => "Vale de São Domingos",
            ],
            [
                "id_cidade" => 5320,
                "id_estado" => 51,
                "nome" => "Várzea Grande",
            ],
            [
                "id_cidade" => 5321,
                "id_estado" => 51,
                "nome" => "Vera",
            ],
            [
                "id_cidade" => 5322,
                "id_estado" => 51,
                "nome" => "Vila Bela da Santíssima Trindade",
            ],
            [
                "id_cidade" => 5323,
                "id_estado" => 51,
                "nome" => "Vila Rica",
            ],
            [
                "id_cidade" => 5324,
                "id_estado" => 52,
                "nome" => "Abadia de Goiás",
            ],
            [
                "id_cidade" => 5325,
                "id_estado" => 52,
                "nome" => "Abadiânia",
            ],
            [
                "id_cidade" => 5326,
                "id_estado" => 52,
                "nome" => "Acreúna",
            ],
            [
                "id_cidade" => 5327,
                "id_estado" => 52,
                "nome" => "Adelândia",
            ],
            [
                "id_cidade" => 5328,
                "id_estado" => 52,
                "nome" => "Água Fria de Goiás",
            ],
            [
                "id_cidade" => 5329,
                "id_estado" => 52,
                "nome" => "Água Limpa",
            ],
            [
                "id_cidade" => 5330,
                "id_estado" => 52,
                "nome" => "Águas Lindas de Goiás",
            ],
            [
                "id_cidade" => 5331,
                "id_estado" => 52,
                "nome" => "Alexânia",
            ],
            [
                "id_cidade" => 5332,
                "id_estado" => 52,
                "nome" => "Aloândia",
            ],
            [
                "id_cidade" => 5333,
                "id_estado" => 52,
                "nome" => "Alto Horizonte",
            ],
            [
                "id_cidade" => 5334,
                "id_estado" => 52,
                "nome" => "Alto Paraíso de Goiás",
            ],
            [
                "id_cidade" => 5335,
                "id_estado" => 52,
                "nome" => "Alvorada do Norte",
            ],
            [
                "id_cidade" => 5336,
                "id_estado" => 52,
                "nome" => "Amaralina",
            ],
            [
                "id_cidade" => 5337,
                "id_estado" => 52,
                "nome" => "Americano do Brasil",
            ],
            [
                "id_cidade" => 5338,
                "id_estado" => 52,
                "nome" => "Amorinópolis",
            ],
            [
                "id_cidade" => 5339,
                "id_estado" => 52,
                "nome" => "Anápolis",
            ],
            [
                "id_cidade" => 5340,
                "id_estado" => 52,
                "nome" => "Anhanguera",
            ],
            [
                "id_cidade" => 5341,
                "id_estado" => 52,
                "nome" => "Anicuns",
            ],
            [
                "id_cidade" => 5342,
                "id_estado" => 52,
                "nome" => "Aparecida de Goiânia",
            ],
            [
                "id_cidade" => 5343,
                "id_estado" => 52,
                "nome" => "Aparecida do Rio Doce",
            ],
            [
                "id_cidade" => 5344,
                "id_estado" => 52,
                "nome" => "Aporé",
            ],
            [
                "id_cidade" => 5345,
                "id_estado" => 52,
                "nome" => "Araçu",
            ],
            [
                "id_cidade" => 5346,
                "id_estado" => 52,
                "nome" => "Aragarças",
            ],
            [
                "id_cidade" => 5347,
                "id_estado" => 52,
                "nome" => "Aragoiânia",
            ],
            [
                "id_cidade" => 5348,
                "id_estado" => 52,
                "nome" => "Araguapaz",
            ],
            [
                "id_cidade" => 5349,
                "id_estado" => 52,
                "nome" => "Arenópolis",
            ],
            [
                "id_cidade" => 5350,
                "id_estado" => 52,
                "nome" => "Aruanã",
            ],
            [
                "id_cidade" => 5351,
                "id_estado" => 52,
                "nome" => "Aurilândia",
            ],
            [
                "id_cidade" => 5352,
                "id_estado" => 52,
                "nome" => "Avelinópolis",
            ],
            [
                "id_cidade" => 5353,
                "id_estado" => 52,
                "nome" => "Baliza",
            ],
            [
                "id_cidade" => 5354,
                "id_estado" => 52,
                "nome" => "Barro Alto",
            ],
            [
                "id_cidade" => 5355,
                "id_estado" => 52,
                "nome" => "Bela Vista de Goiás",
            ],
            [
                "id_cidade" => 5356,
                "id_estado" => 52,
                "nome" => "Bom Jardim de Goiás",
            ],
            [
                "id_cidade" => 5357,
                "id_estado" => 52,
                "nome" => "Bom Jesus de Goiás",
            ],
            [
                "id_cidade" => 5358,
                "id_estado" => 52,
                "nome" => "Bonfinópolis",
            ],
            [
                "id_cidade" => 5359,
                "id_estado" => 52,
                "nome" => "Bonópolis",
            ],
            [
                "id_cidade" => 5360,
                "id_estado" => 52,
                "nome" => "Brazabrantes",
            ],
            [
                "id_cidade" => 5361,
                "id_estado" => 52,
                "nome" => "Britânia",
            ],
            [
                "id_cidade" => 5362,
                "id_estado" => 52,
                "nome" => "Buriti Alegre",
            ],
            [
                "id_cidade" => 5363,
                "id_estado" => 52,
                "nome" => "Buriti de Goiás",
            ],
            [
                "id_cidade" => 5364,
                "id_estado" => 52,
                "nome" => "Buritinópolis",
            ],
            [
                "id_cidade" => 5365,
                "id_estado" => 52,
                "nome" => "Cabeceiras",
            ],
            [
                "id_cidade" => 5366,
                "id_estado" => 52,
                "nome" => "Cachoeira Alta",
            ],
            [
                "id_cidade" => 5367,
                "id_estado" => 52,
                "nome" => "Cachoeira de Goiás",
            ],
            [
                "id_cidade" => 5368,
                "id_estado" => 52,
                "nome" => "Cachoeira Dourada",
            ],
            [
                "id_cidade" => 5369,
                "id_estado" => 52,
                "nome" => "Caçu",
            ],
            [
                "id_cidade" => 5370,
                "id_estado" => 52,
                "nome" => "Caiapônia",
            ],
            [
                "id_cidade" => 5371,
                "id_estado" => 52,
                "nome" => "Caldas Novas",
            ],
            [
                "id_cidade" => 5372,
                "id_estado" => 52,
                "nome" => "Caldazinha",
            ],
            [
                "id_cidade" => 5373,
                "id_estado" => 52,
                "nome" => "Campestre de Goiás",
            ],
            [
                "id_cidade" => 5374,
                "id_estado" => 52,
                "nome" => "Campinaçu",
            ],
            [
                "id_cidade" => 5375,
                "id_estado" => 52,
                "nome" => "Campinorte",
            ],
            [
                "id_cidade" => 5376,
                "id_estado" => 52,
                "nome" => "Campo Alegre de Goiás",
            ],
            [
                "id_cidade" => 5377,
                "id_estado" => 52,
                "nome" => "Campo Limpo de Goiás",
            ],
            [
                "id_cidade" => 5378,
                "id_estado" => 52,
                "nome" => "Campos Belos",
            ],
            [
                "id_cidade" => 5379,
                "id_estado" => 52,
                "nome" => "Campos Verdes",
            ],
            [
                "id_cidade" => 5380,
                "id_estado" => 52,
                "nome" => "Carmo do Rio Verde",
            ],
            [
                "id_cidade" => 5381,
                "id_estado" => 52,
                "nome" => "Castelândia",
            ],
            [
                "id_cidade" => 5382,
                "id_estado" => 52,
                "nome" => "Catalão",
            ],
            [
                "id_cidade" => 5383,
                "id_estado" => 52,
                "nome" => "Caturaí",
            ],
            [
                "id_cidade" => 5384,
                "id_estado" => 52,
                "nome" => "Cavalcante",
            ],
            [
                "id_cidade" => 5385,
                "id_estado" => 52,
                "nome" => "Ceres",
            ],
            [
                "id_cidade" => 5386,
                "id_estado" => 52,
                "nome" => "Cezarina",
            ],
            [
                "id_cidade" => 5387,
                "id_estado" => 52,
                "nome" => "Chapadão do Céu",
            ],
            [
                "id_cidade" => 5388,
                "id_estado" => 52,
                "nome" => "Cidade Ocidental",
            ],
            [
                "id_cidade" => 5389,
                "id_estado" => 52,
                "nome" => "Cocalzinho de Goiás",
            ],
            [
                "id_cidade" => 5390,
                "id_estado" => 52,
                "nome" => "Colinas do Sul",
            ],
            [
                "id_cidade" => 5391,
                "id_estado" => 52,
                "nome" => "Córrego do Ouro",
            ],
            [
                "id_cidade" => 5392,
                "id_estado" => 52,
                "nome" => "Corumbá de Goiás",
            ],
            [
                "id_cidade" => 5393,
                "id_estado" => 52,
                "nome" => "Corumbaíba",
            ],
            [
                "id_cidade" => 5394,
                "id_estado" => 52,
                "nome" => "Cristalina",
            ],
            [
                "id_cidade" => 5395,
                "id_estado" => 52,
                "nome" => "Cristianópolis",
            ],
            [
                "id_cidade" => 5396,
                "id_estado" => 52,
                "nome" => "Crixás",
            ],
            [
                "id_cidade" => 5397,
                "id_estado" => 52,
                "nome" => "Cromínia",
            ],
            [
                "id_cidade" => 5398,
                "id_estado" => 52,
                "nome" => "Cumari",
            ],
            [
                "id_cidade" => 5399,
                "id_estado" => 52,
                "nome" => "Damianópolis",
            ],
            [
                "id_cidade" => 5400,
                "id_estado" => 52,
                "nome" => "Damolândia",
            ],
            [
                "id_cidade" => 5401,
                "id_estado" => 52,
                "nome" => "Davinópolis",
            ],
            [
                "id_cidade" => 5402,
                "id_estado" => 52,
                "nome" => "Diorama",
            ],
            [
                "id_cidade" => 5403,
                "id_estado" => 52,
                "nome" => "Divinópolis de Goiás",
            ],
            [
                "id_cidade" => 5404,
                "id_estado" => 52,
                "nome" => "Doverlândia",
            ],
            [
                "id_cidade" => 5405,
                "id_estado" => 52,
                "nome" => "Edealina",
            ],
            [
                "id_cidade" => 5406,
                "id_estado" => 52,
                "nome" => "Edéia",
            ],
            [
                "id_cidade" => 5407,
                "id_estado" => 52,
                "nome" => "Estrela do Norte",
            ],
            [
                "id_cidade" => 5408,
                "id_estado" => 52,
                "nome" => "Faina",
            ],
            [
                "id_cidade" => 5409,
                "id_estado" => 52,
                "nome" => "Fazenda Nova",
            ],
            [
                "id_cidade" => 5410,
                "id_estado" => 52,
                "nome" => "Firminópolis",
            ],
            [
                "id_cidade" => 5411,
                "id_estado" => 52,
                "nome" => "Flores de Goiás",
            ],
            [
                "id_cidade" => 5412,
                "id_estado" => 52,
                "nome" => "Formosa",
            ],
            [
                "id_cidade" => 5413,
                "id_estado" => 52,
                "nome" => "Formoso",
            ],
            [
                "id_cidade" => 5414,
                "id_estado" => 52,
                "nome" => "Gameleira de Goiás",
            ],
            [
                "id_cidade" => 5415,
                "id_estado" => 52,
                "nome" => "Goianápolis",
            ],
            [
                "id_cidade" => 5416,
                "id_estado" => 52,
                "nome" => "Goiandira",
            ],
            [
                "id_cidade" => 5417,
                "id_estado" => 52,
                "nome" => "Goianésia",
            ],
            [
                "id_cidade" => 5418,
                "id_estado" => 52,
                "nome" => "Goiânia",
            ],
            [
                "id_cidade" => 5419,
                "id_estado" => 52,
                "nome" => "Goianira",
            ],
            [
                "id_cidade" => 5420,
                "id_estado" => 52,
                "nome" => "Goiás",
            ],
            [
                "id_cidade" => 5421,
                "id_estado" => 52,
                "nome" => "Goiatuba",
            ],
            [
                "id_cidade" => 5422,
                "id_estado" => 52,
                "nome" => "Gouvelândia",
            ],
            [
                "id_cidade" => 5423,
                "id_estado" => 52,
                "nome" => "Guapó",
            ],
            [
                "id_cidade" => 5424,
                "id_estado" => 52,
                "nome" => "Guaraíta",
            ],
            [
                "id_cidade" => 5425,
                "id_estado" => 52,
                "nome" => "Guarani de Goiás",
            ],
            [
                "id_cidade" => 5426,
                "id_estado" => 52,
                "nome" => "Guarinos",
            ],
            [
                "id_cidade" => 5427,
                "id_estado" => 52,
                "nome" => "Heitoraí",
            ],
            [
                "id_cidade" => 5428,
                "id_estado" => 52,
                "nome" => "Hidrolândia",
            ],
            [
                "id_cidade" => 5429,
                "id_estado" => 52,
                "nome" => "Hidrolina",
            ],
            [
                "id_cidade" => 5430,
                "id_estado" => 52,
                "nome" => "Iaciara",
            ],
            [
                "id_cidade" => 5431,
                "id_estado" => 52,
                "nome" => "Inaciolândia",
            ],
            [
                "id_cidade" => 5432,
                "id_estado" => 52,
                "nome" => "Indiara",
            ],
            [
                "id_cidade" => 5433,
                "id_estado" => 52,
                "nome" => "Inhumas",
            ],
            [
                "id_cidade" => 5434,
                "id_estado" => 52,
                "nome" => "Ipameri",
            ],
            [
                "id_cidade" => 5435,
                "id_estado" => 52,
                "nome" => "Ipiranga de Goiás",
            ],
            [
                "id_cidade" => 5436,
                "id_estado" => 52,
                "nome" => "Iporá",
            ],
            [
                "id_cidade" => 5437,
                "id_estado" => 52,
                "nome" => "Israelândia",
            ],
            [
                "id_cidade" => 5438,
                "id_estado" => 52,
                "nome" => "Itaberaí",
            ],
            [
                "id_cidade" => 5439,
                "id_estado" => 52,
                "nome" => "Itaguari",
            ],
            [
                "id_cidade" => 5440,
                "id_estado" => 52,
                "nome" => "Itaguaru",
            ],
            [
                "id_cidade" => 5441,
                "id_estado" => 52,
                "nome" => "Itajá",
            ],
            [
                "id_cidade" => 5442,
                "id_estado" => 52,
                "nome" => "Itapaci",
            ],
            [
                "id_cidade" => 5443,
                "id_estado" => 52,
                "nome" => "Itapirapuã",
            ],
            [
                "id_cidade" => 5444,
                "id_estado" => 52,
                "nome" => "Itapuranga",
            ],
            [
                "id_cidade" => 5445,
                "id_estado" => 52,
                "nome" => "Itarumã",
            ],
            [
                "id_cidade" => 5446,
                "id_estado" => 52,
                "nome" => "Itauçu",
            ],
            [
                "id_cidade" => 5447,
                "id_estado" => 52,
                "nome" => "Itumbiara",
            ],
            [
                "id_cidade" => 5448,
                "id_estado" => 52,
                "nome" => "Ivolândia",
            ],
            [
                "id_cidade" => 5449,
                "id_estado" => 52,
                "nome" => "Jandaia",
            ],
            [
                "id_cidade" => 5450,
                "id_estado" => 52,
                "nome" => "Jaraguá",
            ],
            [
                "id_cidade" => 5451,
                "id_estado" => 52,
                "nome" => "Jataí",
            ],
            [
                "id_cidade" => 5452,
                "id_estado" => 52,
                "nome" => "Jaupaci",
            ],
            [
                "id_cidade" => 5453,
                "id_estado" => 52,
                "nome" => "Jesúpolis",
            ],
            [
                "id_cidade" => 5454,
                "id_estado" => 52,
                "nome" => "Joviânia",
            ],
            [
                "id_cidade" => 5455,
                "id_estado" => 52,
                "nome" => "Jussara",
            ],
            [
                "id_cidade" => 5456,
                "id_estado" => 52,
                "nome" => "Lagoa Santa",
            ],
            [
                "id_cidade" => 5457,
                "id_estado" => 52,
                "nome" => "Leopoldo de Bulhões",
            ],
            [
                "id_cidade" => 5458,
                "id_estado" => 52,
                "nome" => "Luziânia",
            ],
            [
                "id_cidade" => 5459,
                "id_estado" => 52,
                "nome" => "Mairipotaba",
            ],
            [
                "id_cidade" => 5460,
                "id_estado" => 52,
                "nome" => "Mambaí",
            ],
            [
                "id_cidade" => 5461,
                "id_estado" => 52,
                "nome" => "Mara Rosa",
            ],
            [
                "id_cidade" => 5462,
                "id_estado" => 52,
                "nome" => "Marzagão",
            ],
            [
                "id_cidade" => 5463,
                "id_estado" => 52,
                "nome" => "Matrinchã",
            ],
            [
                "id_cidade" => 5464,
                "id_estado" => 52,
                "nome" => "Maurilândia",
            ],
            [
                "id_cidade" => 5465,
                "id_estado" => 52,
                "nome" => "Mimoso de Goiás",
            ],
            [
                "id_cidade" => 5466,
                "id_estado" => 52,
                "nome" => "Minaçu",
            ],
            [
                "id_cidade" => 5467,
                "id_estado" => 52,
                "nome" => "Mineiros",
            ],
            [
                "id_cidade" => 5468,
                "id_estado" => 52,
                "nome" => "Moiporá",
            ],
            [
                "id_cidade" => 5469,
                "id_estado" => 52,
                "nome" => "Monte Alegre de Goiás",
            ],
            [
                "id_cidade" => 5470,
                "id_estado" => 52,
                "nome" => "Montes Claros de Goiás",
            ],
            [
                "id_cidade" => 5471,
                "id_estado" => 52,
                "nome" => "Montividiu",
            ],
            [
                "id_cidade" => 5472,
                "id_estado" => 52,
                "nome" => "Montividiu do Norte",
            ],
            [
                "id_cidade" => 5473,
                "id_estado" => 52,
                "nome" => "Morrinhos",
            ],
            [
                "id_cidade" => 5474,
                "id_estado" => 52,
                "nome" => "Morro Agudo de Goiás",
            ],
            [
                "id_cidade" => 5475,
                "id_estado" => 52,
                "nome" => "Mossâmedes",
            ],
            [
                "id_cidade" => 5476,
                "id_estado" => 52,
                "nome" => "Mozarlândia",
            ],
            [
                "id_cidade" => 5477,
                "id_estado" => 52,
                "nome" => "Mundo Novo",
            ],
            [
                "id_cidade" => 5478,
                "id_estado" => 52,
                "nome" => "Mutunópolis",
            ],
            [
                "id_cidade" => 5479,
                "id_estado" => 52,
                "nome" => "Nazário",
            ],
            [
                "id_cidade" => 5480,
                "id_estado" => 52,
                "nome" => "Nerópolis",
            ],
            [
                "id_cidade" => 5481,
                "id_estado" => 52,
                "nome" => "Niquelândia",
            ],
            [
                "id_cidade" => 5482,
                "id_estado" => 52,
                "nome" => "Nova América",
            ],
            [
                "id_cidade" => 5483,
                "id_estado" => 52,
                "nome" => "Nova Aurora",
            ],
            [
                "id_cidade" => 5484,
                "id_estado" => 52,
                "nome" => "Nova Crixás",
            ],
            [
                "id_cidade" => 5485,
                "id_estado" => 52,
                "nome" => "Nova Glória",
            ],
            [
                "id_cidade" => 5486,
                "id_estado" => 52,
                "nome" => "Nova Iguaçu de Goiás",
            ],
            [
                "id_cidade" => 5487,
                "id_estado" => 52,
                "nome" => "Nova Roma",
            ],
            [
                "id_cidade" => 5488,
                "id_estado" => 52,
                "nome" => "Nova Veneza",
            ],
            [
                "id_cidade" => 5489,
                "id_estado" => 52,
                "nome" => "Novo Brasil",
            ],
            [
                "id_cidade" => 5490,
                "id_estado" => 52,
                "nome" => "Novo Gama",
            ],
            [
                "id_cidade" => 5491,
                "id_estado" => 52,
                "nome" => "Novo Planalto",
            ],
            [
                "id_cidade" => 5492,
                "id_estado" => 52,
                "nome" => "Orizona",
            ],
            [
                "id_cidade" => 5493,
                "id_estado" => 52,
                "nome" => "Ouro Verde de Goiás",
            ],
            [
                "id_cidade" => 5494,
                "id_estado" => 52,
                "nome" => "Ouvidor",
            ],
            [
                "id_cidade" => 5495,
                "id_estado" => 52,
                "nome" => "Padre Bernardo",
            ],
            [
                "id_cidade" => 5496,
                "id_estado" => 52,
                "nome" => "Palestina de Goiás",
            ],
            [
                "id_cidade" => 5497,
                "id_estado" => 52,
                "nome" => "Palmeiras de Goiás",
            ],
            [
                "id_cidade" => 5498,
                "id_estado" => 52,
                "nome" => "Palmelo",
            ],
            [
                "id_cidade" => 5499,
                "id_estado" => 52,
                "nome" => "Palminópolis",
            ],
            [
                "id_cidade" => 5500,
                "id_estado" => 52,
                "nome" => "Panamá",
            ],
            [
                "id_cidade" => 5501,
                "id_estado" => 52,
                "nome" => "Paranaiguara",
            ],
            [
                "id_cidade" => 5502,
                "id_estado" => 52,
                "nome" => "Paraúna",
            ],
            [
                "id_cidade" => 5503,
                "id_estado" => 52,
                "nome" => "Perolândia",
            ],
            [
                "id_cidade" => 5504,
                "id_estado" => 52,
                "nome" => "Petrolina de Goiás",
            ],
            [
                "id_cidade" => 5505,
                "id_estado" => 52,
                "nome" => "Pilar de Goiás",
            ],
            [
                "id_cidade" => 5506,
                "id_estado" => 52,
                "nome" => "Piracanjuba",
            ],
            [
                "id_cidade" => 5507,
                "id_estado" => 52,
                "nome" => "Piranhas",
            ],
            [
                "id_cidade" => 5508,
                "id_estado" => 52,
                "nome" => "Pirenópolis",
            ],
            [
                "id_cidade" => 5509,
                "id_estado" => 52,
                "nome" => "Pires do Rio",
            ],
            [
                "id_cidade" => 5510,
                "id_estado" => 52,
                "nome" => "Planaltina",
            ],
            [
                "id_cidade" => 5511,
                "id_estado" => 52,
                "nome" => "Pontalina",
            ],
            [
                "id_cidade" => 5512,
                "id_estado" => 52,
                "nome" => "Porangatu",
            ],
            [
                "id_cidade" => 5513,
                "id_estado" => 52,
                "nome" => "Porteirão",
            ],
            [
                "id_cidade" => 5514,
                "id_estado" => 52,
                "nome" => "Portelândia",
            ],
            [
                "id_cidade" => 5515,
                "id_estado" => 52,
                "nome" => "Posse",
            ],
            [
                "id_cidade" => 5516,
                "id_estado" => 52,
                "nome" => "Professor Jamil",
            ],
            [
                "id_cidade" => 5517,
                "id_estado" => 52,
                "nome" => "Quirinópolis",
            ],
            [
                "id_cidade" => 5518,
                "id_estado" => 52,
                "nome" => "Rialma",
            ],
            [
                "id_cidade" => 5519,
                "id_estado" => 52,
                "nome" => "Rianápolis",
            ],
            [
                "id_cidade" => 5520,
                "id_estado" => 52,
                "nome" => "Rio Quente",
            ],
            [
                "id_cidade" => 5521,
                "id_estado" => 52,
                "nome" => "Rio Verde",
            ],
            [
                "id_cidade" => 5522,
                "id_estado" => 52,
                "nome" => "Rubiataba",
            ],
            [
                "id_cidade" => 5523,
                "id_estado" => 52,
                "nome" => "Sanclerlândia",
            ],
            [
                "id_cidade" => 5524,
                "id_estado" => 52,
                "nome" => "Santa Bárbara de Goiás",
            ],
            [
                "id_cidade" => 5525,
                "id_estado" => 52,
                "nome" => "Santa Cruz de Goiás",
            ],
            [
                "id_cidade" => 5526,
                "id_estado" => 52,
                "nome" => "Santa Fé de Goiás",
            ],
            [
                "id_cidade" => 5527,
                "id_estado" => 52,
                "nome" => "Santa Helena de Goiás",
            ],
            [
                "id_cidade" => 5528,
                "id_estado" => 52,
                "nome" => "Santa Isabel",
            ],
            [
                "id_cidade" => 5529,
                "id_estado" => 52,
                "nome" => "Santa Rita do Araguaia",
            ],
            [
                "id_cidade" => 5530,
                "id_estado" => 52,
                "nome" => "Santa Rita do Novo Destino",
            ],
            [
                "id_cidade" => 5531,
                "id_estado" => 52,
                "nome" => "Santa Rosa de Goiás",
            ],
            [
                "id_cidade" => 5532,
                "id_estado" => 52,
                "nome" => "Santa Tereza de Goiás",
            ],
            [
                "id_cidade" => 5533,
                "id_estado" => 52,
                "nome" => "Santa Terezinha de Goiás",
            ],
            [
                "id_cidade" => 5534,
                "id_estado" => 52,
                "nome" => "Santo Antônio da Barra",
            ],
            [
                "id_cidade" => 5535,
                "id_estado" => 52,
                "nome" => "Santo Antônio de Goiás",
            ],
            [
                "id_cidade" => 5536,
                "id_estado" => 52,
                "nome" => "Santo Antônio do Descoberto",
            ],
            [
                "id_cidade" => 5537,
                "id_estado" => 52,
                "nome" => "São Domingos",
            ],
            [
                "id_cidade" => 5538,
                "id_estado" => 52,
                "nome" => "São Francisco de Goiás",
            ],
            [
                "id_cidade" => 5539,
                "id_estado" => 52,
                "nome" => "São João da Paraúna",
            ],
            [
                "id_cidade" => 5540,
                "id_estado" => 52,
                "nome" => "São João d'Aliança",
            ],
            [
                "id_cidade" => 5541,
                "id_estado" => 52,
                "nome" => "São Luís de Montes Belos",
            ],
            [
                "id_cidade" => 5542,
                "id_estado" => 52,
                "nome" => "São Luiz do Norte",
            ],
            [
                "id_cidade" => 5543,
                "id_estado" => 52,
                "nome" => "São Miguel do Araguaia",
            ],
            [
                "id_cidade" => 5544,
                "id_estado" => 52,
                "nome" => "São Miguel do Passa Quatro",
            ],
            [
                "id_cidade" => 5545,
                "id_estado" => 52,
                "nome" => "São Patrício",
            ],
            [
                "id_cidade" => 5546,
                "id_estado" => 52,
                "nome" => "São Simão",
            ],
            [
                "id_cidade" => 5547,
                "id_estado" => 52,
                "nome" => "Senador Canedo",
            ],
            [
                "id_cidade" => 5548,
                "id_estado" => 52,
                "nome" => "Serranópolis",
            ],
            [
                "id_cidade" => 5549,
                "id_estado" => 52,
                "nome" => "Silvânia",
            ],
            [
                "id_cidade" => 5550,
                "id_estado" => 52,
                "nome" => "Simolândia",
            ],
            [
                "id_cidade" => 5551,
                "id_estado" => 52,
                "nome" => "Sítio d'Abadia",
            ],
            [
                "id_cidade" => 5552,
                "id_estado" => 52,
                "nome" => "Taquaral de Goiás",
            ],
            [
                "id_cidade" => 5553,
                "id_estado" => 52,
                "nome" => "Teresina de Goiás",
            ],
            [
                "id_cidade" => 5554,
                "id_estado" => 52,
                "nome" => "Terezópolis de Goiás",
            ],
            [
                "id_cidade" => 5555,
                "id_estado" => 52,
                "nome" => "Três Ranchos",
            ],
            [
                "id_cidade" => 5556,
                "id_estado" => 52,
                "nome" => "Trindade",
            ],
            [
                "id_cidade" => 5557,
                "id_estado" => 52,
                "nome" => "Trombas",
            ],
            [
                "id_cidade" => 5558,
                "id_estado" => 52,
                "nome" => "Turvânia",
            ],
            [
                "id_cidade" => 5559,
                "id_estado" => 52,
                "nome" => "Turvelândia",
            ],
            [
                "id_cidade" => 5560,
                "id_estado" => 52,
                "nome" => "Uirapuru",
            ],
            [
                "id_cidade" => 5561,
                "id_estado" => 52,
                "nome" => "Uruaçu",
            ],
            [
                "id_cidade" => 5562,
                "id_estado" => 52,
                "nome" => "Uruana",
            ],
            [
                "id_cidade" => 5563,
                "id_estado" => 52,
                "nome" => "Urutaí",
            ],
            [
                "id_cidade" => 5564,
                "id_estado" => 52,
                "nome" => "Valparaíso de Goiás",
            ],
            [
                "id_cidade" => 5565,
                "id_estado" => 52,
                "nome" => "Varjão",
            ],
            [
                "id_cidade" => 5566,
                "id_estado" => 52,
                "nome" => "Vianópolis",
            ],
            [
                "id_cidade" => 5567,
                "id_estado" => 52,
                "nome" => "Vicentinópolis",
            ],
            [
                "id_cidade" => 5568,
                "id_estado" => 52,
                "nome" => "Vila Boa",
            ],
            [
                "id_cidade" => 5569,
                "id_estado" => 52,
                "nome" => "Vila Propício",
            ],
            [
                "id_cidade" => 5570,
                "id_estado" => 53,
                "nome" => "Brasília",
            ]
        ];
        DB::table('cidades')->insert($cidades);
    }
}
