<?php
include 'Shape.php';

class Circle extends Shape {
    private float $radius;

    public function __construct(float $radius = 1.0, string $color = "red", bool  $filled = true) {
        parent::__construct($color, $filled);
        $this->radius = $radius;
    }

    public function getRadius(): float {
        return $this->radius;
    }

    public function setRadius(float $radius): void {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter(): float {
        return 2 * pi() * $this->radius;
    }

    public function __toString(): string {
        return "Circle[" . parent::__toString() . ", radius=" . $this->radius . "]";
    }
}

?>
