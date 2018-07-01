<?php






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








?>