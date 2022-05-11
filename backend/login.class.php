<?php

    include_once 'conn.class.php';

    session_start();
    session_regenerate_id();

    class login extends conn{

        private $email;
        private $senha;

        public function get_email(){

            return $this->email;

        }

        public function get_senha(){

            return $this->senha;

        }

        public function set_email($valor){

            $this->email = $valor;

        }

        public function set_senha($valor){

            $this->senha = $valor;

        }

        public function verificar(){

            $pdo = $this->connect();

                $sql = 'SELECT *
                        FROM usuarios
                        WHERE email = :email';
                
                $pdo->prepare($sql);

                    $pdo->bindValue(':email', $this->email);

                $resultado = $pdo->execute();

            $pdo = $this->disconnect();

            if($resultado->rowCount() == 1){

                $info = $resultado->fetchAll(PDO::FETCH_ASSOC);

                if($this->senha == $info[0]['senha']){

                    $_SESSION['logado'] = true;

                    $_SESSION['nome_usuario'] = $info[0]['nome'];

                    return true;

                }else{

                    return false;

                }

            }

        }

    }

?>