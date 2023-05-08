<?php
/*include("../collector/CollectorCount.php");
session_start();
$temp = $_SESSION["answer"];
$get = $_POST["Q"];
array_push($temp, $get);
$_SESSION["answer"] = $temp;
*/
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
            <th>Reactivo</th>
            <th>Respuesta</th>
            <th>Reactivo</th>
            <th>Respuesta</th>
            <th>Reactivo</th>
            <th>Respuesta</th>
            <th>Reactivo</th>
            <th>Respuesta</th>
            <th>Reactivo</th>
            <th>Respuesta</th>
          </tr>
        </thead>
        <tbody>
        <tr>
    <td>1</td>
    <td></td>
    <td>15</td>
    <td></td>
    <td>31</td>
    <td></td>
    <td>46</td>
    <td></td>
    <td>612</td>
    <td></td>
       </tr>

        </tbody>
      </table>
</body>
</html>

<?php
$_SESSION["answer"] = null;
$_SESSION["answer"] = array();
$_SESSION['gender'] = null;
?>