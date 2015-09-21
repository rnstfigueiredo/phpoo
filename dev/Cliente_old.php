<?php
require_once(__DIR__.'/Pessoa.php');
require_once(__DIR__.'/PessoaInterface.php');

/*

Tipos de clientes
Agora que você já tem seu cadastro de cliente, 
 * você deverá também aceitar clientes Pessoa Jurídica em sua listagem.
Não se esqueça de trabalhar com os modificadores de acesso e os getters e setters.
No momento da listagem dos clientes, você deve indicar em uma das colunas se o cliente é pessoa física ou jurídica.
Ambos os tipos devem implementar uma interface onde seja possível classificar 
o grau de importância do cliente para a empresa (ex: cliente 1,2,3,5 estrelas).
Você também terá a opção de criar clientes que utilizão endereço específico de cobrança, 
nesse caso, crie uma interface para que esses tipos de clientes possam implementar.

 */



class Cliente extends Pessoa implements PessoaInterface
{
    private $endereco;
    private $numero;
    private $bairro;
    private $cidade;
    private $uf;
    private $limitecredito;
    private $classificaCliente;
    
    
    public function getEndereco() {
        return $this->endereco;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getUf() {
        return $this->uf;
    }

    public function getLimitecredito() {
        return $this->limitecredito;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
        return $this;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
        return $this;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
        return $this;
    }

    public function setUf($uf) {
        $this->uf = $uf;
        return $this;
    }

    public function setLimitecredito($limitecredito) {
        $this->limitecredito = $limitecredito;
        return $this;
    }

    public function getClassificaCliente() {
        return $this->classificaCliente;
    }

    public function setClassificaCliente($classificaCliente) {
        $this->classificaCliente = $classificaCliente;
        return $this;
    }
    
    
    public function getTipoPessoa() {
        return $this->tipoPessoa;
    }

    public function setTipoPessoa($tipoPessoa) {
        $this->tipoPessoa = $tipoPessoa;
        return $this;
    }
    
    
}
