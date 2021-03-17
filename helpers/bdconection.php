<?php 

class BBDD {

    static $instance=null;

    private $conex=null;
    private $user='root';
    private $host='localhost';
    private $passwd='';
    private $schema='desatranques';

    private  function __construct() {
        $this->MakeConexion();
    }

    /**
     * Singleton
     */
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance=new self();
        }
        return self::$instance;
    }

    /**
     * Devuelve la conexión
     *
     * @return void
     */
    function Conexion() {
        return $this->conex;
    }
    
    /**
     * Crea la conexión de la BBDD
     *
     * @return void
     */
    private function MakeConexion() {
        $this->conex=mysqli_connect (
                $this->host, $this->user, $this->passwd, $this->schema);
        
        if (! $this->conex ) {
            throw new Exception("Error en conexión BBDD");
        }
    }

    
    public function Query($sql) {
        $rs = mysqli_query($this->conex, $sql);
        if (! $rs ) {
            echo "<h1>Error en consulta</h1><pre>$sql</pre>";
        }
        return $rs;
    }

}
