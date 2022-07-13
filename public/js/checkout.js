function Checkout(){
    
    alert("Ordine effettuato con successo!");

    fetch(BASE_URL + "checkout/report").then(onResponse);

    location.reload();

}
  

const checkout = document.querySelector('#btn-checkout');
checkout.addEventListener('click', Checkout);

function onResponse(response){
    return response;
}

function delProd(event){

    const done = event.currentTarget;
    const prod = done.previousElementSibling;
    const prodsrc = prod.name;

    console.log(prodsrc);

    fetch(BASE_URL + "checkout/delete/" + prodsrc).then(onResponse);

    location.reload();
}


const cartnot= document.querySelectorAll(".btn-remove");
for(const i of cartnot){
    i.addEventListener('click', delProd);
}