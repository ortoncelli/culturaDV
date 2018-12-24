@extends('app')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <h3 style="text-align: center; font-size: 40px">Eventos</h3>
                    <hr style="height:2px; border:none; color:#2e383c; background-color:#2e383c; margin-top: 0px; margin-bottom: 0px;"/>
                    <div>
                        <tbody>
                        <form style="vertical-align: middle;">
                            <div>
                                @if(count(@eventos) > 0)
                                    @foreach($eventos as $evento)
                                        <div style=" min-height: 250px;">
                                            <h3 style="font-weight: bold;">{{$evento->titulo }} </h3>
                                            <img src="{{asset("upload/Eventos/Fotos/". $evento->id . ".jpg")}}"
                                                 style="max-width: 300px; width:170px; margin-left: 6px;
                                                 float:left; margin-right:15px;  border-radius: 8px;">

                                            {!!$evento->texto!!}
                                            <a href="{{url('/download?id='.$evento->id)}}" class="btn btn-success">
                                                <i class="fa fa-file-pdf-o"></i> Edital</a>
                                        </div>
                                        <hr style="height:2px; border:none;  background-color:orange; margin-bottom: 0px;"/>
                                        </br>
                                    @endforeach
                                @endif
                            </div>
                        </form>
                        </tbody>
                    </div>
                    <div class="panel-footer" style="text-align: center ">
                        {!! $eventos->render() !!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection