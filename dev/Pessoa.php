<?php
/*

Cadastro de clientes

- Crie uma classe com os principais atributos que um cliente deve ter, como nome, cpf, endereço, etc.

- Crie um array de objetos de clientes, com 10 clientes dentro.

- Crie uma página e faça a listagem geral dos clientes. Quando clicar sobre o cliente, você deverá mostrar os dados específicos do cliente selecionado.

- Nessa listagem você também deverá ter a opção de ordenar os clientes pelo seu índice de forma ascendente e descendente.

Não se esqueça de caprichar na interface utilizando o twitter bootstrap.

  */



class Pessoa {
    
    protected $nome;
    protected $cadastroGeralPessoa;
    protected $dtNascimento;
    protected $idade;
    protected $nacionalidade;
    
    public function getNome() {
        return $this->nome;
    }

    public function getCadastroGeralPessoa() {
        return $this->cadastroGeralPessoa;
    }

    public function getDtNascimento() {
        return $this->dtNascimento;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setCadastroGeralPessoa($cadastroGeralPessoa) {
        $this->cadastroGeralPessoa = $cadastroGeralPessoa;
        return $this;
    }

    public function setDtNascimento($dtNascimento) {
        $this->dtNascimento = $dtNascimento;
        return $this;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
        return $this;
    }


            
    
}
