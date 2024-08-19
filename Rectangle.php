<?php
include 'Shape.php';

class Rectangle extends Shape {
    private float $width;
    private float $length;

    public function __construct(float $width = 1.0, float $length = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($color, $filled);
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth(float $width): void {
        $this->width = $width;
    }

    public function getLength(): float {
        return $this->length;
    }

    public function setLength(float $length): void {
        $this->length = $length;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }

    public function __toString(): string {
        return "Rectangle[" . parent::__toString() . ", width=" . $this->width . ", length=" . $this->length . "]";
    }
}

?>
