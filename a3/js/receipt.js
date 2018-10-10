    var date = new Date();
    var seperator1 = " ";
    var year = date.getFullYear();
    var month = date.getMonth() + 1;
    switch(month){
        case 1:
        month = "January";
        break;
        case 2:
        month = "February";
        break;
        case 3:
        month = "March";
        break;
        case 4:
        month = "April";
        break;
        case 5:
        month = "May";
        break;
        case 6:
        month = "June";
        break;
        case 7:
        month = "July";
        break;
        case 8:
        month = "August";
        break;
        case 9:
        month = "September";
        break;
        case 10:
        month = "October";
        break;
        case 11:
        month = "November";
        break;
        case 12:
        month = "December";
        break;
    }

    var strDate = date.getDate();
    if (month >= 1 && month <= 9) {
        month = "0" + month;
    }
    if (strDate >= 0 && strDate <= 9) {
        strDate = "0" + strDate;
    }
    var currentdate = strDate + seperator1 + month + seperator1 + year;
    document.getElementById("current_date").innerText = currentdate;