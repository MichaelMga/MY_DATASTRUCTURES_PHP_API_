<?php

    function getExercice($section, $exerciceNum){
        

        global $db;


        try{
        
            $sql = "SELECT * FROM `linked_lists` WHERE id=:exerciceNum";


            //"SELECT * FROM `linked_lists` WHERE id=1

            

            $stmt = $db->prepare($sql);    

            $stmt->execute([':exerciceNum' => $exerciceNum]);


            echo 'api request done!</br></br>'; 

            $result = $stmt->fetchAll();

            $num = $result[0][0];
            $name = $result[0][1];
            $wording = $result[0][2];
            $answer = $result[0][3];

            echo json_encode([ 'questionNumber' => $num , 'questionName' => $name , 'wording' => $wording , $answer => 'answer']);
            
        }catch(PDOException $e){

            print_r($e->errInfo());
        }

    }

