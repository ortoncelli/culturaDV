<?php namespace App\Http\Controllers;

use App\Download;
use App\Eventos;
use Illuminate\Support\Facades\Storage;
use Input;
use Hash;
use Auth;


class DownloadController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $itens = Download::orderBy('updated_at','DESC') -> where('idEventos','=',Input::get('id'))
        ->paginate(5);

        return view('painel.download.index', compact('itens'));
    }

    public function create()
    {
        $item =  Input::get('id');
        return view('painel.download.create', compact('item'));
    }

    public function create2()
    {
        $create = new Download();
        $create->titulo= Input::get('titulo');
        $create->ano= Input::get('ano');
        $create->idEventos= Input::get('idEventos');
        $create->save();
        return redirect('painel/download/index?id='.Input::get('idEventos'))->with('success', 'Registro adicionado com sucesso!');
    }

    public function update()
    {
        $item = Download::find(Input::get('id'));
        $idEvento = Input::get('idEvento');
        return view('painel.download.update', compact('item','idEvento'));
    }

    public function update2()
    {
        $update = Download::find(Input::get('id'));
        $update->titulo = Input::get('titulo');
        $update->ano = Input::get('ano');
        $update->save();
        return redirect('painel/download/index?id='.Input::get('idEventos'))->with('success', 'Registro Alterdata com sucesso!');
    }

    public function destroy()
    {

        Download::find(Input::get('id'))->delete();
        return redirect('painel/download/index?id='.Input::get('idEvento'))->with('success', 'Registro excluido com sucesso!');
    }

    public function upload()
    {
        $upload = Download::find(Input::get('id'));
        $idEvento = Input::get('idEvento');

        return view('painel.download.DownloadFile', compact('upload','idEvento'));
    }

    public function upload2()
    {

        if (Input::hasFile('file')) {
            Input::file("file")->move("upload/Eventos/Arquivos/",  Input::get('id') . "." . Input::file("file")->getClientOriginalExtension());
            $arquivo = Download::find(Input::get('id'));
            $arquivo->arquivo =  Input::get('id') . "." .  Input::file("file")->getClientOriginalExtension();
            $arquivo->save();


            return redirect('painel/download/index?id='.Input::get('idEvento')) ->with("success", "Arquivo Adicionado com Sucesso");
        } else {
            return redirect('painel/download/DownloadFile')->with("success", "Arquivo não enviado!");
        }
    }

}
