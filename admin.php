<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link css-->
    <link rel="stylesheet" href="CSS/styles.css"/>
    <title>Admin Panel</title>
</head>
<body class="admin-body">
    <?php
      //include header, connection to database, footer.
      $page = 'admin';
      include_once("includes/header.php");
      require_once("includes/connect.php");
      /**
      * @var PDO $connect
      */

      //connect to database
      $sql = "SELECT * FROM menu";
      $stmt = $connect->prepare($sql);
      $stmt-> execute();
      $result = $stmt->fetchALL();
    ?>
    <main class="admin-main">

        <h2>Admin Panel Big Snack</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Product_name</th>
                <th>Picture</th>
                <th>Prijs</th>
                <th>Voorraad</th>
                <th>Categorie</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
              <?php
                foreach($result as $res){
                    ?>
                    <tr>
                        <td><?php echo $res["ID"]?></td>
                        <td><?php echo $res["product_name"]?></td>
                        <td><?php echo $res["picture"]?></td>
                        <td><?php echo $res["prijs"]?></td>
                        <td><?php echo $res["voorraad"]?></td>
                        <td><?php echo $res["categorie"]?></td>
                        <td><a href="" class="btn btn-admin">Edit</a></td>
                        <td><a href="admin_delete.php?ID=<?php echo $res["ID"] ?>" class="btn btn-admin">Delete</a></td>
                    </tr>
                <?php
                }
              ?>
        </table>
    </main>
</body>
</html>