<?php
namespace rnst\Pessoa\Type;

use \rnst\Pessoa\Type\Pessoa as PessoaTipo;

class PessoaJuridica  extends PessoaTipo
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
