<?php
class Usuario{
  private $id;
  private $nome;
  private $email;

  public function getId(){
    return $this->id;
  }
  public function setId(){
    // trim para facilitar caso queira futuramente alterar o parametro para outro tipo de dado
    $this->id = trim($i);
  }
  public funtion getNome(){
    return $this->nome;
  }
  public function setNome($n){
    // ucwords para que toda primeira letra seja maiuscula, levando em conta que se trata de nome
    $this->nome = ucwords(trim($n));
  }
  public function getEmail(){
    return $this->email;
  }
  public function setEmail($e){
    // strlower joga o email para minusculo
    $this->email = strtolower(trim($e));
  }
}

?>
