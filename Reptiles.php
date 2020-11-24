<?php 
// Definimos una clase específica para los Reptiles que extiende de la clase 
// padre Animal
class Reptiles extends Animal {
	private $tienePatas=true;
	private $venenoso=false;

	// Función para construir el Reptil
	public function __construct($nombre) {
		parent::__construct($nombre);		
	}

	// Con esta función se puede definir si el Reptil tiene patas o no
	public function setTienePatas($booleano) {
		if ($booleano) {
			$this->tienePatas = true;	
		}
		else {
			$this->tienePatas = false;	
		}		
	}

	// Con esta función se puede definir si el Reptil es venenoso o no
	public function setVenenoso($booleano) {
		if ($booleano) {
			$this->venenoso = true;	
		}
		else {
			$this->venenoso = false;	
		}		
	}

	// Devuelve si el Reptil tiene patas o no
	public function getTienePatas() {
		return $this->tienePatas;		
	}

	// Devuelve si el Reptil es venenoso o no
	public function getVenenoso() {
		return $this->venenoso;		
	}
}
?>