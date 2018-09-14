



 <!DOCTYPE html>
 <html lang=ja dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>データベース入門</title>
   </head>
   <body>
     <?php
     //--- MYSQLへ接続 ---//
     //$my_Con = mysqli_connect("localhost","TakafumiSato","1234567", "bbsdata");
     $dbh = new PDO("mysql:host=localhost;dbname=bbsdata","TakafumiSato","1234567");

     if (!$dbh) {
       die("MYSQLの接続に失敗しました");
     } else {
       echo "MYSQLの接続に成功しました！";
     }

     //$my_query = mysqli_query($my_Con, "SELECT * FROM usertable");
     $sth = $dbh->query("SELECT * FROM usertable");

     if (!$sth){
      die("データベースの取得に失敗しました");
    } else {
      var_dump($sth);
    }
      ?>
   </body>
 </html>
