<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['dia_antigo']) && isset($_POST['dia_novo']) && isset($_POST['tipo'])){
            
            $cardapio = new cardapio();

            $cardapio->set_card_tipo($_POST['tipo']);
            $cardapio->set_card_dia($_POST['dia_antigo']);

            if($cardapio->verificar_dia()){

                $cardapio->clonar_cardapio($_POST['dia_novo']);

            }   

    }

    header('location: ../frontend/cardapios.php');

?>
