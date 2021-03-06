<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <title>HITS! Details</title>
</head>
<body class="before-login" id="wrapper">
@extends('layouts.app')

@section('detail')
  <div class="body">
      <div class="page-top-guidence">
      </div>
      <div class="input-info">
        <dl class="sample-info-item">
          <dt class="sample-info-item-title">USER</dt>
          <dd class="sample-info-item-input-show">会社*</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">担当者*</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">部署</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">拠点</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">住所</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">TEL</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">EMAIL</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
        </dl>

        <dl class="sample-info-item">
          <dt class="sample-info-item-title">PRODUCT</dt>
          <dd class="sample-info-item-input-show">用途*</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">製品*</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">単価</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">通貨</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">数量</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">数量単位</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
        </dl>

        <dl class="sample-info-item">
          <dt class="sample-info-item-title">SAMPLE</dt>
          <dd class="sample-info-item-input-show">製品名*</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">評価時期*</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">数量*</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">数量単位</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">形状</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">仕入額</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">販売額</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">評価額</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
        </dl>

        <dl class="sample-info-item">
          <dt class="sample-info-item-title">PROCEED</dt>
          <dd class="sample-info-item-input-show">更新日*</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">記入者*</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">更新時期*</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">見込時期</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">確度</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
        </dl>

        <dl class="sample-info-item">
          <dt class="sample-info-item-title">RELATIONS</dt>
          <dd class="sample-info-item-input-show">チーム</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">社内：その他</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">社外：仕入先</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">社外：得意先</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">社外：その他</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
          <dd class="sample-info-item-input-show">情報共有履歴</dd>
          <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>
        </dl>

        <dt class="sample-info-item-title">コメント</dt>
        <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>

        <dt class="sample-info-item-title">写真</dt>
        <dd class="sample-info-item-input-show, sample-info-item-input-data">入力データを表示</dd>

        <div class="buttons">
          <input class="submit-signin-info" type="submit" value="Go Confirm">
          <input class="get-back-button" type="button" value="Get Back">
        </div>
      </div>
  </div>
  @endsection

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>
</html>