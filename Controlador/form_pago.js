document.addEventListener('DOMContentLoaded', function() {
    var selectElement = document.getElementById('metodo-pago');
    selectElement.addEventListener('change', showFields);
});

function showFields() {
    var metodoPago = document.getElementById("metodo-pago").value;
    var tarjetaFields = document.getElementById("tarjeta-fields");
    var paypalFields = document.getElementById("paypal-fields");

    if (metodoPago === "tarjeta") {
        tarjetaFields.style.display = "block";
        paypalFields.style.display = "none";
    } else if (metodoPago === "paypal") {
        tarjetaFields.style.display = "none";
        paypalFields.style.display = "block";
    } else {
        tarjetaFields.style.display = "none";
        paypalFields.style.display = "none";
    }
}
