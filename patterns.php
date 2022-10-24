<?php

class Tigger{
    
    private static $instance;
    private static $numRoars;

    private function __construct(){
        
        echo "Building character..." .PHP_EOL.'<br />';
    }

    public function roar(){
        
        echo "Grrr!" .PHP_EOL;
        self:: $numRoars ++;
    }

    public static function getInstance(){
       
        if (!isset (self:: $instance)){
            self:: $instance = new Tigger;
            self:: $numRoars = 0;
        }
        return self:: $instance;
    }
    public static function getCounter(){
        
        return self:: $numRoars;
    }


}

$tigger = Tigger:: getInstance();
$tigger -> roar();
$tigger -> roar();
$tigger -> roar();
echo "Numbered roars: ". Tigger:: getCounter() .PHP_EOL.'<br />';

$tigger2 = Tigger:: getInstance();
$tigger2 -> roar();
$tigger2 -> roar();
echo "Numbered roars: ". Tigger:: getCounter() .PHP_EOL.'<br />';

$tigger3 = Tigger:: getInstance();
$tigger3 -> roar();
echo "Numbered roars: ". Tigger:: getCounter() .PHP_EOL.'<br />';

?>