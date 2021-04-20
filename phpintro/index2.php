<?php

$myfile=fopen("index.php","a+") or die("unable to open file");

while (!feof($myfile)) {
	# code...
	echo fgets($myfile)."<br>";
}
fclose($myfile)














?>