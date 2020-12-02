<?php

    class Connection{
        
        private $server;
        private $user;
        private $pass;
        private $port;
        private $database;
        private $link;
        
        public function __construct(){
            $this->setConnect();
            $this->connect();
        }

        private function setConnect(){
            require_once 'conf.php';
            $this->server=$servidor;
            $this->user=$usuario;
            $this->pass=$clave;
            $this->port=$puerto;
            $this->database=$baseDatos;
        }

        private function connect(){
            $this->link=mysqli_connect($this->server, $this->user, $this->pass, $this->database);
            if (!$this->link){
                die(mysqli_errno($this->link));
            }
        }

        public function getConnect(){
            return $this->link;
        }

        public function close(){
            mysqli_close($this->link);
        }
        
    }

?>