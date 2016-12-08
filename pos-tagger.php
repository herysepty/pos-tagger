<?php

class posTagger {
	private $word;
	private $pos_tag =	array(
								'JJ' => [
											'baik',
											'bagus',
										],
								'RB' => [
											'sementara',
											'nanti',
										]
							);
	private $tag ;


	public function tagger($term){
		$this->tag = [];
		foreach ($this->pos_tag as $key => $value) {
			if(in_array($term, $value)){
				$this->tag = [$key => $term];
				break;
			}
		}
		// print_r($words);
		return $this->tag;
	}

	public function ruleOpini() {
		$rule = [
					'RB JJ' => [
									'Sangat baik', 
									'dengan baik',
									'agak baik',
								],
					'RB VB' => 	[
									'Semoga berjalan', 
									'semoga membawa'
								],
					'NN JJ' => 	[
									'Bukunya bagus', 
									'pakaiannyarapi',
								],
		        ]
	}
}

?>