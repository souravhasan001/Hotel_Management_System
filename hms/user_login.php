<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<style>
	div {
		width: 50%;
		height: 100%;
		text-align: center;
		position: relative;
		margin-right: 30%;
		margin-left: 23%;
		vertical-align: middle;
		font-size: 30px;
		margin-top: -60px;
		padding-bottom: 50px;
		box-shadow: 0 10px 20px rgba(09,41,98,0.19);
		border-radius: 15px;
		color: rgb(120 121 87 / 99%);
		border: 10px solid black;
	}
	body  {
	  	background-color: #FFFFF0;
	  	background-position: right top;
	  	background-attachment: fixed;
	  	background-size: cover;
	  	font-family: sans-serif;
	}
	button, .button {
		background-color: rgb(190 192 138 / 99%);
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: white;
		margin: 0 20px;
		border-radius: 40px;
		padding: 5px 35px;
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
	}
	button:link, button:visited, .button:link, .button:visited 
	{
		text-decoration: none;
		color: white;
		font-size: 25px;
	
	}
	button:hover, button:active, .button:hover, .button:active
	{
		background-color: white;
		border: 1px solid #a6a6a6;
		box-shadow: 2px 2px #a6a6a6;
		color: rgb(120 121 87 / 99%);
		text-decoration: none;  
		font-size: 25px;
	}
	input:hover, input:active 
	{
		background-color:white;
		box-shadow: 2px 2px white;
	}
</style>

<body>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<div style="background-color: #f5f58196;">
		<form action="user_logged_in.php" method="post">
			<table>
				<tr>
					<td colspan="2"><p style="font-size: 35px; color: black;"><b>User Login</b></p></td>
				</tr>
				<tr>
					<td>Phone number:</td>
					<td><input class="input" type="text" name="phone" placeholder="Enter phone" required></td>
					<br>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password" placeholder="Enter password" required></td>
				</tr>
			</table>
		<br>
		<input class="button"style="text-decoration: none;  font-size: 25px;" type="submit" value="Login">
		</form>
		<br>
		<table>
			<tr>
				<td style="color: rgb(120 121 87 / 99%);"><b>New User?</b></td>
				<td style="color: rgb(120 121 87 / 99%);"><b>Unable to Login</b></td>
			</tr><tr><td></td></tr><tr><td></td></tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none; background-color:rgb(190 192 138 / 99%) ; color: white ; font-size: 25px;" href="user_signup.php">User SignUp</a></button></td>
				<td><button type="button" ><a style="text-decoration: none;background-color:rgb(190 192 138 / 99%) ; color: white ; font-size: 25px;" href="user_forgot_pwd.php">Forgot Password</a></button></td>
			</tr>
		</table><br>
	</div>
</body>
</html>