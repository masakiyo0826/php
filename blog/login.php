<?php
require("./global.php");
require(MODEL_PATH. "LoginModel.php");

$obj = new LoginModel();
$obj->error_check();

// 一番最後に移動
require(TEMPLATE_PATH. "login.tmpl");
?>
