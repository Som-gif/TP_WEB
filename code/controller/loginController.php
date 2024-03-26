<?php 
require_once '../model/DB.php';
require_once '../model/UsersDAO.php';
session_start();




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"] != '' && $_POST["password"] != ''){
        $userTemp = new User(null, null, null,$_POST["username"],  $_POST["password"]);
        $user = $userTemp->selectUserByLogin($_POST["username"]);

        if(gettype($user) == "array" && count($user) > 0){
            error_log(print_r($user, true));
            error_log(password_hash($_POST["password"], PASSWORD_BCRYPT));
            error_log($user['Password']);
            error_log("TESTTT");

            if($user['Password'] === (password_hash($_POST["password"], PASSWORD_BCRYPT))){
                error_log("OK MEC");
            }
        }
        $_SESSION['username'] = $_POST["username"];
        header('Location: ../public/index.php');
    }
}
?>