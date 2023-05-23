<?php
include("../collectors/collectorCount.php");

session_start();
$temp = $_SESSION["answer"];
$get = $_POST["Q"];
array_push($temp, $get);
$_SESSION["answer"] = $temp;




$collectorCount = new CollectorCount();
$CS = $collectorCount->collect_CS();
$DM = $collectorCount->collect_DM();
$IP = $collectorCount->collect_IP();
$IR = $collectorCount->collect_IR();
$SF = $collectorCount->collect_SF();
?>

<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ITT residencia">
	<link rel="icon" href="../forms/media/ico.ico">
	<link rel="stylesheet" href="../forms/css/bootstrap.min.css">
	<link rel="stylesheet" href="../forms/css/font-awesome.min.css">
	<link rel="stylesheet" href="../forms/css/style.css">
  <link rel="stylesheet" href="Print.css">
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
					<img src="../forms/media/logo-big.png" class="img-fluid" style="max-height: 150px;">
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
        <a href="../forms/registro.php" id="exit_Button" onclick="return exit_Form()" class="btn btn-danger"><i id="exit_Button2" class="fa fa-power-off"></i> </a>
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


<body>
<br>
<hr>
    <table class="content-table">
    <div class="col-md-12 text-center text-success"><h3>RESULTADOS</h3></div>

    <thead>
          <tr>
            <th>Categoria</th>
            <th>%</th>
            <th>Rango</th>
            <th>Interpretación</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <td>Habilidad de supervisión</td>
          <td>%</td>
          <td><?php echo $SF ?></td>
          <td>Mantener la importancia y significado del propósito, las metas y la propuesta. 
            Crear compromiso y confianza. Fortalecer la mezcla y el nivel de las habilidades. 
            Manejar las relaciones con terceros, eliminar obstáculos. 
            Crear oportunidades para otros.</td>
          </tr>
          <tr>
            <td>Capacidad de decisión en las relaciones humanas</td>
            <td>%</td>
            <td><?php echo $DM ?></td>
            <td>Analizar los problemas, para que este a su vez tome la decisión certeramente, sin 
            entrometerse con la persona. Relacionarse sin ninguna dificultad en su medio social.
            Tender a la socialización o manejar un gran número de personas pero superficialmente.
            Tendrá la facilidad de escuchar a las personas pero no ir más allá de una relación más 
            íntima. Ser una persona asertiva y amable con las personas que la rodean.</td>
          </tr>        
          <tr>
            <td>Capacidad de evaluación de problemas interpersonales</td>
            <td>%</td>
            <td><?php echo $IP ?></td>
            <td>Saber escuchar analíticamente. Tendrá la habilidad para saber escuchar y dar 
              un consejo certeramente. Será una persona que cuando se presente un conflicto, 
              sabrá cómo manejarlo adecuadamente. Es una persona que a través de su experiencia 
              personal sabrá tomar las decisiones certeramente ante una situación que le ocasione 
              algún problema ya sea personal o laboral.</td>
          </tr>        
          <tr>
            <td>Habilidad para establecer relaciones interpersonales</td>
            <td>%</td>
            <td><?php echo $IR ?></td>
            <td>Ser una persona realista y determinar expectativas ante un problema. Proporcionar 
              retroalimentación a su grupo de amistades íntimamente. Se relacionará profundamente con 
              su grupo de amistades ya que este será pequeño. Tendrá la habilidad para diseñar un proceso 
              de amistad para cada uno de ellos. Es una persona sumamente emotiva con su grupo de
              amistades.
            </td>
          </tr>
          <tr>
            <td>Sentido común y tacto en las relaciones interpersonales</td>
            <td>%</td>
            <td><?php echo $CS ?></td>
            <td>Es una persona sumamente astuta y habilidosa para resolver cualquier tipo de problema 
              y/o dificultad que se presente en su vida privada como social. Es una persona madura para 
              enfrentar los retos y solventarlos rápidamente ante un razonamiento lógico. Tendrá el tacto 
              para dar varios consejos a quien se lo pida y solventará rápidamente este tipo de problema. 
              Tendrá algún número de amistades que le buscarán para hablar con ella y platicarle toda su vida. 
              Tendrá la habilidad de escuchar y observar a todas las personas que le rodean.</td>
          </tr>
        </tbody>
      </table>
      <br>
</body>
</html>
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
<script type="text/javascript" src="../forms/js/function.js"></script>
</html>
<?php
$_SESSION["answer"] = null;
$_SESSION["answer"] = array();
$_SESSION['gender'] = null;
?>