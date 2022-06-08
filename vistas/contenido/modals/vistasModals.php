<div class="modal fade" id="modalLogin">
	<div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><i class="fas fa-sign-in-alt"></i> Autorización</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">				
			<form id="formLogin" action="" method="POST" data-form="" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <input type="text" id="autorizacion_user" name="autorizacion_user" class="form-control" placeholder="login">
					</div>				
				</div>
				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <input type="text" id="autorizacion_pass" name="autorizacion_pass" class="form-control" placeholder="password">
					</div>							
				</div>				  			  
				
			</form>
        </div>	
		<div class="modal-footer">
			<input type="submit" class="btn btn-primary ml-2" value="Log In">			
		</div>			
      </div>
    </div>
</div>

<!--INICIO MODAL BUSQUEDA DE CUENTAS CONTABLES-->
<div class="modal fade" id="modal_buscar_cuentas_contables">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buscar Cuentas</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formulario_busqueda_cuentas_contables">				
				<div class="form-group">				  
					<div class="col-md-12">			
						<div class="overflow-auto">											
							<table id="DatatableBusquedaCuentasContables" class="table table-striped table-condensed table-hover" style="width:100%">
								<thead>
									<tr>
										<th>Seleccione</th>
										<th>Código</th>
										<th>Nombre</th>
									</tr>
								</thead>
							</table>
						</div>				
					</div>				  
				</div>
			</form>
        </div>
		<div class="modal-footer">

		</div>			
      </div>
    </div>
</div>
<!--FIN MODAL BUSQUEDA DE CUENTAS CONTABLES-->

<!--INICIO MODAL PARA EL INGRESO DE CUENTAS CONTABLES-->
<div class="modal fade" id="modalCuentascontables">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Cuentas</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">		
			<form class="form-horizontal FormularioAjax" id="formCuentasContables" action="" method="POST" data-form="" enctype="multipart/form-data">				
				<div class="form-row">
					<div class="col-md-12 mb-3">
					    <input type="hidden" required="required" readonly id="cuentas_id" name="cuentas_id"/>
						<div class="input-group mb-3">
							<input type="text" required readonly id="pro_cuentas" name="pro_cuentas" class="form-control"/>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fa fa-plus-square fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
					  <label for="cuenta_codigo">Código <span class="priority">*<span/></label>
					  <input type="text" required id="cuenta_codigo" name="cuenta_codigo" placeholder="Código" class="form-control" maxlength="11" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"/>
					</div>
					<div class="col-md-8 mb-3">
					  <label for="cuenta_nombre">Nombre <span class="priority">*<span/></label>
					  <input type="text" required id="cuenta_nombre" name="cuenta_nombre" placeholder="Descripción" class="form-control"  maxlength="30" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"/>
					</div>					
				</div>
				<div class="form-group" id="estado_cuentas_contables">				  
				  <div class="col-md-12">			
						<label class="switch">
							<input type="checkbox" id="cuentas_activo" name="cuentas_activo" value="1" checked>
							<div class="slider round"></div>
						</label>
						<span class="question mb-2" id="label_cuentas_activo"></span>				
				  </div>				  
				</div>	
				<div class="RespuestaAjax"></div> 
			</form>
        </div>	
		<div class="modal-footer">
			<button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="reg_cuentas" form="formCuentasContables"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
			<button class="editar btn btn-warning ml-2" type="submit" style="display: none;" id="edi_cuentas" form="formCuentasContables"><div class="sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Editar</button>
			<button class="eliminar btn btn-danger ml-2" type="submit" style="display: none;" id="delete_cuentas" form="formCuentasContables"><div class="sb-nav-link-icon"></div><i class="fa fa-trash fa-lg"></i> Eliminar</button>				
		</div>			
      </div>
    </div>
</div>
<!--FIN MODAL PARA EL INGRESO DE CUENTAS CONTABLES-->

<!--INICIO MODAL USUARIOS-->
<div class="modal fade" id="modal_registrar_usuarios">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Usuarios</h4>    
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formUsers" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">	
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<div class="input-group mb-3">
							<input type="hidden" id="usuarios_id" name="usuarios_id" class="form-control">
							<input type="hidden" id="usuarios_colaborador_id" name="usuarios_colaborador_id" class="form-control" required>
							<input type="text" id="proceso_usuarios"  class="form-control" readonly>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fa fa-plus-square fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>					
				<div class="form-row">
					<div class="input-group mb-3">
					  <input type="text" class="form-control" placeholder="Colaborador" id="colaborador_id_usuario" name="colaborador_id_usuario" aria-label="Colaborador" aria-describedby="basic-addon2" readonly required>
					 <div class="input-group-append" id="buscar_colaboradores">				
						<span data-toggle="tooltip" data-placement="top" title="Búsqueda de Productos"><a data-toggle="modal" href="#" class="btn btn-outline-success form-control buscar_productos"><div class="sb-nav-link-icon"></div><i class="fas fa-search-plus fa-lg"></i></a></span>
					 </div>
					</div>	 			
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="nickname">Nick Name <span class="priority">*<span/></label>
						<div class="input-group mb-3">
						  <input type="text" class="form-control" placeholder="Usuario" id="nickname" name="nickname" aria-label="Correo" aria-describedby="basic-addon2" required>
						  <div class="input-group-append">				
							<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fas fa-user"></i></span>
						  </div>
						</div>	 
					</div>
					<div class="col-md-6 mb-3">
						<label for="correo_usuario">Correo <span class="priority">*<span/></label>
						<div class="input-group mb-3">
						  <input type="email" class="form-control" placeholder="Correo" id="correo_usuario" name="correo_usuario" aria-label="Correo" aria-describedby="basic-addon2" required>
						  <div class="input-group-append">				
							<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fas fa-envelope-square"></i></span>
						  </div>
						</div>	 
					</div>										
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="empresa">Empresa <span class="priority">*<span/></label>
						<select class="form-control" id="empresa_usuario" name="empresa_usuario" required>			  
						</select>
					</div>						
					<div class="col-md-6 mb-3">
					  <label for="tipo_user">Tipo Usuario <span class="priority">*<span/></label>
					  <select class="form-control" id="tipo_user" name="tipo_user" required>						  
					  </select>
					</div>															
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
					  <label for="tipo_user">Privilegio <span class="priority">*<span/></label>
					  <select class="form-control" id="privilegio_id" name="privilegio_id" required>						  
					  </select>
					</div>																
				</div>				
				<div class="form-group" id="estado_usuarios">				  
				  <div class="col-md-12">			
						<label class="switch">
							<input type="checkbox" id="usuarios_activo" name="usuarios_activo" value="1" checked>
							<div class="slider round"></div>
						</label>
						<span class="question mb-2" id="label_usuarios_activo"></span>				
				  </div>				  
				</div>			   
				<div class="RespuestaAjax"></div>					 
			</form>
        </div>
		<div class="modal-footer">
			<button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="reg_usuario" form="formUsers"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
			<button class="editar btn btn-warning ml-2" type="submit" style="display: none;" id="edi_usuario" form="formUsers"><div class="sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Editar</button>
			<button class="eliminar btn btn-danger ml-2" type="submit" style="display: none;" id="delete_usuario" form="formUsers"><div class="sb-nav-link-icon"></div><i class="fa fa-trash fa-lg"></i> Eliminar</button>					
		</div>	 		
      </div>
    </div>
</div>
<!--FIN MODAL USUARIOS-->

<!--INICIO MODAL BUSQUEDA DE COLABORADORES-->
<div class="modal fade" id="modal_buscar_colaboradores_usuarios">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buscar Colaboradores</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formulario_busqueda_coloboradores">				
				<div class="form-group">				  
					<div class="col-md-12">			
						<div class="overflow-auto">											
							<table id="DatatableColaboradoresBusqueda" class="table table-striped table-condensed table-hover" style="width:100%">
								<thead>
									<tr>
										<th>Seleccione</th>
										<th>Nombre</th>
										<th>Identidad</th>	
									</tr>
								</thead>
							</table>
						</div>				
					</div>				  
				</div>
			</form>
        </div>
		<div class="modal-footer">

		</div>			
      </div>
    </div>
</div>
<!--FIN MODAL BUSQUEDA DE COLABORADORES-->

<!--INICIO MODAL BUSQUEDA DE CLIENTES EN FACTURACION-->
<div class="modal fade" id="modal_buscar_clientes_facturacion">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buscar Clientes</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formulario_busqueda_clientes_facturacion">				
				<div class="form-group">				  
					<div class="col-md-12">			
						<div class="overflow-auto">											
							<table id="DatatableClientesBusquedaFactura" class="table table-striped table-condensed table-hover" style="width:100%">
								<thead>
									<tr>
										<th>Seleccione</th>
										<th>Cliente</th>
										<th>RTN</th>
										<th>Correo</th>
										<th>Teléfono</th>
									</tr>
								</thead>
							</table>
						</div>				
					</div>				  
				</div>
			</form>
        </div>
		<div class="modal-footer">

		</div>			
      </div>
    </div>
