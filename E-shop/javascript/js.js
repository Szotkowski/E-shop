function Kosik() {
    var count = document.getElementById("pocet").value;
    sessionStorage.setItem("count", count);
}
function Kosik1() {
    var count = sessionStorage.getItem("count");
    console.log(count);
}
Kosik1();