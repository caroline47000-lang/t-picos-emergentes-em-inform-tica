<?php

class Temperatura {
    private $celsius;

    public function __construct($celsius) {
        $this->celsius = $celsius;
    }

    public function getCelsius() {
        return $this->celsius;
    }

    public function setCelsius($celsius) {
        $this->celsius = $celsius;
    }

    public function paraFahrenheit() {
        return ($this->getCelsius() * 9 / 5) + 32;
    }

    public function paraKelvin() {
        return $this->getCelsius() + 273.15;
    }
}

$valoresParaTestar = [0, 100, 37];

foreach ($valoresParaTestar as $val) {
    $temp = new Temperatura($val);
    
    echo "Celsius: " . $temp->getCelsius() . "°C\n";
    echo "Fahrenheit: " . $temp->paraFahrenheit() . "°F\n";
    echo "Kelvin: " . $temp->paraKelvin() . "K\n";
    echo "----------------------------------------\n";
}
?>