</div>
<!--FIN MODAL BUSQUEDA DE COLABORADORES EN FACTURACION-->

<!--INICIO MODAL CAMBIAR CONTRASEÑA --> 
 <div class="modal fade" id="ModalContraseña">
	<div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modificar Contraseña</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="form-cambiarcontra" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">
				<div class="form-row">
				    <div class="col-md-12 mb-3">
						<div class="input-group mb-3">
						  <input type="text" required="required" readonly id="id-registro" name="id-registro" readonly="readonly" style="display: none;" class="form-control"/>
						  <input type="password" name="contranaterior" class="form-control" id="contranaterior" placeholder="Contraseña Anterior" required="required">
						  <div class="input-group-append">
							<span class="btn btn-outline-success" id="show_password1" style="cursor:pointer;"><i id="icon1" class="fa fa-eye-slash icon fa-la"></i></span>
						  </div>
						</div>
					</div>
				</div>	
				<div class="form-row">
				    <div class="col-md-12 mb-3">
						<div class="input-group mb-3">
						  <input type="password" name="nuevacontra" class="form-control" id="nuevacontra" placeholder="Nueva Contraseña" required="required">
						  <div class="input-group-append">
							<span class="btn btn-outline-success" id="show_password2" style="cursor:pointer;"><i id="icon1" class="fa fa-eye-slash icon fa-la"></i></span>
						  </div>
						</div>
					</div>
				</div>		
				<div class="form-row">
				    <div class="col-md-12 mb-3">
						<div class="input-group mb-3">
						  <input type="password" name="repcontra" class="form-control" id="repcontra" placeholder="Repetir Contraseña" required="required">
						  <div class="input-group-append">
							<span class="btn btn-outline-success" id="show_password3" style="cursor:pointer;"><i id="icon1" class="fa fa-eye-slash icon fa-la"></i></span>
						  </div>
						</div>
					</div>
				</div>
				<div class="form-row">
				    <div class="col-md-12 mb-3">
						<div id="mensaje_cambiar_contra"></div>
					</div>
				</div>				
				<div class="form-row">
				    <div class="col-md-12 mb-3">
					   <ul title="La contraseña debe cumplir con todas estas características" id="list">
					     <li id="mayus"> 1 Mayúscula</li>
					     <li id="special">1 Caracter Especial (Símbolo)</li>
					     <li id="numbers">Números</li>
					     <li id="lower">Minúsculas</li>
					     <li id="len">Mínimo 8 Caracteres</li>
					  </ul>
					</div>
				</div>	
				<input type="hidden" name="id" class="form-control" id="id" value = "<?php echo $_SESSION['colaborador_id_sd'];?>">
				<div class="modal-footer">
				<button class="cambiar btn btn-success ml-2" type="submit" style="display: none;" id="Modalcambiarcontra_Edit"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Editar</button>		
				</div>	
				<div class="RespuestaAjax"></div>			
			</form>
        </div>
      </div>
    </div>
</div>
 <!--FIN MODAL CAMBIAR CONTRASEÑA --> 
 
