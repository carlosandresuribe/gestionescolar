<?php
include('../../../app/config.php');

$id_rol = $_POST['id_rol'];
$nombre_rol = $_POST['nombre_rol'];
$nombre_rol = mb_strtoupper($nombre_rol, 'UTF-8');

if ($nombre_rol=="") {
    session_start();
    $_SESSION['mensaje']="Llene el campo  nombre del rol";
    $_SESSION['icono']="error";
    header("Location:".APP_URL."/admin/roles/edit.php?=".$id_rol);
}else {
    $sentencia = $pdo->prepare("UPDATE roles 
    SET nombre_rol=:nombre_rol, 
        fyh_actualizacion=:fyh_actualizacion 
    WHERE id_rol =:id_rol");

    $sentencia->bindParam('nombre_rol',$nombre_rol);
    $sentencia->bindParam('fyh_actualizacion',$fechahora);
    $sentencia->bindParam('id_rol',$id_rol);

    try {
        if ($sentencia->execute()) {
            // echo "Se registraron los datos correctamente";
            session_start();
            $_SESSION['mensaje']="Se actualizó el registro correctamente";
            $_SESSION['icono']="success";
            header("Location:".APP_URL."/admin/roles");
        }else{
            // echo " No se registraron los datos";
            session_start();
            $_SESSION['mensaje']="No se pudo actualizar el registro";
            $_SESSION['icono']="error";
            header("Location:".APP_URL."/admin/roles/edit.php?=".$id_rol);
        }
    } catch (Exception $exception) {
        session_start();
        $_SESSION['mensaje']="Este rol ya existe en la base de datos";
        $_SESSION['icono']="error";
        header("Location:".APP_URL."/admin/roles/edit.php?=".$id_rol);
    }


}

