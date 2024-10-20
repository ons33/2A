<?php
require_once('../Model/TravelOffer.php');

// Création d'une instance de l'offre avec le constructeur
$offre1 = new TravelOffer(1, "Discover Paris", "Paris, France", "2024-10-15", "2024-10-22", 1200, true, "Cultural");

// Afficher les informations de l'offre
$offre1->show();
?>
