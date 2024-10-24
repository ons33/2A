<?php
// Inclure la classe UserController
require_once '../Controller/UserController.php';  // Assurez-vous que le chemin est correct pour inclure votre fichier

// Créer une instance de UserController
$userController = new UserController();

// Créer un nouvel utilisateur avec ses valeurs
$newUser = [
    'email' => 'Adem@example.com',   // Email de l'utilisateur
    'pwd' => 'adem123'           // Mot de passe de l'utilisateur
];

// Appeler la fonction pour ajouter l'utilisateur
//$userController->addUser($newUser);

// Afficher un message pour confirmer l'ajout
//echo "Utilisateur ajouté avec succès.";
?>
