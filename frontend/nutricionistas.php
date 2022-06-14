<?php

    include '../backend/cardapio.class.php';

    session_start();

    if($_SESSION['logado'] !== true){

        header('location: login.php');

    }

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Restaurante!</title>
    </head>

    <body>
        
        <?php
            include_once 'header.php';
        ?>

        <main class="container">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Nutricionistas</h1>
                <div class="pull-right"> 
                    <a href="cadastro_nutricionistas.php">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                            Novo
                        </button>
                    </a>
                </div>
            </div>			

            <div class="main-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CRN</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                            
                            $card = new cardapio();
                        
                            if(isset($_GET['p'])){
                                $nutris = $card->busca_nutri($_GET['p']);
                            }else{
                                $nutris = $card->listar_nutri();
                            }
                          
                        
                            foreach($nutris as $nutri){
                        ?>
                        
                        <tr>
                            <td><?php echo $nutri['nome']; ?></td>
                            <td><?php echo $nutri['crn']; ?></td>
                            <td>
                                <button type="button" class="btn btn-danger" onclick="exclu('<?php echo $nutri['id']; ?>')">Excluir</button>
                                <button type="button" class="btn btn-primary" onclick="edit('<?php echo $nutri['id']; ?>')">Editar</button>
                            </td>
                        </tr>
                        
                        <?php
                            }
                        ?>


                    </tbody>
                </table>
            </div>

            <footer class="py-5">
                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                </div>
            </footer>

        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
        <script>
            
            function exclu(n){

                window.location = '../backend/excluir_nutricionista.php?id=' + n;

            }

            function edit(n){

                window.location = 'cadastro_nutricionistas.php?id=' + n;

            }

        </script>
    </body>
</html>
