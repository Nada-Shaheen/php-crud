<?php 

class parents{

    private $name;

    public function setName($x){
        $this->name =$x;
        return $this;
    }

    public function getName(){

        return $this->name;
    }

    function __construct($x){
        echo "constructor".$x."<br>";
    }
    public function eat(){
        echo "eat <br>";
    }

    public function drink(){
        echo "drinking <br>";
    }
    public function swim(){
        echo "swimming <br>";
    }

    function __destruct(){
        echo "destruct <br>";
    }
    public function drive(){
        echo "very slow";
    }
}

class child extends parents{
    public function drive(){
        echo "very fast";
    }

    //NO OVERLOAD IN PHP
}

$ahmed = new parents(1);//object
$ahmed ->eat();
$ahmed->swim();
$ahmed->setName("ahmed");
echo $ahmed->getName()."<br>";
$ahmed->drive();
echo "<br>";

$nada= new child(2);
 $nada->eat();
 $nada->drink();
 $nada->swim();
 $nada->drive();
 echo "<br>";

?>