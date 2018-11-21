 <?php
    $codigo_ticket=$_POST["codigo_ticket"];
     try {

        $base = new PDO('mysql:host=localhost; dbname=dbctk', 'cmolina', '19841984');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        
        $sql="DELETE FROM `ctk_ticket` WHERE `codigo_ticket`=:m_codigo_ticket";
        $resultado= $base->prepare($sql);//varible resultado almacena el objeto de tipo PDO statement
        //el objeto base(conexión)
        $resultado->execute(array("m_codigo_ticket"=>$codigo_ticket));
        
        //
        $filasafectadas=$resultado->rowCount();
        
        echo "$filasafectadas  Registro/s Eliminado ...........";

        $resultado->closeCursor();

    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    } finally {
        $base = null;
    }

    ?>