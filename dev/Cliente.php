<?php

require_once(__DIR__.'/GrauImportanciaInterface.php');
require_once(__DIR__.'/EnderecoCobrancaInterface.php');

/*
    Uma classe Cliente genérica com nome, telefone, 
    endereço, endereço de cobrança e classificação, ou seja, 
    ela é bem genérica e vai 
    servir tanto para pessoa física quanto jurídica
  
 */
class Cliente implements GrauImportanciaInterface, EnderecoCobrancaInterface
                {
    
    private $nome;
    private $telefone;
    private $endereco;
    private $enderecoCobranca;
    private $classificacaoCliente;
    private $GrauImportacia;
    private $endCobranca;
    
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
    
    
    public function getGrauImportacia() {
        return $this->GrauImportacia;
    }
    public function setGrauImportacia($GrauImportacia) {
        $this->GrauImportacia = $GrauImportacia;
        return $this;
    }
    
    
    public function getEnderecoCobranca() {
        ;
    }
    
    public function setEnderecoCobranca($enderecoCobranca) {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }


}
