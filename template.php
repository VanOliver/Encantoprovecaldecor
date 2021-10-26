<!DOCTYPE html>
<html lang="br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
    <header class="container-fluid">
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/painel.jpg" class="d-block w-100" alt="Encante-Se" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
      </div>
    </div>
  </header>
 
         
        <h1>Cadastro de Fornecedores</h1> 
      

        <?php require 'formulario.php'; ?>

        <?php if($exibir_tabela) : ?>
            <?php require 'tabela.php' ?>
        <?php endif; ?>
        
        </footer>
    <div class="text-center p-1" style="background:whitesmoke;">
      <h5 class="small">Encanto provençal Decor&copy; 2021 |&deg;</h5>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"></script>
  </body>
                
    </body>
</html>