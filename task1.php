<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    // function to get query parameter
    function queryParameter(){
        $param = isset($_GET['test']) ? $_GET['test'] : 'null';
    }

    // function to get length of string
    function stringLength($param){
        $length = strlen($param);
    }
    
    // function to check whether the length of string is equal, greater than or less than 2
    function checkLength($length,$param){
        if($length < 2)
        {
            smallerLength($param);        
        }
        elseif($length >= 2 && false === strpos(trim($param), ' '))
        {
            noSpaces($param);
        }
        elseif($length > 2 && strpos(trim($param), ' ') > 0)
        {
            Spaces($param);
        }
        else
        {
            echo "Could not understand the string";
        }
    }

    //function for length < 2
    function smallerLength($param){
        $upperCaseString = strtoupper($param);
        echo $upperCaseString;
    }

    //function for length >= 2 and no spaces
    function noSpaces($param){
        $lowerCaseString = strtolower($param);
        echo $lowerCaseString;
    }
    
    //function for length > 2 and spaces
    function Spaces($param){
        $sentenceCaseString = ucfirst(strtolower($param));
        echo $sentenceCaseString;
    }
    
    ?>
