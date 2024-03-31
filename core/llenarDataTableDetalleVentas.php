<?php	
	$peticionAjax = true;
	require_once "configGenerales.php";
	require_once "mainModel.php";
	
	$insMainModel = new mainModel();
	
	$datos = [
		"fechai" => $_POST['fechai'],
		"fechaf" => $_POST['fechaf'],		
		"productos_id" => $_POST['productos_id'],
		"colaboradores_id" => $_POST['colaboradores_id'],
	];	

	$result = $insMainModel->GetDetalleVentas($datos);
	
	$data = array();
	
	while($row = $result->fetch_assoc()){				
		$data[] = array( 
			"numero"=>$row['numero'],
			"Producto"=>$row['Producto'],
			"Precio"=>$row['Precio'],
			"Cantidad"=>$row['Cantidad'],
			"ISV"=>$row['ISV'],
			"Descuento"=>$row['Descuento'],
			"Total"=>$row['Total'],
			"Vendedor"=>$row['Vendedor']		  
		);		
	}
	
	$response = array(
		"echo" => 1,
		"totalrecords" => count($data),
		"totaldisplayrecords" => count($data),
		"data" => $data
	);

	echo json_encode($response);