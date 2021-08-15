<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
  <title>HITS! Sample Works</title>
</head>
<body class="index-body" id="wrapper">
  @extends('layouts.app')

  @section('input')
  <div class="page-top-guidence">
        <p class="page-top-guidence-1">営業情報をご入力ください</p>
        <p class="page-top-guidence-2">*マークは必須項目です</p>
      </div>
    <form action="detail.blade.php" method="POST">
    @csrf
      <div class="user-info">
        <div class="sample-info-item">
          <dl class="sample-info-item-title">
            <dt class="sample-info-item-input">USER</dt>
            <dd class="sample-info-item-input-block">
              <label for="userCompany" class="sample-info-item-input-textbox">会社*</label><br><input type="string" class="sample-info-item-input-text" id="userCompany" name="userCompany" required minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="userPerson" class="sample-info-item-input-textbox">担当者*</label><br><input type="string" class="sample-info-item-input-text" id="userPerson" name="userPerson" required minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="userDepartment" class="sample-info-item-input-textbox">部署</label><br><input type="string" class="sample-info-item-input-text" id="userDepartment" name="userDepartment" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="userLocation" class="sample-info-item-input-textbox">拠点</label><br><input type="string" class="sample-info-item-input-text" id="userLocation" name="userLocation" minlength="1" maxlength="144" size="10">
            </dd>
              <dd class="sample-info-item-input-block">
                <label for="userAddress" class="sample-info-item-input-textbox">住所</label><br><input type="string" class="sample-info-item-input-text" id="userAddress" name="userAddress" minlength="1" maxlength="144" size="10">
              </dd>
              <dd class="sample-info-item-input-block">
                <label for="userTel" class="sample-info-item-input-textbox">Tel</label><br><input type="tel" id="userTel" class="sample-info-item-input-text" name="userTel" minlength="1" maxlength="144" size="10">
              </dd>
              <dd class="sample-info-item-input-block">
                <label for="userEmail" class="sample-info-item-input-textbox">EMAIL</label><br><input type="email" id="userEmail" class="sample-info-item-input-text" name="userEmail" minlength="1" maxlength="144" size="10">
              </dd>
          </dl>
        </div>

        <div class="sample-info-item">
          <dl class="sample-info-item-title">
            <dt class="sample-info-item-input">PRODUCT</dt>
            <dd class="sample-info-item-input-block">
              <label for="productUse" class="sample-info-item-input-textbox">用途*</label><br><input type="string" class="sample-info-item-input-text" id="productUse" name="productUse" required minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="Product" class="sample-info-item-input-textbox">製品*</label><br><input type="string" class="sample-info-item-input-text" id="Product" name="Product" required minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="productName" class="sample-info-item-input-textbox">製品名*</label><br><input type="string" class="sample-info-item-input-text" id="productName" name="productName" required minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="productUnitPrice" class="sample-info-item-input-textbox">単価</label><br><input type="int" class="sample-info-item-input-text" id="productUnitPrice" name="productUnitPrice" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="productCurrency" class="sample-info-item-input-textbox">通貨</label><br><input type="string" class="sample-info-item-input-text" id="productCurrency" name="productCurrency" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="productQuantity" class="sample-info-item-input-textbox">数量</label><br><input type="int" class="sample-info-item-input-text" id="productQuantity" name="productQuantity" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="productUnit" class="sample-info-item-input-textbox">数量単位</label><br><input type="string" class="sample-info-item-input-text" id="productUnit" name="productUnit" minlength="1" maxlength="144" size="10">
            </dd>
          </dl>
        </div>

        <div class="sample-info-item">
          <dl class="sample-info-item-title">
            <dt class="sample-info-item-input">SAMPLE</dt>
            <dd class="sample-info-item-input-block">
              <label for="sampleProductName" class="sample-info-item-input-textbox">製品名*</label><br><input type="string" class="sample-info-item-input-text" id="sampleProductName" name="sampleProductName" required minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="sampleEvaluateSchedule" class="sample-info-item-input-textbox">評価時期*</label><br><input type="string" class="sample-info-item-input-text" id="sampleEvaluateSchedule" name="sampleEvaluateSchedule" required minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="sampleQuantity" class="sample-info-item-input-textbox">数量*</label><br><input type="int" class="sample-info-item-input-text" id="sampleQuantity" name="sampleQuantity" required minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="sampleUnit" class="sample-info-item-input-textbox">数量単位</label><br><input type="string" class="sample-info-item-input-text" id="sampleUnit" name="sampleUnit" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="sampleShape" class="sample-info-item-input-textbox">形状</label><br><input type="string" class="sample-info-item-input-text" id="sampleShape" name="sampleShape" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="samplePurchasePrice" class="sample-info-item-input-textbox">仕入額</label><br><input type="int" class="sample-info-item-input-text" id="samplePurchasePrice" name="samplePurchasePrice" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="sampleSellPrice" class="sample-info-item-input-textbox">販売額</label><br><input type="int" class="sample-info-item-input-text" id="sampleSellPrice" name="sampleSellPrice" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="sampleAssesment" class="sample-info-item-input-textbox">評価額</label><br><input type="int" class="sample-info-item-input-text" id="sampleAssesment" name="sampleAssesment" minlength="1" maxlength="144" size="10">
            </dd>
          </dl>
        </div>

        <div class="sample-info-item">
          <dl class="sample-info-item-title">
            <dt class="sample-info-item-input">PROCEED</dt>
            <dd class="sample-info-item-input-block">
              <label for="proceedUpdateDate" class="sample-info-item-input-textbox">更新日*</label><br><input type="date" id="proceedUpdateDate" name="proceedUpdateDate" required minlength="1" maxlength="144">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="proceedUpdateSchedule" class="sample-info-item-input-textbox">更新時期*</label><br><input type="date" id="proceedUpdateSchedule" name="proceedUpdateSchedule" required minlength="1" maxlength="144" >
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="proceedPerson" class="sample-info-item-input-textbox">記入者*</label><br><input type="string" class="sample-info-item-input-text" id="proceedPerson" name="proceedPerson" required minlength="1" maxlength="144">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="proceedEstimatedMP" class="sample-info-item-input-textbox">見込時期</label><br><input type="month" id="proceedEstimatedMP" name="proceedEstimatedMP" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="proceedAccuracy" class="sample-info-item-input-textbox">確度</label><br><input type="string" class="sample-info-item-input-text" id="proceedAccuracy" name="proceedAccuracy" minlength="1" maxlength="144" size="10">
            </dd>
          </dl>
        </div>

        <div class="sample-info-item">
          <dl class="sample-info-item-title">
            <dt class="sample-info-item-input">RELATIONS</dt>
            <dd class="sample-info-item-input-block">
              <label for="relationsTeam" class="sample-info-item-input-textbox">チーム</label><br><input type="string" class="sample-info-item-input-text" id="relationsTeam" name="relationsTeam" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="relationsInternalOthers" class="sample-info-item-input-textbox">社内：その他</label><br><input type="string" class="sample-info-item-input-text" id="relationsInternalOthers" name="relationsInternalOthers" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="relationsSupplier" class="sample-info-item-input-textbox">社外：仕入先</label><br><input type="string" class="sample-info-item-input-text" id="relationsSupplier" name="relationsSupplier" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="relationsCustomer" class="sample-info-item-input-textbox">社外：得意先</label><br><input type="string" class="sample-info-item-input-text" id="relationsCustomer" name="relationsCustomer" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="relations-external-other" class="sample-info-item-input-textbox">社外：その他</label><br><input type="string" class="sample-info-item-input-text" id="relations-external-other" name="relations-external-other" minlength="1" maxlength="144" size="10">
            </dd>
            <dd class="sample-info-item-input-block">
              <label for="relationsSharedHistory" class="sample-info-item-input-textbox">情報共有履歴</label><br><input type="date" id="relationsSharedHistory" name="relationsSharedHistory" minlength="1" maxlength="144" size="10">
            </dd>
          </dl>
        </div>
        <div class="sample-info-item">
          <dt class="sample-info-item-input">コメント</dt>
          <dd>
           <input type="string" id="sampleComment" name="sampleComment" minlength="0" maxlength="2000" width="700">
        </dd>
        </div>
        <div class="sample-info-item">
          <dt class="sample-info-item-input">写真</dt>
          <dd class="sample-info-item-input-block">
            <input type="image" id="samplePicture" name="samplePicture" required alt="samplePicture">
          </dd>
        </div>

        <div class="buttons">
          <input class="submit-signin-info" type="submit" value="Go Confirm">
          <input class="get-back-button" type="button" value="Get Back">
        </div>
      </div>
    </form>
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