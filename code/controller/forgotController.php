<?php 
require_once '../model/DB.php';
require_once '../model/UsersDAO.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $username = htmlspecialchars($username);
        $username = trim($username);
        $username = stripslashes($username);

        $userTemp = new User(null, null, null,$_POST["username"],  null, null);

        $user = $userTemp->selectUserByLogin($_POST["username"]);
        $userTemp->setFirstName($user->FirstName);
        $userTemp->setLastName($user->LastName);
        $userTemp->setUserID($user->UserID);
        $userTemp->setEmail($user->Email);

        if ($user != null) {
            $password = $userTemp->genNewPassword();
            
            $to = $userTemp->getLogin();
            $mail = new PHPMailer(true);                    
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';             
            $mail->SMTPAuth   = true;                                 
            $mail->Username   = 'hamza.marghich.trash@gmail.com';                     
            $mail->Password   = 'vmyc dkiz jifd ezbr';                   
            $mail->SMTPSecure = 'tls';       
            $mail->Port       = 587;                                  

            $mail->setFrom('hamza.marghich.trash@gmail.com', 'TP_WEB');
            $mail->addAddress('hamza.marghich@gmail.com', 'Hamza'); 


            $mail->isHTML(true);
            $mail->Subject = 'Modification de votre mot de passe';
            $mail->Body    = 'Bonjour '. $userTemp->getFirstName() . ' ' . $userTemp->getLastName() . ',<br><br>Voici votre nouveau mot de passe : <b>'. $password .'</b><br><br>Cordialement.<br>';
            $mail->AltBody = 'Merci!';

            $mail->send();
            echo 'Message has been sent';
            $userTemp->updatePassword($password);
        }

    }
    else {
        error_log("username not set");
    }

    header('Location: ../public/index.php');

}

?>