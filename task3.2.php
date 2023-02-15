<?php
    //declaring namespace so as to use 2 classes with same name
    namespace split;
    //creating class 
    class StringMagic{
        public $str;
        public function __construct($s){
            $this->str = $s;
            echo"<br>";
            echo "Conveting string into array : ".$this->str."<br>";
            //using str_split function to split the given string into array
            print_r(str_split($s,1));

        }
    }
    ?>
    
