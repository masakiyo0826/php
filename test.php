<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
    	<h1>お問い合わせフォーム</h1>


        <?php
        	// $_GET['name']があったら代入

            // echo "HELLO WORLD";


	      // if(isset($_GET['name'])) {
	      //   $name = $_GET['name'];
	      // } else {
	      //   $name = "名無し";
	      // }
	      // echo "名前は".$name."です。";


          // $_GET['namae']があったら代入


			  // if(isset($_GET['namae'])){
			  //   $namae = $_GET['namae'];
			  // }else{
			  //   $namae = "名無し";
			  // }






            // echo $_GET['name'];

            $uematsu = '植松';
            $name = $_GET['name'];

            if ($name === $uematsu) {
            	print($name. "、こんにちは");

            } else {
            	print($name. "、さよなら");
            }
            echo "<br>";

            // echo '名前は'. $name. 'です';


            // 自分の名前を送った時にこんにちは、それ以外はさよなら
            // 文字の連結は.で記載



            if ($name !== "") {
            	file_put_contents("test.csv", $name. "\n", FILE_APPEND);
            }
            // ダブルコーテしょん改行コード
            // 変数の中のものをファイルに書き出す


            // 出力
            var_dump($_GET);
            echo "<br>";
            //print_r(,true)



            foreach ($_GET as $key => $value) {
            	echo "keyは". $key. "valueは". $value. "<br>";
            }
            // GETの中身が配列になっているので、ループさせて出力


            // nameが自分の名前だったら



        ?>


        <form action="./index.php" method="get">
        	<input type="text" name="name" placeholder="お名前"><br>
        	<input type="text" name="mail" placeholder="メールアドレス"><br>
        	<input type="submit" value="送信ボタン">
        </form>
     </body>
</html>




<!-- 


issetを使う理由

-->