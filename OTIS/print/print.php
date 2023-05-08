<?php
include("../collector/CollectorCount.php");
session_start();
$temp = $_SESSION["answer"];
$get = $_POST["Q"];
array_push($temp, $get);
$_SESSION["answer"] = $temp;


?>

<html>
<head>
    <link rel="stylesheet" href="table.css">
</head>
<body>
<br>
<hr>
    <table class="content-table">
    <div class="col-md-12 text-center text-success"><h3>RESULTADOS</h3></div>

        <thead>
          <tr>
            <th>PERSONALIDAD</th>
            <th>%</th>
          </tr>
        </thead>
        <tbody>
        <tr>
    <td>Evitación</td>
    <td><?php echo $evitation;?></td>
  </tr>
  <tr>
    <td>Dependiente</td>
    <td><?php echo $dependent;?></td>
  </tr>
  <tr>
    <td>Obsesivo</td>
    <td><?php echo $obsessive;?></td>
  </tr>
  <tr>
    <td>Pasivo-Agresivo</td>
    <td><?php echo $passive_agressive;?></td>
  </tr>
  <tr>
    <td>Pasivo-Dependiente</td>
    <td><?php echo $passive_dependent;?></td>
  </tr>
  <tr>
    <td>Paranoide</td>
    <td><?php echo $paranoid;?></td>
  </tr>
  <tr>
    <td>Esquizotipico</td>
    <td><?php echo $schizotypal;?></td>
  </tr>
  <tr>
    <td>Esquizoide</td>
    <td><?php echo $schizoid;?></td>
  </tr>
  <tr>
    <td>Histriónico</td>
    <td><?php echo $histrionic;?></td>
  </tr>
  <tr>
    <td>Narcisista</td>
    <td><?php echo $narcissistic;?></td>
  </tr>
  <tr>
    <td>Limite</td>
    <td><?php echo $limit;?></td>
  </tr>
  <tr>
    <td>Antisocial</td>
    <td><?php echo $antisocial;?></td>
  </tr>
        </tbody>
      </table>
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