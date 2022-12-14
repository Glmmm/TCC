<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/css_php/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/css_php/login.css">
    <link rel="stylesheet" href="../css/css/bootstrap.css">
    <link rel="stylesheet" href="../css/css_php/style.css">
    <script src="../css/js/bootstrap.js"></script>
    <script src="../css/js/bootstrap.bundle.js"></script>

</head>

<body>
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: black;">
      <div class="container-fluid">
        <a class="navbar-brand" href="../pagina_inicial/home/index.php">Get Services</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item"></li>
          </ul>
          <div class="btn-group dropstart ">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
              <img src="../css/imgs/user.png" alt="" width="30px">
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="../login/login.php">Entrar</a></li>
              <li><a class="dropdown-item" href="../pagina_cadastro/cadastro.php">Cadastrar</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
    <!-- Fim Navegação -->
    <section class="hero is-success is-fullheight" style="background-color: #252525;">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-white my-5" style="font-size: 36px;">GetServices</h3>
                    <h3 class="has-text-white"> Cadastre-se como Cliente</h3><br>

                    <?php

                    if (isset($_SESSION['status_cadastro'])) :
                    ?>
                        <div class="notification is-success">
                            <p>Cadastro efetuado!</p>
                            <p>Faça login informando o seu usuário e senha <a href="../login/login.php">aqui</a></p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>

                    <?php
                    if (isset($_SESSION['usuario_existe'])) :
                    ?>
                        <div class="notification is-info">
                            <p>O e-mail escolhido já existe. Informe outro e tente novamente.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>

                    <div class="box">

                        <form action="cadastrar_cliente.php" method="POST">
                            <label for="email" style="float: left; font-size: 20px;">E-mail</label>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="email" class="input is-large" placeholder="E-mail" autofocus required>
                                </div>
                            </div>
                            <label for="email" style="float: left; font-size: 20px;">Senha</label>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha" required>
                                </div>
                            </div>
                            <label for="email" style="float: left; font-size: 20px;">Nome completo</label>
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome completo" required>
                                </div>
                            </div>
                            <label for="email" style="float: left; font-size: 20px;">CPF</label>
                            <div class="field">
                                <div class="control">
                                    <input name="cpfcnpj" type="number" class="input is-large" placeholder="CPF" required>
                                </div>
                            </div>
                            <label for="email" style="float: left; font-size: 20px;">Nascimento</label>
                            <div class="field">
                                <div class="control">
                                    <input name="nasc" type="date" class="input is-large" placeholder="Data de nascimento" required>
                                </div>
                            </div>
                            <label for="celular" style="float: left; font-size: 20px;">Celular</label>
                            <div class="field"><br><br>
                                <div class="control">
                                    <input name="ddd" type="number" class="input is-large" style="width:23%" placeholder="DDD"
                                    required>
                                    <input name="celular" type="number" class="input is-large" style="width:75%" placeholder="Celular" required>
                                </div>
                            </div>
                            <label for="email" style="float: left; font-size: 20px;">Cidade</label>
                            <div class="field">
                                <div class="control">
                                    <input name="cidade" type="text" class="input is-large" placeholder="Cidade" required>
                                </div>
                            </div>
                            <label for="email" style="float: left; font-size: 20px;">UF</label>
                            <div class="field">
                                <div class="control">
                                    <input name="uf" type="text" class="input is-large" placeholder="UF" required>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth" style="background-color: #C9586C;">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container">
        <hr class="featurette-divider">
            <p><a class="float-end btn btn-outline-light fs-5" style="background-color: #C9586C;" href="#">Voltar ao
                    topo</a></p>
            <p>&copy; 2022 - Services, Get. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>