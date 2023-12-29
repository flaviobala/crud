<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produtosSeeder extends Seeder
{
   
    public function run(): void
    {
        Produto::create([
            'nome' => 'Flavio Henrique',
            'valor' => '20.00 '
        ]
    );
    }
}
