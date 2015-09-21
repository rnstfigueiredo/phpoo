<?php
require_once(__DIR__.'/Cliente.php');
require_once(__DIR__.'/GrauImportanciaInterface.php');
require_once(__DIR__.'/EnderecoCobrancaInterface.php');
        
class PessoaFisica extends Cliente implements GrauImportanciaInterface, EnderecoCobrancaInterface{
    //put your code here
    private $cpf;
    private $GrauImportacia;
    private $enderecoCobranca;


    public function getEnderecoCobranca() {
        ;
    }
    
    public function setEnderecoCobranca($enderecoCobranca) {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }
    
    public function getGrauImportacia() {
        return $this->GrauImportacia;
    }
    public function setGrauImportacia($GrauImportacia) {
        $this->GrauImportacia = $GrauImportacia;
        return $this;
    }
    
    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        
        
        $this->cpf = $cpf;
        return $this;
    }
    
    public function verificaCpf($cpf){
        
        //
        return TRUE;
        
    }


}
