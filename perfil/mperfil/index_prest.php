<?php
session_start();
include('conexao.php');
include('verifica_login_cliente.php');

$email = $_SESSION["user"];
$sql_query = "SELECT nome, celular, email, cidade, uf, ddd, profissao, carreira FROM prestador_servicos WHERE email = '$email'";
$result = mysqli_query($conexao, $sql_query);
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil Cliente</title>
    <link rel="stylesheet" href="../../css/css/bootstrap.css">
    <script src="../../css/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../../css/css/visu.css">
    <script src="../../css/js/bootstrap.bundle.js"></script>

    
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: black;">
            <div class="container-fluid">
                <a class="navbar-brand" href="../../pagina_inicial/home/index.php">Get Services</a>
                <a class="navbar-brand">Bem vindo <?php echo $_SESSION['user']?></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item"></li>
                    </ul>
                    <div class="btn-group dropstart ">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                            <img src="../../css/imgs/user.png" alt="" width="30px">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="../../pagina_pesquisa/index_prest.php">Voltar</a></li>
                            <li><a class="dropdown-item" href="../../logout/logout.php">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php
        while ($row = $result->fetch_row()) {
            ?>
        <section class="bg-gray" id="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-4 mb-sm-5">
                        <div class="card card-style1 border-0">
                            <div class="col-lg-12 my-1 p-5 border border-outline-white rounded-5">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 mb-4 mb-lg-0 d-flex justify-content-center">
                                        <img style="width: 340px; object-fit:cover;" src="../../css/imgs/user-teste.png" alt="...">
                                    </div>
                                    <div class="col-lg-6 px-xl-10">
                                        <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                            <h3 class="h2 text-white mb-0">Nome: <?php echo $row[0]?></h3>
                                        </div>
                                        <ul class="list-unstyled mb-1-9">
                                            <li class="mb-1 mb-xl-3 display-28" style="color: white; font-size: 20px;">Profissão: <span style="color: white; font-size: 20px;"><?php echo $row[6]?></span></li>
                                            <li class="mb-1 mb-xl-3 display-28" style="color: white; font-size: 20px;">Carreira: <span style="color: white; font-size: 20px;"><?php echo $row[7]?></span></li>
                                            <li class="mb-1 mb-xl-3 display-28" style="color: white; font-size: 20px;">Email: <span style="color: white; font-size: 20px;"><?php echo $row[2]?></span></li>
                                            <li class="mb-1 mb-xl-3 display-28" style="color: white; font-size: 20px;">Telefone: <span style="color: white; font-size: 20px;">(<?php echo $row[5]?>) <?php echo $row[1]?></span></li>
                                            <li class="mb-1 mb-xl-3 display-28" style="color: white; font-size: 20px;">Cidade: <span style="color: white; font-size: 20px;"><?php echo $row[3]?>-<?php echo $row[4]?></span></li>
                                        </ul>
                                        <a href="../../pagina_pesquisa/index_prest.php"><button style="background-color: #C9586C; width:30%; height:100%;" name="contatar"class="btn btn-outline-light" type="submit">Voltar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        }
        ?>
    </main>
    <footer class="container">
        <hr class="featurette-divider text-white">
        <p><a class="float-end btn btn-outline-light" style="background-color: #C9586C;" href="#">Ir ao topo</a></p>
        <p>&copy; 2022 - Services, Get. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</body>

</html>