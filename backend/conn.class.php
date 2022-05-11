<?php

    class conn{

        public function connect(){

            $usuario = 'root';
            $senha = '';
            $dbname = 'cardapio_if';
            $host = 'localhost';

            $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $usuario, $senha);

            return $pdo;

        }

        public function disconnect(){

            return null;

        }

    }

?>