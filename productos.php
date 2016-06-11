<?php include("Complementos/validador.php");
include("Complementos/conexion.php");
?>
<html lang="es">
<head>
	<meta charset="UTF-8" >
	<title>ORIGINAL SHOP | MENU </title>
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/dataTables.min.js"></script>
  <script src="js/modulo_producto.js"></script>
    <script src="js/listado.productos.js"></script><!-- AGREGANDO EL JS PARA EL LISTADO DE PRODUTOS-->

	<script src="js/sucursal.js"></script>
  
  <link rel="StyleSheet" href="css/style_menu.css" type="text/css"></link>	
	<link rel="StyleSheet" href="Bootstrap/css/bootstrap.css" type="text/css"></link>
	<link rel="StyleSheet" href="Bootstrap/css/bootstrap-theme.min.css" type="text/css"></link>
	<link rel="stylesheet" type="text/css" href="css/dataTables.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
  
</head>
<body>
	<?php include("Complementos/menu-cabezado.php");?>
	<section id="cuerpo">
		<div id="directorio"> 
			<br>
			<label><a href="empleados.php">Productos\</a></label>
			<hr>
		</div>
		<br><br>
		<div class="panel panel-default" style="width: 80%; margin: auto;">
  		<div class="panel-heading">Administrar Productos</div>
  		<div class="panel-body" >
    		<a onclick='agregarSucursal()'><button type="button" data-toggle="modal"  data-target="#Mymodal" class="btn btn-success glyphicon glyphicon-plus">Agregar Producto</button></a>
        <a href="reporte_productos.php" type="button" class="btn btn-success glyphicon glyphicon-book">Generar Reporte</a>
        <br><br>
    		<div id="contenido" style="  ">
        <style>
          #table_wrapper .row .col-sm-12{

            margin-top:-85%;
          }
          #table_wrapper .row .col-sm-5{

            margin-top:-65%;
          }
          #table_wrapper .row .col-sm-7{

            margin-top:-65%;
            float: right;
          }
        </style>
        <table id="table" style="overflow-y: hidden ;z-index: 0; float: left;"  class="table table-striped table-hover" cellspacing="0" width="100%">
            <!-- agregando el ID a la tabla este se llama desde el js refcien agregado arrriba -->

            <thead>
                <tr>
                      
            <th>CODIGO</th>                     
            <th>DESCRIPCIÓN</th>
            <th>CANTIDAD</th>
            <th>PRECIO DE COMPRA</th>
            <th>ACCIONES</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
            <th>CODIGO</th>                     
            <th>DESCRIPCIÓN</th>
            <th>CANTIDAD</th>
            <th>PRECIO DE COMPRA</th>
            <th>ACCIONES</th>
                </tr>
            </tfoot>
        </table>  
        </div>
    		<br><br>
        
  		</div>
		</div>
		
			
	</section>	
	<div class="container">
        <p class="text-muted credit">Derecho reservados <a href="http://martinbean.co.uk/">Programadores UES</a> and <a href="http://ryanfait.com/sticky-footer/">Ing de sistemas</a>.</p>
      </div>
    </div>	


</body>
</html>

<div class="modal fade" tabindex="-1" role="dialog" id="Mymodal" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Ingreso de productos</h4>
      </div>
      <div class="modal-body">
      <div id="contenedor">
        <fieldset>
        <legend>Datos del producto</legend>  
        <form class="form-horizontal" id="form_ingreso_producto">
            <div class="form-group">
              <label  class="col-sm-4 control-label">Nombre</label>
              <div class="col-sm-5" >
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de producto">
              </div>
              <br>
              <br>
              <label  class="col-sm-4 control-label">Descripción</label>
              <div class="col-sm-4">
                <input type="text" class="form-control"  id="descripcion" name="descripcion" placeholder="Descripción">
              </div>
              <br>
              <br>
              <label  class="col-sm-4 control-label">Cantidad </label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
              </div>
              <br>
              <br>
              <label  class="col-sm-4 control-label">Precio de Compra</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="precioC" name="precioC" placeholder="Precio de venta">
              </div>
              <br>
              <br>
              <label  class="col-sm-4 control-label">Precio de Venta</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="precioV" name="precioV" placeholder="Precio de venta">
              </div>
              <br>
              <br>
              <label  class="col-sm-4 control-label">Fecha de ingreso </label>
              <div class="col-sm-6">
                 <input type="text" class=" form-control datepicker" data-date-format="yyyy-mm-dd" name="fecha1" id="fecha1"
           placeholder="Introduce la fecha de inicio">
              </div>
              <br>
              <br>
              <label  class="col-sm-4 control-label">Sucursal</label>
              <div class="col-sm-5">
                   <?php
                    $consulta_categoria=mysql_query("SELECT *FROM sucursal");
                    echo " <select  id=\"sucursal\" name=\"sucursal\" class=\"form-control col-sm-30\" >";
                    echo "<option value=''>Seleccione..</option>";
                    while($fila=mysql_fetch_array($consulta_categoria))
                    {
                    echo "<option value='".$fila['id_sucursal']."'>".$fila['nombre']."</option>";
                    }
                    echo "  </select>";
                  ?>
              </div>
              <br>
              <br>
              <label  class="col-sm-4 control-label">Proveedor</label>
              <div class="col-sm-5">
                   <?php
                    $consulta_categoria=mysql_query("SELECT *FROM proveedor");
                    echo " <select  id=\"proveedor\" name=\"proveedor\" class=\"form-control col-sm-30\" >";
                    echo "<option value=''>Seleccione..</option>";
                    while($fila=mysql_fetch_array($consulta_categoria)){
                    echo "<option value='".$fila['id_proveedor']."'>".$fila['nombre']."</option>";
                    }
                    echo "  </select>";
                    ?>
              </div>
              <br>
              <br>
              <label  class="col-sm-4 control-label">Tipo tipo de Articulo</label>
              <div class="col-sm-4">
                    <?php
                    $consulta_categoria=mysql_query("SELECT *FROM tipoArticulo");
                    echo " <select  id=\"T_arti\" name=\"T_arti\" class=\"form-control col-sm-30\" >";
                    echo "<option value=''>Seleccione..</option>";
                    while($fila=mysql_fetch_array($consulta_categoria)){
                    echo "<option value='".$fila['id_tipoArticulo']."'>".$fila['nombre']."</option>";
                    }
                    echo "  </select>";
                    ?>
              </div>
              <br>
              <br>
            </div>
            <input id="op" name="op" type="hidden" value="ingresar_producto"> 
            </form>
            </fieldset>

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a onclick="guardarProducto();"><button type="button" class="btn btn-primary glyphicon glyphicon-plus">Save</button></a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" tabindex="-1" role="dialog" id="Mymodal1" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Datos del producto</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">.col-md-4</div>
          <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
          <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
        </div>
        <div class="row">
          <div class="col-sm-9">
            Level 1: .col-sm-9
            <div class="row">
              <div class="col-xs-8 col-sm-6">
                Level 2: .col-xs-8 .col-sm-6
              </div>
              <div class="col-xs-4 col-sm-6">
                Level 2: .col-xs-4 .col-sm-6
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
