<?php
require("BD.php");
$conexion=crearConexionBD();
$filas=getEntradaBD($conexion,"PARTIDO");
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">		

		<title>Club Deportivo Unión Sevilla</title>
		<meta name="description" content="">
		<meta name="author" content="IISSI">

		<meta name="viewport" content="width=device-width; initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/images/favicon.ico">
		
		<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
		<link rel="stylesheet" href="css/tablas.css" type="text/css">
		<script src="js/jquery-2.1.1.min.js"></script>
	</head>

	<body>
		
			<header class="cabecera">
				<?php include_once('cabecera.php');?>
			</header>
		
			<?php include_once('menuHorizontal.php')?>
			<?php include_once('bloqueIzquierda.php')?>
			<div id="tabla">
			<table>
				<tr id="fila1">
					<td>Equipo</td>
					<td>Competición</td>
					<td>Fecha</td>
					<td>Rival</td>
					<td>Emplazamiento</td>
					<td>Categoria</td>
					<td>Lugar</td>
					<td>Tipo Partido</td>
					<td>GF</td>
					<td>GC</td>
					
				</tr>				
			<?php foreach($filas as $fila){?>
			
				<tr>
					<td id="columna1"><?php echo $fila["IDEQUIPO"]?></td>
					<td id="columna1"><?php echo $fila["IDCOMPETICION"]?></td>
					<td><?php echo $fila["FECHA"]?></td>
					<td><?php echo $fila["EQUIPORIVAL"]?></td>
					<td><?php echo $fila["EMPLAZAMIENTO"]?></td>
					<td><?php echo $fila["CATEGORIA"]?></td>
					<td><?php echo $fila["LUGAR"]?></td>
					<td><?php echo $fila["TIPOPARTIDO"]?></td>
					<td id="columna1"><?php echo $fila["GOLESFAVOR"]?></td>
					<td id="columna1"><?php echo $fila["GOLESCONTRA"]?></td>
					
				</tr>	
			
			<?php } ?>	
			
			</table>
			</div>
			<footer>
				<?php include_once ('footer.php');?>
			</footer>
			<?php CerrarConexionBD($conexion); ?>
	</body>
</html>
