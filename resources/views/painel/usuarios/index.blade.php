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
                        Usuários
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th class="col-sm-1 text-center">#</th>
                                <th class="col-sm-5">Nome</th>
                                <th class="col-sm-5">E-mail</th>
                                <th class="col-sm-1 text-center">#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count(@$itens) > 0)
                                @foreach($itens as $item)
                                    <tr>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/usuarios/update?id='.$item->id)}}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td style="vertical-align: middle;">{{$item->name}}</td>
                                        <td style="vertical-align: middle;">{{$item->email}}</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/usuarios/destroy?id='.$item->id)}}" class="btn btn-danger btn-destroy">
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
