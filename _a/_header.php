<? include_once('_functions.php');


// Database Login
$conn = mysql_connect('mysql1217.ixwebhosting.com', 'capsadi_access', 'opencapsa') or die ('Error connecting to mySQL');
mysql_select_db('capsadi_cms');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
  <title>Chinese American Parents &amp; Students Association (CAPSA)</title>
  
   <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

  <link rel="stylesheet" type="text/css" href="style/style.css" />

  <link rel="stylesheet" type="text/css" href="style/color.css" />

  <link rel="stylesheet" href="style/menustyle.css" />
	</head>

<body>
  <div id="main">
    <div id="logo"></div>
    <div id="content">
	<div id="menu_container"><? include('_nav.php'); ?></div>
