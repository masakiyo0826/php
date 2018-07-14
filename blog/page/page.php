<?php
require("../global.php");
require(MODEL_PATH. "PageModel.php");
require(MODEL_PATH. "SessionCheckModel.php");

// session_start();
// if( !isset($_SESSION['status']) ){
//   header("location: ./login.php?err=2");
//   exit;
// }

$obj = new PageModel();
$obj->main();

require(TEMPLATE_PATH. "page/page.tmpl");
?>
