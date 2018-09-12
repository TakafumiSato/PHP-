<?php

// �֐�
// ���[�J���ϐ�

$lang = "ruby";

function sayHi($name = "masao") {
  $lang = "PHP";
//  echo "Hi," . $name;
  return "Hi, $name from $lang";
}

// sayHi("masao");
// sayHi("sato");
  $s = sayHi();
  var_dump($s);
  var_dump($lang);

 ?>
