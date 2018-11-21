<?php
require "conexion.php";
class ProcesarUsuario extends Conexion{
    public function ProcesarUsuario() {
        parent::Conexion();
    }
    
    public function  getUsuario(){
         //A continuacion se va a realizar la consulta con la libreria PDO
        $sql="SELECT id, tipo, tipo_identificacion, numero_identificacion, apellidos, nombres, razon_social, codigo, 
            direccion, telefono1, telefono2, celular1, celular2, email1, email2, fecha_nacimiento, profesion, 
            actividades, rol, fecha_registro, descripcion FROM ctk_usuario where estado=1";
       $sentencia=$this->conexion_db->prepare($sql);
       $sentencia->execute(array());
       $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //otra opcion 
        //$resultado=$this->conexion_db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        //revisar    $resultado=$this->conexion_db->query($sql)->fetchAll(PDO::FETCH_OBJ);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db=null;
        
        //El ejemplo que se encuentra a continuacion realiza la consulta con la libreria mysqli
        /*
        $resultado=$this->conexion_db->query("SELECT codigo_ticket, abierto_por, fecha_apertura, fecha_cierre, 
         descripcion_evento, tecnico_ctk FROM ctk_ticket WHERE tecnico_ctk='".$buscar."'");
        $ticket=$resultado->fetch_all(MYSQLI_ASSOC);
        return $ticket;
        */
    }
    
}

?>
