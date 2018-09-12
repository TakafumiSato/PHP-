
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>date.php</title>
  </head>
  <body>
    <?php
      date_default_timezone_set('ASIA/TOKYO');
      $time = date("西暦Y年n月j日 Ah:i");
      printf($time);
     ?>
  </body>
</html>
