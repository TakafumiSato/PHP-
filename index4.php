<?php

// if ğŒ•ªŠò
// ”äŠr‰‰Zq < > <= >= == === != !==
// ˜_—‰‰Zq and &&, or ||

$score = 40;

if ($score > 80) {
  echo "Greate";
} elseif ($score > 60) {
  echo "Good";
} else {
  echo "so so...";
}

// O€‰‰Zq
$max = ($a > $b) ? $a : $b;
if ($a > $b) {
  $max = $a;
} else {
  $max = $b;
}

// Switch ğŒ•ªŠò
$signal = "red";

switch ($signal) {
  case "red":
    echo "stop!!";
    break;
  case "green":
  case "blue":
    echo "go";
    break;
  case "yellow":
    echo "caution!";
    break;
  default:
    echo "wrong signal";
    break;
}
