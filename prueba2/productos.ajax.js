/*#Prueba*/
/*$(function(){
	$("#task-result").hide()
	$("#search").keyup(()=>{
		if ($("#search").val()) {
			let search=$("#search").val();
			$.ajax({
				url:"../../controller/buscar.php?op=buscar",
				data:{search},
				type:"POST",
				success: function(response){
					if (!response.error) {
						let tasks=JSON.parse(response);
						let template='';
						tasks.forEach(task=> {
							template+='<li><a href="#" class="task-item">${task}</a></li>';
						});
						$("#task-result").show();
						$("#container").html(template);
					}
				}
			})
		}

	 })
			$("#task-form").submit(e=>{
			e.preventDefault();
			var formData=new FormData($("#task-form")[0]);



			/*
			const postData = {
				categoria: $("#cat").val(),
				descripcion: $("#des").val(),
				cantidad: $("#can").val(),
				precio: $("#pre").val(),
			}*/
/*			$.ajax({
				url: "../../controller/buscar.php?op=guardar",
				
				type: "POST",
				data: formData,
				contentType: false,
				processData: false,
				success: function(datos){
					
						$("#task-form").trigger("reset");
						window.alert("Correcto!","Registrado Correctamente");

					
				}
			})
		})
	})*/

/* #Prueba 02*/
/*	
function init(){
	$("#task-form").on("submit",function(e){
		e.preventDefault();
		guardaryeditar(e);
	});
}
function guardaryeditar(e){

		var formData = new FormData($("#task-form")[0]);
		$.ajax({
			url:"../../controller/buscar.php?op=insert",
			type:"POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(datos){
				$("#task-form").trigger("reset");
				window.alert("Correcto!","Registrado Correctamente");
			},
			error: function() {
                        alert('Ocurrió un error al crear el producto');
                    }
		});
}

init();*/

/* Prueba 03*/

 $(document).ready(function() {
            $('#task-form').submit(function(event) {
                event.preventDefault(); // Evitar el envío del formulario

                // Obtener los valores de los campos del formulario
                var cat = $('#cat').val();
                var des = $('#des').val();
                var can = $('#can').val();
                var pre = $('#pre').val();

                // Enviar los datos utilizando AJAX
                $.ajax({
                    url: 'controllerbuscar.php?action=crear',
                    method: 'POST',
                    data: {
                        cat: cat,
                        des: des,
                        can: can,
                        pre: pre
                    },
                    success: function(response) {
                          if (response === 'success') {
                            alert('¡Producto creado exitosamente!');
                            $('#cat').val('');
                            $('#des').val('');
                            $('#can').val('');
                            $('#pre').val('');
                        } else {
                            alert('Error al crear el producto form');
                        }
                    },

                });
            });
        });

