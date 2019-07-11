<?php
	$objConnect = mysql_connect("localhost","root","root") or die(mysql_error());
	$objDB = mysql_select_db("nodemcu1");
	$strSQL = "SELECT * FROM event1 WHERE 1 ORDER BY event_id DESC ";
	$objQuery = mysql_query($strSQL) or die (mysql_error());
	$intNumField = mysql_num_fields($objQuery);
	$resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		$arrCol = array();
		for($i=0;$i<$intNumField;$i++)
		{
			$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
		}
		array_push($resultArray,$arrCol);
	}
	
	mysql_close($objConnect);
	
	echo json_encode($resultArray);
?>