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


?>