<?php
include("../Collectors/CollectorCount.php");
include("../Collectors/CollectorSuggestions.php");
session_start();
$temp = $_SESSION["answer"];
$get = $_POST["Q"];
array_push($temp, $get);
$_SESSION["answer"] = $temp;

$collectorCount = new CollectorCount();
$collectorSuggestions = new CollectorSuggestions();
$DAACC = $collectorCount->DAA($temp);
$DAACS = $collectorSuggestions->DAA($DAACC);
$DVCC = $collectorCount->DV($temp);
$DVCS = $collectorSuggestions->DV($DVCC);
$SESCC = $collectorCount->SES($temp);
$SESCS = $collectorSuggestions->SES($SESCC);
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ITT residencia">
	<link rel="icon" href="../Forms/media/ico.ico">
	<link rel="stylesheet" href="../Forms/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Forms/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Forms/css/style.css">
  <link rel="stylesheet" href="table.css">
	<title>Resultados</title>
	<style>
		.btn-group.respuestas {
			margin: 0 auto;
			display: block;
			width: 100%;
			text-align: center;
		}
		.btn-group.respuestas .btn {
			min-width: 100px;
		}
		.banterior:hover{
			cursor:pointer;
		}
	</style>
</head>
<body>
	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap justify-content-between align-items-center">
				<div class="col-4 pt-1">
				</div>
				<div class="col-4 text-center">
					<img src="../Forms/media/logo-big.png" class="img-fluid" style="max-height: 150px;">
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
        <a href="../Forms/registro.php" id="exit_Button" onclick="return exit_Form()" class="btn btn-danger"><i id="exit_Button2" class="fa fa-power-off"></i> </a>
				</div>
			</div>
		</header>
		<div class="card">
			<div class="card-header text-center">
				<h4>
					<span class="badge badge-success">
						Interpretación de resultados
					</span>
				</h4>
			</div>
			<div class="card-body">
			<div class="col-md-12 text-center text-success"><h3><i class="fa fa-address-book-o"></i> Información personal</h3></div>
			<center><div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nombres: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['name1']?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Apellido paterno: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['name2']?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Apellido materno: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['name3']?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Sexo: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['gender']?> </p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Dirección: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['inputAddress']?> </p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Número de interior/exterior: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['interior']?> </p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Ciudad: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['city']?></p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Estado: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['inputState']?> </p>
              </div>
            </div>
            <hr>
			<div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Código postal: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['zip']?> </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Fecha de nacimiento: </p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php  echo $_SESSION['bday']?> </p>
              </div>
            </div>
          </div>
        </div>
	</center>
	<hr>
    <table class="content-table">
  <div class="col-md-12 text-center text-success"><h3> DOMINIO-APEGO-ADAPTACIÓN</h3></div>
  <thead>
  <tr>
    <th>CATEGORÍA</th>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>PUNTUACIÓN</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>LIDERAZGO</td>
    <td>ACTV. DE LÍDER</td>
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
    <td>TOMA DECISIÓN</td>
    <td>I</td>
    <td><?php echo $DAACC[2];?></td>
  </tr>
  <tr>
    <td>SUBORDINACIÓN</td>
    <td>APOYO SUPERVISIÓN</td>
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
    <td>ADAPTACIÓN AL TRABAJO</td>
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
    <td>TEÓRICO</td>
    <td>R</td>
    <td><?php echo $DAACC[7];?></td>
  </tr>
  </tbody>
</table>
<hr>

<table class="content-table">
<div class="col-md-12 text-center text-success"><h3> DINAMISMO-VIGOROSIDAD</h3></div>
  <thead><tr>
    <th>CATEGORÍA</th>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>PUNTUACIÓN</th>
    </thead>
  </tr>
  <tbody>
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
    <td>GRADO DE ENERGÍA</td>
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
  </tbody>
</table>
<hr>

<table class="content-table">
<div class="col-md-12 text-center text-success"><h3> ESTABILIDAD SOCIO-EMOCIONAL</h3></div>
  <thead>
  <tr>
    <th>CATEGORÍA</th>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>PUNTUACIÓN</th>
    </thead>
  </tr>
  <tbody>
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
  </tbody>
</table>
<hr>
<table class="content-table">
<div class="col-md-12 text-center text-success"><h3>LIDERAZGO</h3></div>
  <thead>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>ACTV. DE LÍDER</td>
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
    <td>TOMA DECISIÓN</td>
    <td>I</td>
    <td><?php echo $DAACS[4];?></td>
    <td><?php echo $DAACS[5];?></td>
  </tr>
  </tbody>
</table>
<hr>
<table class="content-table">
<div class="col-md-12 text-center text-success"><h3>SUBORDINACIÓN</h3></div>
  <thead>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>APOYO SUPERVISIÓN</td>
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
  </tbody>
