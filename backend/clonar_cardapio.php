<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['dia_antigo']) && isset($_POST['dia_novo']) && isset($_POST['tipo'])){
            
            $cardapio = new cardapio();

            $cardapio->clonar_cardapio($_POST['dia_antigo'], $_POST['dia_novo'], $_POST['tipo']);

    }

    header('location: ../frontend/cardapios.php');

?>
