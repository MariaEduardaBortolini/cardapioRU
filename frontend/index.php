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
            <div class="col">
              <div class="tab-content">
                <ul class="nav nav-tabs nav-justified flex-column flex-sm-row" role="tablist"> 
                    <li class="nav-item "> 
                      <a class="rounded-0 flex-sm-fill text-sm-center nav-link" aria-selected="false" data-bs-toggle="tab" role="tab">06/06</a>
                    </li> 
                </ul> 
                <div class="tab-pane active"> 
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Café</th> 
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th>
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th>
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  
                </div> 
              </div>
            </div>  
            <!--2-->
            <div class="col">
              <div class="tab-content">
                <ul class="nav nav-tabs nav-justified flex-column flex-sm-row" role="tablist"> 
                    <li class="nav-item "> 
                      <a class="rounded-0 flex-sm-fill text-sm-center nav-link" aria-selected="false" data-bs-toggle="tab" role="tab">07/06</a>
                    </li> 
                </ul> 
                <div class="tab-pane active"> 
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Café</th> 
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th>
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th>
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  
                </div> 
              </div>
            </div> 
            <!--3 -->
            <div class="col">
              <div class="tab-content">
                <ul class="nav nav-tabs nav-justified flex-column flex-sm-row" role="tablist"> 
                    <li class="nav-item "> 
                      <a class="rounded-0 flex-sm-fill text-sm-center nav-link" aria-selected="false" data-bs-toggle="tab" role="tab">08/06</a>
                    </li> 
                </ul> 
                <div class="tab-pane active"> 
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Café</th> 
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th>
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th>
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  
                </div> 
              </div>
            </div> 
            <!--4-->  
            <div class="col">
              <div class="tab-content">
                <ul class="nav nav-tabs nav-justified flex-column flex-sm-row" role="tablist"> 
                    <li class="nav-item "> 
                      <a class="rounded-0 flex-sm-fill text-sm-center nav-link" aria-selected="false" data-bs-toggle="tab" role="tab">09/06</a>
                    </li> 
                </ul> 
                <div class="tab-pane active"> 
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Café</th> 
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th>
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th>
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  
                </div> 
              </div>
            </div>  
            <!--4-->
            <div class="col">
              <div class="tab-content">
                <ul class="nav nav-tabs nav-justified flex-column flex-sm-row" role="tablist"> 
                    <li class="nav-item "> 
                      <a class="rounded-0 flex-sm-fill text-sm-center nav-link" aria-selected="false" data-bs-toggle="tab" role="tab">10/06</a>
                    </li> 
                </ul> 
                <div class="tab-pane active"> 
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Café</th> 
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th>
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  <table class="stroked table-hover narrow table"> 
                    <thead class="header"> 
                      <tr class="table-info"> 
                        <th colspan="2">Almoço</th>
                      </tr> 
                      <tr> 
                        <th>Preparo</th> 
                        <th class="text-end">Calorias</th> 
                      </tr> 
                    </thead> 
                    <tbody> 
                      <tr data-bs-toggle="collapse"> 
                        <td></td> 
                        <td class="text-end"></td> 
                      </tr> 
                      <tr class="collapse show" id="ingredientes" style=""> 
                        <td colspan="2"> 
                          <div class="row"> 
                            <div class="col-12"> 
                              <strong>Ingredientes</strong> 
                            </div> 
                            <div class="row"></div>
                          </div> 
                        </td> 
                      </tr> 
                    </tbody> 
                  </table>
                  
                </div> 
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
