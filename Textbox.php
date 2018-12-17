
<!--
# テキストボックス
テキストボックスをつくるにはHTMLの<input type="text">を使います。
name属性は入力された値を取得するときに使う名前です。後にフォームのデータを受け取るときに使用します。
<input>タグは閉じタグが必要ないことに注意しましょう。

因為這邊運用html，所以不用<?php ?>
直接寫程式即可。
另外附註的用法只有 command + /
<!--  -->


<form action="sent.php" method="post">
 Emailを入力してください
 <input type="text" name="email">
                   <!-- 入力データに名前を付ける -->
 </form>

<!--
改行を含む文章のためのテキストボックスをつくるにはHTMLの<textarea>タグを用います。
<input>タグと同様にname属性に、入力値を取得するときに使う名前を指定します。<textarea>タグは閉じタグが必要なので注意してください。
  -->

  <form action="sent.php" method="post">
    內容
    <textarea name="content"></textarea>
        <!--  name->入力データに名前を付ける  textarea->閉じタグが必要 -->
  </form>


<!--練習 -->
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
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <!-- この下にinputタグを書いていきましょう -->
        <input type="text" name="name">

        <div class="form-item">内容</div>
        <!-- この下にtextareaタグを書いていきましょう -->
        <textarea name="body"><</textarea>

      </form>
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
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>

<!--
#post
送信ボタンをつくるには<input type="submit">を用います。
value属性に指定された値がボタン上に表示されます。
-->
<form action="sent.php" method="post">
 Emailを入力してください
 <input type="text" name="email" value="">
 <input type="submit" value="送信">
                        <!--ボタンに表示される値  -->
</form>

<!--
＃post
フォームで送信した値を受け取るには「$_POST」を使用します。
「$_POST」は連想配列になっています。
[ ]の中に、<input>と<textarea>のname属性に指定した値を入れることで、
それぞれの送信した値を受け取ることが出来ます。
-->
<form action="sent.php" method="POST">
  名前を入力してください
  <input type="text" name="name">
　Emailを入力してください
  <input type="text" name="email" value="">
  <input type="submit" value="送信">
</form>
<br>

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
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">

        <div class="form-item">内容</div>
        <textarea name="body"></textarea>

        <!-- この下に送信ボタンを作りましょう -->
       <input type="submit" value="送信">

      </form>
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
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>
