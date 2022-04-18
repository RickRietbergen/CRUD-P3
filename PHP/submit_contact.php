<?php

//connect to database
require_once("../includes/connect.php");
/**
* @var PDO $connect
*/

$sql = 'INSERT INTO contact (ID, name, email, message)
VALUES (:ID, :name, :email, :message)';

$stmt = $connect->prepare($sql);
// $stmt->bindParam(":ID", $_POST["ID"]);
$stmt->bindParam(":name", $_POST["name"]);
$stmt->bindParam(":email", $_POST["email"]);
$stmt->bindParam(":message", $_POST["message"]);
$stmt->execute();
$result = $stmt->fetchAll();

//echo
echo json_encode($result); 

exit;

?>