<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
   
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Flavio Henrique',
            'email' => 'carlos@fha.com',
            'endereco' => 'rua87',
            'logradouro' => 'cinco',
            'cep' => '58789999',
            'bairro' => 'beco da ovelha',
        ]
    ); 

    Cliente::create([
        'nome' => 'rrrr rrr',
        'email' => 'rrrrrr@fha.com',
        'endereco' => 'rrr',
        'logradouro' => 'rrrr',
        'cep' => 'rrrr',
        'bairro' => 'rrrr',
    ]
); 
    }
}
