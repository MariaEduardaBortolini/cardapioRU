<?php

    include_once 'conn.class.php';

    class cardapio extends conn{

        private $ingr_id;
        private $ingr_nome;
        private $ingr_descr;
        private $ingr_calorias;

        private $item_id;
        private $item_nome;
        private $item_descr;
        private $item_ingr;

        // get ingredientes
        public function get_ingr_id(){
            return $this->ingr_id;
        }

        public function get_ingr_nome(){
            return $this->ingr_nome;
        }

        public function get_ingr_descr(){
            return $this->ingr_descr;
        }

        public function get_ingr_calorias(){
            return $this->ingr_calorias;
        }

        // get itens
        public function get_item_id(){
            return $this->item_id;
        }

        public function get_item_nome(){
            return $this->item_nome;
        }

        public function get_item_descr(){
            return $this->item_descr;
        }

        public function get_item_ingr(){
            return $this->item_ingr;
        }

        // set ingredientes
        public function set_ingr_id($valor){
            $this->ingr_id = $valor;
        }

        public function set_ingr_nome($valor){
            $this->ingr_nome = $valor;
        }

        public function set_ingr_descr($valor){
            $this->ingr_descr = $valor;
        }

        public function set_ingr_calorias($valor){
            $this->ingr_calorias = $valor;
        }

        // set itens
        public function set_item_id($valor){
            $this->item_id = $valor;
        }

        public function set_item_nome($valor){
            $this->item_nome = $valor;
        }

        public function set_item_descr($valor){
            $this->item_descr = $valor;
        }

        public function set_item_ingr($valor){
            $this->item_ingr = $valor;
        }

        public function inserir_ingr(){

            $pdo = $this->connect();

            if($this->ingr_id !== null && $this->ingr_id != ''){

                $sql = 'ALTER TABLE ingredientes
                        nome = :nome, descr = :descr, calorias = :calorias
                        WHERE id = :id';

            }else{

                $sql = 'INSERT INTO ingredientes
                        (nome, descr, calorias)
                        VALUES(:nome, :descr, :calorias)';

            }

            $pdo->prepare($sql);

                $pdo->bindValue(':nome', $this->ingr_nome);
                $pdo->bindValue(':descr', $this->ingr_descr);
                $pdo->bindValue(':calorias', $this->ingr_calorias);

                if($this->ingr_id !== null && $this->ingr_id != ''){

                    
                $pdo->bindValue(':id', $this->ingr_id);
                
                }

            $pdo->execute();
                
            $pdo = $this->disconnect();

        }

        public function excluir_ingr(){

            $pdo = $this->connect();

                if($this->ingr_id !== null && $this->ingr_id != ''){

                    $sql = 'DELETE FROM ingredientes
                            WHERE id = :id';

                }

                $pdo->prepare($sql);
                        
                    $pdo->bindValue(':id', $this->ingr_id);
                    
                $pdo->execute();
                
            $pdo = $this->disconnect();

        }

        public function ler_ingr(){

            $pdo = $this->connect();

                if($this->ingr_id !== null && $this->ingr_id != ''){

                    $sql = 'SELECT * FROM ingredientes
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM ingredientes';

                }

                $pdo->prepare($sql);
                    
                    if($this->ingr_id !== null && $this->ingr_id != ''){

                        $pdo->bindValue(':id', $this->ingr_id);
                    
                    }
                    
                $pdo->execute();
                
            $pdo = $this->disconnect();

        }

    }

?>