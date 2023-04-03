<?php
include("Connection.php");

session_start();
$_SESSION['gender'] = 'Masculino';
$_SESSION['answer'] = array();

for($i = 0; $i < 568; $i++){
    if($i%2 != 0){
        array_push($_SESSION['answer'], 'true');
    }else{
        array_push($_SESSION['answer'], 'false');
    }
}

$conexion = new Connection();
$AnsB = $conexion->scoreBasicScales();
$AnsIB = $conexion->interpretationBasicScales();
$AnsIBA = $conexion->interpretationAditional();
$AnsC = $conexion->scoreContentScales();
$AnsIC = $conexion->interpretationContentScales();
$AnsS = $conexion->scoreSupplementaryScales();
$AnsIS = $conexion->interpretationSupplementaryScales();

for ($i = 0; $i < 13; ++$i)
{                 
    $html = $AnsIB[$i];
    print $html;
}

for ($i = 0; $i < 15; ++$i)
{                 
    $html = $AnsIC[$i];
    print $html;
}

for ($i = 0; $i < 15; ++$i)
{                 
    $html = $AnsIC[$i];
    print $html;
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<div>
  <canvas id="myChart"></canvas>
</div>
<canvas id="myChart" width="400" height="400"></canvas>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['rojo', 'azul'],
            datasets: [{
                label: 'colores',
                data: [5, 10, 5],
                backgroundColor: rgba(54, 162, 235, 0.2),
                borderColor: rgba(54, 162, 235, 1) ,
                borderWidth: 1,
            }]
        },

        options: {
            title: {
                text: "Grafica 1",
                display: true,
            },
            events: [],
            legend: {
                display: true,
            },
            tooltips: {
                mode: ''
            },
            layout: {},
            animation: {}
        }
    });
</script>
