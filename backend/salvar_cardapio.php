<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['tipo']) && isset($_POST['nutri']) && isset($_POST['dia'])){

        $cardapio = new cardapio();

            $cardapio->set_card_tipo($_POST['tipo']);
            $cardapio->set_card_dia($_POST['dia']);
            $cardapio->set_card_nutri($_POST['nutri']);

        $cardapio->inserir_cardapio();

    }

?>