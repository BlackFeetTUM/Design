<?PHP
	$query = "SELECT COUNT(*) FROM questionAlert WHERE lectureId = '".$_SESSION['lectureId'])."' AND active = '1'";
			
	$result = mysql_query($query);
	
	$line = mysql_fetch_array($result);
	$count = $line[0];
		
	$result = json_encode($count);
?>