<!DOCTYPE html>
<html>
<head>
<title>Family Info</title>
</head>
<body bgcolor="#F0F3FB">
<hr></hr>
<h1 align="center"><font color="blue">Family Information</font></h1>
<hr></hr>
<form action="familytoMedical.php" method="POST">
				
<center>
<fieldset>
<legend>Father Details</legend>
Father Name *: <input type="text" name="fname1" autocomplete="off" required>
<br><br/>
Phone number *:<input type="text" name="txtmno" size="2" maxlength="2" pattern="[1-9]{2}" autocomplete="off"  required>
<input type="text" name="vone" maxlength="10" pattern="[0-9]{10}" autocomplete="off" required>  </td>
<br><br />
Occuption *:
<select name="dropdown">
<option value="Select...."> Select....</option>
<option value="govt employee" >Govt Employee</option>
<option value="self employee">Self Employee</option>
</select>
<br></br>
<tr>
			<td>
					<td> Adhar card *: </td>
                                   	<input type="radio" name="19" value="Yes">Yes
                                    	<input type="radio" name="19" value="No">No

                                </td>
		</tr>
<br></br>
<tr>
			<td>
					<td> Pann card: </td>
                                   	<input type="radio" name="20" value="Yes">Yes
                                    	<input type="radio" name="20" value="No">No

                                </td>
		</tr>
</fieldset>
<br></br>
<fieldset>
<legend>Mother Details</legend>
Mother Name *: <input type="text" name="mname" autocomplete="off" required>
<br><br/>
Phone number *:<input type="text" name="txtmno1" size="2" maxlength="2" pattern="[1-9]{2}" autocomplete="off" required>
<input type="text" name="vone1" maxlength="10" pattern="[0-9]{10}"autocomplete="off" required>   </td>
<br><br />
Occuption *:
<select name="dropdown2">
<option value="Select...."> Select....</option>
<option value="govt employee">Govt Employee</option>
<option value="self employee">Self Employee</option>
</select>
<br></br>
<td>
					<td> Adhar card *: </td>
                                   	<input type="radio" name="21" value="Yes">Yes
                                    	<input type="radio" name="21" value="No">No
                                    	<input type="hidden" name="" value="<?php echo $_POST['21']?>">

                                </td>
		</tr>
<br></br>
<tr>
			<td>
					<td> Pannn card *: </td>
                                   	<td><input type="radio" name="22" value="Yes">Yes</td>
                                    	<td><input type="radio" name="22" value="No">No</td>

                                </td>
		</tr>

                   	</tr>
		
</table>
</fieldset>
<br></br>
<fieldset>
<legend>Other Details</legend>
No Of Siblings: <input type="text" name="siblings" autocomplete="off">
<br><br/>
Family Income *:<input type="text" name="income" autocomplete="off" required>
<br></br>
Economic Class:
<select name="dropdown3">
<option> Select....</option>
<option value="High Class" >High Class</option>
<option value="Middle Class">Middle Class</option>
<option value="Backward Class">Backward Class</option>
</select>
<br></br>
<table>
           <tr>
                            	<td></td>
		
                             	<td>

                                   
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;                             <input type="Reset" value="Reset">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;				<input type="submit" value="Next" >
                               </td>
                   </tr>   	    
</table>
		<input type="hidden" name="Pan" value="<?php echo$_GET['Pan']; 
		?>">
</form>
</fieldset>
</center>
</body>
</html>
