<?php
    require '../Model/banco.php';

    class controllerListar{

        private $lista;

        public function __construct(){
            $this->lista = new Banco();
            $this->criarTabela();
        }

        private function criarTabela(){
            $row = $this->lista->getUser();
            foreach ($row as $value) {
                echo '<p>'.$value['name'].'</p>';
            }
        }
    }