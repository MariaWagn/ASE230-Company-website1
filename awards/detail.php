<?php
require_once('../../settings.php');

$fp=fopen(APP_PATH.'/data/awards.csv', 'r');
?>
<a href="index.php">Go back to index</a><br />

<?php
$index=0;
while(!feof($fp)){
	$line=trim(fgets($fp));
	if($_GET['index']==$index){
		if(strlen($line)>0){
			$line=explode(',',$line);
			echo '<h3>Year: '.$line[0].'</h3>';
			echo '<p>Description: '.$line[1].'</p>';
			echo '<td><a href="edit.php?index='.$index.'">Edit item</a><br />';
			echo '<td><a href="delete.php?index='.$index.'">Delete item</a>';
		}
		break;
	}
	$index++;
}
fclose($fp);