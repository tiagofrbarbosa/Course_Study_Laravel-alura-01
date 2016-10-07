<?php namespace estoque;
use estoque\Produto;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {

	public function produtos(){
		return $this->hasMany('estoque\Produto');
	}

}
