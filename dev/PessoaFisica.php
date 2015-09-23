<?php
require_once(__DIR__.'/Cliente.php');
        
class PessoaFisica extends Cliente 
{
    //put your code here
    private $cpf;
    
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
