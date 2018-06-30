<?php

// 定数は何のためにあるのか
// 定数は普遍、繰り返しでる値
// 上の方に記載
// あとで一箇所のみの変更で済む
// クラス内の定数を定義している人がいた→2こ同じ処理が走る→クラス内に定数に定義するのはやめましょう
define("RINGO", "りんご");
define("SAKANA", "魚");
define("NIKU", "肉");


// 動物クラス定義 設計図
// 動作や状態 プロパティが状態
class animal {

	// プロパティ（変数）
	// 継承する場合はprotected
	// 継承しない場合はpravate
	protected $hair = ""; // 体毛
	protected $width_weight = ""; // 幅
	protected $height = ""; // 高さ
	protected $cry = "ギャース"; // 泣き声
	protected $status = "普通"; // 状態
	protected $name = "動物"; // 名前

	// 食べるメソッド（関数）：機能
	// 引数の初期値：なにも入れなければ$val="食べ物"
	public function eat($val="食べ物") {
		echo $this->name. "が". $val. "を食べた";
	}

	// 鳴くメソッド（関数）：機能
	public function crow() {
		// .で文字列連結
		// クラス内で定義した$this->（$なし変数名）で定義変数使用
		echo $this->name. "が" . $this->cry. "と鳴いた";
		echo "<br>";
	}

	// protectedな変数でもgetする、setするメソッドがあれば取得できる
	// 状態を返す（ゲッター）
	public function get_status(){
		return $this->status;
	}

	// 状態を戻る（セッター）：内部的なプロパティー値に代入
	public function set_status($val){
		$this->status = $val;
	}

	// 機嫌良くなるメソッド
	// 関数にも制限がかけられる→外部から書きかえられない
	protected function status_good() {
		$this->status = "よい";
	}

	// 機嫌悪くなるメソッド
	protected function status_bad() {
		$this->status = "悪い";
	}

}


// 熊クラス
// 最近はphp多重継承もある
// 今回は1つ1つ継承していく
// 継承：animalの性質を引き継いでいる
class kuma extends animal {

	// 食べる
	function eat($val) {
		if ($val === "りんご") {
			echo $this->name. "は". $val. "を食べた";
			echo "<br>";
			$this->status_good();
		} else {
			echo $this->name. "は". $val. "を食べなかった";
			echo "<br>";
			$this->status_bad();
		}
	}


	// コンストラスタ
	function __construct() {
		$this->name = "熊";
		$this->cry = "ガオー";
	}
}


// 犬クラス
class inu extends animal {
	// 食べる
	function eat($val) {
		if ($val === "肉") {
			echo $this->name. "は". $val. "を食べた";
			echo "<br>";
		} else {
			echo $this->name. "は". $val. "を食べなかった";
			echo "<br>";
		}
	}

	// コンストラスタ
	function __construct() {
		$this->name = "犬";
		$this->cry = "わんわん";
	}
}


// 猫クラス
class neko extends animal {


	// 食べる
	function eat($val) {
		if ($val === "魚") {
			echo $this->name. "は". $val. "を食べた";
			echo "<br>";
		} else {
			echo $this->name. "は". $val. "を食べなかった";
			echo "<br>";
		}
	}


	// コンストラスタ
	// プライベートメソッド アンダーバーで表現
	function __construct() {
		$this->name = "猫";
		$this->cry = "にゃー";
	}
}


// タマクラス（猫クラスから継承）
// 継承をうまく使うことで
// 大元のクラスを親クラス、スーパークラス
// 再利用
class tama extends neko {
	function __construct() {
		$this->name = "タマ";
	}
	function crow() {
		// 泣きません
		// 親クラスのメソッドを継承して使う
		// オーバーライド

		echo $this->name. "は（泣きませんでした）";
		echo "<br>";
	}
}



// オブジェクト化 / インスタンス化 実体化
$animal = new animal();
$animal->crow();

$kuma = new kuma();
$inu = new inu();
$neko = new neko();
$tama = new tama();

// $xxxでcrow()メソッドを使う
$kuma->crow();
$inu->crow();
$neko->crow();
$tama->crow();


$kuma->eat(RINGO);
echo "状態は". $kuma->get_status(). "\n";
echo "<br>";
$kuma->eat(SAKANA);
echo "状態は". $kuma->get_status(). "\n";
echo "<br>";
$kuma->eat(NIKU);
echo "状態は". $kuma->get_status(). "\n";
echo "<br>";

$inu->eat(RINGO);
$inu->eat(SAKANA);
$inu->eat(NIKU);

$neko->eat(RINGO);
$neko->eat(SAKANA);
$neko->eat(NIKU);


?>