<!--INICIO MODAL PAGOS COMPRAS---->
<div class="modal fade" id="modal_pagosPurchase">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">	
			<div class="row justify-content-center">
				<div class="col-lg-12 col-12">
					<div class="card card0">
						<div class="d-flex" id="wrapper">
							<!-- Sidebar -->
							<div class="bg-light border-right" id="sidebar-wrapper">
								<div class="sidebar-heading pt-5 pb-4"><strong>Método de pago</strong></div>
								<div class="list-group list-group-flush"> 

									<a data-toggle="tab" href="#menu1Purchase" id="tab1Purchase" class="tabs list-group-item bg-light active1">
										<div class="list-div my-2">
											<div class="fas fa-money-bill-alt fa-lg"></div> &nbsp;&nbsp; Efectivo
										</div>
									</a> 
									<a data-toggle="tab" href="#menu2Purchase" id="tab2Purchase" class="tabs list-group-item">
										<div class="list-div my-2">
											<div class="far fa-credit-card fa-lg"></div> &nbsp;&nbsp; Tarjeta
										</div>
									</a> 	
											
									<a data-toggle="tab" href="#menu5Purchase" id="tab5Purchase" class="tabs list-group-item">
										<div class="list-div my-2">
											<div class="fa fa-pause fa-lg"></div> &nbsp;&nbsp; Mixto
										</div>
									</a> 							
									<a data-toggle="tab" href="#menu3Purchase" id="tab3Purchase" class="tabs list-group-item bg-light">
										<div class="list-div my-2">
											<div class="fas fa-exchange-alt fa-lg"></div> &nbsp;&nbsp; Transferencia
										</div>
									</a> 
									<a data-toggle="tab" href="#menu4Purchase" id="tab4Purchase" class="tabs list-group-item bg-light">
										<div class="list-div my-2">
											<div class="fas fa-money-check fa-lg"></div> &nbsp;&nbsp; Cheque
										</div>
									</a>									
								</div>
							</div> <!-- Page Content -->
							<div id="page-content-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<div class="row pt-3" id="border-btm">
									<div class="col-2">
											<i id="menu-toggle1Purchase" class="fas fa-angle-double-left fa-2x menu-toggle1"></i>
											<i id="menu-toggle2Purchase" class="fas fa-angle-double-right fa-2x menu-toggle2"></i>
									</div>
									<div class="col-10">
										<div class="row justify-content-right">
											<div class="col-12">
												<p class="mb-0 mr-4 mt-4 text-right" id="customer-name-Purchase"></p>
												<input type="hidden" name="customer_bill_pay" id="customer_Purchase_pay" placeholder="0.00">
											</div>
										</div>
										<div class="row justify-content-right">
											<div class="col-12">
												<p class="mb-0 mr-4 text-right color-text-white"><b>Pagar</b> <span class="top-highlight" id="Purchase-pay"></span> </p>
											</div>
										</div>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="text-center" id="test"></div>
								</div>
								<div class="tab-content">
									<div id="menu1Purchase" class="tab-pane in active">
										<div class="row justify-content-center">
											<div class="col-11">
												<div class="form-card">
													<h3 class="mt-0 mb-4 text-center">Ingrese detalles del Pago</h3>
													<form class="FormularioAjax" id="formEfectivoPurchase" action="<?php echo SERVERURL;?>ajax/addPagoComprasEfectivoAjax.php" method="POST" data-form="save" autocomplete="off" enctype="multipart/form-data">
														<div class="row">
															<div class="col-11">
																<div class="input-group"> 	
																	<label for="monto_efectivo">Efectivo</label>
																	<input type="hidden" name="compras_id_efectivo" id="compras_id_efectivo" placeholder="Compra Codigo"> 
																	<input type="hidden" name="monto_efectivoPurchase" id="monto_efectivoPurchase" placeholder="0.00"> 
																	<input type="text" name="efectivo_Purchase" id="efectivo_Purchase" class="inputfield" placeholder="0.00" step="0.01">																						
																</div>
															</div>
															<div class="col-11">
																<div class="input-group">
																	<label for="cambio_efectivo">Cambio</label>
																	<input type="number" readonly name="cambio_efectivoPurchase" id="cambio_efectivoPurchase" class="inputfield" step="0.01" placeholder="0.00">																
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12"> 
																<input type="submit" value="Efectuar Pago" id="pago_efectivo" class="pay btn btn-info placeicon" form="formEfectivoPurchase">
															</div>
														</div>
														<div class="RespuestaAjax"></div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div id="menu2Purchase" class="tab-pane">
										<div class="row justify-content-center">
											<div class="col-11">
												<div class="form-card">
													<h3 class="mt-0 mb-4 text-center">Ingrese detalles de la Tarjeta</h3>
													<form class="FormularioAjax" id="formTarjetaPurchase" method="POST" data-form="save" action="<?php echo SERVERURL;?>ajax/addPagoComprasTarjetaAjax.php" autocomplete="off" enctype="multipart/form-data">
														<div class="row">
															<div class="col-12">
																<div class="input-group"> 
																<label>Número de Tarjeta</label> 
																<input type="hidden" name="compras_id_tarjeta" id="compras_id_tarjeta" placeholder="Compra Codigo">
																<input type="text" id="cr_Purchase" name="cr_Purchase" class="inputfield"  placeholder="XXXX">
																<input type="hidden" name="monto_efectivoPurchase" id="monto_efectivoPurchase" placeholder="0.00">
																																
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-6">
																<div class="input-group"> 
																	<label> Fecha de Expiración</label>
																	<input type="text" name="exp" id="exp" class="mask inputfield" placeholder="MM/YY">
																</div>
															</div>
															<div class="col-6">
																<div class="input-group"> 
																	<label>Número Aprobación</label>
																	<input type="text" name="cvcpwd" id="cvcpwd" class="placeicon inputfield"> 																	 
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12"> 
																<input type="submit" value="Efectuar Pago" id="pago_tarjeta" class="pay btn btn-info placeicon" form="formTarjetaPurchase">
															</div>
														</div>
														<div class="RespuestaAjax"></div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div id="menu5Purchase" class="tab-pane">
										<div class="row justify-content-center">
											<div class="col-11">
												<div class="form-card">
													<h6 class="mt-0 mb-4 text-center">Ingrese Pago Mixto</h6>
													<form class="FormularioAjax" id="formMixtoPurchaseBill" action="<?php echo SERVERURL;?>ajax/addPagoCompraMixtoAjax.php" method="POST" data-form="save" autocomplete="off" enctype="multipart/form-data">
														<div class="row">
															<div class="col-12 col-md-6">
																<div class="input-group"> 	
																	<label for="monto_efectivo">Efectivo</label>
																	<input type="hidden" name="compras_id_mixto" id="compras_id_mixto"> 
																	<input type="hidden" name="monto_efectivoPurchase" id="monto_efectivo_mixtoPurchase" placeholder="0.00"> 
																	<input type="number" name="efectivo_bill" id="efectivo_bill_mixtoPurchase" class="inputfield" placeholder="0.00" step="0.01">																						
																	<input type="hidden" readonly name="cambio_efectivo" id="cambio_efectivo_mixtoPurchase" class="inputfield" step="0.01" placeholder="0.00">																
																</div>
															</div>
														
															<div class="col-12 col-md-6">
																<div class="input-group">
																	<label for="monto_tarjeta">Tarjeta</label>
																	<input type="number" readonly name="monto_tarjeta" id="monto_tarjeta_mixtoPurchase" class="inputfield" step="0.01" placeholder="0.00">																
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12">
																<div class="input-group"> 
																<label>Número de Tarjeta</label> 
																<input type="text" id="cr_bill_mixtoPurchase" name="cr_bill" class="inputfield"  placeholder="XXXX">
																																																
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-6">
																<div class="input-group"> 
																	<label> Fecha de Expiración</label>
																	<input type="text" name="exp" id="exp_mixtoPurchase" class="mask inputfield" placeholder="MM/YY">
																</div>
															</div>
															<div class="col-6">
																<div class="input-group"> 
																	<label>Número Aprobación</label>
																	<input type="text" name="cvcpwd" id="cvcpwd_mixtoPurchase" class="placeicon inputfield"> 																	 
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12"> 
																<input type="submit" value="Efectuar Pago" id="pago_mixto_Purchase" class="pay btn btn-info placeicon" form="formMixtoPurchaseBill">
															</div>
														</div>
														<div class="RespuestaAjax"></div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div id="menu3Purchase" class="tab-pane">
										<div class="row justify-content-center">
											<div class="col-11">
												<div class="form-card">
													<h3 class="mt-0 mb-4 text-center">Ingrese detalles de la Transferencia</h3>
													<form class="FormularioAjax" id="formTransferenciaPurchase" method="POST" data-form="save" action="<?php echo SERVERURL;?>ajax/addPagoComprasTransferenciaAjax.php" autocomplete="off" enctype="multipart/form-data">
														<div class="row">
															<div class="col-12">
															    <label>Banco</label> 
																<div class="input-group"> 																	
																	<input type="hidden" name="compras_id_transferencia" id="compras_id_transferencia" placeholder="Compra Codigo">
																	<select required name="bk_nm" id="bk_nm" class="custom-select inputfield" data-toggle="tooltip" data-placement="top" title="Banco">
																		<option value="">Seleccione un Banco</option>
																	</select> 																	
																	<input type="hidden" name="monto_efectivoPurchase" id="monto_efectivoPurchase" placeholder="0.00">								
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12">
																<div class="input-group"> 	
																	<label>Número de Autorización</label> 
																	<input type="text" name="ben_nm" id="ben_nm" class="inputfield" placeholder="Número de Autorización">							
																</div>
															</div>
															<div class="col-12" style="display: none;">
																<div class="input-group"> 																	
																	<input type="text" name="scode" placeholder="ABCDAB1S" class="placeicon" minlength="8" maxlength="11"> 
																	<label>SWIFT CODE</label> 
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12"> 
																<input type="submit" value="Efectuar Pago" id="pago_transferencia" class="pay btn btn-info placeicon" form="formTransferenciaPurchase"> 
															</div>
														</div>
														<div class="RespuestaAjax"></div>
													</form>
												</div>
											</div>
										</div>
									</div>	
									
									<div id="menu4Purchase" class="tab-pane">
										<div class="row justify-content-center">
											<div class="col-11">
												<div class="form-card">
													<h3 class="mt-0 mb-4 text-center">Ingrese detalles del Cheque</h3>
													<form class="FormularioAjax" id="formChequePurchase" method="POST" data-form="save" action="<?php echo SERVERURL;?>ajax/addPagoComprasChequeAjax.php" autocomplete="off" enctype="multipart/form-data">
														<div class="row">
															<div class="col-12">
															    <label>Banco</label> 
																<div class="input-group"> 																	
																	<input type="hidden" name="compras_id_cheque" id="compras_id_cheque">
																	<select required name="bk_nm_chk" id="bk_nm_chk" class="custom-select inputfield" data-toggle="tooltip" data-placement="top" title="Banco">
																		<option value="">Seleccione un Banco</option>
																	</select> 																	
																	<input type="hidden" name="monto_efectivoPurchase" id="monto_efectivoPurchase" placeholder="0.00">								
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12">
																<div class="input-group"> 	
																	<label>Número de Cheque</label> 
																	<input type="text" name="check_num" id="check_num" class="inputfield" placeholder="Número de Cheque">							
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12"> 
																<input type="submit" value="Efectuar Pago" id="pago_transferencia" class="pay btn btn-info placeicon" form="formChequePurchase"> 
															</div>
														</div>
														<div class="RespuestaAjax"></div>
													</form>
												</div>
											</div>
										</div>
									</div>								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
      </div>
    </div>
</div>
<!--FIN MODAL PAGOS COMPRAS--

