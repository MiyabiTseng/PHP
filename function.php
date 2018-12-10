<?php
# 関数
/*
関数を作るには「function 関数名(){ 処理 }」という書き方をします。
関数名は自由につけることが出来ます。
関数は「関数名()」というように()をつけて呼び出すことができます。
*/

function hi(){
echo 'hello,world!';
}
hi();


/*
函數就像更衣室，人走進去一個樣，走出來是另一個樣。
函數也可以像果汁機，水果、蔬菜、冰塊一起放進去打，出來就變成了冰沙。
PHP程式除了內建數千個函數可供應用以外，工程師也可以自訂函數（function），
自訂函數的功能全憑工程師自身的需求而訂，網路上可以找到許多PHP工程師分享的自訂函數。

《自訂函數 function》
自訂函數是可以天馬行空的，內容可以只是簡短的一行，也可以是大大的數百行。自訂函數只要寫在程式碼中或含入程式碼中，就能隨時調用他。自訂函數的標準格式如下：

function 自訂函數的名稱(){
　子句;
}
*/
function name(){    //自訂函數名稱為name
echo '兎美';
}
name();  //執行 name函數


?>

<?php
myname();  //調用自訂函數的程式碼
function myname(){
  echo "大魔王";
  for ($i = 0; $i < 10; $i++) {
  echo $i;
  }
}
?>

<?php
#円の面積を求める

/*
自分で関数を作成することもできます。
重複する処理を一箇所にまとめることで、コードに変更があった時に関数の中身を変更するだけで全使用箇所に変更を適用することができます。
関数の定義の仕方など、詳しくは次のスライド以降で学習していきましょう。
*/
$radius1 = 3;
echo $radius1 * $radius1* 3;
$radius2 = 5;
echo $radius2 * $radius2* 3;
function printCircleArea($radius){
echo $radius * $radius * 3;
}
# 関数を呼び出す
/*
printCircleArea(3);　//結果：27
printCircleArea(5);　//結果：75
*/
?>

<?php
# 引数
/*
関数を呼び出す際、関数に値を渡すと、関数内でその値を利用することができます。
この値を「引数」と呼びます。引数を関数内で使うには、
それを受け取るための「仮引数」を、関数の定義時に指定しておく必要があります。
仮引数が複数ある場合はカンマ（,）を用いて指定します。
*/
function printSum($num1,$num2){
echo $num1 + $num2;
}
printSum(1,4); // (1,4)=($num1,$num2)
//結果：1+4=5
 ?>



<?php
/*
如果小明沒有特別要求，媽媽會在小明每天上學前，固定準備火腿蛋三明治給小明當早餐。這個照例的行為，就是自訂函數中引數的預設值。

《自訂函數中引數的預設值》

引數的預設值在自訂函數中的寫法如下：

function 自訂函數的名稱(引數=預設值){
　子句;
}
*/
# 範例：
echo '<br>';
function breakfast($food="火腿蛋三明治"){
  if($food=="火腿蛋三明治"){
    echo "小明今天早餐吃".$food."。";
  }else{
    echo "小明今天早餐換個口味，吃".$food."。";
  }
}
breakfast();  //沒有引數時，$food為預設值
echo "<br>";
breakfast("飯糰");  //有引數時，$food為引數
echo '<br>';
 ?>
<?php
#練習
/*
以下の処理をする
helloという名前の関数を定義してください。
Hello, world!とechoする
*/
// 関数helloを定義してください
    function hello(){
    echo 'Hello,world!';
    }
    hello();
    // 関数helloを呼び出してください

/*
以下の処理をする
printRectangleAreaという名前の関数を定義してください。
・1つ目の仮引数を$height
とする
・2つ目の仮引数を$widthとする
・$heightと$widthを掛け算した値をechoする
*/
echo '<br>';
    // 関数printRectangleAreaを定義してください
    function printRectangleArea($height,$width){
    echo $height * $width;
    }
    printRectangleArea(5,10); //結果
    echo '<br>';
    // 引数を(5, 10)としてprintRectangleAreaを呼び出してください
 ?>

 <?php
#戻り値（自訂函數的回傳值）
/*
関数は値を「返す」ことができて、この値のことを戻り値と呼びます。
関数を実行した結果、その関数実行部分が戻り値に置き換わるというイメージです。
戻り値は「return」で指定します。
*/
 function getSum($num1,$num2){
return $num1 + $num2; // 戻り値
 }
 $sum = getSum(1,3);
 echo $sum; //結果：４

 echo '<br>';

/*
連續劇女主角來到拍片現場，劇組人員馬上請造型師幫女主角換裝，換好之後，輪到化妝師進場，接著才正式開拍。
如果換裝、化妝是一個自訂函數，劇組人員要的是女主角通過自訂函數後，得到一個「換裝、化妝完畢的女主角」。
「換裝、化妝完畢的女主角」就是劇組所期待從自訂函數（換裝）返還的回傳值。回傳值在自訂函數中的寫法如下：

function 自訂函數的名稱(引數){
　子句;
　return 回傳值;
}
*/

function dress($who){  //換裝的函數
  $who = "換裝、化妝完畢的".$who;
  return $who;
}
$actor = "女主角";
$actor = dress($actor);  //換裝，把回傳值存入變數$actor。
echo $actor;

 echo '<br>';
  ?>

  <?php
  #練習
 /*
 以下の処理をする
 getCircleAreaという名前の関数を定義してください。
 ・仮引数を$radiusとする
 ・戻り値を「$radius * $radius * 3」とする

 引数を5として関数getCircleAreaを呼び出して、戻り値を変数
 $circleAreaに代入してください。

 $circleAreaをechoしてください。
 */

 // 関数getCircleAreaを定義してください
    function getCircleArea($radius){
    return $radius * $radius *3;
    }
    // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
    $circleArea = getCircleArea(5);
    // $circleAreaをechoしてください
    echo $circleArea;
   ?>
