<?php
require("../global.php");
require(MODEL_PATH. "admin/AdminBlogPostsModel.php");
require(MODEL_PATH. "SessionCheckModel.php");

$obj = new AdminBlogPostsModel();
$obj->main();
cLog("test");
require(TEMPLATE_PATH. "admin/blog_posts_list.php");
?>