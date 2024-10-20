<?php
require_once '../Model/TravelOffer.php';
require_once '../Controller/TravelOfferController.php';
 
// Récupérer les données du formulaire
$titre = $_POST['titre'];
$destination = $_POST['destination'];
$date_depart = $_POST['date_depart'];
$date_retour = $_POST['date_retour'];
$prix = $_POST['prix'];
$disponible = isset($_POST['disponible']) ? true : false;
$categorie = $_POST['categorie'];

// Créer un objet offre1 en passant les paramètres récupérés au constructeur
$offre1 = new TravelOffer($titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie);

// Afficher les informations de l'objet avec var_dump()
echo "<h2>Information with var_dump:</h2>";
var_dump($offre1);

// Utiliser la méthode showTravelOffer() pour afficher les informations de l'offre

?>
