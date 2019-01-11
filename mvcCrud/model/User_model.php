<?php
//echo "estamos en el modelo";
class User_model
{
    private $db;// aqui se almacena la conexion, esto ineteractua con la clase conectar
    private $user; // aqui se va obtener toda la consulta, todas las zonas
    public function __construct()
    {
        //echo ("Bien Venido el conostrucctor del modelo");
        require_once("model/Conectar.php");
        $this->db = Conectar::conexion();
        $this->user = array();

    }
    public function get_user($empezar_desde,$cant_registros)
    {
        $sql = "SELECT * FROM cj_user LIMIT $empezar_desde,$cant_registros";
        $query = $this->db->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $this->user[] = $row;
        }
        return $this->user;

    }
    public function get_user_total()
    {
        $sql = "SELECT * FROM cj_user";
        $query = $this->db->query($sql);
        $total_user=$query->rowCount();
        return $total_user;
    }

}
?>