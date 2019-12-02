<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;
use App\artigos;

class artigoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('artigo.create');
    }
    public function store(Request $request)
{
                    /*
                $table->string('nome');
                $table->string('email')->unique();
                $table->string('endereço');
                $table->string('uf');
                $table->string('cidade');
                */ 
    //faço as validações dos campos
    //vetor com as mensagens de erro
    $messages = array(

        'titulo.required' => 'É obrigatório um titulo',
        'descricao.required' => 'É obtigatório informar uma descricao',
        'data.required' => 'É obrigatório uma data',
        'orientador.required' => 'É obrigatório um orientador',
        'banca1.required' => 'É obrigatório uma banca',
        'banca2.required' => 'É obrigatório uma banca2',
        'resultado.required' => 'É obrigatório um resultado',        
        

    );
    //vetor com as especificações de validações
    $regras = array(
        'titulo' => 'required|string|max:255',
        'descricao' => 'required',
        'data' => 'required',
        'orientador' => 'required',
        'banca1' => 'required',
        'banca2' => 'required',
        'resultado' => 'required',
        
        //'carro_id' => 'required'
        
        
        
    );
    //cria o objeto com as regras de validação
    $validador = Validator::make($request->all(), $regras, $messages);
    //executa as validações
    if ($validador->fails()) {
        return redirect('/home')
        ->withErrors($validador)
        ->withInput($request->all);
    }
    
    //se passou pelas validações, explode request e coloca em um array...

    //se passou pelos array, processa e salva no banco...
    $obj_Artigo = new artigos();
    $obj_Artigo->titulo = $request['titulo'];
    $obj_Artigo->descricao = $request['descricao'];
    $obj_Artigo->data = $request['data'];
    $obj_Artigo->empresa = $request['empresa'];
    $obj_Artigo->orientador = $request['orientador'];
    $obj_Artigo->banca1 = $request['banca1'];
    $obj_Artigo->banca2 = $request['banca2'];
    $obj_Artigo->resultado = $request['resultado'];
    $obj_Artigo->save();
   /* $obj_AtendimentoProduto = new atendimento_produto();
    $obj_AtendimentoProduto->produto_id = $produto;
    $obj_AtendimentoProduto->quantidade = $request['quantidade'];
    $obj_AtendimentoProduto->preco_unitario = $preco_unitario;
    $obj_AtendimentoProduto->atendimento_id = $obj_Atendimento->id;
    $obj_AtendimentoProduto->save(); */

    /* 
            
            'produto_id' => 1,
            'quantidade' => 2,
            'preco_unitario' => 4.00,
            'atendimento_id' => 1
        
    */
    return redirect('/home')->with('success', 'Artigo criado com sucesso!!');
}

public function list()
    {

        $artigos = artigos::all();

        return view('artigo.list', ['result' => $artigos]);
    }
    
}
