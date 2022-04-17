const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const ID = urlParams.get('ID');

const submit = document.querySelector("#click__submit");
const fullname = document.querySelector("#input__fullname");
const email = document.querySelector("#input__email");
const discription = document.querySelector("#input__discription");
const success = decodeURIComponent.querySelector("#success__text");

/*laat de tekst niet zien*/
success.style.display = "none";

function success_verzonden() {
    /*laat de tekst zien*/
    success.style.dispay = "";
}

submit.addEventListener("click", (e) => {
    e.preventDefault();


}

    $.ajax({
        type: "POST",
        url: "index.php",
        data: {
            name: fullname
            // ID: ID,
            // product_name: productName,
            // picture: pictureURL,
            // prijs: prijs,
            // voorraad: voorraad,
            // categorie: categorie,
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