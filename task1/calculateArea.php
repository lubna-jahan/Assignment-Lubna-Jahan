<?php
class Shape
{
    protected $area;
}

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
        $this->calculateArea();
    }

    public function calculateArea()
    {
        $area = pi() * pow($this->radius, 2);
        echo "Area of Circle is: " . $area . "<br>";
    }
}

class Rectangle extends Shape
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
        $this->calculateArea();
    }

    public function calculateArea()
    {
        $area = $this->height * $this->width;
        echo "Area of Rectangle is: " . $area . "<br>";
    }
}

$areaCircle = new Circle(2);
$areaRectangle = new Rectangle(2, 3);
