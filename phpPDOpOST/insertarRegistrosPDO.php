 <?php
    $codigo_ticket=$_POST["codigo_ticket"];
    $abierto_por=$_POST["abierto_por"];
    $fecha_apertura=date("Y-m-d");
    $hora_apertura=date("H:i:s");
    $fecha_cierre=date("Y-m-d");
    $hora_cierre=date("H:i:s");
    $visita_tecnica=0;
    $descripcion_evento=$_POST["descripcion_evento"];
    $tipo=$_POST["tipo"];
    $factura=$_POST["factura"];
    $observacion=$_POST["observacion"];
    $tecnico_ctk=$_POST["tecnico_ctk"];
    $codigo_cliente="PRIMUS";
    $adicional=$_POST["adicional"];
    
    try {

        $base = new PDO('mysql:host=localhost; dbname=dbctk', 'cmolina', '19841984');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");
        
        $sql="INSERT INTO `ctk_ticket` (`codigo_ticket`, `abierto_por`, `fecha_apertura`, `hora_apertura`
            , `fecha_cierre`, `hora_cierre`, `visita_tecnica`, `descripcion_evento`, `tipo`
            , `factura`, `observacion`, `tecnico_ctk`, `codigo_cliente`, `adicional`) VALUES
        (:m_codigo_ticket, :m_abierto_por, :m_fecha_apertura ,:m_hora_apertura ,:m_fecha_cierre ,:m_hora_cierre ,:m_visita_tecnica ,:m_descripcion_evento ,:m_tipo ,:m_factura ,:m_observacion ,:m_tecnico_ctk ,:m_codigo_cliente ,:m_adicional)";
        $resultado= $base->prepare($sql);//varible resultado almacena el objeto de tipo PDO statement
        //el objeto base(conexión)
        $resultado->execute(array("m_codigo_ticket"=>$codigo_ticket, "m_abierto_por"=>$abierto_por,
        "m_fecha_apertura"=>$fecha_apertura, "m_hora_apertura"=>$hora_apertura, "m_fecha_cierre"=>$fecha_cierre,
        "m_hora_cierre"=>$hora_cierre, "m_visita_tecnica"=>$visita_tecnica, "m_descripcion_evento"=>$descripcion_evento,
        "m_tipo"=>$tipo, "m_factura"=>$factura, "m_observacion"=>$observacion, "m_tecnico_ctk"=>$tecnico_ctk,
        "m_codigo_cliente"=>$codigo_cliente, "m_adicional"=>$adicional));
        echo "...............Registro insertado...........";

        $resultado->closeCursor();

    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    } finally {
        $base = null;
    }

    ?>