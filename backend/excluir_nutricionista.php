<?php

    include_once 'cardapio.class.php';

    if(isset($_POST['id'])){

        $nutri = new cardapio();

            $nutri->set_nutri_id($_POST['id']);

        $nutri->excluir_nutri();

    }

    header("location: ../frontend/nutricionistas.php");

?>
