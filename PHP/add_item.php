<?php

//connect to database
require_once("../includes/connect.php");
/**
* @var PDO $connect
*/

$sql = 'INSERT INTO menu (product_name, picture, prijs, voorraad, categorie)
VALUES (:product_name, :picture, :prijs, :voorraad, :categorie)';

$stmt = $connect->prepare($sql);
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