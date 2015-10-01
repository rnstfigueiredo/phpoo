<?php

namespace rnst\Pessoa\Type;

use rnst\Pessoa\PessoaAbstract;

class Pessoa extends PessoaAbstract  //implements GrauImportanciaInterface, EnderecoCobrancaInterface
    {
        public function verificaDigito($valor){
            // rerifica o digito do doc cpf / cnpj
            
        }
        
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
  
  
  
    }
