<nav class="navbar navbar-default" style="background-color: #fdce0a ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="padding-left:0%!important; padding-top: 0%!important;">
                <img src="{{asset("imgs/logo2.png")}}" style="background-color:#192225; max-height: 50px;">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if (!Auth::guest())
                    <li class="dropdown">
                        <a style="color: #000" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">Usuários <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/painel/usuarios') }}">Listar</a></li>
                            <li><a href="{{ url('/painel/usuarios/create') }}">Adicionar</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

            <ul class="nav navbar-nav">
                @if (!Auth::guest())
                    <li>
                        <a  role="button" style="color: #000" href="{{url('/painel/sobre/update?id=3')}}"
                          >Alterar
                            Sobre</a>
                    </li>
                @endif
            </ul>

            <ul class="nav navbar-nav">
                @if (!Auth::guest())
                    <li>
                        <a  role="button" style="color: #000" href="{{url('/painel/noticias')}}">Notícias</a>
                    </li>
                @endif
            </ul>
            <ul class="nav navbar-nav">
                @if (!Auth::guest())
                    <li>
                        <a  role="button" style="color: #000" href="{{url('/painel/eventos')}}" >Eventos</a>
                    </li>
                @endif
            </ul>


            <ul class="nav navbar-nav">
                @if (!Auth::guest())
                    <li>
                        <a  role="button" style="color: #000" href="{{url('/painel/contato/index')}}" >Mensagens</a>
                    </li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (!Auth::guest())
                    <li class="dropdown">
                        <a style="color: #000" href="#" class="dropdown-toggle" data-toggle="dropdown"
                           role="button"
                           aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav>