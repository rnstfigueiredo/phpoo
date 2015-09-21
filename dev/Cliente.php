<?php
/*
    Uma classe Cliente genérica com nome, telefone, 
    endereço, endereço de cobrança e classificação, ou seja, 
    ela é bem genérica e vai 
    servir tanto para pessoa física quanto jurídica
  
 */
class Cliente {
    
    private $nome;
    private $telefone;
    private $endereco;
  //  private $enderecoCobranca;
  //  private $classificacaoCliente;
    
    public function getNome() {
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


}
