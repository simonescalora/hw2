function addProd(event){
    const done = event.currentTarget;

    const prod_id = done.previousElementSibling;
    const prod_name = prod_id.previousElementSibling;
    const prod_price = prod_name.previousElementSibling;

    done.src = "img/carrello.png";

    const prodsrc_id = prod_id.name;
    const prodsrc_name = prod_name.name;
    const prodsrc_price = prod_price.name;

    console.log(prodsrc_id);
    console.log(prodsrc_name);
    console.log(prodsrc_price);

    fetch(BASE_URL + "home/add/" + prodsrc_id + "/" + prodsrc_name + "/" + prodsrc_price).then(onResponse);

}

function onResponse(response){
    return response;
}

const cartdone = document.querySelectorAll(".card-btn");
for (var i = 0; i < cartdone.length; i++) {
        cartdone[i].addEventListener('click', addProd);
}
