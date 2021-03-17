<?php
include(HELPERS_PATH.'bdconnection.php');

$valores = mysqli_fetch_array($consulta);

class Tareas_Model{

    public function __construct(){
    }

    public function GetTareas(){
        $bd= BBDD::getInstance();
   
        $rs_tareas = $bd->Query("select * from tarea");
        
    }
}