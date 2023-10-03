<?php
require_once('../../settings.php');
$path=APP_PATH.'\\pages';
chmod($path, 0777);
if(count($_POST)>0){
	if(!(file_exists($path.'\\'.$_POST['name'].'.hmtl'))){
		fopen($path.'\\'.$_POST['name'].'.hmtl','x');
	}
}
//header('location:index.php');
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	<div>
		<label>Page Name</label><br/>
		<input type="text" name="name"/>
	</div>
	<button type="submit">Create Page</button>
</form>
<?php