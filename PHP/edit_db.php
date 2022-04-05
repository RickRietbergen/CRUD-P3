<?php
    require_once("includes/connect.php");
    /**
     * @var PDO $connect
    */

    //connect to database
    $sql = "SELECT * FROM menu";
    $stmt = $connect->prepare($sql);
    $stmt-> execute();
    $result = $stmt->fetchALL();

    // edit 
    $sql = "UPDATE menu
            SET ID = :ID, product_name = :product_name, picture = :picture, prijs = :prijs, 
            voorraad = :voorraad, categorie = :categorie
            WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_GET['ID']);
    $stmt->bindParam(":product_name", $_POST['product_name']);
    $stmt->bindParam(":picture", $_POST['picture']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":voorraad", $_POST['voorraad']);
    $stmt->bindParam(":categorie", $_POST['categorie']);
    $stmt->execute();

//echo
echo json_encode($result); 

exit;

?>