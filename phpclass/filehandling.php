<?php
// file handling in php
$file = "filehandling.txt";

//open file
$handle = fopen($file,'w');

//write in file
fwrite($handle, 'Hello World');

//close file
fclose($handle);

//file_put_contents() function
//file_put_contents(filename,data)
file_put_contents($file, 'Hello World');

//file_put_contents with append mode
file_put_contents($file, 'Hello World', FILE_APPEND);

//fread function
$handle = fopen($file, 'r');
echo fread($handle, filesize($file));
fclose($handle);

?>



