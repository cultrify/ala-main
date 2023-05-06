<?php 
    include_once dirname(__FILE__). '/../../../Model/Client.php';
    include_once dirname(__FILE__). '/../../../Controller/ClientC.php';

    if (isset($_GET['confirmationCode'])) {
        $clientC = new ClientC();

        $clientC->confirmAccount($_GET['confirmationCode']);

        echo 'your account is confirmed, please login!';
        header("location: login.php");
        exit();
    } else {
        echo 'error';
    }

?>