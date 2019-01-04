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
    public function get_user()
    {
        $sql = "SELECT * FROM cj_user";
        $query = $this->db->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $this->user[] = $row;
        }
        return $this->user;

    }

}
?>