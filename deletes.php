<?php
$e=$_POST['em'];
$e=$_GET['em'];
$m=new MongoClient();
$db=$m->registration; 

$collection=$db->social;
$cursor=$collection->find();


foreach($cursor as $document)
{
	if($e==$document['pAn'])
	{
		$o=$collection->remove($document);
		echo "<h2>DOCUMENT DELETED SUCCESSFULLY</h2>";
	}
	else
	{
	echo "";
	}
}

?>


