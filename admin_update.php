<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link css-->
    <link rel="stylesheet" href="CSS/styles.css"/>
    <title>Edit row</title>
</head>
<body>
       <?php
      //include header, connection to database, footer.
      require_once("includes/connect.php");
      /**
      * @var PDO $connect
      */

      //connect to database
      $sql = "SELECT * FROM menu
      WHERE ID =:id";
      $stmt = $connect->prepare($sql);
      $stmt->bindParam(":id", $_GET['ID']);
      $stmt-> execute();
      $result = $stmt->fetchALL();
    ?>

    <main class="admin-update">
        <h2>Edit Row</h2>
        <form action="PHP/updateProduct.php" method="post">
            <label for="">ID:</label>
            <input
                class="edit-product-all"
                id="edit-product-id"
                type="text"
                name="ID"
                maxlength="10"
                placeholder="ID:"
                value="<?php echo $result[0]["ID"]?>"
                readonly
            />

            <label for="">Product Name:</label>
            <input
                class="edit-product-all"
                id="edit-product-name"
                type="text"
                name="fullname"
                maxlength="25"
                placeholder="First Name"
                value="<?php echo $result[0]["product_name"]?>"
                required
                
            />
            <label for="">Picture URL:</label>
            <input
                class="edit-product-all"            
                id="edit-picture-url"
                type="text"
                name="pictureURL"
                maxlength="25"
                placeholder="First Name"
                value="<?php echo $result[0]["picture"]?>"
            />

            <label for="">Prijs:</label>
            <input
                class="edit-product-all"
                id="edit-prijs"
                type="text"
                name="prijs"
                maxlength="25"
                placeholder="First Name"
                value="<?php echo $result[0]["prijs"]?>"
                required
            />
            
            <label for="">Voorraad:</label>
            <input
                class="edit-product-all"
                id="edit-voorraad"
                type="text"
                name="voorraad"
                maxlength="25"
                placeholder="First Name"
                value="<?php echo $result[0]["voorraad"]?>"
                required
            />

            <label for="">Categorie:</label>
            <input
                class="edit-product-all"
                id="edit-categorie"
                type="text"
                name="categorie"
                maxlength="25"
                placeholder="First Name"
                value="<?php echo $result[0]["categorie"]?>"
                required
            />
            <input id="submit" type="submit" class="" value="Submit" name="submit" />

        </form>
    </main>
</body>
</html>