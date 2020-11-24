<?php 
// Definimos una clase específica para los Conejos que extiende de la clase 
// padre Mamíferos
class Vaca extends Mamiferos {
	private $edad;
	private $peso;
	private $cuernos=false;

	// Función para construir la Vaca
	public function __construct($nombre) {
		parent::__construct($nombre);		
	}

	// Con esta función se puede definir la Edad de la vaca en años
	public function setEdad($edad) {
		$this->edad = $edad;
	}

	// Con esta función se puede definir el peso en libras de la Vaca
	public function setPeso($peso) {
		$this->peso = $peso;
	}

	// Con esta función se puede definir si la Vaca tiene cuernos o no
	public function setCuernos($booleano) {
		if ($booleano) {
			$this->cuernos = true;	
		}
		else {
			$this->cuernos = false;	
		}
	}

	// Devuelve la información del Conejo
	public function getInformacion() {
		if ($this->cuernos) {
			$Cuernos = "tiene cuernos";
		}
		else {
			$Cuernos = "no tiene cuernos";
		}

		echo "La vaca ".$this->getNombre()." ".$Cuernos.", tiene ".$this->edad." años de edad y su peso es de ".$this->peso." libras.<br><br>";  		
	}
}
?>