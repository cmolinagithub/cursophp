<?php
class Conexion{
    //Creamos un método estático que no necesita ser instanciado
    public static function con(){
     
    //new mysqli creamos o instanciamos el objeto mysqli
    //new mysqli('servidor','usuario','contraseña','nombre de la BD');
        $con=new mysqli("localhost", "root", "", "clinica");
             
       //llamamos a la conexión y hacemos una consulta para utilizar UTF-8
        $con->set_charset('utf8');
 
       //devolvemos la conexión para que pueda ser utilizada en otros métodos
        return $con; 
    }
}
