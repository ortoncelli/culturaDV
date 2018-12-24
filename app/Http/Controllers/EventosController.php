<?php namespace App\Http\Controllers;

use App\Eventos;
use App\Services\Upload;
use Input;
use Hash;
use Auth;


class EventosController extends Controller

{
    public function __construct()
{
}

    public function index()
{
    $itens = Eventos:: orderBy('updated_at','DESC') -> paginate(5);

    return view('painel.eventos.index', compact('itens'));
}

    public function create()
{
    return view('painel.eventos.create');
}

    public function create2()
{
    $create = new Eventos();
    $create->texto = Input::get('texto');
    $create->titulo = Input::get('titulo');
    $create->save();
    return redirect('painel/eventos')->with('success', 'Registro adicionado com sucesso!');
}

    public function update()
{
    $item = Eventos::find(Input::get('id'));
    return view('painel.eventos.update', compact('item'));
}

    public function update2()
{
    $update = Eventos::find(Input::get('id'));
    $update->texto = Input::get('texto');
    $update->titulo = Input::get('titulo');
    $update->save();
    return redirect('painel/eventos' )->with('success', 'Registro alterado com sucesso!');
}

    public function destroy()
{
    Eventos::find(Input::get('id'))->delete();
    return redirect('painel/eventos')->with('success', 'Registro excluido com sucesso!');
}

    public function upload()
{
    $upload = Eventos::find(Input::get('id'));

    return view('painel.eventos.Imgs', compact('upload'));
}

    public function upload2(Upload $upload)
    {

        if (Input::hasFile('file')) {
            $upload->resize(Input::file("file"), public_path() . "/upload/Eventos/Fotos/" . Input::get('id') . ".jpg", getenv("TamW"), getenv("TamH"));
            return redirect("painel/eventos")->with("success", "Imagem enviada!");

        } else {
            //return redirect(getenv("painel.noticias"))->with("error", "Imagem não enviada!");
        }

    }


}

