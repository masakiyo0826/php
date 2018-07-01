<?php

// 本ファイルはコントローラー


// 定数
define("KURIRIN", "クリリン");
define("ZABON", "サーボン");
// define("SYENRON", "シェンロン");
define("JYUROKUGOU", "16号（人造人間）");
define("SERUJYUNIA", "セルジュニア");


// 各コンポーネントphpを呼ぶ
require("human.php");
require("saiyajin.php");
require("yamucya.php");
require("bejita.php");
require("gokuu.php");
require("supergokuu.php");
require("gohan.php");
require("supergohan.php");


// オブジェクト化・インスタンス
$human = new human();
$human->tatakau();
$human->kougeki();
$human->result();
echo "<br>";
echo "<br>";

$saiyajin = new saiyajin();
$saiyajin->tatakau();
$saiyajin->kougeki();
$saiyajin->result();
echo "<br>";
echo "<br>";

$yamucya = new yamucya();
$yamucya->tatakau();
$yamucya->kougeki();
$yamucya->result();
echo "<br>";
echo "<br>";

$bejita = new bejita();
$bejita->tatakau();
$bejita->kougeki();
$bejita->result();
echo "<br>";
echo "<br>";

$gokuu = new gokuu();
$gokuu->tatakau();
$gokuu->ikari(ZABON);
$gokuu->kougeki();
$gokuu->result();
echo "<br>";
echo "<br>";

$supergokuu = new supergokuu();
$supergokuu->tatakau();
$supergokuu->ikari(KURIRIN);
$supergokuu->kougeki();
$supergokuu->result();
echo "<br>";
echo "<br>";

$gohan = new gohan();
$gohan->tatakau();
$gohan->ikari(SERUJYUNIA);
$gohan->kougeki();
$gohan->result();
echo "<br>";
echo "<br>";

$supergohan = new supergohan();
$supergohan->tatakau();
$supergohan->ikari(JYUROKUGOU);
$supergohan->kougeki();
$supergohan->result();
echo "<br>";
echo "<br>";


?>