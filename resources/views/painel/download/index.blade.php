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
                        Download de Eventos

                        <a href="{{ url('/painel/download/create?id='.Input::get('id'))}}" class="btn btn-primary"
                           style="float: right;">Novo Documento</a>

                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-sm-2  text-center" style="font-size: 12px; text-align: center">PDF
                                    Edital/Errata
                                </th>
                                <th class="col-sm-5" style="font-size: 12px; text-align: center">Titulo</th>
                                <th class="col-sm-1" style="font-size: 12px; text-align: center">Ano</th>
                                <th class="col-sm-1 text-center" style="font-size: 12px; text-align: center">Editar ou
                                    Excluir
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count(@$itens) > 0)
                                @foreach($itens as $item)
                                    <tr>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/download/DownloadFile?id='.$item->id.'&idEvento='.Input::get('id'))}}"
                                               class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;text-align: center">
                                            <br>{{$item->titulo}}</td>
                                        </td>
                                        <td style="vertical-align: middle; text-align: center; ">{{$item->ano}}</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/download/update?id='.$item->id.'&idEvento='.Input::get('id'))}}"
                                               class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <p></p>
                                            <a href="{{url('painel/download/destroy?id='.$item->id.'&idEvento='.Input::get('id'))}}"
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