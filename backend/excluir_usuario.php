<?php

    include_once 'usuario.class.php';

    if(isset($_GET['id'])){
        
        $usuario = new usuario();

            $usuario->set_id($_GET['id']);

        $usuario->excluir();

    }

    header("location: ../frontend/usuarios.php");

?>
