const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const ID = urlParams.get('ID')


$(document).ready(function () {
  $("#submit").click(function () {
    var productName = $("#edit-product-name").val();
    var pictureURL = $("#edit-picture-url").val();
    var prijs = $("#edit-prijs").val();
    var voorraad = $("#edit-voorraad").val();
    var categorie = $("#edit-categorie").val();

    if (
      productName == "" ||
      pictureURL == "" ||
      prijs == "" ||
      voorraad == "" ||
      categorie == ""
    ) {
      alert("Please fill all fields.");
      return false;
    }

    $.ajax({
      type: "POST",
      url: "../PHP/edit_db.php",
      data: {
        //edit_db.php , var opgeslagen hierboven.
        ID: ID,
        product_name: productName,
        picture: pictureURL,
        prijs: prijs,
        voorraad: voorraad,
        categorie: categorie,
      },
      cache: false,
      success: function (data) {
        alert(data);
      },
      error: function (xhr, status, error) {
        console.error(xhr);
      },
    });
  });
});
