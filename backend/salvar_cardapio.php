<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['tipo']) && isset($_POST['nutri']) && isset($_POST['dia']) && isset($_POST['item'])){
            
            $cardapio = new cardapio();

                if(isset($_POST['id'])){

                    $cardapio->set_card_id($_POST['id']);

                }

                $cardapio->set_card_tipo($_POST['tipo']);
                $cardapio->set_card_itens($_POST['item']);
                $cardapio->set_card_dia($_POST['dia']);
                $cardapio->set_card_nutri($_POST['nutri']);

                if(!$cardapio->verificar_dia()){

                    $cardapio->inserir_cardapio();

                }

    }

    header('location: ../frontend/cardapios.php');

?>
