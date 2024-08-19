<?php

class Shape {
    private string $color;
    private bool $filled;

    public function __construct(string $color = "red", bool $filled = true) {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $green;
    }

    public function isFilled(): bool {
        return $this->filled;
    }

    public function setFilled(bool $filled): void {
        $this->filled = $filled;
    }

    public function __toString(): string {
        return "Shape[color=" . $this->color . ", filled=" . ($this->filled ? "true" : "false") . "]";
    }
}

?>
