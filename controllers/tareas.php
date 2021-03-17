<?php

use Jenssegers\Blade\Blade;

include (HELPERS_PATH.'gestorErrores.php');
// include (HELPERS_PATH.'practicautils.php');
// include (MODEL_PATH.'tareas.php');

class Tareas {
    protected $model=null;
    protected $errores=null;
    protected $blade=null;

    public function __construct() {
        // $this->model=new Tareas_Model();

        $this->errores=new GestorErrores(
            '<span style="color:red; background:#EEE; padding:.2em 1em; margin:1em">', '</span>');
        
        $this->blade= new Blade(VIEW_PATH, CACHE_PATH);
    }

    public static function getInstance() {
        return new self();
    }
    public function Login()
    {
        return $this->blade->render('login');
    }
    
    public function EsAdmin(){
        // $bd= BBDD::getInstance();
        // $usuario = $_POST['usuario']; 
        // $rs_administradores = $bd->Query("select * from usuarios");
        // $usuarios = $rs_administradores['usuario_id'];
        // if($usuario == $usuarios[0] || $usuario == $usuarios[1]){
           return $this->blade->render('menuAdmin');
        // }else{
        //     return $this->blade->render('menuOper');
        // }

    }
    public function Add(){
        return $this->blade->render('add');
    }
    
}