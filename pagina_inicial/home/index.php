<?php
session_start();
session_destroy();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GetServices</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="stylesheet" href="../../css/css/bootstrap.css">
  <link rel="stylesheet" href="../../css/css_php/style.css">
  <script src="../../css/js/bootstrap.js"></script>
  <script src="../../css/js/bootstrap.bundle.js"></script>

  <!-- Custom styles for this template -->
  <style>
    body {
      color: white;
    }

    .dropdown {
      position: relative;
    }
  </style>
  <link href="css/carousel.css" rel="stylesheet">

</head>

<body>

  <!-- Navegação -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: black;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Get Services</a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item"></li>
          </ul>
          <div class="btn-group dropstart ">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
              <img src="../../css/imgs/user.png" alt="" width="30px">
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="../../login/login.php">Entrar</a></li>
                <li><a class="dropdown-item" href="../../pagina_cadastro/cadastro.php">Cadastrar</a></li>           
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Fim Navegação -->

  <main>
    <!-- Itens Carrossel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">

        <!-- 1° Carrossel -->
        <div class="carousel-item active">
          <img class="img-responsive" src="../../css/imgs/weld.jpg" width="100%" height="700px" alt="Soldador trabalhando com alguns raios arco-iris ao redor">
          <div class="container">
            <div class="carousel-caption fs-3 bg-dark p-5 rounded-3">
              <h1>Facilitando sua busca por serviços!</h1>
              <p>Com nossa ferramenta você pode encontrar o serviço que precisa de forma rápida e prática</p>
              <p><a class="btn btn-lg btn-outline-light" style="background-color: #C9586C;" href="#quemsomos">Conheça
                  mais sobre nós</a>
              </p>
            </div>
          </div>
        </div>

        <!-- 2° Carrossel -->
        <div class="carousel-item">

          <img class="img-responsive" src="../../css/imgs/sign.jpg" width="100%" height="700px" alt="Imagem mostrando apenas mãos de alguém assinando documento">
          <div class="container">
            <div class="carousel-caption fs-3 bg-dark p-5 rounded-3">
              <h1>Cadastre-se hoje!</h1>
              <p>Conheça nossa ferramenta e faça seu cadastro como prestador ou cliente para utilizá-la</p>
              <p><a class="btn btn-lg btn-outline-light" style="background-color: #C9586C;" href="../../pagina_cadastro/cadastro.php">Cadastre-se agora</a></p>
            </div>
          </div>
        </div>

        <!-- 3° Carrossel -->
        <div class="carousel-item">
          <img class="img-responsive" src="../../css/imgs/eletrician.jpg" width="100%" height="700px" alt="Eletricista instalando um dispositivo na parede">
          <div class="container">
            <div class="carousel-caption fs-3 bg-dark p-5 rounded-3">
              <h1>Um lugar para alavancar sua prestação</h1>
              <p>Para prestadores que estão querendo aumentar seu alcance de trabalho, o GetServices te ajudará a<br>
                encontrar mais clientes. Cadastre-se hoje para comecar a aparecer em nossas buscas de serviços!</p>
              <p><a class="btn btn-lg btn-outline-light" style="background-color: #C9586C;" href="../../pagina_cadastro/cadastro_prestador.php">Cadastre-se como prestador aqui!</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Controles Carrossel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Fim Controles -->

    <!-- Fim Carrossel -->

    <!-- Inicio Containers -->
    <div class="container marketing">



      <!-- 1° Container -->
      <div class="row featurette py-5">
        <div class="col-md-7" id="quemsomos">
          <h2 class="featurette-heading fw-bold lh-2">O que é GetServices? </h2>
          <p class="fs-3">Veja um pouco sobre nós: </p>
          <p class="lead fs-4 my-5" style="text-align: justify;">Get Services é um projeto criado com o objetivo de facilitar a busca por profissionais. Em um mundo tecnológico, a interação de clientes com seus prestadores é essêncial para atender com eficácia as demandas desse mercado. Então, com a necessidade em melhorar a busca e procura de prestadores, nasceu o projeto "GetServices", uma proposta simples, mas que sem duvidas ajudará a área de prestação e procura de serviços.</p>
        </div>
        <div class="col-md-5">
          <img src="../../css/imgs/logo.jpeg" class="img-responsive" alt="logo" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
      </div>
      <!-- Fim 1° Container -->

      <hr class="featurette-divider text-white">

      <!-- 2° Container -->
      <div class="row featurette py-5">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-bold lh-2">Como funciona o GetServices? </h2>
          <p class="fs-3">Entenda a busca e procura: </p>
          <p class="lead fs-4 my-5" style="text-align: justify;">Nossa ferramenta permite que prestadores de serviços cadastrem-se em nosso sistema e, a partir de uma ferramenta de e filtragem, clientes buscam, a partir dela, serviços que melhor atendem suas necessidades. Após esse processo, o cliente adquire o contato do prestador e combina o serviço de maneira privada.</p>
        </div>
        <div class="col-md-5">
          <img src="../../css/imgs/handshake.jpg" class="img-responsive" alt="logo" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
      </div>
      <!-- Fim 2° Container -->

      <hr class="featurette-divider text-white">

      <!-- 3° Container -->
      <div class="row featurette py-5">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-bold lh-2">Nosso objetivo com o mercado</h2>
          <p class="fs-3">Entenda mais sobre:</p>
          <p class="lead fs-4 my-5" style="text-align: justify;">
            GetServices é um dos poucos projetos que procuram contribuir para o setor de serviços de forma online. Com isso, além de ajudar o setor a se alavancar e atender a necessidade das pessoas, procuramos sempre incentivar o investimento tecnológico para com a prestação de serviços. Durante anos ela sempre foi um setor muito importante da economia, e merece a atenção e sua integração para a rede mundial de computadores.</p>
        </div>
        <div class="col-md-5">
          <img src="../../css/imgs/conference.png" class="img-responsive" alt="logo" width="500 " height="500" preserveAspectRatio="xMidYMid slice" focusable="false">
        </div>
      </div>
      <!-- Fim 3° Container -->
      <!-- Fim Containers -->

      <hr class="featurette-divider text-white">

      <!-- Inicio dos criadores -->
      <div class="row py-5">

        <!-- Daniel -->
        <div class="col-lg-4 my-5">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
          <h2 class="fw-normal">Daniel Ribeiro de Oliveira</h2>
          <p class="fs-5">Responsável por auxiliar o processo de criação do Front-End do site.</p>
          <p><a class="btn btn-secondary" href="#">Detalhes &raquo;</a></p>
        </div>

        <!-- Guilherme -->
        <div class="col-lg-4 my-5">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
          <h2 class="fw-normal">Guilherme Papa de Souza</h2>
          <p class="fs-5">Responsável principal pelo desenvolvimento do Front-End do site.</p>
          <p><a class="btn btn-secondary" href="#">Detalhes &raquo;</a></p>
        </div>

        <!-- Gustavo -->
        <div class="col-lg-4 my-5">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
          <h2 class="fw-normal">Gustavo César Luzi Pereira</h2>
          <p class="fs-5">Responsável pela criação dos sistemas e ferramentas envolvendo o Back-End do site.</p>
          <p><a class="btn btn-secondary" href="#">Detalhes &raquo;</a></p>
        </div>

        <!-- João -->
        <div class="col-lg-4 my-5">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
          </svg>
          <h2 class="fw-normal">João Pedro Salmazo Pitarelo</h2>
          <p class="fs-5">Responsável por auxiliar o processo de criação do Front-End do site.</p>
          <p><a class="btn btn-secondary" href="#">Detalhes &raquo;</a></p>
        </div>
      </div>

      <!-- Fim dos criadores -->

      <hr class="featurette-divider text-white">

    </div>

    <!-- Rodapé -->
    <footer class="container">
      <p><a class="float-end btn btn-outline-light fs-5 mb-3" style="background-color: #C9586C;" href="#">Voltar ao topo</a></p>
      <p>&copy; 2022 - Services, Get. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>
  <!-- Fim Rodapé -->

</body>

</html>