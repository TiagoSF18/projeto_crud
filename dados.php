<?php
require 'config.php';
$lista = [];
// seleciona os campos na tabela do banco de dados
$sql = $pdo->query("SELECT * FROM  usuarios");
// função para realizar a associação com o banco de dados, se tem ou não algum dado
if($sql->rowCount()>0){
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

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
        <td><?=$usuarios['id'];?></td>
        <td><?=$usuarios['name'];?></td>
        <td><?=$usuarios['email'];?></td>
        <td>
          <!-- o php no href envia o id via get para os arquivos editar e excluir -->
          <a href="editar.php?id=<?=$usuarios['id'];?>">[editar]</a>
          <a href="excluir.php?id=<?=$usuarios['id'];?>" onclick="return confirm('Confirmar exclusão?')">[excluir]</a>

        </td>
      </tr>

    <?php endforeach; ?>
  </tbody>
</table>
