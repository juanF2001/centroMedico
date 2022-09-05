<?php
class Controlador {
  public function verPagina($ruta){
  require_once $ruta;
  }

public function agregarCita($doc,$med,$fec,$hor,$con){
  $cita = new Citas(null, $fec, $hor, $doc, $med, $con, "Solicitada","Ninguna");
  $gestorCita = new GestorCita();
  $id = $gestorCita->agregarCita($cita);
  $result = $gestorCita->consultarCitaPorId($id); 
  require_once 'Vista/html/confirmarCita.php';
}

public function consultarCitas($doc){
  $gestorCita = new GestorCita();
  $result = $gestorCita->consultarCitasPorDocumento($doc);
  require_once 'Vista/html/consultarCitas.php';
}

public function cancelarCitas($doc){
  $gestorCita = new GestorCita();
  $result = $gestorCita->consultarCitasPorDocumento($doc);
  require_once 'Vista/html/cancelarCitas.php';
}

public function consultarPaciente($doc){
  $gestorCita = new GestorCita();
  $result = $gestorCita->consultarPaciente($doc);
  require_once 'Vista/html/consultarPaciente.php';
}

public function agregarPaciente($doc, $nom, $ape, $fec, $sex){
  $paciente = new Paciente($doc, $nom, $ape, $fec,$sex);
  $gestorCita =  new GestorCita();
  $registros = $gestorCita->agregarPaciente($paciente);
  if($registros > 0){
    echo "Se Inserto el Paciente con Exito";
  }else {
    echo "Error al Grabar el Paciente";
  }
}

public function cargarAsignar(){
 $gestorCita = new GestorCita();
 $result = $gestorCita->consultarMedicos();
 $result2 = $gestorCita->consultarConsultorios();
 require_once 'Vista/Asignar.php';
}

public function consultarHorasDisponibles($medico, $fecha){
 $gestorCita = new GestorCita();
 $result = $gestorCita->consultarHorasDisponibles($medico, $fecha);
 require_once 'Vista/html/consultarHoras.php';
}

public function verCita($cita){
  $gestorCita = new GestorCita();
  $result = $gestorCita->consultarCitaPorId($cita);
  require_once 'Vista/html/confirmarCita.php';
}

public function confirmarCancelarCita($cita){
  $gestorCita = new GestorCita();
  $registros = $gestorCita->cancelarCita($cita);
  if($registros > 0){
    echo "La cita se ha cancelado con exito";
  } else {
    echo "Hubo un error al cancelar le cita";    
  }
}

}
?>