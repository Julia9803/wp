function clickMinus(){
    if(parseInt(document.getElementById("qty").value) - 1 >= 0)
        document.getElementById("qty").value = parseInt(document.getElementById("qty").value) - 1;
        changeSubtotal();
    }
        
function clickPlus(){
    if(parseInt(document.getElementById("qty").value) + 1 >= 0)
        document.getElementById("qty").value =
        parseInt(document.getElementById("qty").value) + 1;
        changeSubtotal();
    }

function check(){
    if(parseInt(document.getElementById("qty").value) > 0){
        return true;
    }else{
        alert("Sorry! You can't buy items with " + document.getElementById("qty").value + " quantity input.");
        return false;
    }
}

function changeSubtotal(){
    var qty = document.getElementById("qty").value;
    qty = parseFloat(qty);
    var price = String(document.getElementById("price").value);
    alert("price: " + price);
    price = parseFloat(price.substr(1));
    var subtotal = qty*price;
    subtotal = subtotal.toFixed(2);
    alert(subtotal);
    document.getElementById("subtotal").value = "$" + subtotal;
}