<?php
require_once('../../settings.php');
$content=file_get_contents(APP_PATH.'/data/services.json');
$content=json_decode($content, true);
$item=$content[$_GET['index']];
?>
<h1><?= $item['service']?></h1>
<h3><?= $item['desc'] ?></h3>
<p><?= $item['Application1']?></p>
<p><?= $item['Application2']?></p>
<p><?= $item['Application3']?></p>
<a href="index.php">Go back to index</a><br/>
<a href="edit.php?index=<?=$_GET['index']?>">Edit this item</a><br/>
<a href="delete.php?index=<?=$_GET['index']?>">Delete this item</a>