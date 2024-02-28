<?php
    include('../../../app/config.php');
    $id_rol= $_POST['id_rol'];
    

        $sentencia = $pdo->prepare("DELETE FROM  roles WHERE id_rol=:id_rol");
        $sentencia->bindParam('id_rol',$id_rol);
    

            if ($sentencia->execute()) {
                // echo "Se registraron los datos correctamente";
                session_start();
                $_SESSION['mensaje']="Se eliminaron el rol correctamente";
                $_SESSION['icono']="success";
                header("Location:".APP_URL."/admin/roles");
            }else{
                // echo " No se registraron los datos";
                session_start();
                $_SESSION['mensaje']="No se pudo eliminar en la base de datos";
                $_SESSION['icono']="error";
                header("Location:".APP_URL."/admin/roles/create.php");
            }    
    

?>