<?php
require "pos-tagger.php";

$pos_tagger = new posTagger();
$term = explode(' ','baik sementara bagus ahok');
echo "<pre>";
foreach ($term as $key => $value) {
	print_r($pos_tagger->tagger($value));
}
echo "</pre>";