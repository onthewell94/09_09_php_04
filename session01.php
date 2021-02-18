<?php
// session変数を定義して値を入れよう
// サーバに変数を保存する！
// $_SESSION['変数名']で宣言．
// 例
session_start(); // session変数を使用する場合も必須！
$_SESSION['num'] = 100; // session変数の宣言
$_SESSION['name'] = "ir";
echo $_SESSION['num'];
?>
