<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['id'])){

        $card = new cardapio();

            $card->set_card_id($_POST['id']);

        $card->excluir_cardapio();

    }

    header("location: ../frontend/cardapios.php");

?>