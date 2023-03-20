<?php
    class Database {
        private $host = "localhost";
        private $username = "username";
        private $password = "password";
        private $database = "database_name";
        private $pdo;
        private $message;
    
        public function __construct() {
            try {
                $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $this->message = $this->getEstadoConexao();
            } catch (PDOException $e) {
                $this->message = "Failed to connect to database: " . $e->getMessage();
            }
        }
    
        public function executeQuery($query, $params = array()) {
            try {
                $statement = $this->pdo->prepare($query);
                $statement->execute($params);
                return $statement;
            } catch (PDOException $e) {
                die("Failed to execute query: " . $e->getMessage());
            }
        }

        public function getEstadoConexao() {
            if ($this->pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS) == 'Connection OK') {
                return "Conexão bem-sucedida.";
            } else {
                return "Falha na conexão.";
            }
        }
        
        public function showMessage() {
            echo $this->message;
        }
        

        
    }
    
?>
