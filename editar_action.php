<?php
require 'config.php';
require 'dao/UsuarioDaoMySQL.php';

$usuarioDao = new UsuarioDaoMySQL($pdo);
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $name && $email) {
  $usuario = $usuarioDao->findById($id);
  $usuario->setName($name);
  $usuario->setEmail($email);

  $usuarioDao->update($usuario);


  header("Location: dados.php");
  exit;

} else {
  header("Location: editar.php?id=".$id);
  exit;
}
