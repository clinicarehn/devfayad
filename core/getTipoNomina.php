<?php
	$peticionAjax = true;
	require_once "configGenerales.php";
	require_once "mainModel.php";
	
	$insMainModel = new mainModel();
	
	$result = $insMainModel->getTipoNomina();

	if($result->num_rows>0){	
		while($consulta2 = $result->fetch_assoc()){
			echo '<option value="'.$consulta2['tipo_nomina_id'].'">'.$consulta2['nombre'].'</option>';
		}
	}else{
		echo '<option value="">No hay datos que mostrar</option>';
	}
?>	