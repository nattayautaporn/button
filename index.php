<!DOCTYPE html>
<html>
<!--<head>
<title>Test Button</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<meta charset=utf-8 />
<script>
  
function getDataFromDb()
{
	$.ajax({ 
				url: "getdata.php" ,
				type: "POST",
				data: ''
			})
			.success(function(result) { 
				var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						  //$("#myTable tbody tr:not(:first-child)").remove();
						  $("#myBody").empty();
						  $.each(obj, function(key, val) {
									var tr = "<tr>";
									tr = tr + "<td>" + val["even_id"] + "</td>";
									tr = tr + "<td>" + val["device_id"] + "</td>";
									tr = tr + "<td>" + val["button_time"] + "</td>";
									
									tr = tr + "</tr>";
									$('#myTable > tbody:last').append(tr);
						  });
					}

			});

}

setInterval(getDataFromDb, 10000);   // 1000 = 1 second
</script>
</head>
<body>
 <center>
<h1>SOS BUTTON</h1>

<table width="600" border="1" id="myTable">
<!-- head table -->
<thead>
  <tr>
    
    <td width="98"> <div align="center">even_id </div></td>
    <td width="198"> <div align="center">device_id </div></td>
    <td width="97"> <div align="center">button_time </div></td>
    
  </tr>
</thead>
<!-- body dynamic rows -->
<tbody id="myBody"></tbody>
</table>

 <center>
</body>
--!>
</html>