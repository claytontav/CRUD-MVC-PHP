<?php
    require '../init.php';

    class Banco{

        protected $pdo;

        public function __construct(){
            $this->conexao();
        }

        private function conexao(){
            $this->pdo = new PDO('mysql:host='.BD_HOST.';dbname='.BD_NAME.';charset=utf8', BD_USER, BD_PASS);
        }

        public function setUser($name, $age){
            $sql = "INSERT INTO register (name, age) VALUES (:n, :a)";
            $cmd = $this->pdo->prepare($sql);
            $cmd->bindValue(':n', $name);
            $cmd->bindValue(':a', $age);
            if( $cmd->execute() == true){
                return true ;
            }else{
                return false;
            }
        }

        public function getUser(){
            $sql = "SELECT * FROM register";
            $cmd = $this->pdo->prepare($sql);
            $cmd->execute();
            while ($row = $cmd->fetch(PDO::FETCH_ASSOC)) {
                $array[] = $row;
            }
            return $array;
        }
    }