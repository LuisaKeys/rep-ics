<?php

class Conexao {
    private $pdo;
    
    public function __construct() {
        try{
            $db_host = 'mysql:host=127.0.0.1;port=3306;dbname=test;';
            $db_user = 'root';
            $db_pass = '';
            
            $this->pdo = new PDO($db_host, $db_user, $db_pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            } catch (Exception $e) {
                echo'<pre>';
                print_r($e);
                exit;
            }
    }
    
    public function getPDO()
    {
        return $this->pdo;
    }
    
    public function __destruct() {
        $this->pdo = null;       
    }
}
