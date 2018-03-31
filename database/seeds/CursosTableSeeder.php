<?php

use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
        	'nome_curso' => 'Linguagem de Programação I',
        	'data_criacao_curso' => date('Y-m-d')
        ]);

        DB::table('cursos')->insert([
        	'nome_curso' => 'Linguagem de Programação II',
        	'data_criacao_curso' => date('Y-m-d')
        ]);

        DB::table('cursos')->insert([
        	'nome_curso' => 'Cálculo I',
        	'data_criacao_curso' => date('Y-m-d')
        ]);
    }
}
