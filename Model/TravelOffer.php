<?php
class TravelOffer {
    public $titre;
    public $destination;
    public $date_depart;
    public $date_retour;
    public $prix;
    public $disponible;
    public $categorie;

    // Constructeur qui accepte les paramètres
    public function __construct($titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie) {
        $this->titre = $titre;
        $this->destination = $destination;
        $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->categorie = $categorie;
    }



    // Méthode pour afficher les informations
    public function show() {
        echo "<table border='1'>";
        echo "<tr>
                <th>Title</th>
                <th>Destination</th>
                <th>Departure Date</th>
                <th>Return Date</th>
                <th>Price</th>
                <th>Disponibility</th>
                <th>Category</th>
              </tr>";
        echo "<tr>
                <td>{$this->titre}</td>
                <td>{$this->destination}</td>
                <td>{$this->date_depart}</td>
                <td>{$this->date_retour}</td>
                <td>{$this->prix}</td>
                <td>" . ($this->disponible ? 'Available' : 'Not Available') . "</td>
                <td>{$this->categorie}</td>
              </tr>";
        echo "</table>";
    }
}
?>
