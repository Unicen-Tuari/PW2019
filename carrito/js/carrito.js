let product = document.getElementById("product");
let price = document.getElementById("price");
let tableProducts =  document.getElementById("products");
let btnAdd = document.getElementById("add");
let btnDiscount = document.getElementById("discount");
let prices = [];

btnAdd.addEventListener("click", function(){
    addProductRow();
    prices.push(parseInt(price.value));
    cleanInputs();
    showTotal(calculateTotal());
});

btnDiscount.addEventListener("click", function(){
    showTotal(calculateDiscount());
});

function cleanInputs(){
    product.value="";
    price.value="";
}
function addProductRow(){
    newRow = tableProducts.insertRow(-1);
    let productCell = newRow.insertCell(0);
    let productText = document.createTextNode(product.value);
    productCell.appendChild(productText);
    let priceCell = newRow.insertCell(1);
    let priceText = document.createTextNode("$"+price.value);
    priceCell.appendChild(priceText);
}

function showTotal(total){
    let totalCell = document.getElementById("total");
    totalCell.innerHTML="$"+total;
    console.log("El total es: "+ total);
}

function calculateDiscount(){
    let total = calculateTotal();
    if(prices.length > 9){
        total = total * 0.95;
    }
    return total;
}

function calculateTotal(){
    let total = 0;
    for(let price of prices){
        total += price;
    }
    return total;
}