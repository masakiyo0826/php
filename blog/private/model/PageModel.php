<?php

// requireで呼んでくる
require_once(MODEL_PATH. "BaseModel.php");
require_once(MODEL_PATH. "BlogPostsSqlModel.php");


// データベースにアクセスしてデータを引っ張ってくる
class PageModel{
	const MAX_PAGE = 10;
	var $blog = array();

	  function main(){
	  	// ここでエラーを出力をしている
	    cLog("PageModel.main() Start");

	    // 三項演算子でページを取得
	    $page = isset($_GET["page"]) ? $_GET["page"] : 0;
	    cLog("page=". $page);
	    // $page = self::MAX_PAGE * $page;

	    $start = 0;
	    if ($start > 1) {
	    	$start = (self::MAX_PAGE * $page - 10) - 10;
	    }

	    $obj = new BlogPostsSqlModel;
	    $this->blog = $obj->get_blog_posts($start, self::MAX_PAGE);

	    // $res = $PostObj->get_blog_posts();
	    // echo print_r($res, true);
	    var_dump($res);
	  }

}

?>
