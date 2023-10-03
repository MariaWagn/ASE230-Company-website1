<?php
require_once('../../settings.php');
$content=file_get_contents(APP_PATH.'/data/team.json');
$content=json_decode($content, true);

$index=0;
?>
<a href="create.php">Add a new item</a>
<table>
<?php
foreach($content as $item){
	?>
		<div>
			<tr><td><p><?= $item['name'] ?></p></td>
			<td><p><?= $item['desc'] ?></p></td>
			<td><a href="detail.php?index=<?=$index ?>">Go to the detail page</a></td></tr>
		</div>
	<?php
	$index++;
}
?>
</table>