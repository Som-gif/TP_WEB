<?php 
require_once '../model/DB.php';
require_once '../model/UsersDAO.php';
session_start();




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"] != '' && $_POST["password"] != ''){
        $userTemp = new User(null, null, null,$_POST["username"],  $_POST["password"], null);
        $user = $userTemp->selectUserByLogin($_POST["username"]);

        if(gettype($user) == "array" && count($user) > 0){
            if(password_verify($_POST["password"], $user['Password'])){
                $_SESSION['username'] = $_POST["username"];
                header('Location: ../public/index.php');       
            }
            else {
                header('Location: ../public/index.php?error=3');
            }
        }
        else {
            header('Location: ../public/index.php?error=3');
        }   
    }
    else {
        header('Location: ../public/index.php?error=3');
    }
}else{
    header('Location: ../public/index.php?error=3');
}
?>