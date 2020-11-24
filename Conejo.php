<?php 
// Definimos una clase específica para los Conejos que extiende de la clase 
// padre Mamíferos
class Conejo extends Mamiferos {
	private $raza;
	private $sexo;
	private $embarazada=false;

	// Función para construir el Conejo
	public function __construct($nombre) {
		parent::__construct($nombre);		
	}

	// Con esta función se puede definir la Raza del conejo
	public function setRaza($raza) {
		$this->raza = $raza;
	}

	// Con esta función se puede definir el largo en Metros del Cocodrilo
	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	// Con esta función se puede definir si la Coneja está embarazada o no
	public function setEmbarazada($booleano) {
		if ($booleano) {
			$this->embarazada = true;	
		}
		else {
			$this->embarazada = false;	
		}
	}

	// Devuelve la información del Conejo
	public function getInformacion() {
		echo "El conejo ".$this->getNombre()." tiene ".$this->getNumeroPatas()." patas, su sexo es ".$this->sexo." y su raza es ".$this->raza.".<br><br>";  		
	}
}
?>