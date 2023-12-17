<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<style>
	div {
		width: 50%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 23%;
		margin-top: -67px;
		vertical-align: middle;
		font-size: 30px;
		padding-bottom: 50px;
		box-shadow: 0 10px 20px rgb(120 121 87 / 99%);
		border-radius: 15px;
		color: rgb(120 121 87 / 99%);
		border: 10px solid rgb(120 121 87 / 99%);
		border-radius: 15px;
	}
	body  {
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	  	font-family: acosh;
	}
	button, .button {
		background-color: while;
		border: 1px solid #a6a6a6;
		box-shadow: 3px 3px #a6a6a6;
		padding: 5px 35px;
		color: black;
		margin: 0 20px;
		border-radius: 40px;
	}
	.input {
		font-size: 22px;
		text-align: center;
		opacity: 0.5;
	}
	table {
		width: 100%;
	}
	td {
		text-align: center;
		color: #000;
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: white;  
		font-size: 25px;
		background-color: black;
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: black;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: #525337;
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color: while;
		box-shadow: 2px 2px #a6a6a6;
	}
</style>
<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br>
	<div style="background-color: #9ab14982">
	<form action="admin_db.php" method="post">
		<table>
			<tr>
				<td colspan="2"><p style="font-size: 35px; color: rgb(120 121 87 / 99%)"><b>Admin Login</b></p></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">User ID:</td>
				<td><input class="input" type="text" name="adminid" placeholder="Enter user ID" value="" required></td>
			</tr>
			<tr>
				<td style="padding-left: 20px;">Password:</td>
				<td><input class="input" type="password" name="password"  placeholder="Enter password" value="" required></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td colspan="2"><input class="button" style="font-size: 25px; " type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	<table>
		<tr><td><br></td></tr>
			<tr>
				<td style="color: rgb(120 122 87 / 99%);"><b>New Admin?</b></td>
				<td style="color: rgb(120 122 87 / 99%);"><b>Unable to Login</b></td>
			</tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="admin_signup.php">User SignUp</a></button></td>
				<td><button type="button"><a style="text-decoration: none; font-size: 25px;" href="admin_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table>
</div>
</body>
</html>