<?php 

require_once '../model/DB.php';
require_once '../model/UserDAO.php';
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
    $verifPassword = _POST['verifPassword'];

    if ($passwordSignup != $verifPassword) {
        $error = 0;
    }
    else if (!checkPassword($passwordSignup)) {
        $error = 1;
    }
    else {
        $user = new User($prenom, $nom, $usernameSignup, $passwordSignup);
        $user->addUser($user);
        setcookie('username', $usernameSignup, time() + 365*24*3600, null, null, false, true);
    }
}

register();
header('Location: ../public/index.php');

?>