<!Doctype>

<html lang="es" lang="es">
<head>
	<title>SISTEMA DE GESTION ODONTOLOGICA</title>
	<link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>
	<script type="text/javascript" src="Vista/jquery/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="Vista/jquery/jquery-ui-1.13.2/jquery-ui.js"></script>
    <script type="text/javascript" src="Vista/js/script.js"></script>
</head>
<body>
	<div id="contenedor">
		<div id="encabezado">
			<h1>SISTEMA DE GESTION ODONTOLOGICA</h1>
		</div>
		<ul id="menu">
			<li class="activa"><a href="index.php">Inicio</a></li>
			<li class="activa"><a href="index.php?accion=asignar">Asignar Cita</a></li>
			<li class="activa"><a href="index.php?accion=consultar">Consultar Citas</a></li>
			<li class="activa"><a href="#">Cancelar Cita</a></li>
		</ul>
<div id="contenido">
	<h2>Cancelar Cita</h2>
	<form action="index.php?accion=cancelarCita" method="post" id="frmcancelar">
		<table>
			<tr>
				<td>Documento del paciente</td>
				<td><input type="text" name="cancelarDocumento" id="cancelarDocumento"/></td>
			</tr>
			<tr>
				<td colspan="2">
					<input id="cancelarConsultar" type="button" value="Consultar" onclick="cancelarCita()"/>
				</td>
			</tr>
			<tr><td colspan="2"><div id="paciente3"></div></td></tr>
		</table>
    </form>
</div>
</div>
</body>
</html>