<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/stem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/codigo.js"></script>
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
        <p>a)La distancia de la Tierra es:<br>
        332 946M / (1.5 * 10⁸ km - r²) = M/r² <br>
        </p>
        <button onclick="calcula_densidad();">Presiona para calcular</button>
      </section>
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 4.0 SciSoft 2024
    </footer>
  </section>
</body>
</html>