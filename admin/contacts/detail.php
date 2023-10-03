<?php
require_once('../../settings.php');
$content=file_get_contents(APP_PATH.'/data/contacts.json');
$content=json_decode($content, true);
$item=$content[$_GET['index']];
?>
<h3><?= $item['name']?></h3>
<p><?= $item['email'] ?><p>
<p><?= $item['subject']?></p>
<p><?= $item['message']?></p>
<a href="index.php">Go back to index</a><br/>