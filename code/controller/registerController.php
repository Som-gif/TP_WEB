<?php 

require_once '../model/DB.php';
require_once '../model/UsersDAO.php';
session_start();

function checkPassword($password) {
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $symbol = preg_match('@[^\w]@', $password);
    
    if(!$uppercase || !$lowercase || !$number || strlen($password) < 8 || !$symbol) {
        echo "Mot de passe non conforme";
        return false;
    }
    return true;

}

function register() {
    $db = Database::getInstance();
    $connection = $db->getConnection();

    $error = -1;
    
    $usernameSignup = $_POST['usernameSignup'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $passwordSignup = $_POST['passwordSignup'];
    $verifPassword = $_POST['verifPassword'];

    if ($passwordSignup != $verifPassword) {
        $error = 0;
    }
    else if (!checkPassword($passwordSignup)) {
        $error = 1;
        
    }
    else {
        $user = new User(null, $prenom, $nom, $usernameSignup, $passwordSignup);
        
        if ($user->addUser()) {
            $error = 2;

        }
        else {
            $SESSION['username'] = $usernameSignup;
            header('Location: ../public/index.php');
        }
    }
}

register();

?>