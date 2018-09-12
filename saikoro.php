
<?php

$dice1 = mt_rand(1,6);
$dice2 = mt_rand(1,6);

 ?>

 <!DOCTYPE html>
 <html lang="ja" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>サイコロ</title>
   </head>
   <body>
     <h1>サイコロ</h1>
     <p>
       サイコロの目は「<?php echo "$dice1"; ?>」と「<?php echo "$dice2"; ?>」でした。
       <?php if ($dice1 == $dice2) : ?>
         ぞろ目です！！
       <?php endif; ?>
     </p>
     <p><a href="<?php $_SERVER["SCRIPT_NAME"]; ?>">もう一度！</p>
   </body>
 </html>
