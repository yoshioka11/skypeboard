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
    <body>
        <?php
        try {
        $ID = 1;//まだてすと段階なのでIDだけ初期化しておく。   
         
        $title = $_POST['title'];
        $skype_id = $_POST['skype_id'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $pref = $_POST['pref'];
        $comment = $_POST['comment'];
        $deleta_pass = $_POST['deleta_pass'];
        //scriptでの悪質なのをふせぐメソッド
        $title = htmlspecialchars($title);
        $skype_id = htmlspecialchars($skype_id);
        $name = htmlspecialchars($name);
        $sex = htmlspecialchars($sex);
        $pref = htmlspecialchars($pref);
        $comment = htmlspecialchars($comment);
        $deleta_pass = htmlspecialchars($deleta_pass);
        
        $dea = '2014-07-26 00:00:00';
        
        //データベースに接続する構文
        $dsn = 'mysql:dbname=skypebords;host=localhost';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->query('SET NAMES utf8');
        
        //ここからSQL文を書く。
        $sql = 'INSERT INTO bord1(Title_1,Skype_ID,Skype_name,Pref,Sex,Comment,Deleta_pass,Dates) VALUES(?,?,?,?,?,?,?,?)';
        $stmt = $dbh->prepare($sql);
        //ここから代入していくが左のカラム名から順番に入れていく事になる。
        $data[] = $title;
        $data[] = $skype_id;
        $data[] = $name;
        $data[] = $pref;
        $data[] = $sex;
        $data[] = $comment;
        $data[] = $deleta_pass;
        $data[] = $dea;
        $stmt->execute($data);
        
        //切断↓
        $dbh = null;
        
        print '掲示板に書き込みました！！';
        
        
    } catch (Exception $ex) {
        
        print 'ただいま障害により大変ご迷惑をおかけしております';
        exit();
        
    }
        ?>
        <a href="../top.php">戻る</a>
    </body>
</html>
