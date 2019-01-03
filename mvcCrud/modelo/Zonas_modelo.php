<?php
//echo "estamos en el modelo";
class Zonas_modelo
{
    private $db;// aqui se almacena la conexion, esto ineteractua con la clase conectar
    private $zonas; // aqui se va obtener toda la consulta, todas las zonas
    public function __construct()
    {
        //echo ("Bien Venido el conostrucctor del modelo");
        require_once("modelo/conectar.php");
        $this->db = Conectar::conexion();
        $this->zonas = array();

    }
    public function get_zonas()
    {
        $sql = "SELECT * FROM cj_zone";
        $consulta = $this->db->query($sql);
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->zonas[] = $fila;
        }
        return $this->zonas;

    }

}
?>