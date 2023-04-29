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
<link href='Tablas.css' rel='stylesheet' type='text/css'>
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
