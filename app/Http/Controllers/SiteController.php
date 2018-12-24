<?php namespace App\Http\Controllers;

use App\Download;
use App\Eventos;
use App\Noticias;
use App\Sobre;
use Illuminate\Support\Facades\Input;

class SiteController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * public function __construct()
     * {
     * $this->middleware('guest');
     * }
     */

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    public function sobre()
    {
        $sobre = Sobre::where('id', '=', '3')->first();
        return view('sobre', compact('sobre'));
    }

    public function noticias()
    {
        // Noticias:: orderBy('id','DESC');
        // $noticias = Noticias::paginate(5);
         $noticias = Noticias::orderBy('updated_at','DESC') -> paginate(5);
        return view('noticias', compact('noticias'));
    }
    public function eventos()
    {
        $eventos = Eventos:: orderBy('updated_at','DESC') ->  paginate(5);
        return view('eventos', compact('eventos'));

    }
    public function downloads()
    {

        $edital = Download:: orderBy('updated_at','DESC') -> where('idEventos','=',Input::get('id'))
            ->paginate(10);
        return view('download', compact('edital'));
    }

}
