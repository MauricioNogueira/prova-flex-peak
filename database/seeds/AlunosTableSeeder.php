<?php

use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
        	'nome' => 'Maurício Nogueira de Oliveira',
        	'data_nascimento' => '1995-01-24',
        	'logradouro' => 'Rua Eirunapé',
        	'numero' => '1040',
        	'bairro' => 'União',
        	'cidade' => 'Manacapuru',
        	'estado' => 'Amazonas',
        	'cep' => '69401083',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
