function checkAge() {
    const age = prompt("Por favor, introduce tu edad:");
    if (age >= 18) {
        alert("Acceso permitido. Redirigiendo...");
        window.location.href = "/tarifas";
    } else {
        alert("Lo siento, debes tener al menos 18 años para acceder a esta página.");
    }
}
