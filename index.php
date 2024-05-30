<?php
function formatarNumero($num) {
    // Convierte el número a notación científica
    $sciNum = sprintf("%.2e", $num);
    
    // Separa el número y el exponente
    list($coeficiente, $exponente) = explode('e', $sciNum);
    $coeficiente = (float)$coeficiente;
    $exponente = (int)$exponente;

    // Formatea el número y el exponente
    $formattedNum = number_format($coeficiente, 2) . " × 10^" . $exponente;

    return $formattedNum;
}

function calcula_densidad() {
    // Datos del problema
    $Dts = 1.5 * pow(10, 8); // Distancia media de Sol a la Tierra en kilómetros
    $Ms = 332946; // Masa del Sol en masas terrestres
    $Mt = 1; // Masa de la Tierra en masas terrestres

    // Calculando la distancia para el equilibrio de fuerzas
    $distancia = sqrt(($Ms * $Dts * $Dts) / ($Mt + $Ms)); // Fórmula corregida para la distancia

    // Formateando el resultado
    $resultado_formateado = formatarNumero($distancia);

    // Devolver el resultado formateado
    return "La distancia para el equilibrio de fuerzas es aproximadamente: " . $resultado_formateado . " kilómetros";
}
?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/stem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">MiguelBarrera</a></h1>
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Fuerzas en equilibrio</h2>
        <p>Descripción:</p>
        <p>A que distancia de la Tierra debe estar un cuerpo para que sienta
            un equilibrio entre las fuerzas gravitacionales que ejercen sobre el
            Sol y la Tierra? La distancia media del Sol a la Tierra es de 1.5 * 10E8 km
            y la masa del Sol es 332 946 masas terrestres. <br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/problema.png">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        F1 = F2<br>
        G (mM/r²) = G (mM/r²)
        M/r² = M/r²
      </section>
      <section class="datos">
        <h2>Datos:</h2>
          Dt-s= 1.5E8 Km. <br>
          Ms= 332946*Mt.
      </section>
      <section class="calculos">
        <h2>Solución</h2>
        <p>a) La distancia de la Tierra es:<br>
        332 946M / (1.5 * 10⁸ km - r²) = M/r² <br>
        </p>
        <form method="post" action="">
          <button type="submit" name="calcular">Presiona para calcular</button>
        </form>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA">
          <?php
          if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calcular'])) {
              echo calcula_densidad();
          }
          ?>
        </div>
      </section>
    </section>
    <footer class="pie">
      Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>
