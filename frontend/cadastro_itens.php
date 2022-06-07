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
        
            <div class="col bg-light p-5 rounded">
                <h1>Cadastro Itens</h1>
                <form method="POST" action="../backend/salvar_item.php">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome">
                    </div>
                    <div class="mb-3">
                        <label for="descr" class="form-label">Descrição</label>
                        <input type="text" class="form-control" id="descr" name="descr" placeholder="Informe a descrição">
                    </div>
                    <div class="mb-3" id="select_ingr"> 
                        <label for="ingrs" class="form-label">Ingredientes</label>
                        <button class="btn" id="mais">Adiconar Mais</button>
                        <select class="form-control ingrs" id="ingr0">
                            <option value="0" selected>Selecione um ingrediente</option>
                            <?php

                                $card = new cardapio();
                                                        
                                $ingredientes = $card->listar_ingr();

                                foreach($ingredientes as $ingrediente){

                            ?>
                                <option value="<?php echo $ingrediente['id']; ?>"><?php echo $ingrediente['nome']; ?></option>
                            <?php

                                }

                            ?>
                        </select>
                    </div> 
                        <input type="hidden" name="ingr" id="ingr">
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
        <script>

            var btn = document.getElementById('mais');
            let ingr = document.getElementById('ingr0');
            var c = 1;

            btn.onclick = function(){

                let clonedIngr = ingr.cloneNode(true);
                clonedIngr.id = 'ingr' + c;

                document.getElementById('select_ingr').appendChild(clonedIngr);

                c++;

                return false;

            }

            var btn_s = document.getElementById('salvar');

            btn_s.onclick = function(){

                var ingr_array = document.getElementsByClassName('ingrs');

                var novo_json = {
                    
                }
                
                for (let i = 0; i < ingr_array.length; i++) {
                    if(ingr_array[i].value != 0){
                        novo_json[i] = ingr_array[i].value;
                    }
                }

                document.getElementById('ingr').value = JSON.stringify(novo_json);

            }
            
        </script>

    </body>
</html>
