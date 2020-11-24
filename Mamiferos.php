<?php 
// Definimos una clase específica para los Mamíferos que extiende de la clase 
// padre Animal
class Mamiferos extends Animal {
	private $numeroPatas=2;
	private $amamantando=false;

	// Función para construir el Mamífero
	public function __construct($nombre) {
		parent::__construct($nombre);		
	}

	// Con esta función se puede definir la cantidad de patas que tiene
	public function setNumeroPatas($cant) {
		$this->numeroPatas = $cant;
	}

	// Con esta función se puede definir si el Mamífero está amamantando o no
	public function setAmamantando($booleano) {
		if ($booleano) {
			$this->amamantando = true;	
		}
		else {
			$this->amamantando = false;	
		}		
	}

	// Devuelve si el número de patas del Mamífero
	public function getNumeroPatas() {
		return $this->numeroPatas;		
	}

	// Devuelve si el Maḿífero está amamantando o no
	public function getAmamantando() {
		return $this->amamantando;		
	}
}
?>