<?php
require_once('../../settings.php');
$content=file_get_contents(APP_PATH.'/data/services.json');
$content=json_decode($content, true);

$index=0;
?>
<a href="create.php">Add a new item</a>
<table>
<?php
foreach($content as $item){
	?>
		<div>
			<tr><td><p><?= $item['service']?></p></td>
			<td><p><?= $item['desc'] ?></p></td>
			<td><p><?= $item['Application1']?></p></td>
			<td><p><?= $item['Application2']?></p></td>
			<td><p><?= $item['Application3']?></p></td>
			<td><a href="detail.php?index=<?=$index ?>">Go to the detail page</a></td></tr>
		</div>
	<?php
	$index++;
}
?>
</table>