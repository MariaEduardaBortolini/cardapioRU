<?php

    include_once 'conn.class.php';

    class cardapio extends conn{
    
        // variaveis dos ingredientes
        private $ingr_id;
        private $ingr_nome;
        private $ingr_descr;
        private $ingr_calorias;

        // variaveis dos intens
        private $item_id;
        private $item_nome;
        private $item_descr;
        private $item_ingr;

        // gets ingredientes
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

        // gets itens
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

        // sets ingredientes
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

        // sets itens
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
    
        // crud dos ingredientes
        
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
        
        public function busca_ingr($pesquisa){

            $pdo = $this->connect();

                if($pesquisa != ''){

                    $sql = 'SELECT * FROM ingredientes
                            WHERE nome = :pesquisa
                            OR descr = :pesquisa';

                }else{

                    $sql = 'SELECT * FROM ingredientes';

                }

                $pdo->prepare($sql);
                    
                    if($pesquisa != ''){

                        $pdo->bindValue(':pesquisa', $pesquisa);
                    
                    }
                    
                $pdo->execute();
                
            $pdo = $this->disconnect();

        }
        
        // crud dos itens
        
        public function inserir_item(){

            $pdo = $this->connect();

                if($this->item_id !== null && $this->item_id != ''){

                    $sql = 'ALTER TABLE itens
                            nome = :nome, descr = :descr, ingr = :ingr
                            WHERE id = :id';

                }else{

                    $sql = 'INSERT INTO itens
                            (nome, descr, ingr)
                            VALUES(:nome, :descr, :ingr)';

                }

                $pdo->prepare($sql);

                    $pdo->bindValue(':nome', $this->item_nome);
                    $pdo->bindValue(':descr', $this->item_descr);
                    $pdo->bindValue(':ingr', $this->item_ingr);

                    if($this->item_id !== null && $this->item_id != ''){

                        $pdo->bindValue(':id', $this->item_id);

                    }

                $pdo->execute();
                
            $pdo = $this->disconnect();

        }

        public function excluir_item(){

            $pdo = $this->connect();

                if($this->item_id !== null && $this->item_id != ''){

                    $sql = 'DELETE FROM itens
                            WHERE id = :id';

                }

                $pdo->prepare($sql);
                        
                    $pdo->bindValue(':id', $this->item_id);
                    
                $pdo->execute();
                
            $pdo = $this->disconnect();

        }

        public function ler_item(){

            $pdo = $this->connect();

                if($this->item_id !== null && $this->item_id != ''){

                    $sql = 'SELECT * FROM itens
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM itens';

                }

                $pdo->prepare($sql);
                    
                    if($this->item_id !== null && $this->item_id != ''){

                        $pdo->bindValue(':id', $this->item_id);
                    
                    }
                    
                $pdo->execute();
                
            $pdo = $this->disconnect();

        }
        
        public function busca_item($pesquisa){

            $pdo = $this->connect();

                if($pesquisa != ''){

                    $sql = 'SELECT * FROM itens
                            WHERE nome = :pesquisa
                            OR descr = :pesquisa';

                }else{

                    $sql = 'SELECT * FROM itens';

                }

                $pdo->prepare($sql);
                    
                    if($pesquisa != ''){

                        $pdo->bindValue(':pesquisa', $pesquisa);
                    
                    }
                    
                $pdo->execute();
                
            $pdo = $this->disconnect();

        }
        
    }

?>
