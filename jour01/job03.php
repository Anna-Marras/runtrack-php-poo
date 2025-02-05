<?php

class Personne {
    private $nom;
    private $prenom;

    // Constructeur
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Méthode
    public function SePresenter() {
        return "Je m'appelle " . $this->prenom . " " . $this->nom;
    }
}

// Instanciation
$personne1 = new Personne("Dupont", "Jean");
$personne2 = new Personne("Martin", "Sophie");
$personne3 = new Personne("Durand", "Pierre");

// Appel
echo $personne1->SePresenter() . "<br>";
echo $personne2->SePresenter() . "<br>";
echo $personne3->SePresenter() . "<br>";

?>

