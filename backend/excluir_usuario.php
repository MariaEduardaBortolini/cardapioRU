<?php

    include_once 'usuario.class.php';

    if(isset($_POST['id'])){
        
        $usuario = new usuario();

            $usuario->set_id($_POST['id']);

        $usuario->excluir();

    }

    header("location: ../frontend/usuarios.php");

?>
