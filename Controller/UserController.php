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
            $query = $conn->prepare($sql); // Préparation de la requête(optional)
            $query->execute([
                ':email' => $user['email'],
                ':pwd' => $user['pwd']
            ]); // Exécution avec les valeurs du nouvel utilisateur
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage()); // Gestion des erreurs
        }
    }

    // Mettre à jour un utilisateur
public function updateUser($id,$user){
    $conn = config::getConnexion();
    $sql="UPDATE user SET email=:email ,pwd=:pwd   WHERE id = :id";
    try{
        $query=$conn->prepare($sql);
        $query->execute([
            ':id'=>$id,
            ':email'=>$user['email'],
            ':pwd'=>$user['pwd']
        ]);
    }
    catch (Exception $e) {
        die('Erreur: ' . $e->getMessage()); // Gestion des erreurs
    }
}
    

    // Supprimer un utilisateur
   public function deleteUser($id){
        $conn = config::getConnexion();
        $sql="DELETE FROM user WHERE id = :id";
        try{
            $query=$conn->prepare($sql);
            $query->execute([':id'=>$id]);
        }
        catch (Exception $e) {
            die('Erreur: ' . $e->getMessage()); // Gestion des erreurs
        }
   }


public function getUserById($id){
    $conn = config::getConnexion();
    $sql="select * from User where id=:id ";
    try{
       $query=$conn->prepare($sql);
         $query->execute( [':id'=>$id]);
        return $query->fetch();


        } 
catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
}
}




















}
