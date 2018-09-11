<?php

// 数値型の演算

// + - * / % **(PHP5.6~)

// $x = 10 % 3; // 1
// $y = 30.2 / 4; // 7.55
// var_dump($x);
// var_dump($y);

// 単項演算子
// $z = 5;
// $z++; // 6
// var_dump($z);
// $z--; // 5
// var_dump($z);

// 代入を伴う演算子
// $x = 5;
// //$x = $x + 2; // 10
// $x *= $x; // 25
// var_dump($x);


// $name = "sato";
// var_dump("Hello $name\nHello again!");
// var_dump("Hello {$name}\nHello again!");
// var_dump("Hello ${name}\nHello again!");
// var_dump('Hello $name\nHello again!');

$s = "Hello" . "World";
var_dump($s);
