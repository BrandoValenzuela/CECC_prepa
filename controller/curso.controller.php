<?php  
require_once 'model/curso.php';

class CursoController{
    
    private $model;
    
    public function __CONSTRUCT(){
    	//Se hace una instancia del modelo Curso
        $this->model = new Curso();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/curso/curso.php'; //vista de la clase curso
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $curso = new Curso();
        
        if(isset($_REQUEST['id'])){
            $curso = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/curso/curso-editar.php'; //vista de clase curso para editar datos.
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $curso = new Curso();
        // echo '<br>';
        // print_r($materias);
        $curso->materias = $_REQUEST['productos'];
        $this->model->Registrar($curso);

        // $curso->id > 0 
        //     ? $this->model->Actualizar($curso)
        //     : $this->model->Registrar($curso);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Curso');
    }
}

?>