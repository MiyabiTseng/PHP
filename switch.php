<?php
# switch文
/*
if, elseifによる分岐が多く複雑な場合、switch文で書き換えるとシンプルで読みやすいコードにできます。
switch(式)の(式)がcaseの値と一致したとき、そのブロックが実行されます。
caseのどれにも一致しなかった時、defaultのブロックが実行されます。
*/
/*
PHP switch 有點類似 if else 組的效果，通常用在當有一個變數或表達式需要與其他的條件比較，
符合哪個條件才執行的情況下使用，標準的 switch 語句至少包含多組 case 與 break 的組合，
例如當一個變數丟到 switch 流程去跑，會從第一個 case 開始比較，若符合條件就執行程式碼，
接著跳出 switch 語句，若不符合條件則進行下一個 case 的比較。
*/

# if文を用いた条件分岐
/*
$coin = 2;
if ($coin == 0){
echo '表';
}
elseif ($coin == 1){
echo '裏';
}
else{
echo 'エラー';
}
*/

# switch文を用いた条件分岐
/*
$coin = 0;
switch($coin){
case 0:
echo '表';
break;
case 1:
echo '裏';
break;
default:
echo 'エラー';
break;
}
*/

#switch文 - break
/*
caseブロックの最後にはbreak命令を指定します。break命令は現在のブロックから脱出するための命令です。
break命令がないと、後ろに続くcaseブロックが続けて実行されてしまいます。
*/
?>

<?php
/*
$coin = 0;
switch ($coin){
 case 0:
  echo '表'; //実行される
  //break;　　　　　　//→　break 命令がない
 case 1:
   echo '裏'; //実行される
   break;
 default:
  echo 'エラー';
  break;
*/
?>

<?php

$coin = 1;
switch ($coin){
 case 0:
  echo '表';
  //break;　　　　　//→　break 命令がない
 case 1:
   echo '裏'; //実行される
   break; //命令があるため、現在のブロックを抜ける
 default:
  echo 'エラー';
  break;
}
//結果：裏
?>


<?php
#練習
//switch文を用いておみくじのゲームを作ってみましょう。
    // この下で$numに好きな数字を代入してください
    $num = 5;
    $remainder = $num % 3; //$remainderという変数に、%を用いて、$numを3で割ったときの余りを代入してください。
    switch ($remainder){
    case 0:
     echo '大吉です。';
     break;
    case 1:
     echo '中吉です。';
     break;
    case 2:
    echo '小吉です。';
    break;
    default:
    echo '凶です。';
    break;
    }

?>
