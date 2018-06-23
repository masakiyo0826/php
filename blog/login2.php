<?php
// パスが変にならないように最初に読み込む
// このファイル自体をコントローラーという
require("./global.php");
require(MODEL_PATH. "LoginModel.php");
// require(TEMPLATE_PATH. "login.tmpl");

$obj = new LoginModel();
$obj->main();

// var_dump($res);
// echo $obj->$res;

?>
