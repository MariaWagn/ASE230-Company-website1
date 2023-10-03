<?php
require_once('../../settings.php');
$item=$_GET['index'];
$content=file_get_contents(APP_PATH.'/pages/'.$item);
If(count($_POST)>0){
	$output=$_POST['page'];
	$fp=fopen(APP_PATH.'/pages/'.$item, 'w');
	fputs($fp, $output);
	fclose($fp);
}
?>
<a href="index.php">Go back to index</a><br />


<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?> ?index=<?= $_GET['index']?>">
<div>
	<label>Content of Page</label><br />
	<textarea name="page"><?= $content ?></textarea>
</div>
<button type="submit">Save changes</button>
</form>