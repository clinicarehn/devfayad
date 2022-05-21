<script>
$(document).ready(function() {
    listar_almacen();
	getEmpresaAlmacen();
	getUbicacionAlmacen();
});

//INICIO ALMACEN
var listar_almacen = function(){
	var table_almacen  = $("#dataTableConfAlmacen").DataTable({
		"destroy":true,
		"ajax":{
			"method":"POST",
			"url":"<?php echo SERVERURL; ?>core/llenarDataTableAlmacen.php"
		},
		"columns":[
			{"data":"empresa"},
			{"data":"almacen"},
			{"data":"ubicacion"},
			{"defaultContent":"<button class='table_editar btn btn-dark ocultar'><span class='fas fa-edit'></span></button>"},
			{"defaultContent":"<button class='table_eliminar btn btn-dark ocultar'><span class='fa fa-trash'></span></button>"}
		],
        "lengthMenu": lengthMenu,
		"stateSave": true,
		"bDestroy": true,
		"language": idioma_español,//esta se encuenta en el archivo main.js
		"dom": dom,
		"columnDefs": [
		  { width: "30%", targets: 0 },
		  { width: "30%", targets: 1 },
		  { width: "30%", targets: 2 },
		  { width: "5%", targets: 3 },
		  { width: "5%", targets: 4 }
		],		
		"buttons":[
			{
				text:      '<i class="fas fa-sync-alt fa-lg"></i> Actualizar',
				titleAttr: 'Actualizar Almacén',
				className: 'table_actualizar btn btn-secondary ocultar',
				action: 	function(){
					listar_almacen();
				}
			},
			{
				text:      '<i class="fab fas fa-warehouse fa-lg"></i> Crear',
				titleAttr: 'Agregar Almacén',
				className: 'table_crear btn btn-primary ocultar',
				action: 	function(){
					modalAlmacen();
				}
			},
			{
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel fa-lg"></i> Excel',
				titleAttr: 'Excel',
				title: 'Reporte Almacén',
				messageBottom: 'Fecha de Reporte: ' + convertDateFormat(today()),
				className: 'table_reportes btn btn-success ocultar'
			},
			{
				extend:    'pdf',
				text:      '<i class="fas fa-file-pdf fa-lg"></i> PDF',
				titleAttr: 'PDF',
				title: 'Reporte Almacén',
				messageBottom: 'Fecha de Reporte: ' + convertDateFormat(today()),
				className: 'table_reportes btn btn-danger ocultar',
				customize: function ( doc ) {
					doc.content.splice( 1, 0, {
						margin: [ 0, 0, 0, 12 ],
						alignment: 'left',
						image: imagen,//esta se encuenta en el archivo main.js
						width:100,
                        height:45
					} );
				}
			}
		],
		"drawCallback": function( settings ) {
        	getPermisosTipoUsuarioAccesosTable(getPrivilegioTipoUsuario());
    	}
	});
	table_almacen.search('').draw();
	$('#buscar').focus();

	edit_alamcen_dataTable("#dataTableConfAlmacen tbody", table_almacen);
	delete_almacen_dataTable("#dataTableConfAlmacen tbody", table_almacen);
}

var edit_alamcen_dataTable = function(tbody, table){
	$(tbody).off("click", "button.table_editar");
	$(tbody).on("click", "button.table_editar", function(){
		var data = table.row( $(this).parents("tr") ).data();
		var url = '<?php echo SERVERURL;?>core/editarAlmacen.php';
		$('#formAlmacen #almacen_id').val(data.almacen_id);

		$.ajax({
			type:'POST',
			url:url,
			data:$('#formAlmacen').serialize(),
			success: function(registro){
				var valores = eval(registro);
				$('#formAlmacen').attr({ 'data-form': 'update' });
				$('#formAlmacen').attr({ 'action': '<?php echo SERVERURL;?>ajax/modificarAlmacenAjax.php' });
				$('#formAlmacen')[0].reset();
				$('#reg_almacen').hide();
				$('#edi_almacen').show();
				$('#delete_almacen').hide();
				$('#formAlmacen #pro_almacen').val("Editar");
				$('#formAlmacen #ubicacion_almacen').val(valores[0]);
				$('#formAlmacen #almacen_almacen').val(valores[1]);
				$('#formAlmacen #almacen_empresa_id').val(valores[3]);

				if(valores[2] == 1){
					$('#formAlmacen #almacen_activo').attr('checked', true);
				}else{
					$('#formAlmacen #almacen_activo').attr('checked', false);
				}

				//HABILITAR OBJETOS			
				$('#formAlmacen #ubicacion_almacen').attr('disabled', false);
				$('#formAlmacen #almacen_activo').attr('disabled', false);
				$('#formAlmacen #almacen_empresa_id').attr('disabled', true);
				$('#formAlmacen #buscar_almacen_empresa').hide();				

				//DESHABILITAR OBJETO
				$('#formAlmacen #ubicacion_almacen').attr('disabled', true);
				$('#formAlmacen #almacen_empresa_id').attr('disabled', true);

				$('#modal_almacen').modal({
					show:true,
					keyboard: false,
					backdrop:'static'
				});
			}
		});
	});
}

