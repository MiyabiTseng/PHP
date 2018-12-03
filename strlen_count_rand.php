<?php
# 関数_strlen
/*
関数とは、あるまとまった処理を行い、値を返すものです。
PHPには便利な関数がもとから組み込まれていて、それらは組み込み関数と呼ばれます。
「strlen」は組み込み関数の1つで、文字列の文字数を返します。
ここで、()の中に与える値を「引数」といいます。
*/

echo strlen('Progate'); // 計算字元長度
   //------>文字列の文字数の返す組み込み関数
//節果:7
?>

<?php
$language = 'CAT';
echo strlen($language); //$language->変数も入れることができる
//結果：3
?>

<?php
#関数_count-配列の要素の数を返す関数
/*
他の組み込み関数も見てみましょう。「count」は配列の要素の数を返す関数です。
「rand」は１つ目の引数と、２つ目の引数の間のランダムな整数を返します。
他にもPHPの組み込み関数は多数ありますが、覚える必要はありません。
目的に沿ってその都度便利な組み込みメソッドがないか検索して調べてみましょう。
*/

$data = array ('東京','大阪','京都');
echo count($data); //count計算組數
  //------>配列の要素の数を返す
//結果：3
 ?>

<?php
#関数_rand-ランダムな整数を返す関数
echo rand(1,10); //由１～１０產生一個隨機的整數
?>
<?php

#練習

$str = 'progate';

    // strlenを用いて$strの長さをechoしてください
    echo strlen('progate');

    echo '<br>';

    $array = array('HTML', 'CSS', 'PHP');

    // countを用いて$arrayの要素数をechoしてください
    echo count($array);

    echo '<br>';

    // randを用いて10から15までのランダムな数字をechoしてください
    echo rand(10,15);

 ?>
