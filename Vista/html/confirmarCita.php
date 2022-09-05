<!Doctype>
<html lang="es">
<head>
	<title>SISTEMA DE GESTION ODONTOLOGICA</title>
	<link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>
</head>
<body>
	<div id="contenedor">
		<div id="encabezado">
			<h1>SISTEMA DE GESTION ODONTOLOGICA</h1>
		</div>
		<ul id="menu">
			<li class="activa"><a href="index.php">Inicio</a></li>
			<li><a href="index.php?accion=asignar">Asignar Cita</a></li>
			<li><a href="index.php?accion=consultar">Consultar Cita</a></li>
			<li><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
		</ul>
		<div id="contenido">
			<?php $fila = $result->fetch_object();?>
			<h2>Informacion de la Cita</h2>
			<table>
				<tr><th colspan="2">Datos Del Paciente</th></tr>
				<tr>
					<td>Documento</td>
					<td><?php echo $fila->PacIdentificacion; ?></td>
				</tr>
				<tr>
				<tr>
					<td>Nombres</td>
					<td><?php echo $fila->PacNombres ." ". $fila->PacApellidos; ?></td>
				</tr>
				<tr><th colspan="2">Datos del Medico</th></tr>
				<tr>
					<td>Documento</td>
					<td><?php echo $fila->MedIdentificacion; ?></td>
				</tr>
				<tr>
				<tr>
					<td>Nombre</td>
					<td><?php echo $fila->MedNombre ." ". $fila->MedApellidos; ?></td>
				</tr>
				<tr><th colspan="2">Datos de la Cita</th></tr>
				<tr>
					<td>Numero</td>
					<td><?php echo $fila->CitNumero; ?></td>
				</tr>
				<tr>
					<td>Fecha</td>
					<td><?php echo $fila->CitFecha; ?></td>
				</tr>
				<tr>
					<td>Hora</td>
					<td><?php echo $fila->CitHora; ?></td>
				</tr>
				<tr>
					<td>Numero de Consultorio</td>
					<td><?php echo $fila->ConNumero; ?></td>
				</tr>
				<tr>
					<td>Estado</td>
					<td><?php echo $fila->CitEstado; ?></td>
				</tr>
				<tr>
					<td>Observaciones</td>
					<td><?php echo $fila->CitObservaciones; ?></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>