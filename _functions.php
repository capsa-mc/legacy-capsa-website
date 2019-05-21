<?
// Functions
function dirList ($dir) 
{
    $results = array();
    $handler = opendir($dir);
    while ($file = readdir($handler)) {
        if ($file != '.' && $file != '..')
			if (is_dir($dir."/".$file)) {
            	$temp = dirList($dir."/".$file);
				foreach ($temp as $i){
					$results[] = $i;
				}
			}
			else{
            	$results[] = $dir."/".$file;
			}
    }
   closedir($handler);
   return $results;
}
function genside($type = 'news', $limit = 3){
	$query  = "SELECT owdate, date, name FROM sidebar WHERE date >= NOW() AND type = '" . $type . "' ORDER BY date LIMIT ".$limit;
	$result = mysql_query($query) or die("Query Fail");
	
	while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
		if($row['owdate'] == null)
			echo '<h2>' . date('n.j.Y',strtotime($row['date'])) . '</h2><p>' . $row['name'] . '</p>';
		else
			echo '<h2>' . $row['owdate'] . '</h2><p>' . $row['name'] . '</p>';
			
	} 
}

// Database Login

$conn = mysql_connect('mysql1217.ixwebhosting.com', 'capsadi_access', 'opencapsa') or die ('Error connecting to mySQL');
mysql_select_db('capsadi_cms');
?>

