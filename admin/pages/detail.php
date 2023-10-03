<?php
require_once('../../settings.php');
$item=$_GET['index'];
$content=file_get_contents(APP_PATH.'/pages/'.$item);
echo $content;
?>
<a href="index.php">Go back to index</a><br/>
<a href="edit.php?index=<?=$_GET['index']?>">Edit this page</a><br/>
<a href="delete.php?index=<?=$_GET['index']?>">Delete this page</a>