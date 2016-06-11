<?php include("Complementos/validador.php");?>
<html lang="es">
<head>
	<meta charset="UTF-8" >
	<title>ORIGINAL SHOP | MENU </title>
	<link rel="StyleSheet" href="css/style_registro_productos.css" type="text/css"></link>	
	<link rel="StyleSheet" href="Bootstrap/css/bootstrap.min.css" type="text/css"></link>
	<link rel="StyleSheet" href="Bootstrap/css/bootstrap-theme.min.css" type="text/css"></link>
	<link rel="StyleSheet" href="css/datepicker.css" type="text/css"></link>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script>
  $(function(){
      $.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
        };
      window.prettyPrint && prettyPrint();
      $('#fecha1').datepicker({
        format: 'yyyy-mm-dd',
        language:'es',
        
      });
      $('#fecha2').datepicker({
        format: 'yyyy-mm-dd',
        language:'es',
        });
    });
  </script>  
</head>
<body>
	<?php include("Complementos/menu-cabezado.php");?>
	<section>
		<div id="directorio"> 
			<br>
			<label><a href="inventario.php">Inventario\ </a><a href="registro_productos.php">Reporte de  Inventario</a></label>
			<hr>
		</div>
		<center>
			<div class="jumbotron">
				<h1>Reporte</h1>
				<br>
				<hr>
				<div id="contenedor">
					
				<form class="form-horizontal">
  					<div class="form-group">
    					<label  class="col-sm-2 control-label">Seleccione</label>
    					<div class="col-sm-7">
      				  <?php
                //$consulta_categoria=mysql_query("SELECT *FROM categoria_producto");
                echo " <select  id=\"op\" name=\"op\" class=\"form-control col-sm-30\" >";
                echo "<option value=''>Seleccione..</option>";
                //while($fila=mysql_fetch_array($consulta_categoria)){
                echo "<option value='".$fila['nombre']."'>General</option>";
                //}
                echo "  </select>";
                ?>
              </div>
    					<br>
    					<br>
    					<label  class="col-sm-2 control-label">Desde</label>
    					<div class="col-sm-3">
      					 <input type="text" class=" form-control datepicker" data-date-format="yyyy-mm-dd" name="fecha1" id="fecha1"
                  placeholder="Introduce la fecha de inicio">
    					</div>
    					<label  class="col-sm-2 control-label">Hasta</label>
    					<div class="col-sm-3">
      						<input type="text" class="form-control datepicker" data-date-format="yyyy-mm-dd" name="frecha2" id="fecha2" placeholder="introduce la fecha final">
    					</div>
    					<br>
    					<br>
    					<div class="col-sm-5">
    						<br>
    						<br>
      					<button type="button" class="btn btn-success">Generar Reporte</button>
    					</div>
  					</div>
            </form>
					</div>
				</div>
		</center>
			
	</section>	
		


</body>
</html>