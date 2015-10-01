<?php

namespace rnst\Pessoa;

use \rnst\Traitutil\LogTrait;

abstract class PessoaAbstract
{
 
use LogTrait;


  private $nome;
  private $telefone;
  private $endereco;
  private $enderecoCobranca;
  private $classificacaoCliente;
  private $GrauImportacia;
  private $endCobranca;

  public function getNome() {
      
      $this->logUser();
      return $this->nome;
  }

  public function getTelefone() {
      return $this->telefone;
  }

  public function setNome($nome) {
      $this->nome = $nome;
      return $this;
  }

  public function setTelefone($telefone) {
      $this->telefone = $telefone;
      return $this;
  }
  public function getEndereco() {
      return $this->endereco;
  }

  public function setEndereco($endereco) {
      $this->endereco = $endereco;
      return $this;
  }

  


 


//obriga a criação de um metodo para a vefiricação do digito verificador cpf ou cnpj
  abstract public function verificaDigito($valor);
  // pertencia a interface
  abstract public function setEnderecoCobranca($endCobranca);
  abstract public function getEnderecoCobranca();
  
  abstract public function setGrauImportacia($GrauImportacia);
  abstract public function getGrauImportacia();
  

}
