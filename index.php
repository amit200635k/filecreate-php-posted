<?php
date_default_timezone_set('Asia/Kolkata');

$json = file_get_contents('php://input');

print_r($json);
//The fopen() function opens a file or URL.
//Parameter	Description
//filename	Required. Specifies the file or URL to open
//mode	Required. Specifies the type of access you require to the file/stream.
//Possible values:

//"r" - Read only. Starts at the beginning of the file
//"r+" - Read/Write. Starts at the beginning of the file
//"w" - Write only. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
//"w+" - Read/Write. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
//"a" - Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist
//"a+" - Read/Write. Preserves file content by writing to the end of the file
//"x" - Write only. Creates a new file. Returns FALSE and an error if file already exists
//"x+" - Read/Write. Creates a new file. Returns FALSE and an error if file already exists
//"c" - Write only. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
//"c+" - Read/Write. Opens the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
//"e" - Only available in PHP compiled on POSIX.1-2008 conform systems.
//include_path	Optional. Set this parameter to '1' if you want to search for the file in the include_path (in php.ini) as well
//context	Optional. Specifies the context of the file handle. Context is a set of options that can modify the behavior of a stream
//PHP Write to File - fwrite() - mode  - 'w' - All the existing data will be ERASED and we start with an empty file.
//PHP Append Text - 'a' - The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.



$myfile = fopen("inputlog.txt",'a') or die("Unable to open file!");

//$txt = "John Doe\n";
//fwrite($myfile, $txt);
//$txt = "Jane Doe\n";

$txt = "".date('d-m-yy h:i:s') ." - ". json_encode($json)."\r\n";

fwrite($myfile, $txt);
fclose($myfile);
?>
