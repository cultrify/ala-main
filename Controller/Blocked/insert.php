<?php
include_once("./crud.php");

$json = file_get_contents('php://input');
$dto = json_decode($json);

if (isset($_GET['id'])) {
    if (!empty($_GET['id'])) {
        $result = CrudBlocked::insert($_GET['id']);
   
        if ($result == null) {
            http_response_code(200);
        } else {
            http_response_code(400);
            echo ("you bloked it before ");
        }
    } else {
        http_response_code(400);
        echo ("OPPS, some fields are empty.");
    }
} else {
    http_response_code(400);
    echo ("OPPS, missing some fields.");
}
?>