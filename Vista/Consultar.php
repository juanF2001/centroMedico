<!Doctype>

<html lang="es" lang="es">
<head>
	<title>SISTEMA DE GESTION ODONTOLOGICA</title>
	<link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>
	<script type="text/javascript" src="Vista/jquery/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="Vista/jquery/jquery-ui-1.13.2/jquery-ui.js"></script>
</head>
</head>
<body>
	<div id="contenedor">
		<div id="encabezado">
			<h1>SISTEMA DE GESTION ODONTOLOGICA</h1>
		</div>
		<ul id="menu">
			<li class="activa"><a href="index.php">Inicio</a></li>
			<li class="activa"><a href="index.php?accion=asignar">Asignar Cita</a></li>
			<li class="activa"><a href="#">Consultar Cita</a></li>
			<li class="activa"><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
		</ul>
<div id="contenido">
    <h2>Consultar Cita</h2>
   <form action="index.php?accion=consultarCitas" method="post" id="frmconsultar">
      <table>
          <tr>
              <td>Documento del Paciente</td>
              <td><input type="text" name="consultarDocumento" id="consultarDocumento"></td>
          </tr>
    <tr>
        <td colspan="2"><input type="submit" name="consultarConsultar" value="Consultar" id="consultarConsultar" onclick="consultarCitas()"></td></tr>
    <tr>
        <td colspan="2"><div id="paciente2"></div></td>
    </tr>
</table>
</form>
</div>