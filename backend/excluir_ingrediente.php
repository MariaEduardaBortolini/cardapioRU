<?php

    include_once 'cardapio.class.php';

    if(isset($_GET['id'])){

        $ingrediente = new cardapio();

            $ingrediente->set_ingr_id($_GET['id']);

        $ingrediente->excluir_ingr();

    }

    header("location: ../frontend/ingredientes.php");

?>
