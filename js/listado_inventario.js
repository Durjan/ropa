
		
	

		



		

		


$(document).ready(function(){

		
			
			$(function(){
			});

			$('#table').DataTable( {
		        "ajax": "tablesAjax/tablelistado_inventario.php", //cambiuando el nombre del archivo referencia, tenia punto
		        													//pero el archivo referencia lleva guion bajo
		        "columns": [
		          
		            { "data": "CODIGO" },
		            { "data": "DESCRIPCION" },
		            { "data": "MARCA" },
		            { "data": "PRESENTACION" },
		             { "data": "STOCK" },
		              { "data": "PRECIO" },
		            { "data": "ACCIONES" }
		        ]
		    } );
		
		
 });//fin document