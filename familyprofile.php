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
			$e=$_GET['eid'];
			$m = new MongoClient();
			$db = $m->registration;
			$collection1 = $db->family;
			$cursor1 = $collection1->find();
			?>
			<table border=0>
			<tr>
				<td colspan=2><h1>Family Information</h1></td>
			</tr>
			
			<br></br>
			<tr>
			</tr>
			<tr>
				<td><b>Father Name :</b></td>
				<td>
				<?php
				foreach ($cursor1 as $doc)
				{
				
					if($e == $doc["Pan1"]){
					echo $doc["fname1"];}
			 	}
					
				?>
				</td>
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
			
			
			</tr>
			<tr>
				<td><b>Mother Name :</b></td>
				<td>
				<?php
				foreach ($cursor1 as $doc)
				{
				
					if($e == $doc["Pan1"]){
					echo $doc["mname"];}
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
			<tr>
				<td><b>Father Occupation :</b></td>
				<td>
				<?php
				foreach ($cursor1 as $doc)
				{
				
					if($e == $doc["Pan1"]){
					echo $doc["dropdown"];}
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
			<tr>
				<td><b>Mother Occupation :</b></td>
				<td>
				<?php
				foreach ($cursor1 as $doc)
				{
				
					if($e == $doc["Pan1"]){
					echo $doc["dropdown2"];}
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
			<tr>
				<td><b>Father's Phone Number :</b></td>
				<td>
				<?php
				foreach ($cursor1 as $doc)
				{
				
					if($e == $doc["Pan1"]){
					echo $doc["no3"];}
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
			<tr>
				<td><b>Mother's Phone Number :</b></td>
				<td>
				<?php
				foreach ($cursor1 as $doc)
				{
				
					if($e == $doc["Pan1"]){
					echo $doc["no1"];}
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
			<tr>
				<td><b> No of Sibings :</b></td>
				<td>
				<?php
				foreach ($cursor1 as $doc)
				{
				
					if($e == $doc["Pan1"]){
					echo $doc["siblings"];}
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
			<tr>
				<td><b> Family Income :</b></td>
				<td>
				<?php
				foreach ($cursor1 as $doc)
				{
				
					if($e == $doc["Pan1"]){
					echo $doc["income"];}
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
			<tr>
				<td><b> Class:</b></td>
				<td>
				<?php
				foreach ($cursor1 as $doc)
				{
				
					if($e == $doc["Pan1"]){
					echo $doc["dropdown3"];}
			 	}
					
				?>
				</td>
			</tr>
			</table>		
		</form></div>
		</center>
	</body>
</html>