<!--INICIO MODAL PAGOS FACTURACION---->
<div class="modal fade" id="modal_pagos">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">	
			<div class="row justify-content-center">
				<div class="col-lg-12 col-12">
					<div class="card card0">
						<div class="d-flex" id="wrapper">
							<!-- Sidebar -->
							<div class="bg-light border-right" id="sidebar-wrapper">
								<div class="sidebar-heading pt-5 pb-4"><strong>Método de pago</strong></div>
								<div class="list-group list-group-flush"> 

									<a data-toggle="tab" href="#menu1" id="tab1" class="tabs list-group-item bg-light active1">
										<div class="list-div my-2">
											<div class="fas fa-money-bill-alt fa-lg"></div> &nbsp;&nbsp; Efectivo
										</div>
									</a> 
									<a data-toggle="tab" href="#menu2" id="tab2" class="tabs list-group-item">
										<div class="list-div my-2">
											<div class="far fa-credit-card fa-lg"></div> &nbsp;&nbsp; Tarjeta
										</div>
									</a> 	
									<a data-toggle="tab" href="#menu5" id="tab5" class="tabs list-group-item">
										<div class="list-div my-2">
											<div class="fa fa-pause fa-lg"></div> &nbsp;&nbsp; Mixto
										</div>
									</a> 								
									<a data-toggle="tab" href="#menu3" id="tab3" class="tabs list-group-item bg-light">
										<div class="list-div my-2">
											<div class="fas fa-exchange-alt fa-lg"></div> &nbsp;&nbsp; Transferencia
										</div>
									</a> 
									<a data-toggle="tab" href="#menu4" id="tab4" class="tabs list-group-item bg-light">
										<div class="list-div my-2">
											<div class="fas fa-money-check fa-lg"></div> &nbsp;&nbsp; Cheque
										</div>
									</a>									
								</div>
							</div> <!-- Page Content -->
							<div id="page-content-wrapper">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<div class="row pt-3" id="border-btm">
									<div class="col-2">
											<i id="menu-toggle1" class="fas fa-angle-double-left fa-2x menu-toggle1"></i>
											<i id="menu-toggle2" class="fas fa-angle-double-right fa-2x menu-toggle2"></i>
									</div>
									<div class="col-10">
										<div class="row justify-content-right">
											<div class="col-12">
												<p class="mb-0 mr-4 mt-4 text-right" id="customer-name-bill"></p>
												<input type="hidden" name="customer_bill_pay" id="customer_bill_pay" placeholder="0.00">
											</div>
										</div>
										<div class="row justify-content-right">
											<div class="col-12">
												<p class="mb-0 mr-4 text-right color-text-white"><b>Pagar</b> <span class="top-highlight" id="bill-pay"></span> </p>
											</div>
										</div>
									</div>
								</div>
								<div class="row justify-content-center">
									<div class="text-center" id="test"></div>
								</div>
								<div class="tab-content">
									<div id="menu1" class="tab-pane in active">
										<div class="row justify-content-center">
											<div class="col-11">
												<div class="form-card">
													<h3 class="mt-0 mb-4 text-center">Ingrese detalles del Pago</h3>
													<form class="FormularioAjax" id="formEfectivoBill" action="<?php echo SERVERURL;?>ajax/addPagoFacturasEfectivoAjax.php" method="POST" data-form="save" autocomplete="off" enctype="multipart/form-data">
														<div class="row">
															<div class="col-11">
																<div class="input-group"> 	
																	<label for="monto_efectivo">Efectivo</label>
																	<input type="hidden" name="factura_id_efectivo" id="factura_id_efectivo"> 
																	<input type="hidden" name="monto_efectivo" id="monto_efectivo" placeholder="0.00"> 
																	<input type="number" name="efectivo_bill" id="efectivo_bill" class="inputfield" placeholder="0.00" step="0.01">																						
																</div>
															</div>
															<div class="col-11">
																<div class="input-group">
																	<label for="cambio_efectivo">Cambio</label>
																	<input type="number" readonly name="cambio_efectivo" id="cambio_efectivo" class="inputfield" step="0.01" placeholder="0.00">																
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12"> 
																<input type="submit" value="Efectuar Pago" id="pago_efectivo" class="pay btn btn-info placeicon" form="formEfectivoBill">
															</div>
														</div>
														<div class="RespuestaAjax"></div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div id="menu2" class="tab-pane">
										<div class="row justify-content-center">
											<div class="col-11">
												<div class="form-card">
													<h3 class="mt-0 mb-4 text-center">Ingrese detalles de la Tarjeta</h3>
													<form class="FormularioAjax" id="formTarjetaBill" method="POST" data-form="save" action="<?php echo SERVERURL;?>ajax/addPagoFacturasTarjetaAjax.php" autocomplete="off" enctype="multipart/form-data">
														<div class="row">
															<div class="col-12">
																<div class="input-group"> 
																<label>Número de Tarjeta</label> 
																<input type="hidden" name="factura_id_tarjeta" id="factura_id_tarjeta">
																<input type="text" id="cr_bill" name="cr_bill" class="inputfield"  placeholder="XXXX">
																<input type="hidden" name="monto_efectivo" id="monto_efectivo" placeholder="0.00">
																																
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-6">
																<div class="input-group"> 
																	<label> Fecha de Expiración</label>
																	<input type="text" name="exp" id="exp" class="mask inputfield" placeholder="MM/YY">
																</div>
															</div>
															<div class="col-6">
																<div class="input-group"> 
																	<label>Número Aprobación</label>
																	<input type="text" name="cvcpwd" id="cvcpwd" class="placeicon inputfield"> 																	 
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12"> 
																<input type="submit" value="Efectuar Pago" id="pago_tarjeta" class="pay btn btn-info placeicon" form="formTarjetaBill">
															</div>
														</div>
														<div class="RespuestaAjax"></div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div id="menu5" class="tab-pane">
										<div class="row justify-content-center">
											<div class="col-11">
												<div class="form-card">
													<h6 class="mt-0 mb-4 text-center">Ingrese Pago Mixto</h6>
													<form class="FormularioAjax" id="formMixtoBill" action="<?php echo SERVERURL;?>ajax/addPagoMixtoAjax.php" method="POST" data-form="save" autocomplete="off" enctype="multipart/form-data">
														<div class="row">
															<div class="col-12 col-md-6">
																<div class="input-group"> 	
																	<label for="monto_efectivo">Efectivo</label>
																	<input type="hidden" name="factura_id_mixto" id="factura_id_mixto"> 
																	<input type="hidden" name="monto_efectivo" id="monto_efectivo_mixto" placeholder="0.00"> 
																	<input type="number" name="efectivo_bill" id="efectivo_bill_mixto" class="inputfield" placeholder="0.00" step="0.01">																						
																	<input type="hidden" readonly name="cambio_efectivo" id="cambio_efectivo_mixto" class="inputfield" step="0.01" placeholder="0.00">																
																</div>
															</div>
															
															<div class="col-12 col-md-6">
																<div class="input-group">
																	<label for="monto_tarjeta">Tarjeta</label>
																	<input type="number" readonly name="monto_tarjeta" id="monto_tarjeta" class="inputfield" step="0.01" placeholder="0.00">																
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12">
																<div class="input-group"> 
																<label>Número de Tarjeta</label> 
																<input type="text" id="cr_bill_mixto" name="cr_bill" class="inputfield"  placeholder="XXXX">
																																																
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-6">
																<div class="input-group"> 
																	<label> Fecha de Expiración</label>
																	<input type="text" name="exp" id="exp_mixto" class="mask inputfield" placeholder="MM/YY">
																</div>
															</div>
															<div class="col-6">
																<div class="input-group"> 
																	<label>Número Aprobación</label>
																	<input type="text" name="cvcpwd" id="cvcpwd_mixto" class="placeicon inputfield"> 																	 
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12"> 
																<input type="submit" value="Efectuar Pago" id="pago_efectivo_mixto" class="pay btn btn-info placeicon" form="formMixtoBill">
															</div>
														</div>
														<div class="RespuestaAjax"></div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div id="menu3" class="tab-pane">
										<div class="row justify-content-center">
											<div class="col-11">
												<div class="form-card">
													<h3 class="mt-0 mb-4 text-center">Ingrese detalles de la Transferencia</h3>
													<form class="FormularioAjax" id="formTransferenciaBill" method="POST" data-form="save" action="<?php echo SERVERURL;?>ajax/addPagoFacturasTransferenciaAjax.php" autocomplete="off" enctype="multipart/form-data">
														<div class="row">
															<div class="col-12">
															    <label>Banco</label> 
																<div class="input-group"> 																	
																	<input type="hidden" name="factura_id_transferencia" id="factura_id_transferencia">
																	<select required name="bk_nm" id="bk_nm" class="custom-select inputfield" data-toggle="tooltip" data-placement="top" title="Banco">
																		<option value="">Seleccione un Banco</option>
																	</select> 																	
																	<input type="hidden" name="monto_efectivo" id="monto_efectivo" placeholder="0.00">								
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12">
																<div class="input-group"> 	
																	<label>Número de Autorización</label> 
																	<input type="text" name="ben_nm" id="ben_nm" class="inputfield" placeholder="Número de Autorización">							
																</div>
															</div>
															<div class="col-12" style="display: none;">
																<div class="input-group"> 																	
																	<input type="text" name="scode" placeholder="ABCDAB1S" class="placeicon" minlength="8" maxlength="11"> 
																	<label>SWIFT CODE</label> 
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12"> 
																<input type="submit" value="Efectuar Pago" id="pago_transferencia" class="pay btn btn-info placeicon" form="formTransferenciaBill"> 
															</div>
														</div>
														<div class="RespuestaAjax"></div>
													</form>
												</div>
											</div>
										</div>
									</div>	
									
									<div id="menu4" class="tab-pane">
										<div class="row justify-content-center">
											<div class="col-11">
												<div class="form-card">
													<h3 class="mt-0 mb-4 text-center">Ingrese detalles del Cheque</h3>
													<form class="FormularioAjax" id="formChequeBill" method="POST" data-form="save" action="<?php echo SERVERURL;?>ajax/addPagoFacturasChequeAjax.php" autocomplete="off" enctype="multipart/form-data">
														<div class="row">
															<div class="col-12">
															    <label>Banco</label> 
																<div class="input-group"> 																	
																	<input type="hidden" name="factura_id_cheque" id="factura_id_cheque">
																	<select required name="bk_nm_chk" id="bk_nm_chk" class="custom-select inputfield" data-toggle="tooltip" data-placement="top" title="Banco">
																		<option value="">Seleccione un Banco</option>
																	</select> 																	
																	<input type="hidden" name="monto_efectivo" id="monto_efectivo" placeholder="0.00">								
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-12">
																<div class="input-group"> 	
																	<label>Número de Cheque</label> 
																	<input type="text" name="check_num" id="check_num" class="inputfield" placeholder="Número de Cheque">							
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12"> 
																<input type="submit" value="Efectuar Pago" id="pago_transferencia" class="pay btn btn-info placeicon" form="formChequeBill"> 
															</div>
														</div>
														<div class="RespuestaAjax"></div>
													</form>
												</div>
											</div>
										</div>
									</div>								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
      </div>
    </div>
