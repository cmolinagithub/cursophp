<?php
require "db/conexion.php";
class ProcesarZona extends Conexion{
    public function ProcesarZona() {
        parent::Conexion();
    }
    
    public function  getZona(){
         //A continuacion se va a realizar la consulta con la libreria PDO
        $sql="SELECT cj_zone.zone_id 'ID', cj_country.name 'PAIS', cj_zone.name 'ESTADO', 
        cj_zone.code 'CODIGO' FROM cj_zone INNER JOIN cj_country 
        on cj_zone.country_id=cj_country.country_id where cj_zone.status=1";
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
