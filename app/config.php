<?php

    define('SERVIDOR','localhost');
    define('USUARIO','root');
    define('PASSWORD','');
    define('BD','appredes');
    
    define('APP_NAME','SISTEMA GESTION REDES DE SALVACIÓN');
    define('APP_URL','http://localhost/appredes');
    define('KEY_API_MAPS','');

    $servidor ="mysql:host=".SERVIDOR.";"."dbname=".BD;
    
    try{
        $pdo= new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",PDO::ATTR_EMULATE_PREPARES =>FALSE));
        // echo "conexión exitosa a la BD";

    }catch(PDOException $e){
        print_r($e);
        echo " error no se pudo conectar a la BD";
    }

        date_default_timezone_set("America/Bogota");
        $fechaHora = date('y-m-d h:m:s');
        $fecha_actual=date('y-m-d');
        $dia_actual=date('d');
        $mes_actual=date('m');
        $anio_actual=date('Y');
        $estado_de_registro = '1';

;?>