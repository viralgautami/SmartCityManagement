function validateForm1() {

    var username = document.getElementById("uname").value;
    var psw = document.forms["login"]["psw"].value;
    var un=/^[A-Za-z0-9_]{1,20}$/;
   
    if (!un.test(username)) {
        alert("username must be filled out");
        return false;
    } else if (psw == null || psw == "") {
        alert("Password must be filled out");
        return false;
    }
}