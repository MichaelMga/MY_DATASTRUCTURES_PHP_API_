<?php

require_once 'constants.php';

require_once 'classes/db.php';


$request = $_SERVER["REQUEST_URI"];


switch($request){

    case root :

        print_r('welcome');

        break;


}