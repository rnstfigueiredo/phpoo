<?php

namespace rnst\Pessoa\Type;

use \rnst\Pessoa\Type\Pessoa as PessoaTipo; // estou criando um alias
        
class PessoaFisica extends PessoaTipo
{
    private $cpf;
    
    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) { 
        $this->cpf = $cpf;
        return $this;
    }

}
