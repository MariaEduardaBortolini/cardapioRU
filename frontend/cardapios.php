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
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="cardapio.html">Cardápio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="itens.html">Itens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nutricionistas.html">Nutricionistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="usuarios.html">Usuários</a>
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
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Cardápios</h1>
                <div class="pull-right"> 
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Novo
                    </button>
                </div>
            </div>			

            <div class="main-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Data</th>
                            <th>Calorias</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
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
                            <h5 class="modal-title" id="exampleModalLabel">Cardápio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <form method="POST" action="../backend/salvar_cardapio.php">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="tipo" class="form-label">Tipo</label>
                                        <select class="form-control itens" id="tipo" name="tipo">
                                            <option value="cafe">Café da Manhã</option>
                                            <option value="almoco">Almoço</option>
                                            <option value="janta">Janta</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="data" class="form-label">Data</label>
                                        <input type="date" name="dia">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nutri" class="form-label">Nutricionista</label>
                                        <select class="form-control" id="nutri" name="nutri">
                                            <option value="0" selected>Selecione uma nutricionista</option>
                                            <?php
                                                    
                                                $card = new cardapio();

                                                $nutris = $card->listar_nutri();

                                                foreach($nutris as $nutri){

                                            ?>
                                                <option value="<?php echo $nutri['id']; ?>"><?php echo $nutri['nome']; ?></option>
                                            <?php

                                                }

                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3" id="select_item">
                                        <label for="itens" class="form-label">Ingredientes</label>
                                        <button class="btn" id="mais">Adiconar Mais</button>
                                        <select class="form-control itens" id="item0">
                                            <option value="0" selected>Selecione um item</option>
                                            <?php
                                                    
                                                $card = new cardapio();

                                                $itens = $card->listar_itens();

                                                foreach($itens as $item){

                                            ?>
                                                <option value="<?php echo $item['id']; ?>"><?php echo $item['nome']; ?></option>
                                            <?php

                                                }

                                            ?>
                                        </select>
                                    </div>
                                    <input type="hidden" name="item" id="item">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                        <button id="salvar" type="button" class="btn btn-success">Salvar</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
        <script>
            var btn = document.getElementById('mais');
            let item = document.getElementById('item0');
            var c = 1;
            btn.onclick = function(){

                let clonedItem = item.cloneNode(true);
                clonedItem.id = 'item' + c;

                document.getElementById('select_item').appendChild(clonedItem);

                c++;

                return false;

            }

            var btn_s = document.getElementById('salvar');
            btn_s.onclick = function(){

                var item_array = document.getElementsByClassName('itens');

                var novo_json = {
                    
                }
                
                for (let i = 0; i < item_array.length; i++) {
                    novo_json[i] = item_array[i].value;
                }

                document.getElementById('item').value = JSON.stringify(novo_json);

            }
        </script>
    </body>
</html>