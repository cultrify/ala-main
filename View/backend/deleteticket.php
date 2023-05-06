<?php
include 'C:/xampp/htdocs/zeineb-main/Controller/TicketC.php';
$ticketc = new TicketC();
$ticketc->deleteTicket($_GET["IDTicket"]);
header('Location:index.php');
?>