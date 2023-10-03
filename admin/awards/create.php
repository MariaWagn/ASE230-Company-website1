<?php
require_once('../../settings.php');
if(count($_POST)>0){
	$fp=fopen(APP_PATH.'/data/awards.csv','a+');
	fwrite($fp,$_POST['year'].','.$_POST['desc'].PHP_EOL);
	fclose($fp);
	header('location: index.php');
}else{
?>
<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
	<div>
		<label>Year</label><br />
		<input type="text" name="year"/>
	</div>
	<div>
		<label>Description</label><br />
		<textarea name="desc"></textarea>
	</div>
	<button type="submit">Create item</button>
</form>
<?php
}