<?php

class User {
    private $userID;
    private $firstName;
    private $lastName;
    private $login;
    private $password;
    private $registrationDate;

    public function __construct($userid, $firstName, $lastName, $login, $password, $email) {
        $this->userID = $userid;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        
    }

    public function setUser($userid, $firstName, $lastName, $login, $password, $email) {
        $this->userID = $userid;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
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

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getRegistrationDate() {
        return $this->registrationDate;
    }

    public function addUser(){
        $db = Database::getInstance();
        $connection = $db->getConnection();
        try {
            $stmt = $connection->prepare("INSERT INTO User (firstName, lastName, login, password, email) VALUES (?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $this->firstName);
            $stmt->bindParam(2, $this->lastName);
            $stmt->bindParam(3, $this->login);
            $stmt->bindParam(4, password_hash($this->password, PASSWORD_BCRYPT));
            $stmt->bindParam(5, $this->email);
            $res = $stmt->execute();
            if ($res) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erreur lors de l'insertion de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }
    
    public function genNewPassword() {
        $newPassword = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,10);
        $this->password = password_hash($newPassword, PASSWORD_BCRYPT);
        //$this->updateUser();
        return $newPassword;
    }

    public function selectUser($userID){
        $db = Database::getInstance();
        $connection = $db->getConnection();
        try{
            $stmt = $connection->prepare("SELECT * FROM User WHERE userID = :userID");
            $stmt->bindValue(':userID', $userID, SQLITE3_INTEGER);
            
            // Exécution de la requête
            $result = $stmt->execute();
            
            $user = $result->fetchArray(SQLITE3_ASSOC);
            return $user;
        } catch (PDOException $e) {
            // Gestion des erreurs
            echo "Erreur lors de l'insertion de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }

    public function selectUserByLogin($login){
        $db = Database::getInstance();
        $connection = $db->getConnection();
        try{
            $stmt = $connection->prepare("SELECT * FROM User WHERE Login = :Login");
            $stmt->bindValue(':Login', $login, SQLITE3_TEXT);
            
            // Exécution de la requête
            $result = $stmt->execute();
            
            $user = $result->fetchArray(SQLITE3_ASSOC);
            return $user;


            return $user;
        } catch (PDOException $e) {
            // Gestion des erreurs
            echo "Erreur lors de l'insertion de l'utilisateur : " . $e->getMessage();
            return false;
        }
    }

    public function updateUser() {
        // Préparation de la requête SQL pour mettre à jour un utilisateur
        $stmt = $this->connection->prepare("UPDATE User SET email = :email, firstName = :firstName, lastName = :lastName, login = :login, password = :password WHERE userID = :userID");
        $stmt->bindValue(':userID', $this->userID, SQLITE3_INTEGER);
        $stmt->bindValue(':firstName', $this->firstName, SQLITE3_TEXT);
        $stmt->bindValue(':lastName', $this->lastName, SQLITE3_TEXT);
        $stmt->bindValue(':login', $this->login, SQLITE3_TEXT);
        $stmt->bindValue(':password', password_hash($this->password, PASSWORD_BCRYPT), SQLITE3_TEXT);
        $stmt->bindValue(':email', $this->email, SQLITE3_TEXT);
        
        // Exécution de la requête
        $stmt->execute();
    }

    public function updatePassword($password) {
        $db = Database::getInstance();
        $connection = $db->getConnection();
        try {
            $stmt = $connection->prepare("UPDATE User SET password = :password WHERE login = :login");
            $stmt->bindParam(':password', password_hash($password, PASSWORD_BCRYPT));
            $stmt->bindParam(':login', $this->login);
            $res = $stmt->execute();
            if ($res) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour du mot de passe : " . $e->getMessage();
            return false;
        }
    }

}

?>
