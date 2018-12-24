<?php namespace App\Http\Controllers;

use App\Contatos;
use Input;
use Hash;
use Auth;


class ContatosController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $itens = Contatos::orderBy('id','DESC') -> paginate(10);
        return view('painel.contato.index', compact('itens'));
    }

    public function create()
    {
        return view('enviarMensagem');
    }

    public function create2()
    {
        $create = new Contatos();
        $create->nome = Input::get('nome');
        $create->email = Input::get('email');
        $create->texto = Input::get('texto');
        $create->save();
        return redirect('enviarMensagem')->with('success', 'Mensagem enviada com sucesso!');
    }

    public function destroy()
    {
        Contatos::find(Input::get('id'))->delete();
        return redirect('painel/contato/index')->with('success', 'Mensagem excluido com sucesso!');
    }


}


