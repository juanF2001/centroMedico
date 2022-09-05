<?php
class Paciente{
	private $Identificacion;
	private $Nombres;
	private $Apellidos;
	private $FechaNacimiento;
	private $Sexo;

	public function __construct($ide, $nom, $ape, $fNa, $sex){
		$this->Identificacion = $ide;
		$this->Nombres = $nom;
		$this->Apellidos = $ape;
		$this->FechaNacimiento = $fNa;
		$this->Sexo = $sex;
	}

	public function obtenerIdentificacion(){
		return $this->Identificacion;
	}

	public function obtenerNombres(){
		return $this->Nombres;
	}

	public function obtenerApellidos(){
		return $this->Apellidos;
	}

	public function obtenerFechaNacimiento(){
		return $this->FechaNacimiento;
	}

	public function obtenerSexo(){
		return $this->Sexo;
	}

}

?>