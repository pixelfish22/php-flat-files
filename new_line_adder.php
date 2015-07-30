<?php
$form_data = $_POST['newLine'];
$file = fopen("black_knight.txt", 'a+') or die("Well, this did not work");


fwrite($file, "\n".$form_data);
fclose($file);
header("Location: http://php-flat-files-pixelfish22.c9.io/");
die();
?>