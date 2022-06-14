<?php

    include_once 'cardapio.class.php';

    if(isset($_GET['id'])){

        $nutri = new cardapio();

            $nutri->set_nutri_id($_GET['id']);

        $nutri->excluir_nutri();

    }

    header("location: ../frontend/nutricionistas.php");

?>
