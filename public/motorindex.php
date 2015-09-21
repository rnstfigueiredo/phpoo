<?php
require_once(__DIR__.'../../dev/PessoaFisica.php');
require_once(__DIR__.'../../dev/PessoaJuridica.php');

$arrayClientes = array();

for($i=0; $i<10;$i++){
    $nome = "Cliente ".$i;
    $fone = $i.$i.$i.'-'.$i.$i.$i.'-'.$i.$i.$i;
    $endereco = "Rua ".(100+$i);
    $classificaCliente = $i+1;
    
    $tipo = rand(0,1);
    
    if($tipo == 0){
        //p fisica
        $arrayClientes[$i] = New PessoaFisica();               
        $cadastroGeralPessoa = $i.$i.$i.".".$i.$i.$i.".".$i.$i.$i."-".$i.$i;
        $arrayClientes[$i]->setCpf($cadastroGeralPessoa)
                ->setGrauImportacia($classificaCliente)
                ->setEnderecoCobranca("")
                ->setNome($nome)
                ->setTelefone($fone)
                ->setEndereco($endereco);
        
    }else{
        //p juridica
        $arrayClientes[$i] = New PessoaJuridica();
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

