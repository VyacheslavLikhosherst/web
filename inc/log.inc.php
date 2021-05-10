<?php
$dt = time();
$page = $_SERVER['REQUEST_URI'];
$ref = $_SERVER['HTTP_REFERER'];
$path = "$dt | $ref | $page\n";
file_put_contents("log/".PATH_LOG, $path, FILE_APPEND);
?>
