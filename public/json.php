<?php
require_once 'motorindex.php';

//print_r($_SESSION['listaCliente'][0]->getEndereco());



$id = $_POST['ID'];


 $dados['cpf'] = $arrayClientes[$id]->getEndereco();
 $dados['GrauImportacia'] = $arrayClientes[$id]->getGrauImportacia();
$dados['endCobranca'] = $arrayClientes[$id]->getEnderecoCobranca();
$dados['nome'] = $arrayClientes[$id]->getnome();
$dados['telefone'] = $arrayClientes[$id]->getTelefone();
$dados['endereco'] = $arrayClientes[$id]->getEndereco();
$dados['enderecoCobranca'] = $arrayClientes[$id]->getEnderecoCobranca();

         

echo json_encode($dados);