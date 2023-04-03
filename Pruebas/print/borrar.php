<!DOCTYPE html>
<html lang="es">
<?php
// Valores con PHP. Estos podrían venir de una base de datos o de cualquier lugar del servidor
$etiquetas = ["Enero", "Febrero", "Marzo", "Abril"];
$datosVentas = [5000, 1500, 8000, 5102];
?>

<head>
    <meta charset="UTF-8">
    <title>Gráficas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="x.css">
</head>

<body>
    <h1>Gráfica creada con PHP</h1>
    <canvas id="grafica" width = "1" height = "1">  </canvas>
    <script type="text/javascript">
        
        const $grafica = document.querySelector("#grafica");
        // Pasaamos las etiquetas desde PHP
        const etiquetas = <?php echo json_encode($etiquetas) ?>;
        // Podemos tener varios conjuntos de datos. Comencemos con uno
        const datosVentas2020 = {
            label: "Ventas por mes",
            // Pasar los datos igualmente desde PHP
            data: <?php echo json_encode($datosVentas) ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
            borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
            borderWidth: 1, // Ancho del borde
        };
        new Chart($grafica, {
            type: 'bar', // Tipo de gráfica
            data: {
                labels: etiquetas,
                datasets: [
                    datosVentas2020,
                    // Aquí más datos...
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