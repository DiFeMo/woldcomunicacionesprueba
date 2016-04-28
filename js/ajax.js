
$(document).ready(function() {

	////////////////////////////////////para elementos no input/////////////////////////////////////////

   /////////////////////////////////////////////////////////////////////////////




   // Interceptamos el evento submit
    $('#consulta').submit(function() {
  // Enviamos el formulario usando AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                $('#resultado_ajax').html(data);
            }
        })
        return false;
    });



    $('#modifica_calendario').submit(function() {
    	
        $.ajax({
        	
            type: 'POST',
            //url: 'prueba.php',
            url: $(this).attr('action'),
            //data:'dato=0',
            data: $(this).serialize(),
            success: function(data) {
                $('#aviso_modifica_calendario').html(data);
            }
        })
        return false;
    });




    
    
   // Interceptamos el evento submit
    $('#mensaje').submit(function() {
  // Enviamos el formulario usando AJAX

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function(data) {
                $('#alerta_mensaje_renovado').html(data);
            }
        })
        return false;
    });    



    $('.elimina_materia_alumno').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('.muestra_materias_alumno').html(data);
            }
        })
        return false;
    });
    
    
    
    $('.agregar_materia_alumno').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('.muestra_materias_alumno').html(data);
            }
        })
        return false;
    });    
    
    
    $('#justifica_por_alumno').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#lista_justifica_alumno_ajax').html(data);
            }
        })
        return false;
    });    
    
    $('#justifica_por_grupo').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#lista_grupos_ajax').html(data);
            }
        })
        return false;
    });    
    
    


    $('#busca_alumno').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#busca_ajax').html(data);
            }
        })
        return false;
    });
    
    $('#busca_profesor').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#busca_profesor_ajax').html(data);
            }
        })
        return false;
    });    


    $('#busca_asistente').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#busca_asistente_ajax').html(data);
            }
        })
        return false;
    });    


    $('#busca_materia').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#busca_materia_ajax').html(data);
            }
        })
        return false;
    });    


    $('.alta_horario').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('.muestra_horario_ajax').html(data);
            }
        })
        return false;
    });
    
    
    $('.muestra_horario').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('.muestra_horario_ajax').html(data);
            }
        })
        return false;
    });    

    $('#asistencia_boton').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#estado').html(data);

            }
        })
        return false;
    });


    $('#formulario_calendario_escolar').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#muestra_cal_escolar').html(data);

            }
        })
        return false;
    });


    $('#cambio_clave_correo').submit(function() {
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                $('#respuesta_cambio_clave_correo').html(data);

            }
        })
        return false;
    });



});



/*

	ESTE ARCHIVO SELECCIONA LOS CAMPOS DE UN FORMULARIO PARA ENVIARLOS A UN ARCHIVO PHP
	DONDE SE PROCESA LA INFORMACION PARA EL MANEJO CORRESPONDIENTE

*/