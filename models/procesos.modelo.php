<?php 

require_once  "conexion.php";
    class ProcesosModelo{
        static public function mdlListarTiemposProcesos(){
            $stmt = Conexion::conectar()->prepare("CALL prc_ListarTiempoProcesos");
            $stmt -> execute();
            return $stmt -> fetchall();

           $stmt = null; 
        }
    }
?>