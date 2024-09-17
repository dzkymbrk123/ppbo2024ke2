<?php

abstract class kendaraan {
    protected $name;
    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function startEngine();
    public function getName() {
        return $this->name;
    }
}

class Mobil extends kendaraan{
    public function startEngine() {
        return "Mesin mobil " . $this->name . " dinyalakan!";
    }
}

class Motor extends kendaraan{
    public function startEngine() {
        return "Mesin motor " . $this->name . " dinyalakan!";
    }
}

$Mobil = new Mobil("Toyota");
echo $Mobil->startEngine(); 
echo "<br>";
$Motor = new Motor("Honda");
echo $Motor->startEngine();
?>
