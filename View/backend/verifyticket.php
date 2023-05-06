<?php
//include 'C:/xampp/htdocs/web/Controller/TicketC.php';
include_once dirname(__FILE__). '/../../Controller/TicketC.php';

// Get the ID from the QR scanner
$hashed_qr_id = $_GET['id'];
$id="";
// Query the Ticket table
$sql = "SELECT IDTicket FROM Ticket";
$conn = config::getConnexion();
$result = $conn->query($sql);

// Check if there is a matching ID in the Ticket table
$match_found = false;
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
  if (password_verify($row["IDTicket"],$hashed_qr_id)) {
    // The ID from the QR code matches the ID in the database, do something here
    $match_found = true;
    $id = $row["IDTicket"];
    break;
  }
}

if ($match_found) {
    echo "<script>alert($id)</script>";
    echo "<script>window.location='qrcode.php';</script>";
}
else
{
    echo "<script>alert('cet ID n'existe pas')</script>";
    echo "<script>window.location='qrcode.php';</script>";
}

$conn = null; // Close the connection

?>
