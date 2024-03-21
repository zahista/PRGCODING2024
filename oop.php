<?php

class Animal
{
    public $number_of_legs = 4;

    public function make_sound()
    {
        echo "haf haf haf";
    }
}

class Dog extends Animal
{
    private $memories = "jsem vzpomínka";
    public $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function secret()
    {
        echo "Jsem tajná zpráva";
    }

    public function make_sound()
    {
        echo "haf haf";
    }
}

class Spider extends Animal
{
    public $number_of_legs = 8;
    private $memories = "jsem vzpomínka pavouka";

    private function secret()
    {
        echo "Jsem tajná zpráva";
    }
}

class Math 
{
    public static function substract(int $number1, int $number2)
    {
        return $number1 - $number2;
    }
}


"zastekej";

$dog1 = new Dog("Buddy");
$dog2 = new Dog("Ferda");
$dog3 = new Dog("Azor");
$dog1->make_sound();
$dog2->make_sound();

$animals = 
[
    'controller' => Dog::class,
    'callback'=> 'make_sound'
];





echo $dog1->name;
echo $dog2->name;

(new Dog("Ben"))->make_sound();


$result = Math::substract(3, 5);
var_dump(Math::substract(16, 3));
echo Math::substract(16, 3);








