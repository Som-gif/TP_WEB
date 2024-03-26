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

    if ($usernameSignup == '' || $nom == '' || $prenom == '' || $passwordSignup == '' || $verifPassword == '') {
        header('Location: ../public/index.php?error=3');
    }
    if ($passwordSignup != $verifPassword) {
        header('Location: ../public/index.php?error=0');
    }
    else if (!checkPassword($passwordSignup)) {
        header('Location: ../public/index.php?error=1');
    }
    else {
        $user = new User(null, $prenom, $nom, $usernameSignup, $passwordSignup);
        
        if ($user->addUser()) {
            $_SESSION['username'] = $usernameSignup; 
        }
        else {
            header('Location: ../public/index.php?error=2');
        }
    }
}

register();
header('Location: ../public/index.php');
?>