</div>
<!--FIN MODAL PAGOS FACTURACION-->

<!--INICIO MODAL CLIENTES-->
<div class="modal fade" id="modal_registrar_clientes">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Clientes</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formClientes" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<div class="input-group mb-3">
						    <input type="hidden" id="clientes_id" name="clientes_id" class="form-control">
							<input type="text" id="proceso_clientes" class="form-control" readonly>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fa fa-plus-square fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>				
			  <div class="form-row">
				<div class="col-md-8 mb-3">
				  <label for="nombre_clientes">Empresa o Cliente <span class="priority">*<span/></label>
				  <input type="text" class="form-control" id="nombre_clientes" name="nombre_clientes" placeholder="Nombre" maxlength="100" required>
				</div>
				<div class="col-md-4 mb-3">
				  <label for="identidad_clientes">Identidad o RTN</label>
				  <input type="number" class="form-control" id="identidad_clientes" name= "identidad_clientes" placeholder="Identidad o RTN" maxlength="14" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
				</div>					
			  </div>
			  <div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="fecha_clientes">Fecha <span class="priority">*<span/></label>
					<div class="input-group mb-3">
						<input type="date" required id="fecha_clientes" name="fecha_clientes" value="<?php echo date ("Y-m-d");?>" class="form-control"/>
					</div>	 
				</div>				  
				<div class="col-md-4 mb-3">
				  <label for="departamento_cliente">Departamento <span class="priority">*<span/></label>
				  <select class="form-control" id="departamento_cliente" name="departamento_cliente" required>			  
				  </select>
				</div>
				<div class="col-md-4 mb-3">
				  <label for="municipio_cliente">Municipio <span class="priority">*<span/></label>
				  <select class="form-control" id="municipio_cliente" name="municipio_cliente" required>
					<option value="">Seleccione</option>
				  </select>
				</div>				
			  </div>
			  <div class="form-row">
				<div class="col-md-12 mb-3">
				  <label for="dirección_clientes">Dirección</label>
				  <input type="text" class="form-control" id="dirección_clientes" name="dirección_clientes" placeholder="Dirección" maxlength="150">
				</div>				  				
			  </div>
			  <div class="form-row">			  
				<div class="col-md-4 mb-3">
				  <label for="telefono_clientes">Teléfono</label>
				  <input type="number" class="form-control" id="telefono_clientes" name="telefono_clientes" placeholder="Teléfono" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
				</div>
				<div class="col-md-8 mb-3">
					<label for="correo_clientes">Correo</label>
					<div class="input-group mb-3">
					  <input type="email" class="form-control" placeholder="Correo" id="correo_clientes" name="correo_clientes" aria-label="Correo" aria-describedby="basic-addon2" maxlength="70">
					  <div class="input-group-append">				
						<span class="input-group-text"><div class="sb-nav-link-icon"></div>@algo.com</span>
					  </div>
					</div>					
				</div>				
			  </div>
			  <div class="form-group" id="estado_clientes">				  
				  <div class="col-md-12">			
						<label class="switch">
							<input type="checkbox" id="clientes_activo" name="clientes_activo" value="1" checked>
							<div class="slider round"></div>
						</label>
						<span class="question mb-2" id="label_clientes_activo"></span>				
				  </div>				  
			  </div>
			  
			  <div class="RespuestaAjax"></div>  
			</form>
        </div>
		<div class="modal-footer">
			<button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="reg_cliente" form="formClientes"><div class="guardar sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
			<button class="editar btn btn-warning ml-2" type="submit" style="display: none;" id="edi_cliente" form="formClientes"><div class="editar sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Editar</button>
			<button class="eliminar btn btn-danger ml-2" type="submit" style="display: none;" id="delete_cliente" form="formClientes"><div class="eliminar sb-nav-link-icon"></div><i class="fa fa-trash fa-lg"></i> Eliminar</button>				
		</div>			
      </div>
    </div>
</div>
<!--FIN MODAL CLIENTES-->

<!--INICIO MODAL PROVEEDORES-->
<div class="modal fade" id="modal_registrar_proveedores">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Proveedores</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formProveedores" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<div class="input-group mb-3">
						    <input type="hidden" id="proveedores_id" name="proveedores_id" class="form-control">
							<input type="text" id="proceso_proveedores" class="form-control" readonly>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fa fa-plus-square fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>				  
				<div class="form-row">
				<div class="col-md-8 mb-3">
				  <label for="nombre_proveedores">Proveedor <span class="priority">*<span/></label>
				  <input type="text" class="form-control" id="nombre_proveedores" name="nombre_proveedores" placeholder="Proveedor" required maxlength="150" placeholder="RTN" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
				</div>
				<div class="col-md-4 mb-3">
				  <label for="rtn_proveedores">Identidad o RTN</label>
				  <input type="number" class="form-control" id="rtn_proveedores" name= "rtn_proveedores" maxlength="14" placeholder="RTN" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
				</div>					
				</div>
				<div class="form-row">
				<div class="col-md-4 mb-3">
					<label for="fecha_proveedores">Fecha <span class="priority">*<span/></label>
					<div class="input-group mb-3">
						<input type="date" required id="fecha_proveedores" name="fecha_proveedores" value="<?php echo date ("Y-m-d");?>" class="form-control"/>
					</div>	 
				</div>				  
				<div class="col-md-4 mb-3">
				  <label for="departamento_proveedores">Departamento <span class="priority">*<span/></label>
				  <select class="form-control" id="departamento_proveedores" name="departamento_proveedores" required>		  
				  </select>
				</div>
				<div class="col-md-4 mb-3">
				  <label for="municipio_proveedores">Municipio <span class="priority">*<span/></label>
				  <select class="form-control" id="municipio_proveedores" name="municipio_proveedores" required>
					<option value="">Seleccione</option>				  
				  </select>
				</div>				
				</div>
				<div class="form-row">
				<div class="col-md-12 mb-3">
				  <label for="dirección_proveedores">Dirección</label>
				  <input type="text" class="form-control" id="dirección_proveedores" name="dirección_proveedores" placeholder="Dirección" maxlength="150">
				</div>				  				
				</div>
				<div class="form-row">			  
					<div class="col-md-4 mb-3">
					  <label for="telefono_proveedores">Teléfono</label>
					  <input type="number" class="form-control" id="telefono_proveedores" name="telefono_proveedores" placeholder="Teléfono" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
					</div>
					<div class="col-md-8 mb-3">
						<label for="correo_proveedores">Correo</label>
						<div class="input-group mb-3">
						  <input type="email" class="form-control" placeholder="Correo" id="correo_proveedores" name="correo_proveedores" aria-label="Correo" aria-describedby="basic-addon2" maxlength="70">
						  <div class="input-group-append">				
							<span class="input-group-text"><div class="sb-nav-link-icon"></div>@algo.com</span>
						  </div>
						</div>	 
					</div>
				</div>

			  <div class="form-group" id="estado_proveedores">				  
				  <div class="col-md-12">			
						<label class="switch">
							<input type="checkbox" id="proveedores_activo" name="proveedores_activo" value="1" checked>
							<div class="slider round"></div>
						</label>
						<span class="question mb-2" id="label_proveedores_activo"></span>				
				  </div>				  
			  </div>
			  
			  <div class="RespuestaAjax"></div>	  
			</form>
        </div>
		<div class="modal-footer">
			<button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="reg_proveedor" form="formProveedores"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
			<button class="editar btn btn-warning ml-2" type="submit" style="display: none;" id="edi_proveedor" form="formProveedores"><div class="sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Editar</button>
			<button class="eliminar btn btn-danger ml-2" type="submit" style="display: none;" id="delete_proveedor" form="formProveedores"><div class="sb-nav-link-icon"></div><i class="fa fa-trash fa-lg"></i> Eliminar</button>				
		</div>		
      </div>
    </div>
</div>
<!--FIN MODAL PROVEEDORES-->

<!--INICIO MODALS BUSQUEDA-->
<!--INICIO MODAL BUSQUEDA DE PRODUCTOS EN FACTURACION-->
<div class="modal fade" id="modal_buscar_productos_facturacion">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buscar Productos</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formulario_busqueda_productos_facturacion">	
				<input type="hidden" id="row" name="row" class="form-control"/>
				<input type="hidden" id="col" name="col" class="form-control"/>	
				<div class="form-group">				  
					<div class="col-md-12">			
						<div class="overflow-auto">											
							<table id="DatatableProductosBusquedaFactura" class="table table-striped table-condensed table-hover" style="width:100%">
								<thead>
									<tr>
										<th>Seleccione</th>
										<th>Bar Code</th>
										<th>Producto</th>
										<th>Cantidad</th>
										<th>Medida</th>
										<th>Categoria</th>
										<th>Precio Venta</th>							
										<th>Almacén</th>
									</tr>
								</thead>
							</table>
						</div>				
					</div>				  
				</div>
			</form>
        </div>
		<div class="modal-footer">

		</div>			
      </div>
    </div>
