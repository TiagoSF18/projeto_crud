<!DOCTYPE html>
<?php
require 'config.php';
require 'dao/UsuarioDaoMySQL.php';

$usuarioDao = new UsuarioDaoMySQL($pdo);

$usuario = false;
$id = filter_input(INPUT_GET, 'id');
if($id) {

  $usuario = $usuarioDao->findById($id);

  if($usuario === false){
    header("Location:dados.php");
    exit;
  }
}
?>
<header>
  <title>Editar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</header>
<html>
<body>

  <div class = "container">
    <div class = "row justify-content-center mt-5">
      <div class = "col-6">
        <!-- form para realizar a o "Adicionar" -->
        <form method="POST" action="editar_action.php">
          <div class="mb-3">
            <!-- <label for="name" class="form-label">Nome</label> -->
            <input type="hidden" name="id" value="<?=$usuario->getId()?>" class="form-control" id="id">
            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" name="name" value="<?=$usuario->getName()?>" class="form-control" id="name" aria-describedby="nameHelp" required>
              <!-- <div id="emailHelp" class="form-text">Nome do usuário.</div> -->
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" value="<?=$usuario->getEmail()?>" class="form-control" id="email" required>
            </div>
            <button type="submit" value="Adicionar" class="btn btn-primary">Salvar</button>
          </form>
        </div>
      </div>
    </div>
  </body>
  </html>
