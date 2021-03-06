<?php
require_once(MODEL_PATH. "BaseModel.php");
require_once(MODEL_PATH. "LoginSqlModel.php");

class LoginModel {
  use BaseModel;

  var $id = ""; // id
  var $pw = ""; // password
  var $message = ""; 
  function __construct(){
    $this->id = isset($_POST["id"]) ? $_POST["id"] : "";
    $this->pw = isset($_POST["pw"]) ? $_POST["pw"] : "";
  }

  function error_check(){
    $err = isset($_GET["err"]) ? $_GET["err"] : "";
    if($err == "1"){
      $this->message = "ログインに失敗しました";
    }else if($err == "2"){
      $this->message = "ログインしてください。";
    }

  }

  function main(){
    $obj = new LoginSqlModel();
    // ユーザーID取ってる
    $res = $obj->get_users($this->id);
    // echo print_r($res, true);
    // exit();
    if(count($res) === 0){
      echo "hoge";
      exit();
      header('location: ./login.php?err=1');
      exit();
    }

    // crypt("password", '3r')
    // echo "入力値：". crypt($this->pw, '3r'). "<br/>";
    // echo "照合元：". $res[0]['password']. "<br/>";
    // exit();

    if(crypt($this->pw, '3r') === $res[0]['password']){
      session_start();
      $_SESSION['status'] = 'login';
      $_SESSION['user_id'] = $res[0]['id'];
      header('location: ./page/page.php');
      exit();
    }else{
      header('location: ./login.php?err=1');
      exit();
    }

  }

}

?>
