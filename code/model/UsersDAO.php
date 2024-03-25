<?php

class User {
    private $userID;
    private $firstName;
    private $lastName;
    private $login;
    private $password;
    private $registrationDate;

    public function __construct($userID,$firstName, $lastName, $login, $password) {
        $this->userID = $userID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->login = $login;
        $this->password = $password;
        
    }

    public function getUserID() {
        return $this->userID;
    }

    public function setUserID($userID) {
        $this->userID = $userID;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getRegistrationDate() {
        return $this->registrationDate;
    }

    public function addUser(){
        $db = Database::getInstance();
        $connection = $db->getConnection();
        try {
            // Préparation de la requête SQL
            $stmt = $connection->prepare("INSERT INTO users (userID, firstName, lastName, login, password) VALUES (?, ?, ?, ?, ?)");
        
            // Exécution de la requête avec des données
            $stmt->execute([$this->userID, $this->firstName, $this->lastName, $this->login, $this->password]);
        
            // Vérification si l'insertion a réussi
            if ($stmt->rowCount() > 0) {
                echo "L'utilisateur a été inséré avec succès.";
            } else {
                echo "L'insertion a échoué.";
            }
        } catch (PDOException $e) {
            // Gestion des erreurs
            echo "Erreur lors de l'insertion de l'utilisateur : " . $e->getMessage();
        }
    }
    
}

?>
