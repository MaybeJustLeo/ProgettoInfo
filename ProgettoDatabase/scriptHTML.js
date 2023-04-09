function addWelcome(nome) {
    document.getElementById("add_welcome").innerHTML = "<a style = 'float: right'>Benvenuto " + nome + "</a>";
    document.getElementById("add_welcomeli").style.display = "block";
}

function addLogout() {
    document.getElementById("add_logout").innerHTML = "<a style = 'float: left' href = 'logOut.php'>Logout</a>";
    document.getElementById("add_logoutli").style.display = "block";
}