function validate_cardNumber() {
    var cardNumber = document.getElementById("visaIcon").value;
    cardNumber = cardNumber.trim();
    if(cardNumber[0] == "4" && cardNumber.length >= 13 && cardNumber.length <= 16) {
        document.getElementById("visaIcon").style = "display=block";
        return true;
    } else {
        document.getElementById("visaIcon").style = "display=none";
        return false;
    }
}