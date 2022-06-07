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
                <h1 class="h2">Cardápios</h1>
                <div class="pull-right"> 
                    <a href="cadastro_cardapios.php">
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

                            $cardapios = $infos->listar_cardapio();
                            
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
				    $soma_calorias = 0;
                                    foreach($array as $id_item){

                                        $d = '';
                                        
                                        $infos->set_item_id($id_item);
                                        
                                        $resul = $infos->listar_item();
                                        
                                        foreach($resul as $r){
                                            
                                            $d .= $r['nome'];

                                            $array2 = json_decode($r['ingr'], true);

                                            //$k = 1;

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
                            <td>
                                <form method="POST" action="../backend/excluir_cardapio.php">
                                    <input type="hidden" name="id" value="<?php echo $cardapio['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
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
    </body>
</html>