</table>
<hr>
<table class="content-table">
<div class="col-md-12 text-center text-success"><h3>ADAPTACIÓN TRAB.</h3></div>
  <thead>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  </thead>
  <tbody>
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
    <td>TEÓRICO</td>
    <td>R</td>
    <td><?php echo $DAACS[14];?></td>
    <td><?php echo $DAACS[15];?></td>
  </tr>
  </tbody>
</table>
<hr>
<table class="content-table">
<div class="col-md-12 text-center text-success"><h3> MODO DE VIDA</h3></div>
<hr>
<thead>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  </thead>
  <tbody>
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
  </tbody>
</table>
<hr>
<table class="content-table">
<div class="col-md-12 text-center text-success"><h3>GRADO DE ENERGÍA</h3></div>
  <thead>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  </thead>
  <tbody>
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
  </tbody>
</table>
<hr>
<table class="content-table">
<div class="col-md-12 text-center text-success"><h3> NATURALEZA SOCIAL</h3></div>
  <thead>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  </thead>
  <tbody>
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
  </tbody>
</table>
<hr>
<table class="content-table">
<div class="col-md-12 text-center text-success"><h3> NATURALEZA EMOCIONAL</h3></div>
  <thead>
  <tr>
    <th>NOMBRE</th>
    <th>CLAVE</th>
    <th>INTERPRETACIÓN POSITIVA</th>
    <th>INTERPRETACIÓN NEGATIVA</th>
  </tr>
  </thead>
  <tbody>
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
  </tbody>
</table>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>
<body>
<div class="col-md-12 text-center text-success"><h3> GRÁFICA DE DOMINIO-APEGO-ADAPTACIÓN </h3></div>
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
  <div class ="center">
  <div class="col-md-12 text-center text-success"><h3> GRÁFICA DE DINAMISMO-VIGOROSIDAD</h3></div>
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
    <hr>
    </div>
    </body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>

<body>
<div class="col-md-12 text-center text-success"><h3>GRÁFICA DE ESTABILIDAD SOCIO-EMOCIONAL</h3></div>
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
    <hr>
</body>
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>
<link rel="stylesheet" href="Print.css">
<head>
    <link rel="stylesheet" href="Print.css">
</head> 
<br></br>         
<div class="col-md-12 text-center text-success"><h1> Respuestas del examen</h1></div>  
<table border = "0" align = "center">
<?php
$i = 0;
while ($i < count($temp)) {
  echo "<tr><td style = 'width:60px'>".""."<b>" . $i+1 . ".</b> " .$temp[$i] ."</td>".
  "<td style = 'width:60px'>".""."<b>" . $i+2 . ".</b> " .$temp[$i+1] ."</td>".
  "<td style = 'width:60px'>".""."<b>" . $i+3 . ".</b> " .$temp[$i+2] ."</td>".
  "<td style = 'width:60px'>".""."<b>" . $i+4 . ".</b> " .$temp[$i+3] ."</td>".
  "<td style = 'width:60px'>".""."<b>" . $i+5 . ".</b> " .$temp[$i+4] ."</td>".
  "<td style = 'width:60px'>".""."<b>" . $i+6 . ".</b> " .$temp[$i+5] ."</td>".
  "<td style = 'width:60px'>".""."<b>" . $i+7 . ".</b> " .$temp[$i+6] ."</td>".
  "<td style = 'width:60px'>".""."<b>" . $i+8 . ".</b> " .$temp[$i+7] ."</td>".
  "<td style = 'width:60px'>".""."<b>" . $i+9 . ".</b> " .$temp[$i+8] ."</td>".
  "<td style = 'width:60px'>".""."<b>" . $i+10 . ".</b> " .$temp[$i+9] ."</td>".
  "</td></tr>" ;
  $i += 10;
}
?>
</table>
					  <br><br>
					  <div class="text-center">
						<button style="background-color: #4CAF50; 
            color: white; 
            padding: 10px 20px; 
            border: none;
            font-size: 16px;
            padding: 8px 20px;
            border-radius: 4px; 
            cursor: pointer;"
            onclick="window.print();" id="print" class="print_Button">Imprimir</button>
					  </div>
				<br>
			</div>
			<div class="card-footer text-muted text-center">
			<Strong>Nota: </Strong>Este reporte no debe ser tomado textualmente pues presenta solo inferencias generales acerca del significado de la elevación de las puntuaciones que deben considerarse en cada caso de acuerdo con la historia y antecedentes del sujeto.
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="../Forms/js/function.js"></script>
</html>

<?php
$_SESSION["answer"] = null;
$_SESSION["answer"] = array();
$_SESSION['gender'] = null;
?>