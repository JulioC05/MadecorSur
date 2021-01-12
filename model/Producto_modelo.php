<?php

//fetch_data.php

include('../config/conexion.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM productos WHERE 1
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND precio_venta BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["tipo_madera"]))
	{
		$brand_filter = implode("','", $_POST["tipo_madera"]);
		$query .= "
		 AND tipo_madera IN('".$brand_filter."')
		";
	}
	if(isset($_POST["n_puertas"]))
	{
		$ram_filter = implode("','", $_POST["n_puertas"]);
		$query .= "
		 AND n_puertas IN('".$ram_filter."')
		";
	}
	if(isset($_POST["n_cajones"]))
	{
		$storage_filter = implode("','", $_POST["n_cajones"]);
		$query .= "
		 AND n_cajones IN('".$storage_filter."')
		";
	}

	$statement = $pdo->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			
			<div class="col-sm-4 col-lg-3 col-md-3">
			
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:434px;">
					<img src="http://madecor-sur.tonohost.com/pos/'. $row['imagen'] .'" alt=""  height="250px" width="150px">
					<p align="center"><strong><a href="#">'. $row['descripcion'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >S/ '. $row['precio_venta'] .'</h4>
					
				</div>
			
			</div>
			
			';
		}
	}
	//<p>Camera : '. $row['product_camera'].' MP<br />
	//				Brand : '. $row['product_brand'] .' <br />
	//				RAM : '. $row['product_ram'] .' GB<br />
	//				Storage : '. $row['product_storage'] .' GB </p>
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>