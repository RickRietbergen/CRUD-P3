<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //connect to database
    require_once("includes/connect.php");
    /**
    * @var PDO $connect
    */

    //delete item from database
    if(isset($_GET["ID"])) {
        $sql = "DELETE FROM menu 
            WHERE ID =:ID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam("ID", $_GET['ID']);
        $stmt->execute();
    }

    //connect to database
      $sql = "SELECT * FROM menu";
      $stmt = $connect->prepare($sql);
      $stmt-> execute();
      $result = $stmt->fetchALL();
?>
<main>
    <?php
        foreach($result as $res){
            if($res("ID"){
            ?>
                <p>U heeft het product met de ID: <?php echo $res["ID"]?></p>
            <?php
            }
            ?>
        <?php
      }
    ?>
</main>
</body>
</html>