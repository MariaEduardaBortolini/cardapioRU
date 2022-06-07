<?php

    include '../backend/cardapio.class.php';

    session_start();

    if($_SESSION['logado'] !== true){

        header('location: login.php');

    }

    if(isset($_POST['id'])){

        $c = new cardapio();
        $c->set_card_id($_POST['id']);

        $cards = $c->listar_cardapio();

        foreach($cards as $card){

            $tipo = $card['tipo'];
            $dia = $card['dia'];
            $nutri1 = $card['nutri'];
            $itens1 = $card['itens'];

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
                <h1>Cadastro Caerdápios</h1>
                <form method="POST" action="../backend/salvar_cardapio.php">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo</label>
                            <select class="form-control" id="tipo" name="tipo">
                                <option value="cafe" <?php if(isset($tipo)){ if($tipo == 'cafe'){ echo 'selected'; } } ?>>Café da Manhã</option>
                                <option value="almoco" <?php if(isset($tipo)){ if($tipo == 'almoco'){ echo 'selected'; } } ?>>Almoço</option>
                                <option value="janta" <?php if(isset($tipo)){ if($tipo == 'janta'){ echo 'selected'; } } ?>>Janta</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="data" class="form-label">Data</label>
                            <input type="date" name="dia">
                        </div>
                        <div class="mb-3">
                            <label for="nutri" class="form-label">Nutricionista</label>
                            <select class="form-control" id="nutri" name="nutri">
                                <option value="0" <?php if(!isset($nutri1){ echo 'selected'; } ?>>Selecione uma nutricionista</option>
                                <?php

                                    $card = new cardapio();
                                                                                            
                                    $itens = $card->listar_item();

                                    $nutris = $card->listar_nutri();

                                    foreach($nutris as $nutri){

                                ?>
                                    <option value="<?php echo $nutri['id']; ?>" <?php if(isset($nutri1)){ if($nutri1 == $nutri['id']){ echo 'selected'; } ?>><?php echo $nutri['nome']; ?></option>
                                <?php

                                    }

                                ?>
                            </select>
                        </div>
                        <div class="mb-3" id="select_item">
                            <label for="itens" class="form-label">Itens</label>
                            <button class="btn" id="mais">Adiconar Mais</button>
                            <?php

                                if(isset($itens1)){

                                    foreach($itens1 as item1){
                            
                            ?>
                                <select class="form-control itens" id="item0">
                                    <option value="0" selected>Selecione um item</option>
                                    <?php

                                        foreach($itens as $item){

                                    ?>
                                        <option value="<?php echo $item['id']; ?>" <?php if(isset($item1)){ if($item1 == $item['id']){ echo 'selected'; } ?>><?php echo $item['nome']; ?></option>
                                    <?php

                                        }

                                    ?>
                                </select>
                            <?php 
                                    }

                                }else{
                            
                            ?>

                            <select class="form-control itens" id="item0">
                                <option value="0" selected>Selecione um item</option>
                                <?php

                                    foreach($itens as $item){

                                ?>
                                    <option value="<?php echo $item['id']; ?>"><?php echo $item['nome']; ?></option>
                                <?php

                                    }

                                ?>
                            </select>

                            <?php

                                }
                            
                            ?>
                        </div>
                        <input type="hidden" name="item" id="item">
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button id="salvar" type="submit" class="btn btn-success">Salvar</button>
                        </div>
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
                    if(item_array[i].value != 0){
                        novo_json[i] = item_array[i].value;
                    }
                }

                document.getElementById('item').value = JSON.stringify(novo_json);

            }

        </script>

    </body>
</html>
