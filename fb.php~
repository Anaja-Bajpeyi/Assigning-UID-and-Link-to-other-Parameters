<?php

	if ( $_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$m = new MongoClient();
		$db = $m->registration;
		
		$collection1 = $db->back;
		$document = array('Pans' => $_POST['pan8'],
					"name"=>$_POST['name'],
					"cno"=>$_POST['cno'],
					"comment"=>$_POST['comment']
		);
	$collection1->insert($document);
		header("Location:http://localhost/esdl2/home2.php",true,301);

	}
?>
