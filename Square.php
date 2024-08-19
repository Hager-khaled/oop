<?php
include 'Shape.php';

class Square extends Rectangle {
    public function __construct(float $side = 1.0, string $color = "red", bool $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide(): float {
        return $this->getWidth();
    }

    public function setSide(float $side): void {
        $this->setWidth($side);
        $this->setLength($side);
    }

    public function setWidth(float $width): void {
        $this->setSide($width);
    }

    public function setLength(float $length): void {
        $this->setSide($length);
    }

    public function __toString(): string {
        return "Square[" . parent::__toString() . "]";
    }
}

?>
