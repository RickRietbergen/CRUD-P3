const table_product = document.querySelectorAll("#table-row");
const search_product = document.querySelector("#search-input");

search_product.addEventListener("input", () => {
    table_product.forEach(element => {
        //als de zoekbalk leeg is.
        if(search_product.value == "") {
            //laat de zoekbalk staan, voert niks uit.
            element.style.display = "";
        }else {
            //anders, kijk of de children[1](product_name). include de value van wat je opzoekt.
            if(element.children[1].innerHTML.includes(search_product.value)){
                //als hij overeen komt, dan laat hij hem zien.
                element.style.display = "";
            }else {
                //als hij niet overeen komt, dan laat hij de andere producten niet zien.
                element.style.display = "none";
            }
        }
    });
})

// console.log(table_product);
// console.log(element);