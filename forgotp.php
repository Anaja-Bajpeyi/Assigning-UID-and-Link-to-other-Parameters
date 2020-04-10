<html>
	<head>
		<!--<link rel="stylesheet" href="background.css">-->
		<style>
			td{	font-family:comic sans ms;
				font-size:"30";	
				font-weight:bold;
				font-style:italic;
			}
			
			h1
			{
				color:teal;
				font-weight:bolder;
				font-family:comic sans ms;
				text-align:center;
				text-decoration:underline;
			}
		</style>
	
	
	</head>
	<body background="bricks.jpg">
	<center><div style="background:orange; height:350; width:450;border-radius:29">
	<form action="f.php" onSubmit="valid()" method="POST">
		<table>
		<tr>
			<td><h1>Forgot Password</h1></td>
		</tr>
		<tr>
		 <td>
			<h3>IMPORTANT INFORMATION FOR YOU</h3>
		</td>
		</tr>
		<tr>
			<td><hr size=3 width=400></td>
		</tr>
		<tr>
			<td>Enter your email address used in the registration form <br>
			<br>Make sure you type the correct email address.
		 	</td>
		</tr>
		<tr>
			<td><hr size=3 width=400></td>
		</tr>
		<tr>
			<td>Enter your Pan_no:
			<input type="text" name="pam" value="">
			</td>
		</tr>
		<td>Enter New Password:
			<input type="password" name="pass5" value="">
		</td>
		<!--<tr><td>Type the code given below:
		<input type="text" name="txt1"></td>
		</tr>-->
		
		<tr>
			<td>
				<center><input type="submit" value="submit" name="submit" ></center>
			</td>
		</tr>
		</table>

	</form></div>

	</center>
	</body>
</html>
