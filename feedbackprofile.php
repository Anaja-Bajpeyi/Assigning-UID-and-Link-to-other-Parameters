<html>
	<head>
		<link rel="stylesheet" href="background.css">
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
		<center>
		<div style="background:orange; height:580; width:390;border-radius:29">
		<form action="" onSubmit="return check()" method="POST">
			<?php
			$e=$_GET['em'];
			$m = new MongoClient();
			$db = $m->registration;
			$collection1 = $db->back;
			$cursor = $collection1->find();
			
			?>
			<table border=0>
			<tr>
				<td colspan=2><h1>Feed Back</h1></td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			
			<tr>
				<td><b>Name :</b></td>
				<td>
				<?php				
				foreach ($cursor as $document)
				{
					if($e==$document['Pans'] ){
					echo $document["name"];}
				}
				?>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td><b>Contact No :</b></td>
				<td>
				<?php				
				foreach ($cursor as $document)
				{
					if($e==$document['Pans'] ){
					echo $document["cno"];}
				}
				?>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>			
		<tr>
				<td><b>Comment :</b></td>
				<td>
				<?php				
				foreach ($cursor as $document)
				{
					if($e==$document['Pans'] ){
					echo $document["comment"];}
				}
				?>
				</td>
			</tr>
			</table>		
		</form></div>
		</center>
	</body>
</html>
