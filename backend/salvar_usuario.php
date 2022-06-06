<?php

    include_once 'usuario.class.php';

    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])){

        $usuario = new usuario();

        $usuario->set_nome($_POST['nome']);
        $usuario->set_email($_POST['email']);
        $usuario->set_senha($_POST['senha']);

        $usuario->inserir();

    }

    header('Location: ../frontend/usuarios.php');

?>
