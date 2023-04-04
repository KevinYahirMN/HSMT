<!DOCTYPE html>
<html lang="es">
<?php
include("Connection.php");

session_start();
$_SESSION['gender'] = 'Masculino';
$_SESSION['answer'] = array();

/*$temp = $_SESSION["answer"]
  $get = $_POST["Q"];
  array_push($temp, $get);
  $_SESSION["answer"] = $temp;
  */

for($i = 0; $i < 568; $i++){
    if($i%2 != 0){
        array_push($_SESSION['answer'], 'true');
    }else{
        array_push($_SESSION['answer'], 'false');
    }
}

$conexion = new Connection();
$AnsB = $conexion->scoreBasicScales();
$AnsIB = $conexion->interpretationBasicScales();
$AnsIBA = $conexion->interpretationAditional();
$AnsC = $conexion->scoreContentScales();
$AnsIC = $conexion->interpretationContentScales();
$AnsS = $conexion->scoreSupplementaryScales();
$AnsIS = $conexion->interpretationSupplementaryScales();

/*for ($i = 0; $i < 13; ++$i)
{                 
    $html = $AnsIB[$i];
    print $html;
}

for ($i = 0; $i < 15; ++$i)
{                 
    $html = $AnsIC[$i];
    print $html;
}*/

$TituloEB = array("Escala L", "Escala F", "Escala K", "Escala Hs",
"Escala D", "Escala Hi", "Escala Dp","Escala MfM","Escala Pa","Escala Pt",
"Escala Es", "Escala Ma", "Escala Is");

echo "<br><h2><B>Escalas basicas</B></h3>";
for ($i = 0; $i < 13; ++$i)
{   
    echo "<h3><B>$TituloEB[$i]</B></h3>";
    $html = $AnsIB[$i];
    print $html;
}

$TituloEC = array("Escala ANS", "Escala MIE", "Escala OBS", "Escala DEP",
"Escala SAU", "Escala DEL", "Escala ENJ","Escala CIN","Escala PAS","Escala PTA",
"Escala BAE", "Escala ISO", "Escala FAM", "Escala DTR", "Escala RTR");

echo "<br><h2><B>Escalas de contenido</B></h2>";
for ($i = 0; $i < 15; ++$i)
{   
    echo "<h3><B>$TituloEC[$i]</B></h3>";
    $html = $AnsIC[$i];
    print $html;
}


$TituloES = array("Escala A", "Escala R", "Escala Fyo", "Escala A-MAC",
"Escala HR", "Escala Do", "Escala Rs","Escala Dpr","Escala GM","Escala GF",
"Escala EPK", "Escala EPS", "Escala ls1","Escala ls2","Escala ls3","Escala Fp");

echo "<br><h2><B>Escalas suplementarias</B></h2>";
for ($i = 0; $i < 16; ++$i)
{   
    echo "<h3><B>$TituloES[$i]</B></h3>";
    $html = $AnsIS[$i];
    print $html;
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="grafica.css">

</head>

<body>
<h2>Gráfica de resultados de escalas basicas</h2>
<canvas id="grafica"></canvas>
    <script type="text/javascript">
        const $grafica = document.querySelector("#grafica");
        const Tvalue = {
            label: "Puntuacion T",
            data: <?php echo json_encode($AnsB) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
            borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
            borderWidth: 1, // Ancho del borde
        };
        new Chart($grafica, {
            type: 'bar', // Tipo de gráfica
            data: {
                labels: ["L","F","K","Hs","D","Hi","Dp","MfM","Pa","Pt","Es","Ma","Is"],
                datasets: [
                    Tvalue,
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                },
            }
        });
    </script>
</body>
</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="grafica.css">
</head>

<body>
<h2>Gráfica de resultados de escalas de contenido</h2>
    <canvas id="grafica2"></canvas>
    <script type="text/javascript">
        const $grafica2 = document.querySelector("#grafica2");
        const Tvalue2 = {
            label: "Puntuacion T",
            data: <?php echo json_encode($AnsC) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
            borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
            borderWidth: 1, // Ancho del borde
        };
        new Chart($grafica2, {
            type: 'bar', // Tipo de gráfica
            data: {
                labels: ["ANS","MIE","OBS","DEP","SAU","DEL","ENJ","CIN",
                         "PAS","PTA","BAE","ISO","FAM","DTR","RTR"],
                datasets: [
                    Tvalue2,
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                },
            }
        });
    </script>
</body>
</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="grafica.css">
</head>

<body>
<h2>Gráfica de resultados de escalas suplementarias</h2>
    <canvas id="grafica3"></canvas>
    <script type="text/javascript">
        const $grafica3 = document.querySelector("#grafica3");
        const Tvalue3 = {
            label: "Puntuacion T",
            data: <?php echo json_encode($AnsS) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
            borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
            borderWidth: 1, // Ancho del borde
        };
        new Chart($grafica3, {
            type: 'bar', 
            data: {
                labels: ["A","R","Fyo","A-MAC","HR","Do","Rs","Dpr","GM",
                         "GF","EPK","EPS","ls1","ls2","ls3","Fp"],
                datasets: [
                    Tvalue3,
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }],
                },
            }
        });
    </script>
</body>
</html>

<head>
    <link rel="stylesheet" href="dontPrint.css">
<button onclick="window.print();" class="dontPrint">
  Print
</button>
</head>
