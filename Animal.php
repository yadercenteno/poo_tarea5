<?php
// Creo una clase padre de Animal
class Animal {
	private $nombre;
	private $vertebrado=true;
	
	// Función para construir el Animal
	public function __construct($nombre) {
		$this->nombre = $nombre;		
	}

	// Con esta función se puede definir si el animal es Vertebrado o Invertebrado
	public function setInvertebrado($booleano) {
		if ($booleano) {
			$this->vertebrado = false;	
		}
		else {
			$this->vertebrado = true;	
		}		
	}

	// Devuelve el nombre del animal
	public function getNombre() {
		return $this->nombre;		
	}

	// Devuelve si el Animal es Vertebrado o Invertebrado
	public function getVertebradooInvertebrado() {
		return $this->vertebrado;		
	}		
}
?>