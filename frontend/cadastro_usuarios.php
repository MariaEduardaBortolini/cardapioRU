<?php

    include '../backend/usuario.class.php';

    session_start();

    if($_SESSION['logado'] !== true){

        header('location: login.php');

    }

    if(isset($_GET['id'])){

        $user = new usuario();
        $user->set_id($_GET['id']);

        $usuarios = $user->listar();

        foreach($usuarios as $usuario){

            $id = $usuario['id'];
            $nome = $usuario['nome'];
            $email = $usuario['email'];

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
                <h1>Cadastro Usuários</h1>
                <form method="POST" action="../backend/salvar_usuario.php">
                    <?php if(isset($id)){ ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <?php } ?>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o nome" value="<?php if(isset($nome)){ echo $nome; } ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Informe o email" value="<?php if(isset($email)){ echo $email; } ?>">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="text" class="form-control" name="senha" id="senha" placeholder="Informe a senha">
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

    </body>
</html>
