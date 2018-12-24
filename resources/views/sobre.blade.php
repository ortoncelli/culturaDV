@extends('app')
@section('content')
    <section class="site-sobre">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <!--<h3 style="text-align: center; font-size: 40px">Sobre</h3>
                    <hr style="height:2px; border:none; color:#2e383c; background-color:#2e383c; margin-top: 0px; margin-bottom: 0px;"/>-->
                    <p>{!! $sobre->texto !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection