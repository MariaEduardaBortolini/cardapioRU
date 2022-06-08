<?php

  include_once '../backend/cardapio.class.php';

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
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
                </div>
            </div>
        </nav>
      <main class="container"> 
        <div class="bg-light p-5 rounded"> 
          <h1>Restaurante</h1> 
          <p class="lead">Bem vindo ao sistema de restaurante.</p> 
        </div>
          
        <!--<div class="tabs_ru"></div>-->
          <div class="row">

            <?php

              $infos = new cardapio();

              $c = 0;

              $dt = date('Y-m-d');

              while($c < 5){

                $infos->set_card_dia($dt);

                $cardapios = $infos->listar_cardapio($dt);

            ?>


            <div class="col">
              <div class="tab-content">
                <ul class="nav nav-tabs nav-justified flex-column flex-sm-row" role="tablist"> 
                    <li class="nav-item "> 
                      <a class="rounded-0 flex-sm-fill text-sm-center nav-link" aria-selected="false" data-bs-toggle="tab" role="tab"><?php echo date('d/m/Y', strtotime($dt)); ?></a>
                    </li> 
                </ul> 
                <div class="tab-pane active"> 

                  <?php
                  
                    foreach($cardapios as $cardapio){

                      if($cardapio['tipo'] == 'cafe'){
                  
                  ?>

                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Café</th> 
                      </tr> 
                      <tr> 
                        <th></th> 
                        <th class="text-end"></th> 
                      </tr> 
                    </thead> 
                    <tbody>

                      <?php
                      
                        $array = json_decode($cardapio['itens'], true);

                        foreach($array as $id_item){

                          $infos->set_item_id($id_item);

                          $itens = $infos->listar_item();

                          foreach($itens as $item){

                            $array2 = json_decode($item['ingr'], true);
                            $soma_calorias = 0;
                            $string = '';

                            foreach($array2 as $id_ingr){

                              $infos->set_ingr_id($id_ingr);

                              $ingrs = $infos->listar_ingr();

                              foreach($ingrs as $ingr){

                                $soma_calorias = $soma_calorias + $ingr['calorias'];

                                $string .= $ingr['nome'].', ';

                              }

                            }
                      
                      ?>

                      <tr data-bs-toggle="collapse"> 
                        <td><?php echo $item['nome']; ?></td> 
                        <td class="text-end"><?php echo $soma_calorias; ?></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong><?php echo $string; ?></strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr>

                      <?php

                          }
                      
                        }
                      
                      ?>

                    </tbody> 
                  </table>

                  <?php

                      }
                  
                    }
                  
                  ?>

                  <?php
                  
                    foreach($cardapios as $cardapio){

                      if($cardapio['tipo'] == 'almoco'){
                  
                  ?>

                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th> 
                      </tr> 
                      <tr> 
                        <th></th> 
                        <th class="text-end"></th> 
                      </tr> 
                    </thead> 
                    <tbody>

                      <?php
                      
                        $array = json_decode($cardapio['itens'], true);

                        foreach($array as $id_item){

                          $infos->set_item_id($id_item);

                          $itens = $infos->listar_item();

                          foreach($itens as $item){

                            $array2 = json_decode($item['ingr'], true);
                            $soma_calorias = 0;
                            $string = '';

                            foreach($array2 as $id_ingr){

                              $infos->set_ingr_id($id_ingr);

                              $ingrs = $infos->listar_ingr();

                              foreach($ingrs as $ingr){

                                $soma_calorias = $soma_calorias + $ingr['calorias'];

                                $string .= $ingr['nome'].', ';

                              }

                            }
                      
                      ?>

                      <tr data-bs-toggle="collapse"> 
                        <td><?php echo $item['nome']; ?></td> 
                        <td class="text-end"><?php echo $soma_calorias; ?></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong><?php echo $string; ?></strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr>

                      <?php

                          }
                      
                        }
                      
                      ?>
                    
                    </tbody> 
                  </table>

                  <?php

                      }
                  
                    }
                  
                  ?>

                  <?php
                  
                    foreach($cardapios as $cardapio){

                      if($cardapio['tipo'] == 'janta'){
                      
                  ?>

<!--
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" onclick="mostrar(true, 'oi')" id="oi"  aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
<script>

  function mostrar(a, id){
    if(a){

      var item = getElementById(id);

      item.setAttribute('aria-expanded', true);

      item.onclick = function{

        mostrar(false)

      }

    }
  }
</script>
-->

                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Janta</th>
                      </tr> 
                      <tr> 
                        <th></th> 
                        <th class="text-end"></th> 
                      </tr> 
                    </thead> 
                    <tbody>

                      <?php
                          
                        $array = json_decode($cardapio['itens'], true);

                        foreach($array as $id_item){

                          $infos->set_item_id($id_item);

                          $itens = $infos->listar_item();

                          foreach($itens as $item){

                            $array2 = json_decode($item['ingr'], true);
                            $soma_calorias = 0;
                            $string = '';

                            foreach($array2 as $id_ingr){

                              $infos->set_ingr_id($id_ingr);

                              $ingrs = $infos->listar_ingr();

                              foreach($ingrs as $ingr){

                                $soma_calorias = $soma_calorias + $ingr['calorias'];

                                $string .= $ingr['nome'].', ';

                              }

                            }
                          
                      ?>

                      <tr data-bs-toggle="collapse">

                        <td><?php echo $item['nome']; ?></td> 
                        <td class="text-end"><?php echo $soma_calorias; ?></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong><?php echo $string; ?></strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr>

                      <?php

                          }
                          
                        }
                          
                      ?>

                    </tbody> 
                  </table>

                  <?php

                      }
                      
                    }
                      
                  ?>

                </tbody> 
              </table>
                  
            </div> 
          </div>
        </div>

          <?php

              $dt = date('Y-m-d', strtotime($dt.' +1 day'));

              $c++;
            }
          ?>    
      </div>
    </div>  
  </div>
             <footer class="py-5"> 
                 <div class="d-flex justify-content-between py-4 my-4 border-top"> 
                     <p>&copy; 2022 Company, Inc. All rights reserved.</p> 
                 </div> 
             </footer>                         
         </main> 
  
     </body> 
 </html>

 <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  </div>