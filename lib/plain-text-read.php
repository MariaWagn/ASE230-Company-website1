<?php
function readText($text) {
$path='data/'.$text.'.txt';
$content=file_get_contents($path);
echo $content;
}
?>