<?php

// 便利な組み込み関数

$x = 5.6;
echo ceil($x); // 小数点切り上げ
echo floor($x); // 小数点切り下げ
echo round($x); // 四捨五入
echo rand(1,10); // ランダム

$s1 = "hello";
$s2 = "ねこ";
echo strlen($s1);
echo mb_strlen($s2);
printf("%s - %s - %.3f", $s1, $s2, $x);

$colors = ["red","blue","yellow"];
echo count($colors);
echo implode("@",$colors);

 ?>
