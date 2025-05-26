<?php

    class produtos{

        private $nome;
        private $preco;
        private $quantidade;

        public function __construct($nome,$preco,$quantidade){
            $this-> nome = $nome;
            $this-> preco = $preco;
            $this-> quantidade = $quantidade;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($novonome) {
            $this->nome = $novonome;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($novopreco){
            $this->preco = $novopreco;
        }

        public function adicionarEstoque($qtd){
            $this->quantidade += $qtd;
        }
        public function removerEstoque($qtd){
            $this->quantidade -= $qtd;
        }
        public function  mostrardetalhes(){
            echo "produto: {$this->nome}<br/>";
            echo "preço: {$this->preco}<br/>";
            echo "quantidade em estoque: {$this->quantidade}<br/>";
        }
    }

?>