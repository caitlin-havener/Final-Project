<?php
	$user = $_COOKIE["userName"];
	print "welcome back $user";
	
	include('config.php');
	//connect to the database
	$connection=mysql_connect("localhost","root","")
		or print "connect failed because ".mysql_error();  
		
    mysql_select_db("test",$connection)
		or print "select failed because ".mysql_error();
	$result = mysql_query("SELECT * FROM usermeds WHERE username='$user'");

echo "<table border='1'>
<tr>
<th>Med</th>
<th>To Take</th>
<th>Per Bottle</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['medName'] . "</td>";
  echo "<td>" . $row['toTake'] . "</td>";
  echo "<td>" . $row['perBottle'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

	if (isset($_POST['Add'])){ 		
		$medName = mysql_real_escape_string($_POST['medName']);
		$toTake = mysql_real_escape_string($_POST['toTake']);
		$perBottle = mysql_real_escape_string($_POST['perBottle']);
		$addMedlist = mysql_query("INSERT INTO usermeds (userName, medName, toTake, perBottle) VALUES ('$user','$medName', $toTake, $perBottle)");
		
	//	$addUser = mysql_query("UPDATE usermeds SET medName='$medName',toTake='$toTake',perBottle='$perBottle' WHERE userName='$user'");
	}
?>
<html>
	<head>
	</head>
	
	<body>
		<a href="logoff.php">log off</a>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="register" id="register" style="display:inline;">
			<table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#99CC33">
				<tr bgcolor="#99CC99"> 
					<td colspan="2"><div align="center"><strong>Please log in:</strong></div></td>
				</tr>
				<tr> 
					<td width="47%"><strong>MedName:</strong></td>
					<td width="53%"><input name="medName" type="text" id="userName"></td>
				</tr>
				<tr> 
					<td width="47%"><strong>PerBottle:</strong></td>
					<td width="53%"><input name="perBottle" type="text" id="userName"></td>
				</tr>
				<tr> 
					<td width="47%"><strong>To Take:</strong></td>
					<td width="53%"><input name="toTake" type="text" id="userName"></td>
				</tr>
				<tr> 
					<td width="47%"><strong>How Often:</strong></td>
					<td width="53%"><input name="often" type="text" id="userName"></td>
				</tr>
				<tr> 
					<td colspan="2">
						<input name="Add" type="submit" id="Submit" value="Add">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>