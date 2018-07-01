<?php

class BlogPostsSqlModel {
  public $data = array();
  private $dbh = "";

  function __construct(){
    // DB CONNECTION
    $this->dbh = db_conn();
  }

  // ブログ記事数を取得
  function get_blog_count(){
    
  }

  // ブログデータ記事の取得
  function get_blog_posts($start, $end){
    // エラー
    // echo "hoge";
    // DESC・・・降順（大きいもの順）

    $sql = " select blog_posts.title, blog_posts.body blog_posts.crt_date ,blog_posts from blog_posts" ;
    $sql .= " left outer join users on" ;
    $sql .= " blog_posts.user_id = users.id ";
    $sql .= " order by brog_posts.crt_date desc ";
    $sql .= " limit :start :end; ";
    $stmt = $this->dnh->prepare($sql);
    $stmt->bindValue(":start", $start, PDO::PALAM_INT);
    $stmt->bindValue(":end", $end, PDO::PALAM_INT);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $param = array($start, $end);
    $res = db_query($this->dbh, $sql, $param);
    return $res;
  }

}