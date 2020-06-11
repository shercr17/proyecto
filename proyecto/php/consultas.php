<?php
	include ("conexion.php");

	if(isset($_POST["Enviar"])){
		$nombre = utf8_decode($_POST['¡Nombre']);
		$apellidos = utf8_decode($_POST['¡Apellidos']);
		$correo = utf8_decode($_POST['¡Correo']);
		$numero = utf8_decode($_POST['¡Numero']);
		$mensaje = utf8_decode($_POST['¡Mensaje']);
		$consulta = 'INSERT INTO `ly`.`formulario1` (`Nombre`, `Apellidos`, `Correo`, `Numero`, `Mensajes`) VALUES ("'. $nombre .'", "'.$apellidos.'","'.$correo.'", "'.$numero.'","'.$mensaje.'")';

		$retry_value = mysqli_query($conexion, $consulta);
				if(!$retry_value){
					die('Error: '.mysqli_error($conexion));
				}else{
					header('Location: index.html');
				}
			}



		?>
