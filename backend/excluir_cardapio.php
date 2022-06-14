<?php

    include_once 'cardapio.class.php';

    if(isset($_GET['id'])){

        $card = new cardapio();

            $card->set_card_id($_GET['id']);

        $card->excluir_cardapio();

    }

    header("location: ../frontend/cardapios.php");

?>