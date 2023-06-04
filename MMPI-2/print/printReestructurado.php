<?php
include("../collectors/collectorCount.php");
include("../collectors/collectorScoreMale.php");
include("../collectors/collectorScoreFemale.php");
include("../collectors/collectorSuggestions.php");


$temp = array();
for($i = 0; $i < 567; $i++){
  if($i%2 == 0){
    array_push($temp, 'true');
  }else{
    array_push($temp, 'false');
  }
}

$_SESSION['answer'] = $temp;
$_SESSION['gender'] = 'Masculino';

$CollectorCount = new collectorCount();
$CCB = $CollectorCount->collect_Basic();
$CCS = $CollectorCount->collect_Supplementary();
$CCC = $CollectorCount->collect_Content();

if($_SESSION['gender'] == 'Masculino'){

$CollectorScoreMale = new collectorScoreMale();
$CountSB = $CollectorScoreMale->collect_Basic($CCB);
$CountSS = $CollectorScoreMale->collect_Supplementary($CCS);
$CountSC = $CollectorScoreMale->collect_Content($CCC);
}
else
{
  $CollectorScoreFemale = new collectorScoreFemale();
  $CountSB = $CollectorScoreFemale->collect_Basic($CCB);
  $CountSS = $CollectorScoreFemale->collect_Supplementary($CSS);
  $CountSC = $CollectorScoreFemale->collect_Content($CSC);
};

$collectorSuggestions = new collectorSuggestions();
$CSB = $collectorSuggestions->collect_Basic($CountSB);
$CSS = $collectorSuggestions->collect_Supplementary($CountSS);
$CSC = $collectorSuggestions->collect_Content($CountSC);

$C1 = array();
        foreach($CountSB as $var){
        array_push($C1, $var);
        }

$C2 = array();
        foreach($CountSS as $var){
        array_push($C2, $var);
        }

$C3 = array();
        foreach($CountSC as $var){
        array_push($C3, $var);
        }
