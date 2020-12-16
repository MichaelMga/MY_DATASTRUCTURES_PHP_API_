<?php

class Database{

    private $dsn;
    private $userName;
    private $password;


    function __construct($dbName, $userName, $password){

        $this->dsn = 'mysql:dbname=' . $dbName . ';' . 'host=127.0.0.1';
        $this->userName = $userName;
        $this->password = $password;
        
    }


    public function connect(){
          
        return new PDO($this->dsn, $this->userName , $this->password );

    }



}



$dbObj = new Database('apiDB', 'root' , '' );



try{

     $db = $dbObj->connect();

     print_r('pdo connexion done </br>');


  } catch(PDOException $e){

    echo $db->errorInfo();


} 