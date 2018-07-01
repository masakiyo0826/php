<?php


/**
* 御飯クラス（サイヤ人クラスから継承）
*/
class gohan extends saiyajin {
	function ikari($val){
		if ($val === JYUROKUGOU) {
			echo $val. "さあああああああん！！！！！！！！！！<br>";
			echo "お前たち、許さないぞ！！！<br>";
			echo "父さん、ついになれたよ". $this->henshin(). "に！<br>";
		} else {
			echo $val. "は殺した、次はお前だ！<br>";
		}
	}

	function __construct() {
		$this->name = "御飯";
		$this->teki_name = "セル";
		$this->waza = "かめはめ波";
		$this->power = "250000000";
		$this->teki_hp = "300000000";
	}
}


?>