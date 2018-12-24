<?php namespace App\Http\Controllers;

use App\Sobre;
use Input;
use Hash;
use Auth;

class sobreController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $itens = Sobre::paginate(15);

        return view('painel.sobre.index', compact('itens'));
    }


    public function update()
    {
        $item = Sobre::find(Input::get('id'));

        return view('painel.Sobre.update', compact('item'));
    }

    public function update2()
    {
        $update = Sobre::find(Input::get('id'));
        $update->texto = Input::get('texto');
        $update->save();

        return redirect('painel/sobre/update?id=3')->with('success', 'Registro alterado com sucesso!');
    }


}
