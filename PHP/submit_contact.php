<?php

//connect to database
require_once("../includes/connect.php");
/**
* @var PDO $connect
*/

$sql = 'INSERT INTO contact (name, email, message)
VALUES (:name, :email, :message)';

$stmt = $connect->prepare($sql);
$stmt->bindParam(":name", $_POST["name"]);
$stmt->bindParam(":email", $_POST["email"]);
$stmt->bindParam(":message", $_POST["message"]);
$stmt->execute();
$result = $stmt->fetchAll();

//echo
echo json_encode($result); 

exit;

?>