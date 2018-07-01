<?php


/**
* サイヤ人クラス（人クラスから継承）
*/
class saiyajin extends human {

	// 変身メソッド（サイヤ人しか変身しない）
	function henshin(){
		return $this->status = "超サイヤ人";
	}

	function __construct() {
		$this->name = "サイヤ人";
		$this->power = "1000";
		$this->teki_hp = "100";
		$this->waza = "気功波";
	}
}


?>