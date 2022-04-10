<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <!--link css-->
    <link rel="stylesheet" href="CSS/styles.css"/>
</head>
<body>
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
    ?>
    <main class="admin-add">
        <form method="post" action="PHP\add_item.php">
            <h2>Add An Item</h2>

            <label id="" for="">ID:</label>
            <input
                class="input-add-item"
                type="text"
                name="ID"
                maxlength="25"
                placeholder="Inserted Automatically"
                readonly
            />

            <label id="" for="">Product Name:</label>
            <input
                class="input-add-item"
                type="text"
                name="name"
                maxlength="25"
                placeholder="Add A Product Name:"
            />

            <label id="" for="">Picture URL:</label>
            <input
                class="input-add-item"
                type="text"
                name="picture"
                maxlength="25"
                placeholder="Insert A Picture URL:"
            />

            <label id="" for="">Prijs:</label>
            <input
                class="input-add-item"
                type="text"
                name="prijs"
                maxlength="6"
                placeholder="Add A Price:"
            />

            <label id="" for="">Voorraad:</label>
            <input
                class="input-add-item"
                type="text"
                name="voorraad"
                maxlength="5"
                placeholder="Quantity In Stock:"
            />

            <label id="" for="">Categorie:</label>
            <input
                class="input-add-item"
                type="text"
                name="categorie"
                maxlength="25"
                placeholder="Add A Categorie:"
            />
            <input id="click-additem" type="submit" value="submit" />
            </form>

    </main>
</body>
</html>