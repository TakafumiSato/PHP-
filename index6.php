<?php

// �z��

// $sales = [
//   "masao" => 200,
//   "sato" => 400,
//   "hoge" => 600,
// ];
// var_dump($sales["sato"]);

$colors = ["red","blue","pink"];
//var_dump($colors[1]);

// foreach

// foreach ($colors as $key => $value) {
//   echo "($key) $value";
// }

// �R�����\��
foreach ($colors as $key => $value) :
  echo "$value";
endforeach;
?>

<ul>
  <?php foreach ($colors as $key => $value) :?>
  <li> <?php echo "$value"; ?> </li>
<?php endforeach; ?>
</ul>
