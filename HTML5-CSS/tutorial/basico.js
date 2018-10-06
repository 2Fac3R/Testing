function mostrarAlerta() {
    alert("Mensaje de alerta");
}

function modificarTodo() {
    document.write("Prueba...");
}

function mostrarResultado() {
    var x, y; // Instanciar
    x = 1; // Inicializar
    y = 2;
    var domRes = document.getElementById('resultado');
    var res = x * y;
    domRes.innerHTML = "Resultado: " + res;
}
