// const queryString = window.location.search;
// const urlParams = new URLSearchParams(queryString);
// const ID = urlParams.get('ID')

// $(document).ready(function () {
//   $("#submit").click(function () {
//     var productName = $("#edit-product-name").val();
//     var pictureURL = $("#edit-picture-url").val();
//     var prijs = $("#edit-prijs").val();
//     var voorraad = $("#edit-voorraad").val();
//     var categorie = $("#edit-categorie").val();

//     if (
//       productName == "" ||
//       pictureURL == "" ||
//       prijs == "" ||
//       voorraad == "" ||
//       categorie == ""
//     ) {
//       alert("Please fill all fields.");
//       return false;
//     }
//     console.log(productName);

//     $.ajax({
//       type: "POST",
//       url: "PHP/edit_db.php",
//       data: {
//         //edit_db.php , var opgeslagen hierboven.
//         ID: ID,
//         product_name: productName,
//         picture: pictureURL,
//         prijs: prijs,
//         voorraad: voorraad,
//         categorie: categorie,
//       },
//       cache: false,
//       success: function (data) {
//         alert(data);
//       },
//       error: function (xhr, status, error) {
//         console.error(xhr);
//       },
//     });
//   });
// });

// add on the bottum of the page
    //  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    //     integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous">
    // </script>
    // <script src="JS/admin_edit.js">
    // </script>