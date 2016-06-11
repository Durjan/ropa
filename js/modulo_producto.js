function guardarProducto() {
            
            var ajaxdata=$("#form_ingreso_producto").serialize();
                $.ajax({
                    type:"POST",
                    url : "Controles/procesos.php",
                    data : ajaxdata,
                    success : function(respuesta)
                    {   
                        if(respuesta=="exito")
                        {
                            window.location.href = "productos.php";
                        }
                        if(respuesta=="error")
                        {
                            error();
                        }
                        
                    }
                    /*complete: function() 
                    {
                        
                    }*/
                });
        }
function detallesProducto(id) {
	$('#myModal').removeClass('hide');
	$('#myModal').modal('toggle');
	var ajaxdata={"action":"detalles_producto","id_producto": id}
	$.ajax({
		type:"POST",
		url : "acciones/listado.productos.action.php",
		data : ajaxdata ,
		success : function(data)
		{  
			$("#detalles_producto *").remove();
			$("#detalles_producto").append(data);
		},
		complete: function() 
		{}
		});
		}


		
$(document).ready(function(){
	$("#modificar-producto").click(function(){
		$("#form-mod-producto").submit();
		});
	

	
		
 });        
