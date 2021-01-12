<?php 

if(isset($_POST["login"])){
    include_once($_SERVER['DOCUMENT_ROOT'].'/Sistema_Pedidos/config/conexion.php');

    $user = ($_POST['user']);
    $password = ($_POST['password']);

    $sql = $pdo->prepare("SELECT * FROM usuario WHERE user=:user AND password=:password AND estado=1");

    $sql->bindParam("user",$user,PDO::PARAM_STR);
    $sql->bindParam("password",$password,PDO::PARAM_STR);
    $sql->execute();

    $datosU=$sql->fetch(PDO::FETCH_ASSOC);

    $numR=$sql->rowCount();

    if($numR>=1){

    session_start();
    $_SESSION['usuario']=$datosU;
    
    
        header("Location: ../views/micuenta/");
    }else{
        header("Location: ../views/login");
    }

    


}

    

?>