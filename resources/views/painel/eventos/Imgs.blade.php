@extends('painel.app')

@section('content')
    <div class="container" >
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Noticias imagens</div>
                </div>
                <div class="panel-body" >
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <form action="{{url('painel/eventos/Imgs')}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="id" value="{{$upload->id}}">
                                <input type="file" id="file" name="file">
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
