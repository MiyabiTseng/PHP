<?php
# while文
/*
while文もfor文と同様に、繰り返し処理の一つです。
条件式を指定し、それがtrueの間、処理が繰り返し実行されます。
for文の時のように変数$iが自動的に増えていかないため、ここではループのたびに「$i ++;」を行っています。
*/

$i = 1; //1.初期化
while ($i <= 100){//2.ループの条件
echo $i;//3.繰り返す処理
$i++;  //4.変数の更新
}

 /*
 繰り返し処理の流れ
 1ー＞2ー＞3ー＞4→2.....
 */

 ?>

<?php
# 無限ループ
/*
無限ループとは条件式が何周してもtrueのままで、永遠に終了しないループのことです。
無限ループはコンピューターに極端な負担を与えてしまうため、
ループ処理を記述する際は条件式がどこかでfalseになるように気をつけなければいけません。
*/
/*
$i = 1;
while ($i <= 100){
//$i <= 100　→　条件式が常にtrueになる為、無限にループが続く　
  echo $i;

}
*/
?>

<?php
# 練習
//ループを管理するための変数を定義しましょう。
//while文と変数$iを用いて、2から100までの偶数をechoしてください。

$i = 2;
while( $i <=100){
if ($i % 2 ==0)
echo $i.'<br>';
$i++;
}

 ?>
