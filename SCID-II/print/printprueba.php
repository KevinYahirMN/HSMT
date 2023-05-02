<?php
include("../collector/CollectorCount.php");
session_start();
$temp = array();

for($i = 0; $i < 120; $i++){
  if($i%2 == 0){
    array_push($temp, 'true');
  }else{
    array_push($temp, 'false');
  }
}

$collectorCount = new CollectorCount();
$evitation = $collectorCount->evitation($temp);
$dependent = $collectorCount->dependent($temp);
$obsessive = $collectorCount->obsessive($temp);
$passive_agressive = $collectorCount->passive_agressive($temp);
$passive_dependent = $collectorCount->passive_dependent($temp);
$paranoid = $collectorCount->paranoid($temp);
$schizotypal = $collectorCount->schizotypal($temp);
$schizoid = $collectorCount->schizoid($temp);
$histrionic = $collectorCount->histrionic($temp);
$narcissistic = $collectorCount->narcissistic($temp);
$limit = $collectorCount->limit($temp);
$antisocial = $collectorCount->antisocial($temp);
?>

  <table border="1" align="center">
  <div class="col-md-12 text-center text-success"><h3>RESULTADOS</h3></div>
  <tr>
    <th>PERSONALIDAD</th>
    <th>%</th>
  </tr>
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
    <td>Pasivo-Denpendiente</td>
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
  
</table>
<?php
$_SESSION["answer"] = null;
$_SESSION["answer"] = array();
$_SESSION['gender'] = null;
?>