?>
<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ITT residencia">
	<link rel="icon" href="media/ico.ico">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel='stylesheet' type='text/css' href='Print.css'>
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
					<img src="media/logo-big.png" class="img-fluid" style="max-height: 150px;">
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
        <a href="registro.php" id="exit_Button" onclick="return exit_Form()" class="btn btn-danger"><i id="exit_Button2" class="fa fa-power-off"></i> </a>
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
      <div class="col-md-12 text-center text-success"><h3> Escalas básicas</h3></div>		
				<?php  
				echo "";
				echo "<h3>Escala L (Sinceridad)</h3>";
        echo $CSB['l'];
        echo "<h3>Escala K (Corrección)</h3>";
        echo $CSB['k'];
        echo "<h3>Escala Hs (Hipocondriasis)</h3>";
        echo $CSB['hs'];
        echo "<h3>Escala D (Depresión)</h3>";
        echo $CSB['d'];
        echo "<h3>Escala Hi (Histeria)</h3>";
        echo $CSB['hi'];
        echo "<h3>Escala Dp (Desviación Psicopática)</h3>";
        echo $CSB['dp'];
        echo "<h3>Escala Pa (Paranoia)</h3>";
        echo $CSB['pa'];
        echo "<h3>Escala Es (Esquizofrenia)</h3>";
        echo $CSB['es'];
        echo "<h3>Escala Ma (Hipomonía)</h3>";
        echo $CSB['ma'];
        echo "<h3>Escala Is (Introversión Social</h3>";
        echo $CSB['is'];
				?>  

				<div class="col-md-12 text-center text-success"><h3> Interpretaciones adicionales de 2 factores</h3></div>
				
        

				<?php  
				?>
        
        <div class="col-md-12 text-center text-success"><h3> Interpretaciones adicionales de 3 factores</h3></div>
				


				<?php  

				?>  
                				
        <div class="col-md-12 text-center text-success"><h3> Escalas de contenido</h3></div>

				  <?php  
          echo "<h3>Escala ANS (Ansiedad)</h3>";
          echo $CSC['ans'];
          echo "<h3>Escala MIE (Miedos)</h3>";
          echo $CSC['mie'];
          echo "<h3>Escala OBS (Obsesividad)</h3>";
          echo $CSC['obs'];
          echo "<h3>Escala DEP (Depresión)</h3>";
          echo $CSC['obs'];
          echo "Escala DEL (Pensamientos Delirantes)</h3>";
          echo $CSC['obs'];
          echo "<h3>Escala PAS (Prácticas Antisociales)</h3>";
          echo $CSC['pas'];
          echo "<h3>Escala CIN (Cinismo)</h3>";
          echo $CSC['cin'];
          echo "<h3>Escala PTA (Personalidad Tipo A)</h3>";
          echo $CSC['pta'];
          echo "<h3>Escala BAE (Baja Autoestima)</h3>";
          echo $CSC['bae'];
          echo "<h3>Escala ISO (Incomodidad Social)</h3>";
          echo $CSC['iso'];
          echo "<h3>Escala FAM (Problemas Familiares)</h3>";
          echo $CSC['fam'];
          echo "<h3>Escala DTR (Dificultades en el Trabajo)</h3>";
          echo $CSC['dtr'];
          echo "<h3>Escala RTR (Dificultad en el Tratamiento)</h3>";
          echo $CSC['rtr'];
				  ?>  

        <div class="col-md-12 text-center text-success"><h3> Escalas suplementarias</h3></div>
				
        <?php   
        echo "<h3>Escala A (Ansiedad)</h3>";
        echo $CSS['a'];
        echo "<h3>Escala R (Represión)</h3>";
        echo $CSS['r'];
        echo "<h3>Escala Fyo (Fuerza del Yo)</h3>";
        echo $CSS['fyo'];
        echo "<h3>Escala A-MAC (Alcoholismo de Mc Andrew)</h3>";
        echo $CSS['a_mac'];
        echo "<h3>Escala HR (Hostilidad Reprimida)</h3>";
        echo $CSS['hr'];
        echo "<h3>Escala Do (Dominancia)</h3>";
        echo $CSS['do'];
        echo "<h3>Escala Dpr (Desajuste Profesional)</h3>";
        echo $CSS['dpr'];
        echo "<h3>Escala GM (Género Masculino)</h3>";
        echo $CSS['gm'];
        echo "<h3>Escala GF (Género Femenino)</h3>";
        echo $CSS['gf'];
        echo "<h3>Escala EPK (Desorden de Estrés Postraumático de Keane)</h3>";
        echo $CSS['epk'];
        echo "<h3>Escala EPS (Estrés Postraumático de Schelenger)</h3>";
        echo $CSS['eps'];
        echo "<h3>Escala ls1 (Timidez/Perturbación-autoconcepto)</h3>";
        echo $CSS['ls1'];
        echo "<h3>Escala ls2 (Evitación Social)</h3>";
        echo $CSS['ls2'];
        echo "<h3>Escala ls3 (Enajenación de sí mismo y de los otros)</h3>";
        echo $CSS['ls3'];
        echo "<h3>Escala Fp (Indicador Adicional de Validez)</h3>";
        echo $CSS['fp'];
				?>  

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>
<body>
<h2>Gráfica de resultados de escalas básicas</h2>
<canvas id="grafica"></canvas>
    <script type="text/javascript">
        const $grafica = document.querySelector("#grafica");
        const Tvalue = {
            label: "Puntuacion T",
            data: <?php echo json_encode($C1) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
        };
        new Chart($grafica, {
            type: 'bar',
            data: {
                labels: ["L","F","K","Hs","D","Hi","Dp","Mf","Pa","Pt","Es","Ma","Is"],
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>

<body>
<h2>Gráfica de resultados de escalas de contenido</h2>
    <canvas id="grafica2"></canvas>
    <script type="text/javascript">
        const $grafica2 = document.querySelector("#grafica2");
        const Tvalue2 = {
            label: "Puntuacion T",
            data: <?php echo json_encode($C3) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)', 
            borderWidth: 1, 
        };
        new Chart($grafica2, {
            type: 'bar',
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
    <script src="Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>

<body>
<h2>Gráfica de resultados de escalas suplementarias</h2>
    <canvas id="grafica3"></canvas>
    <script type="text/javascript">
        const $grafica3 = document.querySelector("#grafica3");
        const Tvalue3 = {
            label: "Puntuacion T",
            data: <?php echo json_encode($C2) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
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
</html>

<?php
$_SESSION["answer"] = null;
$_SESSION["answer"] = array();
$_SESSION['gender'] = null;
?>