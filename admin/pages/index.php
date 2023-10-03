<?php
require_once('../../settings.php');
$content=scandir(APP_PATH.'/pages');
?>

<a href="create.php">Add a new page</a>
<table>
<?php
foreach($content as $item){
	if(!($item == '.' || $item == '..')){
		?>
		<div>
			<tr><td><p><?= $item ?></p></td>
			<td><a href="detail.php?index=<?=$item?>">Go to the detail page</a></td></tr>
		</div>
		<?php
	}
}
?>
</table>