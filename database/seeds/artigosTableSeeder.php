<?php

use Illuminate\Database\Seeder;
use App\artigos;

class artigosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        artigos::create ([

        'titulo' => 'teste1',
        'descricao' => 'bla bla bla',
        'data' => '2019-01-10',
        'empresa' => 'empresa teste',
        'orientador' => 'teste orientador',
        'banca1' => 'banca teste',
        'banca2' => 'banca2',
        'resultado' => 7.10,
        ]); 
    }

}