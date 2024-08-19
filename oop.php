<?php

class Circle {
    private float $radius;
    private string $color;

    public function __construct(float $radius = 1.0, string $color = "red") {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }
}

$circle = new Circle(3.5, "blue");
echo "Radius: " . $circle->getRadius(); 
echo "Area: " . $circle->getArea(); 




?>