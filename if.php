<?php
# if文

/*
if文を使うと、条件に応じて処理を分岐することができます。
if文は図のように書きます。
条件が成り立つ場合、｛｝の中の処理が実行されます。
条件が成り立たない場合は処理が実行されません。
*/
$x = 20;
if($x > 10){
echo '$x は10より大きい';
}
 ?>

 <?php
$x = 20;
if($x > 30){
echo '$xは30より大きい';
}

# 数値を比較しよう
/*
先ほどのスライドで出てきた、「>」のような２つの値を比較するための記号を比較演算子と呼びます。
比較した結果は真「true」か偽「false」のどちらかになります。代表的な比較演算子として、図のようなものがあります。

#大小を比べる
<  右辺の方が大きい時　true
<= 右辺の方が大きいまたは等しい時true
>  右辺の方が小さい時　true
>= 右辺の方が小さいまたは等しい時true
#等しいか調べる
== 右辺と左辺が等しい時　true
!= 等しくない時　true
*/

 ?>

<?php
#if文と真偽値
/*
比較演算子を用いて比較した結果はtrueかfalseになります。
trueとfalseは真偽値と呼ばれます。真偽値は文字列や数値といったデータの種類の１つです。
真偽値はtrueとfalseの2つしかありません。
if文は、条件式がtrueの場合if文の中身が実行され、falseの場合は実行されません。
*/
if(true){
echo '条件はtrueです';
}
//結果：条件はtrueです
?>

<?php
$x = 20;
if ($x >30){
echo '$x は30より大きい';//処理が実行されない
}
if ($x >10){
echo '$x は10より大きい';//処理が実行される  
}
 ?>
