var username = "";
var password = "";

function login(){
//    if(document.getElementById("username").value != null){
//        username = document.getElementById("username").value;
//    }
//    if(document.getElementById("password").value != null){
//        password = document.getElementById("password").value;
//    }
    if (this.username != "" && this.passowrd != "") {
        if (confirm("Go back to main page?"))
            window.location.href = "index.php";
        else{}
    }else {
        alert("Username or Passowrd could not be empty!");
    };
}

function usernameChnage(){
    this.username = document.getElementById("username");
}

function passwordChange(){
    this.password = document.getElementById("password");
}