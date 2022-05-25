<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <title>Projeto Docker</title>
</head>
<body>
    <header class="p-5 bg-info text-white text-center">
      <h1>Minha Área Administrativa</h1>
      <P>Exemplo de estrutura ADMIN</P>
      <a class="text-white" href="index.php?controller=main&action=logout">Sair</a>
    </header>
    <section class="row">
        <nav class="col-md-3 bg-light">
            <h2 class="text-info">Menu</h2>
            <ul class="nav flex-column">
              <div class="mb-2 mt-2">
                <li class="nav-item">
                  <a type="button" class="nav-link btn btn-outline-primary text-dark" href="?controller=main&action=index">Home</a>
                </li>
              </div>
            </ul>
            <h3 class="text-info">Clientes</h3>
            <ul class="nav flex-column">
              <div class="mb-2 mt-2">
                <li class="nav-item">
                  <a type="button" class="nav-link btn btn-outline-primary text-dark" href="?controller=client&action=listClients">Lista Clientes</a>
                </li>
              </div>
              <div class="mb-2 mt-2">
                <li class="nav-item">
                  <a type="button" class="nav-link btn btn-outline-primary text-dark" href="?controller=client&action=insertClient">Novo Cliente</a>
                </li>
              </div>
            </ul>
        </nav>
        <article class="col-md-9">