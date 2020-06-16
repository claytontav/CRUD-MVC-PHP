<?php   

    require 'banco.php';

    class Cadastro extends Banco{
        private $name;
        private $age;

        public function setName($string){
            $this->name = $string;
        }

        public function getName(){
            return $this->name;
        }

        public function setAge($string){
            $this->age = $string;
        }

        public function getAge(){
            return $this->age;
        }

        public function incluir(){
            return $this->setUser($this->getName(), $this->getAge());
        }
    }