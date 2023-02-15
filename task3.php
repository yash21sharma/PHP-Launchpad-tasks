

    <?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
// including both the php files
    require 'task3.1.php';
    require 'task3.2.php';
// creating objects to use the required functionalities.
    $obj1 = new reverse\StringMagic("This is Task 3");
    $obj2 = new split\StringMagic("This is Task 3");
    ?>
    