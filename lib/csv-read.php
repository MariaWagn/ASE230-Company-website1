<?php
function readCsv($info) {
	$path='data/'.$info.'.csv';
	$fp=fopen($path,'r');
	while(!feof($fp)){
		$content=fgets($fp);
		if(strlen($content)<5) continue;
		$award=explode(',',$content);
		echo '<div class="col-lg-4">';
		echo '<div class="service-box text-center px-4 py-5 position-relative mb-4">';
		echo '<div class="service-box-content p-4">';
		echo '<div class="service-box-content p-4">';
		echo '<h4 class="mb-3 font-size-22">',$award[0],'</h4>','<p class="text-muted mb-0">',$award[1], '/p>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	fclose($fp);
}
?>