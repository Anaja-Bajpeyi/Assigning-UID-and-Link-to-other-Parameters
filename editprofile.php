<html>
	<head>
	
		<!--<link rel="stylesheet" href="background.css">-->
		<style>
			
			td{
				font-family:comic sans ms;
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
		<script>
			function profsubmit()
			{
				<!--var flag=0;
				var a=document.f2.fname.value;
				var b=document.f2.age.value;
				var c=document.f2.dob.value;
				var d=document.f2.contact.value;
				var e=document.f2.cast.value;
				var a1=document.f2.mt.value;
				var a2=document.f2.hb.value;
				var a3=document.f2.religion.value;
				var a4=document.f2.pun.value;
				if(a!="" && b!="" && c!="" && d!="" && e!="" &&  &&!="" && a1!="" && a2!="" && a3!=""&& a4!="")
				{
					flag=0;-->
					alert("profile updated successfully");
					<!--return(true);
				}
				else
				{
					flag=1;
					alert("enter missing field");
					return(false);
				}-->
			}

		</script>
	</head>
	<body background="11q.jpg">
		<center>
		<div style="background:orange; height:650; width:390;border-radius:29">
		<form name=f2 action="myprofileform.php" onSubmit="return profsubmit()">
			<?php

			$m = new MongoClient();
			$db = $m->registration;
			$collection = $db->per;
			$cursor = $collection->find();
			
			?>
			<table border=0>
			<tr>
				<td colspan=2><h1>Edit profile</h1></td>
			</tr>
			<tr>
				<td><img src="header.jpg" height=100 width=100></td>
			</tr>
			<tr>
				<td><b>Profile id :</b></td>
				<td><b>
				
				</b></td>
			</tr>
			<tr>
				<td><b>Name :</b></td>
				<td>
				<?php				
				foreach ($cursor as $document)
				{
					if($_POST['eid']==$document["Eid"] && $_POST['pwd']==$document["password"]){
					echo $document ["fname"];}
				}
				?>
				</td>
			</tr>
			<tr>
				<td><b>Age :</b></td>
				<td>
				<?php				
				foreach ($cursor as $document)
				{
					if($_POST['eid']==$document["Eid"] && $_POST['pwd']==$document["password"]){
					echo $document ["txtage"];}
				}
				?>
				</td>
			</tr>
			
			<tr>
				<td><b>Date of birth :</b></td>
				<td>
				<?php				
				foreach ($cursor as $document)
				{	
					if($_POST['eid']==$document["Eid"] && $_POST['pwd']==$document["password"]){
					echo $document ["da_te"];}
				}
				?>
				</td>
			</tr>
			
			<tr>
				<td><b>Gender :</b></td>
				<td>
				<?php				
				foreach ($cursor as $document)
				{
					if($_POST['eid']==$document["Eid"] && $_POST['pwd']==$document["password"]){
					echo $document ["Gender"];}
				}
				?>
				</td>
			</tr>

			<tr>
				
				<td><b>Contact no :</b></td>
				<td>
				
				<?php				
				foreach ($cursor as $document)
				{
					if($_POST['eid']==$document["Eid"] && $_POST['pwd']==$document["password"]){
					echo $document ["no"];}
				}
				?>
				</td>
			</tr>
			<tr>
				
				<td><b>Address:</b></td>
				<td>
				
				<?php				
				foreach ($cursor as $document)
				{
					if($_POST['eid']==$document["Eid"] && $_POST['pwd']==$document["password"]){
					echo $document ["address"];}
				}
				?>
				</td>
			</tr>
			<tr>
				<td><b>city :</b></td>
				<td>
				<?php				
				foreach ($cursor as $document)
				{
					if($_POST['eid']==$document["Eid"] && $_POST['pwd']==$document["password"]){
					echo $document ["city"];}
				}
				?>
				</td>
			</tr>
			<tr>
				<td><b>State:</b></td>
				<td>
				<?php				
				foreach ($cursor as $document)
				{
					if($_POST['eid']==$document["Eid"] && $_POST['pwd']==$document["password"]){
					echo $document ["state"];}
				}
				?>
				</td>
			</tr>
			
			<tr>
			</tr>
				<tr>
					<td colspan=2>
					<input type="submit" value="submit">
					</td>
				</tr>

			</table>		
		</form></div>
		</center>
	</body>
</html>
