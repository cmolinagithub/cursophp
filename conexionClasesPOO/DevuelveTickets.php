<?php

require "conexion.php";
class DevuelveTickets extends Conexion{
    public function DevuelveTicketTickets() {
        parent::Conexion();
    }
    
    public function  getTickets(){
        $resultado=$this->conexion_db->query("SELECT codigo_ticket, abierto_por, fecha_apertura, fecha_cierre, 
         descripcion_evento, tecnico_ctk FROM ctk_ticket");
        $ticket=$resultado->fetch_all(MYSQLI_ASSOC);
        return $ticket;
    }
    
}

?>
