<?php

//connect to database
require_once("includes/connect.php");

$sql = 'INSERT INTO contact (name, email, message)
VALUES (:name, :email, :message)';

$stmt = $connect->prepare($sql);
$stmt->bindParam(":submit_id", $_POST["submit_id"]);
$stmt->bindParam(":name", $_POST["name"]);
$stmt->bindParam(":email", $_POST["email"]);
$stmt->bindParam(":message", $_POST["message"]);
$stmt->execute();
$result = $stmt->fetchALL();

//echo
echo json_encode($result); 

exit;

?>