</div>
<!--FIN MODAL BUSQUEDA DE PRODUCTOS EN FACTURACION-->

<!--INICIO MODAL BUSQUEDA DE PRODUCTOS MOVIMIENTOS-->
<div class="modal fade" id="modal_buscar_productos_movimientos">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buscar Productos</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formulario_busqueda_productos_movimientos">
				<input type="hidden" id="row" name="row" class="form-control"/>
				<input type="hidden" id="col" name="col" class="form-control"/>					
				<div class="form-group">				  
					<div class="col-md-12">			
						<div class="overflow-auto">											
							<table id="DatatableProductosBusquedaMovimientos" class="table table-striped table-condensed table-hover" style="width:100%">
								<thead>
									<tr>
										<th>Seleccione</th>
										<th>Producto</th>
										<th>Cantidad</th>
										<th>Medida</th>
										<th>Categoria</th>
										<th>Precio Venta</th>							
										<th>Almacén</th>
									</tr>
								</thead>
							</table>
						</div>				
					</div>				  
				</div>
			</form>
        </div>
		<div class="modal-footer">

		</div>			
      </div>
    </div>
</div>	
<!--FIN MODAL BUSQUEDA DE PRODUCTOS MOVIMIENTOS-->

<!--INICIO MODAL BUSQUEDA DE COLABORADORES EN FACTURACION-->
<div class="modal fade" id="modal_buscar_colaboradores_facturacion">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buscar Colaboradores</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formulario_busqueda_colaboradores_facturacion">				
				<div class="form-group">				  
					<div class="col-md-12">			
						<div class="overflow-auto">											
							<table id="DatatableColaboradoresBusquedaFactura" class="table table-striped table-condensed table-hover" style="width:100%">
								<thead>
									<tr>
										<th>Seleccione</th>
										<th>Colaborador</th>
										<th>Identidad</th>
										<th>Teléfono</th>
									</tr>
								</thead>
							</table>
						</div>				
					</div>				  
				</div>
			</form>
        </div>
		<div class="modal-footer">

		</div>			
      </div>
    </div>
</div>	
<!--FIN MODAL BUSQUEDA DE COLABORADORES EN FACTURACION-->

<!--INICIO MODAL COLABORADORES-->
<div class="modal fade" id="modal_registrar_colaboradores">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Colaboradores</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formColaboradores" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<div class="input-group mb-3">
						    <input type="hidden" id="colaborador_id" name="colaborador_id" class="form-control" placeholder="Colaborador">
							<input type="text" id="proceso_colaboradores" class="form-control" readonly>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fa fa-plus-square fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>				
				<div class="form-row">
				<div class="col-md-6 mb-3">
				  <label for="nombre">Nombre <span class="priority">*<span/></label>
				  <input type="text" class="form-control" id="nombre_colaborador" name="nombre_colaborador" placeholder="Nombre" required>
				</div>
				<div class="col-md-6 mb-3">
				  <label for="apellido">Apellido <span class="priority">*<span/></label>
				  <input type="text" class="form-control" id="apellido_colaborador" name="apellido_colaborador" placeholder="Apellido" required>
				</div>
				</div>
				<div class="form-row">
				<div class="col-md-6 mb-3">
				  <label for="identidad">Identidad <span class="priority">*<span/></label>
				  <input type="number" class="form-control" id="identidad_colaborador" name= "identidad_colaborador" placeholder="Identidad" maxlength="13" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
				</div>			  
				<div class="col-md-6 mb-3">
				  <label for="telefono">Teléfono <span class="priority">*<span/></label>
				  <input type="number" class="form-control" id="telefono_colaborador" name="telefono_colaborador" placeholder="Teléfono" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
				</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
					  <label for="estado">Puesto <span class="priority">*<span/></label>
					  <select class="form-control" id="puesto_colaborador" name="puesto_colaborador" required>			  
					  </select>
					</div>				
					<div class="col-md-6 mb-3">
					  <label>Empresa <span class="priority">*<span/></label>
					  <div class="input-group mb-3">
						  <select id="colaborador_empresa_id" name="colaborador_empresa_id" class="custom-select" data-toggle="tooltip" data-placement="top" title="Modalidad">
							<option value="">Seleccione</option>
						  </select>
						  <div class="input-group-append" id="buscar_colaborador_empresa">				
							<a data-toggle="modal" href="#" class="btn btn-outline-success"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
						  </div>
					   </div>
					</div>						
				</div>
				
			  <div class="form-group" id="estado_colaboradores">				  
				  <div class="col-md-12">			
						<label class="switch">
							<input type="checkbox" id="colaboradores_activo" name="colaboradores_activo" value="1" checked>
							<div class="slider round"></div>
						</label>
						<span class="question mb-2" id="label_colaboradores_activo"></span>				
				  </div>				  
			  </div>
			  			
			   <div class="RespuestaAjax"></div>	  
			 </form>
        </div>
		<div class="modal-footer">
			 <button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="reg_colaborador" form="formColaboradores"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
			 <button class="editar btn btn-warning ml-2" type="submit" style="display: none;" id="edi_colaborador" form="formColaboradores"><div class="sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Editar</button>
			<button class="eliminar btn btn-danger ml-2" type="submit" style="display: none;" id="delete_colaborador" form="formColaboradores"><div class="sb-nav-link-icon"></div><i class="fa fa-trash fa-lg"></i> Eliminar</button>				 
		</div>		
      </div>
    </div>
</div>
<!--FIN MODAL COLABORADORES-->

<!--INICIO MODAL BUSQUEDA DE EMPRESAS-->
<div class="modal fade" id="modal_buscar_empresa">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buscar Empresa</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formulario_busqueda_empreasa">				
				<div class="form-group">				  
					<div class="col-md-12">			
						<div class="overflow-auto">											
							<table id="DatatableBusquedaEmpresas" class="table table-striped table-condensed table-hover" style="width:100%">
								<thead>
									<tr>
										<th>Seleccione</th>
										<th>Razón Social</th>
										<th>Empresa</th>
										<th>Correo</th>
										<th>RTN</th>
									</tr>
								</thead>
							</table>
						</div>				
					</div>				  
				</div>
			</form>
        </div>
		<div class="modal-footer">

		</div>			
      </div>
    </div>
</div>
<!--FIN MODAL BUSQUEDA DE EMPRESAS-->
<!--INICIO MODALS BUSQUEDA-->

