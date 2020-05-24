<?php

    class Lutador {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $peso;
        private $altura;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        function apresentar(){
            echo "<p>------------------------------------</p>";
            echo "<p>CHEGOU A HORA! O lutador  {$this->getNome()}
             veio diretamente de {$this->getNacionalidade()}
             tem {$this->getIdade()} anos e pesa {$this->getPeso()} Kg
             <br>Ele tem {$this->getVitorias()} vitorias
             {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates</p>";

        }
        function status(){
            echo "<p>------------------------------------</p>";
            echo "<p> {$this->getNome()} e um peso {$this->getCategoria()} 
              e ja ganhou {$this->getVitorias()} vezes, 
              perdeu {$this->getDerrotas()} vezes e empatou {$this->getEmpates()} vezes!</p>";
        }
        function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }

        public function __construct($no, $na, $id, $pe, $al, $vi, $de, $em)
        {
            $this->nome = $no;
            $this->nacionalidade = $na;
            $this->idade = $id;
            $this->setPeso($pe);
            $this->altura = $al;
            $this->vitorias = $vi;
            $this->derrotas = $de;
            $this->empates = $em;
        }

        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }
        function getNacionalidade(){
            return $this->nacionalidade;
        }
        function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        function getIdade(){
            return $this->idade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        function getPeso(){
            return $this->peso;
        }
        function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();
        }
        function getCategoria(){
            return $this->categoria;
        }
        function setCategoria(){
            if ($this->peso < 52.3){
                $this->categoria = "Invalido";
            }elseif ($this->peso <= 70.3){
                $this->categoria = "Leve";
            }elseif ($this->peso <= 83.9){
                $this->categoria = "Medio";
            }elseif ($this->peso <= 120.2){
                $this->categoria = "Pesado";
            }else {
                $this->categoria = "Invalido";
            }
        }
        function getAltura(){
            return $this->altura;
        }
        function setAltura($altura){
            $this->altura = $altura;
        }
        function getVitorias(){
            return $this->vitorias;
        }
        function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }
        function getDerrotas(){
            return $this->derrotas;
        }
        function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }
        function getEmpates(){
            return $this->empates;
        }
        function setEmpates($empates){
            $this->empates = $empates;
        }
    }