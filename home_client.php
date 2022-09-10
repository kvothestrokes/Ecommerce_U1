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
            <div id="lista_productos">
                <div class="producto">
                    <img src="https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg" alt="producto1">
                    <h3> Backpack, Fits 15 Laptops</h3>                                        
                    <p>$109.95</p>
                    <button onclick="addToCart('Backpack, Fits 15 Laptops',109.95, `https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg` )">Agregar al carrito</button>
                </div>

                <div class="producto">
                    <img src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg" alt="producto1">
                    <h3>Mens Casual Slim Fit T-Shirts</h3>
                    <p>$22.3</p>
                    <button onclick="addToCart('Mens Casual Slim Fit T-Shirts',22.3,`https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg`)">Agregar al carrito</button>
                </div>

                <div class="producto">
                    <img src="https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg" alt="producto1">
                    <h3>Mens Cotton Jacket</h3>                    
                    <p>$55.99</p>
                    <button onclick="addToCart('Mens Cotton Jacket',55.99, `https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg` )">Agregar al carrito</button>
                </div>

                <div class="producto">
                    <img src="https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg" alt="producto1">
                    <h3>Mens Casual Slim Fit</h3>                    
                    <p>$15.99</p>
                    <button onclick="addToCart('Mens Casual Slim Fit', 15.99, `https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg`)">Agregar al carrito</button>
                </div>

                <div class="producto">
                    <img src="https://fakestoreapi.com/img/61pHAEJ4NML._AC_UX679_.jpg" alt="producto1">
                    <h3>Womens T Shirt Casual </h3>                    
                    <p>$12.99</p>
                    <button onclick="addToCart('test','a')">Agregar al carrito</button>
                </div>

                <div class="producto">
                    <img src="https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg" alt="producto1">
                    <h3>Dragon Station Chain Bracelet</h3>                    
                    <p>$695</p>
                    <button onclick="addToCart('test','a')">Agregar al carrito</button>
                </div>

                <div class="producto">
                    <img src="https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg" alt="producto1">
                    <h3>Solid Gold Petite Micropave </h3>                    
                    <p>$168</p>
                    <button onclick="addToCart('test','a')">Agregar al carrito</button>
                </div>

                <div class="producto">
                    <img src="https://fakestoreapi.com/img/71YAIFU48IL._AC_UL640_QL65_ML3_.jpg" alt="producto1">
                    <h3>White Gold Plated Princess</h3>                    
                    <p>$9.99</p>
                    <button onclick="addToCart('test','a')">Agregar al carrito</button>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.32/dist/sweetalert2.all.min.js"></script>
    <script>            
        
        var productos = [];

        function addToCart(producto, precio, src){
            
            let product = {
                producto: producto,
                precio: precio,
                src: src
            }

            productos.push(product);
            localStorage.setItem("productos", JSON.stringify(productos));

            Swal.fire({
                title: 'Producto agregado al carrito',                
                icon: 'success',
                confirmButtonText: 'Ok'
            })            

        }
    </script>
</html>


