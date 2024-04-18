<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
    Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.
    <br>

    $p1 = new Personne("DUPONT", "Michel", "1980-02-19");<br> 
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
</p>

<?php

//* Créer une classe Personne(nom, prénom et date de naissance) 
Class Personne{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;

    public function __construct(string $nom, string $prenom, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this-> _dateNaissance = new DateTime($dateNaissance);
    }

    public function getNom(): string{
        return $this->_nom;
    }

    public function getPrenom(): string {
            return $this->_prenom;
        }

    public function getDateNaissance(): string{
        return $this->_dateNaissance->format('Y-m-d');
    }

    public function setNom(string $nom) {
        $this->_nom = $nom;
    }

    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }

    public function setDateNaissance(DateTime $dateNaissance) {
        $this->_dateNaissance = new DateTime($dateNaissance);
    }

    

    public function calcAge(){   
        return $this->_dateNaissance->diff(new DateTime())->y;
    }
    //* Afficher l'information de 2 personnnes ciblées
    public function getInfos(){
        echo $this-> _nom." ". $this->_prenom." a ". $this->calcAge()." ans<br>";
    }
}


$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
echo $p1->getInfos()."<br>";
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
echo $p2->getInfos()."<br>";