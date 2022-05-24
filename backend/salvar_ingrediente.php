<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['nome']) && isset($_POST['descr']) && isset($_POST['calorias'])){

        $ingrediente = new cardapio();

            $ingrediente->set_ingr_nome($_POST['nome']);
            $ingrediente->set_ingr_descr($_POST['descr']);
            $ingrediente->set_ingr_calorias($_POST['calorias']);

        $ingrediente->inserir_ingr();

    }

    header('location: ../frontend/ingredientes.php');

?>
