<?php	
	$peticionAjax = true;
	require_once "configGenerales.php";
	require_once "mainModel.php";
	
	$insMainModel = new mainModel();

	$datos = [
		"tipo_factura_reporte" => $_POST['tipo_factura_reporte'],
		"fechai" => $_POST['fechai'],
		"fechaf" => $_POST['fechaf'],		
		"facturador" => $_POST['facturador'],
		"vendedor" => $_POST['vendedor'],
	];	
	
	$result = $insMainModel->consultaVentas($datos);
	
	$arreglo = array();
	$data = [];
	$footer_total = 0;
	
	while($row = $result->fetch_assoc()){
	   $facturas_id = $row['facturas_id'];
	   $result_detalle_venta = $insMainModel->getDetalleFactura($row['facturas_id']);
	   $subtotal = 0;
	   $isv = 0;
	   $subCosto = 0;
	   $descuento = 0;
	   $total = 0;
	   $ganancia = 0;
	   
	   while($row1 = $result_detalle_venta->fetch_assoc()){
			$subtotal += ($row1['precio'] * $row1['cantidad']);
			$subCosto += ($row1['cantidad'] * $row1['costo']);
			$isv += $row1['isv_valor'];
			$descuento += $row1['descuento'];
	   }
	   
	   $subtotal = $subtotal;
	   $isv = $isv;
	   $descuento = $descuento;
	   $total = $row['total'];

	   $ganancia = doubleval($subtotal) - doubleval($subCosto) - doubleval($isv) - doubleval($descuento);	
	   
	   if($row['tipo_documento'] == 'Contado'){
			$color = 'bg-c-green';
	   }

	   if($row['tipo_documento'] == 'Crédito'){
			//CONSULTAMOS LOS PAGOS DEL CLIENTE
			$result_cxpFacturaPago = $insMainModel->consultaCXPagoFactura($facturas_id);

			if($result_cxpFacturaPago->num_rows>0){
				$color = 'bg-c-green';
			}else{
				$color = 'bg-warning';
			}			
	   }

	   $data[] = array( 
			"facturas_id" => $row['facturas_id'],
			"fecha" => $row['fecha'],
			"tipo_documento" => $row['tipo_documento'],
			"cliente" => $row['cliente'],
			"numero" => $row['numero'],
			"subtotal" => number_format(floor($subtotal * 100) / 100, 2),   
			"ganancia" => number_format(floor($ganancia * 100) / 100, 2),
			"isv" => number_format(floor($isv * 100) / 100, 2),   
			"descuento" => number_format(floor($descuento * 100) / 100, 2),
			"total" => number_format(floor($total * 100) / 100, 2),
			"color" => $color,
			"footer_total" => number_format(floor($footer_total * 100) / 100, 2),
			"vendedor" => $row['vendedor'],    
			"facturador" => $row['facturador'],  
		);		
	}
	
	$arreglo = array(
		"echo" => 1,
		"totalrecords" => count($data),
		"totaldisplayrecords" => count($data),
		"data" => $data
	);

	echo json_encode($arreglo);	
?>