<?php
    require_once("../includes/connect.php");
    /**
     * @var PDO $connect
    */

    // edit 
    $sql = "UPDATE menu
            SET product_name=:product_name,picture=:picture,prijs=:prijs,voorraad =:voorraad,categorie=:categorie
            WHERE ID = :ID1";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID1", $_GET['ID']);
    $stmt->bindParam(":product_name", $_POST['product_name']);
    $stmt->bindParam(":picture", $_POST['picture']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":voorraad", $_POST['voorraad']);
    $stmt->bindParam(":categorie", $_POST['categorie']);
    $result = $stmt->execute();

//echo
echo json_encode($result); 

exit;

?>