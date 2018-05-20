<?php

namespace db1597568;

class dataSource {
    
    private $host;
    private $user;
    private $pass;
    private $database;
    private $port;
    private $conn;
    private $dataQuery;


    public function __construct($host, $user, $pass, $database,$port) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->database = $database;
        $this->port = $port;
        $this->getConection();
    }

        private function getConection(){
            $this->conn = mysqli_connect("p:{$this->host}", $this->user, $this->pass, $this->database, $this->port);
        }
        
        public function query($sql){
            $this->dataQuery = mysqli_query($this->conn, $sql) ;
        }
        
        public function getData(){
            return mysqli_fetch_assoc($this->dataQuery);
        }
        
        public function execute($sql){
            mysqli_query($this->conn, $sql);
        }
}
