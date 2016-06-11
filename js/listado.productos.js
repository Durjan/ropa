
		
	

		



		

		


$(document).ready(function(){

		
			
			$(function(){
			});

			$('#table').DataTable( {
		        "ajax": "tablesAjax/tablelistado.productos.php",
		        "columns": [
		          
		            { "data": "CODIGO" },
		            { "data": "DESCRIPCION" },
		            { "data": "CANTIDAD" },
		           
		              { "data": "PRECIO" },
		            { "data": "ACCIONES" }
		        ]
		    } );
		
		
 });//fin document