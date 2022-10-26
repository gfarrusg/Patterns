<?php

class Duck {

    public function quack() {
       echo "Quack \n";
    }

    public function fly() {
       echo "I'm flying \n";
    }
}

class Turkey {

    public function gobble() {
       echo "Gobble gobble \n";
    }

    public function fly() {
        echo "I'm flying a short distance \n";
    }
}

    class TurkeyAdapter extends Duck{
        private $turkey;

        public function __construct(Turkey $turkey){
            $this -> turkey = $turkey;

        }

        public function quack(){
            echo "Gobble gobble \n";
        }

        public function fly(){
            for($i = 0; $i < 5; $i++){
                    parent::fly();
            }  
        }

    }

function duck_interaction($duck) {
       $duck -> quack();
       $duck -> fly();
}

$duck = new Duck;
$turkey = new Turkey;

$turkey_adapter = new TurkeyAdapter($turkey);

echo "<br />The Turkey says...\n";
$turkey->gobble();
$turkey->fly();

echo "<br />The Duck says...\n";
duck_interaction($duck);

echo "<br />The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);


?>