<?php
include_once('_functions.php');

$conn = mysql_connect('mysql1217.ixwebhosting.com', 'capsadi_edit', 'opencapsa') or die ('Error connecting to mySQL');
mysql_select_db('capsadi_cms');
	  
$files = dirList('pics/Xmas06');
foreach($files as $fname){
	echo('<img src="' . $fname . '"><br/>');
	mysql_query("INSERT INTO gall_img 
	(date, path, gall) VALUES('2006-12-16', '".$fname."', '16') ") 
or die(mysql_error());  
}

echo "Data Inserted!";

?>
