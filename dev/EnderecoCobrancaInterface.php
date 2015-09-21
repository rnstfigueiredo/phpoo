<?php

/*
O exercício pede para implementar uma interface para Grau de Importância e outra para Endereço de Cobrança. 
Crie duas interfaces, uma chamada EnderecoCobrancaInterface e outra GrauImportanciaInterface, 
 * cada uma com seus respectivos métodos. Implemente-as na sua classe cliente.
 *  */
interface EnderecoCobrancaInterface {
    //put your code here
    
    public function setEnderecoCobranca($endCobranca);
    public function getEnderecoCobranca();
}
