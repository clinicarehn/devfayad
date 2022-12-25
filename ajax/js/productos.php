<script>
$(document).ready(function() {
    listar_productos();
	getEmpresaProductos();
});

//INICIO ACCIONES FROMULARIO PRODUCTOS
var listar_productos = function(){
	var table_productos  = $("#dataTableProductos").DataTable({
		"destroy":true,
		"ajax":{
			"method":"POST",
			"url":"<?php echo SERVERURL;?>core/llenarDataTableProductos.php"
		},
		"columns":[
			{"data":"image"},
			{"data":"barCode"},
			{"data":"nombre"},
			{"data":"medida"},
			{"data":"categoria"},
			{"data":"precio_compra",
				render: function (data, type) {
                    var number = $.fn.dataTable.render
                        .number(',', '.', 2, 'L ')
                        .display(data);
 
                    if (type === 'display') {
                        let color = 'green';
                        if (data < 0) {
                            color = 'red';
                        } 
 
                        return '<span style="color:' + color + '">' + number + '</span>';
                    }
 
                    return number;
                },
			},
			{"data":"precio_venta",
				render: function (data, type) {
                    var number = $.fn.dataTable.render
                        .number(',', '.', 2, 'L ')
                        .display(data);
 
                    if (type === 'display') {
                        let color = 'green';
                        if (data < 0) {
                            color = 'red';
                        } 
 
                        return '<span style="color:' + color + '">' + number + '</span>';
                    }
 
                    return number;
                },
			},
			{"data":"isv_venta"},
			{"data":"isv_compra"},			
			{"defaultContent":"<button class='table_editar btn btn-dark ocultar'><span class='fas fa-edit fa-lg'></span></button>"},
			{"defaultContent":"<button class='table_eliminar btn btn-dark ocultar'><span class='fa fa-trash fa-lg'></span></button>"}
		],
        "columnDefs":
		[{
			"targets": 0,
			"data": 'image',
			"render": function (data, type, row, meta) {
				return '<img class="image-product-table" src="<?php echo SERVERURL;?>vistas/plantilla/img/products/' + data + '" alt="' + data + '"height="100px" width="100px"/>';
			}
		}],		
        "lengthMenu": lengthMenu,
		"stateSave": true,
		"bDestroy": true,
		"responsive": true,
		"language": idioma_español,
		"dom": dom,
		"buttons":[
			{
				text:      '<i class="fas fa-sync-alt fa-lg"></i> Actualizar',
				titleAttr: 'Actualizar Productos',
				className: 'table_actualizar btn btn-secondary ocultar',
				action: 	function(){
					listar_productos();
				}
			},
			{
				text:      '<i class="fas fas fa-plus fa-lg"></i> Ingresar',
				titleAttr: 'Agregar Productos',
				className: 'table_crear btn btn-primary ocultar',
				action: 	function(){
					modal_productos();
				}
			},
			{
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel fa-lg"></i> Excel',
				titleAttr: 'Excel',
				title: 'Reporte Productos',
				messageBottom: 'Fecha de Reporte: ' + convertDateFormat(today()),
				className: 'table_reportes btn btn-success ocultar',
				exportOptions: {
						columns: [1,2,3,4,5,6,7]
				},
			},
			{
				extend:    'pdf',
				orientation: 'landscape',
				text:      '<i class="fas fa-file-pdf fa-lg"></i> PDF',
				titleAttr: 'PDF',
				title: 'Reporte Productos',
				messageBottom: 'Fecha de Reporte: ' + convertDateFormat(today()),
				exportOptions: {
						columns: [1,2,3,4,5,6,7]
				},				
				className: 'table_reportes btn btn-danger ocultar',
				customize: function ( doc ) {
					doc.content.splice( 1, 0, {
						margin: [ 0, 0, 0, 12 ],
						alignment: 'left',
						image: imagen,
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
	table_productos.search('').draw();
	$('#buscar').focus();

	editar_producto_dataTable("#dataTableProductos tbody", table_productos);
	eliminar_producto_dataTable("#dataTableProductos tbody", table_productos);
}

var editar_producto_dataTable = function(tbody, table){
	$(tbody).off("click", "button.table_editar");
	$(tbody).on("click", "button.table_editar", function(){
		var data = table.row( $(this).parents("tr") ).data();
		var url = '<?php echo SERVERURL;?>core/editarProductos.php';
		$('#formProductos #productos_id').val(data.productos_id);

		$.ajax({
			type:'POST',
			url:url,
			data:$('#formProductos').serialize(),
			success: function(registro){
				var datos = eval(registro);
				$('#formProductos').attr({ 'data-form': 'update' });
				$('#formProductos').attr({ 'action': '<?php echo SERVERURL;?>ajax/modificarProductosAjax.php' });
				$('#formProductos')[0].reset();
				$('#reg_producto').hide();
				$('#edi_producto').show();
				$('#delete_producto').hide();
				$('#formProductos #proceso_productos').val("Editar");
				evaluarCategoriaDetalle(datos[13]);
				$('#formProductos #medida').val(datos[1]);
				$('#formProductos #medida').selectpicker('refresh');
				$('#formProductos #almacen').val(datos[0]);
				$('#formProductos #almacen').selectpicker('refresh');
				$('#formProductos #producto').val(datos[2]);
				$('#formProductos #descripcion').val(datos[3]);
				$('#formProductos #precio_compra').val(datos[4]);
				$('#formProductos #precio_venta').val(datos[5]);
				$('#formProductos #tipo_producto').val(datos[6]);
				$('#formProductos #tipo_producto').selectpicker('refresh');
				$('#formProductos #producto_empresa_id').val(datos[11]);
				$('#formProductos #producto_empresa_id').selectpicker('refresh');
				$('#formProductos #porcentaje_venta').val(datos[13]);
				$('#formProductos #cantidad_minima').val(datos[14]);
				$('#formProductos #cantidad_maxima').val(datos[15]);
				$('#formProductos #producto_categoria').val(datos[16]);
				$('#formProductos #precio_mayoreo').val(datos[17]);
				$('#formProductos #cantidad_mayoreo').val(datos[18]);
				$('#formProductos #bar_code_product').val(datos[19]);
				$('#formProductos #producto_superior').val(datos[20]);

				if(datos[7] == 1){
					$('#formProductos #producto_isv_factura').attr('checked', true);
				}else{
					$('#formProductos #producto_isv_factura').attr('checked', false);
				}

				if(datos[8] == 1){
					$('#formProductos #producto_isv_compra').attr('checked', true);
				}else{
					$('#formProductos #producto_isv_compra').attr('checked', false);
				}

				if(datos[9] == 1){
					$('#formProductos #producto_activo').attr('checked', true);
				}else{
					$('#formProductos #producto_activo').attr('checked', false);
				}
				
				$("#formProductos #preview").attr("src", "<?php echo SERVERURL;?>vistas/plantilla/img/products/image_preview.png");

				//HABILITAR OBJETOS
				$('#formProductos #producto').attr("readonly", false);
				$('#formProductos #cantidad').attr("readonly", true);
				$('#formProductos #precio_compra').attr("readonly", false);
				$('#formProductos #precio_venta').attr("readonly", false);
				$('#formProductos #descripcion').attr("readonly", false);
				$('#formProductos #cantidad_minima').attr("readonly", false);
				$('#formProductos #cantidad_maxima').attr("readonly", false);
				$('#formProductos #cantidad_mayoreo').attr("readonly", false);
				$('#formProductos #porcentaje_venta').attr("readonly", false);
				$('#formProductos #producto_isv_factura').attr("disabled", false);
				$('#formProductos #producto_isv_compra').attr("disabled", false);
				$('#formProductos #producto_activo').attr("disabled", false);
				$('#formProductos #grupo_editar_bacode').show();

				//DESHABILITAR OBJETOS
				$('#formProductos #medida').attr("disabled", true);
				$('#formProductos #producto_superior').attr("disabled", true);	
				$('#formProductos #almacen').attr("disabled", true);				
				$('#formProductos #tipo_producto').attr("disabled", true);
				$('#formProductos #producto_categoria').attr("disabled", true);
				$('#formProductos #bar_code_product').attr("readonly", true);
				$('#formProductos #producto_empresa_id').attr("disabled", true);
				$('#formProductos #cantidad').attr("disabled", true);
				$('#formProductos #buscar_producto_empresa').hide();
				$('#formProductos #buscar_producto_categorias').hide();	
				$('#formProductos #estado_producto').show();
				
				//OCULTAR
				$('#formProductos #cantidad').hide();
				$('#div_cantidad_editar_producto').hide();

				$('#modal_registrar_productos').modal({
					show:true,
					keyboard: false,
					backdrop:'static'
				});
			}
		});
	});
}

var eliminar_producto_dataTable = function(tbody, table){
	$(tbody).off("click", "button.table_eliminar");
	$(tbody).on("click", "button.table_eliminar", function(){
		var data = table.row( $(this).parents("tr") ).data();
		var url = '<?php echo SERVERURL;?>core/editarProductos.php';
		$('#formProductos #productos_id').val(data.productos_id);

		$.ajax({
			type:'POST',
			url:url,
			data:$('#formProductos').serialize(),
			success: function(registro){
				var datos = eval(registro);
				$('#formProductos').attr({ 'data-form': 'delete' });
				$('#formProductos').attr({ 'action': '<?php echo SERVERURL;?>ajax/eliminarProductosAjax.php' });
				$('#formProductos')[0].reset();
				$('#reg_producto').hide();
				$('#edi_producto').hide();
				$('#delete_producto').show();
				$('#formProductos #proceso_productos').val("Eliminar");
				$('#formProductos #medida').val(datos[0]);
				$('#formProductos #medida').selectpicker('refresh');
				$('#formProductos #almacen').val(datos[1]);
				$('#formProductos #almacen').selectpicker('refresh');
				$('#formProductos #producto').val(datos[2]);
				$('#formProductos #descripcion').val(datos[3]);
				$('#formProductos #precio_compra').val(datos[4]);
				$('#formProductos #precio_venta').val(datos[5]);
				$('#formProductos #tipo_producto').val(datos[6]);
				$('#formProductos #tipo_producto').selectpicker('refresh');
				$('#formProductos #producto_empresa_id').val(datos[11]);
				$('#formProductos #producto_empresa_id').selectpicker('refresh');
				$('#formProductos #porcentaje_venta').val(datos[13]);
				$('#formProductos #cantidad_minima').val(datos[14]);
				$('#formProductos #cantidad_maxima').val(datos[15]);
				$('#formProductos #producto_categoria').val(datos[16]);				
				$('#formProductos #precio_mayoreo').val(datos[17]);
				$('#formProductos #cantidad_mayoreo').val(datos[18]);
				$('#formProductos #bar_code_product').val(datos[19]);
				
				$("#formProductos #preview").attr("src", "<?php echo SERVERURL;?>vistas/plantilla/img/products/image_preview.png");

				if(datos[7] == 1){
					$('#formProductos #producto_isv_factura').attr('checked', true);
				}else{
					$('#formProductos #producto_isv_factura').attr('checked', false);
				}

				if(datos[8] == 1){
					$('#formProductos #producto_isv_compra').attr('checked', true);
				}else{
					$('#formProductos #producto_isv_compra').attr('checked', false);
				}

				if(datos[9] == 1){
					$('#formProductos #producto_activo').attr('checked', true);
				}else{
					$('#formProductos #producto_activo').attr('checked', false);
				}
				
				//DESHABILITAR OBJETOS
				$('#formProductos #producto').attr("readonly", true);
				$('#formProductos #medida').attr("disabled", true);
				$('#formProductos #almacen').attr("disabled", true);
				$('#formProductos #cantidad').attr("readonly", true);
				$('#formProductos #precio_compra').attr("readonly", true);
				$('#formProductos #precio_venta').attr("readonly", true);
				$('#formProductos #descripcion').attr("readonly", true);
				$('#formProductos #cantidad_minima').attr("readonly", true);
				$('#formProductos #cantidad_maxima').attr("readonly", true);
				$('#formProductos #tipo_producto').attr("disabled", true);
				$('#formProductos #producto_categoria').attr("disabled", true);
				$('#formProductos #producto_isv_factura').attr("disabled", true);
				$('#formProductos #producto_isv_compra').attr("disabled", true);
				$('#formProductos #producto_activo').attr("disabled", true);
				$('#formProductos #bar_code_product').attr("readonly", true);
				$('#formProductos #producto_empresa_id').attr("disabled", true);
				$('#formProductos #precio_mayoreo').attr("readonly", true);
				$('#formProductos #porcentaje_venta').attr("readonly", true);				
				$('#formProductos #cantidad_mayoreo').attr("readonly", true);				
				$('#formProductos #almacen').attr("disabled", true);
				$('#formProductos #cantidad').attr("disabled", true);
				$('#formProductos #buscar_producto_empresa').hide();
				$('#formProductos #buscar_producto_categorias').hide();
				$('#formProductos #estado_producto').hide();
				$('#formProductos #grupo_editar_bacode').hide();

				$('#modal_registrar_productos').modal({
					show:true,
					keyboard: false,
					backdrop:'static'
				});
			}
		});
	});
}	

//INICIO EDITAR CODIGO DE BARRA
//SE LLAMA AL MODAL CUANDO PRESIONAMOS EN EDITAR CODIGO DE BARRA DE LOS PRODUCTOS
$('#formProductos #grupo_editar_bacode').on('click',function(e){
	e.preventDefault();
	
	$('#formEditarBarcode')[0].reset();
	$('#formEditarBarcode #pro_barcode').val("Editar");
	$('#formEditarBarcode #productos_id').val($('#formProductos #productos_id').val());
	$('#formEditarBarcode #producto').val($('#formProductos #producto').val());
	$('#modalEditarBarcode').modal({
		show:true,
		keyboard: false,
		backdrop:'static'
	});
});

$(document).ready(function(){
    $("#modalEditarBarcode").on('shown.bs.modal', function(){
        $(this).find('#formEditarBarcode #barcode').focus();
    });
});

$('#editar_barcode').on('click',function(e){
	e.preventDefault();
	
	editBarCode($('#formEditarBarcode #productos_id').val(), $('#formEditarBarcode #barcode').val(), $('#formEditarBarcode #producto').val());
});

function editBarCode(productos_id, barcode, producto){
	swal({
		title: "¿Estas seguro?",
		text: "¿Desea editar el Código de Barra para el producto: " + producto + "?",
		type: "info",
		showCancelButton: true,
		cancelButtonText: "Cancdelar",
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "¡Si, Deseo Editarlo!",
		closeOnConfirm: false 
	},
	function(){
		editarCodigoBarra(productos_id,barcode);
	});
}

function editarCodigoBarra(productos_id, barcode){
    var url = '<?php echo SERVERURL; ?>core/editBarCode.php';

    $.ajax({
       type:'POST',
       url:url,
       async: false,
       data:'productos_id='+productos_id+'&barcode='+barcode,
       success:function(data){
          if(data == 1){
            swal({
                title: "Success",
                text: "El Código de Barra ha sido actualizado satisfactoriamente",
                type: "success",
				confirmButtonClass: "btn-primary"
            });
			listar_productos();
			$('#formProductos #bar_code_product').val(barcode);
          }else if(data == 2){
            swal({
                title: "Error",
                text: "Error el El Código de Barra no se puede actualizar",
                type: "error",
				confirmButtonClass: "btn-danger"
            });
          }else if(data == 3){
            swal({
                title: "Error",
                text: "El El Código de Barra ya existe",
                type: "error",
				confirmButtonClass: "btn-danger"
            });
          }
      }
    });
}
//FIN EDITAR CODIGO DE BARRA

$(document).ready(function() {
	$('#formProductos #tipo_producto').on('change',function(){
		evaluarCategoria();
	});
});

function evaluarCategoria(){
	if($('#formProductos #tipo_producto').find('option:selected').text() == "Servicio"){
		$('#formProductos #cantidad').attr('readonly', true);
		$('#formProductos #precio_compra').attr('readonly', false);
		$('#formProductos #precio_venta').attr('readonly', false);
		$('#formProductos #precio_mayoreo').attr('readonly', false);
		$('#formProductos #cantidad_minima').attr('readonly', true);
		$('#formProductos #cantidad_maxima').attr('readonly', true);
		$('#formProductos #isv_si').attr('checked', false);
		$('#formProductos #isv_no').attr('checked', true);
		$('#formProductos #cantidad').val(1);
		$('#formProductos #precio_compra').val(0);
	}else if($('#formProductos #tipo_producto').find('option:selected').text() == "Insumos"){
		$('#formProductos #cantidad').attr('readonly', false);
		$('#formProductos #precio_compra').attr('readonly', false);
		$('#formProductos #precio_venta').attr('readonly', true);
		$('#formProductos #precio_mayoreo').attr('readonly', true);
		$('#formProductos #cantidad_minima').attr('readonly', false);
		$('#formProductos #cantidad_maxima').attr('readonly', false);
		$('#formProductos #cantidad').val(1);
		$('#formProductos #precio_venta').val(0);
		$('#formProductos #precio_mayoreo').val(0);
		$('#formProductos #isv_si').attr('checked', true);
		$('#formProductos #isv_no').attr('checked', false);
	}else{
		$('#formProductos #cantidad').attr('readonly', false);
		$('#formProductos #precio_compra').attr('readonly', false);
		$('#formProductos #precio_venta').attr('readonly', false);
		$('#formProductos #precio_mayoreo').attr('readonly', false);
		$('#formProductos #cantidad_minima').attr('readonly', false);
		$('#formProductos #cantidad_maxima').attr('readonly', false);
		$('#formProductos #isv_si').attr('checked', true);
		$('#formProductos #isv_no').attr('checked', false);
		$('#formProductos #cantidad').val('');
		$('#formProductos #precio_compra').val('');
	}
}

function evaluarCategoriaDetalle(TipoProducto){
	if(TipoProducto == "Servicio"){
		$('#formProductos #cantidad').attr('readonly', true);
		$('#formProductos #precio_compra').attr('readonly', true);
		$('#formProductos #precio_venta').attr('readonly', false);
		$('#formProductos #precio_mayoreo').attr('readonly', false);
		$('#formProductos #cantidad_minima').attr('readonly', true);
		$('#formProductos #cantidad_maxima').attr('readonly', true);
		$('#formProductos #isv_si').attr('checked', false);
		$('#formProductos #isv_no').attr('checked', true);
		$('#formProductos #cantidad').val(1);
		$('#formProductos #precio_compra').val(0);
	}else if(TipoProducto == "Insumos"){
		$('#formProductos #cantidad').attr('readonly', false);
		$('#formProductos #precio_compra').attr('readonly', false);
		$('#formProductos #precio_venta').attr('readonly', true);
		$('#formProductos #precio_mayoreo').attr('readonly', true);
		$('#formProductos #cantidad_minima').attr('readonly', false);
		$('#formProductos #cantidad_maxima').attr('readonly', false);
		$('#formProductos #concentracion').val("");
		$('#formProductos #cantidad').val(1);
		$('#formProductos #precio_venta').val(0);
		$('#formProductos #isv_si').attr('checked', true);
		$('#formProductos #isv_no').attr('checked', false);
	}else{
		$('#formProductos #cantidad').attr('readonly', false);
		$('#formProductos #precio_compra').attr('readonly', false);
		$('#formProductos #precio_venta').attr('readonly', false);
		$('#formProductos #precio_mayoreo').attr('readonly', false);
		$('#formProductos #cantidad_minima').attr('readonly', false);
		$('#formProductos #cantidad_maxima').attr('readonly', false);
		$('#formProductos #isv_si').attr('checked', true);
		$('#formProductos #isv_no').attr('checked', false);
		$('#formProductos #cantidad').val('');
		$('#formProductos #precio_compra').val('');
	}
}

//IMAGE FILE TYPE VALIDATION
$(document).on("click", ".browse", function() {
  var file = $(this)
    .parent()
    .parent()
    .parent()
    .find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
	var file = this.files[0];
	var imagefile = file.type;
	var match= ["image/jpeg","image/png","image/jpg"];
	if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
		swal({
			title: "Error",
			text: "Por favor seleccione una archivo valido con el formato (JPEG/JPG/PNG)",
			type: "error",
			confirmButtonClass: 'btn-danger'
		});
		$("#file").val('');
		return false;
	}else{
	  var fileName = e.target.files[0].name;
	  $("#formProductos #file_product").val(fileName);
	 
	  var reader = new FileReader();
	  reader.onload = function(e) {
		// get loaded data and render thumbnail.
		document.getElementById("preview").src = e.target.result;
	  };
	  // read the image file as a data URL.
	  reader.readAsDataURL(this.files[0]);		
	}	
});

$(document).ready(function(){
	$("#formProductos #porcentaje_venta").on("keyup", function(){	
		if($("#formProductos #precio_compra").val() != "" && $("#formProductos #porcentaje_venta").val() > 0 ){
			var precio_compra = $("#formProductos #precio_compra").val();
			var porcentaje = $("#formProductos #porcentaje_venta").val();
			var porcentajeCalculo = ((100 - parseFloat(porcentaje))/100);
			$("#formProductos #precio_venta").val( (parseFloat(precio_compra) / parseFloat(porcentajeCalculo)).toFixed(2) );
			$("#reg_producto").attr("disabled", false);
			$("#edi_producto").attr("disabled", false);
		}else{
			$("#formProductos #precio_venta").val("");
			$("#reg_producto").attr("disabled", true);
			$("#edi_producto").attr("disabled", true);
		}				
	});
});

//Math.floor($("#formProductos #precio_venta").val()*100) PERMITE EVALUAR NUMEROS MAYORES QUE MIL
$(document).ready(function(){
	$("#formProductos #precio_venta").on("keyup", function(){
		if($("#formProductos #precio_compra").val() != ""){
			if(Math.floor($("#formProductos #precio_venta").val()*100) > Math.floor($("#formProductos #precio_compra").val()*100)){
				var precio_compra = $("#formProductos #precio_compra").val();
				var precio_venta = $("#formProductos #precio_venta").val();
				var porcentajeCalculo = 100 - ((parseFloat(precio_compra)/parseFloat(precio_venta))*100);
				
				$("#formProductos #porcentaje_venta").val( parseFloat(porcentajeCalculo).toFixed(2) );	
				$("#reg_producto").attr("disabled", false);
				$("#edi_producto").attr("disabled", false);
			}else{
				$("#formProductos #porcentaje_venta").val("0");
				$("#reg_producto").attr("disabled", true);
				$("#edi_producto").attr("disabled", true);
			}
		}else{
			$("#formProductos #porcentaje_venta").val("0");
			$("#reg_producto").attr("disabled", true);
			$("#edi_producto").attr("disabled", true);
		}				
	});
});

$(document).ready(function(){
	$("#formProductos #cantidad_mayoreo").on("keyup", function(){	
		if($("#formProductos #cantidad_mayoreo").val() < 3 ){
			$("#formProductos #cantidad_mayoreo").val("");
			$("#formProductos #cantidad_mayoreo").val(3);
			$("#reg_producto").attr("disabled", false);
			$("#edi_producto").attr("disabled", false);
		}else{
			$("#reg_producto").attr("disabled", false);
			$("#edi_producto").attr("disabled", false);
		}				
	});
});

$('#formProductos #label_producto_activo').html("Activo");
	
$('#formProductos .switch').change(function(){    
    if($('input[name=producto_activo]').is(':checked')){
        $('#formProductos #label_producto_activo').html("Activo");
        return true;
    }
    else{
        $('#formProductos #label_producto_activo').html("Inactivo");
        return false;
    }
});		
    
$('#formProductos #label_producto_isv_factura').html("Sí");

$('#formProductos .switch').change(function(){    
    if($('input[name=producto_isv_factura]').is(':checked')){
        $('#formProductos #label_producto_isv_factura').html("Sí");
        return true;
    }
    else{
        $('#formProductos #label_producto_isv_factura').html("No");
        return false;
    }
});	

$('#formProductos #label_producto_isv_compra').html("Sí");

$('#formProductos .switch').change(function(){    
    if($('input[name=producto_isv_compra]').is(':checked')){
        $('#formProductos #label_producto_isv_compra').html("Sí");
        return true;
    }
    else{
        $('#formProductos #label_producto_isv_compra').html("No");
        return false;
    }
});	

</script>