<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$o=$_POST["pass5"];
$m = new MongoClient();
$db = $m->registration;
$collection = $db->per;
$cursor = $collection->find();
	
	foreach ($cursor as $info)
	{
		if($_POST["pam"] == $info['Pan'])
		{
			$u=$collection->update(array("password"=>$info["password"]),array('$set'=>array("password"=>$o)));
			//$document["password"]=$o;			
			echo "<script>alert('Password Changed')</script>";
			
		}
		else 
		{	
			echo "Stupid";
			
		}
	}
	header("Location: http://localhost/esdl2/home2.php",true,301);
}

?>
