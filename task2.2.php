<?php
    //trait for division
        trait divide{
            public function division(){
                echo"Value of division is : ";
                echo $this->a/$this->b;
            }
        }
    // declaring a class 
        class first{
            public $a ;
            public $b ;
            function __construct($c,$d){
                $this->a = $c;
                $this->b = $d;
            }
            use divide;
        }
    //using trait for division
        $result = new first(50,5);
        $result->division();
    
    ?>
    