<?php
$f=$_POST['em'];
$e=$_GET['em'];
$m=new MongoClient();
$db=$m->registration; 
$collection=$db->per;
$cursor=$collection->find();

foreach($cursor as $info)
{
	if($e==$info['Pan'])
	{
	
		$o=$collection->remove($info);
		echo "<h2>DOCUMENT DELETED SUCCESSFULLY</h2>";	

	}
	else
	{
	echo "";
	}
}

	
?>



