<?php

    include_once 'login.class.php';

    // verifica se ja existe o login e, se não existe, redireciona para a página de login
    // deve ser colado no topo das páginas "proibidas"

    if($_SESSION['logado'] !== true){

        // altere para o nome do arquivo onde sera feito o login
        header('login.php');

    }else{

        // carrega o resto da pagina aqui

    }
    
    // parte para o arquivo no qual sera enviado o formulário com os dados para login
    if(isset($_POST['email']) && isset($_POST['senha'])){

        $login = new login();

        $login->set_email($_POST['email']);
        $login->set_senha($_POST['senha']);

        if($login->verificar()){

            header('index.php');

        }else{

            // volta para o login caso tenha algo errado
            header('login.php');

        }

    }

?>