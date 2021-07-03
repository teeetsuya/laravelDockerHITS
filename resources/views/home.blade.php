<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>HITS!ホーム</title>
</head>
<body>
</body>
</html>

@extends('layouts.app')

@section('content')
<div class="container">
<div class="main-body, table-overflow">
    <div>

    </div>
    <div class="table-display">
      <table class="table">
        <thead>
          <tr>
            <th scope="col" class="text-nowrap">#</th>
            <th scope="col" class="text-nowrap">USER<br>会社</th>
            <th scope="col" class="text-nowrap">PRODUCT<br>用途</th>
            <th scope="col" class="text-nowrap"><br>製品</th>
            <th scope="col" class="text-nowrap">SAMPLE<br>製品名</th>
            <th scope="col" class="text-nowrap">PROCEED<br>更新日</th>
            <th scope="col" class="text-nowrap"><br>記入者</th>
            <th scope="col" class="text-nowrap"><br>更新予定</th>
            <th scope="col" class="text-nowrap">NOTICE<br>通知</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Ipple.inc.</td>
            <td>スマホ緩衝材</td>
            <td>アクリルフォーム</td>
            <td>ISR-ACF</td>
            <td>2021/03/01</td>
            <td>大沼徹也</td>
            <td>2021/03/15</td>
            <td>❗️</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Doogle LLC</td>
            <td>スマホ緩衝材</td>
            <td>アクリルフォーム</td>
            <td>ISR-ACF</td>
            <td>2021/03/03</td>
            <td>大沼徹也</td>
            <td>2021/03/20</td>
            <td>❗️</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Doogle LLC</td>
            <td>スマホ緩衝材</td>
            <td>アクリルフォーム</td>
            <td>ISR-ACF</td>
            <td>2021/03/03</td>
            <td>大沼徹也</td>
            <td>2021/03/20</td>
            <td>❗️</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="show-corresponse">
      <dt class="show-corresponse-title">Corresponse<br>最近の反応</dt>
      <div class="show-corresponse-display">
        <div class="show-corresponse-display-detail">
          <img  class="show-corresponse-display-account-picture" src="images/account-picture.png" alt="account-picture">
        </div>
      </div>
      <div class="show-corresponse-output">
        <div class="show-corresponse-issue">
          <img  class="show-corresponse-display-account-picture" src="images/account-picture.png" alt="account-picture">
        </div>
        <input class="issue-button" type="submit" value="Send">
      </div>
    </div>
  </div>
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
</div>
@endsection


