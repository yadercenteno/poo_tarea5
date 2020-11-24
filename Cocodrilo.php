<?php 
// Definimos una clase específica para los Cocodrilos que extiende de la clase 
// padre Reptiles
class Cocodrilo extends Reptiles {
	private $peso;
	private $largo;
	private $habitat;

	// Función para construir el Cocodrilo
	public function __construct($nombre) {
		parent::__construct($nombre);		
	}

	// Con esta función se puede definir el peso en Libras del Cocodrilo
	public function setPeso($cant) {
		$this->peso = $cant;
	}

	// Con esta función se puede definir el largo en Metros del Cocodrilo
	public function setLargo($cant) {
		$this->largo = $cant;
	}

	// Con esta función se puede definir el nombre de su hábitat
	public function setHabitat($nombre) {
		$this->habitat = $nombre;
	}

	// Devuelve la información del Cocodrilo
	public function getInformacion() {
		echo "El cocodrilo ".$this->getNombre()." tiene un peso de ".$this->peso." y un largo de ".$this->largo." y vive en ".$this->habitat.".<br><br>";  		
	}
}
?>