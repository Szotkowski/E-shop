function Kosik() {
    var count = document.getElementById("pocet").value;
    sessionStorage.setItem("count", count);
    console.log(count);
}

function Kosik1() {
    var newcount = sessionStorage.getItem("count");
    document.getElementById("pocet").setAttribute("value", newcount);
    console.log(newcount);
}