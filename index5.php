<?php

// ループ処理
// while
// do ... while
$i = 0;
// while ($i < 10) {
//   echo $i;
//   $i++;
// }

// 後判定
// do{
//   echo $i;
//   $i++;
// } while($i < 10);


// for

for ($i=0; $i < 10; $i++) {
  if ($i === 5) {
    //break;
    continue;
  }
  echo $i;
}
