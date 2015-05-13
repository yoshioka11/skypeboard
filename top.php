<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Skype bord top</title>
    </head>
    <body>
        <h1>Skypebordへようこそ！！</h1>
        <a href="./bord/postpage.php"><button type="button" class="btn btn-default btn-lg">掲示板に書き込む</button></a>
<button type="button" class="btn btn-default btn-lg"></button>
        <?php
        try
{
        //データベースに接続する文
        $dsn = 'mysql:dbname=skypebords;host=localhost';
        $user = 'root';
        $password = '';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->query('SET NAMES utf8');
        
        //ここからsql文
          $sql = 'SELECT * FROM bord1';
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
          
          $dbh= null;

          print '投稿一覧</br></br>';
          
          while(true){
              $rec = $stmt->fetch(PDO::FETCH_ASSOC); //stmtから１レコード取り出している
              
              if($rec==false){  //データがなければbreakで脱出
                  break;
              }
              print $rec['Title_1']."　　";
              print $rec['Skype_name']."　　";
              print $rec['Comment']."　　";
              print '</br>';
          }

    } catch (Exception $ex) {
        
        print 'ただいま障害により大変ご迷惑をおかけしております';
        exit();
        
    }
        
        ?>
    </body>
</html>
