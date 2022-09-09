<?php
    //  Carlos André Sánchez Malpica 19270982     
    session_start();
    $usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "";
   
    echo "Hola $usuario";    

?>

<html>
    <head>
        <title>Mamazon</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="estilos.css">

    </head>
    <body>
        <div id="wrapper-login">
            <img src="logo.jpeg" width="250px" height="75px" style="margin:10px" alt="mamazon">
            <form action="login.php" method="post">
                <span id="sign_in" > Inicia Sesión </span>
                <input class="login_input" type="text" name="user" placeholder="Usuario">
                <input class="login_input" type="password" name="pass" placeholder="Contraseña">
                <input id="btn_login" type="submit" value="Iniciar sesión">
            </form>
        </div>
    </body>
</html>


