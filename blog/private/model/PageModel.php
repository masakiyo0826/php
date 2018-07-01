<?php

// requireで呼んでくる
require_once(MODEL_PATH. "BaseModel.php");
require_once(MODEL_PATH. "BlogPostsSqlModel.php");


// データベースにアクセスしてデータを引っ張ってくる
class PageModel{
	const MAX_PAGE = 10;
	var $blog = array();
	var $pagination = 0;

	  function main(){
	  	// ここでエラーを出力をしている
	    cLog("PageModel.main() Start");

	    // 三項演算子でページを取得
	    $page = isset($_GET["page"]) ? $_GET["page"] : 0;
	    // cLog("page=". $page);

	    // $start = 1にしてelseを書くよりも初期値を$start = 0;
	    $start = 0;
	    if ($page > 1) {
	    	$start = (self::MAX_PAGE * $page) - self::MAX_PAGE;
	    }

	    $obj = new BlogPostsSqlModel();
	    $this->blog = $obj->get_blog_posts($start, self::MAX_PAGE);

	    // $page_num = count($this->blog);
	    $page_num = $obj->get_blog_count();

	    $this->pagination = ceil($page_num / self::MAX_PAGE);
	  }
}

?>
