<?php
interface Animal
{
    public function makingSound();
}

class Cat implements Animal
{
    public function makingSound()
    {
        echo "Cat is making sound : Meow!!! Meow!!!" . "<br>";
    }
}

class Dog implements Animal
{
    public function makingSound()
    {
        echo "Dog is making sound : Woof!!! Woof!!!" . "<br>";
    }
}

class Sheep implements Animal
{
    public function makingSound()
    {
        echo "Sheep is making sound : Baaah!!! Baaah!!!" . "<br>";
    }
}
$catSounds = new Cat();
$dogSounds = new Dog();
$sheepSounds = new Sheep();

$catSounds->makingSound();

$dogSounds->makingSound();

$sheepSounds->makingSound();
