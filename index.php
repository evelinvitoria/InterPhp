<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

    <title>Cadastro</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="?page=novo">sobrancelha<span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Penteados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=excluir">Cílios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="?page=editar">Maquiagem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="?page=salvar">Peeling</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="?page=atualizar">spa de Lábios</a>
        </li>
      </ul>
    </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php 
      include("config.php");

    $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : ""; // Verifica se "page" está definida
      switch($page){
      case "novo":
        include("sobrancelha.php");
      break;
      case "listar":
        include("penteado.php");
      break;
      case "excluir":
        include("cilios.php");
      break;
      case "editar":
        include("maquiagem.php");
      break;
      case "salvar":
        include("peeling.php");
        break;
        case "atualizar":
          include("spalabios.php");
          break;
      default:
      print "Bem Vindos";

   }
   ?>

    </div>
  </div>
</div>
   
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>