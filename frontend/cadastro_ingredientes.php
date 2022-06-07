<?php

    include '../backend/cardapio.class.php';

    session_start();

    if($_SESSION['logado'] !== true){

        header('location: login.php');

    }

    if(isset($_POST['id'])){

        $i = new cardapio();
        $i->set_ingr_id($_POST['id']);

        $ingrs = $i->listar_ingr();

        foreach($ingrs as $ingr){

            $id = $ingr['id'];
            $nome = $ingr['nome'];
            $descr = $ingr['descr'];
            $calorias = $ingr['calorias'];

        }

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
        
            <div class="col bg-light p-5 rounded">
                <h1>Cadastro Ingredientes</h1>
                <form method="POST" action="../backend/salvar_ingrediente.php">
                    <?php if(isset($id)){ ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <?php } ?>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome" value="<?php if(isset($nome)){ echo $nome; } ?>">
                    </div>
                    <div class="mb-3">
                        <label for="descr" class="form-label">Descrição</label>
                        <textarea name="descr" class="form-control" placeholder="Informe uma descrição"><?php if(isset($descr)){ echo $descr; } ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="calorias" class="form-label">Calorias</label>
                        <input type="number" class="form-control" id="calorias" name="calorias" placeholder="Informe as calorias" value="<?php if(isset($calorias)){ echo $calorias; } ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button id="salvar" type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
            </div>
			
            <footer class="py-5">
                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                </div>
            </footer>			
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>

    </body>
</html>
