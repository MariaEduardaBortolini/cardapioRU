<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['nome']) && isset($_POST['crn'])){

        $nutricionista = new cardapio();

            $nutricionista->set_nutri_nome($_POST['nome']);
            $nutricionista->set_nutri_crn($_POST['crn']);

        $nutricionista->inserir_nutri();

        header('location: ../frontend/nutricionistas.php');

    }

?>