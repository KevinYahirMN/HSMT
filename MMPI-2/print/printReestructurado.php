<?php
include("../scales/Connection.php");

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
  
$conexion = new Connection();
$AnsB = $conexion->scoreBasicScales();
$AnsIB = $conexion->interpretationBasicScales();
$AnsIBA = $conexion->interpretationAditional();
$AnsIBAT = $conexion->threeinterpretationAditional();
$AnsC = $conexion->scoreContentScales();
$AnsIC = $conexion->interpretationContentScales();
$AnsS = $conexion->scoreSupplementaryScales();
$AnsIS = $conexion->interpretationSupplementaryScales();

$TituloEB = array("Escala L (Sinceridad)", "Escala F (Validez)", "Escala K (Corrección)", "Escala Hs (Hipocondriasis)",
"Escala D (Depresión)", "Escala Hi (Histeria)", "Escala Dp (Desviación Psicopática)","Escala Mf (Masculinidad/Feminidad)","Escala Pa (Paranoia)","Escala Pt (Psicastenia)",
"Escala Es (Esquizofrenia)", "Escala Ma (Hipomonía)", "Escala Is (Introversión Social");

$TituloEC = array("Escala ANS (Ansiedad)", "Escala MIE (Miedos)", "Escala OBS (Obsesividad)", "Escala DEP (Depresión)",
"Escala SAU (Preocupaciones por la Salud)", "Escala DEL (Pensamientos Delirantes)", "Escala ENJ (Enojo)","Escala CIN (Cinismo)","Escala PAS (Prácticas Antisociales)","Escala PTA (Personalidad Tipo A)",
"Escala BAE (Baja Autoestima)", "Escala ISO (Incomodidad Social)", "Escala FAM (Problemas Familiares)", "Escala DTR (Dificultades en el Trabajo)", "Escala RTR (Dificultad en el Tratamiento)");

$TituloES = array("Escala A (Ansiedad)", "Escala R (Represión)", "Escala Fyo (Fuerza del Yo)", "Escala A-MAC (Alcoholismo de Mc Andrew)",
"Escala HR (Hostilidad Reprimida)", "Escala Do (Dominancia)", "Escala Rs (Responsabilidad Social)","Escala Dpr (Desajuste Profesional)","Escala GM (Género Masculino)","Escala GF (Género Femenino)",
"Escala EPK (Desorden de Estrés Postraumático de Keane)", "Escala EPS (Estrés Postraumático de Schelenger)", "Escala ls1 (Timidez/Perturbación-autoconcepto)","Escala ls2 (Evitación Social)","Escala ls3 (Enajenación de sí mismo y de los otros)","Escala Fp (Indicador Adicional de Validez)");

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
				for ($i = 0; $i < 13; ++$i)
				{   
					echo "<h3><B>$TituloEB[$i]</B></h3>";
					$html = $AnsIB[$i];
					print $html;
					echo "<hr>";

				}
				?>  

				<div class="col-md-12 text-center text-success"><h3> Interpretaciones adicionales de 2 factores</h3></div>
				
				<?php  
				echo "";
				$html = $AnsIBA;
				print $html;
				echo "<hr>";
				?>
        
        <div class="col-md-12 text-center text-success"><h3> Interpretaciones adicionales de 3 factores</h3></div>
				
				<?php  
				echo "";
				$html = $AnsIBAT;
				print $html;
				echo "<hr>";
				?>  
                
					
        <div class="col-md-12 text-center text-success"><h3> Escalas de contenido</h3></div>

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

              

        <div class="col-md-12 text-center text-success"><h3> Escalas suplementarias</h3></div>
				
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
            data: <?php echo json_encode($AnsB) ?>,
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

<?php
$_SESSION["answer"] = null;
$_SESSION["answer"] = array();
$_SESSION['gender'] = null;
?>