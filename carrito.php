<?php
    //  Carlos André Sánchez Malpica 19270982     
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
                    <li><a href="home_client.php">Productos</a></li>
                    <li><a href="carrito.php">Carrito</a></li>                    
                    <li style="font-size:20px;color:blue">Bienvenido, <?php echo $usuario ?></li>
                    <li><a href="index.php">Cerrar Sesión</a></li>
                </ul>
            </nav>

            
            <!-- Productos -->
            <div id="carrito">
                
            </div>
            <h3 class="total">SubTotal: <span id="subtotal"></span> </h3>
            <h3 class="total" style="padding-bottom: 30px">Total (iva 16%): <span id="total"></span> </h3>
    </body> 
    
    <script>

        localStorage.getItem("productos");        
        var productos = localStorage.getItem("productos");
        if(productos == null){
            productos = [];
        }else{
            productos = JSON.parse(productos);
        }
       
        var total = 0, subtotal = 0;
        var productos_html = "";
        console.log(productos);
        for(var i = 0; i < productos.length; i++){
            subtotal += productos[i].precio;            
            var proc = `
                <div class="item">
                    <img src="${productos[i].src}" alt="producto1">
                    <div class="info">
                        <h3> ${productos[i].producto}</h3>                                        
                        <p>$${productos[i].precio}</p>   
                        <button>Eliminar</button>                 
                    </div>
                </div>
            `;

            productos_html += proc;
            console.log(productos_html);
        }
        
        var carrito = document.getElementById("carrito");
        carrito.innerHTML = productos_html;

        var subtotaldiv = document.getElementById("subtotal");
        subtotaldiv.innerHTML = subtotal;
        
        var totaldiv = document.getElementById("total");
        totaldiv.innerHTML =  "" + subtotal * 1.16;



    </script>

</html>


