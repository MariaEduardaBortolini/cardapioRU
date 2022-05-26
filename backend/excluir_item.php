<?php

    include_once 'cardapio.class.php';

    if(isset($_GET['id'])){

        $item = new cardapio();

            $item->set_item_id($_GET['id']);

        $item->excluir_item();

    }

    header("location: ../frontend/itens.php");

?>
