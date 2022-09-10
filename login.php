<?php
    // Carlos André Sánchez Malpica 19270982 
    
    // Input
    $user = isset($_POST["user"]) ? $_POST["user"] : "";
    $pass = isset($_POST["pass"]) ? $_POST["pass"] : "";

    //Usuarios
    $user_admin = "admin";
    $pass_admin = "asd";

    $user_client = "cliente";
    $pass_client = "123";

    $role = "";
    $success = false;

    if ($user == $user_admin && $pass == $pass_admin) {        
        $success = true;
        $role = "admin";        
    } else if ($user == $user_client && $pass == $pass_client) {         
        $success = true;
        $role = "client";
    } else {        
        $success = false;
        $role = "";
    }

    if ($success) {        
        session_start();
        $_SESSION["usuario"] = $user;        
        $_SESSION["rol"] = $role;    
        $message = "Inicio de sesión correcto.";

        if ($role == "admin") {
            header("Location: home_admin.php");
        } else if ($role == "client") {
            header("Location: home_client.php");
        }

    }else {
        $message = "Inicio de sesión incorrecto";

        header("Location: index.php?error=$message");
   }

    // $response = [
    //     "status" => $success,        
    //     "user_rol" => $role,
    //     "message" => $message,
    // ];

    // echo json_encode($response);

?>


