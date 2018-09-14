
<?php

$my_Con = mysql_connect("localhost","root","1234567");

if (!$my_Con) {
  echo "MYSQLの接続に失敗しました";
} else {
  echo "MYSQLの接続に成功しました！";
}

 ?>
