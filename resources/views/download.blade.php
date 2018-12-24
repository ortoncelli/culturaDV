@extends('app')
@section('content')
    <section>
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
                </br>
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edital
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="col-sm-3">Download</th>
                                    <th class="col-sm-5">Evento</th>
                                    <th class="col-sm-2">Ano</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count(@$edital) > 0)
                                    @foreach($edital as $editalEvento)
                                        <tr>
                                            <td style="vertical-align: middle;">
                                                @if($editalEvento->arquivo != "")
                                                <a href="{{url('upload/Eventos/Arquivos/'.$editalEvento->arquivo)}}"><i
                                                            class="fa fa-download"></i> Download </a>
                                                    @Else
                                                        Não existe Edital Cadastrado
                                                @endif
                                            </td>
                                            <td style="vertical-align: middle;">{{$editalEvento->titulo}}</td>
                                            <td style="vertical-align: middle;">{{$editalEvento->ano}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="panel-footer"  style="text-align: center ">
                            {!! $edital->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection