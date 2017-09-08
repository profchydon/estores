<?php

    /**
     *  Database class creates connection to the Database
     */
    class Database
    {

        private $dsn;

        private $pdo;

        public function createConnection()
        {

            $this->dsn = 'mysql:host=localhost;dbname=estores'; //creates connection to the Database

            return new PDO($this->dsn, 'root', '');

        }

    }

 ?>
