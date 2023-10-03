<?php
require_once('../../settings.php');
$content=file_get_contents(APP_PATH.'/data/team.json');
$content=json_decode($content, true);
$item=$content[$_GET['index']];
if(count($_POST)>0){
	$item=$_POST;
	$content[$_GET['index']]=$item;
	$content=json_encode($content,JSON_PRETTY_PRINT);
	file_put_contents(APP_PATH.'/data/team.json',$content);
}
?>
<a href="index.php">Go back to the index page</a>
<form action="<?= $_SERVER['PHP_SELF'] ?>?index=<?=$_GET['index'] ?>" method="POST">
	<div>
		<label>Name</label><br/>
		<input type="text" name="name" value="<?= $item['name'] ?>"/>
	</div>
	<div>
		<label>Description</label><br/>
		<textarea name="desc"><?= $item['desc'] ?></textarea>
	</div>
	<button type="submit">Save changes</button>
</form>