<?php
    //Creationg a class calculate with sum and susbtract methods in it.
    class calculate{
        public $a, $b, $c;

        //Creating a method sum() for addition purpose.
        function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;}

        //Creating a method substract() for substraction purpose.
        function substract(){
            $this->c = $this->a - $this->b;
            return $this->c;
        }
    }

    //Creating new object c1 and passing values in a and b through it.
    $c1 = new calculate();
    $c1->a = 50;
    $c1->b = 30;
    
    //Creating new object c2 and passing values in a and b through it.
    $c2 = new calculate();
    $c2->a = 100;
    $c2->b = 50;

    //Printing value of addition on screen.
    echo "Value of addition is : ". $c1->sum(). "<br>";

    //Printing value of substraction on screen.
    echo "Value of substraction is : ".$c2->substract();


    ?>
    