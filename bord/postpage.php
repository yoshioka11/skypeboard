

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <form method="post" action="postpage.php">
        
        タイトル<input type="text" name="title"　><br>
        *Skype ID<input type="text" name="skype_id"><br>
        名前<input type="text" name="name"><br>
        性別<input type="radio" name="man" value="男性"> 男性
        <input type="radio" name="girl" value="女性"> 女性<br>        
        <select name="pref"> 
<?php
//都道府県の配列
$pref = array('北海道', '青森県', '秋田県', '岩手県', '山形県', '宮城県', '新潟県', '福島県', '栃木県', '茨城県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県', '山梨県', '長野県', '富山県', '石川県', '岐阜県', '愛知県', '福井県', '滋賀県', '三重県', '京都府', '大阪府', '奈良県', '和歌山県', '兵庫県', '鳥取県', '岡山県', '広島県', '島根県', '山口県', '香川県', '福島県', '愛媛県', '高知県', '福岡県', '大分県', '佐賀県', '長崎県', '熊本県', '宮崎県', '鹿児島県', '沖縄県','秘密');
//for文でcountで配列の個数分繰り返し処理を行う。
for ($i=0; $i < count($pref); $i++) { 
echo "<option>".$pref[$i]."</option>";
}
?>
        </select>
<br />
        コメント*<textarea name="comment" rows="8" cols="80">
        </textarea><br>
        削除パスワード*<input type="text" name="deleta_pass"><br>
        <input type="submit" value="利用規約に同意して投稿する。">
    </form>
    <body>
        <?php

        ?>
    </body>
</html>
