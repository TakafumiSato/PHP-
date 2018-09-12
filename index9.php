<?php

// クラス
// 継承
// アクセス権
// - private    そのクラス内からのみアクセス可能
// - protected  そのクラス＋親子クラス内からのみ
// - public     どのクラスからでもアクセス可能

/**
 *
 */
class User
{
  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  // final をつけるとオーバーライドできなくなる
  public function sayHi() {
    echo "Hi, i am $this->name!";
  }
}

/**
 *
 */
class AdminUser extends User
{
  public function sayHello() {
    echo "Hello from Admin!";
  }

  public function sayHi() {
    echo "[Admin]Hi, i am $this->name!";
  }
}


$tom = new User("Tom");
$steve = new AdminUser("Steve");
$tom->sayHi();
$steve->sayHi();
//$steve->sayHello();
//$bob = new User("Bob");

//echo "$tom->name";
//$bob->sayHi();
