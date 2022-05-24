<?php

    include '../backend/cardapio.class.php';

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
                <h1 class="h2">Cardápios</h1>
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
                            <th>Tipo</th>
                            <th>Data</th>
			    <th>Nutricionista</th>
                            <th>Itens</th>
                            <th>Calorias Totais</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                
                            $infos = new cardapio();

                            $cardapios = $infos->listar_card();
                            
                            $ingredientes = $infos->listar_ingr();
                                
                            $itens = $infos->listar_item();
			    
			    $nutris = $infos->listar_nutri();
                            
                            foreach($cardapios as $cardapio){
                        ?>
                        <tr>
                            <td><?php echo $cardapio['tipo']; ?></td>
                            <td><?php echo $cardapio['dia']; ?></td>
			    <td>
				<?php
				    
				    $infos->set_nutri_id($cardapio['nutri']);
				    
				    $resul = $infos->listar_nutri();
				    
				    foreach($resul as $r){
				    
				    	echo $r['nome']. ', CRN: ' .$r['crn'];
					    
				    }
				    
				?>
			    </td>
                            <td>
                                <?php
                                
                                    $array = json_decode($cardapio['itens'], true);

                                    $c = 1;

                                    foreach($array as $id_item){

                                        $d = '';
                                        
                                        $infos->set_item_id($id_item);
                                        
                                        $resul = $infos->listar_item();
                                        
                                        foreach($resul as $r){
                                            
                                            $d .= $r['nome'];

                                            $array2 = json_decode($resul['ingr'], true);

                                            //$k = 1;
                                            $soma_calorias = 0;

                                            foreach($array2 as $id_ingr){

                                                //$f = '';
                                                
                                                $infos->set_ingr_id($id_ingr);
                                                
                                                $resul2 = $infos->listar_ingr();
                                                
                                                foreach($resul2 as $r2){
                                                    
                                                    //$f .= $r2['nome'].' ('.$r2['calorias'].')';
                                                    $soma_calorias = $soma_calorias + $r2['calorias'];

                                                    /*
                                                    if($k < sizeof($array)){
                                                        
                                                        $f .= ', ';

                                                    }
                                                    
                                                    $k++;
                                                    */
                                                
                                                }

                                                //echo $f;
                                                
                                            }

                                            if($c < sizeof($array)){
                                                
                                                $d .= ', ';

                                            }
                                            
                                            $c++;
                                        
                                        }

                                        echo $d;
                                        
                                    }
                                
                                ?>
                            </td>
                            <td><?php echo $soma_calorias; ?></td>
                            <td></td>
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

                                                $infos->set_item_id('');

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
