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
                        Mensagens
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="col-sm-1">Nome</th>
                                <th class="col-sm-3">E-mail</th>
                                <th class="col-sm-5">Mensagem</th>
                                <th class="col-sm-1 text-center">Excluir</th>
                            </tr>
                            </thead>
                            <tbody >
                            @if(count(@$itens) > 0)
                                @foreach($itens as $item)
                                    <tr>
                                        <td style="vertical-align: middle;">{{$item->nome}}</td>
                                        <td style="vertical-align: middle; font-size: 12px ">{{$item->email}}</td>
                                        <td style="vertical-align: middle; font-size: 12px">{!!$item->texto!!}</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/contato/destroy?id='.$item->id)}}"
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
                    <div class="panel-footer"  style="text-align: center ">
                        {!! $itens->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
