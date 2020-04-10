<html>
	<head>
		<style>
			h1{	
				color:teal;
				font-weight:bolder;
				font-family:comic sans ms;
				text-align:center;
				text-decoration:underline;
			}
			td{	font-family:comic sans ms;
				font-size:"30";	
				font-weight:bold;
				font-style:italic;
			}
		</style>
		<script>
			function valid()
			{
				
				var nm=document.fb.name.value;
				var nm1=nm.search(/[^a-zA-Z]/);
				var flag=0;
				if(nm1>-1)
				{
					flag=1;
					alert("first name is not valid....");
				}

				var cn=document.fb.cno.value;
				var l=cn.length;
				var cn1=cn.search(/[^0-9]/);
				var flag=0;
				if(cn1>=0)
				{
					alert("Contact Number is not valid");
				}
				
				
			}
		</script>
	</head>
	<body background="bricks.jpg">
		<center><div style="background:orange; height:300; width:500;border-radius:29">
		<form name=fb action="fb.php" onSubmit="valid()" method="POST">
		<table>
			<tr><td colspan=2><h1><b>Feedback Form</b></h1></td></tr>
			<tr>
				<td>
					Name:</td>
				<td>
					<input type=text name=name>	
				</td>
			</tr>
			
			<tr>
				<td>
					Contact No:</td>
				<td>
					<input type=text name=cno>
				</td>
			</tr>

			<tr>
				<td>
					Pan</td>
				<td>
					<input type=text name=pan8>	
				</td>
			</tr>
			<tr>
				<td>
					Comment:</td>
				<td>
					<textarea name="comment" rows=4,cols=40></textarea>
				</td>	
			</tr>
			<tr>
				<td colspan=2>
					<center><input type="Submit" value="submit"></center>
				</td>
			</tr>
		</table>
		<input type="hidden" name="Email" value="<?php echo$_GET['Email']; 
		?>">
		</form></div>
		</center>
	</body>
</html>
