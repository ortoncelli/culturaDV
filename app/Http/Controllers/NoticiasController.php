<?php namespace App\Http\Controllers;

use App\Noticias;
use App\Services\Upload;
use Input;
use Hash;
use Auth;


class NoticiasController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $itens = Noticias:: orderBy('updated_at','DESC') -> paginate(3);

        return view('painel.noticias.index', compact('itens'));
    }

    public function create()
    {
        return view('painel.noticias.create');
    }

    public function create2()
    {
        $create = new Noticias();
        $create->titulo = Input::get('titulo');
        $create->texto = Input::get('texto');
        $create->dataNoticia = Input::get('dataNoticia');
        $create->save();
        return redirect('painel/noticias')->with('success', 'Registro adicionado com sucesso!');
    }

    public function update()
    {
        $item = Noticias::find(Input::get('id'));
        return view('painel.noticias.update', compact('item'));
    }

    public function update2()
    {
        $update = Noticias::find(Input::get('id'));
        $update->titulo = Input::get('titulo');
        $update->texto = Input::get('texto');
        $update->dataNoticia = Input::get('dataNoticia');
        $update->save();
        return redirect('painel/noticias')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy()
    {
        Noticias::find(Input::get('id'))->delete();
        return redirect('painel/noticias')->with('success', 'Registro excluido com sucesso!');
    }

    public function upload()
    {
        $upload = Noticias::find(Input::get('id'));

        return view('painel.noticias.Imgs', compact('upload'));
    }

    public function upload2(Upload $upload)
    {

        //Input::file('file')->move(public_path() . "/upload/noticias/", Input::get('id') . ".jpg");

        if (Input::hasFile('file')) {
            $upload->resize(Input::file("file"), public_path() . "/upload/noticias/" . Input::get('id') . ".jpg", getenv("TamW"), getenv("TamH"));
            //dd(Input::get('id'));

            return redirect("painel/noticias")->with("success", "Imagem enviada!");

        } else {
            //return redirect(getenv("painel.noticias"))->with("error", "Imagem não enviada!");
        }

    }

}


