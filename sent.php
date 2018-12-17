<?php
/*
這邊不用特別寫,$_POSTを使ったら下面的部分自己在背後處理。
php原本就有的功能
array(
  'name' => 'にんじゃわんこ',
  'email' => 'tseng@aa.com'
);
*/
//print_r($_POST);  //<-加這行的話，在網頁上可以看到背後處理的code(網頁上使用developer tools)

echo $_POST['name'];
echo $_POST['email'];

?>


<!--$_POSTの練習  -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">

      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <!-- nameを受け取りechoしましょう -->
     <?php
     echo $_POST['name'];
     ?>
      <div class="form-item">■ 内容</div>
      <!-- bodyを受け取りechoしましょう -->
   <?php
    echo $_POST['body'];
    ?>
    </div>

  </div>

  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>
