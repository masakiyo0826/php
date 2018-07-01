<?php


/**
* 悟空クラス（サイヤ人クラスから継承）
*/
class gokuu extends saiyajin {
	function ikari($val){
		if ($val === KURIRIN) {
			echo $val. "のことか！！！！！！！！！！<br>";
			echo "オレか？オレは…". $this->henshin(). "だ！！！". $val. "の仇を取る！！！<br>";
		} else {
			echo "そうか". $val. "は死んじまったか<br>";
		}
	}

	function __construct() {
		$this->name = "悟空";
		$this->teki_name = "フリーザ";
		$this->waza = "かめはめ波";
		$this->power = "10000";
		$this->teki_hp = "530000";
	}
}


?>