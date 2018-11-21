<?php

class Coche{
    //private $ruedas;
    protected $ruedas;
    var $color;
    protected  $motor;
    
    function Coche() {// metodo constructor
        $this->ruedas=4;
        $this->color="";
        $this->motor=1600;
    }
    function get_motor(){
        return $this->motor;
    }
    
    function get_ruedas(){
        return $this->ruedas;
    }
    function arrancar(){
        
        echo "Estoy arrancndo</br>";
        
    }
    function girar() {
        
        echo "Estoy girando</br>";
    }
    function frenar() {
        echo "Estoy frenando</br>";
    }
    function establce_color($color_coche, $nombre_coche) {
        $this->color=$color_coche;
        echo "El color de: ". $nombre_coche. " es: ".$this->color."<br>";
    }
    //setter: Permire modificr las propiedades del objeto
    //getter: permite ver u obtener las propiedades del objeto 
}
/*
$renault=new Coche();//se les da valores iniciales
$mazda=new Coche();
$seat=new Coche();

$renault->establce_color("Rojo","Renault");
$seat->establce_color("Azul", "Seat");

*/
//////////////////////////

class Camion extends Coche{//herencia
    /*var $ruedas;
    var $color;
    var $motor;*/
    
    function Camion() {// metodo constructor
        $this->ruedas=8;
        $this->color="gris";
        $this->motor=2600;
        
    }/*
    function arrancar(){
        
        echo "Estoy arrancndo</br>";
        
    }
    function girar() {
        
        echo "Estoy girando</br>";
    }
    function frenar() {
        echo "Estoy frenando</br>";
    }*/
    function establce_color($color_camion, $nombre_camion) {
        $this->color=$color_camion;
        echo "El color de: ". $nombre_camion. " es: ".$this->color."<br>";
        
        
    }
    function arrancar() {
        parent::arrancar();
        echo "Camion arrancado";
    }
    
}
/*
$renault=new Coche();//se les da valores iniciales
$mazda=new Coche();
$seat=new Coche();

$renault->establce_color("Rojo","Renault");
$seat->establce_color("Azul", "Seat");
*/

?>
