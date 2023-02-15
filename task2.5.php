<?php 
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

    //creating interface for addition
    interface addition{
        function add($a,$b);

    }

    //creating interface for substraction
    interface substraction{
        function substract($c,$d);

    }

    //creating interface for multiplication
    interface multiplication{
        function product($a,$b);

    }

    //creating interface for division
    interface division{
        function divide($g,$h);

    }

    class calculator implements addition,substraction,multiplication,division{

        //creating function for addition
        public function add($a,$b){
            echo $a+$b;
        }
        //creating function for substraction
        public function substract($c,$d){
            echo $c-$d;
        }
        //creating function for multiplication
        public function product($e,$f){
            echo $e * $f;
        }
        //creating function for division
        public function divide($g, $h){
            echo $g/$h;
        }
    }

    //creating object for performing calculative operations
    $cal1 = new calculator();

    //calculative operations
    echo "Value of addition is : <br>";
    $cal1->add(10,20);
    echo "<br> Value of substraction is : <br>";
    $cal1->substract(20,10); 
    echo "<br> Value of multiplication is : <br>";
    $cal1->product(10,20); 
    echo "<br> value of division is : <br>";
    $cal1->divide(20,10);
    ?>
    