<!--INICIO MODAL EMPRESA-->
<div class="modal fade" id="modal_registrar_empresa">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Empresa</h4>    
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formEmpresa" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<div class="input-group mb-3">
						    <input type="hidden" id="empresa_id" name="empresa_id" class="form-control">
							<input type="text" id="proceso_empresa" class="form-control" readonly>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fa fa-plus-square fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>					
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label>Razón Social <span class="priority">*<span/></label>
						<div class="input-group mb-3">
							<input type="text" name="empresa_razon_social" id="empresa_razon_social" class="form-control" placeholder="Razón Social" maxlength="100" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="far fa-building fa-lg"></i></span>
							</div>
						</div>	 
					</div>					
					<div class="col-md-6 mb-3">
						<label>Empresa <span class="priority">*<span/></label>
						<div class="input-group mb-3">
							<input type="text" name="empresa_empresa" id="empresa_empresa" class="form-control" placeholder="Empresa" maxlength="50" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="far fa-building fa-lg"></i></span>
							</div>
						</div>	 
					</div>					
				</div>
				<div class="form-row">					
					<div class="col-md-6 mb-3">
						<label for="prefijo">RTN <span class="priority">*<span/></label>
						<div class="input-group mb-3">
							<input type="text" name="rtn_empresa" id="rtn_empresa" class="form-control" placeholder="RTN" maxlength="14" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fas fa-id-card-alt fa-lg"></i></span>
							</div>
						</div>	 
					</div>
					<div class="col-md-6 mb-3">
						<label for="prefijo">Otra Información </label>
						<div class="input-group mb-3">
							<input type="text" name="empresa_otra_informacion" id="empresa_otra_informacion" class="form-control" placeholder="Otra Información" maxlength="150">
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fas fa-info-circle fa-lg"></i></span>
							</div>
						</div>	 
					</div>						
				</div>				
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="prefijo">Eslogan </label>
						<div class="input-group mb-3">
							<input type="text" name="empresa_eslogan" id="empresa_eslogan" class="form-control" placeholder="Eslogan" maxlength="150">
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fas fa-file-alt fa-lg"></i></span>
							</div>
						</div>	 
					</div>	
					<div class="col-md-6 mb-3">
						<label for="correo_empresa">Correo</label>
						<div class="input-group mb-3">
						  <input type="email" class="form-control" placeholder="Correo" id="correo_empresa" name="correo_empresa" aria-label="Correo" aria-describedby="basic-addon2">
						  <div class="input-group-append">				
							<span class="input-group-text"><div class="sb-nav-link-icon"></div>@algo.com</span>
						  </div>
						</div>	 
					</div>						
				</div>				
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label>Teléfono <span class="priority">*<span/></label>
						<div class="input-group mb-3">
							<input type="text" name="telefono_empresa" id="telefono_empresa" class="form-control" placeholder="Teléfono" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fas fa-phone-alt fa-lg"></i></span>
							</div>
						</div>	 
					</div>	
					<div class="col-md-6 mb-3">
						<label>WhatsApp</label>
						<div class="input-group mb-3">
							<input type="text" name="empresa_celular" id="empresa_celular" class="form-control" placeholder="Teléfono" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fab fa-whatsapp fa-lg"></i></span>
							</div>
						</div>	 
					</div>																
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label>Horario</label>
						<div class="input-group mb-3">
							<input type="text" name="horario_empresa" id="horario_empresa" class="form-control" placeholder="Horario" maxlength="100" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="far fa-clock fa-lg"></i></span>
							</div>
						</div>	 
					</div>	
					<div class="col-md-6 mb-3">
						<label>Facebook</label>
						<div class="input-group mb-3">
							<input type="text" name="facebook_empresa" id="facebook_empresa" class="form-control" placeholder="URL de Facebook" maxlength="150" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fab fa-facebook fa-lg"></i></span>
							</div>
						</div>	 
					</div>																
				</div>	
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label>Sitio WEB</label>
						<div class="input-group mb-3">
							<input type="text" name="sitioweb_empresa" id="sitioweb_empresa" class="form-control" placeholder="Sitio WEB" maxlength="150" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fas fa-globe-americas fa-lg"></i></span>
							</div>
						</div>	 
					</div>																
				</div>								
				<div class="form-row">					
					<div class="col-md-12 mb-3">
						<label for="incremento">Dirección <span class="priority">*<span/></label>
						<div class="input-group mb-3">
							<input type="text" name="direccion_empresa" id="direccion_empresa" class="form-control" placeholder="Dirección" required>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fas fa-address-card fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>	
				<div class="form-group" id="estado_empresa">				  
				  <div class="col-md-12">			
						<label class="switch">
							<input type="checkbox" id="empresa_activo" name="empresa_activo" value="1" checked>
							<div class="slider round"></div>
						</label>
						<span class="question mb-2" id="label_empresa_activo"></span>				
				  </div>				  
				</div>					
				<div class="RespuestaAjax"></div>  
			</form>
        </div>
		<div class="modal-footer">
			<button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="reg_empresa" form="formEmpresa"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
			<button class="editar btn btn-warning ml-2" type="submit" style="display: none;" id="edi_empresa" form="formEmpresa"><div class="sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Editar</button>
			<button class="eliminar btn btn-danger ml-2" type="submit" style="display: none;" id="delete_empresa" form="formEmpresa"><div class="sb-nav-link-icon"></div><i class="fa fa-trash fa-lg"></i> Eliminar</button>
		</div>			
      </div>
    </div>
</div>
<!--FIN MODAL EMPRESA-->

<!--INICIO MODAL CAJAS-->
<div class="modal fade" id="modal_registrar_cajas">
	<div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Cajas</h4>    
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formCajas" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<div class="input-group mb-3">
							<input type="hidden" id="cajas_id" name="cajas_id" class="form-control">
							<input type="text" id="proceso_cajas" class="form-control" readonly>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fa fa-plus-square fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>		
				
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label for="prefijo">Caja <span class="priority">*<span/></label>
						<div class="input-group mb-3">
						  <input type="text" class="form-control" placeholder="Caja" id="nombre_caja" name="nombre_caja" aria-label="Colaborador" aria-describedby="basic-addon2" readonly required>
						 <div class="input-group-append" id="obtener_caja">				
							<span><a data-toggle="modal" href="#" class="btn btn-outline-success form-control"><div class="sb-nav-link-icon"></div><i class="fas fa-sync-alt fa-lg"></i></a></span>
						 </div>
						</div>
					</div>
				</div>
					
				<div class="form-row">				
					<div class="col-md-12 mb-3">
						<label for="prefijo">Descripción <span class="priority">*<span/></label>
						<div class="input-group mb-3">
							<input type="text" name="descripcion_caja" id="descripcion_caja" class="form-control" placeholder="Descripción" maxlength="50" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fas fa-id-card-alt"></i></span>
							</div>
						</div>	 
					</div>						
				</div>	
				<div class="form-group">				  
				  <div class="col-md-12">			
						<label class="switch">
							<input type="checkbox" id="caja_estado" name="caja_estado" value="1" checked>
							<div class="slider round"></div>
						</label>
						<span class="question mb-2" id="label_caja_estado"></span>				
				  </div>				  
				</div>				
				<div class="RespuestaAjax"></div>	  
			</form>
        </div>
		<div class="modal-footer">
			<button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="reg_caja" form="formCajas"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
			<button class="editar btn btn-warning ml-2" type="submit" style="display: none;" id="edi_caja" form="formCajas"><div class="sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Editar</button>
			<button class="eliminar btn btn-danger ml-2" type="submit" style="display: none;" id="delete_caja" form="formCajas"><div class="sb-nav-link-icon"></div><i class="fa fa-trash fa-lg"></i> Eliminar</button>
		</div>		
      </div>
    </div>
</div>
<!--FIN MODAL CAJAS-->

<!--INICIO MODAL APERTURA CAJA-->
<div class="modal fade" id="modal_apertura_caja">
	<div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Apertura Caja</h4>    
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formAperturaCaja" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<div class="input-group mb-3">
							<input type="hidden" id="apertura_id" name="apertura_id" class="form-control">
							<input type="hidden" id="colaboradores_id_apertura" name="colaboradores_id_apertura" class="form-control">
							<input type="text" id="proceso_aperturaCaja" class="form-control" readonly>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fa fa-plus-square fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>		
				
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<label for="prefijo">Usuario</label>
						<input type="text" class="form-control" placeholder="Usuario" id="usuario_apertura" name="usuario_apertura" aria-label="Usuario" aria-describedby="basic-addon2" readonly required>
						<input type="hidden" class="form-control" placeholder="Usuario" id="colaboradores_id_apertura" name="colaboradores_id_apertura" aria-label="Usuario" aria-describedby="basic-addon2" readonly required>
					</div>
				</div>
				
				<div class="form-row" id="monto_apertura_grupo">
					<div class="col-md-12 mb-3">
						<label for="prefijo">Monto Apertura</label>
						<input type="text" class="form-control" placeholder="Monto Apertura" id="monto_apertura" name="monto_apertura" aria-label="Monto Apertura" aria-describedby="basic-addon2" step="0.01" value="0.00">
					</div>
				</div>				
					
				<div class="form-row">				
					<div class="col-md-12 mb-3">
						<label for="prefijo">Fecha</label>
						<input type="text" name="fecha_apertura" id="fecha_apertura" class="form-control" value="<?php echo date ("Y-m-d");?>" required readonly> 
					</div>						
				</div>						
				<div class="RespuestaAjax"></div>	  
			</form>
        </div>
		<div class="modal-footer">
			<button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="open_caja" form="formAperturaCaja"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Aperturar</button>
			<button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="close_caja" form="formAperturaCaja"><div class="sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Cerrar</button>
		</div>		
      </div>
    </div>
</div>
<!--FIN MODAL APERTURA CAJA-->

