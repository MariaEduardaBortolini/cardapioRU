<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['id'])){

        $item = new cardapio();

            $item->set_item_id($_POST['id']);

        $item->excluir_item();

    }

    header("location: ../frontend/itens.php");

?>
