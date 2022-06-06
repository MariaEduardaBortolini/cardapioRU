<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['id'])){

        $ingrediente = new cardapio();

            $ingrediente->set_ingr_id($_POST['id']);

        $ingrediente->excluir_ingr();

    }

    header("location: ../frontend/ingredientes.php");

?>
