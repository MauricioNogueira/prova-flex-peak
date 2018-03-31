<?php

use Illuminate\Database\Seeder;

class ProfessoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professores')->insert([
        	'nome_professor' => 'Jaidson Brandão da Costa',
        	'data_nascimento_professor' => '1988-04-24',
        	'data_criacao_professor' => date('Y-m-d')
        ]);
    }
}
