@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Noticias</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{url('painel/noticias/update?id='.Input::get('id'))}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                                    <div class="form-group">
                                        <label for="titulo">Titulo</label>
                                        <input type="text" class="form-control" name="titulo" value="{{$item->titulo}}"
                                               placeholder="Titulo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="texto">Texto</label>
                                        <textarea class="form-control ckeditor" name="texto" placeholder="texto"
                                                  required>{{$item->texto}}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="dataNoticia">Data da Noticia</label>
                                        <input type="date" class="form-control" name="dataNoticia"
                                               value="{{$item->dataNoticia}}"
                                               placeholder="dataNoticia" required>

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save">&nbsp;</i>Salvar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
