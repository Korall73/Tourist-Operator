<?php

    class Model
    {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "";
        protected $mysqli;

        function __construct()
        {
            $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->database);

            if ($this->mysqli->connect_error) {
                die("Connection failed: " . $this->mysqli->connect_error);
            }
        }

        function getTours($numberPage = null)
        {
            
        }

        function getKnowledge($numberPage = null)
        {
            
        }

        function putOrders(array $POST)
        {
            
        }
    }

?>