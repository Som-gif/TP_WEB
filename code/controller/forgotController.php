<?php 
require_once '../model/DB.php';
require_once '../model/UsersDAO.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $username = htmlspecialchars($username);
        $username = trim($username);
        $username = stripslashes($username);

        $userTemp = new User(null, null, null,$_POST["username"],  null);
        $user = $userTemp->selectUserByLogin($_POST["username"]);

        if ($user != null) {
            $password = $user->getPassword();
            $to = $user->getLogin();
            $subject = "Password recovery";
            $message = "Your password is: " . $password;
            $headers = "From: tpwebensibs.forgot@gmail.com \r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            error_log("sending email to " . $to);
        }

    }
    else {
        error_log("username not set");
    }

    header('Location: ../public/index.php');

}

?>