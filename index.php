<?php

require_once 'constants.php';
require_once 'classes/db.php';
require_once 'controllers/api.php';

$request = $_SERVER["REQUEST_URI"]; 


switch($request){

    case root :

        print_r('welcome');

        break;
        
}



if(isset($_GET['apiObject'])){

    echo 'you are connected to the api';
    //getExercice($_GET['section'], $_GET['questionNum']);

    getExercice('linked_lists' , 1);

}


