@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Download</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{url('painel/download/update?id='.$item->id.'&idEvento='.Input::get('id'))}}" method="POST">
                                    <input type="hidden" name="idEventos" value="{{$idEvento}}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="form-group">
                                        <label for="titulo">Titulo</label>
                                        <input type="text" class="form-control" name="titulo" value="{{$item->titulo}}"
                                               placeholder="Titulo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="titolo">Ano</label>
                                        <input type="text" class="form-control" name="ano" value="{{$item->ano}}"
                                               placeholder="Ano" required>
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
