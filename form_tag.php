<?php
# formタグ
/*
いよいよお問い合わせフォームをつくっていきます。
フォームの見た目はHTMLでフォームを作成し、入力値を取得するためにPHPを使用していきます。
*/

/*
フォームを作りたい時は、HTMLの<form>タグを用います。
action属性にはデータを渡す先のURLを指定します。
method属性は値の送信の方法で、「get」と「post」のどちらかを指定します。
getの場合は送信される値がURLに表示され、postの場合はURLに表示されません。
*/

/*
        　　// url->送信先 　　getかpost
<form action="url" method="post">
//ここにフォームの内容を書いていく
</form>
*/
 ?>

#練習

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
       <!-- この下にformタグを書いていきましょう -->
       <form action="sent.php" method="post">
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
