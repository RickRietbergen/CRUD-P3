// const queryString = window.location.search;
// const urlParams = new URLSearchParams(queryString);
// const ID = urlParams.get('ID');
const form = document.querySelector("#form");
const js_fullname = document.querySelector("#input__fullname");
const js_email = document.querySelector("#input__email");
const js_message = document.querySelector("#input__discription");

function form_verzonden() {
  /*laat de tekst zien*/
  alert("Formulier verzonden");
}

form.addEventListener("submit", (e) => {
  console.log(" hoi");
  e.preventDefault();

  $.ajax({
    type: "POST",
    url: "PHP/submit_contact.php",
    data: {
      // ID: ID,
      name: js_fullname.value,
      email: js_email.value,
      message: js_message.value,
    },
    cache: false,
    success: form_verzonden,
    error: function (xhr, status, error) {
      console.error(xhr);
    },
  });
});
