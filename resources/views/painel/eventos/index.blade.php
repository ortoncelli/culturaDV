@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-offset-1">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Eventos <a href="{{ url('/painel/eventos/create') }}" class="btn btn-primary" style="float: right;">Novo Evento</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-sm-1 text-center" style="font-size: 12px">Add-Imagen</th>
                                <th class="col-sm-1 text-center" style="font-size: 12px">Add-Anexos</th>
                                <th class="col-sm-2 text-center" style="font-size: 12px">Nome Evento</th>
                                <th class="col-sm-5 text-center" style="font-size: 12px">Texto</th>
                                <th class="col-sm-1 text-center" style="font-size: 12px">Editar ou Excluir</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count(@$itens) > 0)
                                @foreach($itens as $item)
                                    <tr>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/eventos/Imgs?id='.$item->id)}}"
                                               class="btn btn-primary"> <i class="fa fa-photo"></i></a>
                                            <p></p>
                                            <img src="{{asset("upload/Eventos/Fotos/". $item->id . ".jpg")}}"
                                                 style="max-width: 100px;"/>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/download/index?id='.$item->id)}}"
                                               class="btn btn-success">
                                                <i class="fa fa-file-pdf-o"></i>
                                            </a>
                                        </td>
                                        <td style="vertical-align: middle; font-size: 10px">{{$item->titulo}}</td>
                                        <td style="vertical-align: middle; font-size: 10px">{!!$item->texto!!}</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/eventos/update?id='.$item->id)}}"
                                               class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <p></p>
                                            <a href="{{url('painel/eventos/destroy?id='.$item->id)}}"
                                               class="btn btn-danger btn-destroy">
                                                <i class="fa fa-remove"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        {!! $itens->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection