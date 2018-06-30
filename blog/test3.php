<?php

// 人と敵を投げ込むと勝敗結果を作る


/**
* 人クラス
*/
class human {
	protected $name = "地球人"; // 名前
	protected $teki_name = "サイバイマン"; // 敵の名前
	protected $power = "3"; // 攻撃力
	protected $teki_hp = "10"; // 敵のHP
	protected $waza = "ピストル"; // 技
	protected $status = "普通"; // 髪


	public function tatakau(){
		echo $this->name. "vs". $this->teki_name. "<br>";
		echo $this->teki_name. "のHPは". $this->teki_hp. "<br>";
	}


	public function kougeki(){
		echo $this->name. "は". $this->waza. "を使った";
		echo "<br>";
	}


	public function result() {
		echo $this->name. "は". $this->teki_name. "に". $this->power. "のダメージを与えた<br>";

		if ($this->power > $this->teki_hp) {
			echo $this->name. "の勝ち";
		} else {
			echo $this->teki_name. "には全然効いていないようだ…<br>";
			echo $this->teki_name. "の勝ち";
		}
	}


	public function henshin($val){
		$this->status = $val;
	}

}


/**
* サイヤ人クラス（人クラスから継承）
*/
class saiyajin extends human {

	function __construct() {
		$this->name = "サイヤ人";
		$this->power = "1000";
		$this->teki_hp = "100";
		$this->waza = "気功波";
	}
}



/**
* ヤムチャクラス（サイヤ人クラスから継承）
*/
class yamucya extends saiyajin {

	function __construct() {
		$this->name = "ヤムチャ";
		$this->waza = "狼牙風風拳";
		$this->power = "500";

		if ($this->teki_name === "サイバイマン") {
			$this->teki_hp = "1000";
		} else {
			$this->power = "1000";
		}
	}
}


/**
* ベジータクラス（サイヤ人クラスから継承）
*/
class bejita extends saiyajin {

	function __construct() {
		$this->name = "ベジータ";
		$this->teki_name = "ギニュー";
		$this->waza = "ファイナルフラッシュ";
		$this->power = "5000";
		$this->teki_hp = "4000";
	}
}


/**
* 悟空クラス（サイヤ人クラスから継承）
*/
class gokuu extends saiyajin {

	function __construct() {
		$this->name = "悟空";
		$this->teki_name = "フリーザ";
		$this->waza = "かめはめ波";
		$this->power = "10000";
		$this->teki_hp = "530000";
	}
}


/**
* 超サイヤ人悟空クラス（悟空クラスから継承）
*/
class supergokuu extends gokuu {
	function henshin($val){
		$this->status = "金髪";
	}

	function __construct() {
		$this->name = "超サイヤ人悟空";
		$this->teki_name = "フリーザ";
		$this->waza = "超かめはめ波";
		$this->power = "200000000";
		$this->teki_hp = "100000000";
	}
}





$human = new human();
$human->tatakau();
$human->kougeki();
$human->result();
echo "<br>";
echo "<br>";

$saiyajin = new saiyajin();
$saiyajin->tatakau();
$saiyajin->kougeki();
$saiyajin->result();
echo "<br>";
echo "<br>";

$yamucya = new yamucya();
$yamucya->tatakau();
$yamucya->kougeki();
$yamucya->result();
echo "<br>";
echo "<br>";

$bejita = new bejita();
$bejita->tatakau();
$bejita->kougeki();
$bejita->result();
echo "<br>";
echo "<br>";

$gokuu = new gokuu();
$gokuu->tatakau();
$gokuu->kougeki();
$gokuu->result();
echo "<br>";
echo "<br>";

$supergokuu = new supergokuu();
$supergokuu->henshin("クリリン");
$supergokuu->tatakau();
$supergokuu->kougeki();
$supergokuu->result();
echo "<br>";
echo "<br>";


?>