<?php	
	$peticionAjax = true;
	require_once "configGenerales.php";
	require_once "mainModel.php";
	
	$insMainModel = new mainModel();
	
	$colaborador_id = $_POST['colaborador_id'];
	$result = $insMainModel->getColaboradoresEdit($colaborador_id);
	$valores2 = $result->fetch_assoc();
	
	$datos = array(
		0 => $valores2['nombre'], 
		1 => $valores2['apellido'],
		2 => $valores2['identidad'],
		3 => $valores2['telefono'],						
		4 => $valores2['puestos_id'],
		5 => $valores2['empresa_id'],		
		6 => $valores2['estado'],
		7 => $valores2['colaboradores_id'],	
	);
	echo json_encode($datos);