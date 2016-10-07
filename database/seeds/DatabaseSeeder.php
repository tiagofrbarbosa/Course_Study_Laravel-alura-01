<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use estoque\Categoria;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CategoriaTableSeeder');
	}

}


class CategoriaTableSeeder extends Seeder{
	public function run(){
		Categoria::create(['id' => '1', 'nome' => 'Sem Categoria']);
		Categoria::create(['nome' => 'ELETRÔNICOS']);
		Categoria::create(['nome' => 'ELETRODOMESTICOS']);
		Categoria::create(['nome' => 'OUTROS']);
	}
}