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
    $endereco = "Rua ".(100+$i);
    $numero = $i;
    $bairro = "Jardim";
    $cidade = "SP";
    $uf = "SP";
    $limitecredito = 10+$i;
    
    $arrayClientes[$i]->setNome($nome)
            ->setCadastroGeralPessoa($cadastroGeralPessoa)
            ->setDtNascimento($dtNascimento)
            ->setIdade($idade)
            ->setNacionalidade($nacionalidade)
            ->setendereco($endereco)
            ->setnumero($numero)
            ->setbairro($bairro)
            ->setcidade($cidade)
            ->setuf($uf)
            ->setlimitecredito($limitecredito);  
   
}




