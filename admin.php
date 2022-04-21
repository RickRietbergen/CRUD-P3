<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link css-->
    <link rel="stylesheet" href="CSS/styles.css"/>
    <!--icon website-->
    <link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/snackbarlogo.png">
    <title>Admin Panel</title>
</head>
<body class="admin-body">
    <?php
      //include header, connection to database, footer.
      $page = 'admin';
      include_once("includes/header.php");
      require_once("includes/connect.php");
      include_once("includes/session.php");
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
      <form class="admin-form" action="">
        <input type="search" id="search-input" placeholder="Enter Search Term" aria-label="Enter Search Term">
      </form>
      <button class="button-additem">
        <a href="admin_additem.php">
          Add Item
        </a>
      </button>

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
                    <tr id="table-row">
                        <td><?php echo $res["ID"]?></td>
                        <td><?php echo $res["product_name"]?></td>
                        <td><?php echo $res["picture"]?></td>
                        <td><?php echo $res["prijs"]?></td>
                        <td><?php echo $res["voorraad"]?></td>
                        <td><?php echo $res["categorie"]?></td>
                        <td><a href="admin_update.php?ID=<?php echo $res["ID"] ?>" class="btn-style-admin">Update</a></td>
                        <td class="footer-admin"><a href="admin_delete.php?ID=<?php echo $res["ID"] ?>" class="btn-style-admin">Delete</a></td>
                    </tr>
                <?php
                }
              ?>
        </table>
      <?php
        include_once("includes/footer.php");
      ?>
    </main>
    <script src="JS/search.js"></script>
</body>
</html>