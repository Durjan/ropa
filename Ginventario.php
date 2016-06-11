<?php include("Complementos/validador.php");?>
<html lang="es">
<head>
	<meta charset="UTF-8" >
	<title>ORIGINAL SHOP | MENU </title>
	<link rel="StyleSheet" href="css/style_menu.css" type="text/css"></link>	
	<link rel="StyleSheet" href="Bootstrap/css/bootstrap.css" type="text/css"></link>
	<link rel="StyleSheet" href="Bootstrap/css/bootstrap-theme.min.css" type="text/css"></link>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script src="jquery-ui/jquery-ui.js"></script> 
  <script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="js/listado_inventario.js"></script>
</head>
<body>
	<?php include("Complementos/menu-cabezado.php");?>
	<section>
		<div id="directorio"> 
			<br>
			<label><a href="empleados.php">Inventario\</a></label>
			<hr>
		</div>
		<br><br>
		<div class="panel panel-default" style="width: 80%; margin: auto;">
  		<div class="panel-heading">Administrar Inventario</div>
  		<div class="panel-body">
        <a href="ingreso_inventario.php" class="btn btn-success glyphicon glyphicon-plus">Agregar Producto a Inventario</a>
    		<a href="reporte_inventario.php"><button type="button" data-toggle="modal"  data-target="#Mymodal" class="btn btn-success glyphicon glyphicon-plus">Generar Reporte</button></a>
        <br><br>
    		<div id="tabla"></div>
    		<br><br><table style="overflow-y: hidden;margin-top: 100px;z-index: 0;" id="table" class="table table-striped table-hover" cellspacing="0" width="100%">
            <thead>
                <tr>
            <th>CODIGO</th>                     
            <th >DESCRIPCIÓN</th>
            <th >MARCA</th>
            <th>PRESENTACIÓN</th>
            <th>STOCK</th>
            <th>PRECIO</th>
            <th>ACCIONES</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
            <th>CODIGO</th>                     
            <th >DESCRIPCIÓN</th>
            <th >MARCA</th>
            <th>PRESENTACIÓN</th>
            <th>STOCK</th>
            <th>PRECIO</th>
            <th>ACCIONES</th>
                </tr>
            </tfoot>
        </table>
  		</div>
		</div>
		
			
	</section>	
	<div class="container">
        <p class="text-muted credit">Derecho reservados <a href="http://martinbean.co.uk/">Programadores UES</a> and <a href="http://ryanfait.com/sticky-footer/">Ing de sistemas</a>.</p>
      </div>
    </div>	


</body>
</html>


<div class="modal fade" tabindex="-1" role="dialog" id="Mymodal1" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Datos de productos en inventario</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">producto</div>
          <div class="col-md-4 col-md-offset-4">camisas</div>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-3">cantidad</div>
          <div class="col-md-2 col-md-offset-4">20</div>
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
