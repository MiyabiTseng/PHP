<?php
# foreach
/*
foreach文とは、配列または連想配列に対して、先頭のデータから順に繰り返し処理を行うための命令です。
以下のように配列のデータを１つずつ取り出して処理を行うことが出来ます。
「as」の後ろの変数に、ループの度にデータが先頭から順に代入されていきます。
*/
$data = array ('東京','大阪','京都');
foreach ($data as $value){
echo $value.'<br>';
}
//結果：東京　大阪　京都
 ?>

 <?php
# foreachの書き方（１）
/*
foreach文では、配列内のデータが順次「キー変数」、「値変数」に代入され、それに対して処理が繰り返し適用されます。
「キー変数」には、配列のときはインデックス番号が、連想配列のときはキーが代入されます。
ただし、「キー変数」の部分は省略可能です。
*/
/*
foreach(配列 as 値変数){
        ---or 連想配列
    繰り返したい処理;
}
foreach(配列 as キー変数　=> 値変数){
               ------>省略可能
繰り返したい処理;
}
*/

#foreachの書き方（２）
/*
foreach文は理解しにくいので少し例を見てみましょう。 図の配列は、果物の名前を「キー」として、その色を「値」として保持している連想配列です。
1周目のループでは$keyに'Apple'、$valueに'Red'が、２周目のループでは$keyに'Banana'、$valueに'Yellow'が入っています。
*/

$colors = array(
'apple' => 'red',
'Banana'=> 'Yellow',
'Grape' => 'Purple'
//一周目のループでは、$key = 'apple'
//                 $value = 'red' となる

);
foreach ($colors as $key => $value){
echo $key.':'.$value.'<br>';
}
//結果：Apple:red Banana:Yellow Grape:Purple
  ?>

<?php
#練習
/*
エディタ上に$scoresという連想配列が用意されています。
連想配列$scoresのキーを変数$key、値を変数$valueとするforeach文を書いてください。
各教科の点数が、「数学は70点です。」のように出力されるようechoしてください。
*/
$scores = array(
'数学' => 70,
'英語' => 90,
'国語' => 80);
foreach($scores as $key  => $value)
echo $key.'は'.$value.'点です。'
//結果：数学は70点です。英語は90点です。国語は80点です。
?>
