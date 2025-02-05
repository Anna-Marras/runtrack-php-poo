<?php

class Operation {
    public $nombre1;
    public $nombre2;

    // Constructeur de la classe
    public function __construct($nombre1 = 10, $nombre2 = 20) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    // Nouvelle méthode addition()
    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        echo "Résultat de l'addition : " . $resultat . "<br>";
    }
}

// Instanciation de la classe Operation avec les valeurs par défaut
$ma_premiere_operation = new Operation();

// Affichage des attributs
echo "nombre1 : " . $ma_premiere_operation->nombre1 . "<br>";
echo "nombre2 : " . $ma_premiere_operation->nombre2 . "<br>";

// Appel de la méthode addition()
$ma_premiere_operation->addition();

?>
