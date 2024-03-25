<?php 
session_start();
require_once "../model/UsersDAO.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"] != '' && $_POST["password"] != ''){
        $userTemp = new User(null, null, null,$_POST["username"],  $_POST["password"]);
        $user = $userTemp.selectUserByLogin($_POST["username"]);
        if(count($user) > 0){

            if($user[0]["Password"] == $_POST["password"]){

            }
        }
        $_SESSION['username'] = $_POST["username"];
        
    }
}
?>