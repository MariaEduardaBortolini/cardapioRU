<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['nome']) && isset($_POST['descr']) && isset($_POST['ingr'])){

        $item = new cardapio();

            if(isset($_POST['id'])){

                $item->set_item_id($_POST['id']);

            }

            $item->set_item_nome($_POST['nome']);
            $item->set_item_descr($_POST['descr']);
            $item->set_item_ingr($_POST['ingr']);

        $item->inserir_item();

    }

    header('location: ../frontend/itens.php');

?>
