<?php 


include_once($_SERVER['DOCUMENT_ROOT'].'/Sistema_Pedidos/views/layout/Rsesion.php');
if(isset($_POST["perfil"])){
    include_once($_SERVER['DOCUMENT_ROOT'].'/Sistema_Pedidos/config/conexion.php');

    $nombre = ($_POST['nombre']);
    $user = ($_POST['usuario']);
    $password = ($_POST['password']);
    
    $sql = $pdo->prepare("UPDATE usuario SET nombre = :nombre ,user = :user,password =:password WHERE idusuario = $idusuario");

    $sql->bindParam("nombre",$nombre,PDO::PARAM_STR);
    
    $sql->bindParam("user",$user,PDO::PARAM_STR);

    $sql->bindParam("password",$user,PDO::PARAM_STR);
    
    $sql->execute();

    //$datosU=$sql->fetch(PDO::FETCH_ASSOC);

    $numR=$sql->rowCount();

    if($numR>=1){
    
        header("Location: ../../views/login");
        
    }else{
        header("Location: ../micuenta/perfil");
        
    }

    


}

    

?>