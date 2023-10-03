<?php
require_once('../../settings.php');
$content=file_get_contents(APP_PATH.'/data/contacts.json');
$content=json_decode($content, true);

$index=0;
?>
<table>
<?php
foreach($content as $item){
	?>
		<div>
			<tr><td><h3><?= $item['name']?></h3></td>
			<td><p><?= $item['email'] ?><p></td>
			<td><p><?= $item['subject']?></p></td>
			<td><p><?= $item['message']?></p></td>
			<td><a href="detail.php?index=<?=$index ?>">Go to the detail page</a></td></tr>
		</div>
	<?php
	$index++;
}
?>
</table>