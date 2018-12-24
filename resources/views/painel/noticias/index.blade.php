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
                        Noticias <a href="{{ url('/painel/noticias/create') }}" class="btn btn-primary" style="float: right;">Nova Noticias</a>
                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered">

                            <thead>
                            <tr>
                                <th class="col-sm-1 text-center" style="font-size: 12px">Add Imagem</th>
                                <th class="col-sm-1"             style="font-size: 12px">Titulo</th>
                                <th class="col-sm-4"             style="font-size: 12px">Texto</th>
                                <th class="col-sm-1"             style="font-size: 12px">Data da Noticias</th>
                                <th class="col-sm-1 text-center" style="font-size: 12px">Editar ou Excluir</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if(count(@$itens) > 0)
                                @foreach($itens as $item)
                                    <tr>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/noticias/Imgs?id='.$item->id)}}"
                                               class="btn btn-primary"> <i class="fa fa-photo"></i></a>
                                            <p></p>
                                            <img src="{{asset("upload/noticias/".$item->id .".jpg")}}"
                                                 style="max-width: 80px;"/>
                                        </td>

                                        <td style="vertical-align: middle; font-size: 10px">{!!$item->titulo!!}</td>
                                        <td style="vertical-align: middle; font-size: 10px">{!!$item->texto!!}</td>
                                        <td style="vertical-align: middle; font-size: 10px">{!!$item->dataNoticia!!}</td>

                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/noticias/update?id='.$item->id)}}"
                                               class="btn btn-primary"><i class="fa fa-edit"></i>
                                            </a>
                                            <p></p>
                                            <a href="{{url('painel/noticias/destroy?id='.$item->id)}}"
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