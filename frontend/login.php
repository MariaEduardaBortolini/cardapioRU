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
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cardapios.php">Cardápio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="itens.php">Itens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nutricionistas.php">Nutricionistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="usuarios.php">Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.php" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastre-se</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="container">
        
            <div class="col bg-light p-5 rounded">
                <h1>Login</h1>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Informe seu email">
                            </div>
                            <div class="mb-3">
                                 <label for="senha" class="form-label">Senha</label>
                                 <input type="password" class="form-control" id="senha" placeholder="Informe sua senha">
                            </div>
                            <div class="modal-footer">
                                <button id="salvar" type="button" class="btn btn-outline-success">Acessar</button>
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