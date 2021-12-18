<?php
require 'config.php';
?>

<!doctype html>
<html lang="pt-br" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Projeto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel-rtl/">



  <!-- Bootstrap core CSS -->
  <link href="/docs/5.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

</head>

<body>
  <header>
    <div class="container-fluid">
      <!-- row do navbar -->
      <nav class="navbar navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Projeto</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
          </form>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Lista de opções -->
          <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Projeto</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Projeto</h5>
                </div>
                <div class="row justify-content-center">
                  <div class="col-12">
                    <div class="offcanvas-body">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" style="float:left" aria-current="page" href="adicionar.php" target="_blank">Adicionar</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" style="float:left" aria-current="page" href="dados.php">Dados</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" style="float:left" aria-current="page" href="#">Sair</a>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
          <!-- fim da row do navbar -->
        </div>
      </header>
      <main>

        <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </main>


    </body>
    </html>
