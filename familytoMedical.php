<?php

	if ( $_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$m = new MongoClient();
		$db = $m->registration;
		
		$collection1 = $db->family;

		$ap=$_POST["fname1"];
		$ip=$_POST["txtmno"];
		$jp=$_POST["vone"];
		$kp=$_POST["dropdown"];
		$up=$_POST["mname"];
		$vp=$_POST["txtmno1"];
		$wp=$_POST["vone1"];
		$xp=$_POST["dropdown2"];
		$yp=$_POST["siblings"];
		$zp=$_POST["income"];
		$fp=$_POST["dropdown3"];

		$doc = array('Pan1' => $_POST['Pan'],
					"fname1"=>$ap,
					"no3"=>$ip.'-'.$jp,
					"dropdown"=>$kp,
					"Adhar"=>$_POST["19"],
					"Pann"=>$_POST["20"],
					"mname"=>$up,
					"no1"=>$vp.'-'.$wp,
					"dropdown2"=>$xp,
					"Adhar1"=>$_POST["21"],
					"Pannn"=>$_POST["22"],
					"siblings"=>$yp,
					"income"=>$zp,
					"dropdown3"=>$fp
			    );
		
		$collection1->insert($doc);
		header("Location:http://localhost/esdl2/medi.php?Pan=".$_POST['Pan'],true,301);

	}
?>
