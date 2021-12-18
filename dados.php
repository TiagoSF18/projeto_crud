<?php
require 'config.php';
require 'dao/UsuarioDaoMySQL.php';

$usuarioDao = new UsuarioDaoMySQL($pdo);
$lista = $usuarioDao->findAll();


?>

<header>
  <title>Dados</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</header>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>

    <!-- <tr>
      <th scope="row">2</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td></td>
      <td></td>
    </tr> -->
    <?php foreach($lista as $usuarios): ?>
      <tr>
        <!-- <th scope="row"></th> -->
        <td><?=$usuarios->getId();?></td>
        <td><?=$usuarios->getName();?></td>
        <td><?=$usuarios->getEmail();?></td>
        <td>
          <!-- o php no href envia o id via get para os arquivos editar e excluir -->
          <a href="editar.php?id=<?=$usuarios->getId();?>">[editar]</a>
          <a href="excluir.php?id=<?=$usuarios->getId();?>" onclick="return confirm('Confirmar exclusão?')">[excluir]</a>

        </td>
      </tr>

    <?php endforeach; ?>
  </tbody>
</table>
