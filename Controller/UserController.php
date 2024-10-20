<?php
require_once '../Config.php';
require_once 'User.php'; 
class UserController {
    // Récupérer tous les utilisateurs
    public function getUser() {
        $conn = config::getConnexion(); // Connexion à la base de données

        $sql = "SELECT * FROM user";

        try {
            $query = $conn->prepare($sql); // Préparation de la requête
            $query->execute(); // Exécution de la requête
            return $query->fetchAll(); // Retourne tous les résultats
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage()); // Gestion des erreurs
        }
    }

    // Ajouter un utilisateur
    public function addUser($user) {
        $conn = config::getConnexion(); // Connexion à la base de données
        $sql = "INSERT INTO user(email, pwd) VALUES (:email, :pwd)";

        try {
            $query = $conn->prepare($sql); // Préparation de la requête
            $query->execute([
                ':email' => $user['email'],
                ':pwd' => $user['pwd']
            ]); // Exécution avec les valeurs du nouvel utilisateur
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage()); // Gestion des erreurs
        }
    }
}
