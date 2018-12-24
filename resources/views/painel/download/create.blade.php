@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Novo Documento</div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="{{url('painel/download/create?idEventos='.Input::get('id'))}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                <div class="form-group">
                                    <label for="nome">Titulo</label>
                                    <input type="text" class="form-control" name="titulo" placeholder="titulo" required>
                                </div>

                                <div class="form-group">
                                    <label for="nome">Ano</label>
                                    <input type="text" min="0000" max="9999"  value="<?php echo date('Y');?>" class="form-control" name="ano" placeholder="ano" required>
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
