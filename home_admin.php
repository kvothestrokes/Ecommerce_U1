<?php
    session_start();
    $usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "";      
?>

<html>
    <head>
        <title>Mamazon</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <div id="wrapper">
            <nav>
                <ul>       
                    <li><img src="logo.jpeg" width="100px" height="35px" style="margin:0;padding:0" alt="mamazon"></li>                                               
                    <li style="font-size:20px;color:blue">Bienvenido, <?php echo $usuario ?></li>
                    <li><a href="index.php">cerrar sesión</a></li>
                </ul>
            </nav>
            <div id="dashboard">
                <div id="menud">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li style="background-color: cornflowerblue;"><a href="#">Estadísticas</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Usuarios</a></li>
                        <li><a href="#">Pedidos</a></li>
                        <li><a href="#">Categorias</a></li>
                    </ul>
                </div>
                <div id="infod">
                    <div id="chart1">
                        <canvas id="myChart2"></canvas>
                    </div>
                    <div id="chart2">
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // figura1
        const labels = [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'            
        ];

        const data = {
            labels: labels,
            datasets: [{
            label: 'Ventas del año',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [150, 100, 520, 200, 205, 309, 457, 304, 110],
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {}
        };

        const myChart = new Chart(
            document.getElementById('myChart1'),
            config
        );


        // figura2
        const labels2 = [
            'Semana 1',
            'Semana 2',
            'Semana 3',
            'Semana 4',            
        ];

        const data2 = {
            labels: labels2,
            datasets: [{
            label: 'Ventas Del Mes',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [25, 20, 25, 30],
            }]
        };

        const config2 = {
            type: 'bar',
            data: data2,
            options: {}
        };

        const myChart2 = new Chart(
            document.getElementById('myChart2'),
            config2
        );

    </script>
</html>