<!--INICIO MODAL PRODUCTOS-->
<div class="modal fade" id="modal_registrar_productos">
	<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Productos</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
        </div><div class="container"></div>
        <div class="modal-body">
			<form class="FormularioAjax" id="formProductos" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-12 mb-3">
						<div class="input-group mb-3">
						    <input type="hidden" id="productos_id" name="productos_id" class="form-control">
							<input type="text" id="proceso_productos" class="form-control" readonly>
							<div class="input-group-append">				
								<span class="input-group-text"><div class="sb-nav-link-icon"></div><i class="fa fa-plus-square fa-lg"></i></span>
							</div>
						</div>	 
					</div>							
				</div>				
				<div class="form-row">
					<div class="col-md-1 mb-3">
						<input type="file" name="file" class="file" accept=".png, .jpeg, .jpg, .jfif">
						<img type="button" src="<?php echo SERVERURL; ?>vistas/plantilla/img/products/image_preview.png" id="preview" class="browse img-thumbnail" data-toggle="tooltip" data-placement="top" title="Cargar Imagen">
						<input type="hidden" class="form-control" disabled placeholder="Cargar Imágen" id="file_product" name="file_product">   						
					</div>	
					<div class="col-md-3 mb-3">
						<label for="bar_code_product">Código de Barra</label>
						<div class="input-group mb-3">
							<input type="text" class="form-control" id="bar_code_product" name="bar_code_product" placeholder="Código de Barra" data-toggle="tooltip" data-placement="top">
						</div>	 
					</div>
					<div class="col-md-8 mb-3">
					  <label for="producto">Producto <span class="priority">*<span/></label>
					  <input type="text" class="form-control" id="producto" name="producto" maxlength="50" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" placeholder="Producto" required data-toggle="tooltip" data-placement="top">
					</div>					
				</div>
				
				<div class="form-row">
					<div class="col-md-6 mb-3">
					  <label>Empresa <span class="priority">*<span/></label>
					  <div class="input-group mb-3">
						  <select id="producto_empresa_id" name="producto_empresa_id" class="custom-select" data-toggle="tooltip" data-placement="top" required>
							<option value="">Seleccione</option>
						  </select>
						  <div class="input-group-append" id="buscar_producto_empresa">				
							<a data-toggle="modal" href="#" class="btn btn-outline-success"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
						  </div>
					   </div>
					</div>	
					<div class="col-md-3 mb-3">
					  <label>Categoria <span class="priority">*<span/></label>
					  <div class="input-group mb-3">
						  <select id="producto_categoria" name="producto_categoria" class="custom-select" data-toggle="tooltip" data-placement="top">
							<option value="">Seleccione</option>
						  </select>
						  <div class="input-group-append" id="buscar_producto_categorias">				
							<a data-toggle="modal" href="#" class="btn btn-outline-success"><div class="sb-nav-link-icon"></div><i class="fas fa-search fa-lg"></i></a>
						  </div>
					   </div>
					</div>						
					<div class="col-md-3 mb-3">
					  <label for="almacen">Almacén <span class="priority">*<span/></label>
					  <select class="form-control" id="almacen" name="almacen" required>			  
					  </select>
					</div>						
				</div>
				
				<div class="form-row">
					<div class="col-md-3 mb-3">
					  <label for="tipo_producto">Tipo Producto <span class="priority">*<span/></label>
					  <select class="form-control" id="tipo_producto" name="tipo_producto" required data-toggle="tooltip" data-placement="top">			  
					  </select>
					</div>					
					<div class="col-md-3 mb-3">
					  <label for="medida">Medida <span class="priority">*<span/></label>
					  <select class="form-control" id="medida" name="medida" required data-toggle="tooltip" data-placement="top">			  
					  </select>
					</div>	
					<div class="col-md-3 mb-3">
						<label for="cantidad">Cantidad <span class="priority">*<span/></label>
						<div class="input-group mb-3">
							<input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" step="0.01" required>
						</div>	 
					</div>				  				
					<div class="col-md-3 mb-3">
					  <label for="departamento_cliente">Precio Compra <span class="priority">*<span/></label>
					  <input type="number" class="form-control" id="precio_compra" name="precio_compra" placeholder="Precio Compra" step="0.01" required>
					</div>						
				</div>
				
				<div class="form-row">				  
					<div class="col-md-3 mb-3">
					  <label for="municipio_cliente">% Ganancia</label>
					  <input type="number" class="form-control" id="porcentaje_venta" name="porcentaje_venta" placeholder="Precio Venta" step="0.01">
					</div>	
					<div class="col-md-3 mb-3">
					  <label for="municipio_cliente">Precio Venta</label>
					  <input type="number" class="form-control" id="precio_venta" name="precio_venta" placeholder="Precio Venta" step="0.01">
					</div>	
					<div class="col-md-3 mb-3">
					  <label for="municipio_cliente">Cantidad Mayoreo </label>
					  <input type="number" class="form-control" id="cantidad_mayoreo" name="cantidad_mayoreo" placeholder="Precio Mayoreo" step="0.01" value="3">
					</div>	
					<div class="col-md-3 mb-3">
					  <label for="municipio_cliente">Precio Mayoreo </label>
					  <input type="number" class="form-control" id="precio_mayoreo" name="precio_mayoreo" placeholder="Precio Mayoreo" step="0.01">
					</div>						
				</div>
				<div class="form-row">					
					<div class="col-md-3 mb-3">
					  <label>Cantidad Mínima</label>
					  <input type="number" id="cantidad_minima" name="cantidad_minima" placeholder="Cantidad Mínima" class="form-control" step="0.01">
					</div>	
					<div class="col-md-3 mb-3">
					  <label>Cantidad Máxima</label>
					  <input type="number" id="cantidad_maxima" name="cantidad_maxima" placeholder="Cantidad Máxima" class="form-control" step="0.01">
					</div>					
				</div>
				
				<div class="form-row">
					<div class="col-md-12 mb-3">
					  <label for="descripcion">Descripción <span class="priority">*<span/></label>
					  <textarea id="descripcion" name="descripcion" required placeholder="Descripción" class="form-control" maxlength="100" rows="2"></textarea>	
					  <p id="charNum_descripcion">100 Caracteres</p>	
					</div>					
				</div>
						
				<div class="form-group custom-control custom-checkbox custom-control-inline">	
				  <div class="col-md-12" id="estado_producto">			
						<label class="switch">
							<input type="checkbox" id="producto_activo" name="producto_activo" value="1" checked>
							<div class="slider round"></div>
						</label>
						<span class="question mb-2" id="label_producto_activo"></span>				
				  </div>			  
				</div>	
				<br/>
				<div class="form-group custom-control custom-checkbox custom-control-inline">				  	
				  <div class="col-md-6">		
						 <label class="form-check-label mr-1" for="defaultCheck1">¿ISV Venta?</label>
						<label class="switch">
							<input type="checkbox" id="producto_isv_factura" name="producto_isv_factura" value="1">
							<div class="slider round"></div>
						</label>
						<span class="question mb-2" id="label_producto_isv_factura"></span>				
				  </div>	
				  <div class="col-md-7">	
						 <label class="form-check-label mr-1" for="defaultCheck1">¿ISV Compra?</label>
						<label class="switch">
							<input type="checkbox" id="producto_isv_compra" name="producto_isv_compra" value="1">
							<div class="slider round"></div>
						</label>
						<span class="question mb-2" id="label_producto_isv_compra"></span>				
				  </div>			  
				</div>					
			  				
				<div class="RespuestaAjax"></div>	  
			</form>
        </div>
		<div class="modal-footer">
			<button class="guardar btn btn-primary ml-2" type="submit" style="display: none;" id="reg_producto" form="formProductos"><div class="sb-nav-link-icon"></div><i class="far fa-save fa-lg"></i> Registrar</button>
			<button class="editar btn btn-warning ml-2" type="submit" style="display: none;" id="edi_producto" form="formProductos"><div class="sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Editar</button>
			<button class="eliminar btn btn-danger ml-2" type="submit" style="display: none;" id="delete_producto" form="formProductos"><div class="sb-nav-link-icon"></div><i class="fa fa-trash fa-lg"></i> Eliminar</button>				
		</div>		
      </div>
    </div>
</div>
<!--FIN MODAL PRODUCTOS-->

<!--Modal Transferencia de Producto / Bodega-->

<div class="modal" tabindex="-1" role="dialog" id="modal_transferencia_producto">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Transferir Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form class="" id="formTransferencia" action="" method="POST" data-form="" autocomplete="off" enctype="multipart/form-data">

			<div class="form-group text-center">
				<input type="hidden" value="" id="productos_id" name="productos_id">
				<label class="modal-title" id="nameProduct" class="col-form-label"></label>
          	</div>
			 <div class="form-group mx-sm-3 mb-1">
				<div class="input-group">				
					<div class="input-group-append">				
						<span class="input-group-text"><div class="sb-nav-link-icon"></div>Bodega</span>
					</div>
						<select id="id_bodega" name="id_bodega" class="custom-select" data-toggle="tooltip" data-placement="top" >
			 			</select>
				</div>
			  </div>	
			  
			  <div class="RespuestaAjax"></div>	  
		</form>
      </div>
      <div class="modal-footer">
			<button class="btn btn-primary ml-2" type="submit" id="putEditarBodega" ><div class="sb-nav-link-icon"></div><i class="fas fa-edit fa-lg"></i> Editar</button>
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!--FN Modal Transferencia de Producto / Bodega-->
