<?php


class Conexao{
    private $host = 'localhost';
    private $dbName = 'enderecoscep';
    private $user = 'root';
    private $password = '';
    
    public function conectarPDO(){
        try{
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbName",
                $this->user,
                $this->password
            );
            return $conexao;
        }catch(PDOException $e){
            echo '<p>' .$e->getMessage() . '<p>';
            return null;
        }
    }
}