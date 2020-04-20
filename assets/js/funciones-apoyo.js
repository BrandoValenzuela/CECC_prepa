// Muestra u ocultar el botón para ver la contraseña
window.onload = function(){$("#mostrarPwd").hide();}
$("#contrasenia").on('change',function() {  
    if($("#contrasenia").val()){
        $("#mostrarPwd").show();
    }else{
        $("#mostrarPwd").hide();
    }
});
//Muestra u ocultar la contraseña.
$(".revelar").on('click',function() {
	var $pwd = $("#contrasenia");
	if ($pwd.attr('type') === 'password'){
    	$pwd.attr('type', 'text');
    }else{
    	$pwd.attr('type', 'password');
	}
});

// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

$(document).ready(function(){
	$('#usuario').blur(function(){
		var campo = $('#usuario');
		if (!campo.val().match(/^[0-9a-z_\-\.]+@[0-9a-z\-\.]+\.[a-z]{2,4}$/i) && campo.val().length > 1 ) {
			$('#msj-usuario').text("Este campo no es un correo.");
		}else{
			$('#msj-usuario').text("Por favór, completa el campo.");
		}
	});
});

//Crea el HASH para la contraseña
$(document).ready(function(){
  $("#contrasenia").blur(function(){
    $("#contraseña").val(sha256($("#contrasenia").val()));
  });
});

//Inicia el modal de los mensajes
$(document).ready(function(){
	$("#modal-mensajes").modal();
});