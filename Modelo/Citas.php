<?php
class Citas{
	private $Numero;
	private $Fecha;
	private $Hora;
	private $Paciente;
	private $Medico;
	private $Consultorio;
	private $Estado;
	private $Observaciones;

	public function __construct($num, $fec, $hor, $pac, $med, $con, $est, $obs) {
		$this->Numero = $num;
		$this->Fecha = $fec;
		$this->Hora = $hor;
		$this->Paciente = $pac;
		$this->Medico = $med;
		$this->Consultorio = $con;
		$this->Estado = $est;
		$this->Observaciones = $obs;
	}
	public function obtenerNumero(){
		return $this->Numero;
	}
	public function obtenerFecha(){
		return $this->Fecha;
	}
	public function obtenerHora(){
		return $this->Hora;
	}
	public function obtenerpaciente(){
		return $this->Paciente;
	}
	public function obtenerMedico(){
		return $this->Medico;
	}
	public function obtenerConsultorio(){
		return $this->Consultorio;
	}
	public function obtenerEstado(){
		return $this->Estado;
	}
	public function obtenerObservaciones(){
		return $this->Observaciones;
	}
}

?>