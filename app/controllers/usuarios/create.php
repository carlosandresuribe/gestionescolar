<?php
include('../../../app/config.php');

$nombres = $_POST['nombres'];
$rol_id = $_POST['rol_id'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if($password == $password_repeat){
    // echo "contraseñas son iguales";
    $password = password_hash($password, PASSWORD_DEFAULT)."\n";
    $sentencia = $pdo->prepare('INSERT INTO usuarios
    (nombres,rol_id , email, password, fyh_creacion, estado)

    VALUES ( :nombres,:rol_id ,:email,:password,:fyh_creacion,:estado)');

    $sentencia->bindParam('nombres',$nombres);
    $sentencia->bindParam('rol_id',$rol_id );
    $sentencia->bindParam('email',$email);
    $sentencia->bindParam('password',$password);
    $sentencia->bindParam('fyh_creacion',$fechaHora);
    $sentencia->bindParam('estado',$estado_de_registro);

    try {
        if($sentencia->execute()){
            session_start();
            $_SESSION['mensaje']="El usuario ha sido creadocon éxito.";
            $_SESSION['icono']="success";
            header('Location:' .APP_URL."/admin/usuarios");
        }else{
            session_start();
            $_SESSION['mensaje']="Error no se pudo registrar en la base de datos";
            $_SESSION['icono']="error";?>
            <script>window.history.back()</script><?php
        }
    } catch (Exception $exception) {
        session_start();
        $_SESSION['mensaje']="El correo  electrónico ya se encuentra en uso.";
        $_SESSION['icono']="error";?>
        <script>window.history.back()</script><?php
    }

}else{
    session_start();
    $_SESSION['mensaje']="Las contraseñas ingresadas no son iguales";
    $_SESSION['icono']="error";?>
    <script>window.history.back()</script><?php
}


