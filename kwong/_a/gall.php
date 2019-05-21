
<? include_once('_header.php'); ?>

<div id="column2">
	
	<?
	$result = mysql_query("SELECT * FROM gall_ids WHERE id = '".$_REQUEST['id']."'");
	
	if (mysql_num_rows($result) == 0){
	// Creates Index ---------------------------------------------------------------------------------
		// header
		echo '<h1>Photos <span class="chinese">&#29031;&#29255;</span></h1>';
		
		// list galleries
		$query = mysql_query("SELECT * FROM gall_ids ORDER BY date DESC");
		while($row = mysql_fetch_array($query)){
			echo '<p><a href="gall.php?id=' . $row['id'] . '">';
			echo $row['name'];
			
			if($row['owdate'] == null)
				echo ' (' . date('n.j.Y',strtotime($row['date'])) . ')</a></p>';
			else
				echo ' (' . $row['owdate'] . ')</a></p>';
		}
	// End Creates Index -----------------------------------------------------------------------------
	}
	else{
	// Creates Gallery -------------------------------------------------------------------------------
	
		// header
		$row = mysql_fetch_array($result);
		echo '<h1>' . $row['name'];
		if($row['owdate'] == null)
			echo ' (' . date('n.j.Y',strtotime($row['date'])) . ')</h1>';
		else
			echo ' (' . $row['owdate'] . ')</h1>';
		
		echo '<center>';
		// list images
		$query =  mysql_query("SELECT * FROM gall_img WHERE gall = '".$_REQUEST['id']."'");
		while($row = mysql_fetch_array($query)){
			echo '<img src="' . $row['path'] . '"><br/>' . $row['caption'] . '<br /><br />';
		}
		echo '</center>';
		
	// End Creates Gallery ----------------------------------------------------------------------------
	}
	?>
</div>


<? include_once('_footer.php'); ?>
