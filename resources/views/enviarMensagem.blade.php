@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            </br>
            <div>
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
                    <br class="panel panel-default">
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 style="text-align: center; font-size: 30px; color: #5e5e5e;">Contato</h3>
                            <hr style="height:2px; border:none; background-color:#cccccc;"/>
                            </br>
                            <form action="{{url('enviarMensagem')}}" method="POST">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="nome" required>
                                </div>

                                <div class="form-group">
                                    <label for="nome">E-mail</label>
                                    <input type="text" class="form-control" name="email" placeholder="email"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="nome">Texto</label>
                                    <textarea class="form-control" name="texto" placeholder="texto"
                                              required></textarea>
                                </div>

                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope" aria-hidden="true">&nbsp;</i>Enviar Mensagem
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection