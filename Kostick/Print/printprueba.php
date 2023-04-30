<?php
include("../Collectors/CollectorCount.php");
include("../Collectors/CollectorSuggestions.php");

$answer = array();

for($i = 0; $i < 90; $i++){
    if($i%2 == 0){
        array_push($answer, 'A');
    }else{
        array_push($answer, 'B');
    }
}

$temp = $answer;

$collectorCount = new CollectorCount();
$collectorSuggestions = new CollectorSuggestions();

$DAACC = $collectorCount->DAA($temp);
$DAACS = $collectorSuggestions->DAA($DAACC);
$DVCC = $collectorCount->DV($temp);
$DVCS = $collectorSuggestions->DV($DVCC);
$SESCC = $collectorCount->SES($temp);
$SESCS = $collectorSuggestions->SES($SESCC);
?>

<html>
<link href='Table.css' rel='stylesheet' type='text/css'>
	<body>
  <table border="1" align="center">
  <caption>DOMINIO-APEGO-ADAPTACIÓN</caption>
  <tr>
    <th>CATEGORIA</th>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>PUNTUACIÓN</th>
  </tr>
  <tr>
    <td>LIDERAZGO</td>
    <td>ACTV. DE LIDER</td>
    <td>L</td>
    <td><?php echo $DAACC[0];?></td>
  </tr>
  <tr>
    <td></td>
    <td>CONTROL OTROS</td>
    <td>P</td>
    <td><?php echo $DAACC[1];?></td>
  </tr>
  <tr>
    <td></td>
    <td>TOMA DECISION</td>
    <td>I</td>
    <td><?php echo $DAACC[2];?></td>
  </tr>
  <tr>
    <td>SUBORDINACION</td>
    <td>APOYO SUPERVISION</td>
    <td>F</td>
    <td><?php echo $DAACC[3];?></td>
  </tr>
  <tr>
    <td></td>
    <td>APEGO REGLAS</td>
    <td>W</td>
    <td><?php echo $DAACC[4];?></td>
  </tr>
  <tr>
    <td>ADAPTACION AL TRABAJO</td>
    <td>ORGANIZADO</td>
    <td>C</td>
    <td><?php echo $DAACC[5];?></td>
  </tr>
  <tr>
    <td></td>
    <td>TRAB DETALLES</td>
    <td>D</td>
    <td><?php echo $DAACC[6];?></td>
  </tr>
  <tr>
    <td></td>
    <td>TEORICO</td>
    <td>R</td>
    <td><?php echo $DAACC[7];?></td>
  </tr>
</table>

<table border="1" align="center">
  <caption>DINAMISMO-VIGOROSIDAD</caption>
  <tr>
    <th>CATEGORIA</th>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>PUNTUACIÓN</th>
  </tr>
  <tr>
    <td>MODO DE VIDA</td>
    <td>ACTIVO</td>
    <td>T</td>
    <td><?php echo $DVCC[0];?></td>
  </tr>
  <tr>
    <td></td>
    <td>VIGOROSO</td>
    <td>V</td>
    <td><?php echo $DVCC[1];?></td>
  </tr>
  <tr>
    <td>GRADO DE ENERGIA</td>
    <td>TERMINA TAREAS</td>
    <td>N</td>
    <td><?php echo $DVCC[2];?></td>
  </tr>
  <tr>
    <td></td>
    <td>ACTV. INTENSA</td>
    <td>G</td>
    <td><?php echo $DVCC[3];?></td>
  </tr>
  <tr>
    <td></td>
    <td>LOGROS</td>
    <td>A</td>
    <td><?php echo $DVCC[4];?></td>
  </tr>
</table>

<table border="1" align="center">
<caption>ESTABILIDAD SOCIO-EMOCIONAL</caption>
  <tr>
    <th>CATEGORIA</th>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>PUNTUACIÓN</th>
  </tr>
  <tr>
    <td>NATURALEZA SOCIAL</td>
    <td>SER NOTIFICADO</td>
    <td>X</td>
    <td><?php echo $SESCC[0];?></td>
  </tr>
  <tr>
    <td></td>
    <td>APERTURA SOCIAL</td>
    <td>S</td>
    <td><?php echo $SESCC[1];?></td>
  </tr>
  <tr>
    <td></td>
    <td>AFILIATIVO</td>
    <td>B</td>
    <td><?php echo $SESCC[2];?></td>
  </tr>
  <tr>
    <td></td>
    <td>AFECTO</td>
    <td>O</td>
    <td><?php echo $SESCC[3];?></td>
  </tr>
  <tr>
    <td>NATURALEZA EMOCIONAL</td>
    <td>PASIVO/AGRESIVO</td>
    <td>K</td>
    <td><?php echo $SESCC[4];?></td>
  </tr>
  <tr>
    <td></td>
    <td>RESTRINGIDO</td>
    <td>E</td>
    <td><?php echo $SESCC[5];?></td>
  </tr>
  <tr>
    <td></td>
    <td>RESISTENTE/CAMBIO</td>
    <td>Z</td>
    <td><?php echo $SESCC[6];?></td>
  </tr>
</table>
</body>
</html>

<html>
<link href='Table.css' rel='stylesheet' type='text/css'>
	<body>

<table border="1" align="center"  style="width:65%">
<caption>LIDERAZGO</caption>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  <tr>
    <td>ACTV. DE LIDER</td>
    <td>L</td>
    <td><?php echo $DAACS[0];?></td>
    <td><?php echo $DAACS[1];?></td>
  </tr>
  <tr>
    <td>CONTROL OTROS</td>
    <td>P</td>
    <td><?php echo $DAACS[2];?></td>
    <td><?php echo $DAACS[3];?></td>
  </tr>
  <tr>
    <td>TOMA DECISION</td>
    <td>I</td>
    <td><?php echo $DAACS[4];?></td>
    <td><?php echo $DAACS[5];?></td>
  </tr>
</table>

<table border="1" align="center"  style="width:65%">
<caption>SUBORDINACION</caption>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  <tr>
    <td>APOYO SUPERVISION</td>
    <td>F</td>
    <td><?php echo $DAACS[6];?></td>
    <td><?php echo $DAACS[7];?></td>
  </tr>
  <tr>
    <td>APEGO REGLAS</td>
    <td>W</td>
    <td><?php echo $DAACS[8];?></td>
    <td><?php echo $DAACS[9];?></td>
  </tr>
</table>

<table border="1" align="center"  style="width:65%">
<caption>ADAPTACION TRAB.</caption>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  <tr>
    <td>ORGANIZADO</td>
    <td>C</td>
    <td><?php echo $DAACS[10];?></td>
    <td><?php echo $DAACS[11];?></td>
  </tr>
  <tr>
    <td>TRAB DETALLES</td>
    <td>D</td>
    <td><?php echo $DAACS[12];?></td>
    <td><?php echo $DAACS[13];?></td>
  </tr>
  <tr>
    <td>TEORICO</td>
    <td>R</td>
    <td><?php echo $DAACS[14];?></td>
    <td><?php echo $DAACS[15];?></td>
  </tr>
</table>

<table border="1" align="center"  style="width:65%">
<caption>MODO DE VIDA</caption>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  <tr>
    <td>ACTIVO</td>
    <td>T</td>
    <td><?php echo $DVCS[0];?></td>
    <td><?php echo $DVCS[1];?></td>
  </tr>
  <tr>
    <td>VIGOROSO</td>
    <td>V</td>
    <td><?php echo $DVCS[2];?></td>
    <td><?php echo $DVCS[3];?></td>
  </tr>
</table>

<table border="1" align="center"  style="width:65%">
<caption>GRADO DE ENERGIA</caption>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  <tr>
    <td>TERMINA TAREAS</td>
    <td>N</td>
    <td><?php echo $DVCS[4];?></td>
    <td><?php echo $DVCS[5];?></td>
  </tr>
  <tr>
    <td>ACTV. INTENSA</td>
    <td>G</td>
    <td><?php echo $DVCS[6];?></td>
    <td><?php echo $DVCS[7];?></td>
  </tr>
  <tr>
    <td>LOGROS</td>
    <td>A</td>
    <td><?php echo $DVCS[8];?></td>
    <td><?php echo $DVCS[9];?></td>
  </tr>