var delete_almacen_dataTable = function(tbody, table){
	$(tbody).off("click", "button.table_eliminar");
	$(tbody).on("click", "button.table_eliminar", function(){
		var data = table.row( $(this).parents("tr") ).data();
		var url = '<?php echo SERVERURL;?>core/editarAlmacen.php';
		$('#formAlmacen #almacen_id').val(data.almacen_id);

		$.ajax({
			type:'POST',
			url:url,
			data:$('#formAlmacen').serialize(),
			success: function(registro){
				var valores = eval(registro);
				$('#formAlmacen').attr({ 'data-form': 'update' });
				$('#formAlmacen').attr({ 'action': '<?php echo SERVERURL;?>ajax/eliminarAlmacenAjax.php' });
				$('#formAlmacen')[0].reset();
				$('#reg_almacen').hide();
				$('#edi_almacen').hide();
				$('#delete_almacen').show();
				$('#formAlmacen #pro_almacen').val("Eliminar");
				$('#formAlmacen #ubicacion_almacen').val(valores[0]);
				$('#formAlmacen #almacen_almacen').val(valores[1]);
				$('#formAlmacen #almacen_empresa_id').val(valores[3]);

				if(valores[2] == 1){
					$('#formAlmacen #almacen_activo').attr('checked', true);
				}else{
					$('#formAlmacen #almacen_activo').attr('checked', false);
				}

				//DESHABIITAR OBJETOS
				$('#formAlmacen #almacen_almacen').attr('readonly', true);				
				$('#formAlmacen #ubicacion_almacen').attr('disabled', true);
				$('#formAlmacen #almacen_activo').attr('disabled', true);
				$('#formAlmacen #almacen_empresa_id').attr('disabled', true);
				$('#formAlmacen #buscar_almacen_empresa').hide();

				$('#modal_almacen').modal({
					show:true,
					keyboard: false,
					backdrop:'static'
				});
			}
		});
	});
}

//INICIO FORMULARIO ALMACEN
function modalAlmacen(){
	$('#formAlmacen').attr({ 'data-form': 'save' });
	$('#formAlmacen').attr({ 'action': '<?php echo SERVERURL; ?>ajax/agregarAlmacenAjax.php' });
	$('#formAlmacen')[0].reset();
	$('#formAlmacen #pro_almacen').val("Registro");
	$('#reg_almacen').show();
	$('#edi_almacen').hide();
	$('#delete_almacen').hide();
	getUbicacionAlmacen();
	getAlmacen();
	//HABILITAR OBJETOS
	$('#formAlmacen #almacen_almacen').attr('readonly', false);
	$('#formAlmacen #ubicacion_almacen').attr('disabled', false);
	$('#formAlmacen #almacen_activo').attr('disabled', false);
	$('#formAlmacen #almacen_empresa_id').attr('disabled', false);
	$('#formAlmacen #buscar_almacen_empresa').show();	

	$('#modal_almacen').modal({
		show:true,
		keyboard: false,
		backdrop:'static'
	});
}
//FIN FORMULARIO ALMACEN

function getUbicacionAlmacen(){
    var url = '<?php echo SERVERURL;?>core/getUbicacion.php';

	$.ajax({
        type: "POST",
        url: url,
	    async: true,
        success: function(data){
		    $('#formAlmacen #ubicacion_almacen').html("");
			$('#formAlmacen #ubicacion_almacen').html(data);
		}
     });
}

function getEmpresaAlmacen(){
    var url = '<?php echo SERVERURL;?>core/getEmpresa.php';

	$.ajax({
        type: "POST",
        url: url,
	    async: true,
        success: function(data){
		    $('#formAlmacen #almacen_empresa_id').html("");
			$('#formAlmacen #almacen_empresa_id').html(data);			
		}
     });
}

$(document).ready(function(){
    $("#modal_almacen").on('shown.bs.modal', function(){
        $(this).find('#formAlmacen #almacen_almacen').focus();
    });
});

$('#formAlmacen #label_almacen_activo').html("Activo");
	
$('#formAlmacen .switch').change(function(){    
    if($('input[name=almacen_activo]').is(':checked')){
        $('#formAlmacen #label_almacen_activo').html("Activo");
        return true;
    }
    else{
        $('#formAlmacen #label_almacen_activo').html("Inactivo");
        return false;
    }
});	
</script>