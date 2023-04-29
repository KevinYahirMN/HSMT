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
	<head>
	</head>
	<body>
		<table border="1">
		<caption>Titulo de la tabla</caption>
		<tr>
			<th>Col.Cab.1</th>
			<th>Col.Cab.2</th>
		</tr>
		<tr>
			<td>Celda 1</td>
			<td>Celda 2</td>
		</tr>
		</table>
    
  <table border="1">
  <tr>
    <th>CATEGORIA</th>
    <td>LIDERAZGO</td>
    <td></td>
    <td></td>
    <td>SUBORDINACIÓN</td>
    <td></td>
    <td>ADAPTACIÓN AL TRABAJO</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>NOMBRE</th>
    <td>ACTV. DE LIDER</td>
    <td>CONTROL OTROS</td>
    <td>TOMA DECISION</td>
    <td>APOYO SUPERVISION</td>
    <td>APEGO REGLAS</td>
    <td>ORGANIZADO</td>  
    <td>TRAB. DETALLES</td>
    <td>TEORICO</td>
  </tr>
  <tr>
    <th>CLAVE</th>
    <td>L</td>
    <td>P</td>
    <td>I</td>
    <td>F</td>
    <td>W</td>
    <td>C</td>
    <td>D</td>
    <td>R</td>
  </tr>
  <tr>
    <th>PUNTUACIÓN</th>
    <td><?php echo $DAACC[0];?></td>
    <td><?php echo $DAACC[1];?></td>
    <td><?php echo $DAACC[2];?></td>
    <td><?php echo $DAACC[3];?></td>
    <td><?php echo $DAACC[4];?></td>
    <td><?php echo $DAACC[5];?></td>
    <td><?php echo $DAACC[6];?></td>
    <td><?php echo $DAACC[7];?></td>
  </tr>
</table>

<table border="1">
  <tr>
    <th>CATEGORIA</th>
    <td>MODO DE VIDA</td>
    <td></td>
    <td>GRADO DE ENERGIA</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>NOMBRE</th>
    <td>ACTIVO</td>
    <td>VIGOROSO</td>
    <td>TERMINA TAREAS</td>
    <td>ACTIVIDAD INTENSA</td>
    <td>LOGROS</td>
  </tr>
  <tr>
    <th>CLAVE</th>
    <td>T</td>
    <td>V</td>
    <td>N</td>
    <td>G</td>
    <td>A</td>
  </tr>
  <tr>
    <th>PUNTUACIÓN</th>
    <td><?php echo $DVCC[0];?></td>
    <td><?php echo $DVCC[1];?></td>
    <td><?php echo $DVCC[2];?></td>
    <td><?php echo $DVCC[3];?></td>
    <td><?php echo $DVCC[4];?></td>
  </tr>
</table>

<table border="1">
  <tr>
    <th>CATEGORIA</th>
    <td>NATURALEZA SOCIAL</td>
    <td></td>
    <td></td>
    <td></td>
    <td>NATURALEZA EMOCIONAL</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <th>NOMBRE</th>
    <td>SER NOTIFICADO</td>
    <td>APERTURADA SOCIAL</td>
    <td>AFILIATIVO</td>
    <td>AFECTO</td>
    <td>PASIVO</td>  
    <td>RESTRINGIDO</td>
    <td>RESISTENTE</td>
  </tr>
  <tr>
    <th>CLAVE</th>
    <td>X</td>
    <td>S</td>
    <td>B</td>
    <td>O</td>
    <td>K</td>
    <td>E</td>
    <td>Z</td>
  </tr>
  <tr>
    <th>PUNTUACIÓN</th>
    <td><?php echo $SESCC[0];?></td>
    <td><?php echo $SESCC[1];?></td>
    <td><?php echo $SESCC[2];?></td>
    <td><?php echo $SESCC[3];?></td>
    <td><?php echo $SESCC[4];?></td>
    <td><?php echo $SESCC[5];?></td>
    <td><?php echo $SESCC[6];?></td>
  </tr>
</table>
<table class="default">

  <tr>

    <td>Celda 1</td>

    <td>Celda 2</td>

    <td>Celda 3</td>

  </tr>

  <tr>

    <td>Celda 4</td>

    <td>Celda 5</td>

    <td>Celda 6</td>

  </tr>
</table>
</body>
</html>
