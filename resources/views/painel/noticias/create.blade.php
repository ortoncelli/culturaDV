@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Noticias</div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{url('painel/noticias/create')}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                <div class="form-group">
                                    <label for="nome">Titulo</label>
                                    <input type="text" class="form-control" name="titulo" placeholder="titulo" required>
                                </div>

                                <div class="form-group">
                                    <label for="nome">Texto</label>
                                    <textarea class="form-control ckeditor" name="texto" placeholder="texto"
                                              required></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="nome">Data da Noticia</label>
                                    <input type="date" class="dataTable" name="dataNoticia"
                                           placeholder="dataNoticia">
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
