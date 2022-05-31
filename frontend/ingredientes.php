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
                <h1 class="h2">Itens</h1>
                <div class="pull-right"> 
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Novo
                    </button>
                </div>
            </div>			

            <div class="main-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Calorias</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            
                            $card = new cardapio();
                        
                            $ingredientes = $card->listar_ingr();
                        
                            foreach($ingredientes as $ingrediente){
                        ?>
                        
                        <tr>
                            <td><?php echo $ingrediente['nome']; ?></td>
                            <td><?php echo $ingrediente['descr']; ?></td>
                            <td><?php echo $ingrediente['calorias']; ?></td>
                            <td><a href="../backend/excluir_ingrediente.php?id=<?php echo $ingrediente['id'] ?>"><button class="btn btn-danger" data-bs-dismiss="modal">Excluir</button></a></td>
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

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Itens</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="../backend/salvar_ingrediente.php">
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome">
                                </div>
                                <div class="mb-3">
                                    <label for="descr" class="form-label">Descrição</label>
                                    <textarea name="descr" class="form-control" placeholder="Informe uma descrição"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="calorias" class="form-label">Calorias</label>
                                    <input type="number" class="form-control" id="calorias" name="calorias" placeholder="Informe as calorias">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                    <button id="salvar" type="submit" class="btn btn-success">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
    </body>
</html>
