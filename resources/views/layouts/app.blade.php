<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HITS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
</head>
<body id="wrapper">
<header>
    <div id="headerborder"></div>
    <div class="header-hidden"></div>
    <div class="menuBar">
        <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="/images/logo&title.png" alt="HITS!LOGO"></a>
            <div class="welcomeAccount">
                <p>
                @if (Auth::check())
                    {{ \Auth::user()->name }}さん</p>
                @else
                    <p>ゲストさん</p><br>
                @endif
            </div>
    </div>
</header>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <p>
                            @if (Auth::check())
                                <p><a href="/auth/logout">ログアウト</a></p>
                            @else
                                <p><a href="/auth/login">ログイン</a>
                                <a href="/register">新規登録</a></p>
                            @endif</div>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    MENU
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('home-nonform').submit();">
                                        ホーム
                                    </a>
                                    <form id="home-nonform" action="{{ route('home') }}" method="GET" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('input') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('input-form').submit();">
                                        情報入力
                                    </a>
                                    <form id="input-form" action="{{ route('input') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        ログアウト
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            @yield('toppageBody')
            @yield('input')
        </main>
    </div>
<footer>
    <div class="copy-right">
        <small>Copyright &copy;HITS! All Rights Reserved.</small>
    </div>
</footer>
</body>
</html>
