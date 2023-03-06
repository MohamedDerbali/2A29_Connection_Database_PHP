<?php
class userC{
    public function addUser($user, $pdo){
        try {
            $query = $pdo->prepare('INSERT INTO user (nom, prenom, age) VALUES (:nom, :prenom, :age)');
            $query->bindValue('nom', $user->getNom());
            $query->bindValue('prenom', $user->getPrenom());
            $query->bindValue('age', $user->getAge());
            $query->execute();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function displayUsers(){}
    public function deleteUser(){}
    public function updateUser(){}
}



?>