function clickMinus(){
    if(parseInt(document.getElementById("qty").value) - 1 >= 0)
        document.getElementById("qty").value = parseInt(document.getElementById("qty").value) - 1;
    document.getElementById("subtotal").value = "$" + parseFloat(document.getElementById("qty").value)*parseFloat(document.getElementById("price").value).toFixed(2);
    }
        
function clickPlus(){
    if(parseInt(document.getElementById("qty").value) + 1 >= 0)
        document.getElementById("qty").value =
        parseInt(document.getElementById("qty").value) + 1;
    document.getElementById("subtotal").value = "$" + parseFloat(document.getElementById("qty").value)*parseFloat(document.getElementById("price").value).toFixed(2);
    }

function check(){
    if(parseInt(document.getElementById("qty").value) > 0){
        return true;
    }else{
        alert("Sorry! You can't buy items with " + document.getElementById("qty").value + " quantity input.");
        return false;
    }
}