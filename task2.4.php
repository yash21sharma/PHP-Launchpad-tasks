<?php

    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    //creating base class with constuctor
    class calculator{
        public $a;
        public $b;
        function __construct($x,$y){
            $this->a = $x;
            $this->b = $y;
        }
    }
    //creating derived class for addition
    class addition extends calculator{
        public function add(){
            echo $this->a + $this->b;
        }
    }
    //creating derived class for difference
    class substraction extends calculator{
        public function substract(){
            echo $this->a - $this->b;
        }
    }
    //creating derived class for product
    class multiplication extends calculator{
        public function product(){
            echo $this->a * $this->b;
        }
    }
    //creating derived class for division
    class division extends calculator{
        public function divide(){
            echo $this->a/$this->b;
        }
    }
    //creating objects for calculation operation
    $cal1 = new addition(50,30);
    $cal2 = new substraction(100,50);
    $cal3 = new multiplication(10,20);
    $cal4 = new division(200,100);
    
    //calling methods through objects
    echo "Value of addition is :<br>";
    $cal1->add();
    echo "<br>Vale of difference is <br>";
    $cal2->substract();
    echo "<br>Value of product is :<br>";
    $cal3->product();
    echo "<br>Value of division is :<br>";
    $cal4->divide();

    ?>


