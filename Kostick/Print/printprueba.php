<?php
include("../Collectors/CollectorCount.php");
include("../Collectors/CollectorSuggestions.php");
include("../Collectors/ICollector.php");

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
$DAACS = $collectorSuggestions->DAA($x);
$DAVCC = $collectorCount->DV($temp);
$DAVCS = $collectorSuggestions->DV($x);
$SESCC = $collectorCount->SES($temp);
$SESCS = $collectorSuggestions->SES($x);
?>
<tbody>

<table>
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
    <td><?php $DAACC[0];?></td>
    <td><?php $DAACC[1];?></td>
    <td><?php $DAACC[2];?></td>
    <td><?php $DAACC[3];?></td>
    <td><?php $DAACC[4];?></td>
    <td><?php $DAACC[5];?></td>
    <td><?php $DAACC[6];?></td>
    <td><?php $DAACC[7];?></td>
  </tr>
</table>

<table>
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
    <td><?php $DVCC[0];?></td>
    <td><?php $DVCC[1];?></td>
    <td><?php $DVCC[2];?></td>
    <td><?php $DVCC[3];?></td>
    <td><?php $DVCC[4];?></td>
    <td><?php $DVCC[5];?></td>
  </tr>
</table>

<table>
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
    <td><?php $SESCC[0];?></td>
    <td><?php $SESCC[1];?></td>
    <td><?php $SESCC[2];?></td>
    <td><?php $SESCC[3];?></td>
    <td><?php $SESCC[4];?></td>
    <td><?php $SESCC[5];?></td>
    <td><?php $SESCC[6];?></td>
  </tr>
</table>
</tbody>