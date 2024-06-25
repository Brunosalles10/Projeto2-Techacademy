<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="description" content="SITE THE ARKAD">
  <base href="http://localhost/projeto2/Site/">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" href="imagens/foguete.png">


  <title>THE ARKAD</title>
</head>

<body>


  <!--Inicio do cabeçalho-->

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="imagens/logo.png" alt="logo site">

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="quemsomos.html">QUEM SOMOS</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              JOGOS
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="jogo.html">THE ARKAD</a></li>
              <li><a class="dropdown-item" href="erro.php">JOGO 2</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="erro.php">jogo 3</a></li>
            </ul>
          </li>

        </ul>
        <div class="d-flex">


          <a href="contato.html" title="contato" class="btn btn-info">
            <i class="fas fa-envelope"></i>
            Entre em Contato

          </a>

        </div>
      </div>
    </div>
  </nav>

  <!--fim do cabeçalho-->

  <!-- Início área do menu principal -->
  <main class="principal">
    <?php
    $pagina = "home";
    //varifica se foi clicado no menu
    if (isset($_GET["pagina"])) {
      $pagina = $_GET["pagina"] ?? "home";
      //games/1
      $pagina = explode("/", $pagina);

      $codigo = $pagina[1] ?? NULL;
      $pagina = $pagina[0] ?? "home";

      $pagina = "pages/{$pagina}.php";

      if (file_exists($pagina)) {
        include $pagina;
      } else {
        include "pages/erro.php";
      }
    }

    ?>
    <div class="principal-b container ">
      <img class="img-fluid " src="imagens/principal.png" alt="jogo the arkad">
    </div>
    <div class="container">
      <h2 class="shadow-lg p-3 mb-5 bg-white rounded">PERSONAGENS</h2>

    </div>
    <div class="d-flex mobile-principal">
      <div class="card mobile-coluna" style="width: 18rem;">
        <img class="card-img-top" src="imagens/ninja.png" alt="ninja">
        <div class="card-body">
          <h5 class="card-title text-center">TIAMAT</h5>
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
          <a href="#" class="btn btn-primary">Visitar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="imagens/jogador.png" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title text-center">THE ARKAD</h5>
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
          <a href="#" class="btn btn-primary">Visitar</a>
        </div>
      </div>
      <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="imagens/princesa.png" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title text-center">PRINCESA BASNIR</h5>
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
          <a href="#" class="btn btn-primary">Visitar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="imagens/dinossauro.png" alt="Imagem de capa do card">
        <div class="card-body">
          <h5 class="card-title text-center">DINOS</h5>
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.</p>
          <a href="#" class="btn btn-primary">Visitar</a>
        </div>
      </div>

    </div>







  </main>


  <!-- Final área do menu principal -->








  <footer class="footer position-relative"><!--Começo do rodapé-->
    <p>Todos os direitos reservados<br>
      Desenvolvido por Bruno Da Silva Salles</p>



  </footer><!--Fim do rodapé-->

  <script src="js/bootstrap.bundle.min.js">

  </script>
  <script src="js/aos.css">

  </script>
  <script src="https://kit.fontawesome.com/956ac241f2.js" crossorigin="anonymous"></script>


</body>

</html>