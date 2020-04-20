<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/style.css">
	<script src="https://kit.fontawesome.com/85e74fa750.js" crossorigin="anonymous"></script>
	<title>CECC - Inicio de Sesión</title>
</head>
<body>
	<div class="conatainer separador"></div>
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-3 columna columna-izquierda text-center">
				<h5 class="titulo_superior">COLEGIO DEL CENTRO</h5>
				<img src="assets/images/escudo.jpg" alt="CC" class="escudo">
			</div>
			<div class="col-md-4 columna columna-derecha text-center">
				<h5 class="titulo_superior">CECC</h5>
				<h6 class="titulo">Inicio de sesión</h6>
				<form action="?c=Sesion&a=IniciarSesion" class="needs-validation" id="form-inicio-sesion" method="post" enctype="multipart/form-data" novalidate>	
					<input type="text" id="contraseña" name="contraseña" hidden>				
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<i class="input-group-text fas fa-user"></i>
						</div>
						<input type="email" class="form-control" id="usuario" name="usuario" placeholder="Correo" required>
      					<div class="invalid-feedback" id="msj-usuario">Por favór, completa el campo.</div>
					</div>
					 <div class="input-group mb-3">
					  	<div class="input-group-prepend">
					      	<i class="input-group-text fas fa-key"></i>
					    </div>
					    <input type="password" class="form-control" placeholder="Contraseña" id="contrasenia" required>
					    <div class="input-group-append">
					     	<button class="btn input-group-text revelar" type="button" id="mostrarPwd">
					     		<i class="fas fa-eye"></i>
					     	</button>  
					     </div>
      					<div class="invalid-feedback">Por favór, completa el campo.</div>
					 </div>
					<div class="form-group form-check">
				      	<label class="form-check-label">
				        	 <input class="form-check-input" type="checkbox" name="perfil" value="docente"><span>Soy docente</span>
				      	</label>
				    </div>
					<input type="submit" class="btn btn-md btn-submit" value="Iniciar sesión">
				</form>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="assets/js/sha256.min.js"></script>
	<script src="assets/js/funciones-apoyo.js"></script>
</body>
</html>

