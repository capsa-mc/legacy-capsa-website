
<? include_once('_header.php'); ?>

<div id="column2" style="padding-right:23px;width:720px;">
	
	<?
	$result = mysql_query("SELECT * FROM gall_ids WHERE id = '".$_REQUEST['id']."'");
	
	if (mysql_num_rows($result) == 0){
	// Creates Index ---------------------------------------------------------------------------------
		// header
		
		
		echo '<h1>Photos <span class="chinese">&#29031;&#29255;</span></h1>';
		echo '<table style="width: 100%">
			<tr>
				<td>';
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
		echo '        <p>Have any photos?&nbsp; Please send them to <a
  href="mailto:lleung@mbhs.edu?subject=CAPSA%20Photo%20Submission">lleung@mbhs.edu</a>!     </p>
				</td>
				<td class="style1">
				<img src="pics/Xmas06/DSC00196.JPG" width="342" height="249" /><br />2006-2007 Tutors 
				&amp; Tutees hard at work.<br />
				<br />
&nbsp;<img src="pics/defendingtocouncil.jpg" width="342" height="229" /><br />
				Aldrin Leung, Kelvin Fong &amp; Cindy Chang (all sitting on left<br />
				side of circular table) represent CAPSA to receive a <br />
				community
service award from the Board of Education.<br />
				</td>
			</tr>
			<tr>
				<td>&nbsp;
        </td>
				<td class="style1">&nbsp;
				</td>
			</tr>
		</table>';
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
		echo $row['descrip'];
		
		// list images
		$query =  mysql_query("SELECT * FROM gall_img WHERE gall = '".$_REQUEST['id']."'");
		while($row = mysql_fetch_array($query)){
			echo '<img src="' . $row['path'] . '"><br/>' . $row['caption'] . '<br /><br />';
		}
		echo '<br /><a href="gall.php">Back to List of Galleries</a>';
		echo '</center>';
		
	// End Creates Gallery ----------------------------------------------------------------------------
	}
	?>
</div>


<? include_once('_footer.php'); ?>
