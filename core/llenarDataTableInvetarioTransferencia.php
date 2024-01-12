<?php	
	$peticionAjax = true;
	require_once "configGenerales.php";
	require_once "mainModel.php";
	
	$insMainModel = new mainModel();

	$datos = [
		"tipo_producto_id" => $_POST['tipo_producto_id'],
		"bodega" => $_POST['bodega'],
		"productos_id" => $_POST['productos_id'] 
	];	
	
	$result = $insMainModel->getTranferenciaProductos($datos);
	
	$arreglo = array();
	$data = array();
	$medidaName = '';
	$entradaH = 0;
	$salidaH = 0;

	
	while($row = $result->fetch_assoc()){		
		
		$result_productos = $insMainModel->getCantidadProductos($row['productos_id']);	
		if($result_productos->num_rows>0){
			while($consulta = $result_productos->fetch_assoc()){
				if($row['almacen_id'] == 0 || $row['almacen_id'] == null){
					$bodega = "Sin bodega";
				}else{
					$bodega = $row['bodega'];
				}

				$data[] = array( 
					"fecha_registro"=>$row['fecha_registro'],
					"barCode"=>$row['barCode'],
					"producto"=>$row['producto'],
					"medida"=>$row['medida'],
					"movimientos_id"=>$row['movimientos_id'],
					"entrada"=>$row['entrada'],
					"salida"=>$row['salida'],
					"saldo"=>$row['saldo'],
					"bodega"=>$bodega,
					"id_bodega"=>$row['almacen_id'],
					"productos_id"=>$row['productos_id'],
					"superior"=>$row['id_producto_superior'],			
					"image"=>$row['image']
				);
			}
		}	
	}
	
	$arreglo = array(
		"echo" => 1,
		"totalrecords" => count($data),
		"totaldisplayrecords" => count($data),
		"data" => $data
	);

	echo json_encode($arreglo);
?>