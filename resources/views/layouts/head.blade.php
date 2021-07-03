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
    <link rel="stylesheet" href="css/index.css">
</head>
<body id="wrapper">
@section('head')
<header>
    <div id="headerborder"></div>
    <div class="header-hidden"></div>
    <div class="menuBar">
      <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="/images/logo&title.png" alt="HITS!LOGO"></a>
      <p>こんにちは!!
@if (Auth::check())
    {{ \Auth::user()->name }}さん</p>
    <p><a href="/auth/logout">ログアウト</a></p>
@else
    <p>ゲストさん</p><br>
    <p><a href="/auth/login">ログイン</a><br><a href="/auth/register">会員登録</a></p>
@endif</div>
</header>
@show