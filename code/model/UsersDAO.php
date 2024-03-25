<?php

class User {
    private $userID;
    private $firstName;
    private $lastName;
    private $login;
    private $password;
    private $registrationDate;

    public function __construct($userid, $firstName, $lastName, $login, $password) {
        $this->userID = $userid;
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
            $stmt = $connection->prepare("INSERT INTO User (firstName, lastName, login, password) VALUES (?, ?, ?, ?)");
            $stmt->bindParam(1, $this->firstName);
            $stmt->bindParam(2, $this->lastName);
            $stmt->bindParam(3, $this->login);
            $stmt->bindParam(4, $this->password);
            // Exécution de la requête avec des données
            $res = $stmt->execute();
        
            // Vérification si l'insertion a réussi
            if ($res) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            // Gestion des erreurs
            echo "Erreur lors de l'insertion de l'utilisateur : " . $e->getMessage();
        }
    }
    
}

?>
