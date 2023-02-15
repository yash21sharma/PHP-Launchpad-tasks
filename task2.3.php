<?php
    //trait for addition
    trait addition{
        public function add(){
            echo "Value of sum is : ".$this->a+$this->b."<br>";
        }
    }
    //trait for multiplication
    trait multiplication{
        public function multiply(){
            echo "Value of product is : ".$this->a*$this->b."<br>";
        }
    }
    //trait for division
    trait division{
        public function divide(){
            echo "Value of division is : ".$this->a/$this->b."<br>";        
        }
    }
    //base class for declaring constructor
    class base {
        public $a;
        public $b;
        function __construct($c,$d){
            $this->a = $c;
            $this->b = $d;
        }
    }
    //using derived class for calling traits
    class derived extends base{
        use addition, multiplication, division;
    }
    //declaring object
    $calculate = new derived(200,10);

    //using traits functionality for calculation
    $calculate->add();
    $calculate->multiply();
    $calculate->divide();

    ?>
