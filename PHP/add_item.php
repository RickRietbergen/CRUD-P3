<?php

//connect to database
require_once("../includes/connect.php");
/**
* @var PDO $connect
*/

$sql = 'INSERT INTO contact (name, email, message)
VALUES (:name, :email, :message)';

$stmt = $connect->prepare($sql);
$stmt->bindParam(":ID", $_POST['ID']);
$stmt->bindParam(":product_name", $_POST["name"]);
$stmt->bindParam(":picture", $_POST["picture"]);
$stmt->bindParam(":prijs", $_POST["prijs"]);
$stmt->bindParam(":voorraad", $_POST["voorraad"]);
$stmt->bindParam(":categorie", $_POST["categorie"]);
$result = $stmt->execute();

//echo
echo json_encode($result); 

exit;

?>