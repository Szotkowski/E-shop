function Kosik() {
    let Div = document.getElementById("pocet");
    let cena = document.getElementById("cena");
    alert(Div);
    if (Div > 0) {
        Div = abs(Div);
        Div.innerHTML = Div;
    }
}