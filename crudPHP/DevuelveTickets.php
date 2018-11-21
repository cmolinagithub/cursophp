<?php

require "conexion.php";
class DevuelveTickets extends Conexion{
    public function DevuelveTicketTickets() {
        parent::Conexion();
    }
    
    public function  getTickets($buscar){
         //A continuacion se va a realizar la consulta con la libreria PDO
        $sql="SELECT codigo_ticket, abierto_por, fecha_apertura, fecha_cierre,
        descripcion_evento, tecnico_ctk FROM ctk_ticket WHERE tecnico_ctk='".$buscar."'";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute(array());
        
        
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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
