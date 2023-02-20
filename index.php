<?php
date_default_timezone_set('Asia/Kolkata');

$json = file_get_contents('php://input');

print_r($json);

$myfile = fopen("inputlog.txt",'a') or die("Unable to open file!");

//$txt = "John Doe\n";
//fwrite($myfile, $txt);
//$txt = "Jane Doe\n";

$txt = "".date('d-m-yy h:i:s') ." - ". json_encode($json)."\r\n";

fwrite($myfile, $txt);
fclose($myfile);
?>