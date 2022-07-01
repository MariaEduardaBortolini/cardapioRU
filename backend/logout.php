<?php

    session_start();

    if(isset($_SESSION['logado'])){

        $_SESSION['logado'] = false;

        $_SESSION['nome_usuario'] = '';

        header('location: ../frontend/index.php');

    }

?>