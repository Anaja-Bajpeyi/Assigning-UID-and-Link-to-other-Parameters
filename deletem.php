<?php
$f=$_POST['em'];
$e=$_GET['em'];
$m=new MongoClient();
$db=$m->registration; 
$collection=$db->medical;
$cursor=$collection->find();


foreach($cursor as $document)
{
	if($e==$document['P'])
	{
		$o=$collection->remove($document);
		echo "<h2>DOCUMENT DELETED SUCCESSFULLY</h2>";
	}
	else
	{
	echo "";
	}
}
//header("Location:http://localhost/esdl2/deletion.php?",true,301);


?>