</table>

<table border="1" align="center"  style="width:65%">
<caption>NATURALEZA SOCIAL</caption>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  <tr>
    <td>SER NOTIFICADO</td>
    <td>X</td>
    <td><?php echo $SESCS[0];?></td>
    <td><?php echo $SESCS[1];?></td>
  </tr>
  <tr>
    <td>APERTURA SOC.</td>
    <td>S</td>
    <td><?php echo $SESCS[2];?></td>
    <td><?php echo $SESCS[3];?></td>
  </tr>
  <tr>
    <td>AFILIATIVO</td>
    <td>B</td>
    <td><?php echo $SESCS[4];?></td>
    <td><?php echo $SESCS[5];?></td>
  </tr>
  <tr>
    <td>AFECTO</td>
    <td>0</td>
    <td><?php echo $SESCS[6];?></td>
    <td><?php echo $SESCS[7];?></td>
  </tr>
</table>

<table border="1" align="center"  style="width:65%">
<caption>NATURALEZA EMOCIONAL</caption>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  <tr>
    <td>PASIVO/AGRESIVO</td>
    <td>K</td>
    <td><?php echo $SESCS[8];?></td>
    <td><?php echo $SESCS[9];?></td>
  </tr>
  <tr>
    <td>RESTRINGIDO</td>
    <td>E</td>
    <td><?php echo $SESCS[10];?></td>
    <td><?php echo $SESCS[11];?></td>
  </tr>
  <tr>
    <td>RESISTENTE/CAMBIO</td>
    <td>Z</td>
    <td><?php echo $SESCS[12];?></td>
    <td><?php echo $SESCS[13];?></td>
  </tr>
  <tr>
    <td>AFECTO</td>
    <td>0</td>
    <td><?php echo $SESCS[6];?></td>
    <td><?php echo $SESCS[7];?></td>
  </tr>
</table>
</body>
</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>
<body>
<h2>GRAFICA DE DOMINIO-APEGO-ADAPTACIÓN </h2>
<canvas id="grafica"></canvas>
    <script type="text/javascript">
        const $grafica = document.querySelector("#grafica");
        const value = {
            label: "Puntuacion",
            data: <?php echo json_encode($DAACC) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
        };
        new Chart($grafica, {
            type: 'bar',
            data: {
                labels: ["L","P","I","F","W","C","D","R"],
                datasets: [
                    value,
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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>

<body>
<h2>GRAFICA DE DINAMISMO-VIGOROSIDAD</h2>
<canvas id="grafica2"></canvas>
    <script type="text/javascript">
        const $grafica2 = document.querySelector("#grafica2");
        const value2 = {
            label: "Puntuacion",
            data: <?php echo json_encode($DVCC) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
        };
        new Chart($grafica2, {
            type: 'bar',
            data: {
                labels: ["T","V","N","G","A"],
                datasets: [
                    value2,
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
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>
    <h2>ESTABILIDAD SOCIO-EMOCIONAL</h2>
<canvas id="grafica3"></canvas>
    <script type="text/javascript">
        const $grafica3 = document.querySelector("#grafica3");
        const value3 = {
            label: "Puntuacion",
            data: <?php echo json_encode($SESCC) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
        };
        new Chart($grafica3, {
            type: 'bar',
            data: {
                labels: ["X","S","B","O","K","E","Z"],
                datasets: [
                    value3,
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
<head>
    <link rel="stylesheet" href="Print.css">
</head>                
					  <br><br>
					  <div class="text-center">
						<button onclick="window.print();" id="print" class="print_Button">Imprimir</button>
					  </div>
				<br>
			</div>
			<div class="card-footer text-muted text-center">
			<Strong>Nota: </Strong>Este reporte no debe ser tomado textualmente pues presenta solo inferencias generales acerca del significado de la elevación de las puntuaciones que deben considerarse en cada caso de acuerdo con la historia y antecedentes del sujeto.
			</div>
		</div>
	</div>
</body>
<?php
$_SESSION["answer"] = null;
$_SESSION["answer"] = array();
$_SESSION['gender'] = null;
?>