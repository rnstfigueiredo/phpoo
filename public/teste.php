<?php
require_once(__DIR__.'../../dev/PessoaFisica.php');
require_once(__DIR__.'../../dev/PessoaJuridica.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$clientes = array(new PessoaFisica(), new PessoaJuridica());


var_dump($clientes);
die();


foreach($clientes as $cliente) {
      echo ($cliente instanceof PessoaFisica) ? $cliente->getCpf() : $cliente->getCnpj();
}