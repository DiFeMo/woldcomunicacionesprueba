$(document).ready(function () {



	/****************expresion regular para evaluar el contenido del formulario*******************/
    var matricula_alumno = /\b(\d{10})/;
	var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
	var fecha = /\b(\d{4}-)(\d{2}-)(\d{2})/;

	/****************fin, expresion regular para evaluar el contenido del formulario*******************/

	/*******************************VALIDACION PARA ALTA DE USUARIO**********************************************/
	$("#boton").click(function (){
		$(".text-error").remove();


				if( $("#palabra").val() == ""  || $("#palabra").val() == "." || $("#palabra").val() == " "){
					$("#resultado_validacion").focus().after("<span class='text-error'>Entrada erronea</span>");
					return false;
				}
								
	});






	/************************activa la función  para borar la alerta  al escribir  el contenido correctoo*****************/


	$(".usuario_obligado, .password_obligado, .nombre_obligado, .paterno_obligado, .materno_obligado").keyup(function(){
		if( $(this).val() != "" ){
			$(".error").fadeOut();
			return false;
		}
	});
	$(".email").keyup(function(){
		if( $(this).val() != "" && emailreg.test($(this).val())){
			$(".error").fadeOut();
			return false;
		}
	});
	$(".matricula_obligado").keyup(function(){
		if( $(this).val() != "" && matricula_alumno.test($(this).val())){
			$(".error").fadeOut();
			return false;
		}
	});
	/************************activa la función  para borar la alerta  al escribir  el contenido correctoo*****************/

	/*******************************VALIDACION PARA ALTA DE USUARIO**********************************************/





});