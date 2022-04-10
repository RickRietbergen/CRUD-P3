<?php
    require_once("../includes/connect.php");
    /**
     * @var PDO $connect
    */

    // edit 
    if(ISSET($_POST['submit'])) {
        //als je op 'submit' drukt dan word alles aangepast in de database
        $sql = "UPDATE menu
            SET product_name = :product_name, picture = :picture, prijs = :prijs, voorraad = :voorraad, categorie = :categorie
            WHERE ID = :ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":ID", $_POST['ID']);
        $stmt->bindParam(":product_name", $_POST['fullname']);
        $stmt->bindParam(":picture", $_POST['pictureURL']);
        $stmt->bindParam(":prijs", $_POST['prijs']);
        $stmt->bindParam(":voorraad", $_POST['voorraad']);
        $stmt->bindParam(":categorie", $_POST['categorie']);
        $result = $stmt->execute();
        header('Location: ../admin.php');
        exit();
    } else {
        //als je niks hebt ingevoerd word je doorverstuurd naar admin.php
        header('Location: ../admin.php');
        exit();
    }
?>