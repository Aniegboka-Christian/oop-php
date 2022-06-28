<?php

class Dbh {

   public $hostname = "localhost";
   public $username = "root";
   public $password = "";
   public $dbname = "zuriphp";

   public function connect(){

       $db = new mysqli ($this->hostname, $this->username, $this->password, $this->dbname);
       return $db;
   }

   


}
