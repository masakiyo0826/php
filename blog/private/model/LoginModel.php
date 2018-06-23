<?php
require_once(MODEL_PATH. "BaseModel.php");
require_once(MODEL_PATH. "LoginSqlModel.php");

class LoginModel {
  use BaseModel;

  var $id = ""; // id
  var $pw = ""; // password
  var $message = ""; // message


  function __construct(){
    $this->id = isset($_POST["id"]) ? $_POST["id"] : "";
    $this->pw = isset($_POST["pw"]) ? $_POST["pw"] : "";
  }

  function error_check() {
    echo "error_check() start";
    $err = isset($_GET["err"]) ? $_GET["err"] : "";
    // $errに1が入ってたら
    if ($err == "1") {
      echo "error_check";
      $this->message = "ログインに失敗しました！";
    } else if ($err == "2"){
      echo "error_check";
      $this->message = "ログインしてください。";
    }
  }

  function main(){
    $obj = new LoginSqlModel();
    // echo $this->id."<br/>";
    $res = $obj->get_users($this->id);
    echo "";
    // echo print_r($res, true);

    // データがないとき0
    // エラーだったらerrパラメータに1を渡す
    if(count($res) === 0){
      // htmlが出される前
      header('location: ./login.php?err=1');

      exit();
      // $this->message = "ログイン出来ませんでした";
    }
    // getで飛ばすlogin header関数 phpでリダイレクトする方法

    // ハッシュ化されたもの



    // password_hash("password", "3r"). "\n";
    // echo "入力値": ".crypt($this->px, 3r)"

    // echo $res[0]['password'];


    // crypt("password", '3r')
    // echo "入力値：". crypt($this->pw, '3r'). "<br/>";
    // echo "照合元：". $res[0]['password']. "<br/>";

    if (crypt($this->pw, '3r') === $res[0]['password']) {
      session_start();
      $_SESSION['status'] = 'login';
      header('location: ./page.php'); // ログイン後のページ
      exit();
    } else {
      header('location: ./login.php?err=1');
      exit();
    }

  }

}

?>
