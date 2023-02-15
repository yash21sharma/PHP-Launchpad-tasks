<?php
//declaring namespace so as to use 2 classes with same name
    namespace reverse;
    //creating class StringMagic
    class StringMagic{
        public $str;
        public function __construct($s1){
            $this->str = $s1;
            //using function to reverse the array.
            echo "Reverse of : ".$this->str."<br> -> ".strrev($s1);
        }

    }
    
    ?>
    
