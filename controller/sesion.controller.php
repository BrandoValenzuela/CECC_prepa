<?php
require_once 'model/sesion.php';
class SesionController{
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Sesion();
    }
    
    public function Index(){
        if (isset($_SESSION['permisos'])) {
            // header('Location: index.php?c=Principal');
        }
        require_once 'view/sesion.php';
    }
    
    public function IniciarSesion(){
        $sesion = new Sesion();
        $sesion->usuario = $_REQUEST['usuario'];
        $sesion->contraseña = $_REQUEST['contraseña'];
        if (!isset($_REQUEST['perfil'])) {
            $sesion->perfil = 'otro';
        }else{
            $sesion->perfil = $_REQUEST['perfil'];
        }
        // require_once 'view/prueba.php';
        // echo $sesion->usuario."<br>".$sesion->contraseña."<br>".$sesion->perfil;
        if ($sesion->perfil === "docente") {
            echo "<br><br>Concultar en tabla docente";
        }else{
            // echo "<br><br>Consultar en tabla usuario";
        
            $usuario = $this->model->verificarCredenciales($sesion);
            if (!empty($usuario)) {
                $_SESSION = ['usuario' => $usuario->nombreUsuario, 'permisos' => $usuario->permisos, 'tipo' => $usuario->tipo];
                $_SESSION['tiempo'] = time();
                // header('location: ?c=Principal');
                echo "<br><br>Bienvenido "." ".$usuario->tipo." ".$usuario->nombreUsuario." ".$usuario->apellidosUsuario;
            }
            else{
                $mensaje = array(
                        'titulo' => 'Ups! Algo salio mal',
                        'cuerpo' => 'El usuario o la contraseña que ingresaste son incorrectos.<br>Por favor vuelve a intentar.'
                    );
                $redireccion = 'index.php';
                include_once 'view/sesion.php';
                require_once 'view/modal-mensajes.php';
            }
        }
    }

    public function cerrarSesionPorInactividad(){
        $mensaje = array(
            'titulo' => 'Sesión cerrada automáticamente',
            'cuerpo' => 'La sesión se ha cerrado por una inactividad mayor a 15 minutos. Vuelve a iniciar sesión para continuar trabajando.'
        );
        $redireccion = 'index.php';
        include_once 'view/sesion.php';
        require_once 'view/modal-mensajes.php';
    }
    
    public function CerrarSesion(){
        $sesion = new Sesion();
        $resultado = $this->model->cerrarSesion();
    }

    public function ErrorConexion(){
        require_once 'view/error.php';
    }
}
?>