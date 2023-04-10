<?php
include("Connection.php");

session_start();
$gender = $_SESSION['gender']='Masculino'; ;

$temp = $_SESSION["answer"];
$get = $_POST["Q"];
array_push($temp, $get);
$_SESSION["answer"] = $temp;
  
$conexion = new Connection();
$AnsB = $conexion->scoreBasicScales();
$AnsIB = $conexion->interpretationBasicScales();
$AnsIBA = $conexion->interpretationAditional();
$AnsC = $conexion->scoreContentScales();
$AnsIC = $conexion->interpretationContentScales();
$AnsS = $conexion->scoreSupplementaryScales();
$AnsIS = $conexion->interpretationSupplementaryScales();

$TituloEB = array("Escala L", "Escala F", "Escala K", "Escala Hs",
"Escala D", "Escala Hi", "Escala Dp","Escala Mf","Escala Pa","Escala Pt",
"Escala Es", "Escala Ma", "Escala Is");





$TituloEC = array("Escala ANS", "Escala MIE", "Escala OBS", "Escala DEP",
"Escala SAU", "Escala DEL", "Escala ENJ","Escala CIN","Escala PAS","Escala PTA",
"Escala BAE", "Escala ISO", "Escala FAM", "Escala DTR", "Escala RTR");



$TituloES = array("Escala A", "Escala R", "Escala Fyo", "Escala A-MAC",
"Escala HR", "Escala Do", "Escala Rs","Escala Dpr","Escala GM","Escala GF",
"Escala EPK", "Escala EPS", "Escala ls1","Escala ls2","Escala ls3","Escala Fp");



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
					<a href="//" class="btn btn-danger"><i class="fa fa-power-off"></i> </a>
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

            
                <div class="col-md-12 text-center text-success"><h3><i class="fa fa-ravelry"></i> Escalas básicas</h3></div>
				
				<?php  
				echo "";
				for ($i = 0; $i < 13; ++$i)
				{   
					echo "<h3><B>$TituloEB[$i]</B></h3>";
					$html = $AnsIB[$i];
					print $html;
					echo "<hr>";

				}
				

				?>  

				<div class="col-md-12 text-center text-success"><h3><i class="fa fa-plus"></i> Escalas adicionales</h3></div>
				
				<?php  
				echo "";
				$html = $AnsIBA;
				print $html;
				echo "<hr>";

				?>  
                
					
                  <div class="col-md-12 text-center text-success"><h3><i class="fa fa-eye"></i> Escalas de contenido</h3></div>

				  <?php  
				  echo "";
				  for ($i = 0; $i < 15; ++$i)
				  {   
					  echo "<h3><B>$TituloEC[$i]</B></h3>";
					  $html = $AnsIC[$i];
					  print $html;
					  echo "<hr>";
				  }
				  ?>  

              

                  <div class="col-md-12 text-center text-success"><h3><i class="fa fa-frown-o"></i> Escalas suplementarias</h3></div>
				  <?php   
				 echo "";
				 for ($i = 0; $i < 16; ++$i)
				 {   
					 echo "<h3><B>$TituloES[$i]</B></h3>";
					 $html = $AnsIS[$i];
					 print $html;
					 echo "<hr>";
				 }
				  ?>  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>

<body>
<h2>Gráfica de resultados de escalas de contenido</h2>
    <canvas id="grafica2"></canvas>
    <script type="text/javascript">
        const $grafica2 = document.querySelector("#grafica2");
        const Tvalue2 = {
            label: "Puntuacion T",
            data: <?php echo json_encode($AnsC) ?>,
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="Print.css">
</head>

<body>
<h2>Gráfica de resultados de escalas suplementarias</h2>
    <canvas id="grafica3"></canvas>
    <script type="text/javascript">
        const $grafica3 = document.querySelector("#grafica3");
        const Tvalue3 = {
            label: "Puntuacion T",
            data: <?php echo json_encode($AnsS) ?>,
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
