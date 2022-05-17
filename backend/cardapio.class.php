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
        
        // variaveis dos cardapios
        private $card_id;
        private $card_tipo;
        private $card_dia;
        private $card_nutri;

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
        
        // gets cardapios
        public function get_card_id(){
            return $this->card_id;
        }

        public function get_card_tipo(){
            return $this->card_tipo;
        }

        public function get_card_dia(){
            return $this->card_dia;
        }

        public function get_card_nutri(){
            return $this->card_nutri;
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
        
        // sets cardapios
        public function set_card_id($valor){
            $this->card_id = $valor;
        }

        public function set_card_tipo($valor){
            $this->card_tipo = $valor;
        }

        public function set_card_dia($valor){
            $this->card_dia = $valor;
        }

        public function set_card_nutri($valor){
            $this->card_nutri = $valor;
        }
    
        // crud dos ingredientes
        
        public function inserir_ingr(){

            $pdo = $this->connect();

                if($this->ingr_id !== null && $this->ingr_id != ''){

                    $sql = 'UPDATE ingredientes
                            SET nome = :nome, descr = :descr, calorias = :calorias
                            WHERE id = :id';

                }else{

                    $sql = 'INSERT INTO ingredientes
                            (nome, descr, calorias)
                            VALUES(:nome, :descr, :calorias)';

                }

                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':nome', $this->ingr_nome);
                    $resultado->bindValue(':descr', $this->ingr_descr);
                    $resultado->bindValue(':calorias', $this->ingr_calorias);

                    if($this->ingr_id !== null && $this->ingr_id != ''){

                        $resultado->bindValue(':id', $this->ingr_id);

                    }

                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function excluir_ingr(){

            $pdo = $this->connect();

                if($this->ingr_id !== null && $this->ingr_id != ''){

                    $sql = 'DELETE FROM ingredientes
                            WHERE id = :id';

                }

                $resultado = $pdo->prepare($sql);
                        
                    $resultado->bindValue(':id', $this->ingr_id);
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function listar_ingr(){

            $pdo = $this->connect();

                if($this->ingr_id !== null && $this->ingr_id != ''){

                    $sql = 'SELECT * FROM ingredientes
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM ingredientes';

                }

                $resultado = $pdo->prepare($sql);
                    
                    if($this->ingr_id !== null && $this->ingr_id != ''){

                        $resultado->bindValue(':id', $this->ingr_id);
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

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

                $resultado = $pdo->prepare($sql);
                    
                    if($pesquisa != ''){

                        $resultado->bindValue(':pesquisa', '%'.$pesquisa.'%');
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        }
        
        // crud dos itens
        
        public function inserir_item(){

            $pdo = $this->connect();

                if($this->item_id !== null && $this->item_id != ''){

                    $sql = 'UPDATE itens
                            SET nome = :nome, descr = :descr, ingr = :ingr
                            WHERE id = :id';

                }else{

                    $sql = 'INSERT INTO itens
                            (nome, descr, ingr)
                            VALUES(:nome, :descr, :ingr)';

                }

                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':nome', $this->item_nome);
                    $resultado->bindValue(':descr', $this->item_descr);
                    $resultado->bindValue(':ingr', $this->item_ingr);

                    if($this->item_id !== null && $this->item_id != ''){

                        $resultado->bindValue(':id', $this->item_id);

                    }

                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function excluir_item(){

            $pdo = $this->connect();

                if($this->item_id !== null && $this->item_id != ''){

                    $sql = 'DELETE FROM itens
                            WHERE id = :id';

                }

                $resultado = $pdo->prepare($sql);
                        
                    $resultado->bindValue(':id', $this->item_id);
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function listar_item(){

            $pdo = $this->connect();

                if($this->item_id !== null && $this->item_id != ''){

                    $sql = 'SELECT * FROM itens
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM itens';

                }

                $resultado = $pdo->prepare($sql);
                    
                    if($this->item_id !== null && $this->item_id != ''){

                        $resultado->bindValue(':id', $this->item_id);
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

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

                $resultado = $pdo->prepare($sql);
                    
                    if($pesquisa != ''){

                        $resultado->bindValue(':pesquisa', '%'.$pesquisa.'%');
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        }
        
        // crud dos cardapios
        
        public function inserir_cardapio(){

            $pdo = $this->connect();

                if($this->item_id !== null && $this->item_id != ''){

                    $sql = 'UPDATE cardapios
                            SET tipo = :tipo, dia = :dia, nutri = :nutri
                            WHERE id = :id';

                }else{

                    $sql = 'INSERT INTO cardapios
                            (tipo, dia, nutri)
                            VALUES(:tipo, :dia, :nutri)';

                }

                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':tipo', $this->card_tipo);
                    $resultado->bindValue(':dia', $this->card_dia);
                    $resultado->bindValue(':nutri', $this->card_nutri);

                    if($this->card_id !== null && $this->card_id != ''){

                        $resultado->bindValue(':id', $this->card_id);

                    }

                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function excluir_cardapio(){

            $pdo = $this->connect();

                if($this->card_id !== null && $this->card_id != ''){

                    $sql = 'DELETE FROM cardapios
                            WHERE id = :id';

                }

                $resultado = $pdo->prepare($sql);
                        
                    $resultado->bindValue(':id', $this->card_id);
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();

        }

        public function listar_cardapio(){

            $pdo = $this->connect();

                if($this->card_id !== null && $this->card_id != ''){

                    $sql = 'SELECT * FROM cardapios
                            WHERE id = :id';

                }else{

                    $sql = 'SELECT * FROM cardapios';

                }

                $resultado = $pdo->prepare($sql);
                    
                    if($this->card_id !== null && $this->card_id != ''){

                        $resultado->bindValue(':id', $this->card_id);
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        }
        
        public function busca_cardapio($pesquisa){

            $pdo = $this->connect();

                if($pesquisa != ''){

                    $sql = 'SELECT * FROM cardapios
                            WHERE tipo = :pesquisa
                            OR dia = :pesquisa';

                }else{

                    $sql = 'SELECT * FROM cardapios';

                }

                $resultado = $pdo->prepare($sql);
                    
                    if($pesquisa != ''){

                        $resultado->bindValue(':pesquisa', '%'.$pesquisa.'%');
                    
                    }
                    
                $resultado->execute();
                
            $pdo = $this->disconnect();
            
            return $resultado->fetchAll(PDO::FETCH_ASSOC);

        }
        
        // função de clonar cardápio e para verificar se a data de um cardápio já existe
        
        public function verificar_dia($dia){

            $pdo = $this->connect();

                $sql = 'SELECT *
                        FROM cardapios
                        WHERE dia = :dia';

                $resultado = $pdo->prepare($sql);

                    $resultado->bindValue(':dia', $dia);
                
                $resultado->execute();

            $pdo = $this->disconnect();
            
            if($resultado->rowCount() == 0){
                
                return true;
                
            }else{
                
                return false;
                
            }

        }

        public function clonar_cardapio($dia_antigo, $dia_atual){

            if($this->verificar_dia($dia_atual)){

                $pdo = $this->connect();
                
                    $sql = 'SELECT *
                            FROM cardapios
                            WHERE dia = :dia';

                    $resultado = $pdo->prepare($sql);

                        $resultado->bindValue(':dia', $dia_antigo);

                    $resultados = $resultado->execute();
                
                $pdo = $this->disconnect();
                
                $resultados->fetchAll(PDO::FETCH_ASSOC);
                
                foreach($resultados as $resul){
                    
                    $this->set_card_tipo($resul['tipo']);
                    $this->set_card_nutri($resul['tipo']);
                    $this->set_card_dia($dia_atual);
                    
                    $this->inserir_cardapio();
                    
                }
                
                return true;

            }else{
            
                return false;
            
            }

        }
        
    }

?>
