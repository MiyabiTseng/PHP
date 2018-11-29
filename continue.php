<?php
#continue
/*
ループそのものを完全に抜けてしまうbreak文に対して、continue文は現在の周だけをスキップし、ループそのものは継続して実行します。
continue文もfor, while, foreachなどの繰り返し文の中で利用できます。
*/
/*
for ($i = 1; $i <= 50; $i++){
if ($i % 3 == 0) {
continue;
}
//$iの値が3の倍数の時、その周のループを終了し、次のループを実行
echo $i.'<br>';　　//改行表示
}
//結果：12457810...（3の倍数以外）
*/
?>


<?php
#練習
/*
for文を用いて1から1000までの数字をechoしてください。
ただし、3の倍数の場合はechoせずにcontinueを用いて次の数字に飛んでください。

echoするときに改行も入れるようにしてください。
*/

for($i=1; $i <=1000; $i++){
if($i % 3 ==0){
continue;
}
echo $i.'<br>';
}
 ?>