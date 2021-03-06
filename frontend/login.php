<?php

    session_start();

    if(isset($_SESSION['logado'])){

        if($_SESSION['logado'] === true){

            header('location: cardapios.php');

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
        
        <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Restaurante</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                      </li>
                  </ul>
                  <form method="GET" action="" class="d-flex">
                      <input class="form-control me-2" type="search" name="p" placeholder="Pesquisar" aria-label="Pesquisar">
                      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                  </form>
                </div>
            </div>
        </nav>

        <main class="container">
        
            <div class="col bg-light p-5 rounded">
                <h1>Login</h1>
                        <form method="POST" action="../backend/verificador_login.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Informe seu email">
                            </div>
                            <div class="mb-3">
                                 <label for="senha" class="form-label">Senha</label>
                                 <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe sua senha">
                            </div>
                            <div class="modal-footer">
                                <button id="salvar" type="submit" class="btn btn-outline-success">Acessar</button>
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
