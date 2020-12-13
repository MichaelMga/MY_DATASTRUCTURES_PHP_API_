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


     //create structure of the API table :

     //stacks and queues

     //linked lists

     $sql = 'INSERT INTO hashes(question_name, wording, answer) VALUES("hashes question" , "vous avez face à vous une pile de documents, et vous devez les organiser. Si tu avais 5 papiers sur cette pile, et que tu enlève 3 couches , quel résultat obtiens tu?" , "3")';
     $stmt = $db->prepare($sql);
     $stmt->execute();

     //so we simply have : for each domain, a row per question with : l'énoncé , the answer. thats it. 

     //so, there will be a table 'domains'; which will be joined by each of the domain table on its primary key.


  } catch(PDOException $e){

    echo $db->errorInfo();


} 