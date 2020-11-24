<?php 
// Cargo las clases y la interfaz
include("Animal.php");
include("Reptiles.php");
include("Mamiferos.php");
include("Cocodrilo.php");
include("Conejo.php");
include("Vaca.php");

// Creo un cocodrilo
$cocodrilo1 = new Cocodrilo("Lagarto Juancho");
$cocodrilo1->setTienePatas(true);
$cocodrilo1->setPeso(235);
$cocodrilo1->setLargo(4);
$cocodrilo1->setHabitat("Lago Xolotlan");
$cocodrilo1->getInformacion();

// Creo un conejo
$conejo1 = new Conejo("Bony");
$conejo1->setNumeroPatas(4);
$conejo1->setRaza("Chinchilla");
$conejo1->setSexo("Macho");
$conejo1->getInformacion();

// Creo una Vaca
$vaca1 = new Vaca("Lola");
$vaca1->setNumeroPatas(4);
$vaca1->setEdad(4);
$vaca1->setPeso(355);
$vaca1->setCuernos(true);
$vaca1->getInformacion();
?>