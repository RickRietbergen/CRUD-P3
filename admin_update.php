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
    <main class="admin-update">
        <h2>Edit Row</h2>
        <form action="">
`            <label for="">Product Name:</label>
            <input
                class="edit-product-all"
                id="edit-product-name"
                type="text"
                name="fullname"
                maxlength="25"
                placeholder="First Name"
            />

            <label for="">Picture URL:</label>
            <input
                class="edit-product-all"            
                id="edit-picture-url"
                type="text"
                name="fullname"
                maxlength="25"
                placeholder="First Name"
            />

            <label for="">Prijs:</label>
            <input
                class="edit-product-all"
                id="edit-prijs"
                type="text"
                name="fullname"
                maxlength="25"
                placeholder="First Name"
            />
            
            <label for="">Voorraad:</label>
            <input
                class="edit-product-all"
                id="edit-voorraad"
                type="text"
                name="fullname"
                maxlength="25"
                placeholder="First Name"
            />

            <label for="">Categorie:</label>
            <input
                class="edit-product-all"
                id="edit-categorie"
                type="text"
                name="fullname"
                maxlength="25"
                placeholder="First Name"
            />
            <input id="submit" type="button" class="" value="Submit" />

        </form>
    </main>
</body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous">
    </script>
    <script src="JS/admin_edit.js">
    </script>
</html>