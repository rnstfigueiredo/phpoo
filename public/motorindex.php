<?php
require_once(__DIR__.'../../dev/Cliente.php');
//$cliente->setNome("TEste");



$arrayClientes = array();

for($i=0; $i<10;$i++){
    $arrayClientes[$i] = New Cliente();
   // $cliente->setNome("TEste-".$i);
    $nome = "Cliente ".$i;
    $cadastroGeralPessoa = $i.$i.$i.".".$i.$i.$i.".".$i.$i.$i.".".$i.$i.$i;
    $dtNascimento = $i.$i."/".$i.$i."/".$i.$i.$i.$i;
    $idade =18+$i;
    $nacionalidade = "BR";
    $tipoPessoa = rand (1, 2); // 1 pessoa fisica  2 pessoa juridica
    $endereco = "Rua ".(100+$i);
    $numero = $i;
    $bairro = "Jardim";
    $cidade = "SP";
    $uf = "SP";
    $classificaCliente = $i+1;
    $limitecredito = 10*$classificaCliente;
    
    
    $arrayClientes[$i]->setNome($nome)
            ->setCadastroGeralPessoa($cadastroGeralPessoa)
            ->setDtNascimento($dtNascimento)
            ->setIdade($idade)
            ->setNacionalidade($nacionalidade)
            ->setTipoPessoa($tipoPessoa)
            ->setendereco($endereco)
            ->setnumero($numero)
            ->setbairro($bairro)
            ->setcidade($cidade)
            ->setuf($uf)
            ->setClassificaCliente($classificaCliente)
            ->setlimitecredito($limitecredito);  
   
}


//print_r($arrayClientes);
//die();

