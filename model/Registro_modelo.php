<?php 

if(isset($_POST["registro"])){
    include_once($_SERVER['DOCUMENT_ROOT'].'/Sistema_Pedidos/config/conexion.php');

    $nombre = ($_POST['nombre']);
    $user = ($_POST['usuario']);
    $password = ($_POST['password']);
    $correo = ($_POST['correo']);
    $mensaje= "";
    

    $sql = $pdo->prepare("INSERT INTO usuario(nombre,apellido,correo,user,password,rango,estado)
                        VALUES (:nombre,:apellido,:correo,:user,:password,3,1)");

    $sql->bindParam("nombre",$nombre,PDO::PARAM_STR);
    $sql->bindParam("apellido",$nombre,PDO::PARAM_STR);
    $sql->bindParam("correo",$correo,PDO::PARAM_STR);
    $sql->bindParam("user",$user,PDO::PARAM_STR);
    $sql->bindParam("password",$password,PDO::PARAM_STR);
    $sql->execute();

    //$datosU=$sql->fetch(PDO::FETCH_ASSOC);

    $numR=$sql->rowCount();

    if($numR>=1){
    
        header("Location: ../micuenta/");
        $mensaje .="usuario creado correctamente";
    }else{
        header("Location: ../micuenta/");
        $mensaje .="error al crear usuario";
    }

    


}

    

?>