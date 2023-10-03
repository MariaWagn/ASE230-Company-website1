<?php
require_once('../../settings.php');
$path=APP_PATH.'\\pages\\';
$item=$_GET['index'];
unlink($path.$item);
header('location:index.php');