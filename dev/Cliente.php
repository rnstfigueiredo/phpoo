<?php
require_once(__DIR__.'/Pessoa.php');

class Cliente extends Pessoa
{
    private $endereco;
    private $numero;
    private $bairro;
    private $cidade;
    private $uf;
    private $limitecredito;
    
    
    public function getEndereco() {
        return $this->endereco;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getUf() {
        return $this->uf;
    }

    public function getLimitecredito() {
        return $this->limitecredito;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
        return $this;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
        return $this;
    }

    public function setUf($uf) {
        $this->uf = $uf;
        return $this;
    }

    public function setLimitecredito($limitecredito) {
        $this->limitecredito = $limitecredito;
        return $this;
    }

    
    
    
}
