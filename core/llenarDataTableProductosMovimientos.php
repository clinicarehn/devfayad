<?php	
	$peticionAjax = true;
	require_once "configGenerales.php";
	require_once "mainModel.php";
	
	$insMainModel = new mainModel();
	
	$categoria = $_POST['categoria'];
	
	$result = $insMainModel->getProductosMovimientos($categoria);
	
	$arreglo = array();
	$data = array();

	while($row = $result->fetch_assoc()){				
		$data[] = array( 
			"barCode"=>$row['barCode'],
			"productos_id"=>$row['productos_id'],
			"colaborador_id"=>$row['colaborador_id'],
			"nombre"=>$row['nombre'],
			"cantidad"=>$row['cantidad'],
			"medida"=>$row['medida'],
			"categoria"=>$row['tipo_producto'],
			"precio_venta"=>$row['precio_venta'],
			"almacen"=>$row['almacen']			
		);		
	}
	
	$arreglo = array(
		"echo" => 1,
		"totalrecords" => count($data),
		"totaldisplayrecords" => count($data),
		"data" => $data
	);

	echo json_encode($arreglo);