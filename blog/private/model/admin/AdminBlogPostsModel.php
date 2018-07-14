<?php
require_once(MODEL_PATH. "BaseModel.php");
require_once(MODEL_PATH. "BlogPostsSqlModel.php");
class AdminBlogPostsModel{
	const MAX_PAGE = 10;
	var $blog = array();
	var $pagination = 0;
	var $mode = "";
	function main(){
	// 裏側で綺麗にやる方法もある
	$this->mode = isset($_POST["mode"]) ? $_POST["mode"] : "none";
	$this->getBlogPostLists();

		switch($this->mode){
		  case "new": // 新規
		    $this->setBlogPosts();
		    break;
		  case "del": // 削除
		    $this->delBlogPosts();
		    break;
		  case "upd": // 更新
		    $this->delBlogPosts();
		    break;
		  default:
		    return 0;
		}
	}

	// 一覧取得
	function getBlogPostLists(){
	  // 三項演算子でページを取得
	  $page = isset($_GET["page"]) ? $_GET["page"] : 0;
	  // cLog("page=". $page);

	  $start = 0;
	  if($page > 1){
	    $start = (self::MAX_PAGE * $page) - self::MAX_PAGE;
	  }

	  $obj = new BlogPostsSqlModel();
	  $this->blog = $obj->get_blog_posts($start, self::MAX_PAGE);

	  // $page_num = count($this->blog);
	  $page_num = $obj->get_blog_count();

	  $this->pagination = ceil($page_num / self::MAX_PAGE);
	}


	// 新規作成
	function setBlogPosts(){
		// 新規作成はここに記載していく
		// echo "setBlogPosts() start";

		$obj = new BlogPostsSqlModel();
		$obj->setBlogPosts();
		// ここの書き方
		header("location: ". PUBLIC_PATH. "admin/blog_posts_list.php");
		exit();
	}

	// 削除
	function delBlogPosts(){
		echo "setBlogPosts() start";
	}

	// 更新
	function updBlogPosts(){
		echo "updBlogPosts() start";
	}
}
?>