<?php
	include('config.php');
	
	if( isset( $_COOKIE['isLoged'] ) ){
		header("Location: $loginPage");
		exit();
	}
?>
<html>
	<head>
	</head>
	
	<body>
		<form action="login.php" method="post" name="register" id="register" style="display:inline;">
			<table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#99CC33">
				<tr bgcolor="#99CC99"> 
					<td colspan="2"><div align="center"><strong>Please log in:</strong></div></td>
				</tr>
				<tr> 
					<td width="47%"><strong>Username:</strong></td>
					<td width="53%"><input name="userName" type="text" id="userName"></td>
				</tr>
				<tr> 
					<td><strong>Password:</strong></td>
					<td><input name="password" type="password" id="password"></td>
				</tr>
				<tr> 
					<td colspan="2">
						<input name="Submit" type="submit" id="Submit" value="Sign-In">
					</td>
				</tr>
			</table>
		</form>
	
		<form action="register.php" method="post" name="register" id="register" style="display:inline;">
			  <table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#99CC33">
					<tr bgcolor="#99CC99"> 
						<td colspan="2"><div align="center"><strong>Please enter registration information: </strong></div></td>
					</tr>
					<tr> 
						<td width="47%"><strong>Username:</strong></td>
						<td width="53%"><input name="userName" type="text" id="userName"></td>
					</tr>
					<tr> 
						<td><strong>Password:</strong></td>
						<td><input name="password" type="password" id="password"></td>
					</tr>
					<tr>
						<td><strong>Re-enter password: </strong></td>
						<td><input name="password2" type="password" id="password2" /></td>
					</tr>
					<tr> 
						<td colspan="2" class="regsubmit">
							<input name="Submit" type="submit" id="Submit" value="Register">
						</td>
					</tr>
			  </table>
		</form>
	</body>
</html>