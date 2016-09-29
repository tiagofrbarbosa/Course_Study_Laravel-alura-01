<?php

namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller{

	public function lista(){
		
		$produtos = DB::select('select * from produtos');

		return view('produto.listagem')->with('produtos',$produtos);

	}

	public function mostra(){
		
		$id = request::route('id');
		$resposta = DB::select('select * from produtos where id = ?', [$id]);

		if(empty($resposta)){
			return "Esse produto não existe";
		}

		return view('produto.detalhes')->with('p',$resposta[0]);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(){
		$nome = request::input('nome');
		$descricao = request::input('descricao');
		$valor = request::input('valor');
		$quantidade = request::input('quantidade');

		DB::insert('insert into produtos(nome,valor,descricao,quantidade) values(?,?,?,?)',array($nome,$valor,$descricao,$quantidade));

		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

	}

	public function produtoJSON(){
		$produtos = DB::select('select * from produtos');
		return response()->json($produtos);
	}
}