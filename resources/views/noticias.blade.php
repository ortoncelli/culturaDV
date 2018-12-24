@extends('app')
@section('content')
    <?php
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

    ?>
    <div class="container">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <h3 style="text-align: center; font-size: 40px">Notícias - Atividades Culturais na Região</h3>
                        <hr style="height:2px; border:none; color:#2e383c; background-color:#2e383c; margin-top: 0px; margin-bottom: 0px;"/>
                        <div>
                            <tbody>
                            @if(count(@$noticias) > 0)
                                @foreach($noticias as  $noticia)
                                    <form style="vertical-align: inherit;">
                                        <div style=" min-height: 250px; ">
                                            <h3 style="font-weight: bold;">{{$noticia->titulo }} </h3>
                                            <h5 style="text-align: right; font-weight: bold;">{{ utf8_encode(strftime('%d de %B de %Y', strtotime($noticia->dataNoticia )))}}</h5>
                                            <img src="{{asset("upload/noticias/". $noticia->id . ".jpg")}}"
                                                 style="max-width: 300px; width:300px;float:left;margin-right:15px;margin-bottom:10px;  border-radius: 8px;">
                                            {!!$noticia->texto!!}
                                        </div>
                                        <hr style="height:2px; border:none;  background-color:orange; margin-top: 0px; margin-bottom: 0px;"/>
                                        <br>
                                    </form>

                                @endforeach
                            @endif
                            </tbody>
                        </div>
                        <div class="panel-footer" style="text-align: center ">
                            {!! $noticias->render() !!}
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection