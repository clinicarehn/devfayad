<?php	
	$peticionAjax = true;
	
	if(!isset($_SESSION['user_sd'])){ 
	   session_start(['name'=>'SD']); 
	}

	$privilegio_id = $_SESSION['privilegio_sd'];

	$datos = array(
		0 => $privilegio_id, 					
	);
	echo json_encode($datos);
?>	