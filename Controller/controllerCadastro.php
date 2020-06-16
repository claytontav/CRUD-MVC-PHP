<?php
    require '../Model/cadastroUser.php';

    class controllerCadastro{

        private $cadastro;

        public function __construct(){
            $this->cadastro = new Cadastro();
            $this->incluir();
        }

        private function incluir(){

            $nameInput = filter_input(INPUT_POST, 'name');
            $ageInput = filter_input(INPUT_POST, 'age');

            $name = htmlspecialchars(addslashes($nameInput));
            $age = htmlspecialchars(addslashes($ageInput));

            $this->cadastro->setName($name);
            $this->cadastro->setAge($age);

            $result = $this->cadastro->incluir();

            if($result > 0){
                echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'; </script>";
            }else{
                echo "<script>alert('Erro ao cadastrar!');document.location='../index.php'; </script>";
            }            
        }
    }

    new controllerCadastro();