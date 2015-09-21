<?php
require_once(__DIR__.'/Cliente.php');
require_once(__DIR__.'/GrauImportanciaInterface.php');
require_once(__DIR__.'/EnderecoCobrancaInterface.php');

class PessoaJuridica  extends Cliente implements GrauImportanciaInterface, EnderecoCobrancaInterface{
    //put your code here    
    private $cnpj;
    private $GrauImportacia;
    private $endCobranca;


    public function getEnderecoCobranca() {
        ;
    }
    
    public function setEnderecoCobranca($endCobranca) {
        $this->endCobranca = $endCobranca;
        return $this;
    }
    
    public function getGrauImportacia() {
        return $this->GrauImportacia;
    }
    
    public function setGrauImportacia($GrauImportacia) {
        $this->GrauImportacia = $GrauImportacia;
        return $this;
    }
    
    
    public function getCnpj() {
        //return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        
        
        $this->cnpj = $cnpj;
        return $this;
    }
    
}   
