<?php
require_once 'motorindex.php';

//print_r($_SESSION['listaCliente'][0]->getEndereco());




$id = $_POST['ID'];


 $dados['endereco'] = $arrayClientes[$id]->getEndereco();
 $dados['numero'] = $arrayClientes[$id]->getnumero();
$dados['bairro'] = $arrayClientes[$id]->getbairro();
$dados['cidade'] = $arrayClientes[$id]->getcidade();
$dados['uf'] = $arrayClientes[$id]->getuf();
$dados['limitecredito'] = $arrayClientes[$id]->getlimitecredito();
$dados['nome'] = $arrayClientes[$id]->getnome();
$dados['cadastroGeralPessoa'] = $arrayClientes[$id]->getcadastroGeralPessoa();
$dados['dtNascimento'] = $arrayClientes[$id]->getDtNascimento();
$dados['idade'] = $arrayClientes[$id]->getIdade();
$dados['nacionalidade'] = $arrayClientes[$id]->getNacionalidade();
         

echo json_encode($dados);