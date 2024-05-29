function formatarNumero(num) {
    // Convierte el número a notación científica
    var sciNum = num.toExponential(2);
    
    // Separa el número y el exponente
    var parts = sciNum.split('e');
    var coeficiente = parseFloat(parts[0]);
    var exponente = parseInt(parts[1]);

    // Formatea el número y el exponente
    var formattedNum = coeficiente.toFixed(2) + " × 10^" + exponente;

    return formattedNum;
}

function calcula_densidad() {
    // Datos del problema
    var Dts = 1.5 * Math.pow(10, 8); // Distancia media de Sol a la Tierra en kilómetros
    var Ms = 332946; // Masa del Sol en masas terrestres
    var Mt = 1; // Masa de la Tierra en masas terrestres

    // Calculando la distancia para el equilibrio de fuerzas
    var distancia = Math.sqrt((Ms * Dts * Dts) / (Mt + Ms)); // Fórmula corregida para la distancia

    // Formateando el resultado
    var resultado_formateado = formatarNumero(distancia);

    // Mostrando el resultado en el elemento con id "resultadoA"
    var d = document.getElementById("resultadoA");
    d.innerHTML = "La distancia para el equilibrio de fuerzas es aproximadamente: " + resultado_formateado + " kilómetros";
}
