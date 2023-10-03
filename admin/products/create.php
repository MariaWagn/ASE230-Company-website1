<?php
require_once('../../settings.php');
if(count($_POST)>0){
	$content=file_get_contents(APP_PATH.'/data/services.json');
	$content=json_decode($content, true);
	$content[]=$_POST;
	$content=json_encode($content,JSON_PRETTY_PRINT);
	file_put_contents(APP_PATH.'/data/services.json',$content);
	header('location:index.php');
}else{
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	<div>
		<label>Service</label><br/>
		<input type="text" name="service"/>
	</div>
	<div>
		<label>Description</label><br/>
		<textarea name="desc"></textarea>
	</div>
	<div>
		<label>First Application</label><br/>
		<textarea name="Application1"></textarea>
	</div>
	<div>
		<label>Second Application</label><br/>
		<textarea name="Application2"></textarea>
	</div>
	<div>
		<label>Third Application</label><br/>
		<textarea name="Application3"></textarea>
	</div>
	<button type="submit">Create item</button>
</form>

<?php
}