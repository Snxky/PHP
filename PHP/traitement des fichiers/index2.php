<?php

$path = '/dir/dir/myfile.php';
$file = 'test.txt';

//return filename
$output = basename ($path);

//return filename without extension
$output = basename($path,'.php');

//return dirname
$output = dirname($path);

//check if file exists
$output = file_exists('test.txt');

//get absolute path
$output = realpath($file);

//check if is file
$output = is_file($file);

//check if it is writable
$output = is_writable($file);

//check if file is readable
$output =  is_readable($file);

//get sizefile
$output = filesize($file);

//create a directory
mkdir('php');

//remove dir if empty
rmdir('php');

//copy file
copy('index.php','file2.txt');

//rename file
rename('test.txt', 'myfile.txt');

//delete file
unlink('file2.txt');

echo $output;






