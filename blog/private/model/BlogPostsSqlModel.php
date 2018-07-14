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
    $sql = "select count(*) as cnt from blog_posts;";
    $param = array();
    $res = db_query($this->dbh, $sql, $param);
    return $res[0]["cnt"];
  }

  // ブログデータ記事の取得
  function get_blog_posts($start, $end){
    // デバックするとき echo "hoge";
    // DESC・・・降順（大きいもの順）

    // 半角スペースは結合したときにバグにならないように
    $sql  = " select ";
    $sql .= " blog_posts.title, ";
    $sql .= " blog_posts.body, ";
    $sql .= " blog_posts.crt_date, ";
    $sql .= " blog_posts.id as blog_id, ";
    $sql .= " users.handle ";
    $sql .= " from blog_posts ";
    $sql .= " left outer join users on ";
    $sql .= " blog_posts.user_id = users.id ";
    $sql .= " order by blog_posts.crt_date desc ";
    $sql .= " limit :start, :end; ";
    $stmt = $this->dbh->prepare($sql);
    $stmt->bindValue(':start', $start, PDO::PARAM_INT);
    $stmt->bindValue(':end', $end, PDO::PARAM_INT);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($res);

    //$param = array($start, $end);
    //$param = array(10);
    //$res = db_query($this->dbh, $sql, $param);
    return $res;
  }

  // ブログ記事を作成
  function setBlogPosts() {

    $user_id = $_SESSION["user_id"];
    $title = $POST["title"];
    $body = $POST["body"];

    $sql = " insert into blog_posts ";
    $sql .= " (title, body, user_id, crt_date) values ";
    $sql .= " (:title, :body, :user_id, now() ) ";

    $stmt = $this->dbh->prepare($sql);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':body', $body, PDO::PARAM_STR);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);

    $stmt->execute();
    //var_dump($res);

    return 0;
  }

}