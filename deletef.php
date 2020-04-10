<?php
$e=$_POST['em'];
$f=$_GET['em'];
$m=new MongoClient();
$db=$m->registration; 

$collection1=$db->family;
$cursor2=$collection1->find();
foreach($cursor2 as $doc)
{
	if($f==$doc['Pan1'])
	{
	
		$s=$collection1->remove($doc);
		echo "<h2>DOCUMENT DELETED SUCCESSFULLY</h2>";	

	}
	else
	{
	echo "";
	}
}

//header("Location:http://localhost/esdl2/deletion.php?",true,301);
?>

