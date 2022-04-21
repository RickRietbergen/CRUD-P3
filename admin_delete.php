<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css"/>
    <!--icon website-->
    <link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/snackbarlogo.png">
    <title>Deleted Item</title>
</head>
<body class="delete-body">
<?php
    //connect to database
    $page = 'admin';
    include_once("includes/header.php");
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
    // var_dump($result);
        foreach($result as $res){
            if(isset($res["ID"])){
            ?>  <div class="div-delete">
                    <div class="deleted-info">
                        <h2>Row succesfully deleted!</h2>
                        <h2 class="info-space">information of deleted row:</h2>
                        <h2>ID: <?php echo $res["ID"]?></h2>
                        <h2>product Name: <?php echo $res["product_name"]?></h2>
                        <h2>Picture URL: <?php echo $res["picture"]?></h2>
                        <h2>Prijs: € <?php echo $res["prijs"]?></h2>
                        <h2>Voorraad: <?php echo $res["voorraad"]?> stuks</h2>
                        <h2 class="footer-delete-margin">Categorie: <?php echo $res["categorie"]?></h2>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
      }
    ?>

    <?php
        include_once("includes/footer.php");
    ?>
</main>
</body>
</html>