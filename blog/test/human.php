<?php

// 人と敵を戦わせて勝敗結果を出す


/**
* 人クラス
*/
class human {
	// プロパティ
	protected $name = "地球人"; // 名前
	protected $teki_name = "サイバイマン"; // 敵の名前
	protected $power = "3"; // 攻撃力
	protected $teki_hp = "10"; // 敵のHP
	protected $waza = "ピストル"; // 技
	protected $status = "普通"; // ステータス
	// protected $katiflg = 0; // 勝ちフラグ


	// 戦うメソッド
	public function tatakau(){
		echo $this->name. "vs". $this->teki_name. "<br>";
		echo $this->teki_name. "のHPは". $this->teki_hp. "<br>";
	}


	// 攻撃メソッド
	public function kougeki(){
		echo $this->name. "は". $this->waza. "を使った";
		echo "<br>";
	}


	// 結果メソッド
	public function result() {
		echo $this->name. "は". $this->teki_name. "に". $this->power. "のダメージを与えた<br>";

		if ($this->power > $this->teki_hp) {
			echo $this->name. "の勝ち";
			// $this->katiflg = $this->katiflg + 1;
		} else {
			echo $this->teki_name. "には全然効いていないようだ…<br>";
			echo $this->teki_name. "の勝ち";
		}

		// if ($this->katiflg > 3) {
		// 	echo SYENRON. "：さあ願いをいえ！どんな願いも3つまで叶えてやろう";
		// } else {
		// 	echo SYENRON. "：さあ願いをいえ！どんな願いも話だけなら聞いてやろう";
		// }
	}
}


?>