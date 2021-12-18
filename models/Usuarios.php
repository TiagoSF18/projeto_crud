<?php
class Usuario{
  private $id;
  private $nome;
  private $email;

  public function getId(){
    return $this->id;
  }
  public function setId($i){
    // trim para facilitar caso queira futuramente alterar o parametro para outro tipo de dado
    $this->id = trim($i);
  }
  public function getName(){
    return $this->name;
  }
  public function setName($n){
    // ucwords para que toda primeira letra seja maiuscula, levando em conta que se trata de nome
    $this->name = ucwords(trim($n));
  }
  public function getEmail(){
    return $this->email;
  }
  public function setEmail($e){
    // strlower joga o email para minusculo
    $this->email = strtolower(trim($e));
  }
}
// interface do usuário, ela é opçional, contudo vai deixar o sistema mais confiavel
interface UsuarioDao{
  public function add(Usuario $u);
  public function findAll();
  public function findById($id);
  public function update(Usuario $u);
  public function delete($id);
}
?>
