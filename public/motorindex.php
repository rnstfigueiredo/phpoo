<?php
define('CLASS_DIR', realpath(dirname(__FILE__) . '/../src'));
define('WWW_ROOT',  dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
//echo dirname(__FILE__);
//echo '<br>';
require_once(WWW_ROOT. DS. 'autoload.php');

use rnst\Pessoa\Type\PessoaFisica;
use rnst\Pessoa\Type\PessoaJuridica;


$arrayClientes = array();

for($i=0; $i<10;$i++){
    $nome = "Cliente ".$i;
    $fone = $i.$i.$i.'-'.$i.$i.$i.'-'.$i.$i.$i;
    $endereco = "Rua ".(100+$i);
    $classificaCliente = $i+1;
    
    $tipo = rand(0,1);
    
    if($tipo == 0){
        //p fisica
        $arrayClientes[$i] = new PessoaFisica();               
        $cadastroGeralPessoa = $i.$i.$i.".".$i.$i.$i.".".$i.$i.$i."-".$i.$i;
        $arrayClientes[$i]->setCpf($cadastroGeralPessoa)
                ->setGrauImportacia($classificaCliente)
                ->setEnderecoCobranca("")
                ->setNome($nome)
                ->setTelefone($fone)
                ->setEndereco($endereco);
        
    }else{
        //p juridica
        $arrayClientes[$i] = new PessoaJuridica();
        $cadastroGeralPessoaJuridica = $i.$i.$i.".".$i.$i.$i.".".$i.$i.$i."/0001-".$i.$i; //99.999.999/9999-99
        $enderecoCobranca = "Rua ".("Cobra"+$i);  
        
        $arrayClientes[$i]->setCnpj($cadastroGeralPessoaJuridica)
                ->setGrauImportacia($classificaCliente)
                ->setEnderecoCobranca($enderecoCobranca)
                 ->setNome($nome)            
            ->setTelefone($fone)
            ->setEndereco($endereco);
    }
   
}


//print_r($arrayClientes);
//die();
//foreach ($arrayClientes as $key=>$cliente){
    
    
    
//    ($cliente instanceof PessoaFisica) ? $TipoPessoaHTML = "<strong>Fisica</strog>" : $TipoPessoaHTML = "<strong>Juridica</strog>";
//echo $TipoPessoaHTML;
//}

//die();

