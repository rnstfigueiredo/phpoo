<?php
require_once(__DIR__.'/Cliente.php');

class PessoaJuridica  extends Cliente
{
    //put your code here    
    private $cnpj;
    
    public function getCnpj() {
        //return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
        return $this;
    }
    
}   
