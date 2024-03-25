<?php 
session_start();
require_once "../model/UsersDAO.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"] != '' && $_POST["password"] != ''){
        $userTest = new User(null, null, null, $_POST["username"],$_POST["password"], null);
        
        $_SESSION['username'] = $_POST["username"];
        
    }
}
?>