<?php 
require_once '../model/DB.php';
require_once '../model/UsersDAO.php';
session_start();




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"] != '' && $_POST["password"] != ''){
        $userTemp = new User(null, null, null,$_POST["username"],  $_POST["password"]);
        $user = $userTemp->selectUserByLogin($_POST["username"]);

        if(count($user) > 0){
            
            if($user[0]["Password"] == $_POST["password"]){

            }
        }
        $_SESSION['username'] = $_POST["username"];
        header('Location: ../public/index.php');
    }
}
?>