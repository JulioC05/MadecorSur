<?php

	$txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
    $txtApellido = (isset($_POST['txtApellido']))?$_POST['txtApellido']:"";
    $txtRUC = (isset($_POST['txtRUC']))?$_POST['txtRUC']:"";
    $txtCorreo = (isset($_POST['txtCorreo']))?$_POST['txtCorreo']:"";
    $txtDireccion = (isset($_POST['txtDireccion']))?$_POST['txtDireccion']:"";
	$txtTelefono = (isset($_POST['txtTelefono']))?$_POST['txtTelefono']:"";
	

    $edit_txtNombre = (isset($_POST['edit_txtNombre']))?$_POST['edit_txtNombre']:"";
    $edit_txtApellido = (isset($_POST['edit_txtApellido']))?$_POST['edit_txtApellido']:"";
    $edit_txtDireccion = (isset($_POST['edit_txtDireccion']))?$_POST['edit_txtDireccion']:"";
    $edit_txtCorreo = (isset($_POST['edit_txtCorreo']))?$_POST['edit_txtCorreo']:"";
	$edit_txtRUC = (isset($_POST['edit_txtRUC']))?$_POST['edit_txtRUC']:"";
	$edit_txtTelefono = (isset($_POST['edit_txtTelefono']))?$_POST['edit_txtTelefono']:"";
	

	$accion = (isset($_POST['accion']))?$_POST['accion']:"";
	$error =array();	

	$mostrarModalAdd = false;
	$mostrarModalEditar = false;

	include_once "../../config/conexion.php";

	switch ($accion) {
		case 'btnAgregar':

				if($txtNombre == ""){
					$error['nombre']="Escribe el nombre";
				}
				if($txtDireccion == ""){
					$error['direccion']="Escribe la direccion";
				}
				if($txtRUC == ""){
					$error['ruc']="Escribe el RUC";
				}
				if($txtTelefono == ""){
					$error['telefono']="Escribe el telefono";
				}
				if(count($error)>0){
					$mostrarModalAdd=true;
					break;
				}
				   //if($txtNombre=="" || (!preg_match("/^[a-zA-Zñáéíóú ]*$/",$txtNombre))){
//
       				//    $error['Nombre']="Escribe el nombre";
       				//}
       				//if(!filter_var($txtCorreo, FILTER_VALIDATE_EMAIL)){
//
       				//    $error['Correo']="Escribe el correo";
       				//}

				$query = $pdo->prepare("INSERT INTO cliente(Nombre,Apellido,Correo,RUC,Direccion,Telefono,Estado)
						  VALUES ('$txtNombre','$txtApellido','$txtCorreo',$txtRUC,'$txtDireccion',$txtTelefono,1)");

				
                
				$query->execute();

				//header("Location: ../views/cliente/cliente.php");
				

			break;

		case 'btnModificar':

				
			
				$query = $pdo->prepare("UPDATE cliente SET
										Nombre = :nombre,
										direccion = :direccion,
										RUC = :RUC,
										telefono = :telefono
						  				WHERE idcliente = :idcliente");

				$query->bindParam(':nombre',$edit_txtNombre);
				$query->bindParam(':direccion',$edit_txtDireccion);
				$query->bindParam(':RUC',$edit_txtRUC);
				$query->bindParam(':telefono',$edit_txtTelefono);				
				$query->bindParam(':idcliente',$txtID);
				$query->execute();
				
				header("Location: ../vista/compras/proveedores.php");
				

			break;
			
		case 'btnEliminar':	
			
				$query = $pdo->prepare("DELETE FROM cliente 
						  				WHERE idcliente = :idcliente");

				$query->bindParam(':idcliente',$txtID);
				$query->execute();

				header("Location: ../vista/compras/proveedores.php");

				

			break;
						
		default:
			# code...
			break;
	}

	$selectsql = $pdo->prepare("SELECT * FROM cliente WHERE 1");
	$selectsql->execute();

	$listaClientes = $selectsql->fetchAll(PDO::FETCH_ASSOC);

	



?>