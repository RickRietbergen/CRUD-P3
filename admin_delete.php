<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css"/>
    <title>Deleted Item</title>
</head>
<body>
<?php
    //connect to database
    require_once("includes/connect.php");
    /**
    * @var PDO $connect
    */

    //connect to database
      $sql = "SELECT * FROM menu WHERE ID =:ID";
      $stmt = $connect->prepare($sql);
      $stmt->bindParam("ID", $_GET['ID']);
      $stmt-> execute();
      $result = $stmt->fetchALL();

      //delete item from database
    if(isset($_GET["ID"])) {
        $sql = "DELETE FROM menu 
            WHERE ID =:ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam("ID", $_GET['ID']);
        $stmt->execute();
    }
?>
<main class="admin-deleted">
    <?php
    var_dump($result);
        foreach($result as $res){
            if(isset($res["ID"])){
            ?>
                <h2 class="deleted-info">Row succesfully deleted.</h2>
                <br>
                <h2 class="deleted-info">information:</h2>
                <br>
                <h2>ID: <?php echo $res["ID"]?></h2>
                <h2>product Name: <?php echo $res["product_name"]?></h2>
                <h2>Picture URL: <?php echo $res["picture"]?></h2>
                <h2>Prijs: € <?php echo $res["prijs"]?></h2>
                <h2>Voorraad: <?php echo $res["voorraad"]?> stuks</h2>
                <h2>Categorie: <?php echo $res["categorie"]?></h2>
            <?php
            }
            ?>
        <?php
      }
    ?>
</main>
</body>
</html>