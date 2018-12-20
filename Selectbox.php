<!--
＃セレクトボックス
＃セレクトボックスの作り方
セレクトボックスをつくるには図のように<select>タグの中に<option>タグを並べます。
<option>タグの中身が選択肢として表示されます。
-->

<select>
  <option> うさぎ<option/>
  <option> きつね<option/>
  <option> くま<option/>
    　<!-- 表示される値 -->
</select>

<!--
# 選んだ選択肢の値を渡そう
セレクトボックスの値の渡し方を見てみましょう。
<select>タグには「$_POST」で値を受け取るためのname属性を指定します。
<option>タグのvalue属性が送信される値です。
 -->
<form action="sent.php" method="post">
<select name="animal">
   <option value= "rabbit" > うさぎ </option>
   <option value= "fox" > きつね </option>
   <option value= "bear" > くま </option>   　
 </select>
 <input type="submit" value="送信">
</form>

<?php
/*
いよいよ最後の演習になりました！繰り返し処理と変数展開を用いて多数のoptionタグを作りましょう。
ただし、変数展開を用いる際はダブルクォーテーションで囲むようにしましょう。
*/
echo "<select>";
for ($i = 1; $i < 4; $i++){
 echo "<option value='{$i}'>{$i}</option>";
                    //'{$i}'>{$i} ->変数展開
}
echo "</select>";
 ?>
